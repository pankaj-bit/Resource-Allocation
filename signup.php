<?php
$con=mysqli_connect("localhost","root","","addresource");

$username=mysqli_real_escape_string($con,$_POST['username']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$eid=mysqli_real_escape_string($con,$_POST['eid']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$f='1';
$sql = "SELECT email,employee_id FROM login";
$result=mysqli_query($con,$sql);
$msg="";
if (mysqli_num_rows($result)) {

    while($row=mysqli_fetch_array($result)) {

      if($eid == $row["employee_id"] || $username == $row["email"])
      {   $f='0';
        $msg="Account with same Employee id or Email already exists";
        header('location:signup1.php?msg='.$msg);

      }
    }
    if($f == '1'){
    $q="INSERT into login(employee_id,email,password,name) VALUES( '$eid','$username','$password','$name' )";
    mysqli_query($con,$q);
    $msg="Account Succesfully Created! You can Login Once You are Approved by Admin";
    header('location:signup1.php?msg='.$msg);


        //Temp
  }}















 ?>
