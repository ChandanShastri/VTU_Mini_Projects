<html>
<head><title>View Assignments</title>
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
<body><center><h3>All Assignments</h3><br>
<?php



include "config.php";



$event="SELECT * FROM Assignments";
$result = mysqli_query($sccon,$event);


echo "<table class='table'> <tr><th>Assignment Name</th> <th>Subject</th> <th>Assignment Date</th> <th>Sub. Date</th> <th>PDF</th></tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['ASSG_Name']."</td>";
    $t=$row['Time'];
    echo "<td>".$row['Subject']."</td>";
    echo "<td>".$row['Date']."</td>";
    echo "<td>".$row['SDate']."</td>";
    echo "<td><a href='pdf.php?q=".$t."'><button>DOWNLOAD</button></td>";
    echo "</tr>";
}

mysqli_close($sccon);


?>


</table><br>
<br>
<a href='index.php'><button>Back</button></a></center>
</body>
</html>
