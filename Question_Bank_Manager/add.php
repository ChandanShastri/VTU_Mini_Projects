<html>
    <head>
        <title>Question Paper Manager</title>
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
<?php
session_start();
  include "config.php";
if(isset($_SESSION['admin'])){
if(isset($_POST['name']))
{

    $pdf = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));

$event="INSERT INTO Question_Bank (QP_Name,Subject,Sem,Date,PDF) VALUES ('".$_POST['name']."', '".$_POST['subject']."','".$_POST['sem']."','".$_POST['date']."','".$pdf."')";
//echo $event;
$result = mysqli_query($sccon,$event);
if($result==1)
{
    echo "<br><b><script>alert('Successfully Added the Question Paper');</script></b>";
}
else
echo "<br>Question Paper already exists...!";



}
}
else {
  session_destroy();
  header("Location:login.php");
}
?>




    <body><br><br><center><div class="col-sm-offset-2 col-sm-5"><h3> Add a Question Paper </h3><br>
      <div class="well well-lg">

        <form class="form-group" action="" method="POST" enctype="multipart/form-data">
        <h4>
        QP Name : <input class="form-control" name="name" type="text" required><br><br>
        Subject : <select class="form-control" required name="subject">
            <option value="SAN">SAN</option>
            <option value="DBMS">DBMS</option>
            <option value="WEB">WEB</option>
        </select><br><br>
        Semester : <select class="form-control" required name="sem">
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select><br><br>
        Exam Paper Date : <input class="form-control" name="date" type="date" required><br><br>

        <input class="form-control" type="file" name="pdf" >

       <br>
    <hr>
        <button class="btn btn-warning" type="submit">Add Question Paper </button>
        </h4>
      </form></div></div><div class="container"><br><br>
        <center><h3>Question Papers</h3></center><br>

        <?php

        $event="SELECT * FROM Question_Bank";
        $result = mysqli_query($sccon,$event);
        //echo $event;


        echo "<table class='table table-bordered'> <tr><th>Question Paper Name</th> <th>Subject</th> <th>Sem</th> <th>Exam Date</th> <th>PDF</th><th>Delete</th></tr>";

        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['QP_Name']."</td>";
            $t=$row['Time'];
            echo "<td>".$row['Subject']."</td>";
            echo "<td>".$row['Sem']."</td>";
            echo "<td>".$row['Date']."</td>";
            echo "<td><a href='pdf.php?q=".$t."'><button class='btn btn-success'>DOWNLOAD</button></td>";
            echo "<td><a href='pdf.php?d=".$t."'><button class='btn btn-danger'>DELETE</button></td>";
            echo "</tr>";
        }

        mysqli_close($sccon);

        ?>


        </table><br></center>

<center>


        <a href="index.php"><button class="btn btn-dark">Back</button></a>
      </center></div>
<br><br>
    </body>

    </html>
