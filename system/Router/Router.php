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
       if($_SERVER['REQUEST_METHOD'] != "GET")
           return;
       
       if(strtolower($route) != $this->service)
           return;
       
       Response::show("Método encontrado");
    }
    
    public function post($route, $function) {
        
    }
}