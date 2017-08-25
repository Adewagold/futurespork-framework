<?php 

abstract class Model
{
	protected $dbh;
	protected $statement;

	public function __construct()
	{
		$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";dbuser=".DB_USER,PASSWORD);
	}
} 

?>