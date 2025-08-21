<?php

include('indoor_database.php');

if(isset($_POST['submit']))
{
	$signin_user_profile=$_FILES['image']['name'];
	echo $signin_user_profile_default=$_POST['image_default'];
	echo $signin_email=$_POST['email'];
	$signin_password=$_POST['password'];
	$signin_username=$_POST['username'];
	$signin_usertype="user";
	
	
	/*$select_login="SELECT `login_id` FROM `login` WHERE login_email='$signin_email' and login_password='$signin_password'";
	var_dump($select_login);
	$select_login_statement=mysqli_query($con,$select_login);
	
	if(!$select_login_statement)
	{
		echo "cant select login";
	}
	else{
		if(mysqli_num_rows($select_login_statement)>0)
		{
			echo "already exist";
		}
		
		else{
			$login_insert="INSERT INTO `login`(`login_username`, `login_email`, `login_password`, `login_usertype`, `login_profile`) VALUES ('$signin_username','$signin_email','$signin_password','$signin_usertype','$signin_user_profile')";
			var_dump($login_insert);
			$login_insert_statement=mysqli_query($con,$login_insert);
			if(!$login_insert_statement)
			{
				echo "not inserted to login";
			}
			else{
				$login_id=mysqli_insert_id($con);
				$signin_insert="INSERT INTO `signin`(`signin_login_id`, `signin_email`, `signin_password`, `signin_username`, `signin_profile`) VALUES ('$login_id','$signin_email','$signin_password','$signin_username','$signin_user_profile')";
				$signin_insert_statement=mysqli_query($con,$signin_insert);
				if(!$signin_insert_statement)
				{
					echo "cant insert into signin";
				}				
				if($signin_user_profile==""){
					$signin_user_profile=$signin_user_profile_default;
				}
				$signin_update="INSERT INTO `signin`(`signin_profile`) VALUES ('$signin_user_profile_default')";
				$signin_update_statement=mysqli_query($con,$signin_update);
				
				$path="image/profiles_pictures/";
				$image=$path.basename($signin_user_profile);
						
				if(move_uploaded_file($_FILES['image']['tmp_name'],$image))
				{
					header('location:index.php');
				}
				else{
					echo "Something went wrong";
				}
			}
		}
	}*/
}

?>
<br>
