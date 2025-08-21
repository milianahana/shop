<?php
session_start();

include('indoor_database.php');

if(isset($_POST['submit']))
{
	$login_email=$_POST['email'];
	$login_password=$_POST['password'];
	
	$select_login=$con->prepare("SELECT `login_id`, `login_usertype` FROM `login` WHERE login_email=? and login_password=?");
//	var_dump($select_login);
	$select_login->bind_param("ss",$login_email,$login_password);
	$select_login->execute();
	$result= $select_login->get_result();
		if(mysqli_num_rows($result)<1){
			echo "invalid";
		}
		else{
				$l_array=mysqli_fetch_assoc($result);
				$user_type= $l_array['login_usertype'];
				$login_id=$l_array['login_id'];
				
				$_SESSION['id']=$login_id;
				
				if($user_type=="user")
				{
					header('location:index.php');
				}
				else if($user_type=="admin")
				{
					header('location:admin_home.php');
				}
			
			else{
				echo "error";
			}
		}
	}

?>