<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("location:login.php");
}
include 'conn.php';
$select=$conn->query("SELECT * FROM teachers");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teachers</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="col-md-3"></div>
 <div class="panel-group col-md-5">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        Teachers <span class="badge"><?=$select->num_rows ?></span>
      </h4>
    </div>
    <?php while ($row=$select->fetch_assoc()) {  ?>
      <div class="panel-body w3-border-bottom" style="text-transform: capitalize;">
      <a href="desc.php?action=prof&id=<?=$row['id'] ?>"><?=$row['name'] ?></a>
      <span class="w3-right">
        <a href="update.php?action=update&id=<?=$row['id'] ?>" class="w3-btn bg-green">Update</a>
        <a href="delete.php?action=delete&id=<?=$row['id'] ?>&class=teachers&opt=teachers" class="w3-btn bg-red">Delete</a></span>
    </div>
    <?php } ?>
      <div class="panel-footer">To Know More About A Teacher, Click On Name.</div>
  </div>
</div>
<div class="col-md-3">
  <a href="add_tea.php" class="w3-btn w3-blue">Add Teacher</a>
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