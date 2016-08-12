<?php
require_once 'mysqlConnect.php';

$dbc=new MysqlConnect();
$pass=md5($_POST['pass']);
$dbc->connect();
$queryID="SELECT id from users where login='".$_POST['login']."' pass='".$pass"'";
$auth=$dbc->querySelect($queryID);
if ($auth) {
	echo "Привет ".$_POST['login'];
}
echo htmlspecialchars($_POST['login']);
echo htmlspecialchars($_POST['pass']);



?>
