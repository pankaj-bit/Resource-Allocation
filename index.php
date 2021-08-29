<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="HandheldFriendly" content="true">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Resource Allocation</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style type="text/css">
		#myInput {
		  background-image: url('images/searchb.png'); /* Add a search icon to input */
		  background-position:3px 3px ; /* Position the search icon */
		  background-repeat: no-repeat; /* Do not repeat the icon image */
		  width: 70%; /* Full-width */
		  font-size: 20px; /* Increase font-size */
		  padding: 12px 20px 10px 50px; /* Add some padding */
		  border: 1px solid #ddd; /* Add a grey border */
		  margin-bottom: 12px; /* Add some space below the input */
		  border-radius: 25px;
		}
		.column{
			width: 40.33%;
		}
    .logoText h3 {

    color: #292b2c;
    margin: 0;
    padding: 5px 0 8px;
    border-bottom: 1px solid #d7d7d7;
}
	</style>
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="image/VIT-Pune-Logo.png"height="90" alt=""></a>
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
                            <li class="nav-item"><a class="nav-link" href="signup1.php">SignUp</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container"><br><br><br><br>
                <div class="hotel_booking_table">
                	<div class="row"  style="padding-top:20px;">
	                <div class="column-md-6">
		                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
	            	</div>
	            	<div class="column-md-6">

                        <select class="" id="dropid" name="criteria">
                            <option data-display="Search By"></option>
                            <option value=0>event_name</option>
                            <option value=1>Start_date</option>
                            <option value=2>End_date</option>
                            <option value=3>Start_time</option>
                            <option value=4>End_time</option>
                            <option value=5>Venue</option>
                            <option value=6>Venue_Description</option>
                            <option value=7>Event_Description</option>
                            <option value=8>Event_Status</option>
                            <option value=9>Incharge</option>
                        </select>
                    </div>

            	</div>
            </div>

                  <div id="result"   >

                    <?php


                    $query="SELECT * from transition INNER JOIN resource on transition.resource_id=resource.resource_id INNER join event on transition.event_id=event.event_id INNER join login on transition.employee_id=login.employee_id";
                    $search_result=filterTable($query);

                    function filterTable($query)
                    {
                    $con = mysqli_connect('localhost','root','','addresource');
                    $filter_result=mysqli_query($con,$query);
                    return $filter_result;
                    }
                    ?>



                    <div class="container-table100">
                    <div class="wrap-table100">

                    <div class="table100">
                    <table id="myTable"  style="display:block;height:600px;overflow:scroll;">
                    <thead>
                    <tr class="table100-head">
                    <th class="column1">Event name</th>
                    <th class="column2">Start date</th>
                    <th class="column3">End date</th>
                    <th class="column4">Start time</th>
                    <th class="column5">End time</th>
                    <th class="column6">Venue</th>
                    <th class="column7">Venue Description</th>
                    <th class="column8">Event Description</th>
                    <th class="column9">Event Status</th>
                    <th class="column20">Incharge</th>

                    </tr>
                    </thead>

                    <?php

                    //Temp
                    while($row=mysqli_fetch_array($search_result)){
                    echo "<tbody><tr>";
                    echo "<td class=column1> ".$row['event_name']."</td>";
                    echo "<td class=column2> ".$row['start_date']."</td>";
                    echo "<td class=column3> ".$row['end_date']."</td>";
                    echo "<td class=column4> ".$row['start_time']."</td>";
                    echo "<td class=column5> ".$row['end_time']."</td>";
                    echo "<td class=column6>".$row['resource_name']."</td>";
                    echo "<td class=column7> ".$row['res_desc']."</td>";
                    echo "<td class=column8> ".$row['description']."</td>";
                    echo "<td class=column9> ".$row['event_status']."</td>";
                    echo "<td class=column10> ".$row['name']."</td>";
                    echo "</tr></tbody>";
                    }
                    ?>

                    </table>



                    </div>
                    </div>


                    </div>

                    </div>
                    </div>
                  </div>





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  Y = document.getElementById("dropid");
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[Y.value];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
