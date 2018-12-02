<?php

include "config.php";

if(isset($_GET['q'])){
$t=$_GET['q'];
echo $t;


$event="SELECT * FROM Question_Bank where Time='".$t."'";
$result = mysqli_query($sccon,$event);


if($result->num_rows == 1) {
        $row = mysqli_fetch_assoc($result);
        header("Content-type:application/pdf");
        header("Content-Disposition: attachment; filename=". $row['QP_Name'].".pdf");
        echo $row['PDF'];
    }

}


    if(isset($_GET['d'])){
      session_start();
if(isset($_SESSION['admin'])){
      $t=$_GET['d'];
      echo $t;


      $event="DELETE FROM Question_Bank where Time='".$t."'";
      $result = mysqli_query($sccon,$event);
    header("Location:add.php");
    }

}

mysqli_close($sccon);


?>
