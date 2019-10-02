<html>
<head>
<style>

table td{
 text-align:center;
 padding: 15px;
 background: white;
 width: 700px;
 font-size: 20px;
 text-transform: uppercase;
 color: brown;
}


table th{
 text-align:center;
 font-family: "ariel";
 padding: 15px;
 background: white;
 width: 700px;
 font-size: 30px;
 text-transform: uppercase;
 letter-spacing: 13px;
}

div{
	background: white;
	width: 1350px;
	height: auto;
	border: 12px blue;
	padding: 50px;
	margin 20px;
	border-radius: 15px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 20px;
	border: 10px solid black;
    
}

body.welcome {
  background: #0028ff;

 
}
input.MyButton {
width: 300px;
padding: 20px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: black;
color: #fff;
border: 1px solid #3366cc;
border-radius: 15px;
margin-top: 10;
margin-left: 1200;
}
input.MyButton:hover {
color: #311b92;
background: white;
border: 1px solid #fff;
}

p {
	color:white;
	text-align: center;
	text-transform: uppercase;
	letter-spacing: 13px;
	font-family: "Ariel";
	font-size: 24px;
}

.welcome #welcome {
  background: #311b92 ;
  width: 56px;
  height: 56px;
  position: absolute;
  left: 50%;
  top: 50%;
  overflow: hidden;
  opacity: 0;
  transform: translate(-50%, -50%);
  border-radius: 50%;
  animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards, hide 2s 2.9s ease forwards;
}

</style>
</head>
<body class="welcome">
<span id="splash-overlay" class="splash"></span>
  <span id="welcome"></span>
    <p id="head">Online Bike Expo</p>
	  <div>

<?php

$con=mysqli_connect("localhost","root"," ","student");

$sql="SELECT bikename,model,bikeinfo FROM sample2 ORDER BY bikename";
	
$name ='BIKE NAME';
$info ='BIKE INFO';
$mod ='model';

$sql="SELECT bikename,model,bikeinfo FROM sample2 ORDER BY bikename";


if ($result=mysqli_query($con,$sql))
  {
  echo "<table width='100%'>";
  echo "<tr>";
  echo "<th>" . $name . "</th>";
  echo "<th>" . $mod . "</th>";
  echo "<th>" . $info. "</th>";
  echo "</tr>";
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
  echo "<table border ='1', width='100%', height= '200' border>" ;
  echo "<tr>";
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2] . "</td>";
  echo "</tr>";
  echo "</table>";
    }
  // Free result set
  mysqli_free_result($result);
}
mysqli_close($con);
?>
   </div>
   
 <input class="MyButton" type="button" value="exit" onclick="window.location.href='http://localhost/main1.php'" />
  </body>
</html>
