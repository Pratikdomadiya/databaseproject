<?php
include("DBConnection.php");
session_start();
$sid = $_SESSION["sid"];
$id = $_SESSION["id"];
if (isset($_POST['SUBMIT']))
	{
		
		$date=date("Y/m/d");
		$time=date("h:i:sa");
		$card_no = $_POST["card_no"];
		$sql1= "select * FROM paid_course where COURSE_ID='$id'";
		$result2 = $db->query($sql1);
		$row = $result2->fetch_assoc();
		$amount = $row["COURSE_AMOUNT"];
		
		$sql3= "INSERT INTO payment(LEARNER_ID,COURSE_ID,CARD_NO,PAYMENT_AMOUNT,PAYMENT_DATE)values ('$sid','$id','$card_no','$amount','$date')";
		$result3 = $db->query($sql3);
		$sql4="insert into ENROLLMENT(LEARNER_ID,COURSE_ID,DATE,TIME)VALUES ('$sid','$id','$date                     ','$time')";
			     $result4 = $db->query($sql4);
		
		header('Location: mycourse.php'); 
	}
	ELSE
	{   
	}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Payment Form Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="payment/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="payment/js/jquery.min.js"></script>
</head>
<body>
	<div class="main">
		
		<div class="content">
			
			<script src="payment/js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Make a Payment </h2>
									  <ul class="resp-tabs-list">
										  
										 
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic2"></label></span></li>
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											
											
											<h3 class="pay-title">Credit Card Info</h3>
											<form method="post">
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text"  value="">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" name="card_no" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
														<h5>AMOUNT</h5><?php 
										$sql1= "select * FROM paid_course where COURSE_ID='$id'";
										$result2 = $db->query($sql1);
										$row = $result2->fetch_assoc();
										$amount = $row["COURSE_AMOUNT"];
										echo ''.$amount;
														
														?>
<!--<input type="text" name ="amount"  required="">-->
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required >
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" name="SUBMIT" value="SUBMIT">
											     <a href="paidcourse.php">BACK</a>
											</form>
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>
									</div>
																<div class="user-right">
																	<input type="submit" value="LOGIN">
																</div>
																<div class="clear"></div>
								</div>
								
								
													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">Dedit Card Info</h3>
											<form>
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" value="">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" name="SUBMIT" value="SUBMIT">
											</form>
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>	
									</div>
								</div>	
							</div>
						</div>	

		</div>
		<p class="footer">Copyright © 2016 Payment Form Widget. All Rights Reserved | Template by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	</div>
</body>
</html>