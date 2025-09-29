<?php

session_start();

include('indoor_database.php');

if (isset($_POST['add'])) {
    $add_item_image = $_FILES['ximg']['name'];
    echo $product_id = $_SESSION['pid'];
    $clr_id = $_SESSION['cid'];

    // $select_product_image = $con->prepare("SELECT `proImg_id` FROM `xtraproductimage` WHERE proImg_productId=? and proImg_colorid=?");
    // var_dump($select_product_image);
    // $select_product_image->bind_param("ss", $product_id, $clr_id);
    // $select_product_image->execute();
    // $result = $select_product_image->get_result();
    // if (mysqli_num_rows($result) > 0) {
    //     echo "invalid";
    // } else {
    //     echo "error".$clr_id.$product_id;
    // }

    $select_product_image = "SELECT `proImg_id`FROM `xtraproductimage` WHERE proImg_productId='$product_id' and proImg_colorid='$clr_id'";
    var_dump($select_product_image);
    $select_product_image_statement = mysqli_query($con, $select_product_image);
    if (!$select_product_image_statement) {
        echo "error";
    } else {
        echo "cnnt" . $product_id . $clr_id;
    }
}
