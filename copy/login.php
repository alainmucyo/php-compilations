<?php
include 'conn.php';
session_start();
if (isset($_SESSION['user'])) {
	session_destroy();
}

$email=$pass="";
if ($_SERVER['REQUEST_METHOD']=="POST") {
	function check_value($data)
		{
			$data=trim($data);
			$data=stripslashes($data);
			$data=mysql_real_escape_string($data);
			return $data;
		}
	$email=check_value($_POST['email']);
	$pass=check_value($_POST['pass']);
	$pass=md5($pass);
	$select=$conn->query("SELECT * FROM doc WHERE email='$email' AND password='$pass'");
	if ($select->num_rows>0) {
		while ($row=$select->fetch_assoc()) {
			
			$_SESSION['user']=$row['full_name'];
			header("location:add.php");
		}
		
	}
	else{
		echo "<script>alert('Wrong email or password')</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div class="container" style="margin-top: 7%;margin-bottom: 22%;">
		<div class="col-md-3"></div>
		<div class="col-md-6" style="position: relative;">
<div class="w3-card-2">
	<header class="w3-container w3-blue"><h2>Login For Doctors</h2></header>
	<form class="w3-container w3-margin-top" role="form" method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
		<div class="form-group">
			<label>Email Adress:</label>
		<input type="text" name="email" class="form-control" placeholder="Email Adress">
	</div>
	<div class="form-group">
			<label>Password:</label>
		<input type="password" name="pass" class="form-control" placeholder="Password">
	</div>
	<div class="form-group">
		<input type="submit" name="submit" class="btn
		btn-primary" value="Login">
		<span class="pull-right">Don't have account create, <a href="signup.php">Here.</a></span>
	</div>
	</form>
</div>
</div>
</div>
<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".home").removeClass("active");
		$(".login").addClass("active");
	})
</script>
</html>