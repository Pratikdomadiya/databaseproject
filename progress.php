
<!DOCTYPE html>
<html lang="en">

  <head>
	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="unicat/styles/bootstrap4/bootstrap.min.css">
<link href="unicat/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="unicat/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="unicat/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="unicat/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="unicat/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="unicat/styles/responsive.css">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="instructor/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="instructor/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="instructor/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="instructor/css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
      
        <a class="btn btn-primary" href="index.php">Back</a>
      </div>
    </nav>
    <!-- Bootstrap core JavaScript -->
    <script src="instructor/vendor/jquery/jquery.min.js"></script>
    <script src="instructor/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>


<?php
session_start();
include("DBConnection.php");



$sid = $_SESSION["sid"];

$sql = "SELECT * FROM enrollment NATURAL JOIN course where LEARNER_ID='$sid'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="row">';
    while ($row = $result->fetch_assoc()) {
		
        $iid     = $row["INSTRUCTOR_ID"];
        $stmt    = "SELECT NAME from instructor where INSTRUCTOR_ID='$iid'";
        $result2 = $db->query($stmt);
        while ($row2 = $result2->fetch_assoc()) 
		{
            
            
        
        
        echo '
			<div class="col-lg-4 course_col">
					<div class="course">
									<div class="course_image"><img src="images/course_5.jpg" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><href="#">' . $row["COURSE_NAME"] . '</h3>
										<div class="course_teacher">course instructor name: ' . $row2["NAME"] . '</div>
										<div class="course_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto">' . $row["COURSE_TYPE"] . '</div>
										</div>
									</div>
								</div>
				</div>';
        
        //header('Location:index.php');
	}
    }
    ECHO '</DIV>';
} else {
    header('Location:registration.php');
    echo please - register;
}
echo '</br></br><center><h2>Exam You Have Taken</h2></center>'.'</br></br>';
$sql = "SELECT * FROM examination NATURAL JOIN course where LEARNER_ID='$sid'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="row">';
    while ($row = $result->fetch_assoc()) {
		
        $iid     = $row["INSTRUCTOR_ID"];
        $stmt    = "SELECT NAME from instructor where INSTRUCTOR_ID='$iid'";
        $result2 = $db->query($stmt);
        while ($row2 = $result2->fetch_assoc()) 
		{
            
            
        
        
        echo '
			<div class="col-lg-4 course_col">
					<div class="course">
									
									<div class="course_body">
										<h3 class="course_title"><href="#">' . $row["COURSE_NAME"] . '</h3>
										<div class="course_teacher">course instructor name: ' . $row2["NAME"] . '</div>
										<div class="course_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto">' . $row["COURSE_TYPE"] . '</div>
										</div>
									</div>
								</div>
				</div>';
        
        //header('Location:index.php');
	}
    }
    ECHO '</DIV>';
} else {
    header('Location:registration.php');
    echo please - register;
}
echo '</br></br><center><h2>Your Certificates</h2></center>'.'</br></br>';
$sql = "SELECT * FROM examination NATURAL JOIN certificate NATURAL JOIN course where LEARNER_ID='$sid'";
$result = $db->query($sql);

if ($result->num_rows > 0) 
{
    echo '<div class="row">';
    while ($row = $result->fetch_assoc()) {
		
        
        echo '
			<div class="col-lg-4 course_col">
					<div class="course">
									
									<div class="course_body">
										<h3 class="course_title"><href="#">' . $row["COURSE_NAME"] . '</h3>
										<div class="course_teacher">Exam Grade: ' . $row["GRADE"] . '</div>
										<div class="course_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											
										</div>
									</div>
								</div>
				</div>';
        
        //header('Location:index.php');
		}
	
	
    }
    ECHO '</DIV>';
	
$db->close();

?>