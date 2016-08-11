<?php 
require_once 'mysqlConnect.php';

if ($_POST['password']==$_POST['re_password']) {
$test=new MysqlConnect();
$con=$test->connect('localhost','ivan','1','ivan')
$login=$test->emptyTest($con,$_POST['login']);
$email=$test->emptyTest($con,$_POST['email']);
$query="INSERT Into users set nickname='".$login."' email='".$email."'";
$tets->queryInsert($con,)
$test->newCustomer($_POST['login'],$_POST['password']);
}
else
	echo "Пароли не совпадают";
 ?>