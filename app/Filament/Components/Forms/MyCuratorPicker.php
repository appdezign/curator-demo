<?php

namespace App\Filament\Components\Forms;

use Awcodes\Curator\Components\Forms\CuratorPicker;

use Awcodes\Curator\Concerns\CanGeneratePaths;
use Awcodes\Curator\Concerns\CanUploadFiles;
use Awcodes\Curator\Resources\Media\MediaResource;
use Closure;
use Exception;
use Filament\Actions\Action;
use Filament\Actions\Concerns\CanBeOutlined;
use Filament\Actions\Concerns\HasSize;
use Filament\Forms\Components\Field;
use Filament\Schemas\Components\Component;
use Filament\Support\Components\Attributes\ExposedLivewireMethod;
use Filament\Support\Concerns\HasColor;
use Filament\Support\Enums\Size;
use Filament\Support\Enums\Width;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\StreamedResponse;

class MyCuratorPicker extends CuratorPicker
{

    public function relationship(string|Closure $relationshipName, string|Closure $titleColumnName, ?Closure $callback = null): static
    {
        $this->relationship = $relationshipName;
        $this->relationshipTitleColumnName = $titleColumnName;

        $this->loadStateFromRelationshipsUsing(static function (CuratorPicker $component, $state): void {
            if (filled($state)) {
                return;
            }

            $relationship = $component->getRelationship();

            if ($component->isMultiple()) {
                if ($relationship instanceof MorphMany) {
                    $typeColumn = $component->getTypeColumn();
                    $typeValue = $component->getTypeValue();

                    $query = $relationship->with('media');
                    if ($typeColumn && $typeValue) {
                        $query->where($typeColumn, $typeValue);
                    }
                    $relatedMediaItems = $query->get();

                    $relatedMedia = $relatedMediaItems->map(fn ($item) => $item->media->toArray())->toArray();

                    $component->state($relatedMedia);

                    return;
                }

                $relatedModels = $relationship->getResults();
                $component->state($relatedModels);

                return;
            }

            /** @var BelongsTo $relationship */
            $relatedModel = $relationship->getResults();

            if (! $relatedModel) {
                return;
            }

            $component->state(
                $relatedModel->getAttribute(
                    $relationship->getOwnerKeyName(),
                ),
            );
        });

        $this->saveRelationshipsUsing(static function (CuratorPicker $component, Model $record, $state): void {
            $relationship = $component->getRelationship();

            if (blank($state) && ! $relationship->exists()) {
                return;
            }

            if ($component->isMultiple()) {
                if ($relationship instanceof BelongsToMany) {
                    $orderColumn = $component->getOrderColumn();
                    if (in_array($orderColumn, $relationship->getPivotColumns())) {
                        $state = collect(array_values($state))->mapWithKeys(fn (array $item, $index): array => [$item['id'] => [$orderColumn => $index + 1]]);

                        $relationship->sync($state ?? []);

                        return;
                    }

                    $state = Arr::pluck($state, 'id');
                    $relationship->sync($state ?? []);

                    return;
                }

                if ($relationship instanceof MorphMany) {
                    $orderColumn = $component->getOrderColumn();
                    $typeColumn = $component->getTypeColumn();
                    $typeValue = $component->getTypeValue();
                    $existingItems = $relationship->where($typeColumn, $typeValue)->get()->keyBy('media_id')->toArray();
                    $newIds = collect($state)->pluck('id')->toArray();

                    $relationship->whereNotIn('media_id', $newIds)
                        ->where($typeColumn, $typeValue)
                        ->delete();

                    $i = count($existingItems) + 1;
                    foreach ($state as $item) {
                        $itemId = $item['id'];
                        $data = [
                            'media_id' => $itemId,
                            $orderColumn => $i,
                        ];
                        if (! in_array($typeValue, [null, '', '0'], true)) {
                            $data[$typeColumn] = $typeValue;
                        }
                        if (isset($existingItems[$itemId])) {

							// updated: get fresh instance
	                        $component->getRelationship()->where('media_id', $itemId)->update($data);
	                        // $relationship->where('media_id', $itemId)->update($data);

                        } else {
                            $relationship->create($data);
                        }
                        $i++;
                    }

                    return;
                }
            }

            if (blank($state) && $relationship->exists()) {
                $relationship->disassociate();

                return;
            }

            $relationship->associate(Arr::first($state)['id']);
            $record->save();
        });

        $this->dehydrated(fn (CuratorPicker $component): bool => ! $component->isMultiple());

        return $this;
    }


}
