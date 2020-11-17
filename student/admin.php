<?php
include 'conn.php';
session_start();
if (!isset($_SESSION['admin'])) {
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome <?=$_SESSION['admin']?></title>
		<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php
include 'header.php'; ?>
<div class="w3-container">
	<?php $select=$conn->query("SELECT * FROM students"); 	?>
	<div class="table-responsive">
 <table class="w3-table table-bordered table-condensed">
 	<tr>
 	<th>Full Name</th>
 	<th>Email</th>
 	<th>Option</th>
 	<th>O level</th>
 	<th>Sex</th>
 	<th>Reports</th>
 	<th>Decision</th>
 </tr>
 <?php
while ($row=$select->fetch_assoc()) {
?>
<tr>
	<td><?= $row['full_name'] ?></td>
	<td><?= $row['email'] ?></td>
	<td><?= $row['level'] ?></td>
	<td><?= $row['aggregate'] ?></td>
	<td><?= $row['sex'] ?></td>
	<td><a href="reports.php?report=diploma&id=<?=$row['id']?>" class="btn w3-teal diploma" target="blank">Diploma</a><a href="reports.php?report=five&id=<?=$row['id']?>" class="btn w3-blue" style="position: relative;left: 70px;" target="blank">Senior5</a><a href="reports.php?report=six&id=<?=$row['id']?>" class="btn w3-cyan pull-right" target="blank">Senior6</a></td>
	<td><a class="w3-btn w3-green" href="decision.php?decision=accept&id=<?=$row['id']?>">Accept</a><a class="w3-btn w3-red pull-right" href="decision.php?decision=decline&id=<?=$row['id']?>">Decline</a></td>
</tr>

<?php
}
 ?>
 </table>
</div>
</div>

</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".apply").hide();
		$("#index").hide();
		$(".diploma").click(function(){
		})
	})
</script>
</html>