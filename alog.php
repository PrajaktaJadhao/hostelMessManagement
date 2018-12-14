<?php
session_start();


$err="";
$myusername="";
$mypassword="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user"]) OR empty($_POST["pass"])) {
    $err = "Please enter username and password";
  }
  else
  {
	 include("config.php");
		
	$myusername = $_POST['user'];
	$mypassword = $_POST['pass'];
	
	$sql = "SELECT * FROM admin WHERE user= '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
	  if($result)
	  {
		  		  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		  //$active = $row['active'];
		  //$count = mysqli_num_rows($result);
		  
		  // If result matched $myusername and $mypassword, table row must be 1 row
			
		if(strcmp($row['user'],$myusername)==0 AND strcmp($row['pass'],$mypassword)==0) 
			{ 
					//$_SESSION['username'] = $row['password']; 
					//echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
					//session_register("myusername");
					$_SESSION['login_user'] = $myusername;
					header("location:std_db.php");
			}
			else
			{
				echo "<script>alert('SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...');</script>";
				session_destroy();
				header("location:admin_login.php");
			}

	  }
	  else
		{
			echo "<script>alert('SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...');</script>";
			session_destroy();
			header("location:admin_login.php");
			
		}
	}
}
?>