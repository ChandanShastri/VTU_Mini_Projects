<?php

include "config.php";
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
mysqli_close($sccon);


?>