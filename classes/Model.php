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

	public function query($query)
	{
		$this->statement = $this->dbh->prepare($query);
	}

	public function bind($param, $value, $type=null)
	{
		if(is_null($type))
		{
			switch (true) {
				case is_int($value):
					$type= PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type= PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type= PDO::PARAM_NULL;
					break;
				default:
					$type=PDO::PARAM_STR;
					break;
			}
		}
		$this->statement->bindValue($param, $value, $type);
	}
 
 	
	public function execute()
	{
		return $this->statement->execute();
	}

	public function resultSet(){
		$this->execute(); 
		return $this->statement->fetchAll(PDO::FETCH_ASSOC);
	}

	public function lastInsertId()
	{
		$this->dbh->lastInsertId();  
	}
} 

?>