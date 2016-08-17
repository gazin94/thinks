<?php
// РАБОТАЄТ НЕ ТРОГАТЬ!!!
require_once 'mysqlConnect.php';
session_start();
$text=$_POST['text'];
$id= implode("",$_SESSION['id']);
$dtb=new MysqlConnect();
$dtb->connect();
$query="INSERT INTO achivments(text,user_id) VALUES('". $text ."',". $id .')';
$dtb->queryInsert($query);
header('location:index.php');
?>