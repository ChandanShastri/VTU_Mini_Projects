<html>
    <head>
        <title>Assignment Manager</title>
       <link rel="stylesheet" href="css/bs.css">
        <script src="js/bs.js"></script>
    </head>

<?php

    include "config.php";

if(isset($_POST['name']))
{

    $pdf = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));
    $usnx=strtoupper($_POST['usn']);

$event="INSERT INTO students VALUES ('".$_POST['name']."','".$_POST['password']."', '".$usnx."')";
//echo $event;
$result = mysqli_query($sccon,$event);
if($result==1)
{
    echo "<br><b><script>alert('Successfully Registered the New Student...!')</script></b>";

}
else
echo "<br>USN already exists...!";



}

?>
<body><br><br><center>
  <div class="container">
  <div class="card bg-light"><br>
    <h3> Register for Assignment Portal </h3>
    <div class="card-body">
    <form action="" method="POST" enctype="multipart/form-data">
    Full Name : <input name="name" type="text" required><br><br>
    USN : <input name="usn" type="text" required><br><br>
    Password : <input name="password" type="password" required><br><br>
   <br>
<hr>
    <button type="submit" class="btn btn-success">Register</button>

    </form>

    <a href="index.php"><button>Back</button></a>
</div></div></div>

<div class="container">




<?php



mysqli_close($sccon);


?>


</table><br></div></center>

</body>


    </html>
