<?php
 
include("DBConnection.php");


if (isset($_POST['submit']))
{
  $ppt=$_POST["ppt"];
 $pdf=$_POST["pdf"];
 $video=$_POST["video"];
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
		$sql1 = "UPDATE course_content SET VIDEO_LECTURE='$video',PDF_CONTENT='$pdf',PPT_CONTENT='$ppt' WHERE COURSE_ID='$id'";
$result1 = $db->query($sql1);
 				
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
	<h3>Update Course </h3> 
		 <?php
                         $result = mysqli_query($db,"SELECT COURSE_NAME FROM course ");
						 echo "<select name='course'>";
						 echo "<option value='sid'>SELECT COURSE</option>";
						 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
						{
							echo "<option value='". $row['COURSE_NAME'] ."'>" .$row['COURSE_NAME'] ."</option>" ;							
						}
                        echo "</select>" ;
     ?><br><br>
	  <input type="text" placeholder="PPT(yes or no)" name="ppt" required />
	   <input type="text" placeholder="PDF(yes or no)" name="pdf" required />
	   <input type="text" placeholder="VIDEO(yes or no)" name="video" required />
	 
	 
      
	  <input type="Submit" name="submit" value="submit"/>
     
    </form>
  </div>
</div>