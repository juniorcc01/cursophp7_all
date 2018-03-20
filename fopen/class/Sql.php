<?php


class Sql extends PDO{
	
	private  $conn;
	
	
	public function __construct(){
		
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
	}
	
	private function setParams($statment, $parameters = array()){
		
		foreach($parameters as $key => $value){
			
			$this->setParam($statment,$key,$value);
			
		}	
	}
	
	private function setParam($statement,$key,$value){
		
	$statement->bindParam($key,$value);
		
	}
	
	public function query($RawQuery,$params = array()){
		
		$stmt = $this->conn->prepare($RawQuery);
		
		$this->setParams($stmt,$params);
		
		$stmt->execute();
		 
		return $stmt;
			
	}
	
	public function select($rawQuery, $params = array()):array{
		
		$stmt = $this->query($rawQuery,$params);
		
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
}

?>