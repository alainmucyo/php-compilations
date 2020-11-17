<?php include 'conn.php';
	$select=$conn->query("SELECT * FROM doc ORDER BY id DESC");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctors</title>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php'; ?>

<div class="container text-center" style="margin-top: 6%;">
	<h1><u>DOCTORS</u></h1>
	  <form class="navbar-form" role="search pull-right" method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" style="position: relative;left: 4%;">
                        <div class="input-group add-on  col-md-6">
                          <input class="form-control " id="search" placeholder="Search Doctor" name="search" type="search">
                          </div>
</form><br>
<p>Here's are more doctors with their experiences in treating diseases. So you may even ask question and you note any doctor you want to ask. Obviously he should answer your question at any time you want. Actually you may search any doctor to look what he is experienced in. </p>
<div id="msg">
	<div class="w3-row-padding w3-margin-top" >
    <?php while ($row=$select->fetch_assoc()) {
     ?>
	 <div class="w3-third w3-margin-bottom">
  <div class="w3-card-4">
    <img src="<?=$row['image'] ?>" style="height:255px;width: 100%;">
    <div class="w3-container w3-padding-bottom">
      <h4><b><?=$row['full_name'] ?></b></h4>
      <span><?= $row['email']?></span><br>
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
		$(".doc").addClass("active");
	})
</script>
<script type="text/javascript">
 $(function(){
      $("#search").keyup(function(){
        var search=$("#search").val();
        $.ajax({
          type:"POST",
          url:"doctors.php",
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