<html>
<body>
<head>
<style>
.error {color: #FF0000;}
li{
	font-size:18px;
	text-align:center;
}
</style>
</head>
<body style="text-align:center;bgcolor=#ffffcc">
<?php
include 'dbh.php';
include('header.php');

$sql = "SELECT * FROM profile";
$result = $conn->query($sql);
$err="";
if ($result->num_rows > 0) {
    // output data of each row
	?>
	<div style="height:80px"></div>
	<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-2">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="std_db.php">Student Database</a></li>
        <li class="active"><a href="delete.php">Remove a student</a></li>
        <li><a href="update.php">Update Fee Transactions</a></li>
        <li><a href="adloggedout.php">Log out</a></li>
      </ul>
    </div>
	<div class="col-md-2">
	<?php
	include('dbh.php');
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$err='';
	$first=$_POST["day"];

	if(empty($_POST['day']))
	{
		$err="Please Enter ID";
	}
	else
	{
	$sql = "DELETE FROM profile WHERE uid='$first' ";
	$sql1 = "DELETE FROM userlist WHERE uid='$first' ";
	if ($conn->query($sql) === TRUE&&$conn->query($sql1)) {
	   // header('location:success.html');
	   ?>
	   <h3 style="color:green"><?php echo "Deleted"?></h3>
	   <?php
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	}
	}
	?>




	<div class="container">
	<div class="container-body">
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
	<input name="day" size=15 type="text" placeholder="ID" />
		<INPUT TYPE="submit" VALUE="Delete">
	<h3 style="color:red"><?php echo $err?></h3>
	</form>
	</div>
	</div></div>
	<div class="col-md-7"></div></div>
	<?php
} else {
    echo "0 results";
}
?>
</body>
</html>