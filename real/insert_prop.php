<?php 
	include 'conn.php';
	session_start();
	if ($_SERVER['REQUEST_METHOD']=="POST") {
		function check_input($data)
		{
			$data=htmlspecialchars($data);
			$data=stripcslashes($data);
			$data=trim($data);
			$data=mysql_real_escape_string($data);
			return $data;
		}
		$category=check_input($_POST['category']);
		$adress=check_input($_POST['adress']);
		$name=check_input($_POST['name']);
		$area=check_input($_POST['area']);
		$furnished=check_input($_POST['furnished']);
		$age=check_input($_POST['age']);
		$distance=check_input($_POST['distance']);
		$desc=check_input($_POST['desc']);
		$cost=check_input($_POST['cost']);
		$image_name=$_FILES['image']['name'];
		$image_temp_loc=$_FILES['image']['tmp_name'];
		$email=$_SESSION['customer'];
		$get=$conn->query("SELECT * FROM users WHERE email='$email'");
		while ($row=$get->fetch_assoc()) {
			$id=$row['id'];
		}
		if (!is_dir("user_images/$name")) {
			mkdir("user_images/$name");
		}
		$image_store="user_images/$name/".$image_name;
		if (move_uploaded_file($image_temp_loc, $image_store)) {
			$insert=$conn->query("INSERT INTO property(	category,adress,name,description,image,area,age,distance,furnshed,cost,user_id) VALUES ('$category','$adress','$name','$desc','$image_store','$area','$age','$distance','$furnished','$cost','$id')") or die(mysql_error());
		}
	}
	header("location:buy.php");
 ?>	
