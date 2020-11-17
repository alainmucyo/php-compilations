<?php
 include 'conn.php';
 session_start();
if (!isset($_SESSION['user'])) {
	header("location:login.php");
}
	$cel=$conn->query("SELECT * FROM cel");
	$elec=$conn->query("SELECT * FROM elec");
	$mge=$conn->query("SELECT * FROM mge");
	$cons=$conn->query("SELECT * FROM cons");
	$cap=$conn->query("SELECT * FROM cap");
	$tal=$conn->query("SELECT * FROM tal");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>List Of Students</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    </head>
<body>
	<?php include 'header.php'; ?>
	<div class="container">
		<div class="w3-card-2 card">
			<header class="w3-container bg-blue text-center"><h1>Senior Six</h1></header>
<ul class="w3-navbar w3-light-grey">
  <li><a class="w3-btn testbtn w3-light-grey w3-border w3-hover-grey" onclick="openCity(event, 'computer')">Electronics[<?=$cel->num_rows ?>]</a></li>
  <li><a class="w3-btn testbtn w3-light-grey w3-border w3-hover-grey" onclick="openCity(event, 'Domestic')">Electricity[<?=$elec->num_rows ?>]</a></li>
  <li><a class="w3-btn testbtn w3-light-grey w3-border w3-hover-grey" onclick="openCity(event, 'Surveying')">Mechanics[<?=$mge->num_rows ?>]</a></li>
    <li><a class="w3-btn testbtn w3-light-grey w3-border w3-hover-grey" onclick="openCity(event, 'Solar')">Construction[<?=$cons->num_rows ?>]</a></li>
  <li><a class="w3-btn testbtn w3-light-grey w3-border w3-hover-grey" onclick="openCity(event, 'Production')">Carpentry[<?=$cap->num_rows ?>]</a></li>
  <li><a class="w3-btn testbtn w3-light-grey w3-border w3-hover-grey" onclick="openCity(event, 'Masonary')">Tailoring[<?=$tal->num_rows ?>]</a></li>
</ul>
<div id="computer" class=" city w3-animate-opacity">
	<a href="add.php?class=cel&opt=senior6" class="btn bg-green pull-right w3-margin"><span class="fa fa-plus"></span> Add Student</a>
<table class="w3-table w3-bordered w3-margin-top">

	<tr>
	<th>Name</th>
	<th>Gender</th>
	<th>District</th>
	<th>Parent Contact</th>
	<th>School Fees</th>
	<th>Birth Date</th>
	<th>Modify</th>
</tr>
<?php while ($comp=$cel->fetch_assoc()) { ?>
<tr>

	<td><?=$comp['name'] ?></td>
	<td><?=$comp['sex'] ?></td>
	<td><?=$comp['district'] ?></td>
	<td><?=$comp['contact'] ?></td>
	<td><?=$comp['fees'] ?></td>
	<td><?=$comp['bdate'] ?></td>
	<td><a href="delete.php?action=delete&class=cel&id=<?=$comp['id'] ?>&opt=senior6" class="w3-btn bg-red">Delete</a></td>
	<td><a href="delete.php?action=modify&class=cel&id=<?=$comp['id'] ?>&opt=senior6" class="w3-btn bg-blue">Update</a></td>
</tr>
<?php } ?>
</table>
</div>

<div id="Domestic" class=" city w3-animate-opacity">
	<a href="add.php?class=cel&opt=senior6" class="btn bg-green pull-right w3-margin"><span class="fa fa-plus"></span> Add Student</a>
 <table class="w3-table w3-bordered w3-margin-top"><tr>
 	<th>Name</th>
 	<th>Gender</th>
 	<th>District</th>
 	<th>Parent Contact</th>
 	<th>School Fees</th>
 	<th>Birth Date</th>
 	<th>Modify</th>

</tr><?php while ($domo=$elec->fetch_assoc()) { ?>
<tr>

	<td><?=$domo['name'] ?></td>
	<td><?=$domo['sex'] ?></td>
	<td><?=$domo['district'] ?></td>
	<td><?=$domo['contact'] ?></td>
	<td><?=$domo['fees'] ?></td>
	<td><?=$domo['bdate'] ?></td>
	<td><a href="delete.php?action=delete&class=elec&id=<?=$domo['id'] ?>&opt=senior6" class="w3-btn bg-red">Delete</a></td>
	<td><a href="delete.php?action=modify&class=elec&id=<?=$domo['id'] ?>&opt=senior6" class="w3-btn bg-blue">Update</a></td>
</tr>
<?php } ?> </table>
</div>

<div id="Surveying" class=" city w3-animate-opacity">
	<a href="add.php?class=mge&opt=senior6" class="btn bg-green pull-right w3-margin"><span class="fa fa-plus"></span> Add Student</a>
  <table class="w3-table w3-bordered w3-margin-top"><tr>
  	<th>Name</th>
  	<th>Gender</th>
  	<th>District</th>
  	<th>Parent Contact</th>
  	<th>School Fees</th>
  	<th>Birth Date</th>
  	<th>Modify</th>
 
 </tr><?php while ($sur=$mge->fetch_assoc()) { ?>
<tr>

	<td><?=$sur['name'] ?></td>
	<td><?=$sur['sex'] ?></td>
	<td><?=$sur['district'] ?></td>
	<td><?=$sur['contact'] ?></td>
	<td><?=$sur['fees'] ?></td>
	<td><?=$sur['bdate'] ?></td>
	<td><a href="delete.php?action=delete&class=mge&id=<?=$sur['id'] ?>&opt=senior6" class="w3-btn bg-red">Delete</a></td>
	<td><a href="delete.php?action=modify&class=mge&id=<?=$sur['id'] ?>&opt=senior6" class="w3-btn bg-blue">Update</a></td>
</tr>
<?php } ?></table>
</div>
<div id="Solar" class=" city w3-animate-opacity">
	<a href="add.php?class=cons&opt=senior6" class="btn bg-green pull-right w3-margin"><span class="fa fa-plus"></span> Add Student</a>
  <table class="w3-table w3-bordered w3-margin-top"><tr>
  	<th>Name</th>
  	<th>Gender</th>
  	<th>District</th>
  	<th>Parent Contact</th>
  	<th>School Fees</th>
  	<th>Birth Date</th>
  	<th>Modify</th>
 
 </tr><?php while ($sola=$cons->fetch_assoc()) { ?>
<tr>

	<td><?=$sola['name'] ?></td>
	<td><?=$sola['sex'] ?></td>
	<td><?=$sola['district'] ?></td>
	<td><?=$sola['contact'] ?></td>
	<td><?=$sola['fees'] ?></td>
	<td><?=$sola['bdate'] ?></td>
	<td><a href="delete.php?action=delete&class=cons&id=<?=$sola['id'] ?>&opt=senior6" class="w3-btn bg-red">Delete</a></td>
	<td><a href="delete.php?action=modify&class=cons&id=<?=$sola['id'] ?>&opt=senior6" class="w3-btn bg-blue">Update</a></td>
</tr>
<?php } ?></table>
</div>
<div id="Production" class=" city w3-animate-opacity">
	<a href="add.php?class=cap&opt=senior6" class="btn bg-green pull-right w3-margin"><span class="fa fa-plus"></span> Add Student</a>
 <table class="w3-table w3-bordered w3-margin-top"><tr>
 	<th>Name</th>
 	<th>Gender</th>
 	<th>District</th>
 	<th>Parent Contact</th>
 	<th>School Fees</th>
 	<th>Birth Date</th>
 	<th>Modify</th>

</tr>
<?php while ($prod=$cap->fetch_assoc()) { ?>
<tr>

	<td><?=$prod['name'] ?></td>
	<td><?=$prod['sex'] ?></td>
	<td><?=$prod['district'] ?></td>
	<td><?=$prod['contact'] ?></td>
	<td><?=$prod['fees'] ?></td>
	<td><?=$prod['bdate'] ?></td>
	<td><a href="delete.php?action=delete&class=cap&id=<?=$prod['id'] ?>&opt=senior6" class="w3-btn bg-red">Delete</a></td>
	<td><a href="delete.php?action=modify&class=cap&id=<?=$prod['id'] ?>&opt=senior6" class="w3-btn bg-blue">Update</a></td>
</tr>
<?php } ?> </table> 
</div>
<div id="Masonary" class=" city w3-animate-opacity">
	<a href="add.php?class=tal&opt=senior6" class="btn bg-green pull-right w3-margin"><span class="fa fa-plus"></span> Add Student</a>
  <table class="w3-table w3-bordered w3-margin-top"><tr>
  	<th>Name</th>
  	<th>Gender</th>
  	<th>District</th>
  	<th>Parent Contact</th>
  	<th>School Fees</th>
  	<th>Birth Date</th>
  	<th>Modify</th>
 
 </tr><?php while ($mas=$tal->fetch_assoc()) { ?>
<tr>

	<td><?=$mas['name'] ?></td>
	<td><?=$mas['sex'] ?></td>
	<td><?=$mas['district'] ?></td>
	<td><?=$mas['contact'] ?></td>
	<td><?=$mas['fees'] ?></td>
	<td><?=$mas['bdate'] ?></td>
	<td><a href="delete.php?action=delete&class=tal&id=<?=$mas['id'] ?>&opt=senior6" class="w3-btn bg-red">Delete</a></td>
	<td><a href="delete.php?action=modify&class=tal&id=<?=$mas['id'] ?>&opt=senior6" class="w3-btn bg-blue">Update</a></td>
</tr>
<?php } ?></table>
</div>
</div>
</div>
</body>
 <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".login").hide();
  		$(".students").addClass("active");

  	});
  </script>
  <script type="text/javascript">
  	function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
   var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
     activebtn[i].classList.remove("w3-dark-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-dark-grey");
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();
  </script>

</html>