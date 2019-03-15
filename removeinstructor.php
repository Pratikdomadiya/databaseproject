<?php
 
include("DBConnection.php");

if (isset($_POST['submit']))
{
	$name=$_POST["course"];
	$sql="select * from instructor where name='$name'";
	$result2 = $db->query($sql);
	while ($row = $result2->fetch_assoc())
		{
			$id=$row["INSTRUCTOR_ID"];
		}
	$sql4="update COURSE set INSTRUCTOR_ID='NULL' where INSTRUCTOR_ID='101'";
	$result4 = $db->query($sql4);
	$sql2="DELETE from INSTRUCTOR where INSTRUCTOR_ID='$id'";
	$result3 = $db->query($sql2);
						
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
	<?php
	  $result = mysqli_query($db,"SELECT NAME FROM instructor");
						 echo "<select name='course'>";
						 echo "<option value='sid'>SELECT INSTRUCTOR</option>";
						 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
						{
							
						echo "<option value='". $row['NAME'] ."'>" .$row['NAME'] ."</option>" ;							
						}
                        echo "</select>" ;
						echo "</br></br>"

	  ?>
  
	  <input type="Submit" name="submit" value="submit"/>
     
    </form>
  </div>
</div>