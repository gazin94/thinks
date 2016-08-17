<?php

class MysqlConnect {
	var $db_host='localhost';
	var $db_name='ivan';
	var $db_user='ivan';
	var $db_pass='1';
	var $db=null;//CONNECTIONS

	//How to use
	//connect
	//if insert using emptyText and qerryInsaert


	function __destruct(){
		if ($this->db)  $this->db->close();
	}

	function connect(){
		//Databese connect
		$this->db=new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
		//file_put_contents('log/mySQL.log',"Connect succeful;\n");
		if ($this->db->connect_errno)
    		die("Не удалось подключиться к MySQL: (". $this->db->connect_errno.")". $this->db->connect_error);
		return $this->db;
	}


	function querySelect($query){
		$result=$this->db->query($query);//query on database
		if ($result) 
			return $result->fetch_assoc();
		else
			return 0;
	}

	function querySelectArray($query){
		$result=$this->db->query($query);//query on database
		if ($result) 
			return $result;
		else
			return 0;
	}

	function queryInsert($query){
		$result=$this->db->query($query);
		//file_put_contents('log/mySQL.log',"Insert succeful on query..;\n");
		if (!$result)  
			print $this->db->error;
		return $this->db->insert_id;
	}

	function emptyTest($text){
		if (empty($text))
			echo "Nothink not found to ".$text;
		else
			$result=$this->db->escape_string($text);
			return $result;
	}	
}

?>
