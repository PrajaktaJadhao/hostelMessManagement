<?php
include 'dbh.php';

$first = $_POST['Name'];
$last = $_POST['LastName'];
$uid = $_POST['uid'];
$email = $_POST['Email'];
$pwd = $_POST['Password'];
$hostel = $_POST['hostel'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$gender= $_POST['radiobutton'];
$fee=false;
$sql = "INSERT INTO profile(first, last, uid, email, pwd, hostel, branch, year, gender, Fee)  
VALUES('$first', '$last', '$uid', '$email', '$pwd', '$hostel', '$branch', '$year', '$gender','$fee')";
$result = $conn->query($sql);
$sql="INSERT INTO userlist(uid, pwd)  
VALUES('$uid','$pwd')";
$result = $conn->query($sql);

header("Location: home.html");
?>