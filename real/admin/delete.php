<?php
	include '../conn.php';
	if (isset($_GET['table'])) {
		if ($_GET['table']=='users') {
		$id=$_GET['id'];
		$delete_prop=$conn->query("DELETE FROM property WHERE user_id='$id'");
		if ($delete_prop) {
			$delete_user=$conn->query("DELETE FROM users WHERE id='$id'");
			if ($delete_user) {
				header("location:users.php");
			}
		}
	}
	else{
		$id=$_GET['id'];
		$delete=$conn->query("DELETE FROM property WHERE id='$id'");
		if ($delete) {
			header("location:index.php");
		}
	}
}
?>