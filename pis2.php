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
$t1u= filter_input(INPUT_POST,'t1u');
$t1v= filter_input(INPUT_POST,'t1v');


$b= "UPDATE sample2 SET bikeinfo='$t1v' WHERE bikename='$t1u' ";

if($con->query($b)==TRUE){
	echo "record updated successfully";
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
