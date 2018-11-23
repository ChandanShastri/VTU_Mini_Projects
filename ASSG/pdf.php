<?php

include "config.php";
session_start();
if(isset($_SESSION['admin'])){
if(isset($_GET['q'])){
$t=$_GET['q'];
echo $t;


$event="SELECT * FROM Assignments where Time='".$t."'";
$result = mysqli_query($sccon,$event);


if($result->num_rows == 1) {
        $row = mysqli_fetch_assoc($result);
        header("Content-type:application/pdf");
        header("Content-Disposition: attachment; filename=". $row['ASSG_Name'].".pdf");
        echo $row['PDF'];
    }

  }
  if(isset($_GET['d'])){

    $t=$_GET['d'];
    echo $t;


    $event="DELETE FROM Assignments where Time='".$t."'";
    $result = mysqli_query($sccon,$event);
header("Location:add.php");
  }


mysqli_close($sccon);

}
else {
  session_destroy();
  header("Location:login.php");
}
?>
