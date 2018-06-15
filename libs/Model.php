<?php  

class Model
{
	public $pdo; 

	function __construct()
	{

		try {
			$this->pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".CHARSET, DB_USER, DB_PASSWORD, [OPTIONS]);
		} catch (PDOException $e) {
			//die("<h2>I can not connect to the database</h2>");
			die($e->getMessage());
		}

	}
}