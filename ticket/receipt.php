
<?php
	include 'conn.php';
	session_start();
	if (!isset($_POST['time']  )) {
		echo "<script>alert('Please choose time')</script>";
		header("location:request.php");
}
else{
	if ($_POST['time']=='Select time') {
		echo "<script>alert('Please choose time')</script>";
		header("location:request.php");
	}

	else{
	$email=$_SESSION['user'];
	$select=$conn->query("SELECT * FROM users WHERE email='$email'");
	while ($row=$select->fetch_assoc()) {
	$name=$row['username'];
	$from=$_POST['place_from'];
	$to=$_POST['place_to'];
	$price=$_POST['price'];
	$time=$_POST['time'];
	$place="From:"." ".$from." "."To:"." ".$to;
	$today=date('d');
	$date=date("Y-m-d h:i:sa");
	$ticket_id=mt_rand(10,100000000);
	$test=$conn->query("SELECT * FROM seats WHERE today='$today' AND place='$place'");
	if ($test->num_rows<24) {
	$seats=$conn->query("INSERT INTO seats(today,place) VALUES('$today','$place')") or die("fuck");
	$ticket=$conn->query("INSERT INTO ticket(name,place,time,price,ticket_id,date,confirmed) VALUES('$name','$place','$time','$price','$ticket_id','$date','0')") or die("fuck");
	if ($ticket) {
		header("location:request.php");
	}
	}
	else{
		echo "<script>alert('Sorry The Bus You Are Trying To Book Is Full')</script>";
		header("location:request.php");
	}
}
}	
}
header("location:request.php");
?>
