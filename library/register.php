<?php include 'conn.php' ?>
<?php 
$email=$password=$conf_password="";
if ($_SERVER['REQUEST_METHOD']=="POST") {
 function check_input($data)
 {
   $data=trim($data);
   $data=stripslashes($data);
   $data=htmlspecialchars($data);
   $data=mysql_real_escape_string($data);
   return $data;
 }
 $email=check_input($_POST['email']);
 $password=check_input($_POST['password']);
 $conf_password=check_input($_POST['conf_password']);
  $password=md5($password);
  $conf_password=md5($conf_password);
  if ($password==$conf_password) {
    $select=$conn->query("SELECT * FROM users where email='$email'");
    if ($select->num_rows<1) {
      $insert=$conn->query("INSERT INTO users(email,password) VALUES('$email','$password')");
      session_start();
      $_SESSION['user']=$email;
      header("location:index.php");
    }
    else{
      echo "<script>alert('Use another email')</script>";
    }


  }
    else{
    echo "<script>alert('password not match' )</script>";
   }
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  <link rel="stylesheet" type="text/css" href="pure.css">
		<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="iCheck/all.css">
</head>
<body>
<?php include 'nav2.php'; ?>
<div class="container">

  <div class="pure-u-1-2" style="position: relative;left: 20%;">
	<form role="form" method="post" action="<?php htmlspecialchars($_SERVER['REQUEST_METHOD']) ?>">
	<div class="well w3-card-2">
	<label>Email adress:</label>
	<div class="form-group">		
			<input type="email" name="email" id="lname" class="form-control" placeholder="Email adress" required="required">
	</div>
	 
<label>Password:</label>
	<div class="form-group">		
		<input type="password" name="password" class="form-control" placeholder="Set password" required="required">
  </div>
  <div class="form-group">
    <label>Confirm password</label>
			<input type="password" name="conf_password" id="lname" class="form-control" placeholder="Confirm password" required="required">
    </div>
	<br><br>
	<div class="form-group">
                  <input type="checkbox" class="minimal-red" checked/ id="check" required="required">
                    <label for="check">
                      Accept terms and agreement
                    </label>
                    <span class="pull-right">Login <a href="login.php"> here.</a></span>
                  </div>
                <input type="submit" name="" value="Register" class="btn btn-success btn-block">
</div>
</div>
</div>
</form>
</div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="iCheck/icheck.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
        $(".my-colorpicker1").colorpicker();
        $(".my-colorpicker2").colorpicker();
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
 
</script>
</html>
<html>
