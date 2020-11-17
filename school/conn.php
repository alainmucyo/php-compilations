<?php 
	$conn=new mysqli("localhost","root","","school");
	if (!$conn) {
		die("Unable to connect ").mysql_error();
	}
 ?>