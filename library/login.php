<?php include 'conn.php'; ?>
<?php
session_start();
if (isset($_SESSION['user'])) {
 header("location:index.php");
}
$email=$pass="";
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
 $pass=check_input($_POST['pass']);
  $pass=md5($pass);
  $select=$conn->query("SELECT * FROM users WHERE email='$email' and password='$pass'");
  if ($select->num_rows>0) {
   $_SESSION['user']=$email;
   header("location:index.php");
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
  <link rel="stylesheet" type="text/css" href="pure.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
 <?php include 'nav2.php'; ?>
 <div class="container">
  <div style="width: 50%; position: relative;left: 20%;">
<form role="form" method="post" action="<?php htmlspecialchars($_SERVER['REQUEST_METHOD']) ?>">
<div class="well w3-card-2">
<div class="box-body">
                  <div class="form-group">
                    <label for="email">Email adress:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" id="email" placeholder="Email adress..." name="email" required="required" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pswd">Password:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user-o"></i>
                      </div>
                      <input type="password" class="form-control" id="pswd" placeholder="Password..." name="pass" required="required" />
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="" value="Login" class="btn btn-primary"><span class="pull-right">Register <a href="register.php">here.</a> </span>
                  </div>

</div>
</div>
</form>
</div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>
