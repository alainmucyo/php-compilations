<?php 
	include 'conn.php';
	$username=$password="";
		if ($_SERVER['REQUEST_METHOD']=="POST") {
		function check_input($data)
		{
			$data=trim($data);
			$data=stripslashes($data);
			$data=mysql_real_escape_string($data);
			return $data;
		}
		$username=check_input($_POST['username']);
		$password=check_input($_POST['password']);
		$select=$conn->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
		if ($select->num_rows>0) {
			session_start();
			$_SESSION['admin']=$username;
			header("location:admin.php");
		}
		else{
			echo "<script>alert('Wrong Email Or Password')</script>";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login For Admin</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="w3-card-2">
			<header class="w3-container bg-green text-center"><h1>Login For admin only.</h1></header>
			<form class="w3-container" role="form" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
				<div class="form-group w3-margin-top">
					<label class="w3-label w3-text-green">username:</label>
					<input type="text" name="username" class="w3-input w3-border w3-light-grey" required="required">
				</div>
					<div class="form-group">
					<label class="w3-label w3-text-green">Password:</label>
					<input type="password" name="password" class="w3-input w3-border w3-light-grey" required="required">
				</div>
				<div class="form-group w3-margin-top">
					<input type="submit" name="submit" class="w3-btn bg-green" value="Login">
					<span class="w3-right">please make sure if you are admin, if not click <a href="index.php">here.</a></span>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
 <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".login").hide();
  		$(".logout").hide();
  		$(".ticket").show();
  	
  	});
  </script>
</html>