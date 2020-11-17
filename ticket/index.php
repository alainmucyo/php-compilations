<?php
  session_start();
  if (isset($_SESSION['user'])) {
    header("location:request.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Bus Reservetion</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container text-center">
		<div class=" w3-leftbar w3-border-green container w3-margin-top">
		<h1>Welcome<br> To Our<br> Online Bus Reservation<br> System.</h1>
		<h3>For Ticket booking,<br> please login if already have account<br> or<br>signup if you don't have account</h3><br>
		<a href="login.php" class="btn w3-large bg-green">Login</a> Or 
		<a href="signup.php" class="btn w3-large bg-blue">signup</a>
	</div>
	</div>
</body>
 <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".logout").hide();
  		$(".ticket").show();
  		$(".home").addClass("active");
  	});
  </script>
</html>