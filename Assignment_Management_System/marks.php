<?php
include 'config.php';
session_start();

if(isset($_SESSION['admin'])){

  $ev="UPDATE uploads SET Marks=".$_POST['marks']." where assg_no='".$_POST['assg']."' AND usn='".$_POST['usn']."'";
  echo $ev;
  $r = mysqli_query($sccon,$ev);

  if($r==1)
  {
    echo "<br><b>Successfully Added the Assignment</b>";
    $ADDR="submissions.php?v=".$_POST['assg'];
    header("Location:$ADDR");

  }

}


?>
