<?php

namespace Helpers;

class Http
{
    static $base = "https://localhost/project3";

    static function redirect($path, $query="")
    {
        $url = static::$base . $path;

        if($query){
            $url .= $query;
        }

        header("location: $url");
    }
}