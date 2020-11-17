<?php
include 'conn.php';
	$from=$_POST['from'];
	$to=$_POST['to'];
	$select=$conn->query("SELECT * FROM prices WHERE place_from='$from' AND place_to='$to'");
	if ($select->num_rows>0) {
		while ($row=$select->fetch_assoc()) {
			echo $row['price']." "."Rwf";
		}
	}
	else{
		echo "can't get price";
	}
?>