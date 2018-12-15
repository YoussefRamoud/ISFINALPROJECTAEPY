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
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th> 
    <th>Grade</th>
    <th>Action</th> 
    <!-- Action is only for lecturers  -->
  </tr>
</table>

<button onClick="window.location='Homepage.php';" value="Back">Back </button>

</html>  

<style>
table, th, td {
  border: 1px solid black;
}
button {
    background-color: black; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
	display: inline-block;
	font-size: 20px;
	font-family: 'Times New Roman', Times, serif;
	position:absolute;
    top:550px;    
    right:1270px;
}
</style>