<!DOCTYPE html>
<html>
<head>
	<title>Real Estate | Property Managment System</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body style="font-family: verdana;">
<?php include 'header.php'; ?>
<div class="w3-container">
	<div class=" w3-leftbar w3-border-orange">
		<div class="w3-container">
			<div class="text-center">
			<h2 class="w3-text-deep-orange"><b>WELCOME TO OUR COMPANY !</b></h2>
			<h4>Welcome To Real Estate Property Management System.<br> This Portal is designed to provide the facility using which customer can buy or sale their properties such as land, shop and house. Just you have to register yourself on the web portal. Once you register yourself, you can upload information of the properties you want to sale and you can also search properties to buy. </h4>
		</div>
	
		<div>
				<img src="images/house.jpg" class="w3-round-large w3-border w3-col m2 s2">
				<div class="w3-col m8 s8 w3-margin-left"><h5><a href="buy.php" class="w3-text-green"> <b>Buy Property:</b></a> Here you can search for various properties such as House, land and Shops as per your requirenments. You can view the details of each and every property. If you are intrested then you can contact to the owner of the property.</h5></div>
		</div><br><br><br><br><br>
		<div>
				<img src="images/2.jpg" class="w3-round-large w3-border w3-col m2 s2" height="108px">
				<div class="w3-col m8 s8 w3-margin-left"><h5><a href="sell.php" class="w3-text-blue"> <b>Sell Property:</b></a> Here You can search for the Properties such as House, land and Shops in different areas and with different requirenments. You can search all kind of properties here. It also allows you to view the details of each and every property.</h5>
		</div>
	</div><br><br><br><br><br>
	<div>
		<img src="images/house4.gif" class="w3-round-large w3-border w3-col m2 s2" height="108px">
				<div class="w3-col m8 s8 w3-margin-left"><h5>Once You <a href="signup.php" class="w3-text-teal">registered</a> yourself on the web portal you can buy as well as sale properties through this web portal. You can send feedback to the administrator of the portal. </h5>
	</div><br><br><br><br><br><br>
	<div class="text-center">
	<a href="buy.php" class="btn w3-green w3-large">Buy</a> OR <a href="sell.php" class="btn bg-blue w3-large">Sell</a><br><br><br>
</div>
	</div>
</div>
</div>
</body>
 <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".logout").hide();
  		$(".ticket").show();
  		$(".home").addClass("active");
  	});
  </script>
</html>