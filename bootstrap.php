<?php 

use System\Router\Router;
use System\Http\Request;
use System\Http\Response;
use App\DAO\Connection;
use App\Controllers\Cliente;

(new Connection("localhost", "root", "alisson299409", "drcon"));
$router = new Router();
$request = new Request();


$router->get("/cliente", function() {
   $cliente = new Cliente();
   $clientes = $cliente->get();
   Response::show($clientes);
});

// echo "bem vindo";


// $inputs = json_decode(file_get_contents("php://input"), true);

// echo "<pre>";
// var_dump($inputs);
// exit;