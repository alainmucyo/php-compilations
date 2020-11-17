<?php
	include 'conn.php';
$f_name=$email=$level=$aggregate=$sex=$msg="";
	if ($_SERVER['REQUEST_METHOD']=="POST") {
 function check_input($data)
 {
   $data=trim($data);
   $data=stripslashes($data);
   $data=htmlspecialchars($data);
   $data=mysql_real_escape_string($data);
   return $data;
 }
 $f_name=check_input($_POST['f_name']);
 $email=check_input($_POST['email']);
 $level=check_input($_POST['level']);
 $aggregate=check_input($_POST['aggregate']);
 $sex=$_POST['sex'];
 if (isset($_FILES['pic']) && isset($_FILES['pict']) && isset($_FILES['picture'])) {
			$photo_name1=$_FILES['pic']['name'];
			$photo_temp_loc1=$_FILES['pic']['tmp_name'];
			$photo_name2=$_FILES['pict']['name'];
			$photo_temp_loc2=$_FILES['pict']['tmp_name'];
			$photo_name3=$_FILES['picture']['name'];
			$photo_temp_loc3=$_FILES['picture']['tmp_name'];
			
			if (!is_dir("reports/diploma/$f_name") && !is_dir("reports/five/$f_name") && !is_dir("reports/six/$f_name")) {
				mkdir("reports/diploma/$f_name");
				mkdir("reports/five/$f_name");
				mkdir("reports/six/$f_name");
			}

			
            $photo_store="reports/diploma/$f_name/".$photo_name1;
			$photo_storem="reports/five/$f_name/".$photo_name2;
			$photo_stores="reports/six/$f_name/".$photo_name3;
			if (move_uploaded_file($photo_temp_loc1, $photo_store) && move_uploaded_file($photo_temp_loc2, $photo_storem) && move_uploaded_file($photo_temp_loc3, $photo_stores)) {
				$check=$conn->query("SELECT * FROM students WHERE email='$email'");
if ($check->num_rows<1) {
	$insert=$conn->query("INSERT INTO students(full_name,email,level,aggregate,sex,s4,s5,s6) VALUES ('$f_name','$email','$level','$aggregate','$sex','$photo_store','$photo_storem','$photo_stores')");
	if ($insert==TRUE) {
		echo "<script>alert('Student is successfully registered')</script>";
	}
				}
				else{
					echo "<script>alert('Please use another email adress')</script>";
				}
				
				}
			}
		}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Apply here</title>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="iCheck/all.css">
</head>
<body$_FILES>
	<?php include 'header.php';?>
	<div class="container">
		<div style="width: 65%;position: relative;left: 18%;" class="w3-card-2 w3-container w3-round">
<form role="form" class="w3-container" enctype="multipart/form-data" method="post" action="<?php $_SERVER['PHP_SELF'] ?>"	>
<p class="w3-margin-top">
<label class="w3-label w3-text-blue"><b>Full Name:</b></label>
<input class="w3-input w3-border" type="text" name="f_name" required="required" placeholder="Full Name" >
 </p><p>
<label class="w3-label w3-text-blue"><b>Email Adress:</b></label>
<input class="w3-input w3-border" type="email" name="email" required="required" placeholder="Email Adress" >
</p>
<p>
<label class="w3-label w3-text-blue"><b>Option of A level:</b></label>
<input class="w3-input w3-border" type="text" name="level" required="required" placeholder="Option of A level" >
 </p><p>
<label class="w3-label w3-text-blue"><b>Aggregate of O Level:</b></label>
<input class="w3-input w3-border" type="text" name="aggregate" required="required" placeholder="Aggregate of O Level" >
</p>
<p>
	<label class="w3-label w3-text-blue">Sex:</label><br>
 <input type="radio" name="sex" class="minimal" checked id="male" required="required" value="Male" /><label for="male">Male
</label>
 <input type="radio" name="sex" class="minimal" checked id="female" required="required" value="Female" /><label for="female">Female
</label>
</p>
<p>
	<div class="w3-col m4 l4">
	<label class="w3-label w3-text-blue">Diploma:</label><br>
	<input type="file" name="pic" value="choose file" required="required" >
</div>
<div class="w3-col m4 l4">
	<label class="w3-label w3-text-blue">School Report Senior 5:</label><br>
	<input type="file" name="pict" value="choose file" required="required" >
</div>
<div class="w3-col m4 l4">
	<label class="w3-label w3-text-blue">School Report Senior 6:</label><br>
	<input type="file" name="picture" value="choose file" required="required" >
</div>
</p>
<p>
<button class="btn btn-primary w3-margin-top ">Apply</button>
 </p>
</form>
</div>
</div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="iCheck/icheck.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".remove").removeClass("active");
		$("#active").addClass("active");
		$(".admin").hide();
		$(".logout").hide();
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
        $(".my-colorpicker1").colorpicker();
        $(".my-colorpicker2").colorpicker();
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
 
</script>
</html>