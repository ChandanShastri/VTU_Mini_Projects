<?php
include 'config.php';
session_start();




    $subject= $_POST['subject'];
    $usn=$_SESSION['usn'];
    $updf = addslashes(file_get_contents($_FILES['memup']['tmp_name']));
    $assg=$_POST['assgcode'];
if(isset($_SESSION['usn'])){
  $ev="INSERT INTO uploads VALUES ('".$usn."','".$updf."','".$subject."','".$assg."')";

  $r = mysqli_query($sccon,$ev);
  if($r==1)
  {
    echo "<br><b>Successfully Added the Assignment</b>";
    header("Location:view.php");
    $_SESSION['msg']='N';
  }
  else
  {
  echo "<br>Assignment already exists...!";

$_SESSION['msg']='E';
header("Location:view.php");

}
}
else{
  session_destroy();
  header("Location:memlogin.php");
}


?>
