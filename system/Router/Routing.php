<?php

namespace System\Router;

interface Routing {
    public function get($url, $function);
    public function post($url, $function);
}