<?php
include("DBConnection.php");

if(isset($_POST['signup']) && $_POST["id"]!=NULL)
{
 //$id =$_POST["id"];
 $name = $_POST["id"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
 $contact = $_POST["contact"];

 $dob = $_POST["dob"];

 $city = $_POST["city"];
 $state = $_POST["state"];
 $country = $_POST["country"];
  $gender = $_POST["gender"];
   $acd = $_POST["acd"];
   


 
 $sql = "INSERT INTO instructor (NAME,CITY,STATE,COUNTRY,CONTACT_NO,GENDER,BIRTH_DATE,ACADEMIC_DETAIL)values ('$name','$city','$state','$country','$contact','$gender','$dob','$acd')";
 
 
 if ($db->query($sql) == TRUE) 
 {
	 header('location:adminhome.php');
 }
 else{
	 $errmsg="instructor Already Exist";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!--div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Add Instructor Detail</h2>
                        <form method="POST" class="register-form" id="register-form" action="addinstructor.php">
						<h5 style="color:red"><?php if (isset($errmsg))echo $errmsg;?></h5>
							<div class="form-group">
                                <label for="id"><i class="zmdi zmdi-account"></i></label>
                                <input type="text" name="id" id="id" placeholder="Instructor Name" required />
                            </div>
							
							
                            <div class="form-group">
                            Male<input type="radio" name="gender" value="male" checked />
							Female<input type="radio" name="gender" value="female"/>
                            </div>
                            
							<div class="form-group">
                                <label for="city"><i class="zmdi zmdi-city"></i></label>
                                <input type="text" name="city" id="city" placeholder="city"  required />
                            </div>
							<div class="form-group">
                                <label for="state"><i class="zmdi zmdi-city-alt"></i></label>
                                <input type="text" name="state" id="state" placeholder="state"  required />
                            </div>
							<div class="form-group">
                                <label for="country"><i class="zmdi zmdi-city"></i></label>
                                <input type="text" name="country" id="country" placeholder="country"  required />
                            </div>
							<div class="form-group">
                                <label for="dob"><i class="zmdi zmdi-calendar"></i></label>
                                <input type="date" name="dob" id="dob" placeholder="Date Of Birth"  required />
                            </div>
							<div class="form-group">
                                <label for="contact"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" name="contact" id="contact" placeholder="Contact No."  required />
                            </div>
							<div class="form-group">
                                <label for="acd"><i class="zmdi zmdi-phone"></i></label>
                                <select name="acd">
									<option value="Student">B.SC</option>
									<option value="Employee">M.SC</option>
									<option value="Bussines-Person">B.COM</option>
										<option value="Bussines-Person">M.COM</option>
											<option value="Bussines-Person">BCA</option>
												<option value="Bussines-Person">MCA</option>
								</select>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term"  required  />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="ADD"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                       
                    </div>
                </div>
            </div>
        </section>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>