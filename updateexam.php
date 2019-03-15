<?php
 
include("DBConnection.php");

session_start();
$sid = $_SESSION["sid"]; 
if (isset($_POST['submit']))
{
 $date = $_POST["date"];

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
 $num=rand(35,100);
 
				 if ($num < 35) {
                        $grade="D+";
                         } elseif ($num < 45 && $num >= 35) {
                            $grade="D++";
                         }
						  elseif ($num < 55 && $num >= 45) {
                            $grade="C+";
                         }
						  elseif ($num < 65 && $num >= 55) {
                            $grade="C++";
                         } elseif ($num < 75 && $num >= 65) {
                           $grade="B+";
                         }
						  elseif ($num < 85 && $num >= 75) {
                            $grade="B++";
                         }
						  elseif ($num < 95 && $num >= 85) {
                            $grade="A+";
                         }
								else {
                               $grade="A++";
                         }

 $sql3="update examination set DATE='$date',RESULTS='$num' where COURSE_ID='$id' && LEARNER_ID='$sid'";
			     $result3 = $db->query($sql3);
				 
				 $sql5 = "select * from examination where COURSE_ID = '$id'";
		$result5 = $db->query($sql5);
		if ($result5->num_rows > 0)
		{
			while ($row5 = $result5->fetch_assoc())
				{
					$eid=$row5["EXAM_ID"];
				}
					
		}
				
 $sql4="update certificate set GRADE='$grade' where EXAM_ID='$eid'";
			     $result4 = $db->query($sql4);
				  
				
 header('location:certification.php');
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
	<h3>SELECT AN EXAM FOR UPDATE</h3> 
		 <?php
                         $result = mysqli_query($db,"SELECT COURSE_NAME FROM course natural join examination where      LEARNER_ID='$sid'");
						 echo "<select name='course'>";
						 echo "<option value='sid'>SELECT COURSE FOR EXAM</option>";
						 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
						{
							echo "<option value='". $row['COURSE_NAME'] ."'>" .$row['COURSE_NAME'] ."</option>" ;							
						}
                        echo "</select>" ;
     ?><br><br>
	  <input type="date" placeholder="select date" name="date" required />
	  
      
	  <input type="Submit" name="submit" value="submit"/>
     
    </form>
  </div>
</div>