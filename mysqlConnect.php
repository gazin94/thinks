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
		$this->db=new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);//Databese connect
		if ($this->db->connect_errno)
    		die("Не удалось подключиться к MySQL: (". $this->db->connect_errno.")". $this->db->connect_error);
		return $this->db;
	}


	function querySelect($query){
		$result=$this->db->query($qerry);//query on database
		while ($row=@$result->fetch_assoc())
		return $row;
	}

	function queryInsert($query){
		$result=$this->db->query($query);
		if (!$result)  
			print $this->db->error;
		return $this->db->insert_id;
	}

	function emptyTest($text){
		if (empty($text))
			echo "Nothink not found";
		else
			$result=$this->db->escape_string($text);
			return $result;
	}	

	function newCustomer($customer,$pass){	//table customer
		$db=$this->connect();
		$table=$this->db->query('CREATE TABLE `'.$customer.'` ( `id` INT NOT NULL AUTO_INCREMENT , `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , text TEXT NOT NULL , PRIMARY KEY (id)) ENGINE = MyISAM;');
		if(!$table)
			echo "<hr>",$this->db->error,'<hr>';
		
		//New customer
		$add=$this->db->query("CREATE USER '".$customer."'@'%'"." IDENTIFIED by '".$pass."'");
		$add=$this->db->query("GRANT SELECT,INSERT ON ivan.".$customer." TO '".$customer."'@'%'");
		$add=$this->db->query("FLUSH PRIVILEGES");
		if(!$add)
			echo $con->error;
	}
}

?>
