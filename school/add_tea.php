<?php session_start();
if (!isset($_SESSION['user'])) {
	header("location:login.php");
}
include 'conn.php';
if ($_SERVER['REQUEST_METHOD']=="POST") {
$name=$_POST['name'];
$contact=$_POST['contact'];
$level=$_POST['level'];
$lesson=$_POST['lesson'];
$hours=$_POST['hours'];
$sex=$_POST['sex'];
$insert=$conn->query("INSERT INTO teachers(name,contact,level,lesson,hours,sex) VALUES ('$name','$contact','$level','$lesson','$hours','$sex')");
if ($insert==TRUE) {
	header("location:teachers.php");
}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Teacher</title>
			<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container w3-margin-bottom">
	<div class="col-md-3"></div>
	<div class="col-md-6">
	<div class="w3-card-2">
<header class="w3-container bg-blue text-center"><h1>Add Teacher</h1></header>
<form class="w3-container" role="form" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
	<div class="form-group w3-margin-top">
		<label class="w3-label w3-text-blue">Full Name:</label>
		<input type="text" name="name" class="form-control">
	</div>
		<div class="form-group">
		<label class="w3-label w3-text-blue">Contact:</label>
		<input type="text" name="contact" class="form-control" value="+250">
	</div>
		<div class="form-group">
		<label class="w3-label w3-text-blue">Level Of Studies:</label>
		<input type="text" name="level" class="form-control">
	</div>
		<div class="form-group">
		<label class="w3-label w3-text-blue">Lessons To Teach:</label>
		<input type="text" name="lesson" class="form-control">
	</div>
		<div class="form-group">
		<label class="w3-label w3-text-blue">Hours Per Week:</label>
		<input type="text" name="hours" class="form-control">
	</div>
		<div class="form-group">
		 <label class="w3-text-blue">Sex:</label><br>
      <input class="w3-radio" type="radio" name="sex" value="Female" id="girl" checked>
<label class="w3-validate" for="girl">Female</label>

<input class="w3-radio" type="radio" name="sex" value="Male" id="boy">
<label class="w3-validate" for="boy">Male</label>
	</div>
		<div class="form-group">
		<input type="submit" name="submit" class="btn bg-blue" value="Add">
	</div>
</form>
</div>
</div>
</div>
</body>
  <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".login").hide();
  		$(".teachers").addClass("active");
  	});
  </script>
</html>