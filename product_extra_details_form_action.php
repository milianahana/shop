<?php


include('indoor_database.php');

if (isset($_POST['add'])) {
    $details_image = $_FILES['item']['name'];
    $product_id = $_POST['item_id'];
    $details_color = $_POST['item_color'];
    $details_colorcode = $_POST['item_colorid'];
    $details_size = $_POST['item_size'];


    $insert_extra_details = "INSERT INTO `product_extra_details`(`extra_product_id`, `extra_color`, `extra_color_code`, `extra_color_image`, `extra_size`) 
    VALUES ('$product_id','$details_color','$details_colorcode','$details_image','$details_size')";
    var_dump($insert_extra_details);
    $insert_extra_details_statement = mysqli_query($con, $insert_extra_details);
    if (!$insert_extra_details_statement) {
        echo "error";
    } else {
        echo "cttd";
    }
}
