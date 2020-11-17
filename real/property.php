<?php
	include 'conn.php';
	include 'anti_intruder.php';
	$email=$_SESSION['customer'];
	$msg='none';
	$check=$conn->query("SELECT * FROM users WHERE email='$email'");
	while ($res=$check->fetch_assoc()) {
		$id=$res['id'];
	}
	$select=$conn->query("SELECT * FROM property WHERE user_id='$id'");
	if (isset($_GET['action'])) {
		if ($_GET['action']=='delete') {
			$del_id=$_GET['id'];
			$delete=$conn->query("DELETE FROM property WHERE id='$del_id'") or die(mysql_error());
			if ($delete) {
				header("location:property.php");
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Property</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
	<?php
	if ($select->num_rows>0) {

	 while ($row=$select->fetch_assoc()) { ?>
	<div class="w3-container">
		<img src="<?=$row['image']?>" width="200px" height="100px" class="w3-round">
		<span><b>Name: </b><?=$row['name']?></span>. <span><b>adress: </b><?=$row['adress']?></span>. <span><b>Category: </b><?=$row['category']?></span>. <span><b>Description: </b><?=$row['description']?></span>. <a href="property.php?action=delete&id=<?=$row['id'] ?>" class="btn btn-danger btn-xs">Delete</a>
	</div><br><hr>
	<?php } }
	else{
		$msg='block';
		}
	 ?>
	
	<div class="w3-container w3-red w3-round w3-border" style="text-transform: capitalize;display: <?=$msg ?>;">
  <h2>No Property!</h2>
  <h4>There is no property uploaded by you, if you want to upload, please click <a href="sell.php">here</a> .</h4>
</div> 
</div>
</body>
<script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".login").hide();
  		$(".signup").hide();
  		$(".profile").show();
  		$(".property").addClass("active");
  	});
  </script>
</html>