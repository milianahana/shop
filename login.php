<?php

/*session_start();

include('indoor_database.php');

if(isset($_SESSION['id']))
{
	$login_id=$_SESSION['id'];

	$signin_select="SELECT `signin_profile`  FROM `signin` WHERE signin_login_id='$login_id'";
	$signin_select_statement=mysqli_query($con,$signin_select);
	var_dump($signin_select);

	if(!$signin_select_statement)
	{
		echo "error";
	}
	else{
		$login_array=array();
	}
}*/
?>
<!doctype html>
<html><head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0";>
<title>Untitled Document</title>
	<link rel="stylesheet" href="css/grid_style.css">
	<link rel="stylesheet" href="css/index_style.css">
	<script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
</head>

<body>
<!---------------------------------------------------------------------------	menu_bar-->
	<div class="condainer-fluid menu_bar">
		<div class="menu">
			<?php
					/*$login_data=mysqli_fetch_array($signin_select_statement);
						
					$signin_user_profile=$login_data['signin_profile'];*/
				?>
			<div class="col-3 logo">
				<h1>indoor</h1>
			</div>
			<div class="col-5 menu1">
				<a href="index.php">home</a>
				<a href="shop.php">shop</a>
				<a href="blog.php">blog</a>
				<a href="about_us.php">about us</a>
			</div>
			<div class="col-4 menu2">
				<form action="signout_action.php" method="post" class="signout_action" onSubmit=" return validate()">
					<input type="submit" name="out" value="LOG IN" class="signout">
				</form>
				<a href="wishlist.php"><img src="image/heart.png" width="25px"></a>
				<a href="#"><img src="image/shopping-cart-add.png" width="25px"></a>
				<a href="#"><span class="blue-btn">Rs. 0.00</span></a>
				<img src="image/profiles_pictures/default_profile.png" alt="" class="profile-image-login" width="10%">
			</div>
		</div>
		<div class="cl">
		</div><hr>
	</div>
	<div class="container-fluid signin-page">
		<div class="col-12 login_common_frame">
		<div class="col-4 form">
			<h1>Get started</h1>
			<p>Enter your credentials to login your account</p>
			<form action="login_action.php" class="formtags" method="post" onSubmit="return validate()">
				<label style="margin-left:45px;color:#777;">Email</label><br>
      			<input placeholder="Username/Email" type="text" class="email" id="em" name="email" onChange="removeValidation('em');"><br>
				<label style="margin-left:45px;color:#777;">Password</label><br>
      			<input placeholder="Password" type="password" class="password" id="pass" name="password" onChange="removeValidation('pass');"><br>
				<a href="#" class="forgot_pass">forgot password?</a>
      			<input type="submit" name="submit" value="Sign In" class="signin" style="background-color: #F2CC07;">
				<div class="signin_app">
					<a class="google"><img src="image/google.png" width="13%;">Sign in with Google</a>
					<a class="google"><img src="image/facebook(2).png" width="13%;">Sign in with Facebook</a>
				</div>
      		</form>
			<p class="sign_para">Don't have an account yet? <a href="signin.php">SignIn</a></p>
		</div>
		<div class="col-8 form-image"><img src="image/about-banner.jpg" alt="" class="img-fluid"></div>
			</div>
	</div>
	<script>
	   function validate(){
		   var em=document.getElementById("em");
		   var pass=document.getElementById("pass");
		   var f=0;


		   if(em.value=="")
		   {
			   em.style.border="2px solid red";
			   em.focus();
			   f=1;
		   }
		   if(pass.value=="")
		   {
			   pass.style.border="2px solid red";
			   pass.focus();
			   f=1;
		   }
		   if(f==0)
			   {
				   return true;
			   }
		   else{
			   return false;
		   }
	   }
			function removeValidation(id){
				var em=document.getElementById(id);

				em.style.border="";

			}
	</script>
</body>
</html>