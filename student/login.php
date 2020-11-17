<?php include 'conn.php';
		session_start();
		if (isset($_SESSION['admin'])) {
			header("location:admin.php");
		}
$username=$pass="";
if ($_SERVER['REQUEST_METHOD']=="POST") {
	function check_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		$data=mysql_real_escape_string($data);
		return $data;
	}
	$username=check_input($_POST['username']);
	$pass=check_input($_POST['pass']);
	$select=$conn->query("SELECT * FROM admin WHERE username='$username' and password='$pass'");
	if ($select->num_rows>0) {
		$_SESSION['admin']=$username;
		header("location:admin.php");
	}
	else{
		echo "<script>alert('Wrong email or password')</script>";
	}
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login of Admin</title>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container">
<div class="w3-card-2" style="position: relative;width: 55%;left: 20%;top: 30px;">
	<div class="w3-container w3-teal">
  <h2>Login As Admin</h2>
</div>
<form role="form" method="post" class="w3-container w3-margin-top" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
	 
<div class="form-group">
  <label class="w3-label w3-text-teal"><b>Username:</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" required="required" name="username">
</div><div class="form-group">
  <label class="w3-label w3-text-teal"><b>Password:</b></label>
  <input class="w3-input w3-border w3-light-grey" type="password" name="pass" required="required">
</div>
<div class="form-group">
</div>
<div class="form-group">
  <input type="submit" name="submit" value="Login" class="w3-btn w3-blue-grey">
</div>
</form>
</div>
</div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		$("#index").hide();
		$(".remove").removeClass("active");
		$("#active").hide();
		$(".logout").hide();
	});
</script>
</html>