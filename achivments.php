<?php 
require_once 'box.class.php';
require_once 'mysqlConnect.php';

$con=new MysqlConnect();
$con->connect();
$user_id=implode("", $_SESSION['id']);
$query='SELECT text,date FROM `achivments` WHERE user_id='.$user_id.' ORDER by date ASC';
echo $query,'<hr>';
$res=$con->querySelectArray($query);
var_dump($res);





//while ($res) {
	//$box=new TBox($res);
	//print $box->makeView();
	//}

?>