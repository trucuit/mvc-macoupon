<?php 
class Model
{
	protected $conn;
	protected $database = DB_NAME;
	protected $table = DB_TABLE;
	protected $resultQuery;
	public function __construct()
	{		
		try {
			$this->conn = new PDO ("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS,
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
			);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           // echo "Connected successfully";
		} catch (PDOException $e) {
			echo "Connected failed: " . $e->getMessage();
			die();
		}

	}

	public function __destruct()
	{
		$this->conn = null;
	}

	public function setTable($table)
	{
		$this->table = $table;
	}

	public function insert($data,$table)
	{
		$this->setTable($table);
		$data = $this->createInsert($data);
		foreach ($data as $value) {
			$stmt = $this->conn->prepare("INSERT INTO `$this->table` (".$value['key'].") VALUES (".$value['value'].")");
			$stmt->execute();
		}
		
	}

	public function createInsert($data)
	{
		$result = [];
		foreach ($data as $key => $value) {
			$result[$key]['key'] ='';
			$result[$key]['value'] ='';
			foreach ($value as $i => $o) {
				$result[$key]['key'] .= "`".$i."`,";
				$result[$key]['value'] .= "'".$o."',";
			}
			$result[$key]['key'] = rtrim($result[$key]['key'],",");
			$result[$key]['value'] = rtrim($result[$key]['value'],",");
		}
		
		return $result;
	}

	public function delete($id)
	{
		$stmt = $this->conn->prepare("DELETE FROM `$this->table` WHERE id=:id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
	}

	public function update($id, $data)
	{
		$stmt = $this->conn->prepare("UPDATE `$this->table` SET name=:name, price=:price, image=:image, description=:description WHERE id=:id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
		if(is_array($data['image'])){
			$stmt->bindParam(':image', $data['image']['name'], PDO::PARAM_STR);
		}else{
			$stmt->bindParam(':image', $data['image'], PDO::PARAM_STR);
		}
		$stmt->bindParam(':price', $data['price'], PDO::PARAM_INT);
		$stmt->bindParam(':description', $data['description'], PDO::PARAM_STR);
		$stmt->execute();
	}

	public function showAll($table)
	{ 

		$stmt = $this->conn->prepare("SELECT * FROM `$table`");
		$stmt->execute();
		return $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

	public function showID($table,$id)
	{
		$this->setTable($table);
		$stmt = $this->conn->prepare("SELECT * FROM `$this->table` WHERE id=:id");
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		$stmt->execute();
		return $data = $stmt->fetch(PDO::FETCH_ASSOC);

	}

	public function execute($sql)
	{
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function isExist($query){
		if($query != null) {
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			$this->resultQuery =  $stmt->fetchAll(PDO::FETCH_ASSOC);
		}		
		if(empty($this->resultQuery)) {
			return false;
		}
		return true;
	}
}
?>