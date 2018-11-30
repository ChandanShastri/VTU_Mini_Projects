<html>
    <head>
        <title>Question Paper Manager</title>
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
if(isset($_SESSION['admin'])){
if(isset($_POST['name']))
{
    include "config.php";
    $pdf = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));

$event="INSERT INTO Question_Bank (QP_Name,Subject,Sem,Date,PDF) VALUES ('".$_POST['name']."', '".$_POST['subject']."','".$_POST['sem']."','".$_POST['date']."','".$pdf."')";
//echo $event;
$result = mysqli_query($sccon,$event);
if($result==1)
{
    echo "<br><b>Successfully Added the Question Paper</b>";
}
else
echo "<br>Question Paper already exists...!";

mysqli_close($sccon);

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
        <button class="btn btn-success" type="submit">Add Question Paper </button>
        </h4>
        </form>

        <a href="index.php"><button class="btn btn-blue" >Back</button></a>
        </center>
</div></div><br><br>
    </body>

    </html>
