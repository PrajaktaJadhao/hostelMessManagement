<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Update</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
<style>
.error {color: #FF0000;}
li{
	font-size:18px;
	text-align:center;
}
table{
	text-align:center;
	width:100%;
	table-layout: fixed;
}
td {
	padding: 15px;
	font-size:12px;
	vertical-align:middle;
	align:center;
    border-bottom: 1px solid #ddd;
}
th{
	align:center;
	font-size:14px;
	height:40px;
    border-bottom: 1px solid #ddd;
	padding:15px;
}
h3{
	font-size:10px;
}
tr:hover {background-color: #f5f5f5}
form{
	font-size:20px;
}
input{
	text-align:right;
}

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#pickyDate').datepicker({
            format: "dd/mm/yyyy"
        });
    });
</script>
</head>
</head>
<?php
include('dbh.php');
include 'header.php';
$err="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$err='';
$first=$_POST["day"];
$paydate=$_POST["date"]; 
$fees='1';
if(empty($_POST['day']))
{
	$err="Please Enter ID";
}
else
{
	$sql = "SELECT * FROM profile WHERE `uid`='$first'";
	$result=$conn->query($sql);
	if($row = $result->fetch_assoc()) {
		if($row["Fee"])
		{
			echo "<script>alert('Fee paid');</script>";
		}
		else{
			$sql = "UPDATE profile SET `Fee`='$fees' WHERE `uid`='$first' ";

			if ($conn->query($sql) === TRUE) {
			 header('location:std_db.php');
			   
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	}

}
}
?>




<body>
<div style="height:80px"></div>
	<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-2">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="std_db.php">Student Database</a></li>
        <li><a href="delete.php">Remove a student</a></li>
        <li  class="active"><a href="update.php">Update Fee Transactions</a></li>
        <li><a href="loggedout.php">Log out</a></li>
      </ul>
    </div>
	<div class="col-md-3"></div>
	<div class="col-md-4">
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
 
 Student Id: <input name="day" size=15 type="text" /> <br>
 Challan No.: <input name="=ch" size=15 type="text" /> <br>
 <div class="hero-unit">
 Date of payment:<input name="date" size=15 type="date" id="pickyDate" /> <br>
 </div>
            
 <p align="center"><INPUT style="width:100px;" TYPE="submit" VALUE="Paid" class="btn btn-success" name="submit"></p>
<h3 style="color:red"><?php echo $err?></h3>
</form>
</div>
<div class="col-md-2"></div>
</div>
</body>
</html>