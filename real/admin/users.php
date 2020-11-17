<?php
  include '../conn.php';
  include 'anti_intruder.php';
  $select=$conn->query("SELECT * FROM users ORDER BY id DESC");
  ?>
  <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Users List</title>
      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
       <link rel="stylesheet" type="text/css" href="../css/w3.css">
       <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
<?php include 'header.php'; ?>
<div class="container" style="text-transform: capitalize;">
	<div class="page-header"><h3>
		List Of Users <span class="w3-badge bg-blue"><?=$select->num_rows ?></span></h3>
	</div>
	<table class="w3-table w3-bordered">
	<tr>
		<th>name</th>
		<th>email</th>
		<th>phone</th>
		<th>adress</th>
		<th>modify</th>
	</tr>
	<?php  while ($row=$select->fetch_assoc()) { ?>
	<tr>
		<td><?=$row['name'] ?></td>
		<td><?=$row['email'] ?></td>
		<td><?=$row['phone'] ?></td>
		<td><?=$row['adress'] ?></td>
		<td><a href="delete.php?table=users&id=<?=$row['id'] ?>" class="w3-btn w3-padding w3-red" onclick="return confirm('Are Sure You Want To Delete This User And All His/Her Properties??')">Delete <span class="fa fa-remove"></span></a></td>
	</tr>
	<?php } ?>
	</table>
</div>
    <script src="js/index.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
      $(function(){
        $(".users").addClass("w3-text-green");
      });
    </script>
</body>
</html>