<?php
	session_start();
	include "config.php";
       
    if(isset($_POST['submit'])){
        $email=$_POST['l_email'];
		$password=md5($_POST['l_password']);
		$result = mysqli_query($con,"select * from signup_table where u_email='{$email}' and u_password='{$password}'") 
		or die(mysqli_error($con));
		$num_rows = mysqli_num_rows($result);
		$data = mysqli_fetch_array($result);
		if($num_rows>0){
			echo "<script>alert('Login Successfully')</script>";	
			$_SESSION['id'] = $data['u_id'];
			$_SESSION['email'] = $data['u_email'];
          	header("location:main_page.php");	
		}else{
			echo "<script>alert('Login Failed')</script>";		
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
	include "heading.html";
	?>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login_images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_vendor/animsition/css/animsition.min.css">
<!--====================================== =========================================================-->
	<link rel="stylesheet" type="text/css" href="login_vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_css/util.css">
	<link rel="stylesheet" type="text/css" href="login_css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="" method="POST">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="email" name="l_email" placeholder="E-Mail Address" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="l_password" placeholder="password" required>
					<span class="focus-input100"></span>
				</div>
				
				<div class="text-left">
					<a href="forgotpasswd1.php" class="txt2 hov1">
						Forgot Password
					</a><br/><br/>
				</div>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="submit">
						Sign In
					</button>
				</div>
				<!--
				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or login with
					</span>
				</div>

				<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div>
			--> <br/><br/>
				<div class="text-left">
					<a href="signup1.php" class="txt2 hov1">
						Create account
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>