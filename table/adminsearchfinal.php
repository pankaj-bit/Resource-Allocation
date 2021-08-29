<?php
    $userid=$_POST['userid'];
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
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">


  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/css/smoothness/jquery-ui-1.10.0.custom.min.css" />
<link rel="stylesheet" href="http://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.css" />
  <style>
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
                            <li class="nav-item active"><a class="nav-link" href="../index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="../adminlogin.html">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="../adminreg.php?user=<?php echo $userid ?>">Register Event</a></li>
                            <li class="nav-item"><a class="nav-link" href="../new.php?user=<?php echo $userid ?>">Edit</a></li>
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
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Vishwakarma Institute<br>of Technology</h2>
                    </div>
                </div>
            </div>
            <div class="hotel_booking_area position">
                <div class="container">
                    <div class="hotel_booking_table">
                        <div class="col-md-3">
                            <h2>Search<br> Your Event</h2>
                        </div>

                        <div class="col-md-9">
                        <form action="../table/adminsearchfinal.php" method="post">
                            <div class="boking_table">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                              <div class='input-group date' >
                                                <!-- <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>      -->
                                                <input type='date' class="fa fa-calendar form-control"name="search_date" placeholder="Date"/>


                                              </div>

                                            </div>
                                            <div style="display: none;">
                                                <input type="text" value="<?php echo $userid?>" name="userid" />
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="input-group" >
                                                <select class="wide" name="venue">
                                                    <option data-display="Venue">Venue</option>
                                                    <option value="Auditorium">Auditorium</option>
                                                    <option value="1325">1325</option>
                                                    <option value="1328">1328</option>
                                                    <option value="Conference Hall">Conference Hall</option>
                                                </select>
                                            </div>
                                            <!--<a class="book_now_btn button_hover" href="#">Search Now</a>-->
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <button  id ="submit" name="submit1" class="book_now_btn button_hover">Search</button>
                                    </div>
                                </div>
                                </div>
                           </form>
                            </div>
                        </div>
                        <div id="result" class="hotel_booking_table" >
                        <?php
if(isset($_POST['submit1']))
{
    $value=$_POST['venue'];
    $value1=$_POST['search_date'];
    $value2=$_POST['userid'];
    $query1="SELECT resource_id,resource_name FROM `resource` WHERE resource_name='$value'";
    $search = filterTable($query1);
    $v = mysqli_fetch_array($search);
    $query2="SELECT employee_id,name FROM `login` WHERE employee_id='$value2'";
    $search = filterTable($query2);
    $e = mysqli_fetch_array($search);
	$query="SELECT * FROM `transition` join event on transition.event_id=event.event_id WHERE resource_id=".$v['resource_id']." and event.start_date='$value1' and employee_id='$value2'";
	$search_result=filterTable($query);
}
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
				<table style="display:block;height: 200px;overflow:scroll;whitespace:normal;">
					<thead>
					<tr class="table100-head">
						<th class="column1">Event name</th>

						<th class="column2">Start Date</th>

            <th class="column2">End Date</th>

						<th class="column3">start time</th>

						<th class="column4">end time</th>

						<th class="column5">Venue</th>

            <th>New Venue</th>

            <th class="column5">Event Description</th>

            <th class="column5">Event Status</th>

            <th class="column5">Reason</th>

            <th class="column5">Incharge</th>


						<th>update</th>
						<th>delete</th>
                        <th>complete</th>
					</tr>
				</thead>

<?php
if(mysqli_num_rows($search_result))
{

while($row=mysqli_fetch_array($search_result))
	{
		echo "<tr><form action=edit_update.php method=post>";
		echo "<td class=column1><input type=text name=event readonly value='".$row['event_name']."'</td>";
		echo "<td class=column2><input type=text name=sdate value='".$row['start_date']."'</td>";
    echo "<td class=column2><input type=text name=edate value='".$row['end_date']."'</td>";
		echo "<td class=column3><input type=time name=stime class=timepicker value='".$row['start_time']."'</td>";
		echo "<td class=column4 ><input type=time name=etime class=timepicker value='".$row['end_time']."'</td>";
		echo "<td class=column5> ".$v['resource_name']."</td>";
		echo "<td><select style=overflow:visible; type=text name=venue value='".$v['resource_name']."'>
				<option>".$v['resource_name']."</option>
				<option>Auditorium</option>
				<option>Conference Hall</option>
				<option>1325</option>
				<option>1328</option>
				</select>
				</td>";
		#echo "<input type=hidden name=id value='".$row['id']."'>";
    echo "<td class=column4 ><input type=text name=desc value='".$row['event_desc']."'</td>";
    echo "<td class=column4 ><input type= name=status readonly placeholder=status value='".$row['event_status']."'</td>";
    echo "<td class=column4 ><input type=text name=reason placeholder=Reason for update required value='".$row['reason']."'</td>";
    echo "<td class=column4 ><input type=text name=incharge readonly value='".$e['name']."'</td>";
    echo "<input type=hidden name=event_id value='".$row['event_id']."'>";
		echo "<td><input type=submit name=update value=update></td>";
		echo "<td><input type=submit name=delete value=delete></td>";
        echo "<td><input type=submit name=complete value=complete></td>";
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
                </div>
            </div>
        </section>
        <footer class="footer-area section_gap">
            <div class="container">
</div>
        </footer>



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
