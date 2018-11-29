<html>
    <head>
        <title>Question Paper Manager</title>
    </head>

<?php

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

?>




    <body><br><br><center>
        <h1> Add a Question Paper </h1>
        <form action="" method="POST" enctype="multipart/form-data">
        <h4>
        QP Name : <input name="name" type="text" required><br><br>
        Subject : <select required name="subject">
            <option value="SAN">SAN</option>
            <option value="DBMS">DBMS</option>
            <option value="WEB">WEB</option>
        </select><br><br>
        Semester : <select required name="sem">
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select><br><br>
        Exam Paper Date : <input name="date" type="date" required><br><br>

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
