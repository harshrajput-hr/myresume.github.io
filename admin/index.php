<html>
	<head>
		<title> login form
		</title>
<?php
session_start();
include('conn.php');
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$query=mysqli_query($conn,"SELECT * FROM `admin` WHERE email='$email' and password='$password'")or die(mysqli_error($conn));
$num=mysqli_num_rows($query);
 if($num>0)
	 {
		 $fetch=mysqli_fetch_array($query);
		 $id=$fetch['id'];
		 $_SESSION['id']=$id;
		
		echo '<script type="text/javascript">;
			alert("Login Successfully");
			window.location="dashboard.php";
		</script>';
	 }
	 else
	 {
		 echo '<script type="text/javascript">;
			alert("Something went wrong");
			window.location="index.php";
		</script>';
	 }
}

?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

body {
  margin: 0;
  width: 100vw;
  height: 100vh;
  background: #ecf0f3;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  place-items: center;
  overflow: hidden;
  font-family: poppins;
}

.container {
  position: relative;
  width: 450px;
  height: 570px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}


.brand-title {
  margin-top: 10px;
  font-weight: 900;
  font-size: 1.8rem;
  color: #1DA1F2;
  letter-spacing: 1px;
}

.inputs {
  text-align: left;
  margin-top: 30px;
}

label, input, button {
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
}

label {
  margin-bottom: 4px;
}

label:nth-of-type(2) {
  margin-top: 12px;
}

input::placeholder {
  color: gray;
}

input {
  background: #ecf0f3;
  padding: 10px;
  padding-left: 20px;
  height: 50px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}

button {
  margin-top: 20px;
  background: #1DA1F2;
  height: 40px;
  border-radius: 20px;
  cursor: pointer;
  font-weight: 900;
  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
  transition: 0.5s;
}

button:hover {
  box-shadow: none;
}


a1 {
	margin-left:-180;
	margin-top:30px;
	box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
  transition: 0.5s;
  position: absolute;
  font-size: 15px;
width:162px;
  text-decoration: none;
  color: black;
  background:#1DA1F2;;
  border-radius: 20px;
  padding-right: 105px;
  padding-left: 105px;
  padding-top: 8px;
  padding-bottom: 8px;
}

h1 {
  position: absolute;
  top: 0;
  left: 0;
}
</style>
</head>
<body>
<form method="post">
<div class="container">
  <div class="">
  <img src="im.png" width="150" height="100">
  </div>
  <div class="brand-title"><span style="color:#16A085">LOG</span><span style="color:#0B2950">IN</span></div>
  <div class="inputs">
    <label >EMAIL</label>
    <input type="email" name="email" placeholder="example@test.com" required>
    <label >PASSWORD</label>
    <input type="password" name="password" placeholder="Min 6 charaters long" required>
   <button type="submit" name="submit">LOGIN</button>
   <center><a href="forget_password/forgot_password.php"><p>Forgot password?</p></a></center>
   
  </div>
  
</div>
</form>
</body>
</html>