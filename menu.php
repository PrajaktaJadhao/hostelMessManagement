<?php
   
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'mess_menu');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myday = mysqli_real_escape_string($db,$_POST['day']);
      $mybreak_fast = mysqli_real_escape_string($db,$_POST['break_fast']);
	  $mylunch = mysqli_real_escape_string($db,$_POST['lunch']);
	  $mysnacks = mysqli_real_escape_string($db,$_POST['snacks']);
	  $mydinner = mysqli_real_escape_string($db,$_POST['dinner']); 
      
      $sql = "UPDATE menu SET break_fast='$mybreak_fast',lunch='$mylunch',snacks='$mysnacks',dinner='$mydinner' WHERE day='$myday'";
      $result = mysqli_query($db,$sql);
	  if ($result) {
		echo "Record updated successfully";
		header("location: mess_menu.php");
		} 
		else {
			echo "Error updating record: " ;
		}

      

   }
?>
