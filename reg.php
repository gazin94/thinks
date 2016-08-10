<?php 
require_once 'mysqlConnect.php';
$test=new MysqlConnect();

$test->newCustomer($_POST['login'],$_POST['password']);
 ?>