<?php 
	include 'conn.php';
	include 'anti_intruder.php';
	$email=$_SESSION['customer'];
	if (isset($_GET['action'])) {
		?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Update <?=$_GET['action'] ?></title>
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
 	<?php if ($_GET['action']=='password') {
 		$error='none';
 		$error2='none';
 		if(isset($_POST['pass'])){
 		function check_input($data)
		{
			$data=htmlspecialchars($data);
			$data=stripcslashes($data);
			$data=trim($data);
			$data=mysql_real_escape_string($data);
			return $data;
		}	
		$old=check_input($_POST['old']);
		$old=md5($old);
		$new=check_input($_POST['new']);
		$new=md5($new);
		$conf=check_input($_POST['conf']);
		$conf=md5($conf);
		$check_old=$conn->query("SELECT * FROM users WHERE email='$email' AND password='$old'");
			if ($check_old->num_rows>0) {
		if ($new==$conf) {
			$update=$conn->query("UPDATE users SET password='$conf' WHERE email='$email'") or die(mysql_error());
				header("location:profile.php");
			}
			else{
				$error2='block';
			}
		}
		else{
			$error='block';
		}
	}
	?>
 	<div>
 		<div class="col-md-4"></div>
 <div class="col-md-4">
 	<div class="w3-card-2">
 		<header class="w3-container text-center w3-deep-orange"><h3>Change password</h3></header>
 		<form class="w3-container" role="form" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
 			<div class="form-group w3-margin-top">
 				<label class="w3-text-deep-orange">Your old password</label>
 				<input type="password" name="old" class="w3-input w3-light-grey w3-border" required="required">
 			</div>
 			<div class="form-group">
 				<label class="w3-text-deep-orange">new password</label>
 				<input type="password" name="new" class="w3-input w3-light-grey w3-border" required="required">
 			</div>
 			<div class="form-group">
 				<label class="w3-text-deep-orange">confirm new password</label>
 				<input type="password" name="conf" class="w3-input w3-light-grey w3-border" required="required">
 			</div>
 			<div class="alert alert-danger" style="display: <?=$error2 ?>;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Please</strong> your new passwords don't match.
</div>
 			<div class="alert alert-danger" style="display: <?=$error ?>;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Please</strong> your old password don't match with one you registered.
</div>
 			<div class="form-group">
 				<input type="submit" name="pass" class="w3-btn w3-deep-orange w3-ripple" value="Change">
 			</div>
 		</form>
 	</div>
 </div>
</div>
	<?php
}
if($_GET['action']=='profile'){
	$msg='none';
	$id=$_GET['id'];
	if (isset($_POST['update'])) {
		function check_input($data)
		{
			$data=htmlspecialchars($data);
			$data=stripcslashes($data);
			$data=trim($data);
			$data=mysql_real_escape_string($data);
			return $data;
		}
		$name=check_input($_POST['name']);
		$adress=check_input($_POST['adress']);
		$phone=check_input($_POST['phone']);
		$bdate=check_input($_POST['bdate']);
			$update=$conn->query("UPDATE users SET name='$name',adress='$adress',phone='$phone',bdate='$bdate' WHERE id='$id'") or die(mysql_error());
			if ($update) {
				header("location:profile.php");
			}
		}
	
	$select=$conn->query("SELECT * FROM users WHERE email='$email'");
	while ($row=$select->fetch_assoc()) {

	?>
	<div class="col-md-3"></div>
<div class="col-md-5 w3-margin-bottom">
	<div class="w3-card-2">
		<header class="w3-container text-center w3-deep-orange"><h3>Update Form</h3></header>
		<form class="w3-container" method="post" action="<?php $_SERVER['PHP_SELF'] ?>" role="form">
			<div class="form-group w3-margin-top">
				<label class="w3-text-deep-orange">Name:</label>
				<input type="text" name="name" class="form-control" required="required" value="<?=$row['name'] ?>">
			</div>
						<div class="form-group">
				<label class="w3-text-deep-orange">Birth Date:</label>
<input type="text" onclick="ds_sh(this);" name="bdate" class="form-control" required="required" value="<?=$row['bdate'] ?>" />
			</div>
			<div class="form-group">
				<label class="w3-text-deep-orange">Adress:</label>
				<textarea class="form-control" name="adress" required="required"><?=$row['adress'] ?></textarea>
			</div>

			<div class="form-group">
				<label class="w3-text-deep-orange">Mobile number:</label>
				<input type="text" name="phone" class="form-control" required="required" value="<?=$row['phone'] ?>">
			</div>
			<div class="form-group">
				<input type="submit" name="update" value="Update" class="btn w3-deep-orange" id="reg">
			</div>
		</form>
	</div>
</div>
	<?php
}
} 
}	
 ?>
 <div class="w3-margin-64">
 </div>
 </body>
 <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
   <script type="text/javascript" src="js/calendar.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".login").hide();
  		$(".signup").hide();
  		$(".profile").show();
  		$(".profile").addClass("active");
  	});
  </script>
 </html>