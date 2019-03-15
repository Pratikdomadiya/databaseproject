<?php
error_reporting(0);
include ("DBConnection.php");
session_start();
$sid = $_SESSION["sid"];
$sql = "SELECT COURSE_NAME FROM COURSE where COURSE_TYPE = 'paid'";
$result = $db->query($sql);
$sql1="SELECT COURSE_NAME FROM enrollment NATURAL JOIN course where LEARNER_ID='$sid'";
$result1=$db->query($sql1);
echo "PAID COURSE AVAILABLE FOR YOU.....<br>";
if ($result->num_rows > 0)
	{

	$result11 = array();
	while($row1 = $result1->fetch_assoc())
	{
		$result11[] = $row1;
	}
	$length=count($result11);
	$r= array();
	for($i=0 ; $i < $length ; $i++)
	{
		array_push($r,$result11[$i][COURSE_NAME]);
	}

	echo '<html>';
	echo '<body>';
	echo '<form method="POST">';
	while ($row = $result->fetch_assoc())
	{
		$a=$row["COURSE_NAME"];
		if(!in_array($a , $r))
		{
			echo '<input type="radio" name="list" value='.$a.'>'.$a.'<br/>';
		}
		
	}
	if (!empty($_POST['list']))
		{
		$i = $_POST['list'];
		$sql2 = "select COURSE_ID from COURSE where COURSE_NAME = '$i'";
		$result2 = $db->query($sql2);
		if ($result2->num_rows > 0)
		{
			while ($row = $result2->fetch_assoc())
				{
					$id=$row["COURSE_ID"];
				}
					
		}
		$sql4= "select COURSE_AMOUNT from paid_course where COURSE_ID= '$id'";
		$result4 = $db->query($sql4);	
		$row4 = $result4->fetch_assoc();
		print '$row4';
		}
			
		
	
   
	
	echo '<input type="submit" name="submit" value="make a payment">';
	echo '</form>';
	echo '</body>';
	echo '</html>';
	}
  else
	{
	echo 'Sorry...No Free Course Available Currently.';
	}

if (isset($_POST['submit']))
	{ //to run PHP script on submit
	if (!empty($_POST['list']))
		{
		$i = $_POST['list'];
		$sql2 = "select COURSE_ID from COURSE where COURSE_NAME = '$i'";
		$result2 = $db->query($sql2);
		if ($result2->num_rows > 0)
		{
			while ($row = $result2->fetch_assoc())
				{
					$id=$row["COURSE_ID"];
				}
					/*while($row = $result2->fetch_assoc())
					{
						$result[] = $row;
					}
					$length=count($result);
					for($i=0 ; $i < $length ; $i++)
					{
						array_push($id,$result[$i][COURSE_ID]);
					}*/

		}
			$_SESSION["id"]=$id;
			header('Location: payment.php'); 

		}
			
		
	}

?>


