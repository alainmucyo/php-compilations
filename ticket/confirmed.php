<?php
  include 'conn.php';
  session_start();
  if (!isset($_SESSION['admin'])) {
   header("location:login.php");
  }
 $ticket=$conn->query("SELECT * FROM ticket WHERE confirmed='1'");
 $ticket1=$conn->query("SELECT * FROM ticket WHERE confirmed='0'");
 $result_per_page=12;
 $total_result=$ticket->num_rows;
 if (!isset($_GET['page'])) {
   $page=1;
 }
 else{
  $page=$_GET['page'];
 }
 $this_page_result=($page-1)*$result_per_page;
 $sql=$conn->query("SELECT * FROM ticket WHERE confirmed='1' ORDER BY id DESC LIMIT $this_page_result,$result_per_page");
 $number_of_pages=ceil($total_result/$result_per_page);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Requested Tickets</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body style="text-transform: capitalize;">
<div class="w3-container w3-padding w3-light-grey">
  <span style="font-size: 16px;"><b>Online Bus Reservation</b></span><span class="pull-right">The Best And Easy Way For Bus Ticket Booking</span>
</div>
 <nav class="navbar bg-green sticky-top w3-card-8 ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Bus Reservation</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="home"><a href="admin.php">Home</a></li>
        <li class="ticket" style="display: none;"><a href="request.php">Ticket</a></li>
        <li class="requested" style="display: none;"><a href="requested.php">Requested<span class="badge"><?=$ticket1->num_rows ?></span></a></li>
        <li class="confirmed active" style="display: none;"><a href="confirmed.php">Confirmed<span class="badge"><?=$ticket->num_rows ?></span></a></li>
        <li class="message" style="display: none;"><a href="message.php">Messages</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="login signup"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
        <li class="login signin"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
         <li class="logout"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          <li class="logout_admin" style="display: none;"><a href="logout_admin.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div style="text-transform: capitalize;">
<div class="col-md-1"></div>
<div class="col-md-9">
  <div class="w3-card-2">
    <header class="w3-container text-center bg-green"><h3>Confirmed Tickets</h3></header>
    <table class="table table-bordered">
      <tr>
      <th>Ticket Id</th>
      <th>Name</th>
      <th>Place</th>
      <th>Price</th>
      <th>time go</th>
      <th>time</th>
    </tr>
   <?php 
    while ($row=$sql->fetch_assoc()) {
     ?>
           <tr>
      <td><?=$row['ticket_id'] ?></td>
      <td><?=$row['name'] ?></td>
      <td><?=$row['place'] ?></td>
      <td><?=$row['price'] ?></td>
      <td><?=$row['time'] ?></td>
      <td><?=$row['date'] ?></td>
       </tr>
      <?php }  ?>
    </table>
    <div class="text-center">
      <ul class="w3-pagination w3-border w3-tiny">
        <?php for ($page=1; $page <=$number_of_pages ; $page++) {  ?>
        <li><a href="confirmed.php?page=<?=$page ?>"><?=$page ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>
</body>
 <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
   <script src="js/sweetalert.min.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".login").hide();
  		$(".logout").hide();
  		$(".confirmed").show();
  		$(".requested").show();
  		$(".message").show();
  		$(".logout_admin").show();
  		$(".ticket").addClass("active");
  	});
  </script>
</html>