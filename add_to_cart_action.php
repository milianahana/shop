<?php

session_start();

include('indoor_database.php');


if(isset($_POST['add'])){

    if(isset($_SESSION['pid'])){

        $product_id = $_SESSION['pid'];

        $select_product = "SELECT * FROM `displayed_items` WHERE displayed_item_id = ?";
        $stmt = mysqli_prepare($con, $select_product);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $product_id);
            
            mysqli_stmt_execute($stmt);
            
            $select_product_statement = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($select_product_statement) > 0) {
                while ($row = mysqli_fetch_assoc($select_product_statement)) {
                }
            } 
            else {
                echo "error";
            }
            
            mysqli_stmt_close($stmt);

        } 
        else {
            echo "Error preparing statement: " . mysqli_error($con);
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
<?php


//     if(isset($_SESSION['pid'])){

// 	    echo $product_id=$_SESSION['pid'];

// 	    $select_product="SELECT * FROM `displayed_items` WHERE displayed_item_id='$product_id'";
// 	    $select_product_statement=mysqli_query($con,$select_product);

// 	    if(!$select_product_statement)
// 	    {
// 		    echo "error";
// 	    }
//     }
?>