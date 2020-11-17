 <?php 
 $username=$_SESSION['admin'];
 $call_user=$conn->query("SELECT * FROM admin WHERE username='$username'");
 $choose=$call_user->fetch_assoc();
 $show=$choose['username'];
 $show_image=$choose['image'];
  ?>
  <nav class="menu" tabindex="0" style="background-color: #293949;color: #b0b2b5;">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
		<img src="<?=$show_image ?>" />
    <h2 style="text-transform: capitalize;"><?=$show ?></h2>
  </header>
	<ul class="side">
    <a href="index.php"><li tabindex="0" class="w3-hover-text-green list icon-dashboard dash"> <span>Dashboard</span></li></a>
   <a href="users.php"><li tabindex="0" class="list w3-hover-text-green icon-users users"> <span>Users</span> </li> </a>
    <a href="feedback.php"><li tabindex="0" class="list w3-hover-text-green icon-feed feed"><span> Feedback</span></li></a>
    <a href="admin.php"><li tabindex="0" class="list w3-hover-text-green icon-admin admin"> <span>Manage Admins</span></li></a>
    <a href="logout.php"><li tabindex="0" class="list w3-hover-text-green icon-logout"> <span>Logout</span></li></a>
  </ul>
</nav>