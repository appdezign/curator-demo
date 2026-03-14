<?php

namespace App\Filament\Resources\Pages\Schemas;

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

	            CuratorPicker::make('gallery_ids')
		            ->label('gallery')
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
