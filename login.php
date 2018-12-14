<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['user']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT * FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
	  
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
	if(!empty($row['username']) AND !empty($row['password'])) 
		{ 
				//$_SESSION['username'] = $row['password']; 
				echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
				//session_register("myusername");
				$_SESSION['login_user'] = $myusername;
         
				header("location: welcome.php");
		}else 
	  {
         echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
      }
   }
?>
