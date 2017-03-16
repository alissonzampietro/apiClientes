<?php 

namespace App\DAO;

use PDO;

class CreateConnection {
	private $database = NULL;

	public function __construct($hosts, $user, $pass, $database) {
        $this->database = new PDO("mysql:host=$hosts;dbname=$database",$user,$pass);
	}
	public function getConnection() {
		return $this->database;
	}
}