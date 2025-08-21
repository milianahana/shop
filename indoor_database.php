<?php

$server="localhost";
$user="root";
$password="";
$database="indoor_shop";
$con;

$con=new mysqli($server,$user,$password,$database);
if($con->connect_error)
{
	die("connection error");
}

?>