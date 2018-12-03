<!DOCTYPE HTML>
<html>
<head>
    <title>Dept. QP Management System</title>
    <link rel="stylesheet" href="css/bs.css">
    <script src="js/bs.js"></script>
</head>
<style>
body{
background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
}</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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




 <body><center>
   <br><h3>Search for Subjects and Semester</h3><br>
   <div class="container"> <div class="container"> <div class="container">
  <form class='form-group' action="view.php" method="POST">
    <select class='form-control' name='sub'>
      <option value='SAN'>SAN</option>
      <option value='WEB'>WEB</option>
      <option value='DBMS'>DBMS</option>
      <option value='SADP'>SADP</option>
    </select><br><br>

    <select class='form-control' name='sem'>
      <option value='3'>3</option>
      <option value='4'>4</option>
      <option value='5'>5</option>
      <option value='6'>6</option>
    </select><br><br>
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</center></div></div></div>
</body>
<!-- crshastri@gmail.com -->
</html>
