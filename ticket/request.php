<?php 
	include 'conn.php';
  session_start();
  if (!isset($_SESSION['user'])) {
   header("location:login.php");
  }
 $email=$_SESSION['user'];
  $select=$conn->query("SELECT * FROM users WHERE email='$email'");
  while ($row=$select->fetch_assoc()) {
 $name=$row['username'];
}
  $places=$conn->query("SELECT * FROM prices");
  $place=$conn->query("SELECT * FROM prices");
  $ticket=$conn->query("SELECT * FROM ticket WHERE name='$name' ORDER BY id DESC LIMIT 5");
  if (isset($_POST['sub_idea'])) {
    $us_email=$_POST['email'];
  $idea=$_POST['idea'];
  $insert=$conn->query("INSERT INTO idea(email,idea) VALUES ('$us_email','$idea')") or die("Ohhh Shit");
  }
  $announce=$conn->query("SELECT * FROM announce ORDER BY id DESC LIMIT 3");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket Request</title>
					<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
  <?php while ($ann=$announce->fetch_assoc()) { ?>
  <div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <?=$ann['announcement'] ?>
</div>
  <?php } ?>
</div>
<div class="col-md-3">
  <div class="w3-card-2 w3-round">
    <header class="w3-container text-center bg-green"><h3>Send idea</h3></header>
    <form class="w3-container" role="form" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
      <div class="form-group w3-margin-top">
        <label class="w3-text-green">Email Adress:</label>
        <input type="email" name="email" class="form-control" required="required">
      </div>
      <div class="form-group">
        <label class="w3-text-green">Idea:</label>
        <textarea class="form-control" name="idea" style="resize: none;" required="required">
        </textarea>
      </div>
      <div class="form-group">
        <input type="submit" name="sub_idea" value="Send" class="btn bg-green">
      </div>
    </form>
  </div>
</div>
<div class="col-md-3">
  <div class="w3-card-2 w3-round">
    <header class="w3-container text-center bg-green"><h3>reserve</h3></header>
        <form class="w3-container" role="form" method="post" action="receipt.php">
          <div class="form-group w3-margin-top">
            <label class="w3-text-green">Place from:</label>
            <select class="form-control" name="place_from" id="from">
              <?php while ($row=$place->fetch_assoc()) { ?>
              <option value="<?=$row['place_from'] ?>"><?=$row['place_from'] ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label class="w3-text-green">Place to:</label>
            <select class="form-control" name="place_to" id="to">
               <?php while ($row=$places->fetch_assoc()) { ?>
              <option value="<?=$row['place_to'] ?>"><?=$row['place_to'] ?></option>
              <?php } ?>
            </select>
          </div>
           <div class="form-group">
            <label class="w3-text-green">Time:</label>
            <select class="form-control" name="time" id="time">
             <option>Select time</option>
            </select>
          </div>
          <div class="form-group text-center">
            <h3><span class="label bg-blue" id="price"></span></h3>
          </div>
          <div class="form-group">
            <input type="submit" name="ticket" class="btn btn-block btn-success" value="Get Ticket" onclick="return confirm('You Are About To Apply')">
          </div>
          <input type="hidden" name="price" id="hidden">
        </form>
  </div>
</div>
<div class="col-md-6">
  <div class="w3-card-2">
    <header class="w3-container text-center bg-green"><h3>Ticket You Requested</h3></header>
    <table class="table table-bordered">
      <tr>
      <th>Time</th>
      <th>Name</th>
      <th>Place</th>
      <th>Price</th>
      <th>Result</th>
      <th>Delete</th>
    </tr>
   <?php
   if ($ticket->num_rows>0) {
 
    while ($row=$ticket->fetch_assoc()) {
        $confirm=$row['confirmed'];
        if ($confirm=='0') {
          $conf="<span class='text-danger'>Unconfirmed</span>";
        }
        else{
          $conf="<span class='text-success'>Confirmed</span>";
        } ?>
           <tr>
      <td><?=$row['time'] ?></td>
      <td><?=$row['name'] ?></td>
      <td><?=$row['place'] ?></td>
      <td><?=$row['price'] ?></td>
      <td><?=$conf ?></td>
      <td><a href="delete.php?action=delete&id=<?=$row['id'] ?> &table=ticket&header=request" class="w3-btn bg-red">Delete</a></td>
       </tr>
      <?php } }     ?>
    </table>
  </div>
</div>
</body>
 <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
   <script type="text/javascript" src="js/sweetalert.min.js"></script>
   <script type="text/javascript">
  	$(function(){
  		$(".login").hide();
  		$(".ticket").show();
  		$(".ticket").addClass("active");
      
  	});
  </script>
  <script type="text/javascript">
    $(function(){
      $("body").mousemove(function(){
      var from=$("#from").val();
      var to=$("#to").val();
      $.ajax({
        type:'post',
        url:'amount.php',
        data:{"from":from,"to":to},
        cache:false,
       success:function(html){
            $("#price").html(html);
              $("#hidden").val(html);
          }
      });
     
      });
    });
  </script>
  <script type="text/javascript">
    $(function(){
      $("#time").focus(function(){
      var from=$("#from").val();
      var to=$("#to").val();
      $.ajax({
        type:'post',
        url:'time.php',
        data:{"from":from,"to":to},
        cache:false,
       success:function(html){
            $("#time").html(html);
          
          }
      });
     
      });
    });
  </script>
</html>
