<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$database="ravindra";

	$con=mysql_connect($hostname,$username,$password) or die("not connected");

	mysql_select_db($database,$con) or die("database not found");
?>
