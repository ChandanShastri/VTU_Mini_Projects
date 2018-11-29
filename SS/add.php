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
    echo "<br><b>Successfully Added the New Event...!</b>";
}
else
echo "<br>Event Already Exists....!";



}

?>
<body><br><br><center>
  <div class="container">
  <div class="card bg-light"><br>
    <h3> Add an Event </h3>
    <div class="card-body">
    <form action="" method="POST" enctype="multipart/form-data">
    Event Name : <input name="Ename" type="text" required><br><br>
    Event Details :<br><br><textarea name="EDetails">Enter Event Details</textarea><br><br>

    Event Date : <input name="EDate" type="date" required><br><br>
    Event Time : <input name="Etime" type="time" required><br><br>
    Event Type : <select required name="Etype">
        <option value="Technical">Technical</option>
        <option value="Social">Social</option>
    </select><br><br>
    Event Branch : <select required name="Branch">
        <option value="ISE">ISE</option>
        <option value="Social">CSE</option>
    </select><br><br>
    Brochure : <input type="file" name="pdf" >

   <br>
<hr>
    <button type="submit" class="btn btn-success">Add Event </button>

    </form>

    <a href="index.php"><button>Back</button></a>
</div></div></div>

<div class="container">
<br><br><hr><h3>Manage Events</h3><br>



<?php

$event="SELECT * FROM Events";
$result = mysqli_query($sccon,$event);


echo "<table class='table'> <tr><th>Event Name</th> <th>Date</th> <th>Time</th> <th>Branch</th> <th>Brochure</th><th>Delete Event</th></tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['Event_Name']."</td>";
    $t=$row['Event_Name'];
    echo "<td>".$row['Event_Date']."</td>";
    echo "<td>".$row['Event_Time']."</td>";
    echo "<td>".$row['Branch']."</td>";
    echo "<td><a href='pdf.php?q=".$t."'><button>DOWNLOAD BROCHURE</button></td>";
    echo "<td><a href='pdf.php?d=".$t."'><button>DELETE</button></td>";
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
