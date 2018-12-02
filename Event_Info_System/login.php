<!DOCTYPE HTML>
<html>
<head>
    <title>Event Management System</title>
    <link rel="stylesheet" href="css/bs.css">
    <script src="js/bs.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php">Login</a>
  </li>
</ul>
</div>
</nav>


<?php
//error_reporting(0);
session_destroy();
include "config.php";



if(isset($_POST['user']))
{
  $user=$_POST['user'];
  $pass=$_POST['pass'];
  $event="SELECT * FROM users where user='".$user."' AND pass='".$pass."'";
  //echo $event;
  $result = mysqli_query($sccon,$event);
  if(mysqli_num_rows($result)>0)
  {
    session_start();
    $_SESSION['admin']="Y";
    header("Location:add.php");

  }
  else {
    echo "<center><font color='red'><b>Username or Password is Wrong</b></font></center><br>";
  }

}
 ?>

 <body><center>
   <h3>Administrator Login</h3><br>
  <form action="" method="POST">
    <input type="text" required placeholder="Username" name="user"><br><br>
    <input type="password" required placeholder="Password" name="pass"><br><br>
    <button type="submit" class='btn btn-success'>Login</button>
  </form>
</center>
</body>
<!-- crshastri@gmail.com -->
</html>
