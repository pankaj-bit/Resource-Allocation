<?php
$con= mysqli_connect("localhost","root","","addresource");

$venue=mysqli_real_escape_string($con,$_POST['venue']);
$query="INSERT INTO venue (venue_name) VALUES ('$venue')";
mysqli_query($con,$query);
header('location:adminlogin.php')
//Temp


 ?>
