<?php  

namespace Codecourse\Library;

class Model
{
	public $connection;
	protected $table;
	protected $primaryKey;

	function __construct($host, $oop, $pass, $db)
	{
		$this->connection = mysqli_connect($host, $oop, $pass, $db);
	}
	public function all()
	{
		$query = "SELECT * FROM {$this->table}";
		$result = mysqli_query($this->connection, $query);
		$records = [];
		while ($row = mysqli_fetch_assoc($result)) {
		 	$records[] = $row;
		 } 
		 return $records;
		 var_dump($records);
	}
	public function save($data)
	{
		$column = [];
		$values = [];
		foreach ($data as $column => $value) {
			$columns [] = $column;
			$values [] = "'" .$value. "'";
		}
		$cString = implode(',', $columns);
		$vString = implode(',', $values);

		$query = "INSERT INTO {$this->table}
				({$cString})
				VALUES
					({$vString})";
					var_dump($query);
					$result = mysqli_query($this->connection ,$query);
					return $result;
	}

	public function findById($data,$id)
	{
		return mysqli_fetch_assoc(mysqli_query($this->connection,"DELETE * FROM {$this->primaryKey}='{$id}'"));
	}
	
	public function delete($id)
	{
		return mysqli_query($this->connection,"DELETE FROM {$this->table} WHERE {$this->primaryKey}= '{$id}'"); 
	}

	public function __destruct()
	{
		mysqli_close($this->connection);
	}
}
