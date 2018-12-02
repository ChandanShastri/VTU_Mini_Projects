<html>
    <head>
        <title>Assignment Management System</title>
        <link rel="stylesheet" href="css/bs.css">
        <script src="js/bs.js"></script>
    </head>
    <?php
    //error_reporting(0);
    session_start();
    unset($_SESSION['admin']);

    session_destroy();

      ?>
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

    <body><br><br><center>
        <h1> Assignment Management System </h1><br>
        <a href="add.php"><button class="btn btn-primary">Manage all Assignment</button></a>&nbsp;
        <a href="memlogin.php"><button class="btn btn-success">Student Login</button></a><br><br>
        <a href="addmember.php"><button class="btn btn-warning">Register New Student</button></a>
        </center>

    </body>

    </html>
