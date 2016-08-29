<?php
// РАБОТАЄТ НЕ ТРОГАТЬ!!!
session_start();
require_once 'mysqlConnect.php';
//Connect DB
$dbc=new MysqlConnect();
$dbc->connect();
//Envcrypt pass
$pass=md5($_POST['pass']);
$login=$_POST['login'];
$queryID='SELECT id from users where (login="'.$login.'")AND(pass="'.$pass.'")';
//print $queryID;
$auth=$dbc->querySelect($queryID);
if (!empty($auth)) {
	// Топравляєт идентификатор пользоветеля на основную страницу
	$_SESSION['id']=$auth;
	header('location:../index.php');
}
else{
	//Отрправляєт на страницу логина
	header('location:../login.html');
}
?>
