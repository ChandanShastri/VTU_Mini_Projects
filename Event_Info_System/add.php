<html>
    <head>
        <title>Event Manager</title>
       <link rel="stylesheet" href="css/bs.css">
        <script src="js/bs.js"></script>
    </head>

<?php
session_start();
if(isset($_SESSION['admin'])){
    include "config.php";

if(isset($_POST['Ename']))
{

    $pdf = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));

$event="INSERT INTO Events VALUES ('".$_POST['Ename']."','".$_POST['EDate']."','".$_POST['Etime']."','".$_POST['EDetails']."','".$_POST['Branch']."','".$_POST['Etype']."','".$pdf."')";
//echo $event;
$result = mysqli_query($sccon,$event);
if($result==1)
{
    echo "<br><b>&nbsp;Successfully Added the New Event...!</b>";
}
else
echo "<br>&nbsp;<b>Invalid Event Time....! or Event Already Exists..!!</b>";



}

?>
<body><br><br><center>
  <div class="container"><div class="container">
  <div class="card bg-light"><br>
    <h3> Add an Event </h3>
    <div class="card-body">
    <form class="form" action="" method="POST" enctype="multipart/form-data">

        <div class="row">
    &nbsp;<b>Event Name : </b><input class="form-control" id='en' name="Ename" type="text" required><br></div><br>
  <div class="row"><br> <b> &nbsp;Event Details :</b><textarea class="form-control" name="EDetails"></textarea></div><br><br>
    <div class="row"><div class='col'><b>Event Date : </b><input class="form-control" name="EDate" type="date" required></div>
  <div class='col'><b>Event Time : </b><input class="form-control input-inline" name="Etime" type="time" required></div></div><br><br>
  <div class="row"><div class='col'><b>Event Type : </b><select class="form-control" required name="Etype">
        <option value="Technical">Technical</option>
        <option value="Social">Social</option>
    </select></div><div class='col'>
    <b>Event Branch : </b><select class="form-control" required name="Branch">
        <option value="ISE">ISE</option>
        <option value="Social">CSE</option>
    </select></div></div><br><br>
    <div class='row'>
    &nbsp;&nbsp;&nbsp;&nbsp;<b>Brochure : </b><br><div class='col col-sm-3'><input class="form-control" type="file" name="pdf" >
</div></div>
   <br>
<hr>
    <button type="submit" class="btn btn-success">Add Event </button>

  </form>

    <a href="index.php"><button class='btn btn-warning'>Back</button></a><br></div>
</div></div></div>

<div class="container">
<br><br><hr><h3>Manage Events</h3><br>



<?php

$event="SELECT * FROM Events";
$result = mysqli_query($sccon,$event);


echo "<table class='table table-striped'> <tr><th>Event Name</th> <th>Date</th> <th>Time</th> <th>Branch</th> <th>Brochure</th><th>Delete Event</th></tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['Event_Name']."</td>";
    $t=$row['Event_Name'];
    echo "<td>".$row['Event_Date']."</td>";
    echo "<td>".$row['Event_Time']."</td>";
    echo "<td>".$row['Branch']."</td>";
    echo "<td><a href='pdf.php?q=".$t."'><button class='btn btn-success'>DOWNLOAD BROCHURE</button></td>";
    echo "<td><a href='pdf.php?d=".$t."'><button class='btn btn-danger'>DELETE</button></td>";
    echo "</tr>";
}

mysqli_close($sccon);

}
else {
  session_destroy();
  header("Location:login.php");
}

?>


</table><br></div></center>

</body>


    </html>
