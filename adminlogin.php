<?php
$con=mysqli_connect("localhost","root","","addresource");

$username2=mysqli_real_escape_string($con,$_POST['username']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$f='0';
$sql = "SELECT * FROM login";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)) {

    while($row=mysqli_fetch_array($result)) {
        //Temp

      if($username2==$row["email"] && $password==$row["password"] && $row["isAdmin"]=='1'){
        $f='1';
        $userid=$row["employee_id"];
        header('location:admin.php?user='.$userid);
      }


        else if($username2==$row["email"] && $password==$row["password"] && $row["isAdmin"]=='0' && $row["approved"]=='1'){
          $f='1';
          $userid=$row["employee_id"];
          header('location:new.php?user='.$userid);
        }


	}
  if($f == '0'){
    header('location:adminlogin.html');

  }
}


 ?>
