<?php
$con=mysqli_connect('localhost','root','','addresource');
$res = $_POST['res_name'];
$des= $_POST['res_desc'];
//Temp

if(isset($_POST['submit']))
{
$query="INSERT INTO resource (resource_name,res_desc) VALUES ('$res','$des')";
  mysqli_query($con,$query);
header('location:addresource.php');

}
else if(isset($_POST['update']))
{
$sql="UPDATE resource SET res_desc='$_POST[desc]' WHERE resource_id='$_POST[id]' ";
mysqli_query($con,$sql);
header('location:addresource.php');
}
else if(isset($_POST['delete']))
{
	$t="SELECT * from resource";
	mysqli_query($con,$t);
	$del="DELETE FROM resource where resource_id=$_POST[id]";
	mysqli_query($con,$del);
	header('location:addresource.php');
}

?>
