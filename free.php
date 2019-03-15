<?php
 
include("DBConnection.php");

if (isset($_POST['submit']))
{
 $date = $_POST["date"];
 
 $course=$_POST["course"];
 $ppt=$_POST["ppt"];
 $pdf=$_POST["pdf"];
 $video=$_POST["video"];
 $iid=$_POST["iid"];
 
 $sql2 = "insert into course(COURSE_NAME,COURSE_TYPE,INSTRUCTOR_ID)VALUES ('$course','free','$iid')";
$result2 = $db->query($sql2);

$sql4="select * from course where COURSE_NAME='$course'";
$result4 = $db->query($sql4);
while ($row = $result4->fetch_assoc())
						{
							$id=$row["COURSE_ID"];
						}
						
						$sql4 = "insert into course_content(COURSE_ID,VIDEO_LECTURE,PDF_CONTENT,PPT_CONTENT) VALUES ('$id','$video','$pdf','$ppt')";
$result4 = $db->query($sql4);

                       $sql3 = "insert into free_course VALUES ('$id','$date')";
$result3= $db->query($sql3);

						
header('location:addcourse.php');
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
	
	  <input type="text" placeholder="COURSE_NAME" name="course" required />
	  <input type="text" placeholder="INSTRUCTOR_ID" name="iid" required />
	  
	  <input type="date" placeholder="DATE" name="date" required />
       <input type="text" placeholder="PPT(yes or no)" name="ppt" required />
	   <input type="text" placeholder="PDF(yes or no)" name="pdf" required />
	   <input type="text" placeholder="VIDEO(yes or no)" name="video" required />
	  <input type="Submit" name="submit" value="submit"/>
	   
     
    </form>

  </div>
</div>