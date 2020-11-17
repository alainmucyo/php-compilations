<?php include 'conn.php'; 
$email=$pass="";
if ($_SERVER['REQUEST_METHOD']=="POST") {
	function check_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=mysql_real_escape_string($data);
		return $data;
	}
	$email=check_input($_POST['email']);
	$pass=check_input($_POST['pass']);
	$select=$conn->query("SELECT * FROM admin WHERE email='$email' AND password='$pass'");
	if ($select->num_rows>0) {
		session_start();
		$_SESSION['user']=$email;
		header("location:index.php");
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
			<header class="w3-container bg-blue"><h1>Login For School Manager</h1></header>
	<form class="w3-container w3-margin-top" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
		<div class="form-group w3-margin-top">
			<label>Email Adress:</label>
			<input type="text" name="email" class="w3-input w3-border w3-light-grey" placeholder="Email Adress">
		</div>
		<div class="form-group">
			<label>Password:</label>
			<input type="password" name="pass" class="w3-input w3-border w3-light-grey" placeholder="Password">
		</div>
		<div class="form-group">
			<input type="submit" name="submit" value="Login" class="btn bg-blue">
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
  		$(".logout").hide();
  		$(".login").addClass("active");
  	});
  </script>
</html>