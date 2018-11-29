<html>
<head><title>View Events</title>
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
<body><center><h3>All Events</h3><br>


<?php

include "config.php";



$event="SELECT * FROM Events";
$result = mysqli_query($sccon,$event);


echo "<div class='container'>";

while($row = mysqli_fetch_array($result)) {
    echo "<div class='card'>".$row['Event_Name'];
    echo "<div class='card-body'>".$row['Event_Details'];
    $t=$row['Event_Name'];
    echo "<h4>".$row['Event_Date']."</h4>";
    echo "<h4>".$row['Event_Time']."</h4>";
    echo "<h4>".$row['Branch']."</h4>";
    echo "<a href='pdf.php?q=".$t."'><button>Download Brochure</button>";

    echo "</div></div>";
}
echo "</div>";
mysqli_close($sccon);


?>

<br>
<br>
<a href='index.php'><button>Back</button></a></center>
</body>
</html>
