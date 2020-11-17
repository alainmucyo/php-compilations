 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
 </body>
<script type="text/javascript" src="js/sweetalert.min.js"></script>
 </html>
<?php 
	include 'conn.php';
	if (isset($_POST['add'])) {
		function check_input($data)
		{
			$data=trim($data);
			$data=stripslashes($data);
			$data=mysql_real_escape_string($data);
			return $data;
		}
		$from=check_input($_POST['from']);
		$to=check_input($_POST['to']);
		$price=check_input($_POST['price']);
		$tim=check_input($_POST['time']);
		$format=$_POST['format'];
		$time=$tim." ".$format;
		$place_from=$conn->query("SELECT * FROM places WHERE cities='$from'");
		$place_to=$conn->query("SELECT * FROM places WHERE cities='$to'");
		if ($place_from->num_rows==0) {
			$insert_from=$conn->query("INSERT INTO places(cities) VALUES('$from')") or die("Ohhh shit");
			
		}
		if ($place_to->num_rows==0) {
			$insert_from=$conn->query("INSERT INTO places(cities) VALUES('$to')") or die("Ohhh shit");
			
		}
			$set_price=$conn->query("INSERT INTO prices(place_from,place_to,price) VALUES('$from','$to','$price') ") or die("ohhh shit");
			if ($set_price) {
				$check=$conn->query("SELECT id FROM prices ORDER BY id DESC LIMIT 1");
				$last=$check->fetch_array(MYSQL_NUM);
				$last=$last[0];
				$insert=$conn->query("INSERT INTO time(time,id_from_prices) VALUES('$time','$last')") or die('Ohhh shit');
				if ($insert) {
					echo "hello";
				}
			}
	}
	if (isset($_POST['set'])) {
		$from=$_POST['from'];
		$to=$_POST['to'];
		$set_time=$_POST['set_time'];
		$form=$_POST['form'];
		$set_time=$set_time." ".$form;
		$select=$conn->query("SELECT * FROM prices WHERE place_from='$from' AND place_to='$to'");
		if ($select->num_rows>0) {
				while ($row=$select->fetch_assoc()) {
			$id=$row['id'];
			$check_time=$conn->query("SELECT * FROM time WHERE time='$set_time' AND id_from_prices='$id'");
			if ($check_time->num_rows==0) {
				$time=$conn->query("INSERT INTO time(time,id_from_prices) VALUES('$set_time','$id')") or die("Ohhh shit");
			}
			else{
				echo "Hello";
			}	
		}
		}
		else{
			echo "hello";
			
		}
	}
	if (isset($_POST['update'])) {
		$place_from=$_POST['place_from'];
		$place_to=$_POST['place_to'];
		$price=$_POST['new_price'];
		$select=$conn->query("SELECT * FROM prices WHERE place_from='$place_from' AND place_to='$place_to'");
		if ($select->num_rows>0) {
			$update=$conn->query("UPDATE prices SET price='$price' WHERE place_from='$place_from' AND place_to='$place_to'") or die("Ohhh shit");
		}
		else{
			echo "hello";
		}
	}
	if (isset($_POST['remove'])) {
		$place=$_POST['remove_place'];
		$select=$conn->query("SELECT * FROM prices WHERE place_from='$place' OR place_to='$place'");
		while ($row=$select->fetch_assoc()) {
			$id=$row['id'];
		}
		$delete_time=$conn->query("DELETE FROM time WHERE id_from_prices='$id'") or die("Ohhhh shit");
		$delete=$conn->query("DELETE FROM places WHERE cities='$place'") or die("Ohhhh shit");
		$delete_price=$conn->query("DELETE FROM prices WHERE place_from='$place' OR place_to='$place'") or die("Ohhh Shit");
	}
	header("location:admin.php");
 ?>
