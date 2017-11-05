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
           //echo "Connected successfully";
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

	public function insert($data,$so)
	{
		
		$stmt = $this->conn->prepare("INSERT INTO `nhaphanphoi` (`name_sale`, `start`, `finish`, `campaign`, `ma_coupon`, `intro_coupon`, `link_banner`, `banner_html`, `size`, `link_original`, `link_distribution`) VALUES (:name_sale, :start, :finish, :campaign, :ma_coupon, :intro_coupon, :link_banner, :banner_html, :size, :link_original, :link_distribution)");
		$stmt->bindParam(':name_sale', $data[$so]['name_sale'], PDO::PARAM_STR);
		$stmt->bindParam(':start', $data[$so]['start'], PDO::PARAM_STR);
		$stmt->bindParam(':finish', $data[$so]['finish'], PDO::PARAM_STR);
		$stmt->bindParam(':campaign', $data[$so]['campaign'], PDO::PARAM_STR);
		$stmt->bindParam(':ma_coupon', $data[$so]['ma_coupon'], PDO::PARAM_STR);
		$stmt->bindParam(':intro_coupon', $data[$so]['intro_coupon'], PDO::PARAM_STR);
		$stmt->bindParam(':link_banner', $data[$so]['link_banner'], PDO::PARAM_STR);
		$stmt->bindParam(':banner_html', $data[$so]['banner_html'], PDO::PARAM_STR);
		$stmt->bindParam(':size', $data[$so]['size'], PDO::PARAM_STR);
		$stmt->bindParam(':link_original', $data[$so]['link_original'], PDO::PARAM_STR);
		$stmt->bindParam(':link_distribution', $data[$so]['link_distribution'], PDO::PARAM_STR);
		$stmt->execute();

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

	public function showAll()
	{ 
		$stmt = $this->conn->prepare("SELECT * FROM `$this->table`");
		$stmt->execute();
		return $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

	public function show()
	{
		$stmt = $this->conn->prepare("SELECT * FROM $this->table");
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
