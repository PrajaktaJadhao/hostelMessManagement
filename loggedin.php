
<?php
session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

	$_SESSION["id"]=$uid;

$sql = "SELECT * FROM userlist WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {
	echo "<script>alert('your username or password is incorrect!');</script><script> location.replace('login.html'); </script>";
} 
else {
	header("Location:userlogin.php");
}
?>