<?php include 'conn.php';
	if ($_SERVER['REQUEST_METHOD']=="POST") {
		$name=$question="";
			function check_value($data)
		{
			$data=trim($data);
			$data=stripslashes($data);
			$data=mysql_real_escape_string($data);
			return $data;
		}
		$name=check_value($_POST['name']);
		$question=check_value($_POST['question']);
		$insert=$conn->query("INSERT INTO questions(name,question) VALUES ('$name','$question')");
		if ($insert===FALSE) {
			echo "Sorry, error";
		}
		
	}
	$select=$conn->query("SELECT * FROM questions ORDER BY id DESC LIMIT 12");
		$replies=$conn->query("SELECT * FROM replies ORDER BY id DESC LIMIT 12");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Frequently Asked Questions</title>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="w3-container" style="margin-top: 5%; margin-bottom: 23%;">
	<div class="w3-row-padding">
	<div class="col-md-4 w3-margin-top">
		<div class="w3-card-2">
			<header class="w3-container text-center w3-blue"><h1>Ask Question</h1></header>
			<form class="w3-container w3-margin-top" role="form" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
				<div class="form-group">
					<input type="text" name="name" class="w3-input" required="required">
					<label class=" w3-validate w3-label" >Name</label>
				</div>
				<div class="form-group">
					<textarea class="w3-input" required="required" name="question"></textarea>
					<label class="w3-validate w3-label">Question</label>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>	
	<div class="col-md-4 w3-margin-top">
		<div class="w3-card-2 w3-light-grey">
			<header class="w3-container text-center w3-blue"><h1>Asked Questions</h1></header>
			<div class="w3-container w3-margin-top">
				<?php while ($row=$select->fetch_assoc()) { ?>
			<p style="text-transform: capitalize;"><b><?=$row['name'] ?>:</b> <?=$row['question'] ?></p>
			<?php } ?>
		</div>
		</div>
	</div>
	<div class="col-md-4 w3-margin-top">
		<div class="w3-card-2 w3-light-grey">
			<header class="w3-container text-center w3-blue"><h1>Answers</h1></header>
			<div class="w3-container w3-margin-top">
			<?php while ($result=$replies->fetch_assoc()) { ?>
			<p style="text-transform: capitalize;"><b><?=$result['name'] ?>: </b><?=$result['answer'] ?></p>
			<?php } ?>
		</div>
		</div>
	</div>
</div>
</div>	
<?php include 'footer.php'; ?>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".home").removeClass("active");
		$(".faq").addClass("active");
	})
</script>
</html>