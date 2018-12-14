<html>
<body>
<head>
<style>
.error {color: #FF0000;}
li{
	font-size:18px;
	text-align:center;
}
table{
	text-align:center;
	width:100%;
}
td {
	padding: 15px;
	font-size:12px;
	height:60px;
    border-bottom: 1px solid #ddd;
}
th{
	font-size:14px;
	height:40px;
	align:center;
    border-bottom: 1px solid #ddd;
	padding:15px;
}
h3{
	font-size:10px;
}
tr:hover {background-color: #f5f5f5}
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
</head>

<?php
include 'dbh.php';
include('header.php');
$err='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
$day=$_POST["day"];
$item=$_POST["item"];
$cost=$_POST["cost"]; 
$category=$_POST["category"];

$sql = "UPDATE coupen SET `item`='$item',`cost`='$cost',`category`='$category' WHERE `day`='$day'";
			if ($conn->query($sql) === TRUE) {
			   $sql = "SELECT * FROM profile";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row1 = $result->fetch_assoc()) {
						$row1[$day]=0;
					}
				}
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
}

?>
<div style="height:80px"></div>
	<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-2">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="std_db.php">Student Database</a></li>
        <li><a href="delete.php">Remove a student</a></li>
        <li><a href="update.php">Update Fee Transactions</a></li>
		<li><a href="addcoupen.php">Add coupen</li>
        <li><a href="loggedout.php">Log out</a></li>
      </ul>
    </div>

	<div class="col-md-3"></div>
	<div id="form-name">
	<div class="col-md-4">
	<div class="container">
	<div class="container-body">
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" name="form">
 <select name="day" placeholder="Day">
 <option value="Monday">Monday</option>
 <option value="Tuesday">Tuesday</option>
 <option value="Wednesday">Wednesday</option>
 <option value="Thursday">Thursday</option>
 <option value="Friday">Friday</option>
 <option value="Saturday">Saturday</option>
 <option value="Sunday">Sunday</option>
 </select><br>
 <input type="text" name="item" placeholder="Item name"></input>
 <input type="text" name="cost" placeholder="Cost"></input><br>
 Veg<input type="radio" name="category" checked value="Veg"></input>
 NonVeg<input type="radio" name="category" value="Non Veg"></input>
            </div></div>
 <p align="center"><INPUT style="width:100px;" TYPE="submit" VALUE="Add" class="btn btn-success" name="submit"></p>
<h3 style="color:red"><?php echo $err?></h3>
</form>
</div>
</div>
<div class="col-md-2"></div>
	
</div>
	<?php
	include"footer.php"
	?>
</body>
</html>