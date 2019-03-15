<?php
		session_start();
      if(!isset($_SESSION['sid'])) // If session is not set then redirect to Login Page
       {
		   header("Location:home.php");  
       }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="2ndpage/styles/bootstrap4/bootstrap.min.css">
<link href="2ndpage/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="2ndpage/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="2ndpage/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="2ndpage/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="2ndpage/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="2ndpage/styles/responsive.css">
</head>
<body>

<div class="super_container">

	

		

		

	</header>
	
	
	<!-- Home -->

	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"                                   ></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/event_2.jpg)"                                ></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/about_2.jpg)"                            ></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Getyour 
							  <span>Education</span> today!</h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
		</div>

	</div>

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/earth-globe.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Paid Courses</h2>
								<a href="paidcourse.php" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/earth-globe.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Free courses</h2>
								<a href="freecourse.php" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					
			</div>
		</div>
	</div>
	<!-- Services -->

	

<script src="2ndpage/js/jquery-3.2.1.min.js"></script>
<script src="2ndpage/styles/bootstrap4/popper.js"></script>
<script src="2ndpage/styles/bootstrap4/bootstrap.min.js"></script>
<script src="2ndpage/plugins/greensock/TweenMax.min.js"></script>
<script src="2ndpage/plugins/greensock/TimelineMax.min.js"></script>
<script src="2ndpage/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="2ndpage/plugins/greensock/animation.gsap.min.js"></script>
<script src="2ndpage/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="2ndpage/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="2ndpage/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="2ndpage/plugins/easing/easing.js"></script>
<script src="2ndpage/js/custom.js"></script>

</body>
</html>