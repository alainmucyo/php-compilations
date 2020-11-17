<?php
	include 'conn.php';
	include 'anti_intruder.php';
	$email=$_SESSION['customer'];
	$msg='none';
	$check='none';
	$select=$conn->query("SELECT * FROM users WHERE email='$email'");
	if (isset($_POST['submit'])) {
		if ($_POST['current']==$email) {
			$select1=$conn->query("SELECT * FROM users WHERE email='$email'");
			while ($res=$select1->fetch_assoc()) {
				$id=$res['id'];
			}
			$new=htmlspecialchars($_POST['new']);
			$new=mysql_real_escape_string($new);
			$select2=$conn->query("SELECT * FROM users WHERE email='$new'");
			if ($select2->num_rows==0) {
				$update=$conn->query("UPDATE users SET email='$new' WHERE id='$id'") or die(mysql_error());
				if ($update) {
					header("location:logout.php");
				}
			}
			else{
				$check='block';
			}
		}
		else{
			$msg='block';
		}
		
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body style="text-transform: capitalize;">
<?php include 'header.php'; ?>
<div class="col-md-1"></div>
<div class="col-md-4 w3-margin-bottom">
	<div class="w3-card-16 w3-border">
		<header class="w3-container w3-deep-orange text-center"><h3>Update email</h3></header>
		<form class="w3-container" role="form" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
			<div class="form-group w3-margin-top">
				<label class="w3-text-deep-orange">current email</label>
				<input type="email" name="current" class="w3-input">
			</div>
			<div class="form-group">
				<label class="w3-text-deep-orange">new email</label>
				<input type="email" name="new" class="w3-input">
			</div>
			<div class="alert alert-danger fade in" style="display: <?=$msg ?>;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Sorry !</strong> current email you entered don't match with one you registered.
</div>
<div class="alert alert-danger fade in" style="display: <?=$check ?>;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Sorry !</strong> email you are trying to use is already used.
</div>
			<div class="form-group">
				<input type="submit" name="submit" class="w3-btn w3-btn-block bg-blue w3-ripple" value="Update">
			</div>
		</form>
	</div>
</div>
<div class="col-md-5 w3-margin-bottom">
	<?php while ($row=$select->fetch_assoc()) { ?>
	<div class="w3-card-2 w3-round-large w3-light-grey">
		<header class="w3-container w3-deep-orange text-center"><h2>your profile</h2></header>
		<div class="w3-container w3-margin-top">
			<p><b>Name:</b> <?=$row['name'] ?></p>
			<p><b>adress:</b> <?=$row['adress'] ?></p>
			<p><b>mobile number:</b> <?=$row['phone'] ?></p>
			<p><b>gender:</b> <?=$row['gender'] ?></p>
			<p><b>birth date:</b> <?=$row['bdate'] ?></p>
			<p><b>email:</b> <?=$row['email'] ?></p>
			<p><a href="update.php?action=profile&id=<?=$row['id'] ?>" class="w3-btn w3-blue w3-ripple">Edit profile</a>
		 	<a href="update.php?action=password&id=<?=$row['id'] ?>" class="w3-btn w3-teal pull-right w3-ripple">Change password</a></p>
		</div>
	</div>
	<?php } ?>
</div>
</body>
<script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".login").hide();
  		$(".signup").hide();
  		$(".profile").show();
  		$(".profile").addClass("active");
  	});
  </script>
</html>