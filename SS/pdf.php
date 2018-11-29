<?php

include "config.php";
session_start();

if(isset($_GET['q'])){
$t=$_GET['q'];



$event="SELECT * FROM Events where Event_Name='".$t."'";
$result = mysqli_query($sccon,$event);


if($result->num_rows == 1) {
        $row = mysqli_fetch_assoc($result);
        header("Content-type:application/pdf");
        header("Content-Disposition: attachment; filename=". $row['Event_Name'].".pdf");
        echo $row['pdf'];
    }
  }






if(isset($_SESSION['admin'])){
  if(isset($_GET['ans'])){
  $t=$_GET['ans'];



  $event="SELECT * FROM uploads where assg_no='".$t."'";

  $result = mysqli_query($sccon,$event);


  if($result->num_rows == 1) {
          $row = mysqli_fetch_assoc($result);
          header("Content-type:application/pdf");
          header("Content-Disposition: attachment; filename=". $row['usn'].".pdf");
          echo $row['pdf'];
      }
    }


  if(isset($_GET['d'])){

    $t=$_GET['d'];
    echo $t;


    $event="DELETE FROM Events where Event_Name='".$t."'";
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
