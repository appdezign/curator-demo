<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class BlogForm
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
		            ->label('Gallery (original CuratorPicker)')
		            ->columnSpanFull()
		            ->multiple()
		            ->maxItems(24)
		            ->directory('blogs')
		            ->relationship('images', 'id')
		            ->orderColumn('order')
		            ->typeColumn('type')
		            ->typeValue('gallery'),

            ]);
    }
}
