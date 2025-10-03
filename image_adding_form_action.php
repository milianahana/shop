<?php

session_start();

include('indoor_database.php');

if (isset($_POST['add'])) {
    $add_item_image = $_FILES['ximg']['name'];


    if (isset($_GET['product_id'])) {
        $product_id = $_GET['product_id'];
        $clr_id = $_SESSION['cid'];

        $select_product_color = $con->prepare("SELECT `proImg_id` FROM `xtraproductimage` WHERE `proImg_productId`=?" );
        var_dump($select_product_color);
        $select_product_color->bind_param("s", $product_id);
        $select_product_color->execute();
        $result = $select_product_color->get_result();
        if (mysqli_num_rows($result) > 0) {
            echo "invalid";
        } else {
            $insert_product_image = "INSERT INTO `xtraproductimage`(`proImg_productId`, `proImg_colorid`, `proImg_img`) VALUES ('$product_id','$clr_id','$add_item_image')";
            var_dump($insert_product_image);
            $insert_product_image_statement = mysqli_query($con, $insert_product_image);
            if (!$insert_product_image_statement) {
                echo "error in connecting";
            } else {
                $item_path = "image/item_images/";
                $item_image = $item_path . basename($add_item_image);
                $move = move_uploaded_file($_FILES['ximg']['tmp_name'], $item_image);
            }
        }
    }
}
