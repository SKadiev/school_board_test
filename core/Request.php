<?php

namespace App\Core;

class Request {
 
    public static function uri() {
        return trim(
            parse_url($_SERVER['QUERY_STRING'], PHP_URL_PATH), '/'
        );
    }

   
    public static function method() {
        return $_SERVER['REQUEST_METHOD'];
    }
}