<?php
$con=mysqli_connect('localhost','root','','addresource');
$username=$_POST['incharge'];
$query = "SELECT employee_id from login where name='$username'";
$filter_result=mysqli_query($con,$query);
$e=mysqli_fetch_array($filter_result);
if(isset($_POST['update']))
{
	$query = "SELECT resource_id from resource WHERE resource_name ='$_POST[venue]'";
	$filter_result=mysqli_query($con,$query);
	$v=mysqli_fetch_array($filter_result);
	$query = "SELECT resource_id from resource WHERE resource_name ='$_POST[old_resource]'";
	$filter_result=mysqli_query($con,$query);
	$oldv=mysqli_fetch_array($filter_result);
	$sql="UPDATE event SET event_name='$_POST[event]',start_date='$_POST[sdate]',end_date='$_POST[edate]',start_time='$_POST[stime]',end_time='$_POST[etime]',event_desc='$_POST[desc]',event_status='Updated',reason='$_POST[reason]' WHERE event_id='$_POST[event_id]' and event_status != 'Cancelled'";
	mysqli_query($con,$sql);
	$query = "UPDATE transition SET resource_id=".$v['resource_id']." WHERE event_id='$_POST[event_id]' and resource_id=".$oldv['resource_id']."";
	mysqli_query($con,$query);

	header('location:../new.php?user='.$e['employee_id']);
}
elseif(isset($_POST['delete']))
{

	$q="SELECT * from transition WHERE event_id='$_POST[event_id]'";
	$multi=mysqli_query($con,$q);
	$row=mysqli_num_rows($multi);
	if($row >'1'){
		$query = "SELECT resource_id from resource WHERE resource_name ='$_POST[venue]'";
		$filter_result=mysqli_query($con,$query);
		$v=mysqli_fetch_array($filter_result);
		$d="DELETE from transition WHERE resource_id=".$v['resource_id']." and event_id='$_POST[event_id]'";
			mysqli_query($con,$d);
			header('location:../new.php?user='.$e['employee_id']);
	}
	else{
	$del="UPDATE event SET event_status= 'Cancelled',reason='$_POST[reason]' where event_id='$_POST[event_id]'";
	mysqli_query($con,$del);
	header('location:../new.php?user='.$e['employee_id']);
}
}
elseif(isset($_POST['complete']))
{
	$com="UPDATE event SET event_status= 'Completed',reason='Event Successfully Completed' where event_id='$_POST[event_id]'";
	mysqli_query($con,$com);
	header('location:../new.php?user='.$e['employee_id']);
}
?>
