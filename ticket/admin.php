<?php session_start();
if (!isset($_SESSION['admin'])) {
	header("location:check_admin.php");
}
	include 'conn.php';
	$users=$conn->query("SELECT * FROM users");
	$place=$conn->query("SELECT * FROM places");
	$prices=$conn->query("SELECT * FROM prices");
	$price=$conn->query("SELECT * FROM prices");
	$pricess=$conn->query("SELECT * FROM prices");
	$pricesss=$conn->query("SELECT * FROM prices");
	$ticket=$conn->query("SELECT * FROM ticket WHERE confirmed='0'");
	$ticket1=$conn->query("SELECT * FROM ticket WHERE confirmed='1'");
	$result_per_page=10;
	$total_result=$users->num_rows;
	if (!isset($_GET['page'])) {
		$page=1;
	}
	else{
		$page=$_GET['page'];
	}
	$this_page_result=($page-1)*$result_per_page;
	$sql=$conn->query("SELECT * FROM users ORDER BY id DESC LIMIT $this_page_result,$result_per_page");
	$number_of_pages=ceil($total_result/$result_per_page);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
			<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body style="text-transform: capitalize;" class="bg-light">
<?php include 'header.php'; ?>
<div class="col-md-3">
	<div class="w3-card-2">
			<header class="w3-container bg-green text-center"><h3>Add Places</h3></header>
			<form class="w3-container" role="form" method="post" action="bus.php">
				<div class="form-group w3-margin-top">
					<label class="w3-label w3-text-green">Set places:</label>
					<input type="text" name="from" class="w3-input w3-border w3-light-grey" required="required" placeholder="From"><br>
					<input type="text" name="to" class="w3-input w3-border w3-light-grey" required="required" placeholder="To">
					<div class="form-group">
						<label class="w3-label w3-text-green">Set price:</label>
						<input type="text" name="price" class="w3-input w3-border w3-light-grey" required="required" placeholder="Price">
					</div>
					<div class="form-group">
						<label class="w3-label w3-text-green">Set depart time:</label>
						<input type="text" name="time" class="w3-input w3-border w3-light-grey" required="required" placeholder="Like This 12:00">
						<select class="w3-input w3-border" name="format">
							<option value="a.m">A.M</option>
							<option value="p.m">P.M</option>
						</select>
					</div>
				</div>
				<div class="form-group w3-margin-top">
					<input type="submit" name="add" class="w3-btn bg-green" value="Add">
				</div>
			</form>
		</div>
		<div class="w3-card-2 w3-margin-top w3-margin-bottom">
			<header class="w3-container bg-green text-center"><h3>Update Price</h3></header>
			<form class="w3-container" role="form" method="post" action="bus.php">
			<div class="form-group w3-margin-top">
				<select class="w3-input w3-border" name="place_from">
					<?php while ($row=$pricess->fetch_assoc()) { ?>
					<option value="<?=$row['place_from'] ?>"><?=$row['place_from'] ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<select class="w3-input w3-border" name="place_to">
					<?php while ($row=$pricesss->fetch_assoc()) { ?>
					<option value="<?=$row['place_to'] ?>"><?=$row['place_to'] ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<input type="text" name="new_price" class="w3-input w3-border w3-light-grey" placeholder="New Price" required="required">
			</div>
			<div class="form-group">
				<input type="submit" name="update" value="Update" class="w3-btn bg-dark-grey">
			</div>
		</form>
		</div>
</div>
	<div class="col-md-3">
		<div class="w3-card-2">
			<header class="w3-container bg-green text-center"><h3>remove place</h3></header>
			<form class="w3-container" role="form" method="post" action="bus.php">
				<div class="form-group w3-margin-top">
					<label class="w3-label w3-text-green">remove:</label>
					<select class="w3-input w3-border" name="remove_place">
						<?php while ($row=$place->fetch_assoc()) { ?>
						<option value="<?=$row['cities'] ?>"><?=$row['cities'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group w3-margin-top">
					<input type="submit" name="remove" class="w3-btn bg-red" value="Remove">
				</div>
			</form>
		</div>
		<div class="w3-card-2 w3-margin-top w3-margin-bottom">
			<header class="w3-container bg-green text-center"><h3>add time</h3></header>
			<form class="w3-container" role="form" method="post" action="bus.php">
				<div class="form-group w3-margin-top">
					
					<label class="w3-label w3-text-green">from:</label>
					<select class="w3-input w3-border" name="from">
							<?php while ($row=$prices->fetch_assoc()) {  ?>
						<option value="<?=$row['place_from'] ?>"><?=$row['place_from'] ?></option>
						<?php } ?>
					</select>
					<label class="w3-label w3-text-green">to:</label>
					<select class="w3-input w3-border" name="to">
						<?php while ($row=$price->fetch_assoc()) {  ?>
						<option value="<?=$row['place_to'] ?>"><?=$row['place_to'] ?></option>
						<?php } ?>
					</select>
					
				</div>
					<div class="form-group">
						<label class="w3-label w3-text-green">Set depart time:</label>
						<input type="text" name="set_time" class="w3-input w3-border w3-light-grey" required="required" placeholder="Like This 12:00">
						<select class="w3-input w3-border" name="form">
							<option value="a.m">A.M</option>
							<option value="p.m">P.M</option>
						</select>
					</div>
					<div class="form-group w3-margin-top">
					<input type="submit" name="set" class="w3-btn bg-blue" value="Set">
				</div>
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-6">
		<div class="w3-card-2">
			<header class="w3-container bg-green text-center"><h1>Manage users <span class="badge w3-xlarge"><?=$users->num_rows ?></span></h1></header>
			<table class="w3-table w3-bordered">
				<tr>
					<th>Username</th>
					<th>contact</th>
					<th>modify</th>
				</tr>
				<?php while ($row=$sql->fetch_assoc()) {
 ?>
				<tr>
					<td><?=$row['username'] ?></td>
					<td><?=$row['contact'] ?></td>
					<td><a href="delete.php?action=delete&id=<?=$row['id'] ?>&table=users&header=admin" class="w3-btn bg-red">delete</a></td>
				</tr>
					<?php } ?>
					<tr><td></td>
						<td class="text-center">
							<ul class="w3-pagination w3-small w3-border">
<?php for ($page=1; $page <=$number_of_pages ; $page++) { 
 ?>
						   <li>	<a href="admin.php?page=<?=$page ?>" class="w3-border-left"><?=$page ?></a></li>
<?php } ?></ul>
						</td>
						<td></td>
					</tr>
			</table>
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