<?php 

include('conn.php');
if(isset($_POST['submit']))
{
	$password=$_POST['pass'];
	$c_password=$_POST['confirm_pass'];
	if($password==$c_password)
	{
	$query=mysqli_query($conn,"UPDATE `admin` SET `password`='$password',`conn_pass`='$c_password'");
	
	if($query)
	{
		echo '<script type="text/javascript">;
			alert("Password Change Successfully");
			window.location="../index.php";
			</script>';
	}
	}
	else
	{
		echo '<script type="text/javascript">;
			alert("Password not Matched");
			window.location="forgot_password.php";
			</script>';
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V16</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico">

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="limiter">
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
<div class="wrap-login100 p-t-30 p-b-50">
<span class="login100-form-title p-b-41">
Account Login
</span>
<form class="login100-form validate-form p-b-10" method="post">
<div class="wrap-input100 validate-input" data-validate="Enter password">
<input class="input100" type="password" name="pass" placeholder="Password">
<span class="focus-input100" data-placeholder="&#xe80f;"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Enter password">
<input class="input100" type="password" name="confirm_pass" placeholder="Confirm Password">
<span class="focus-input100" data-placeholder="&#xe80f;"></span>
</div>
<div class="container-login100-form-btn m-t-10">
<button class="login100-form-btn" type="submit" name="submit">
UPDATE
</button>
</div>
</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="js/main.js"></script>

<script async="" src="../../../gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer="" src="../../../beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6d68f54b0b8b1bc2","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
