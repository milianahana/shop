<?php
// include ('menu_header.php');
?>
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
				<a href="login.php">login</a>
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
		<div class="col-6 form-image">
			<img src="image/blog-banner1.jpg" alt="" class="img-fluid">
		</div>
		<div class="col-6 sform">
			<h1>create an account</h1>
			<form action="signin_action.php" class="signform" method="post" enctype="multipart/form-data" onSubmit="return validate()">
				<input type="file" name="image" class="user_image" id="userimage" style="padding: 0;margin-bottom:0;border-radius:0;margin-left: 350px;"><br>
				<input type="hidden" name="image_default" class="user_image" id="userimage_default" src="image/profiles_pictures/default_profile.png"><br>
				<label class="profile" for="user_image" style="margin-left:450px;">Profile</label><br><br>
      			<input placeholder="Username/Email" type="email" class="semail" id="em" name="email" onChange="removeValidation('em');">
      			<input placeholder="Password" type="password" class="password" id="pass" name="password" onChange="removeValidation('pass');">
      			<input placeholder="username" type="text" class="username" id="username" name="username" onChange="removeValidation('username');">
      			<input type="submit" name="submit" value="Sign In" class="signin">
				<p>Don't Have An Account <a href="#">SignIn</a></p>
      		</form>
		</div>
</div>
	<script>
	   function validate(){
		   var em=document.getElementById("em");
		   var pass=document.getElementById("pass");
		   var username=document.getElementById("username");
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
		   if(username.value=="")
		   {
			   em.style.border="2px solid red";
			   em.focus();
			   f=1;
		   }
		   if(f==0){
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