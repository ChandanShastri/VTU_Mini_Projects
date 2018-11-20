<html>
    <head>
        <title>ISE Branch Event Manager</title>
    </head>

<?php

if(isset($_POST['Ename']))
{
    include "config.php";

$event="INSERT INTO Events VALUES ('".$_POST['Ename']."', '".$_POST['Edate']."', '".$_POST['Etime']."', '".$_POST['Edetails']."', '".$_POST['Ebranch']."', '".$_POST['Etype']."')";

$result = mysqli_query($sccon,$event);
if($result==1)
{
    echo "<br><b>Successfully Added the Event</b>";
}
else
echo "<br>Event name already exists...!";
while($row = mysqli_fetch_array($result)) {
    echo $row['']; 
}
mysqli_close($sccon);
}

?>




    <body><br><br><center>
        <h1> Add an Event </h1>
        <form action="#" method="POST">
        <h4>
        Event Name : <input name="Ename" type="text" required><br><br>
        Event Date : <input name="Edate" type="date" required><br><br>
        Event Time : <input name="Etime" type="time" required><br><br>
        Event Details : <input name="Edetails" type="textarea" required><br><br>
        <select required name="Ebranch">
            <option value="ISE">ISE</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="MEC">MECH</option>
            <option value="CVL">CIVIL</option>
        </select><br><br>    
        <select required name="Etype">
            <option value="Social">Social</option>
            <option value="Technical">Technical</option>
            <option value="Entertainment">Entertainment</option>
            <option value="Deaprtmental">Departmental</option>
        </select><br><hr> 
        <button type="submit">ADD EVENT </button>
        </h4>
        </form>

        <a href="index.php"><button>Back</button></a>
        </center>

    </body>

    </html>
