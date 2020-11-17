<?php include 'conn.php';
session_start();
if (!isset($_SESSION['admin'])) {
	header("location:login.php");
}
if (isset($_GET['report'])) {
	$id=$_GET['id'];
		$select=$conn->query("SELECT * FROM students WHERE 	id='$id'");
		while ($row=$select->fetch_assoc()) {
		$diploma=$row['s4'];
		$five=$row['s5'];
		$six=$row['s6'];
		
	if ($_GET['report']=="diploma") {
		echo "<img src='$diploma'>";
	}
	elseif ($_GET['report']=="five") {
		echo "<img src='$five'>";
	}
	else{
		echo "<img src='$six'>";
	}
}
}
?>