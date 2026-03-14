<?php

namespace App\Filament\Resources\Pages\Schemas;

use App\Filament\Components\Forms\MyCuratorPicker;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
	            ->columnSpanFull(),

	            RichEditor::make('body')
		            ->columnSpanFull(),

	            MyCuratorPicker::make('gallery_ids')
		            ->label('Gallery (updated CuratorPicker)')
		            ->columnSpanFull()
		            ->multiple()
		            ->maxItems(24)
		            ->directory('pages')
		            ->relationship('images', 'id')
		            ->orderColumn('order')
		            ->typeColumn('type')
		            ->typeValue('gallery'),

            ]);
    }
}
