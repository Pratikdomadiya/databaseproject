<?php
 
include("DBConnection.php");

session_start();
$sid = $_SESSION["sid"]; 
if (isset($_POST['submit']))
{
 $date = $_POST["date"];
 $time = $_POST["time"];
 $duration= $_POST["duration"];
 $course=$_POST["course"];
 
 $sql2 = "select COURSE_ID from COURSE where COURSE_NAME = '$course'";
		$result2 = $db->query($sql2);
		if ($result2->num_rows > 0)
		{
			while ($row = $result2->fetch_assoc())
				{
					$id=$row["COURSE_ID"];
				}
					
		}
 $num=rand(35,80);
 echo $num;
 $sql3="insert into examination(LEARNER_ID,COURSE_ID,DATE,TIME,RESULTS,DURATION_TIME)VALUES ('$sid','$id','$date                     ','$time','$num','$duration')";
			     $result3 = $db->query($sql3);
 if(isset($result3))
 {
	 header('location:certification.php');
 }
 else
 {
	 header('location:exam.php');
 }
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
	<h3>YOUR CERTIFICATION IS READY</h3> 
	
	  <input type="Submit" name="submit" value="See"/>
	  <input type="Submit" name="submit" value="Home"/>
     
    </form>
  </div>
</div>