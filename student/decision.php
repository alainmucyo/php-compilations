<?php
include 'conn.php';
session_start();
if (!isset($_SESSION['admin'])) {
	header("location:login.php");
}
if (isset($_GET['decision'])) {
			$id=$_GET['id'];
	$select=$conn->query("SELECT * FROM students WHERE id='$id'");
		while ($result=$select->fetch_assoc()) {
			$name=$result['full_name'];
			$email=$result['email'];
	if ($_GET['decision']=="decline") {			
		$delete=$conn->query("DELETE FROM students WHERE id='$id'");
		if ($delete=="TRUE") {
			mail($email, "From havard:", "Sorry,You have applied but you didn't accepted");
			header("location:admin.php");
		}
	}
	else{
		$insert=$conn->query("INSERT INTO accepted(name,email) VALUES ('$name','$email')");
		if ($insert=="TRUE") {
			$remove=$conn->query("DELETE FROM students WHERE id='$id'");
			if ($remove=="TRUE") {
				mail($email, "From havard:", "Congratulations,You have applied and you are accepted. You will be mentioned more details.");
			header("location:accepted.php");
			}
		}
	}
}
}
?>