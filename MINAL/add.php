<html>
    <head>
        <title>Question Paper Manager</title>
    </head>

<?php

if(isset($_POST['Ename']))
{
    include "config.php";
    $pdf = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));

$event="INSERT INTO Assignments (ASSG_Name,Subject,Date,SDate,PDF) VALUES ('".$_POST['Ename']."', '".$_POST['Esubject']."','".$_POST['Edate']."', '".$_POST['Etime']."', '".$pdf."')";
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

?>




    <body><br><br><center>
        <h1> Add a Question Paper </h1>
        <form action="#" method="POST" enctype="multipart/form-data">
        <h4>
        QP Name : <input name="Ename" type="text" required><br><br>
        Subject : <select required name="Esubject">
            <option value="SAN">SAN</option>
            <option value="DBMS">DBMS</option>
            <option value="WEB">WEB</option>
        </select><br><br>
        Exam Date : <input name="Edate" type="date" required><br><br>
        Uploaded Date : <input name="Etime" type="date" required><br><br>
        <input type="file" name="pdf" >

       <br>
    <hr>
        <button type="submit">Add Question Paper </button>
        </h4>
        </form>

        <a href="index.php"><button>Back</button></a>
        </center>

    </body>

    </html>
