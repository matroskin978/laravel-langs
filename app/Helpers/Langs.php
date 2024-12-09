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

    public static function getUri($lang)
    {
        $url = url()->previous();
//        $url = str_replace(self::LOCALES, '', $url);
        $url_parse = parse_url($url);

        $url_parse['path'] = explode('/', $url_parse['path']);
        $url_parse['path'] = implode('/', array_diff($url_parse['path'],self::LOCALES));

//        $url_parse['path'] = str_replace('//', '/', $url_parse['path']);
        $uri = '';

        if ($lang != env('APP_LOCALE')) {
            $uri .= "/$lang";
        }
        $uri .= $url_parse['path'];
        if (isset($url_parse['query'])) {
            $uri .= "?" . $url_parse['query'];
        }
        return $uri;
    }

}
