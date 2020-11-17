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
        <li class="home"><a href="index.php">Home</a></li>
        <li class="ticket" style="display: none;"><a href="request.php">Ticket</a></li>
        <li class="requested" style="display: none;"><a href="requested.php">Requested<span class="badge"><?=$ticket->num_rows ?></span></a></li>
        <li class="confirmed" style="display: none;"><a href="confirmed.php">Confirmed<span class="badge"><?=$ticket1->num_rows ?></span></a></li>
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