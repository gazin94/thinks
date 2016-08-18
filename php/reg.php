<?php 
// РАБОТАЄТ НЕ ТРОГАТЬ!!!
require_once 'mysqlConnect.php';
	
if ($_POST['password']==$_POST['re_password']) {
	//Подключение кбазе данніх
	$test=new MysqlConnect();
	$test->connect();
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
	$test->queryInsert($query);
	//Отправляєт на login.html
	header('location:../login');
}
else
	echo "Пароли не совпадают";
 ?>