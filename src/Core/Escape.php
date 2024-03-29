<?php

namespace Wepesi\Core;

class Escape{
    static function encode(string $input)
    {
        $text = $input;
        if ($input != strip_tags($input)) {
            $text = htmlentities($input, ENT_QUOTES, 'UTF-8');
        }
        return $text;
    }

    static function decode(string $input)
    {
        return html_entity_decode($input, ENT_QUOTES, 'UTF-8');
    }

    static function randomString(int $length = 8)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    static function addSlaches(string $link): string
    {
        $get_slashe = substr($link, 0, 1);
        $remove_first_element = substr($link, 1);
        if ($get_slashe == '/') {
            $link = substr(self::addSlaches($remove_first_element), 1);
        }

        return $link == '' ? $link : '/' . $link;
    }

    static function checkFileExtension($fileName)
    {
        $file_parts = pathinfo($fileName);
        return isset($file_parts['extension']) ? $fileName : $fileName . '.php';
    }
}