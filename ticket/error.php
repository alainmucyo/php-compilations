<?php 
include 'conn.php';
$email=$_POST['error'];
$select=$conn->query("SELECT * FROM users WHERE email='$email'");
if ($select->num_rows>0) {
	echo "Use another email, that one you are using is taken.";
}

 ?>