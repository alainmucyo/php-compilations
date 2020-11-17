<?php
	session_start();
if (isset($_SESSION['user'])) {
	header("location:request.php");
}
	include 'conn.php';
	$username=$email=$phone=$pass=$conf_pass="";
	if ($_SERVER['REQUEST_METHOD']=="POST") {
		function check_input($data)
		{
			$data=trim($data);
			$data=stripslashes($data);
			$data=mysql_real_escape_string($data);
			return $data;
		}
		$username=check_input($_POST['username']);
		$email=check_input($_POST['email']);
		$phone=check_input($_POST['phone']);
		$pass=check_input($_POST['pass']);
		$conf_pass=check_input($_POST['conf_pass']);
		$pass=md5($pass);
		$conf_pass=md5($conf_pass);
		if ($pass==$conf_pass) {	
		$select=$conn->query("SELECT * FROM users WHERE email='$email'");	
		if ($select->num_rows<1) {
		$insert=$conn->query("INSERT INTO users(username,email,contact,password) VALUES ('$username','$email','$phone','$pass')");
		if ($insert==TRUE) {
			$_SESSION['user']=$email;
			header("location:request.php");
		}
		else{
			echo "fuck";
		}
		}
		else{
			echo "<script>alert('Please Use Another Email')</script>";
		}
	}
	else{
		echo "<script>alert('Password does not match!!')</script>";
	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
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
	<div class="col-md-6" style="margin-bottom: 3%;">
		<header class="w3-container bg-green text-center" style="margin-bottom: -3px;"><h1>Create Account</h1></header>
		<div class="well w3-card-2">
			<form class="w3-container" role="form" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])  ?>">
				<div class="form-group">
					<label class="w3-label w3-text-green">Username:</label>
					<input type="text" name="username" class="form-control" placeholder="Username" required="required">
				</div>
				<div class="form-group">
					<label class="w3-label w3-text-green">email adress:</label>
					<input type="text" name="email" class="form-control" placeholder="Email Adress" id="email" required="required">
					<span id="msg" class="w3-text-red"></span>
				</div>
				<div class="form-group">
					<label class="w3-label w3-text-green">phone number:</label>
					<input type="text" name="phone" class="form-control" placeholder="Phone Number" required="required">
				</div>
				<div class="form-group">
					<label class="w3-label w3-text-green">set password:</label>
					<input type="password" name="pass" class="form-control" id="set" placeholder="Set Password" required="required">
				</div>
				<div class="form-group">
					<label class="w3-label w3-text-green">confirm password:</label>
					<input type="password" name="conf_pass" id="conf" class="form-control" placeholder="Confirm Password" required="required">
					<span id="pass" class="w3-text-red"></span>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn bg-green" placeholder="Set Password" value="Signup">
					<span class="w3-right">already have account, click  <a href="login.php">here.</a></span>
				</div>
			</form>
		</div>
	</div>
</div>
<h1>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</h1>
</body>
 <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".logout").hide();
  		$(".signup").addClass("active");
  		$("#email").keyup(function(){
  			var email=$("#email").val();
  			$.ajax({
  				type:"POST",
  				url:"error.php",
  				data:{"error":email},
  				cache:false,
  				success:function(html){
  					$("#msg").html(html);
  				}
  			});
  		});
  		$("#conf").keyup(function(){
  			var password=$("#set").val();
  			var confirm=$("#conf").val();
  			if (password == confirm) {
  				$("#pass").text(" ");
  			}
  			else{
  				$("#pass").text("Passwords do not match");
  			}

  			
  		
  		});
  	});
  </script>
</html>