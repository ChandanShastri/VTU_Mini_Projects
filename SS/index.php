<html>
    <head>
        <title>Event Management System</title>
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
        <h1>Event Management System </h1><br>
        <a href="add.php"><button class="btn btn-primary">Event Manager</button></a>&nbsp;
        <a href="view.php"><button class="btn btn-success">View Upcoming Talks / Events</button></a><br><br>
        </center>

    </body>

    </html>
