<?php
	include 'anti_intruder.php';
	include 'conn.php';
	$msg='none';
	if (isset($_POST['send'])) {
		function check_input($data)
		{
			$data=htmlspecialchars($data);
			$data=stripcslashes($data);
			$data=trim($data);
			$data=mysql_real_escape_string($data);
			return $data;
		}
		$email=check_input($_POST['email']);
		$subject=check_input($_POST['subject']);
		$name=check_input($_POST['name']);
		$send=$conn->query("INSERT INTO contact(name,email,subject) VALUES ('$name','$email','$subject')") or die(mysql_error());
		if ($send) {
			$msg='block';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php'; ?>

<div class="col-md-3"></div>
<div class="col-md-5">
<div class="w3-container w3-deep-orange">
  <h2>Contact Form</h2>
</div>
<form class="w3-container w3-card-4" role="form" method="post" action="contact.php">
<br>
<p>      
<label class="w3-text-grey">Name</label>
<input class="w3-input" type="text" name="name" required>
</p>
<p>      
<label class="w3-text-grey">Email</label>
<input class="w3-input" type="text" name="email" required>
</p>
<p>      
<label class="w3-text-grey">Subject</label>
<textarea class="w3-input" style="resize:none" name="subject"></textarea>
</p>
<br>
<div class="alert alert-success" style="display: <?=$msg ?>;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Message Sent Successfully.
</div>

  <p><button type="submit" class="w3-btn w3-padding w3-deep-orange w3-ripple" style="width:120px" name="send">Send &nbsp; &#10095;</button></p>
</form>
<hr>
</div>
</body>
<script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".login").hide();
  		$(".signup").hide();
  		$(".profile").show();
  		$(".contact").addClass("active");
  	});
  </script>
</html>