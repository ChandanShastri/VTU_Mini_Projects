<html>
    <head>
        <title>Assignment Manager</title>
       <link rel="stylesheet" href="css/bs.css">
        <script src="js/bs.js"></script>
    </head>

<?php
session_start();
error_reporting(0);
if(isset($_SESSION['admin'])){
    include "config.php";

if(isset($_POST['Ename']))
{

    $pdf = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));

$event="INSERT INTO Assignments (ASSG_Name,Subject,Date,SDate,PDF) VALUES ('".$_POST['Ename']."', '".$_POST['Esubject']."','".$_POST['Edate']."', '".$_POST['Etime']."', '".$pdf."')";
//echo $event;
$result = mysqli_query($sccon,$event);
if($result==1)
{
    echo "<br><center><b>Successfully Added the Assignment</b></center>";
}
else
echo "<br><center><b>Something Went Wrong..!</b></center>";



}

?>
<body><br><br><center>
  <div class="container">
  <div class="card bg-light"><br>
    <h3> Add an Assignment </h3>
    <div class="card-body">
    <form action="#" method="POST" enctype="multipart/form-data">
    Assignment Name : <input name="Ename" type="text" required><br><br>
    Subject : <select required name="Esubject">
        <option value="SAN">SAN</option>
        <option value="DBMS">DBMS</option>
        <option value="WEB">WEB</option>
    </select><br><br>
    Ann. Date : <input name="Edate" type="date" required><br><br>
    Submission Time : <input name="Etime" type="date" required><br><br>
    <input type="file" name="pdf" >

   <br>
<hr>
    <button type="submit" class="btn btn-success">Add Assignment </button>

    </form>

    <a href="index.php"><button>Back</button></a>
</div></div></div>

<div class="container">
<br><br><hr><h3>Manage Assignments</h3><br>



<?php

$event="SELECT * FROM Assignments";
$result = mysqli_query($sccon,$event);


echo "<table class='table'> <tr><th>Assignment Name</th> <th>Subject</th> <th>Assignment Date</th> <th>Sub. Date</th> <th>PDF</th><th>View Submissions</th><th>Delete</th></tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['ASSG_Name']."</td>";
    $t=$row['Time'];
    echo "<td>".$row['Subject']."</td>";
    echo "<td>".$row['Date']."</td>";
    echo "<td>".$row['SDate']."</td>";
    echo "<td><a href='pdf.php?q=".$t."'><button>DOWNLOAD</button></td>";
    echo "<td><a href='submissions.php?v=".$t."'><button>Submissions</button></td>";
    echo "<td><a href='pdf.php?d=".$t."'><button>DELETE</button></td>";
    echo "</tr>";
}

mysqli_close($sccon);

}
else {
  session_destroy();
  header("Location:login.php");
}

?>


</table><br></div></center>

</body>


    </html>
