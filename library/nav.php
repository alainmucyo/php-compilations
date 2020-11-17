 <nav class="navbar navbar-default w3-card-2">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">OnlineBookManagment</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active toggle remove"><a href="index.php">Home</a></li>
        <li class="toggle" data-toggle="modal" data-target="#myModal"><a href="#">About library</a></li>
        <li class="toggle" id="hide"><a href="#" onclick="document.getElementById('modal').style.display='block'"><span class="fa fa-plus-circle"></span> Add book</a></li>
        <li class="toggle" id="add"><a href="edit.php"><span class="fa fa-edit"></span> Edit books</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li class="toggle"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="myModal" class="modal w3-animate-zoom fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">About library</h4>
      </div>
      <div class="modal-body">
        <p>
          this is advanced online library managment designed by Mr.Alan
          in 2017.
        </p>
        <p>Have problem please inform us on +250725698930 or 
email adress:Alainmucyo3@gmail.com
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div class="w3-modal w3-animate-zoom" id="modal" style="background-color: rgba(0,0,0,0.6);">
  <form class="container" method="post" action="<?php htmlspecialchars($_SERVER['REQUEST_METHOD']) ?>">
  <div class="form-group">
    <input type="text" name="book_name" class="w3-input" placeholder="Book name..." style="background-color: rgba(0,0,0,0); color: white;">
    </div>
     <div class="form-group">
  <input type="text" class="w3-input" name="book_type" style="background-color: rgba(0,0,0,0); color: white;" placeholder="Book type..." required="required">
</div>
<input type="submit" name="" class="w3-btn w3-hover-blue w3-border" value="Submit" style=" background-color: rgba(0,0,0,0); color: white;" required="required">
<button class="w3-btn pull-right w3-border w3-hover-red" style=" background-color: rgba(0,0,0,0); color: white;" onclick="document.getElementById('modal').style.display='none'">Cancel</button>
  </form>
</div>
