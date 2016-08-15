<?php 
require_once 'box.class.php';
require_once 'mysqlConnect.php';

$con= new MysqlConnect();
$con->connect();
$res=$con->querySelect('SELECT * FROM `achivments` WHERE user_id='.$_SESSION['id'].' ORDER by date ASC')
while (!empty($res) {
	$box=new TBox($res);
	print $box->makeView();
}
	













$db=new mysqli("localhost","ivan","1","ivan");
if ($db->connect_errno)
    die("Не удалось подключиться к MySQL: (". $db->connect_errno.")". $db->connect_error);	    
//echo $db->host_info . "\n"; 
//echo $db->server_info . "\n"; 
$result=$db->query('SELECT * FROM `achivments` WHERE user_id='.$_SESSION['user_id'].' ORDER by date ASC');

if($result){
	while ($row=@$result->fetch_assoc()){
		$box=new TBox($row);
		print $box->makeView();
	}
}
if($result==false)
{}
else
{
while ($row=@$result->fetch_assoc()){
		$box=new TBox($row);
		print $box->makeView();
	}
	}
$db->close();
?>