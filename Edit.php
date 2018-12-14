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
	text-align:center;
}
*{
	margin:0px;
	padding:0px;
	}
body{
	font-family:Tahoma, Geneva, sans-serif;
background-image: url(http://getmyuni.azureedge.net/college-image/big/visvesaraya-national-institute-of-technology-vnit-nagpur.jpg); 
-moz-background-size: cover;
-webkit-background-size: cover;
background-size: cover;
background-position: top center !important;
background-repeat: no-repeat !important;
background-attachment: fixed;
	}
#container{
	width:550px;
	background-color:rgba(250,250,252,.9);
	margin:auto;
	margin-top:10px;
	margin-bottom:10px;
	box-shadow:0 0 3px #999;
                   opacity: 0.8;
	}
#container_body{
	padding:20px;
	}
.form_title{
	font-size:35px;
	color:#141823;
	text-align:center;
	padding:10px;
	font-weight:normal;
	}
.head_para{
	font-size:19px;
	color:#99a2a7;
	text-align:center;
	font-weight:normal;
	}
#form_name{
	padding:25px 0 0 15px;
	}
.firstnameorlastname{
	 margin-right:20px;
	}
.input_name{
	width:207px;
	padding:5px;
	font-size:18px;
	}
	
	#uid{
	padding:15px 0 10px 0px;
	}
.uid{
	width:434px;
	padding:5px;
	font-size:18px;
	}
	
#email_form{
	padding:15px 0 10px 0px;
	}
.input_email{
	width:434px;
	padding:5px;
	font-size:18px;
	}

#password_form{
	padding:10px 0 10px 0px;
	}
.input_password{
	width:434px;
	padding:5px;
	font-size:18px;
	}
#Re_password_form{
	padding:10px 0 10px 0px;
	}
.input_Re_password{
	width:434px;
	padding:5px;
	font-size:18px;
	}
.birthday_title{
	font-size:16px; 
	color:#8b919d; 
	font-weight:normal;
	padding:0 0 10px 0;
	}
select{
	padding:5px;
	}
#birthday{
	font-size:12px;
	color:#8b919d;
	padding-top:10px;
	}
#radio_button{
	padding:10px 0 0 0;
	}
#sign_user{
	font-size:14px;
	color:#FFF;
	text-align:center;
	background-color:#3B5998;
	width:475px;
	padding:10px;
	margin-top:10px;
	cursor: pointer;
	}
#errorBox{
	color:#F00;
	}



</style>
<script>
function Submit(){
	var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
	var fnameRegex=/[^A-Za-z\s]/;
	var fname = document.form.Name.value,
		lname = document.form.LastName.value,
		femail = document.form.Email.value,
		
		fpassword = document.form.Password.value,
		frpassword = document.form.enterpassword.value,
		fmonth = document.form.birthday_month.value,
		fday = document.form.birthday_day.value,
		fyear = document.form.birthday_year.value;
		
	if( fname == "" )
   {
     alert("First Name can't be blank");  
  return false;  
   }
else if(fnameRegex.test(fname)){
		alert("Enter a valid First Name");  
  return false;  
	 }
	if( lname == "" )
   {
      alert("Last Name can't be blank");  
  return false;  
   }
else if(fnameRegex.test(lname)){
		alert("Enter a valid Last Name");  
  return false;  
	 }
   
   if (femail == "" )
	{
		alert("Enter your email id");  
  return false; 
	 }else if(!emailRegex.test(femail)){
		alert("Enter a valid Email id");  
  return false;  
	 }
	 
	 
	 
	if(fpassword == "")
	 {
		 alert("Password can't be blank");  
  return false; 
	 }
	 

 if (frpassword == "" )
	{
		alert("Re-enter Password");  
  return false;
	 }
	 
	 if(frpassword !=  fpassword){
		 alert("Passwords are not matching");  
  return false;
		 }
	 
		 if (fmonth == "") {
        alert("Select your hostel block");  
  return false;
     }
	 if (fday == "") {
        alert("Select your branch");  
  return false;
     }
	 if (fyear == "") {
        dalert("Select your year of study");  
  return false;
     }
		if(document.form.radiobutton[0].checked == false && document.form.radiobutton[1].checked == false){
				alert("Select your gender");  
  return false;
			}
		if(fname != '' && lname != '' && femail != '' && frpassword != '' && fpassword != '' && fmonth != '' && fday != '' && fyear != ''){
			document.getElementById("errorBox").innerHTML = "form submitted successfully";
			}


		  
}

</script>
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
    
    <h2 style=" align : center; ">PROFILE</h2>
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
		<div style="height:70px;"></div>
  
  <div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-2">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="userlogin.php">Profile</a></li>
        <li><a href="coupen.php">Coupens Available</a></li>
        <li><a href="Fee.php">Fee Transaction</a></li>
		<li class="active"><a href="Edit.php">Edit Profile</a></li>
        <li><a href="loggedout.php">Log out</a></li>
      </ul>
    </div>
	<?php
include 'dbh.php';

$uid = $_SESSION['id'];


	$sql="SELECT * FROM profile WHERE uid='$uid'";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
?>
<div class="col-md-9">
	<div id="container">
  <div id="container_body">
    <div>
    </div>
    <!--Form  start-->
    <div id="form_name">
      <div class="firstnameorlastname">
       <form name="form" action="editin.php" method="POST" onsubmit="return Submit()">
       <div id="errorBox"></div>
        <input type="text" name="Name" value="<?php echo $row['first']?>" placeholder="First Name"  class="input_name" >
        <input type="text" name="LastName" value="<?php echo $row['last']?>" placeholder="Last Name" class="input_name" >
        
		
      </div>
      <div id="email_form">
        <input type="text" name="Email" value="<?php echo $row['email']?>"  placeholder="Your Email" class="input_email">
      </div>
      <div id="password_form">
        <input type="password" name="Password" value=""  placeholder="New Password" class="input_password">
      </div>
		<div id="Re_password_form">
        <input type="password" name="enterpassword" value=""  placeholder="Re-enter password" class="input_Re_password">
      </div>
      <!--birthday details start-->
      <div>
        <h3 class="birthday_title">DETAILS</h3>
      </div>
      <div>
        <select name="hostel" >
          <option value="" selected >HOSTEL</option>
          <option value="Hostel Block 1" <?php if($row["hostel"] == 'Hostel Block 1'){echo("selected");}?>>Hostel Block 1</option>
          <option value="Hostel Block 2" <?php if($row["hostel"] == 'Hostel Block 2'){echo("selected");}?>>Hostel Block 2</option>
          <option value="Hostel Block 3" <?php if($row["hostel"] == 'Hostel Block 3'){echo("selected");}?>>Hostel Block 3</option>
          <option value="Hostel Block 4" <?php if($row["hostel"] == 'Hostel Block 4'){echo("selected");}?>>Hostel Block 4</option>
          <option value="Hostel Block 5" <?php if($row["hostel"] == 'Hostel Block 5'){echo("selected");}?>>Hostel Block 5</option>
          <option value="Hostel Block 6 & 7" <?php if($row["hostel"] == 'Hostel Block 6 & 7'){echo("selected");}?>>Hostel Block 6 & 7</option>
          <option value="Hostel Block 6 New" <?php if($row["hostel"] == 'Hostel Block 6 New'){echo("selected");}?>>Hostel Block 6 New</option>
          <option value="Hostel Block 8 & 9" <?php if($row["hostel"] == 'Hostel Block 8 & 9'){echo("selected");}?>>Hostel Block 8 & 9</option>
          <option value="Hostel Block 10" <?php if($row["hostel"] == 'Hostel Block 10'){echo("selected");}?>>Hostel Block 10</option>
        </select>
        &nbsp;&nbsp;
        <select name="branch" >
          <option value="CSE" <?php if($row["branch"] == 'CSE'){echo("selected");}?>>CSE</option>
          <option value="ECE" <?php if($row["branch"] == 'ECE'){echo("selected");}?>>ECE</option>
          <option value="EEE" <?php if($row["branch"] == 'EEE'){echo("selected");}?>>EEE</option>
          <option value="MME" <?php if($row["branch"] == 'MME'){echo("selected");}?>>MME</option>
          <option value="MEC" <?php if($row["branch"] == 'MEC'){echo("selected");}?>>MEC</option>
          <option value="MIN" <?php if($row["branch"] == 'MIN'){echo("selected");}?>>MIN</option>
          <option value="ARCHI" <?php if($row["branch"] == 'ARCHI'){echo("selected");}?>>ARCHI</option>
          <option value="CIV" <?php if($row["branch"] == 'CIV'){echo("selected");}?>>CIV</option>
          <option value="CHEM" <?php if($row["branch"] == 'CHEM'){echo("selected");}?>>CHEM</option>
          <option value="PG" <?php if($row["branch"] == 'PG'){echo("selected");}?>>PG</option>
          <option value="PHD" <?php if($row["branch"] == 'PHD'){echo("selected");}?>>PHD</option>
          
        </select>
        &nbsp;&nbsp;
        <select name="year">
          <option value="I YEAR" <?php if($row["year"] == 'I YEAR'){echo("selected");}?>>I YEAR</option>
          <option value="II YEAR" <?php if($row["year"] == 'II YEAR'){echo("selected");}?>>II YEAR</option>
          <option value="III YEAR" <?php if($row["year"] == 'III YEAR'){echo("selected");}?>>III YEAR</option>
          <option value="IV YEAR" <?php if($row["year"] == 'IV YEAR'){echo("selected");}?>>IV YEAR</option>
          
        </select>
      </div>
      <!--birthday details ends-->
      <div id="radio_button">
        <input type="radio" name="radiobutton" value="F" <?php if($row["gender"]=="F"){echo("checked");}?>>
        <label >Female</label>
        &nbsp;&nbsp;&nbsp;
        <input type="radio" name="radiobutton" value="M" <?php if($row["gender"]=="M"){echo("checked");}?>>
        <label >Male</label>
      </div>
       <div>
	   <input id="sign_user" type="submit" ></input>
      </div>
     </form>
    </div>
    <!--form ends--> 
  </div>
</div>
<?php
		}
	}
?>
    </div>
    
    <div class="clearfix visible-lg"></div>
  </div>
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