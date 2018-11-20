<html>
<head><title>View Assignments</title></head>
<script>
function pdfloader(i){
    alert(i);
    xhttp.open("POST", "http://localhost/MP/MN/pdf.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("fn="+i);
}
</script>


<body>
<?php



include "config.php";



$event="SELECT * FROM Assignments";
$result = mysqli_query($sccon,$event);


echo "<table> <tr><th>Assignment Name</th> <th>Subject</th> <th>Assignment Date</th> <th>Sub. Date</th> <th>PDF</th></tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['ASSG_Name']."</td>"; 
    $t=$row['Time'];
    echo "<td>".$row['Subject']."</td>"; 
    echo "<td>".$row['Date']."</td>";
    echo "<td>".$row['SDate']."</td>";
    echo "<td><a href='pdf.php?q=".$t."'><button>DOWNLOAD</button></td>";
    echo "</tr>";
}

mysqli_close($sccon);


?>


</table><br>
<br>
<a href='index.php'><button>Back</button></a>
</body>
</html>

