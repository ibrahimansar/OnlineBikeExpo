<html>
<head>
</head>
<body>

<?php

$con=mysqli_connect("localhost","root"," ","student");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$t1d= filter_input(INPUT_POST,'t1d');
$b= "DELETE FROM sample2 WHERE bikename='$t1d'";

if($con->query($b)==TRUE){
	echo "record deleted successfully";
} else {
    echo "Error: " . $b . "<br>" . $con->error;
}
	

$sql="SELECT bikename,bikeinfo FROM sample2 ORDER BY bikename";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
  echo "<table border='1'>";
  echo "<tr>";
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "</tr>";
  echo "</table>";
    }
  // Free result set
  mysqli_free_result($result);
}
mysqli_close($con);
?>
</body>
