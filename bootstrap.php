<?php 

echo "bem vindo";


$inputs = json_decode(file_get_contents("php://input"), true);

echo "<pre>";
var_dump($inputs);
exit;