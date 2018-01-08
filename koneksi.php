<?php
	$host= "localhost";
	$username = "postgres";
	$dbname="bukatoko";
	$password = "hanuman";
	try{
		$db = new PDO("pgsql:host=".$host.";dbname=".$dbname,$username,$password);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "error ".$e->getMessage();
	}
?>