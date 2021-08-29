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
  <style>
#result{


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
                <div class="container"><br><br><br><br><br>
                  <div class="hotel_booking_table">
                    <form action="addnewresource.php" method="post">
                  	<div class="row"  style="padding-top:20px;">

                        <div class="column-md-4">
                        <label for="res_name">Resource name:</label>
                        <input type="text" name="res_name">
                      </div>
                      <div class="column-md-4" style="margin-left:20px;">
                      <label for="res_desc">Resource Description(Location):</label>
                      <input type="text" required name="res_desc">
                    </div>
                      <div class="column-md-4" style="margin-left:20px;">

                        <input type="submit" class="book_now_btn button_hover" name="submit" value="Add">
                      </div>

                    </div>
                    </form>
                  </div>


                    <!-- <div class="banner_content text-center">
                        <h2>Vishwakarma Institute<br>of Technology</h2>
                    </div> -->

            <!-- <div class="hotel_booking_area position">
                <div class="container"> -->


                        <div id="result"   >
                          <?php
                          $con = mysqli_connect('localhost','root','','addresource');

                          $sq="SELECT * FROM resource";
                          $results=mysqli_query($con,$sq);

                          ?>


		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<table id="myTable"  style="display:block;height:709px;width:1140px;overflow:scroll;">
        <colgroup>
       <col span="1" style="width: 30%;">
       <col span="1" style="width: 25%;">
       <col span="1" style="width: 25%;">
       <col span="1" style="width: 25%;">
       <col span="1" style="width: 15%;">
    </colgroup>
        <thead>
					<tr class="table100-head">
						<th class="column1">Resource Name</th>

            <th class="column3">Resource Description</th>

						<th class="column2">Delete</th>

            <th class="column2">Update</th>
            <th></th>




					</tr>
				</thead>

        <?php
        //Temp
        while($row=mysqli_fetch_array($results))
          {
            echo "<tr><form action=addnewresource.php method=POST>";
            echo "<td><input type=text name=resource readonly value='".$row['resource_name']."'></td>";

              echo "<td><input type=text name=desc value='".$row['res_desc']."'></td>";
            echo "<td><input type=submit name=delete value=delete></td>";
            echo "<td><input type=submit name=update value=update></td>";
            echo "<td><input type=hidden name=id value='".$row['resource_id']."'></td>";

            echo "</form></tr>";


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
