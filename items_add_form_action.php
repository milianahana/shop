<?php

session_start();

include('indoor_database.php');

if(isset($_POST['add']))
{
	$add_item_image=$_FILES['item']['name'];
	echo $add_item_overlay_image=$_FILES['overlay_item']['name'];
	$add_item_name=$_POST['item_name'];
	$add_item_category=$_POST['item_category'];
	$add_item_price=$_POST['item_price'];
	$add_item_quandity=$_POST['item_quandity'];
	$add_item_sort=$_POST['item_sort'];
	
	$select_displayed_item="SELECT `displayed_item_id` FROM `displayed_items` WHERE `displayed_item_name`='$add_item_name' and displayed_item_image='$add_item_image'";
	var_dump($select_displayed_item);
	$select_displayed_item_statement=mysqli_query($con,$select_displayed_item);
	if(!$select_displayed_item_statement)
	{
		echo "error in connecting";
	}
	else{
		if(mysqli_num_rows($select_displayed_item_statement)>0)
		{
			echo "already exist";
		}
		else{
			$insert_displayed_item="INSERT INTO `displayed_items`( `displayed_item_image`, `displayed_item_overlay_image`, `displayed_item_name`, `displayed_item_category`, `displayed_item_rate`, `displayed_item_quandity`, `displayed_item_sort`) VALUES ('$add_item_image','$add_item_overlay_image','$add_item_name','$add_item_category','$add_item_price','$add_item_quandity','$add_item_sort')";
			var_dump($insert_displayed_item);
			$insert_displayed_item_statement=mysqli_query($con,$insert_displayed_item);
			if(!$insert_displayed_item_statement)
			{
				echo "error in inserting";
			}
			else{
				$item_path="image/item_images/";
				$item_image=$item_path.basename($add_item_image);
				$item_overlay_image=$item_path.basename($add_item_overlay_image);
				$move=move_uploaded_file($_FILES['item']['tmp_name'],$item_image);
				$move2=move_uploaded_file($_FILES['overlay_item']['tmp_name'],$item_overlay_image);
				if($move)
				{
					header('location:admin_home.php');
				}		
				else{
					echo "something went wrong";
				}
			}
		}
	}
}

?>