<?php

try{
	
$access=new PDO("mysql:host=localhost;dbname=commerce_she;charset=utf8","root","");
}
catch(Exception $e)
{
	$e->getMessage();
}




?>