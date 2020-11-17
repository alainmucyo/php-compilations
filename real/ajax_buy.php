<?php include 'conn.php';
	if (isset($_POST['category']) && !isset($_POST['search'])) {
	
	$category=$_POST['category'];
		$select=$conn->query("SELECT * FROM property WHERE category LIKE '%$category%' ORDER BY id DESC");
		$select1=$conn->query("SELECT * FROM property ORDER BY id DESC LIMIT 12");
		if ($category!='Select category') {
				?>
			<div class="w3-margin-top">
<?php while ($row=$select->fetch_assoc()) { ?>
<div class="col-md-4 w3-margin-top">
	<div class="w3-card-2 w3-border w3-round" style="height: 350px;">
		<img src="<?=$row['image'] ?>" style="width: 100%; height: 270px;">
		<div class="w3-container w3-padding">
			<span><b>Adress: </b><?=substr($row['adress'], 0,20)."..." ?></span>
		</div>
		<div class="w3-container">
			<a href="details.php?id=<?=$row['id'] ?>" class="w3-btn w3-deep-orange">Read More...</a>
		</div>
	</div>
</div>
</div>
<?php } }
else{
 ?>
<div class="w3-margin-top">
<?php while ($row=$select1->fetch_assoc()) { ?>
<div class="col-md-4 w3-margin-top">
	<div class="w3-card-2 w3-border w3-round" style="height: 350px;">
		<img src="<?=$row['image'] ?>" style="width: 100%; height: 270px;">
		<div class="w3-container w3-padding">
			<span><b>Adress: </b><?=substr($row['adress'], 0,20)."..." ?></span>
		</div>
		<div class="w3-container">
			<a href="details.php?id=<?=$row['id'] ?>" class="w3-btn w3-deep-orange">Read More...</a>
		</div>
	</div>
</div>
</div>
 <?php
} } }
	if (isset($_POST['search'])) {
		$category=$_POST['category'];
		$search=$_POST['search'];
		$select=$conn->query("SELECT * FROM property WHERE category LIKE '%$category%' AND adress LIKE '%$search%' ORDER BY id DESC");
		$select1=$conn->query("SELECT * FROM property WHERE adress LIKE '%$search%' ORDER BY id DESC");
		if ($category!='Select category') {
				?>
			<div class="w3-margin-top">
<?php while ($row=$select->fetch_assoc()) { ?>
<div class="col-md-4 w3-margin-top">
	<div class="w3-card-2 w3-border w3-round" style="height: 350px;">
		<img src="<?=$row['image'] ?>" style="width: 100%; height: 270px;">
		<div class="w3-container w3-padding">
			<span><b>Adress: </b><?=substr($row['adress'], 0,20)."..." ?></span>
		</div>
		<div class="w3-container">
			<a href="details.php?id=<?=$row['id'] ?>" class="w3-btn w3-deep-orange">Read More...</a>
		</div>
	</div>
</div>
</div>
<?php } }
else{
	?>
	<div class="w3-margin-top">
<?php while ($row=$select1->fetch_assoc()) { ?>
<div class="col-md-4 w3-margin-top">
	<div class="w3-card-2 w3-border w3-round" style="height: 350px;">
		<img src="<?=$row['image'] ?>" style="width: 100%; height: 270px;">
		<div class="w3-container w3-padding">
			<span><b>Adress: </b><?=substr($row['adress'], 0,20)."..." ?></span>
		</div>
		<div class="w3-container">
			<a href="details.php?id=<?=$row['id'] ?>" class="w3-btn w3-deep-orange">Read More...</a>
		</div>
	</div>
</div>
</div>
<?php } }
	
	}
 ?>


