<?php

namespace System\Router;

use System\Http\Response;

class Router implements Routing{
    
    private $service;
    
    public function __construct()
    {
        $this->service = (strlen($_SERVER["REQUEST_URI"]) > 1) ? strtolower($_SERVER["REQUEST_URI"]) : NULL;
    }
    
    public function get($route, $function) {
        $this->validateService();
        var_dump($this->service);
        //$function($instance);
    }
    
    public function post($route, $function) {
        
    }
    
    private function validateService() {
        if($this->service == NULL){
            Response::show("Por favor, insira o serviço");
            break;
        }
    }
}