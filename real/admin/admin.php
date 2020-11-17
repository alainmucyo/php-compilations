<?php
  include '../conn.php';
  include 'anti_intruder.php';
  $msg='none';
  $success='none';
  if (isset($_POST['add'])) {
    $username=stripslashes($_POST['username']);
    $username=mysql_real_escape_string($username);
    $password=stripslashes($_POST['password']);
    $password=mysql_real_escape_string($password);
    $password=md5($password);
    $photo_name=$_FILES['image']['name'];
    $photo_tmp_loc=$_FILES['image']['tmp_name'];
    if (!is_dir("admin_images")) {
      mkdir("admin_images");
    }
    $photo_store="admin_images/".$photo_name;
    if (move_uploaded_file($photo_tmp_loc, $photo_store)) {
    $check=$conn->query("SELECT * FROM admin WHERE username='$username'");
    if ($check->num_rows==0) {
      $insert=$conn->query("INSERT INTO admin(username,password,image) VALUES('$username','$password','$photo_store')") or die(mysql_error());
      if ($insert) {
        $success='block';
      }
    }
    else{
      $msg='block';

    }
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Add Admin</title>
      <link rel="stylesheet" href="css/admin.css">  
 <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
       <link rel="stylesheet" type="text/css" href="../css/w3.css">
       <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css"> 
</head>
<body>  
  <?php include 'header.php'; ?>
<form method="post" enctype="multipart/form-data" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" >
  <header>Add Admin</header>
  <label>Username <span>*</span></label>
  <input name="username" />
  <div class="help">At least 6 character</div>
  <label>Password <span>*</span></label>
  <input type="password"  name="password" />
  <div class="help">Use upper and lowercase lettes as well</div><br>
  <input type="file" name="image">
  <div class="alert alert-danger w3-margin" style="width: 79%;display: <?=$msg ?>">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Sorry!</strong> Username Is Already Used.
</div>
 <div class="alert alert-success w3-margin" style="width: 79%;display: <?=$success ?>">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success! </strong> Admin Added Successfully.
</div>
  <button type="submit" name="add">Add</button>
</form>
</body>
    <script src="js/index.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
      $(function(){
        $(".admin").addClass("w3-text-green");
      });
    </script>
</body>
</html>
</html>
