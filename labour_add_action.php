<?php

include('indoor_database.php');

if(isset($_POST['add']))
{
    $labour_image=$_FILES['l_image']['name'];
    $labour_code=$_POST['code'];
    $labour_name=$_POST['labour_name'];
    $labour_address=$_POST['address'];
    $labour_no=$_POST['labour_no'];

    $select_labour="SELECT `labour_id`, `labour_code` FROM `labour_details` WHERE `labour_code`='$labour_code'";
    $select_labour_statement=mysqli_query($con,$select_labour);
    var_dump($select_labour);
    if(!$select_labour_statement)
    {
        echo "error";
    }
    else{
        if(mysqli_num_rows($select_labour_statement)>0)
        {
            echo "already exist";
        }
        else{
            $insert_labour="INSERT INTO `labour_details`(`labour_code`, `labour_name`, `labour_address`, `labour_number`, `labour_image`) 
            VALUES('$labour_image','$labour_code','$labour_name','$labour_address','$labour_no')";
            $insert_labour_statement=mysqli_query($con,$insert_labour);
            var_dump($insert_labour);
        }

    }
}

?>