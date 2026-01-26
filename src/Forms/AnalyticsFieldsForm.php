<?php

namespace Joaopaulolndev\FilamentGeneralSettings\Forms;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class AnalyticsFieldsForm
{
    public static function get(): array
    {
        return [
            TextInput::make('google_analytics_id')
                ->label(__('filament-general-settings::default.google_analytics_id'))
                ->placeholder('G-XXXXXXXXXX'),
            Textarea::make('posthog_html_snippet')
                ->label(__('filament-general-settings::default.posthog_html_snippet'))
                ->placeholder('<script src=\'https://app.posthog.com/123456789.js\'></script>'),
        ];
    }
}
