<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="hstyle.css">
</head>

<div class="header">
	<h1>Homepage</h1>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
		<h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
		<p> <a href="Homepage.php?logout='1'" style="color: darkblue;">logout</a> </p>
		<button onClick="window.location='Grades.php';" value="Check Grades">Check Grades </button> 
    <?php endif ?>
</div>

<style>
body {
 background-image: url("images/monsters.jpg");
 background-color: #cccccc;
 height: 380px; 
 background-position: center; 
 background-repeat: no-repeat; 
 background-size: cover; 
}
button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
	display: inline-block;
	font-size: 20px;
	font-family: 'Times New Roman', Times, serif;
	position:absolute;
    top:100px;    
    right:290px;
  }
p{
	position:absolute;
    top:-220px;    
	right:-260px;
	font-size: 36px;
}
</style>
</html>