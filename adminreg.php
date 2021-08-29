<?php

  $str = $_GET['user'];
  $str_arr = explode (",", $str);
  $n = count($str_arr);
  if($n > 1){
    $v = implode(',', array_slice($str_arr,1));
    ?><script>alert('Time Slot already booked for resource: <?php echo $v ?>')</script><?php
  }
  $userid = $str_arr[0];

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="image/favicon.png" type="image/png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta name="keywords" content="Tourists Reservation Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates,
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<link href="cssr/font-awesome.css" rel="stylesheet">
<link href="cssr/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="cssr/style.css" rel='stylesheet' type='text/css' />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/css/smoothness/jquery-ui-1.10.0.custom.min.css" />
    <link rel="stylesheet" href="http://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.css" />


<!--//fonts-->
</head>
<style>
.logoText h3 {

color: #292b2c;
margin: 0;
padding: 5px 0 8px;
border-bottom: 1px solid #d7d7d7;
}
*{
  color: #000000;
}

</style>
<body>
	 <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="image/VIT-Pune-Logo.png"height="90" alt=""></a>
                    <div class="logoText">
                    <h5 style="color:#292B2C;font-family: 'Roboto Slab', serif;text-align:center">Bansilal Ramnath Agarwal Charitable Trust's</h5>
                    <h3 style="color:#292B2C;font-family: 'Roboto Slab', serif;text-align:center">Vishwakarma Institute of Technology</h3>
                    <h4 style="color:#5D5F61;font-family: 'Roboto Slab', serif;">(An Autonomous Institute affiliated to Savitribai Phule Pune University) </h4><br>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                          <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                          <li class="nav-item"><a class="nav-link" href="adminlogin.html">Login</a></li>
                          <li class="nav-item"><a class="nav-link" href="adminreg.php?user=<?php echo $userid ?>">Register Event</a></li>
                          <li class="nav-item"><a class="nav-link" href="new.php?user=<?php echo $userid ?>">Edit</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header><br><br><br><br>
<!--background-->

    <div class="bg-agile">
	<div class="book-reservation"><br><br><br><br>
		<h1 style="color:#a71930"> Event Reservation Form</h1>
			<form action="updateform.php" method="post">
					<div class="form-date-w3-agileits">
						<label><i class="fa fa-user" aria-hidden="true"></i> Event Name :</label>
						<input type="text" name="event" placeholder="Event name" required=""/>
					</div>
          <div>
          <label><i class="fa fa-book" aria-hidden="true"></i> Event Description :</label>
          <input type="text" name="description" placeholder="Description" style="width:45%;" required=""/>
        </div>
        

					 <div class="form-date-w3-agileits">
						<label><i class="fa fa-calendar" aria-hidden="true"></i> Start Date :</label>
						<input   name="sdate" type="date" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
					</div>
          <div class="form-date-w3-agileits">
           <label><i class="fa fa-calendar" aria-hidden="true"></i> End Date :</label>
           <input   name="edate" type="date" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
         </div>
					<div class="form-time-w3layouts">
							<label><i class="fa fa-clock-o" aria-hidden="true"></i>Start Time :</label>
							<input type="text"  class="timepicker" name="stime"  value="Hrs:Min:">
					</div>
					<div class="form-time-w3layouts">
							<label><i class="fa fa-clock-o" aria-hidden="true"></i>End Time :</label>
							<input type="text" name="etime" class="timepicker" value="Hrs:Min">
					</div>

          <div class="form-left-agileits-w3layouts bottom-w3ls" >
							<label><i class="fa fa-home" aria-hidden="true"></i>No. of Resources:</label>
							<select class="form-control" id="number" onchange="dis()" name="number" style="width:90%;">

								<option value="1">1</option>
								<option  value="2">2</option>
								<option  value="3">3</option>
								<option value="4">4</option>

							</select>
          </div>
         




					<div class="form-left-agileits-w3layouts bottom-w3ls" id="venue1" >
							<label><i class="fa fa-home" aria-hidden="true"></i> Venue 1:</label>
							<select class="form-control" name="venue1" style="width:90%;">
								<!-- <option>Auditorium</option>
								<option>Conference Hall</option>
								<option>1325</option>
								<option>1328</option> -->
								<?php
								$con = mysqli_connect('localhost','root','','addresource');

								$sq="SELECT * FROM resource";
								$results=mysqli_query($con,$sq);

    while($row = mysqli_fetch_array($results))
        echo("<option value = '" . $row['resource_name'] . "'>" . $row['resource_name'] . "</option>");
?>

							</select><br>
					</div>


          <div class="form-left-agileits-w3layouts bottom-w3ls" id="venue2" style="display:none;">
              <label><i class="fa fa-home" aria-hidden="true"></i> Venue 2:</label>
              <select class="form-control" name="venue2" style="width:90%;">
                <!-- <option>Auditorium</option>
                <option>Conference Hall</option>
                <option>1325</option>
                <option>1328</option> -->
								<?php
								$con = mysqli_connect('localhost','root','','addresource');

								$sq="SELECT * FROM resource";
								$results=mysqli_query($con,$sq);

								while($row = mysqli_fetch_array($results))
								echo("<option value = '" . $row['resource_name'] . "'>" . $row['resource_name'] . "</option>");
								?>
              </select>
          </div>


          <div class="form-left-agileits-w3layouts bottom-w3ls" id="venue3" style="display:none;">
              <label><i class="fa fa-home" aria-hidden="true"></i> Venue 3:</label>
              <select class="form-control" name="venue3" style="width:90%;">
                <!-- <option>Auditorium</option>
                <option>Conference Hall</option>
                <option>1325</option>
                <option>1328</option> -->
								<?php
								$con = mysqli_connect('localhost','root','','addresource');

								$sq="SELECT * FROM resource";
								$results=mysqli_query($con,$sq);

    while($row = mysqli_fetch_array($results))
        echo("<option value = '" . $row['resource_name'] . "'>" . $row['resource_name'] . "</option>");
?>

              </select><br>
          </div>



          <div class="form-left-agileits-w3layouts bottom-w3ls" id="venue4" style="display:none;">
              <label><i class="fa fa-home" aria-hidden="true"></i> Venue 4:</label>
              <select class="form-control"  name="venue4" style="width:90%;">
                <!-- <option>Auditorium</option>
                <option>Conference Hall</option>
                <option>1325</option>
                <option>1328</option> -->

								<?php
								$con = mysqli_connect('localhost','root','','addresource');

								$sq="SELECT * FROM resource";
								$results=mysqli_query($con,$sq);

    while($row = mysqli_fetch_array($results))
        echo("<option value = '" . $row['resource_name'] . "'>" . $row['resource_name'] . "</option>");
?>

              </select>
          </div>
          <div class="form-left-agileits-w3layouts bottom-w3ls" id="description1"  >
          <label><i class="fa fa-book" aria-hidden="true" ></i> Event Description :</label><br/>
          <input type="text" name="description1" placeholder="Description1" style="width:90%;" />
        </div>
        <div class="form-left-agileits-w3layouts bottom-w3ls" id="description2" style="display: none;" >
          <label><i class="fa fa-book" aria-hidden="true" ></i> Event Description :</label><br/>
          <input type="text" name="description2" placeholder="Description2" style="width:90%;" />
        </div>
        <div class="form-left-agileits-w3layouts bottom-w3ls" style="display:none;" id="description3">
          <label><i class="fa fa-book" aria-hidden="true" "></i> Event Description :</label><br/>
          <input type="text" name="description3" placeholder="Description3" style="width:90%;" />
        </div>
        <div class="form-left-agileits-w3layouts bottom-w3ls" style="display:none;" id="description4">
          <label><i class="fa fa-book" aria-hidden="true" ></i> Event Description :</label><br/>
          <input type="text" name="description4" placeholder="Description4" style="width:90%;"/>
        </div>
					<div style="display: none;">
						<input type="text" value="<?php echo $userid?>" name="userid" />
					</div>

					<div class="clear"> </div>
					<div class="make">
						  <input type="submit" value="Submit">
          </div>
          
			</form>

      <script>
      ;
      function dis(){
      var n=document.getElementById('number').selectedIndex;
      console.log(n);
      if(n=='0'){
        document.getElementById('venue1').style.display="";
        document.getElementById('venue2').style.display="none";
        document.getElementById('venue3').style.display="none";
        document.getElementById('venue4').style.display="none";
       
        document.getElementById('description2').style.display="none";
        document.getElementById('description3').style.display="none";
        document.getElementById('description4').style.display="none";
        

      }
      else if(n=='1'){
        document.getElementById('venue1').style.display="";
        document.getElementById('venue2').style.display="";
        document.getElementById('venue3').style.display="none";
        document.getElementById('venue4').style.display="none";
      
        document.getElementById('description2').style.display="";
        document.getElementById('description3').style.display="none";
        document.getElementById('description4').style.display="none";

      }
      else if(n=='2'){
        document.getElementById('venue1').style.display="";
        document.getElementById('venue2').style.display="";
        document.getElementById('venue3').style.display="";
        document.getElementById('venue4').style.display="none";

        document.getElementById('description2').style.display="";
        document.getElementById('description3').style.display="";
        document.getElementById('description4').style.display="none";

      }
      else if(n=='3'){
        document.getElementById('venue1').style.display="";
        document.getElementById('venue2').style.display="";
        document.getElementById('venue3').style.display="";
        document.getElementById('venue4').style.display="";
     
        document.getElementById('description2').style.display="";
        document.getElementById('description3').style.display="";
        document.getElementById('description4').style.display="";

      }
    }

      </script>
		</div>
   </div>

		<script type="text/javascript" src="jsr/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="jsr\clockpicker-12-hour-option.css"></script>
		<script type="text/javascript" src="jsr\clockpicker-12-hour-option.js"></script>
			<script type="text/javascript">
      var input1 = $('.timepicker');
	input1.clockpicker({
	    // twelvehour: true,
	    donetext: 'Done'
	});

			</script>


		<!-- Calendar -->
				<link rel="stylesheet" href="cssr/jquery-ui.css" />
				<script src="jsr/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->


</body>
</html>
