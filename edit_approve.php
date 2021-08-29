<?php
//Temp
$con=mysqli_connect('localhost','root','','addresource');
$eid=$_POST['eid'];
$f=$_POST['flag'];
if(isset($_POST['update']))
{
  if($f == '1'){
  $q="UPDATE login SET approved='1' WHERE employee_id='$eid'";
  mysqli_query($con,$q);
  header('location:loginapprove.php');
}
else if($f =='-1'){
  $q="DELETE from login WHERE employee_id='$eid'";
  mysqli_query($con,$q);
  header('location:loginapprove.php');
}
}
?>
