<?php
include 'dbh.php';

$first = $_POST['first'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO Contact (first, contact, email, message)  
VALUES('$first', '$contact', '$email', '$message')";
$result = $conn->query($sql);
?>