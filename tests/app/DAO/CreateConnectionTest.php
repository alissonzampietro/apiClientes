<?php 

namespace App\DAO\;

class CreateConnection {
	private static $database = NULL;

	public function __construct() {

	}
	public static getConnection() {
		return $self::database;
	}
}