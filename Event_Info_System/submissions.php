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
<body><center><h3>All Assignments Submissions</h3><br>


<?php
session_start();
if(isset($_SESSION['admin'])){
    include "config.php";

if(isset($_GET['v'])){
$assgcode=$_GET['v'];
$event="SELECT students.name,uploads.usn,uploads.pdf,uploads.subject,uploads.assg_no FROM uploads INNER JOIN students ON uploads.usn=students.usn where uploads.assg_no='".$assgcode."'";
$result = mysqli_query($sccon,$event);


echo "<table class='table'> <tr><th>Student Name</th> <th>USN</th> <th>Assignment Subject</th>  <th>PDF</th></tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['usn']."</td>";
    echo "<td>".$row['subject']."</td>";
    $t=$row['assg_no'];
    echo "<td><a href='pdf.php?ans=".$t."'><button>DOWNLOAD</button></td>";
    echo "</tr>";
}

mysqli_close($sccon);

}
}
else {
  session_destroy();
  header("Location:login.php");
}

?>
</body>
</html>
