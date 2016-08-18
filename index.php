<?php 
session_start();
if (!empty($_SESSION)) {
 
	}else
header('location:hello.html');
?>

<!DOCTYPE html>
<html>
<head>
	<title>One Thinks</title>
	 <link href="main.css" rel="stylesheet" type="text/css" />
	 <script type="text/javascript" src="main.js"></script>
	 <meta charset="utf-8" />
</head>
<body>
<header>
<DIV class="header"><h1>
<?php
include('php/username.php');
?> 
</h1>
</header>
<?php 

include('php/achivments.php');
include('php/new.php');
//ВВод логина 	

//header("Location:login.html");
?>
</body>
</html>