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
<body><br>
  <img src='img/1.jpg' height="150px" width='1366px'><br><br>
<div class='p-3 mb-2 bg-secondary'>

<?php

include "config.php";



$event="SELECT * FROM Events";
$result = mysqli_query($sccon,$event);


echo "<div class='container'>";

while($row = mysqli_fetch_array($result)) {
    echo "<div class='card'><center><h3><b></b></h3></center>";
    echo "<div class='card-header bg-dark text-white'><h4><b>Event Details : </b>".$row['Event_Name']."</h4></div>";
    echo "<div class='card-body'><p>".$row['Event_Detail']."</p>";
    $t=$row['Event_Name'];
    echo "<br><br><b>Date : </b>".$row['Event_Date']."<b> Time : </b>".$row['Event_Time'];

    echo "<br><b>Branch : </b>".$row['Branch'];
    echo "<br><br><a href='pdf.php?q=".$t."'><button class='btn btn-warning'>Download Brochure</button></a><br><br>";
    echo "<br><div class='card-footer bg-dark text-white'><b>Event Type : </b>".$row['Event_Type']."</div>";
    echo "</div></div><br><br>";
}
echo "</div>";
mysqli_close($sccon);

?>
</div><center>
<a href='index.php'><button class='btn btn-danger'>Back</button></a></center><br><br>
</body>
</html>
