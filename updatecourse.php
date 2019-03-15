<?php
 
include("DBConnection.php");


if (isset($_POST['update_amount']))
{  
 	 header('location:updateamount.php');
 }
 if(isset($_POST['update_content']))
 {
	 header('location:updatecontent.php');
 }

 

?>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Admin Registration</title>
	<link rel="stylesheet" href="examcss/css/font-awesome.min.css">
	<link rel="stylesheet" href="examcss/css/bootstrap.min.css">
	<link rel="stylesheet" href="examcss/css/style.css">
	<link rel="stylesheet" href="css/style2.css">
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>

</head>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST" >
	<h3>Select Type</h3> 
		 
	  <input type="Submit" name="update_amount" value="update_amount"/>
	  <input type="Submit" name="update_content" value="update_content"/></br>
     
	  <a href="adminhome.php">BACK</a>
    </form>
  </div>
</div>