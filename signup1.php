<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Resource Allocation</title>
        <!-- Bootstrap CSS -->
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
 <style type="text/css">
 body{
  background-image: url('images/VIT5.jpg');
  background-size: cover;
 }
 .aa{
  width: 500px;
  height: 650px;
  background-color: rgba(255,255,255,0.5);
  margin: 0 auto;
  margin-top: 180px;
  padding-top: 10px;
  padding-left: 50px;
  -webkit-border-color: 15px;
  -moz-border-color: 15px;
  -ms-border-color: 15px;
  -o-border-color: 15px;
  border-color: 15px;
  color:rgba(0,0,255,0.5);
  font-weight: bolder;
  -webkit-box-shadow: inset -4px -4px rgba(0,0,0,0.5);
  box-shadow: inset -10px -10px rgba(0,0,255,0.5);
  font-size: 18px;
 }
 .logoText h3 {

 color: #292b2c;
 margin: 0;
 padding: 5px 0 8px;
 border-bottom: 1px solid #d7d7d7;
 }
 .aa input[type="text"]{
  width: 350px;
  height: 35px;
  border:200px;
  margin-bottom: 25px;
  padding-bottom: 10px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  padding-left: 5px;
  border-color: rgb(0,0,255);
 }
 .aa input[type="password"]{
  width: 350px;
  height: 35px;
  border:50px;
  margin-bottom: 25px;
  padding-bottom: 10px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  padding-left: 5px;
 }
 .aa input[type="submit"]{
  width: 150px;
  height: 35px;
  border:0px;
  margin-bottom: 25px;
  padding-bottom: 10px;
  margin-left: 125px;
  padding-left: 10px;

  -webkit-border-radius: 105px;
  -moz-border-radius: 105px;
  -ms-border-radius: 105px;
  -o-border-radius: 105px;
  border-radius: 105px;
  font-weight: bolder;
  background-color: rgba(0,0,255,0.5);
 }</style>
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
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="adminlogin.html">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="signup1.php">SignUp</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>


 <div class="aa">
 <h2 style="color:rgba(50,0,255,0.5);">SIGN UP</h2>

  <form action="signup.php" method="post">
    <h6 style="color:#730d0d">
    <?php  if(isset($_GET['msg'])) echo $_GET['msg'];

         ?></h6>
    <div>
    <label for="name"> Name:</label><br>
    <input type="text" name="name" placeholder="Enter Your Full Name" required><br></div>
    <div>
      <label for="eid"> Employee Id:</label><br>
      <input type="text" name="eid" placeholder="Enter Your Employee Id" required><br></div>

  <div>
  <label for="username">Username:</label><br>
   <input type="text" name="username" placeholder="Enter Your Email" required><br></div>
   <label for="password">Password</label><br>
   <input type="password" name="password" placeholder="Enter Your password" required><br>
   <input type="submit" value="Submit" class="book_now_btn button_hover">
   <h6 style="color:#730d0d">Note:After Signup,Details are sent to Admin for
     Verification,<br>You would be unable to Login unless approved by Admin</h6>




     
  </form><!-- close form -->
 </div>
</body>
</html>
