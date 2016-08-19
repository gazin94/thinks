<?php 
session_start();
if (!empty($_SESSION)) {
 
	}else
header('location:login.html');
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
<div class="header">
	<?php
	include('php/username.php');
	?>
	<a class="header" name="exit" href="php/exit.php">Выход</a>
	</div>
<?php 
include('php/achivments.php');
include('php/new.php');
?>
</body>
</html>