<?php 
/**
* 
*/
class ShareModel extends Model
	{
		public function index(){
		$this->query('SELECT * FROM share');
		$rows = $this->resultSet();
		return $rows;
		}
	}
 ?>