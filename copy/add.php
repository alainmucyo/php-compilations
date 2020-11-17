<?php 
include 'conn.php';
session_start();
if (!isset($_SESSION['user'])) {
	header("location:login.php");
}
$name=$desc="";
if ($_SERVER['REQUEST_METHOD']=="POST") {
		function check_value($data)
		{
			$data=trim($data);
			$data=stripslashes($data);
			$data=mysql_real_escape_string($data);
			return $data;
		}
	$name=check_value($_POST['name']);
	$desc=check_value($_POST['desc']);
	$photo_name=uniqid();
	$photo_temp_loc=$_FILES['picture']['tmp_name'];
		if (!is_dir("fruit")) {
			mkdir("fruit");
		}
		$photo_store="fruit/".$photo_name;
		if (move_uploaded_file($photo_temp_loc, $photo_store)) {
			$insert=$conn->query("INSERT INTO fruits(name,det,image) VALUES('$name','$desc','$photo_store') ");
			if ($insert=="TRUE") {
				header("location:fruits.php");
			}
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Fruits</title>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div class="container" style="margin-top: 7%;">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		<div class="w3-card-2 w3-round-large">
		<header class="w3-blue w3-container text-center w3-round-large"><h1>Fruit Description And What It Helps Body.</h1></header>
		<form class="w3-container w3-margin-top" style="margin-bottom: 28%;" role="form" method="post" enctype="multipart/form-data" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
			<div class="form-group">
				<label class="w3-label w3-text-blue">Fruit Name:</label>
				<input type="text" name="name" class="w3-input" placeholder="Fruit Name" required="required">
			</div>
			<div class="form-group">
				<label class="w3-label w3-text-blue">Fruit Description:</label>
				<textarea name="desc" class="w3-input" placeholder="Fruit Description" required="required"></textarea>
			</div>
			<div class="form-group">
				<label class="w3-label w3-text-blue">Fruit Photo</label>
				<input type="file" name="picture">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Add Fruit" class="w3-btn w3-blue">
			</div>
		</form>
	</div>
</div>
</div>
<?php include 'header.php';?>
<?php include 'footer.php';?>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".home").removeClass("active");
		$(".add").addClass("active");
	})
</script>
</html>