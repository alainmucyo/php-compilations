<?php
include 'conn.php';
$name=$email=$pass=$conf_pass="";
if ($_SERVER['REQUEST_METHOD']=="POST") {
		function check_value($data)
		{
			$data=trim($data);
			$data=stripslashes($data);
			$data=mysql_real_escape_string($data);
			return $data;
		}
		$name=check_value($_POST['f_name']);
		$email=check_value($_POST['email']);
		$pass=check_value($_POST['pass']);
		$pass=md5($pass);
		$conf_pass=check_value($_POST['conf_pass']);
		$conf_pass=md5($conf_pass);
		$photo_name=uniqid();
		$photo_temp_loc=$_FILES['picture']['tmp_name'];
		if (!is_dir("doctors/$name")) {
			mkdir("doctors/$name");
		}
		$photo_store="doctors/$name/".$photo_name;
		if (move_uploaded_file($photo_temp_loc, $photo_store)) {
			if($pass==$conf_pass){
				$select=$conn->query("SELECT * FROM doc WHERE email='$email'");
				if($select->num_rows<1){
			$insert=$conn->query("INSERT INTO doc(full_name,email,password,image) VALUES ('$name','$email','$pass','$photo_store')");
			session_start();
			$_SESSION['user']=$name;
			if ($insert=="TRUE") {
				header("location:add.php");
			}
		}
		else{
			echo "<script>alert('Please,Use another email')</script>";
		}

		}
		else{
			echo "<script>alert('Password does not match')</script>";
		}
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container" style="margin-top: 5%;">
	<div class="col-md-6 w3-padding" style="position: relative;left: 19%;margin-bottom: 8%;">
	<div class="w3-card-2 w3-border w3-round ">
		<header class="w3-container w3-blue text-center"><h1>Sign Up For Doctors</h1></header>
	<form class="w3-container" role="form" method="POST" enctype="multipart/form-data" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
		<div class="form-group w3-margin-top">
			<label class="w3-label w3-text-blue">Full Name:</label>
			<input type="text" name="f_name" class="form-control" placeholder="Full Name" required="required">
		</div>
		<div class="form-group">
			<label class="w3-label w3-text-blue">Email Adress:</label>
			<input type="text" name="email" class="form-control" placeholder="Email Adress" required="required">
		</div>
		<div class="form-group">
			<label class="w3-label w3-text-blue">Set Password:</label>
			<input type="password" name="pass" class="form-control" placeholder="Set Password" required="required">
		</div>
		<div class="form-group">
			<label class="w3-label w3-text-blue">Confirm Password:</label>
			<input type="password" name="conf_pass" class="form-control" placeholder="Confirm Password" required="required">
		</div>
		<div class="form-group">
			<label class="w3-label w3-text-blue">Your Picture:</label>
			<input type="file" name="picture" value="Picture" required="required">
		</div>
		<div class="form-group">
			<input type="submit" name="submit" value="Create Account" class="w3-btn w3-blue">
			<span class="w3-right">Have account, Login <a href="login.php">Here.</a> </span>
		</div>
	</form>
</div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".home").removeClass("active");
		$(".signup").addClass("active");
	})
</script>
</html>
