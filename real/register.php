<?php 
	include 'conn.php';
	if ($_SERVER['REQUEST_METHOD']=="POST") {
		function check_input($data)
		{
			$data=htmlspecialchars($data);
			$data=stripcslashes($data);
			$data=trim($data);
			$data=mysql_real_escape_string($data);
			return $data;
		}
		$name=check_input($_POST['name']);
		$adress=check_input($_POST['adress']);
		$phone=check_input($_POST['phone']);
		$email=check_input($_POST['email']);
		$sex=check_input($_POST['sex']);
		$bdate=check_input($_POST['bdate']);
		$set=check_input($_POST['set_password']);
		$set=md5($set);
		$conf=check_input($_POST['conf_password']);
		$conf=md5($conf);
		if ($set==$conf) {
			$check=$conn->query("SELECT * FROM users WHERE email='$email'");
			if ($check->num_rows==0) {
			$insert=$conn->query("INSERT INTO users(name,adress,phone,gender,bdate,email,password) VALUES('$name','$adress','$phone','$sex','$bdate','$email','$conf')") or die(mysql_error());
			if ($insert) {
				session_start();
				$_SESSION['customer']=$email;
				header("location:buy.php");
			}
			else{
				header("location:signup.php");
			}
		}
		else{
			header("location:signup.php");
		}
	}
	}
 ?>