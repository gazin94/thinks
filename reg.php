<?php 
require_once 'mysqlConnect.php';

if ($_POST['password']==$_POST['re_password']) {
<<<<<<< HEAD
	$test=new MysqlConnect();
	$test->connect();
	$login=$test->emptyTest($_POST['login']);
	$email=$test->emptyTest($_POST['email']);
	$query="INSERT Into users set nickname='".$login."' email='".$email."'";
	//$tets->queryInsert($query);
	$test->newCustomer($_POST['login'],$_POST['re_password']);
=======
$test=new MysqlConnect();
$con=$test->connect('localhost','ivan','1','ivan')
$login=$test->emptyTest($con,$_POST['login']);
$email=$test->emptyTest($con,$_POST['email']);
$query="INSERT Into users set nickname='".$login."' email='".$email."'";
$tets->queryInsert($con,)
$test->newCustomer($_POST['login'],$_POST['password']);
>>>>>>> e580afdb6336f622a02b4ba602d09dc1431eff72
}
else
	echo "Пароли не совпадают";
 ?>