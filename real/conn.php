<?php
	error_reporting(false);
	$conn=new mysqli("localhost","root","","real");
	if (!$conn) {
		echo "Unable To Connect ".mysql_error();
	}
	
  ?>