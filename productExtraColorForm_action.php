<?php

session_start();

include('indoor_database.php');

if (isset($_POST['add'])) {
    $add_item_image = $_FILES['item']['name'];
    $add_item_id = $_POST['item_id'];
    $add_item_color = $_POST['item_color'];
    $add_item_colorcode = $_POST['item_colorid'];

    $select_product_color = $con->prepare("SELECT `proClr_id`, `proClr_colorname` FROM `xtraproductcolorform` WHERE `proClr_productId`=?");
    var_dump($select_product_color);
    $select_product_color->bind_param("s", $add_item_id);
    $select_product_color->execute();
    $result = $select_product_color->get_result();
    if (mysqli_num_rows($result) > 0) {
        echo "invalid";
    } else {
        $insert_product_color = "INSERT INTO `xtraproductcolorform`(`proClr_productId`, `proClr_colorname`, `proClr_colorCode`, `proClr_image`) VALUES ('$add_item_id',
        '$add_item_color','$add_item_colorcode','$add_item_image')";
        var_dump($insert_product_color);
        $insert_product_color_statement = mysqli_query($con, $insert_product_color);
        if (!$insert_product_color_statement) {
            echo "error in connecting";
        } else {
            // $c_array = mysqli_fetch_array($insert_product_color_statement);
            // $clr_id = $p_array['proClr_id'];
            // $_SESSION['cid'] = $clr_id;

            $clr_array = mysqli_fetch_assoc($result);
            $clr_id = $clr_array['proClr_id'];
            $_SESSION['cid'] = $clr_id;
            echo $_SESSION['cid'];

            $item_path = "image/item_images/";
            $item_image = $item_path . basename($add_item_image);
            $move = move_uploaded_file($_FILES['item']['tmp_name'], $item_image);
            header('location:admin_home.php');
        }
    }
}
