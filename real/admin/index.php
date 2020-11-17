<?php
  include '../conn.php';
  include 'anti_intruder.php';
  $select_prop=$conn->query("SELECT * FROM property ORDER BY id DESC");
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
       <link rel="stylesheet" type="text/css" href="../css/w3.css">
       <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
<?php include 'header.php'; ?>
<div class="container" style="text-transform: capitalize;">
  <div class="page-header"><h3>UPLOADED PROPERTIES <span class="w3-badge bg-blue"><?=$select_prop->num_rows ?></span></h3></div>
  <table class="w3-table w3-bordered">
    <tr>
    <th>Category</th>
    <th>name</th>
    <th>adress</th>
    <th>description</th>
    <th>cost</th>
    <th>modify</th>
  </tr>
  <?php while ($row=$select_prop->fetch_assoc()) { ?>
  <tr>
        <td><?=$row['category'] ?></td>
    <td><?=$row['name'] ?></td>
    <td><?=$row['adress'] ?></td>
    <td><?=$row['description'] ?></td>
    <td><?=$row['cost'] ?>Rwf</td>
    <td><a href="delete.php?table=property&id=<?=$row['id'] ?>&user_id=<?=$row['user_id'] ?>" class="w3-btn w3-red w3-padding" onclick="return confirm('Are You Sure You Want To Delete This Property??')">Delete <span class="fa fa-remove"></span></a></td>
  </tr>
  <?php } ?>
  </table>
</div>

    <script src="js/index.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
      $(function(){
        $(".dash").addClass("w3-text-green");
      });
    </script>
</body>
</html>
