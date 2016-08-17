<!DOCTYPE html>
<html>
<head>
	<title>One Thinks</title>
	 <link href="main.css" rel="stylesheet" type="text/css" />
	 <script type="text/javascript" src="main.js"></script>
	 <meta charset="utf-8" />
</head>
<header>
<DIV class="header"><h1>
<?php
session_start();
echo "Hello ";
echo implode("",$_SESSION['id']); 
?> 

Досягнення дня</h1>
<h3> Велич не тіки в великих справах, також в великій кількості малих</h3>
</header>
<?php 

include("achivments.php");
include("new.php");
//ВВод логина 
//header("Location:login.html");
?>
</body>
</html>