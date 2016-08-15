<?php
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
print '<hr>';
print_r($auth);
if (empty($auth)) {
	echo "empty";
	//header('location:login.html');
}
echo "Привет ".$_POST['login'];
$_SESSION["id"]=$auth['id'];
//header('location:index.php');
echo $_SESSION['id'];
?>
