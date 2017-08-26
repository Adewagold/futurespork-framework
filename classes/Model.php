<?php 

abstract class Model
{
	protected $dbh;
	protected $statement;

	public function __construct()
	{
		try {
		$options = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE 	=> PDO::ERRMODE_EXCEPTION
			);
		$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";dbuser=".DB_USER,PASSWORD, $options);
			//echo "successful";
		} catch (Exception $e) {
			$this->error = $e->getMessage();
		}
	}
} 

?>