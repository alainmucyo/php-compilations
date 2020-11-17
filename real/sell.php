<?php 
	include 'anti_intruder.php';
	include 'conn.php';
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
<div class="col-md-3"></div>
<div class="col-md-6 w3-margin-bottom">
  <div class="w3-card-2">
    <header class="w3-container text-center w3-deep-orange"><h3>upload property</h3></header>
    <form class="w3-container" method="post" action="insert_prop.php" role="form" enctype="multipart/form-data">
      <div class="form-group w3-margin-top">
        <label class="w3-text-deep-orange">category</label>
        <select name="category" class="w3-input">
          <option value="home">Home</option>
          <option value="shop">Shop</option>
          <option value="land">Land</option>
        </select>
      </div>
      <div class="form-group">
        <label class="w3-text-deep-orange">property name</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label class="w3-text-deep-orange">property Adress</label>
        <textarea class="form-control" name="adress" required="required" placeholder="Povince,District,Sector,Cell,Village..."></textarea>
      </div>
      <div class="form-group">
        <label class="w3-text-deep-orange">area(km<sup>2</sup>)</label>
        <input type="text" name="area" class="form-control">
      </div>
      <div class="form-group">
        <label class="w3-text-deep-orange">Property image</label>
        <input type="file" name="image">
      </div>
      <div class="form-group">
        <label class="w3-text-deep-orange">furnished</label>
        <select class="w3-input" name="furnished">
          <option value="yes">Yes</option>
          <option value="yes">No</option>
        </select>
      </div>
      <div class="form-group">
        <label class="w3-text-deep-orange">Age</label>
        <input type="text" name="age" class="form-control" placeholder="Like 2 Years Or 5 Months">
      </div>
      <div class="form-group">
        <label class="w3-text-deep-orange">Distance from district town</label>
<select class="w3-input" name="distance">
  <option value="near">Near</option>
  <option value="medium">Medium</option>
  <option value="far">Far</option>
</select>
      </div>
      <div class="form-group">
        <label class="w3-text-deep-orange">Property description</label>
        <textarea class="form-control" name="desc" placeholder="Number Of Rooms, Electricity, Water,..."></textarea>
      </div>
      <div class="form-group">
        <label class="w3-text-deep-orange">cost(Rwf)</label>
        <input type="text" name="cost" class="form-control" required="required">
      </div>
      <div class="form-group">
        <input type="submit" name="upload" value="Upload" class="btn w3-deep-orange">
      </div>
    </form>
  </div>
</div>
</body>
<script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".login").hide();
  		$(".signup").hide();
  		$(".profile").show();
  		$(".sell").addClass("active");
  	});
  </script>
</html>