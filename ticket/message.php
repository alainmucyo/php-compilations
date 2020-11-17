<?php session_start();
if (!isset($_SESSION['admin'])) {
	header("location:check_admin.php");
}
	include 'conn.php';
$ticket=$conn->query("SELECT * FROM ticket WHERE confirmed='0'");
$ticket1=$conn->query("SELECT * FROM ticket WHERE confirmed='1'");
$message=$conn->query("SELECT * FROM idea ORDER BY id DESC LIMIT 12");
if (isset($_POST['announce'])) {
$announce=$_POST['announcement'];
$insert=$conn->query("INSERT INTO announce(announcement) VALUES('$announce')") or die("Ohhh fuck");
}
if (isset($_POST['format'])) {
	$format=$conn->query("DELETE FROM announce") or die("Ohhh fuck");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>
			<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body style="text-transform: capitalize;" class="bg-light">
<?php include 'header.php'; ?>
<div class="container">
	<div class="col-md-5">
		<div class="w3-card-2">
			<header class="w3-container text-center bg-green"><h3>Send announcement to user</h3></header>
			<form class="w3-container" role="form" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
				<div class="form-group w3-margin-top">
					<label class="w3-text-green">Announcement:</label>
					<textarea class="form-control" name="announcement"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="announce" value="Send" class="w3-btn bg-green">
					<input type="submit" name="format" value="Delete All Sent Announcement" class="btn btn-danger pull-right" onclick="return confirm('Are Sure You Want To Delete All Announcement??')">
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-6">
	<div class="w3-card-2 w3-light-grey">
		<header class="w3-container bg-green text-center"><h1>Messages</h1></header>
		<div class="w3-container w3-margin-top">
		<?php while ($row=$message->fetch_assoc()) { ?>
		<p><b>Email: </b><?=$row['email'] ?><br>
		<b>Content: </b><?=$row['idea'] ?></p>
		<?php } ?>
	</div>
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
  		$(".message").addClass("active");
  	});
  </script>
</html>