<?php
	include 'conn.php';
	$from=$_POST['from'];
	$to=$_POST['to'];
	$select=$conn->query("SELECT * FROM prices where place_from='$from' and place_to='$to'");
	while ($row=$select->fetch_assoc()) {
		$id=$row['id'];
	
	$time=$conn->query("SELECT * FROM time where id_from_prices='$id'");
	while ($result=$time->fetch_assoc()) {

?>

<option value="<?=$result['time'] ?>"><?=$result['time'] ?></option>
<?php
	}
}
?>