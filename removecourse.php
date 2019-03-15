<?php
 
include("DBConnection.php");

session_start();
$sid = $_SESSION["sid"]; 
if (isset($_POST['submit']))
{
 
 
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
		$sql3 = "DELETE FROM enrollment WHERE COURSE_ID='$id' && LEARNER_ID='$sid'";
		$result3 = $db->query($sql3);
 				
 header('location:mycourse.php');
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
	<h3>select course to remove</h3> 
		 <?php
                         $result = mysqli_query($db,"SELECT * FROM enrollment NATURAL JOIN course where 
						 LEARNER_ID='$sid'");
						 echo "<select name='course'>";
						 echo "<option value='sid'>SELECT COURSE </option>";
						 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
						{
							echo "<option value='". $row['COURSE_NAME'] ."'>" .$row['COURSE_NAME'] ."</option>" ;							
						}
                        echo "</select>" ;
     ?><br><br>
	        
	  <input type="Submit" name="submit" value="submit"/>
     
    </form>
  </div>
</div>