<?php
<<<<<<< HEAD
class MysqlConnect{
	var $db_host='localhost';
	var $db_name='ivan';
	var $db_user='ivan';
	var $db_pass='1';
	var $db=null;//CONNECTIONS
=======
class MysqlConnect
{
>>>>>>> e580afdb6336f622a02b4ba602d09dc1431eff72
	//How to use
	//connect
	//if insert using emptyText and qerryInsaert

<<<<<<< HEAD
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
		return 0;
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
=======
	function connect($host,$user,$pass,$db)
	{
	$con=new mysqli($host,$user,$pass,$db);//Databese connect
	if ($con->connect_errno)
    die("Не удалось подключиться к MySQL: (". $connect->connect_errno.")". $connect->connect_error);
	return $con;
	}

	function querySelect($connect,$query)
	{
		$result=$connect->query($qerry);//query on database
while ($row=@$result->fetch_assoc())
	$connect->close();
	return $row;
	}

	function queryInsert($connect,$query)
	{
	$result=$connect->query($query);
	if (!$result)  
	print $connect->error;

	$connect->close();
	}

	function emptyTest($connect,$text)
	{
		if (!empty($text)) {
		$result=$connect->escape_string($text);
		}
		else
			echo "Nothink not found";
		return $result;
	}
	function newCustomer($customer,$pass)
	{	//table customer
		$db=$this->connect("localhost","ivan","1","ivan");
		$table=$db->query('CREATE TABLE `ivan`.`'.$customer.'` ( `id` INT NOT NULL AUTO_INCREMENT , `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `text` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;');
		if(!$table)
		{
			echo "<hr>",$db->error,'<hr>';
		}
		//New customer
	$con=$this->connect('localhost','ivan','1','ivan');
	$add=$con->query("CREATE USER '".$customer."'@'%'"." IDENTIFIED by password  '".$pass."'");
	$add=$con->query("GRANT SELECT,INSERT ON ivan.".$customer." TO '".$customer."'@'%'");
	if(!$add)
	{
	echo $con->error;	
	}
	$con->close();
>>>>>>> e580afdb6336f622a02b4ba602d09dc1431eff72
	}
}

?>
