<?php include 'conn.php';
 $select=$conn->query("SELECT * FROM fruits ORDER BY id DESC LIMIT 3");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>URUBUTO</title>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<style type="text/css">
		.box{
			background-color: rgba(0,0,0,0.5);
			padding: 20px;
		}
	</style>
</head>
<body>
<?php include 'header.php'; ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="height: 656px;">
    <div class="item active">
      <img src="Images/fruits.jpg" alt="Chania" style="min-height: 100%; min-width: 100%;">
      <div class="carousel-caption" style="position: absolute;top: 20em;">
      	<div class="box w3-leftbar w3-border-blue">
        <h1>
WELCOME<br>
TO<br>
URUBUTO PLATFORM
</h1>
      </div>
    </div>
</div>
    <div class="item">
      <img src="Images/fruits1.jpg" alt="Chania" style="min-height: 100%; min-width: 100%;">
      <div class="carousel-caption" style="position: absolute;top: 20em;">
      	<div class="box w3-leftbar w3-border-blue">
        <h1>BE A REAL PERSON BY GETTING<br> BEST LIFE</h1>
      </div>
    </div>
</div>
    <div class="item">
      <img src="Images/fruits2.jpg" alt="Flower" style="min-height: 100%; min-width: 100%;">
      <div class="carousel-caption" style="position: absolute;top: 20em;">
      	<div class="box w3-leftbar w3-border-blue">
        <h1>CHANGE RWANDA AND PEAOPLE<br> IN WORLD OF BETTER LIFE</h1>
      </div>
    </div>
</div>
    <div class="item">
      <img src="Images/fruits3.jpg" alt="Flower" style="min-height: 100%; min-width: 100%;">
      <div class="carousel-caption" style="position: absolute;top: 20em;">
      	<div class="box w3-leftbar w3-border-blue">
        <h1>LIVE LONG<br> IN<br> HAPPY LIFE</h1>
      </div>
    </div>
  </div>
</div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container w3-margin-top">
	<header class="w3-container w3-blue w3-center"><h1>HELP LIFE</h1></header>
	<div class="w3-row-padding w3-margin-top">
    <?php while ($row=$select->fetch_assoc()) { ?>
	 <div class="w3-third">
  <div class="w3-card-4">
    <img src="<?=$row['image'] ?>" style="height:255px;width: 100%;">
    <div class="w3-container">
      <h4><b><?=$row['name'] ?></b></h4>
      <span><?= substr($row['det'], 0,20)."..." ?></span><br>
      <a href="more.php?action=details&id=<?=$row['id']?>" class="w3-btn w3-blue w3-margin-bottom">READ MORE</a>
    </div>
  </div>
</div> 
<?php } ?>	
</div>
<div class="w3-container w3-card-8" style="margin-top: 4%;margin-bottom: 4%;width: 70%;position: relative;left: 10%;">
<h1 class="w3-center">ASK QUESTION <a href="faq.php"> HERE.</a></h1>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>