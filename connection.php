<?php
 
 $host = "db.cs.dal.ca";
 $dbname = "bhavana";
 $user = "bhavana";
 $pwd = "B00790414";
 
try{
	$dbconn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
   $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $err){
	echo"Connection failed: ". $err->getMessage();
	}
?>

