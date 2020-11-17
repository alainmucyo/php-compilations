<?php include 'conn.php';
	$id=$_GET['id'];
	$table=$_GET['table'];
	$header=$_GET['header'];
	$delete=$conn->query("DELETE FROM $table WHERE id='$id'");
	if ($delete) {
		header("location:$header.php");
	}
 ?>