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
$t1= filter_input(INPUT_POST,'t1');
$spec=filter_input(INPUT_POST,'spec');

$a= "INSERT INTO sample2(bikename,bikeinfo) values ('$t1', '$spec')";

if ($con->query($a) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $a . "<br>" . $con->error;
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
