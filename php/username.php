<?php 
require_once 'mysqlConnect.php';
session_start();
$user_id=implode("",$_SESSION['id']);
//connect
$con=new MysqlConnect();
$con->connect();
//array to sring
$user_id=implode("", $_SESSION['id']);
$query='SELECT login FROM `users` WHERE id='.$user_id;
$res=$con->querySelect($query); 
printf("Привет ");
printf(implode('',$res));
printf("! Сделай штото и запиши сюда.");
 ?>