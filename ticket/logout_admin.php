<?php 
	session_start();
	if (isset($_SESSION['admin'])) {
	session_destroy();	}
	header("location:check_admin.php");
	?>