<?php 
require_once 'mysqlConnect.php';
	
if ($_POST['password']==$_POST['re_password']) {
	//Подключение кбазе данніх
	$test=new MysqlConnect();
	$test->connect();
	print_r($_POST);
	//Проверка на пустоту в полях
	$password=$test->emptyTest($_POST['re_password']);
	$login=$test->emptyTest($_POST['login']);
	$email=$test->emptyTest($_POST['email']);
	//Шифрование пароля
	$pass=md5($password);
	//Отпавка данных в базу данных
	$query='INSERT INTO users SET'
		.' login="'.$login.'"'
		.',email="'.$email.'"'
		.',pass="'.$pass.'"';
	$res=$test->queryInsert($query);
	
	if ($res) $_SESSION['user_id']=$res;
}
else
	echo "Пароли не совпадают";
 ?>