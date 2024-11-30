<?php

namespace App\Helpers;

class Langs
{

    const LOCALES = ['en', 'ru', 'fr'];

    public static function getLocale(): string
    {
        $locale = request()->segment(1, '');
        if ($locale) {
            if (in_array($locale, self::LOCALES)) {
                return $locale;
            }
        }
        return '';
    }

}
