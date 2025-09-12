<?php

session_start();

include('indoor_database.php');


if(isset($_POST['add'])){

    if(isset($_SESSION['pid'])){

	    echo $product_id=$_SESSION['pid'];

	    $select_product="SELECT * FROM `displayed_items` WHERE displayed_item_id='$product_id'";
	    $select_product_statement=mysqli_query($con,$select_product);

	    if(!$select_product_statement)
	    {
		    echo "error";
	    }
    }
    if(isset($_SESSION['id'])){

	    echo $login_id=$_SESSION['id'];

	    $select_user="SELECT * FROM `login` WHERE login_id ='$login_id'";
	    $select_user_statement=mysqli_query($con,$select_user);

	    if(!$select_user_statement)
	    {
		    echo "error";
	    }
    }

}
?>