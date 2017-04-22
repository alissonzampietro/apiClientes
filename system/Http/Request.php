<?php

namespace System\Http;

class Request {
    
    private static $typeEncodeResponse;
    
    public function __construct()
    {
        self::$typeEncodeResponse = $_SERVER['HTTP_ACCEPT'];
    }
    
    public static function getRequiredEncodeResponse(){
        return self::$typeEncodeResponse;
    }
}