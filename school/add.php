<div style="display: none;">
<?php 
include 'conn.php';
session_start();
  if (!isset($_SESSION['user'])) {
    header("location:login.php");
  }
    $name= $_POST['name'];
    $sex=$_POST['sex'];
    $district=$_POST['district'];
    $fees=$_POST['fees'];
    $bdate=$_POST['bdate'];
    $contact=$_POST['contact'];
    $opt=$_GET['opt'];
    if (isset($_GET['class'])) {
    $table=$_GET['class'];
      if (isset($_POST['submit'])) {     
  $com=$conn->query("INSERT INTO $table(name,sex,district,fees,bdate,contact) VALUES ('$name','$sex','$district','$fees','$bdate','$contact')");
    if ($com=TRUE) {
      header("location:$opt.php");
    }
    }
  }
 ?>
</div>
<!DOCTYPE html>
<html>
<head>
  <title>Add Student In <?php echo $_GET['class'] ?></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="themes/base/jquery.ui.all.css">
     
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
  <div class="col-md-3">
    <div class="w3-margin-top">
    <a href="level3.php">Level 3</a><br>
    <a href="level4.php">Level 4</a><br>
    <a href="s6.php">Senior 6</a>
  </div>
  </div>
  <div class="col-md-6">
  <div class="w3-card-2">
    <header class="w3-container bg-blue" style="text-transform: capitalize;"><h1>Add Student In <?=$_GET['opt'] ?></h1></header>
  <form class="w3-container" role="form" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <div class="form-group w3-margin-top">
      <label class="w3-label w3-text-blue">Student Name:</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
      <label class="w3-text-blue">Sex:</label><br>
      <input class="w3-radio" type="radio" name="sex" value="girl" id="girl" checked>
<label class="w3-validate" for="girl">Girl</label>

<input class="w3-radio" type="radio" name="sex" value="boy" id="boy">
<label class="w3-validate" for="boy">Boy</label>
    </div>
    <div class="form-group">
      <label for="bdate" class="w3-text-blue w3-label">Birth Date:</label>
       <input type="text" name="bdate" id="bdate" readonly="yes" class="form-control">
    </div>
      <div class="form-group w3-margin-top">
      <label class="w3-label w3-text-blue">District:</label>
      <input type="text" name="district" class="form-control">
    </div>
      <div class="form-group w3-margin-top">
      <label class="w3-label w3-text-blue">Parent Contact:</label>
      <input type="text" name="contact" class="form-control" value="+250">
    </div>
    <div class="form-group">
      <label class="w3-text-blue">School fees:</label><br>
      <input class="w3-radio" type="radio" name="fees" value="paid" id="paid" checked>
<label class="w3-validate" for="paid">Paid</label>
<input class="w3-radio" type="radio" name="fees" value="not paid" id="not">
<label class="w3-validate" for="not">Didn't Paid</label>
<input class="w3-radio" type="radio" name="fees" value="paid half" id="half">
<label class="w3-validate" for="half">Paid Half</label>
<input class="w3-radio" type="radio" name="fees" value="Will Pay" id="will">
<label class="w3-validate" for="will">Will Pay</label>
    </div>
    <div class="form-group">
      <input type="submit" name="submit" value="Add" class="btn bg-blue">
    </div>
  </form>
</div>
</div>
</div>
</body>
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery.ui.core.js"></script>
  <script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>
     
<script type="text/javascript">
  $(function() {    
    $('#bdate').datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '1900:2010'
    });
    $('#txtjoin').datepicker({
      changeMonth: true,
      changeYear: true,
    });   
  });
  </script>
   <script type="text/javascript">
    $(function(){
      $(".login").hide();
      $(".dropdown-toggle").addClass("active");
      $("#myNavbar").removeClass("collapse");
    });
  </script>
</html>