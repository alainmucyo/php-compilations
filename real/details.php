<?php
	include 'anti_intruder.php';
	include 'conn.php';
	 $id=$_GET['id'];
	 $select1=$conn->query("SELECT * FROM property WHERE id='$id'");
	 while ($result=$select1->fetch_assoc()) {
	 	$user_id=$result['user_id'];
	 }
	 $user=$conn->query("SELECT * FROM users WHERE id='$user_id'");
	 $select=$conn->query("SELECT * FROM property WHERE id='$id'");

?>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body style="text-transform: capitalize;">
<?php include 'header.php'; ?>
<div class="container">
	<?php while ($row=$select->fetch_assoc()) { 
	 ?>
	<div class="col-md-4 w3-margin-bottom">
		<div class="w3-card-4">
		<header class="w3-container w3-deep-orange text-center"><h1><?=$row['name'] ?> Image</h1></header>
		<img src="<?=$row['image'] ?>" style="width: 100%;height: 100%;">
	</div>
	</div>
	<div class="col-md-6">
		<div class="w3-card-4">
			<header class="w3-container w3-deep-orange text-center"><h1>About <?=$row['name'] ?></h1></header>
			<table class="w3-table w3-striped">
				<tr><td><b>category:</b> <?=$row['category'] ?></td></tr>
				<tr><td><b>adress:</b> <?=$row['adress'] ?></td></tr>
				<tr><td><b>description:</b> <?=$row['description'] ?></td></tr>
				<tr><td><b>area: </b> <?=$row['area'] ?> km<sup>2</sup></td></tr>
				<tr><td><b>age: </b> <?=$row['age'] ?></td></tr>
				<tr><td><b>distance from district own: </b> <?=$row['distance'] ?></td></tr>
				<tr><td><b>furnished: </b> <?=$row['furnshed'] ?></td></tr>
				<tr><td><b>cost: </b> <?=$row['cost'] ?> rwf</td></tr>	
				<tr><td><h5 class="text-center"><b>Like it? Contact owner <a href="#" data-toggle="modal" data-target="#myModal" class="w3-text-blue">here.</a></b></h5></td></tr>
			</table>
		</div>
	</div>
</div>
<?php } ?>
<?php while ($det=$user->fetch_assoc()) {  ?>
	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">about Property owner</h4>
      </div>
      <div class="modal-body">
        <p><b>Name:</b> <?=$det['name'] ?></p>
        <p><b>Adress:</b> <?=$det['adress'] ?></p>
        <p><b>mobile contact:</b> <?=$det['phone'] ?></p>
        <p><b>gender:</b> <?=$det['gender'] ?></p>
        <p><b>birth date:</b> <?=$det['bdate'] ?></p>
        <p><b>email adress:</b> <?=$det['email'] ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>
</body>
<script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".login").hide();
  		$(".signup").hide();
  		$(".profile").show();
  		$(".buy").addClass("active");
  	});
  </script>
</html>