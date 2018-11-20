<?php

include "config.php";

$event="SELECT * FROM Events";
$result = mysqli_query($sccon,$event);

echo "<table> <tr><th>Event Name</th> <th>Event Date</th> <th>Event Time</th> <th>Detail</th> <th>Branch</th> <th>Event Type</th></tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['Event_Name']."</td>"; 
    echo "<td>".$row['Event_Date']."</td>"; 
    echo "<td>".$row['Event_Time']."</td>";
    echo "<td>".$row['Event_Detail']."</td>";
    echo "<td>".$row['Branch']."</td>";
    echo "<td>".$row['Event_Type']."</td>";
    echo "</tr>";
}
echo "</table><br><br><a href='index.php'><button>Back</button></a>";
mysqli_close($sccon);


?>

