<?php include 'conn.php';
	$select=$conn->query("SELECT * FROM fruits ORDER BY id DESC");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fruits</title>
		<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container text-center" style="margin-top: 6%;">
	<h1><u>FRUITS AND DISEASES</u></h1>
	  <form class="navbar-form" role="search pull-right" method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" style="position: relative;left: 4%;">
                        <div class="input-group add-on  col-md-6">
                          <input class="form-control " id="search" placeholder="Search Fruit" name="search" type="search">
                          </div>
</form><br>
<p>FRUITS are sweet and fleshy product of a tree or other plant that contains seed and can be eaten as food. So actually "without FRUITS no life".
Insert your illness(disease), we will give you fruits to help you in your illness. Also you may insert your any fruit you know, we will give you the diseases that can be cured by that fruit you have entered. </p>
<div id="msg">
	<div class="w3-row-padding w3-margin-top" >
    <?php while ($row=$select->fetch_assoc()) {
     ?>
	 <div class="w3-third w3-margin-bottom">
  <div class="w3-card-4">
    <img src="<?=$row['image'] ?>" style="height:255px;width: 100%;">
    <div class="w3-container">
      <h4><b><?=$row['name'] ?></b></h4>
      <span><?= substr($row['det'], 0,20)."..." ?></span><br>
      <a href="more.php?action=details&id=<?=$row['id']?>" class="w3-btn w3-blue w3-margin-bottom">READ MORE</a>
    </div>
  </div>
</div> 
<?php } ?>	
</div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".home").removeClass("active");
		$(".fruits").addClass("active");
	})
</script>
<script type="text/javascript">
 $(function(){
      $("#search").keyup(function(){
        var search=$("#search").val();
        $.ajax({
          type:"POST",
          url:"search.php",
          data:{"search":search},
          cache:false,
          success:function(html){
            $("#msg").html(html);
          }
        })
      });
    });

</script>
</html>