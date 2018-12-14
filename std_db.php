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


</style>
</head>

<?php
include 'dbh.php';
include('header.php');
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
<?php
$sql = "SELECT * FROM profile";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	?>
	
	<div class="col-md-8">
	<!--<p style="text-align:center;float:right"><a href="update.php">Update</a> &nbsp &nbsp <a href="delete.php">Delete</a> </p>-->
	<table>
	<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>ID</th>
	<th>E-mail</th>
	<th>Hostel Block</th>
	<th>Branch</th>
	<th>Year</th>
	<th>Gender</th>
	<th>Fee</th>
	</tr>
	
	<?php
    while($row = $result->fetch_assoc()) {
		?>
		
		
		<tr>
		<td><p><?php echo $row["first"] ?></p></td>
		<td><p><?php echo $row["last"] ?></p></td>
		<td><p><?php echo $row["uid"] ?></p></td>
		<td><p><?php echo $row["email"] ?></p></td>
		<td><p><?php echo $row["hostel"] ?></p></td>
		<td><p><?php echo $row["branch"] ?></p></td>
		<td><p><?php echo $row["year"] ?></p></td>
		<td><p><?php echo $row["gender"] ?></p></td>
		<td><p><?php echo $row["Fee"] ?></p></td>
		</tr>
			
		
		
    <?php
	}
	?>
	</table></div></div>
	<?php
} else {
    echo "No students";
}
?>
</body>
</html>