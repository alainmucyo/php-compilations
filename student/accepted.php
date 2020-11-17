<?php
include 'conn.php';
session_start();
if (!isset($_SESSION['admin'])) {
	header("location:login.php");
}
$select=$conn->query("SELECT * FROM accepted");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Accepted students</title>
		<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
<table class="w3-table w3-bordered w3-striped w3-border w3-card-2" style="width: 70%;position: relative;left: 18%;top: 15px;">
	<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Email</th>
	</tr>
	<?php
	while ($row=$select->fetch_assoc()) {
	?>
	<tr>
		<td><?=$row['id']?></td>
		<td><?=$row['name']?></td>
		<td><?=$row['email']?></td>
	</tr>
	<?php } ?>
</table>
</div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".apply").hide();
		$("#index").hide();
		$(".admin").removeClass("active");
		$("#accepted").addClass("active");
	});
</script>
</html>