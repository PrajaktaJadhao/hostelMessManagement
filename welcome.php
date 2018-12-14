<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
	  <style>
	  div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: brown;
}

/* Style the links inside the tab */
div.tab a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 7px 100px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 20px;
}

	  </style>
   </head>
   
   <body>
		<h2 style="float:right"><a href = "logout.php">Sign Out</a></h2>
		<br>
		<br>
		<h1 style="text-align:center">Visvesvaraya National Institute of Technology</h1>
		<h1 style="text-align:center">Hostel Mess Section</h1>
		<h2 style="text-align:center">Welcome <?php echo $login_session; ?></h2> 
		<div class="tab">

  <a href="std_db.php" class="tablinks">Student Database</a>
  <a href="mess_menu.php" class="tablinks" >Mess Menu</a>
  <a href="#" class="tablinks" >Mess Reports</a>
  <a href="#" class="tablinks" >Complaint Box</a>
</div>
      
   </body>
   
</html>