<?php 

namespace App\DAO\;

class CreateConnection {
	private static $database = NULL;

	public function __construct($obgDatabase) {
		$self::database = $obgDatabase;
	}
	public static getConnection() {
		if($self::database == null)
			throw new Exception("Não foi uma criada conexão!")
		return $self::database;
	}
}