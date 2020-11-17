<?php
	include 'conn.php';
	$email=htmlspecialchars($_POST['email']);
	$email=mysql_real_escape_string($email);
	$sql=$conn->query("SELECT * FROM users WHERE email='$email'") or die(mysql_error());
	if ($sql->num_rows>0) {
		echo "the email you are trying to use is already used";
	}
	else{
		echo "";
	}

?>