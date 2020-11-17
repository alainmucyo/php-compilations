<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome <?=$_SESSION['user']; ?></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body class="w3-light-grey">
<?php include 'header.php'; ?>
<div class="container w3-center w3-leftbar w3-border-blue">
	<h1>Welcome<br> To Nyamata T.S.S<br> Students<br> And<br> Teachers<br> Managment System</h1>
	<h3>Here, You Can See List Of Students,Modify Them, Delete<br>
		And Even Teachers. The Students Are Listed According To Classes.
	</h3>
<a href="level3.php" class="btn bg-blue w3-margin w3-large">Level 3</a>
<a href="level4.php" class="btn bg-blue w3-margin w3-large">Level 4</a>
<a href="senior6.php" class="btn bg-blue w3-margin w3-large">Senior 6</a>
<a href="teachers.php" class="btn bg-blue w3-margin w3-large">Teachers</a>
</div>
</body>
  <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".login").hide();
  		$(".home").addClass("active");
  	});
  </script>
</html>