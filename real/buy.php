<?php 
	include 'anti_intruder.php';
	include 'conn.php';
	$select=$conn->query("SELECT * FROM property");
	$result_per_page=12;
	$total_result=$select->num_rows;
	if (!isset($_GET['page'])) {
		$page=1;
	}
	else{
		$page=$_GET['page'];
	}
	$number_of_pages=ceil($total_result/$result_per_page);
	$this_page_result=($page-1)*$result_per_page;
	$sql=$conn->query("SELECT * FROM property ORDER BY id DESC LIMIT $this_page_result,$result_per_page");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Buy Estate</title>
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
	<div class="col-md-3"></div>
	<div class="col-md-8">
	<form class="w3-container" role="form" method="post">
		<div class="col-md-4">
			<div class="form-group">
		<select name="category" class="form-control" id="category">
			<option>Select category</option>
			<option value="home">Home</option>
			<option value="Land">Land</option>
			<option value="Shop">Shop</option>
		</select>
	</div>
</div>
<div class="col-md-5">
<input type="text" name="search" class="form-control" placeholder="Search Location" id="search">
	</div>
</form>
</div><br><br>
<h5 class="text-center w3-margin">Here there is list of all available property, or you can search for Location like district, sector where property is found with or without selecting category. when you choose property you click on read more, to get more about property and we provide you various way to know and contact owner.</h5>
</div>
<div class="container">
	<div id="msg">
<div class="w3-margin-top">
<?php while ($row=$sql->fetch_assoc()) { ?>
<div class="col-md-4 w3-margin-top">
	<div class="w3-card-2 w3-border w3-round" style="height: 350px;">
		<img src="<?=$row['image'] ?>" style="width: 100%; height: 270px;">
		<div class="w3-container w3-padding">
			<span><b>Adress: </b><?=substr($row['adress'], 0,20)."..." ?></span>
		</div>
		<div class="w3-container">
			<a href="details.php?id=<?=$row['id'] ?>" class="w3-btn w3-deep-orange">Read More...</a>
		</div>
	</div>
</div>
<?php } ?>
</div>
</div>
<div class="text-center">
<ul class="pagination">
	<?php for ($page=1; $page <=$number_of_pages ; $page++) {  ?>
  <li><a href="buy.php?page=<?=$page ?>"><?=$page ?></a></li>
  <?php } ?>
</ul>
</div>
</div>
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
  <script type="text/javascript">
  	$(function(){
  		$("#category").change(function(){
  			var category=$("#category").val();
  			$.ajax({
  				type:'post',
  				url:'ajax_buy.php',
  				data:{'category':category},
  				cache:false,
  				success:function(html){
  					$("#msg").html(html);
  				}
  			});
  		});
  	});
  </script>
  <script type="text/javascript">
  	$("#search").keyup(function(){
  		var search=$("#search").val();
  		var category=$("#category").val();
  		$.ajax({
  			type:'post',
  			url:'ajax_buy.php',
  			data:{'search':search,'category':category},
  			cache:false,
  			success:function(html){
  				$("#msg").html(html);
  			}
  		});
  	});
  </script>
</html>