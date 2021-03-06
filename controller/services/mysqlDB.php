<?php

class MySQLDB{
	private $servername;
	private $username;
	private $password;
	private $dbname;

	private $db_connection;

	public function __construct($servername, $username, $password, $dbname){
		$this->servername = $servername;
		$this->username = $username;
		$this->password = $password;
		$this->dbname = $dbname;
	}

	public function openConnection(){
		//create connection
		$this->db_connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

		//check connection
		if($this->db_connection->connect_error){
			die("Could not connect to ".$this->servername." server");
		}
	}

	public function executeSelectQuery($sql){
		$this->openConnection();
		$query_result = $this->db_connection->query($sql);
		$result=[];
		if($query_result){
			while($row = $query_result->fetch_assoc()){
				$result[] = $row;
			}
		}
		$this->closeConnection();
		return $result;
	}

	public function executeNonSelectQuery($sql){
		$this->openConnection();
		$query_result = $this->db_connection->query($sql);
		$this->closeConnection();
		return $query_result;
	}

	public function closeConnection(){
		$this->db_connection->close();
	}

	public function escapeString($input){
		$this->openConnection();
		$res = $this->db_connection->real_escape_string($input);
		$this->closeConnection();
		return $res;
	}
}


?>