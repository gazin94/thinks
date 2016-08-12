<?php 
require_once 'mysqlConnect.php';

print_r($_POST);


if ($_POST['password']==$_POST['re_password']) {
	$pass=md5($_POST['password']);
	$test=new MysqlConnect();
	$test->connect();
	$login=$test->emptyTest($_POST['login']);
	$email=$test->emptyTest($_POST['email']);

	$query='INSERT INTO users SET'
		.' login="'.$login.'"'
		.',email="'.$email.'"'
		.', pass="'.$pass.'"';

	$res=$test->queryInsert($query);
	print '<hr>';
	print_r($res);
	
	print '<hr>';
	if ($res) $_SESSION['user_id']=$res;
	print 'Вы залгинились как '.$login.'('.$res.')';
}
else
	echo "Пароли не совпадают";
 ?>