<?php
print_r($_POST);
print '<hr>';

$db=new mysqli("localhost","ivan","1","ivan");
if ($db->connect_errno)
    die("Не удалось подключиться к MySQL: (". $db->connect_errno.")". $db->connect_error);	    
//echo $db->host_info . "\n"; 
//echo $db->server_info . "\n"; 
if (!empty($_POST['text'])) 
{
	$text=$db->escape_string($_POST['text']);
	$result=$db->query('INSERT INTO achivments SET text="'.$text.'"');
	if (!$result)  
	print $db->error;
	$db->close();
	//print '<a href="/">Сохранено успешно, вернутся на главную</a>';
	header( "Location:/" );

	
}
else
	echo "Введте текст";



?>