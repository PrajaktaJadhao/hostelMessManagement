<?php
session_start();
include 'dbh.php';

$first = $_POST['Name'];
$last = $_POST['LastName'];
$uid = $_SESSION['id'];
$email = $_POST['Email'];
$pwd = $_POST['Password'];
$hostel = $_POST['hostel'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$gender= $_POST['radiobutton'];
$sql = "UPDATE `profile` SET `first`='$first',`last`='$last',`email`='$email',`pwd`='$pwd',`hostel`='$hostel',`branch`='$branch',`year`='$year',`gender`='$gender' WHERE `uid`='$uid'";
$result = $conn->query($sql);
$sql=" UPDATE `userlist` SET `uid`='$uid',`pwd`='$pwd'";
$result = $conn->query($sql);

header("Location: userlogin.php");
?>