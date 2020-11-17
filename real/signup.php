<?php 
  session_start();
  if (isset($_SESSION['customer'])) {
   header("location:buy.php");
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register For New Users</title>
			<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/calendar.css">
</head>
<body style="text-transform: capitalize;">
<?php include 'header.php'; ?>
				<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;width: 200px; position: absolute;left: 30%;">
<tr><td id="ds_calclass">
</td></tr>
</table>
<div class="col-md-3"></div>
<div class="col-md-6 w3-margin-bottom">
	<div class="w3-card-2">
		<header class="w3-container text-center w3-deep-orange"><h1>Register Form</h1></header>
		<form class="w3-container" method="post" action="register.php" role="form">
			<div class="form-group w3-margin-top">
				<label class="w3-text-deep-orange">Name:</label>
				<input type="text" name="name" class="form-control" required="required">
			</div>
			<div class="form-group">
				<label class="w3-text-deep-orange">Adress:</label>
				<textarea class="form-control" name="adress" required="required"></textarea>
			</div>
			<div class="form-group">
				<label class="w3-text-deep-orange">Mobile number:</label>
				<input type="text" name="phone" class="form-control" required="required">
			</div>
			<div class="form-group">
				<label class="w3-text-deep-orange">Email adress:</label>
				<input type="text" name="email" class="form-control" required="required" id="email">
				<span class="w3-text-red" id="em_msg"></span>
			</div>
			<div class="form-group">
				<label class="w3-text-deep-orange">Gender:</label><br>
				<label class="w3-label w3-text-deep-orange" for="m">Male</label>
				<input type="radio" name="sex" class="w3-radio" value="male" id="m">
				<label class="w3-label w3-text-deep-orange" for="f">female</label>
				<input type="radio" name="sex" class="w3-radio" value="female" id="f">
			</div>
			<div class="form-group">
				<label class="w3-text-deep-orange">Birth Date:</label>
<input type="text" onclick="ds_sh(this);" name="bdate" class="form-control" required="required" />
			</div>
			<div class="form-group">
				<label class="w3-text-deep-orange">set password:</label>
				<input type="password" name="set_password" class="form-control" required="required" id="set">
			</div>
			<div class="form-group">
				<label class="w3-text-deep-orange">confirm password:</label>
				<input type="password" name="conf_password" class="form-control" required="required" id="conf">
				<span id="msg" class="w3-text-red"></span>
			</div>
			<div class="form-group">
				<input type="submit" name="register" value="Register" class="btn w3-deep-orange" id="reg">
        <span class="pull-right">already have account, click<a href="login.php"> here.</a></span>
			</div>
		</form>
	</div>
</div>
</body>
 <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".logout").hide();
  		$(".signup").addClass("active");
  	});
  </script>
  <script type="text/javascript">
  	$(function(){
  		$("#conf").keyup(function(){
  			var set=$("#set").val();
  			var conf=$("#conf").val();
  			if (set!=conf) {
  				$("#msg").text("Password do not match.");
  			}
  			else{
  				$("#msg").text("");
  			}
  		});
  			$("#set").keyup(function(){
  			var set=$("#set").val();
  			var conf=$("#conf").val();
  			if (set!=conf) {
  				$("#msg").text("Password do not match.");
  			}
  			else{
  				$("#msg").text("");
  			}
  		});
  		$("#reg").click(function(){
  			var set=$("#set").val();
  			var conf=$("#conf").val();
  			if (set!=conf) {
  				alert("Please Do Not Match !!");
  			}
  		})
  	});
  </script>
  <script type="text/javascript">
  	$(function(){
  		$("#email").keyup(function(){
  			var email=$("#email").val();
  			$.ajax({
  				type:'post',
  				url:'ajax_email.php',
  				data:{'email':email},
  				cache:false,
  				success:function(html){
  					$("#em_msg").html(html);
  				}
  			});
  		});

  	});
  </script>
</html>