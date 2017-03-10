<?php

require __DIR__."/vendor/autoload.php";

$config = json_decode(file_get_contents("config.json"));
define("DATABASE", $config);

require __DIR__."/bootstrap.php";