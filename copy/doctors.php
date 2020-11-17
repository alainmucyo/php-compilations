<?php
include 'conn.php';
$query=mysql_real_escape_string($_POST['search']);
$find=$conn->query("SELECT * FROM doc WHERE full_name LIKE '%$query%' ORDER BY id DESC");
if ($find->num_rows>0) {
	

 ?>
 	<div class="w3-row-padding w3-margin-top" >
    <?php while ($sol=$find->fetch_assoc()) { ?>
	 <div class="w3-third w3-margin-bottom">
  <div class="w3-card-4">
    <img src="<?=$sol['image'] ?>" style="height:255px;width: 100%;">
    <div class="w3-container w3-padding-bottom">
      <h4><b><?=$sol['full_name'] ?></b></h4>
      <span><?=$sol['email'] ?></span><br>
    </div>
  </div>
</div> 
<?php }
}
else{
	echo "<h1 class='w3-text-red'>Sorry,$query Is Not Found.</h1>";
}
;
 ?>	
</div>