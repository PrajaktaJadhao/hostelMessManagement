<html>
<body>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<?php
include 'dbh.php';
include('header.php');

$myid = $_POST['id'];

if (empty($_POST["id"]))
{
	header("location: std_db.php");
}
else{

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	?>
	<h1 style="text-align:center">Student Database</h1>
	<p style="text-align:center;float:right"><a href="#">Update</a> &nbsp &nbsp <a href="display.php">Delete</a> </p>
	<form method="post" action="display.php">search by ID<input type="number" name=id><input type="submit" value="search"></form>
	<table border="1px solid black" cellpadding:"100" style="text-align:center" width="100%" align="center">
	
	
	
	<tr>
	<th><h3>First Name</h3></th>
	<th><h3>Last Name</h3></th>
	<th><h3>ID</h3></th>
	<th><h3>E-mail</h3></th>
	<th><h3>Hostel Block</h3></th>
	<th><h3>Branch</h3></th>
	<th><h3>Year</h3></th>
	<th><h3>Gender</h3></th>
	<th><h3>Fee</h3></th>
	</tr>
	
	<?php
    while($row = $result->fetch_assoc()) {
		
		
		if($row['uid'] == $myid)
		{
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
		<td><p><?php echo $row["fee"] ?></p></td>
		</tr>
			
		<?php
		}
		?>
		
    <?php
	}
	?>
	</table>
	<?php
} else {
    echo "0 results";
}
}
?>
</body>
</html>