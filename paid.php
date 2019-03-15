<?php
 
include("DBConnection.php");

if (isset($_POST['submit']))
{
 $date = $_POST["date"];
 $amount= $_POST["amount"];
 $course=$_POST["course"];
 $iid=$_POST["iid"];
 $ppt=$_POST["ppt"];
 $pdf=$_POST["pdf"];
 $video=$_POST["video"];
 
 $sql2 = "insert into course(COURSE_NAME,COURSE_TYPE,INSTRUCTOR_ID)VALUES ('$course','paid','$iid')";
$result2 = $db->query($sql2);

$sql3 ="select * from course where COURSE_NAME='$course'";
$result2 = $db->query($sql3);
while ($row = $result2->fetch_assoc())
						{
							$id=$row["COURSE_ID"];
						}
						$sql1 = "insert into course_content(COURSE_ID,VIDEO_LECTURE,PDF_CONTENT,PPT_CONTENT) VALUES ('$id','$video','$pdf','$ppt')";
$result1 = $db->query($sql1);
						$sql4 = "insert into paid_course VALUES ('$id','$amount','$date')";
$result3 = $db->query($sql4);
header('location:adminhome.php');
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
	  <input type="text" placeholder="AMOUNT" name="amount" required />
	  <input type="date" placeholder="DATE" name="date" required />
	   <input type="text" placeholder="PPT(yes or no)" name="ppt" required />
	   <input type="text" placeholder="PDF(yes or no)" name="pdf" required />
	   <input type="text" placeholder="VIDEO(yes or no)" name="video" required />
  
	  <input type="Submit" name="submit" value="submit"/>
     
    </form>
  </div>
</div>