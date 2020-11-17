<?php session_start();
if (!isset($_SESSION['user'])) {
	header("location:login.php");
}
include 'conn.php';
include 'nav.php';
if (isset($_GET['action'])) {
	if ($_GET['action']=='delete') {
		$id=$_GET['id'];
		$delete=$conn->query("DELETE FROM books WHERE Id='$id'");
		header("location:edit.php");
		if ($delete==FALSE) {
			die("ohhh shit");
		}
	}
	else{

		$id=$_GET['id'];
		$nu_name=$nu_type="";
		if($_SERVER['REQUEST_METHOD']=="POST"){
		function check_input($data)
		{
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			$data=mysql_real_escape_string($data);
			return $data;
		}
		$nu_name=check_input($_POST['b_name']);
		$nu_type=check_input($_POST['b_type']);
		if($nu_name=!"null" or $nu_type=!"null"){
		if (isset($_POST['nu_name'])) {
			$update=$conn->query("UPDATE books SET book_name='$nu_name' WHERE Id='$id'");
			if ($update==FALSE) {
				echo "fuck";
			}

		}
		else{
			$update=$conn->query("UPDATE books SET book_type='$nu_type' WHERE Id='$id'");
			if ($update==FALSE) {
				echo "fuck";
		}
	}
}
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome<?= " ". $_SESSION['user'] ?></title>
	<link rel="stylesheet" href="pure.css">
		<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<style type="text/css">
		body{
			background-image: url("images/black.jpg");
			background-size: cover;
		}
		.w3-input{
			background-color: rgba(0,0,0,0);
			color: white;
		}
	</style>
</head>
<body>
	<div class="container">
<form role="form" method="post" action="<?php htmlspecialchars($_SERVER['REQUEST_METHOD']) ?>" style="position: relative;left: 20%;">
	<div class="w3-form-group">
<label for="b_name" class="w3-text-teal">New book name</label><br>
	<input type="text" name="b_name" class="w3-input w3-border w3-col m4 l4" placeholder="New book name" id="b_name" >
	<input type="submit" value="Change name" name="nu_name" class="w3-btn w3-large w3-border w3-hover-teal w3-round" style="background-color: rgba(0,0,0,0);">
</div>
<div class="w3-form-group">
<label for="b_name" class="w3-text-teal">New book type</label><br>
	<input type="text" name="b_type" class="w3-input w3-border w3-col m4 l4" placeholder="New book type" id="b_name" >
	<input type="submit" value="Change type" name="nu_type" class="w3-btn w3-large w3-border w3-hover-teal w3-round" style="background-color: rgba(0,0,0,0);">
</div>
	
</form>
</div>
</body>
 <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".remove").removeClass("active");
		$("#add").addClass("active");
		$("#hide").hide();
	});
</script>
</html>