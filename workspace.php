<html>
<head>
</head>
<body>

<?php

$con=mysqli_connect("localhost","root"," ","student");

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

  mysqli_free_result($result);
}
mysqli_close($con);
?>
</body>
