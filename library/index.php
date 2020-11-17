<?php include 'conn.php'; ?>
<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("location:login.php");
}

$book_name=$book_type="";
if ($_SERVER['REQUEST_METHOD']=="POST") {

 $book_name=$_POST['book_name'];
 $book_type=$_POST['book_type'];
 $insert=$conn->query("INSERT INTO books(book_name,book_type) VALUES ('$book_name','$book_type')");
 if (!$insert) {
   die("fuck");
 }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome<?= " ". $_SESSION['user'] ?></title>
	<link rel="stylesheet" href="pure.css">
		<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<style type="text/css">
		body{
			background-image: url("images/black.jpg");
			background-size: cover;
		}
	</style>
</head>
<body>
<?php include 'nav.php'; ?>
<div class="container">
	<center>
	<div class="pure-u-2-3">
		<?php
$select=$conn->query("SELECT * FROM books");
?>
		<header class="w3-text-teal"><H3><u>List of books[<?=$select->num_rows?>]</H3></u></header>
<table class="w3-table w3-bordered w3-border w3-card-24">
	<tr class="w3-teal">
	<th>No</th>
	<th>Name</th>
	<th>Type</th>
</tr>
<?php
while ($result=$select->fetch_assoc()) {
?>
<tr class="w3-text-white">
	<td><?=$result['Id']; ?></td>
	<td><?=$result['book_name']; ?></td>
	<td><?=$result['book_type']; ?></td>
</tr>
<?php
}

?>
</table>
</div>
</center>
</div>

</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>