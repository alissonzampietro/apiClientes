<?php 

use System\Router\Router;
use System\Http\Request;
use System\Http\Response;

$router = new Router();
$request = new Request();


$router->get("/cliente", function() {
   echo "oi"; 
});

// echo "bem vindo";


// $inputs = json_decode(file_get_contents("php://input"), true);

// echo "<pre>";
// var_dump($inputs);
// exit;