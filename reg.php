<?php 
require_once 'mysqlConnect.php';

if ($_POST['password']==$_POST['re_password']) {
	$test=new MysqlConnect();
	$test->connect();
	$login=$test->emptyTest($_POST['login']);
	$email=$test->emptyTest($_POST['email']);
	$query="INSERT Into users set nickname='".$login."' email='".$email."'";
	//$tets->queryInsert($query);
	$test->newCustomer($_POST['login'],$_POST['re_password']);
}
else
	echo "Пароли не совпадают";
 ?>