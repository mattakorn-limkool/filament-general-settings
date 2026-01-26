<?php

namespace Joaopaulolndev\FilamentGeneralSettings\Forms;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Section;

class SeoFieldsForm
{
    public static function get($data): array
    {
        return [
            ViewField::make('seo_description')
                ->hiddenLabel()
                ->view('filament-general-settings::forms.components.seo-description'),
            Flex::make([
                Section::make([
                    TextInput::make('seo_title')
                        ->label(__('filament-general-settings::default.seo_title')),
                    TextInput::make('seo_keywords')
                        ->label(__('filament-general-settings::default.seo_keywords'))
                        ->helperText(__('filament-general-settings::default.seo_keywords_helper_text')),
                    Repeater::make('seo_metadata')
                        ->label(__('filament-general-settings::default.seo_metadata'))
                        ->schema([
                            TextInput::make('key')
                                ->label('Key')
                                ->required()
                                ->columnSpan(1),
                            TextInput::make('value')
                                ->label('Value')
                                ->required()
                                ->columnSpan(1),
                        ])
                        ->columns(2)
                        ->default([])
                        ->collapsible()
                        ->collapsed()
                        ->addActionLabel('Add Meta Tag'),
                ]),
                Section::make([
                    ViewField::make('seo_preview')
                        ->hiddenLabel()
                        ->view('filament-general-settings::forms.components.seo-preview', $data),
                ]),
            ]),
        ];
    }
}
