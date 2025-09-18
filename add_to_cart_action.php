<?php

session_start();

include('indoor_database.php');

if (isset($_SESSION['id'])) {

	echo $login_id = $_SESSION['id'];

	$select_user = "SELECT * FROM `login` WHERE login_id ='$login_id'";
	$select_user_statement = mysqli_query($con, $select_user);

	if (!$select_user_statement) {
		echo "error";
	} else {
		header('location:add_to_cart.php');
	}
}
