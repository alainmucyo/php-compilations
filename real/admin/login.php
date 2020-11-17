<?php include '../conn.php';
  $msg="none";
  if ($_SERVER['REQUEST_METHOD']=="POST") {
    $username=stripcslashes($_POST['username']);
    $password=stripcslashes($_POST['password']);
    $password=md5($password);
    $check=$conn->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
    if ($check->num_rows>0) {
      session_start();
      $_SESSION['admin']=$username;
      header("location:index.php");
    }
    else{
      $msg="block";
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log-in</title> 
 <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
      <link rel="stylesheet" href="css/login.css">

</head>

<body>

  <div class="login-card">
    <h1>Admin Login </h1><br>
  <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <div class="alert alert-danger" style="display: <?=$msg ?>;">
  <strong>Sorry!</strong> Wrong Email Or Password.
</div>
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
  <div class="login-help">
 <a href="../index.php">Not Admin?</a>  • <a href="#">Forgot Password?</a>
  </div>
</div>
</body>
</html>
