<html>
    <head>
        <title>Question Bank</title>
        <link rel="stylesheet" href="css/bs.css">
         <script src="js/bs.js"></script>
    </head>
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
    <?php
session_start();
session_destroy();



     ?>

    <body><br><br><center><div class="panel-primary">
        <h1> Question Bank </h1><br>
        <a href="login.php"><button class="btn btn-success">Manage Question Paper</button></a>&nbsp;
        <a href="view.php"><button class="btn btn-warning">View all Question Papers</button></a>
        </center>
</div>
    </body>

    </html>
