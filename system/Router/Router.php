<?php

namespace System\Router;

class Router implements Routing{
    
    private url;
    
    private function getParametersURL($url, $needled)
    {
//         strpos($route, $needle)
        preg_match("/^\/[a-z]+$/", $this->url)
    }
    
    public function __construct()
    {
        $this->url = (strlen($_SERVER["REQUEST_URI"]) > 1) ? strtolower($_SERVER["REQUEST_URI"]) : NULL;
    }
    
    public function get($route, $function) {
       if(strtoupper($_SERVER['REQUEST_METHOD']) != "GET")
           return;
       
       if(strtolower($route) != $this->url)
           return;
       
       
       $function();
    }
    
    public function post($route, $function) {
        if(strtoupper($_SERVER['REQUEST_METHOD']) != "POST")
            return;
    }
}