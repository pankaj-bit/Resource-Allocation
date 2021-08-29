<?php
//Temp
$con=mysqli_connect('localhost','root','','addresource');
$eid=$_POST['event_id'];
$f=$_POST['flag'];
if(isset($_POST['update']))
{
  $v=$_POST['rid'];
  $q="SELECT * from transition WHERE event_id='$_POST[event_id]' and flag='0'";
	$multi=mysqli_query($con,$q);
	$row=mysqli_num_rows($multi);


  $q2="SELECT * from transition WHERE event_id='$_POST[event_id]'";
	$mult=mysqli_query($con,$q2);
	$ro=mysqli_num_rows($mult);

  if($f == '1'){
$query= "UPDATE transition SET flag='$f' WHERE resource_id ='$v' and event_id='$eid' ";
mysqli_query($con,$query);
if($row =='1'){
$sql= "UPDATE event SET flg='$f' WHERE event_id='$eid' ";
mysqli_query($con,$sql);}


header('location:admin.php');
}
else if( $f == '-1')
{



$sql="DELETE FROM transition WHERE resource_id = ".$v['resource_id']." and event_id='$eid'";
mysqli_query($con,$sql);
if($row == '1' && $ro =='1'){
$query="DELETE FROM `event` WHERE event_id='$eid'";
mysqli_query($con,$query);}
else if($row =='1' && $ro>'1')
{
  $sql= "UPDATE `event` SET flg='1' WHERE event_id='$eid' ";
  mysqli_query($con,$sql);}
}
header('location:admin.php');}




















 ?>
