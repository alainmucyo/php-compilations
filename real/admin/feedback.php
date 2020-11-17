<?php
  include '../conn.php';
  include 'anti_intruder.php';
  $select=$conn->query("SELECT * FROM contact ORDER BY id DESC");
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
       <link rel="stylesheet" type="text/css" href="../css/w3.css">
       <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
<?php include 'header.php'; ?>
<div class="container" style="text-transform: capitalize;">
	<div class="w3-container w3-margin-top">
		<div class="w3-card-4 w3-round">
			<header class="w3-container w3-light-grey w3-border"><h3>Sent Messages</h3></header>
			<ul class="w3-ul">
				<?php while ($row=$select->fetch_assoc()) { ?>
				<li><b>Name:</b> <?=$row['name'] ?><br>
				<b>Email:</b> <?=$row['email'] ?><br>
				<b>Subject:</b> <?=$row['subject'] ?></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
    <script src="js/index.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
      $(function(){
        $(".feed").addClass("w3-text-green");
      });
    </script>
</body>
</html>
