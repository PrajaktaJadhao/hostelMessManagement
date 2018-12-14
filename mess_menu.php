<html>
<body>
<?php
include('header.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mess_menu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	?>
	<h1 style="text-align:center">Mess Menu</h1>
	<table border="1px solid black" cellpadding:"100" style="text-align:center" width="70%" align="center">
	
	
	
	<tr>
	<th><h1>Day</h1></th>
	<th><h1>Break Fast</h1></th>
	<th><h1>Lunch</h1></th>
	<th><h1>Snacks</h1></th>
	<th><h1>Dinner</h1></th>
	</tr>
	
	<?php
    while($row = $result->fetch_assoc()) {
		?>
		
		
		<tr>
		<td><h3><?php echo $row["day"] ?></h3></td>
		<td><h3><?php echo $row["break_fast"] ?></h3></td>
		<td><h3><?php echo $row["lunch"] ?></h3></td>
		<td><h3><?php echo $row["snacks"] ?></h3></td>
		<td><h3><?php echo $row["dinner"] ?></h3></td>
		</tr>
			
		
		
    <?php
	}
	?>
	</table>
	<?php
} else {
    echo "0 results";
}
$conn->close();
?>
<h1 style="text-align:center"><a href="update_menu.html">Update Mess Menu</a></h1>
</body>
</html>