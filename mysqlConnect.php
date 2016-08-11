<?php
class MysqlConnect
{
	//How to use
	//connect
	//if insert using emptyText and qerryInsaert

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
	}
}

?>
