<?php

namespace App\Http\Helpers;

class Helper
{
    public static function clearXSS($string)
    {
        $string = nl2br($string);
        $string = trim(strip_tags($string));
        $string = self::removeScripts($string);

        return $string;
    }

    public static function removeScripts($str)
    {
        $regex =
            '/(<link[^>]+rel="[^"]*stylesheet"[^>]*>)|' .
            '<script[^>]*>.*?<\/script>|' .
            '<style[^>]*>.*?<\/style>|' .
            '<!--.*?-->/is';

        return preg_replace($regex, '', $str);
    }

    public static function clearXssInput($input)
    {
        $data = array_map(function ($value) {
            return self::clearXSS($value);
        }, $input);

        return $data;
    }

    public static function uploadFile($file, $folder)
    {
        $path = $file->store($folder, 'public');
        return $path;
    }

    public static function uploadMultipleFiles($files, $folder)
    {
        $paths = [];
        foreach ($files as $file) {
            $paths[] = $file->store($folder, 'public');
        }
        return $paths;
    }
}
