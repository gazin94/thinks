<?php 
require_once 'box.class.php';
require_once 'mysqlConnect.php';
//connect
$con=new MysqlConnect();
$con->connect();
//array to sring
$user_id=implode("", $_SESSION['id']);
$query='SELECT text,date FROM `achivments` WHERE user_id='.$user_id.' ORDER by date ASC';
$res=$con->querySelectArray($query);
while ($data=$res->fetch_assoc()) {
	//result out
	$box=new TBox($data);
	print $box->makeView();
	}
?>