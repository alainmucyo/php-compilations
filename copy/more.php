<?php
	include 'conn.php';
	if (isset($_GET['action'])) {
		if ($_GET['action']=='details') {
			$id=$_GET['id'];
			$select=$conn->query("SELECT * FROM fruits WHERE id='$id'");
		}
		}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>About </title>
		<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<div style="margin-top: 5%;">
	<div class="col-md-1"></div>
	<div class="w3-row-padding" style="margin-bottom: 22%;position: relative;">
		<?php while ($result=$select->fetch_assoc()) { ?>
		<div class="col-md-5">
			<div class="w3-card-8">
			<header class="w3-container w3-blue text-center" style="text-transform: uppercase;"><h1><?=$result['name'] ?></h1></header>
		<img src="<?=$result['image'] ?>" style="width: 100%;height: 100%;">
	</div>
	</div>
	<div class="col-md-5">
		<div class="w3-card-2 w3-light-grey">
			<header class="w3-container w3-blue text-center"><h1>Description</h1></header>
			<div class="w3-container  w3-margin-top" style="text-transform: capitalize;">
				<h4><?=$result['det'] ?></h4>
			</div>
		</div>		
	</div>
	<?php } ?>
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".home").removeClass("active");
		$(".fruits").addClass("active");
	})
</script>
<?php
session_start();
echo $_SESSION['show'];
?>
</html>