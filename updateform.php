<?php
$con=mysqli_connect("localhost","root","","addresource");

$event = mysqli_real_escape_string($con,$_POST['event']);
$desc = mysqli_real_escape_string($con,$_POST['description']);
$sdate= mysqli_real_escape_string($con,$_POST['sdate']);
$edate= mysqli_real_escape_string($con,$_POST['edate']);
$stime= mysqli_real_escape_string($con,$_POST['stime']);
$etime= mysqli_real_escape_string($con,$_POST['etime']);
$num= mysqli_real_escape_string($con,$_POST['number']);

$userid= mysqli_real_escape_string($con,$_POST['userid']);
$array1= array($userid);
$i = 1;
while($i <= $num){
	$str = 'venue'.$i; 
	$venue= mysqli_real_escape_string($con,$_POST[$str]);
	$query1 = "SELECT resource_id from resource where resource_name = '$venue'";
	$search = mysqli_query($con,$query1);
	$v = mysqli_fetch_array($search);
	$q = "SELECT * from transition join event on transition.event_id=event.event_id where resource_id = ".$v['resource_id']." and  ((start_date='$sdate' and end_date='$edate') or (start_date = '$edate') or (end_date='$sdate')) and ((start_time<='$stime' and end_time>'$stime') or (end_time>'$stime' and start_time<'$etime') or (start_time<'$etime' and end_time>'$etime')) and event_status !='Cancelled'";
	$search = mysqli_query($con,$q);
	if($row = mysqli_fetch_array($search)){
		array_push($array1,$venue);
	}
	$i++;
}//Temp
$n = count($array1);
if($n>1){
	$str = implode(',', $array1);
	header('location:adminreg.php?user='.$str);
}
else{
	$i = 1;
	while($i <= $num){
		$str = 'venue'.$i; 
		$venue= mysqli_real_escape_string($con,$_POST[$str]);
		$edsc= mysqli_real_escape_string($con,$_POST['description'.$i]);
		$query1 = "SELECT resource_id from resource where resource_name = '$venue'";
		$search = mysqli_query($con,$query1);
		$v = mysqli_fetch_array($search);
		if($i == 1){
			$query="INSERT INTO event (event_name,start_date,end_date,start_time,end_time,event_desc) VALUES ('$event','$sdate','$edate','$stime','$etime','$desc')";
			mysqli_query($con,$query);
		}
		$query="SELECT MAX(event_id) from event";
		$search = mysqli_query($con,$query);
		$e = mysqli_fetch_array($search);
		$query = "INSERT INTO transition(event_id,resource_id,employee_id,description) VALUES (".$e['MAX(event_id)'].",".$v['resource_id'].",'$userid','$edsc')";
		mysqli_query($con,$query);
		$i++;
	}
	header('location:adminreg.php?user='.$userid);
}
?>
