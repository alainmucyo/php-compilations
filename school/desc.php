<?php include 'conn.php';
$id=$_GET['id'];
	$select=$conn->query("SELECT * FROM teachers WHERE id='$id'");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Teachers Description</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="w3-card-2 w3-light-grey">
	<?php while ($row=$select->fetch_assoc()) {	?>
	<header class="w3-container bg-blue text-center"><h2><?=$row['name'] ?></h2></header>
	<div class=" container w3-margin-top" style="text-transform: capitalize;">
		<p>
		<span><b>Contact:</b> <?=$row['contact'] ?></span>
	</p>
		<p>
		<span><b>Level Of Studies:</b> <?=$row['level'] ?></span>
	</p>
		<p>
		<span><b>Lessons To teach:</b> <?=$row['lesson'] ?></span>
	</p>
		<p>
		<span><b>Hours per week:</b> <?=$row['hours'] ?></span>
	</p>
		<p>
		<span><b>gender:</b> <?=$row['sex'] ?></span>
	</p>
	</div>
		<footer class="w3-border-top w3-container text-center">Need To Make Update, please Click<a href="update.php?action=update&id=<?=$row['id'] ?>" class="btn btn-link">Here.</a></footer>
		<?php } ?>
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