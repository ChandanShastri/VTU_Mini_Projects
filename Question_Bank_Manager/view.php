<html>
<head><title>Question Paper List</title>
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

<body><div class="container"><center><br><br>
  <h2>Question Papers from all the Subjects</h2></center><br>
<?php
include "config.php";
$sem=$_POST['sem'];
$sub=$_POST['sub'];
$event="SELECT * FROM Question_Bank where Subject='".$sub."' and Sem=".$sem;
$result = mysqli_query($sccon,$event);

echo "<table class='table table-striped'> <tr><th>Question Paper</th> <th>Subject</th> <th>Sem</th> <th>Exam Date</th> <th>PDF</th></tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['QP_Name']."</td>";
    $t=$row['Time'];
    echo "<td>".$row['Subject']."</td>";
    echo "<td>".$row['Sem']."</td>";
    echo "<td>".$row['Date']."</td>";
    echo "<td><a href='pdf.php?q=".$t."'><button class='btn btn-success'>DOWNLOAD</button></td>";
    echo "</tr>";
}

mysqli_close($sccon);

?>


</table><br>
<br><center>
<a href='index.php'><button class="btn btn-danger">Back</button></a></center>
</div>
</body>
</html>
