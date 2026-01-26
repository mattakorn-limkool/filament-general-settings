<?php

namespace Joaopaulolndev\FilamentGeneralSettings\Enums;

use Joaopaulolndev\FilamentGeneralSettings\Traits\WithOptions;

enum SocialNetworkEnum: string
{
    use WithOptions;
    case LINE = 'line';
    case TIKTOK = 'tiktok';
    case FACEBOOK = 'facebook';
    case INSTAGRAM = 'instagram';
    case YOUTUBE = 'youtube';
    case TWITTER = 'x_twitter';
    case WHATSAPP = 'whatsapp';
    case LINKEDIN = 'linkedin';
    case PINTEREST = 'pinterest';
}
