<?php
session_start();
?>

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





<link rel="stylesheet" type="text/css" href="css1.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Slit Slider with CSS3 and jQuery" />
        <meta name="keywords" content="slit slider, plugin, css3, transitions, jquery, fullscreen, autoplay" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
		</noscript>

<style>

li{
	font-size:18px;
}

table{
	text-align:center;
	table-layout: fixed;
}
td {
	padding: 15px;
	align:center;
    border-bottom: 1px solid #ddd;
	width: 200px;
}
th{
	align:center;
    border-bottom: 1px solid #ddd;
	width: 200px;
	padding:15px;
}
tr:hover {background-color: #f5f5f5}

.mySlides {display:none;}
body {

background-image: url(); 
-moz-background-size: cover;
-webkit-background-size: cover;
background-size: cover;
background-position: top center !important;
background-repeat: no-repeat !important;
background-attachment: fixed;
background-opacity: 0.2;
  
  font: 12px Lucida sans, Arial, Helvetica, sans-serif;
	color: #333;
	text-align: center;
}

a {
	color: #2A679F;
}
/*========*/

.form-wrapper {
	align: right;
	background-color: #f6f6f6;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#f6f6f6), to(#eae8e8));
	background-image: -webkit-linear-gradient(top, #f6f6f6, #eae8e8);
	background-image: -moz-linear-gradient(top, #f6f6f6, #eae8e8);
	background-image: -ms-linear-gradient(top, #f6f6f6, #eae8e8);
	background-image: -o-linear-gradient(top, #f6f6f6, #eae8e8);
	background-image: linear-gradient(top, #f6f6f6, #eae8e8);
	border-color: #dedede #bababa #aaa #bababa;
	border-style: solid;
	border-width: 1px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	-webkit-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
	-moz-box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
	box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
	margin: 10px auto;
	overflow: hidden;
	padding: 8px;
	width: 450px;
}

.form-wrapper #search {
	align: right;
	border: 1px solid #CCC;
	-webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
	-moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
	box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
  color: #999;
	float: left;
	font: 16px Lucida Sans, Trebuchet MS, Tahoma, sans-serif;
	height: 20px;
	padding: 10px;
	width: 320px;
}

.form-wrapper #search:focus {
	align: right;
	border-color: #aaa;
	-webkit-box-shadow: 0 1px 1px #bbb inset;
	-moz-box-shadow: 0 1px 1px #bbb inset;
	box-shadow: 0 1px 1px #bbb inset;
	outline: 0;
}

.form-wrapper #search:-moz-placeholder,
.form-wrapper #search:-ms-input-placeholder,
.form-wrapper #search::-webkit-input-placeholder {
	color: #999;
	font-weight: normal;
}

.form-wrapper #submit {
	background-color: #0483a0;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#31b2c3), to(#0483a0));
	background-image: -webkit-linear-gradient(top, #31b2c3, #0483a0);
	background-image: -moz-linear-gradient(top, #31b2c3, #0483a0);
	background-image: -ms-linear-gradient(top, #31b2c3, #0483a0);
	background-image: -o-linear-gradient(top, #31b2c3, #0483a0);
	background-image: linear-gradient(top, #31b2c3, #0483a0);
	border: 1px solid #00748f;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
	-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
	box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
	color: #fafafa;
	cursor: pointer;
	height: 42px;
	float: right;
	font: 15px Arial, Helvetica;
	padding: 0;
	text-transform: uppercase;
	text-shadow: 0 1px 0 rgba(0, 0 ,0, .3);
	width: 100px;
}

.form-wrapper #submit:hover,
.form-wrapper #submit:focus {
	background-color: #31b2c3;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#0483a0), to(#31b2c3));
	background-image: -webkit-linear-gradient(top, #0483a0, #31b2c3);
	background-image: -moz-linear-gradient(top, #0483a0, #31b2c3);
	background-image: -ms-linear-gradient(top, #0483a0, #31b2c3);
	background-image: -o-linear-gradient(top, #0483a0, #31b2c3);
	background-image: linear-gradient(top, #0483a0, #31b2c3);
}

.form-wrapper #submit:active {
	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
	-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
	outline: 0;
}

.form-wrapper #submit::-moz-focus-inner {
	border: 0;
}

.FEE{
	font-size:20px;
	line-height:35px;
}

</style>
</head>
<body>
<div >
<img src="http://jobsamosa.com/wp-content/uploads/2014/07/Visvesvaraya-National-Institute-of-Technology.png"  style="width:175px;height:140px; position: relative; float: left;"><br><br>
<font size="25" color="#00000" style=" align :centre; ">VISVESVARAYA NATIONAL INSTITUTE  OF <br>  <br>
   TECHNOLOGY</font>
</div>
<br>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>




<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>




    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>



</head>

<body>



<!-- Header Starts -->
<div class="header">

</div>
<!-- #Header Starts -->
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    
    <h2 style=" align : center; ">FEE TRANSACTION</h2>
</div>
</div>

<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>
			
			



            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="home.html">Home</a></li>
                <li><a href="agents.html">Mess Committee</a></li>         
                <li><a href="displaymenu.php">Mess Menu</a></li>
                <li><a href="contact.html">Contact Us</a></li>
				<li><a href="signup.html">Register</a></li>
				
				
				<li>
				<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Login
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="login.html">STUDENT LOGIN</a></li>
      <li><a href="admin_login.php">ADMIN LOGIN</a></li>
    </ul>
  </div>
</div>
</li>
				
				
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>
		<div style="height:100px;"></div>
		<div class="container">
  
  <div class="row">
  <div class="col-md-3">
      <ul class="nav nav-pills nav-stacked">
        <li ><a href="userlogin.php">Profile</a></li>
        <li><a href="coupen.php">Coupens Available</a></li>
        <li class="active"><a href="Fee.php">Fee Transaction</a></li>
		<li><a href="Edit.php">Edit Profile</a></li>
        <li><a href="loggedout.php">Log out</a></li>
      </ul>
    </div>
	
<div class="col-md-9">
<p class="FEE">
    <?php
include 'dbh.php';

$sql = "SELECT * FROM coupen";
$result = $conn->query($sql);


	$uid=$_SESSION["id"];
	$sql="SELECT * FROM profile WHERE `uid`='$uid'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "Fee paid:";
			if($row["Fee"])
			{
				echo "Yes<br>Challan No.:".$row["challan"]."<br>Balance:".$row["balance"]."<br>Date of Payment:".$row["date"]."<br>";
				
			}
			else
			{
				echo "No";
			}
		}
	}
?>
</p>
    </div>
    
    
    <div class="clearfix visible-lg"></div>
  </div>
</div>
<div style="height:200px;"></div>
<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">HOME</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.php">AGENTS</a></li>         
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.php">BLOG</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">CONTACTS</a></li>
              </ul>
            </div>
            
            
             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>MESS MANAGEMENT COMMITEE.</b><br>
<span class="glyphicon glyphicon-map-marker"></span> VNIT,SOUTH AMBAZARI ROAD <br>
<span class="glyphicon glyphicon-envelope"></span> getphanesh.com<br>
<span class="glyphicon glyphicon-earphone"></span> 999999999</p>
            </div>
        </div>
</div></div>

</body>
</html>

</body>
</html>