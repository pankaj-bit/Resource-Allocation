<?php
    $userid =  $_GET['user']
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Resource Allocation</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/css/smoothness/jquery-ui-1.10.0.custom.min.css" />
<link rel="stylesheet" href="http://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.css" />
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
    .logoText h3 {

    color: #292b2c;
    margin: 0;
    padding: 5px 0 8px;
    border-bottom: 1px solid #d7d7d7;
    }
		.column{
			width: 40.33%;
		}
	</style>
    </head>
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
                    <h6 style="color:#5D5F61;font-family: 'Roboto Slab', serif;">(An Autonomous Institute affiliated to Savitribai Phule Pune University) </h6><br>
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
                            <li class="nav-item"><a class="nav-link" href="admin.php">Approve Events</a></li>
                            <li class="nav-item"><a class="nav-link" href="loginapprove.php">Approve Users</a></li>
                            <li class="nav-item"><a class="nav-link" href="addresource.php">Edit Resources</a></li>
                            <li class="nav-item"><a class="nav-link" href="adminreg.php?user=<?php echo $userid ?>">Register Maintenance</a></li>
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
                <div class="container"><br><br><br><br><br><br>
                <div class="hotel_booking_table">
                	<div class="row" style="padding-top:20px;">
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
                            <option value=6>Event_Description</option>
                            <option value=7>Event_Status</option>
                            <option value=8>Reason</option>
                            <option value=9>Incharge</option>
                        </select>
                    </div>

            	</div>
            </div>



                        <div id="result"   >
                        <?php


                        //Temp


                        $query="SELECT * from transition INNER JOIN resource on transition.resource_id=resource.resource_id INNER join event on transition.event_id=event.event_id INNER join login on transition.employee_id=login.employee_id WHERE flag !=1";
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
				<table id="myTable"  style="display:block;height:659px;overflow:scroll;">
        <thead>
					<tr class="table100-head">
						<th class="column1">Event name</th>

						<th class="column2">Start Date</th>

            <th class="column2">End Date</th>

						<th class="column3">start time</th>

						<th class="column4">end time</th>

						<th class="column5">Venue</th>



            <th class="column5">Event Description</th>

            <th class="column5">Event Status</th>

            <th class="column5">Reason</th>

            <th class="column5">Incharge</th>

            <th class="column5">Approval</th>


						<th>update</th>

					</tr>
				</thead>

<?php
if(mysqli_num_rows($search_result))
{

while($row=mysqli_fetch_array($search_result))
	{
		echo "<tr><form action=edit_admin.php method=post>";
		echo "<td class=column1><input type=text name=event readonly value='".$row['event_name']."'</td>";
		echo "<td class=column2><input type=text name=sdate readonly value='".$row['start_date']."'</td>";
    echo "<td class=column2><input type=text name=edate readonly value='".$row['end_date']."'</td>";
		echo "<td class=column3><input type=time name=stime readonly class=timepicker value='".$row['start_time']."'</td>";
		echo "<td class=column4 ><input type=time name=etime readonly class=timepicker value='".$row['end_time']."'</td>";
		echo "<td class=column5><input type=text name=venue readonly value='".$row['resource_name']."'</td>";

		echo "<input type=hidden name=rid value='".$row['resource_id']."'>";
    echo "<td class=column4 ><input type=text name=desc readonly value='".$row['event_desc']."'</td>";
    echo "<td class=column4 ><input type= name=status readonly placeholder=status value='".$row['event_status']."'</td>";
    echo "<td class=column4 ><input type=text name=reason readonly placeholder=Reason for update required value='".$row['reason']."'</td>";
    echo "<td class=column4 ><input type=text name=incharge readonly value='".$row['name']."'</td>";
    echo "<input type=hidden name=event_id value='".$row['event_id']."'>";
    echo "<td><select style=overflow:visible; type=text name=flag>
				<option value=1>Approve</option>
				<option value=-1>Reject</option>
				</select>
				</td>";
		echo "<td><input type=submit name=update value=update></td>";

		echo "</form></tr>";


	}
}
	?>



					</table>

				</div>
			</div>
		</div>
    </div>
  </div>
</div>
        </section>
        <footer class="footer-area section_gap">
            <div class="container">
            </div>
        </footer>

		<!--================ End footer Area  =================-->


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
    td = tr[i].getElementsByTagName("input")[Y.value];
    if (td) {
      txtValue = td.value;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>


          <link rel="stylesheet" href="cssr/jquery-ui.css" />
          <script src="jsr/jquery-ui.js"></script>
            <script>
                $(function() {
                $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
                });
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
