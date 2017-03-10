<?php


require __DIR__."/vendor/autoload.php";

$config = json_decode(file_get_contents("config.json"));

define("DATABASE", $config);

$inputs = json_decode(file_get_contents("php://input"), true);

echo "<pre>";
var_dump($inputs);
exit;

// var_dump($inputs, trim($_SERVER['PATH_INFO']));

// forech($inputs as $input) {
// 	echo "<pre>";
// 	var_dump($input);
// }