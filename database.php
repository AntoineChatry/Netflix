<?php


	try{
		$db = new PDO('mysql:host=localhost;dbname=mynetflix;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		
	} catch (PDOException $e){
		echo $e;
	}
?>