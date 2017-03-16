<?php

namespace System\Http;

class Request {
    
    private $typeEncodeResponse;
    
    public function __construct()
    {
        $this->typeEncodeResponse = $_SERVER['HTTP_ACCEPT'] == "*/*" ? "application/json" : $_SERVER['HTTP_ACCEPT'];
    }
    
    public function getRequiredEncodeResponse(){
        return $this->typeEncodeResponse;
    }
}