<?php
include ('menu_header.php');
?>
	<div class="container-fluid signin-page">
		<div class="col-6 form-image">
		</div>
		<div class="col-6 form">
			<h1>create an account</h1>
			<form action="signin_action.php" class="formtags" method="post" enctype="multipart/form-data" onSubmit="return validate()">
				<input type="file" name="image" class="user_image" id="userimage" ><br>
				<input type="hidden" name="image_default" class="user_image" id="userimage_default" src="image/profiles_pictures/default_profile.png"><br>
				<label class="profile" for="user_image">Profile</label><br><br>
      			<input placeholder="Username/Email" type="email" class="email" id="em" name="email" onChange="removeValidation('em');">
      			<input placeholder="Password" type="password" class="password" id="pass" name="password" onChange="removeValidation('pass');">
      			<input placeholder="username" type="text" class="username" id="username" name="username" onChange="removeValidation('username');">
      			<input type="submit" name="submit" value="Sign In" class="signin">
				<p>Don't Have An Account <a href="#">SignIn</a></p>
      		</form>
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