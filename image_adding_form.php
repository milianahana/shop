<!doctype html>
<?php

session_start();

include('indoor_database.php');

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $select_displayed_items2 = "SELECT * FROM `displayed_items` WHERE `displayed_item_id`='$product_id'";
    $select_displayed_items_statement2 = mysqli_query($con, $select_displayed_items2);
    if (!$select_displayed_items_statement2) {
        echo "error_selecting";
    }
    $select_login_table = "SELECT`login_profile` FROM `login`";
    $select_login_table_statement = mysqli_query($con, $select_login_table);
    if (!$select_login_table_statement) {
        echo "CONNECTION ERROR";
    }
}
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" href="css/grid_style.css">
    <link rel="stylesheet" href="css/index_style.css">
</head>

<body>
    <div class="container-fluid admin-top-line">
        <?php

        $persnol_data = mysqli_fetch_array($select_login_table_statement);

        $admin_profile = $persnol_data['login_profile'];

        ?>
        <div class="container admin-menu">
            <div class="col-6 admin-profile">
                <img src="image/profiles_pictures/<?php echo $admin_profile; ?>" alt="" width="12%">
            </div>
            <div class="col-6 admin-signout">
                <form action="signout_action.php" method="post" class="signout_action" onSubmit=" return validate()">
                    <input type="submit" name="out" value="Signout" class="signout">
                </form>
            </div>
        </div>
        <div class="cl"></div>
    </div>
    <div class="container-fluid add_ximg_top">
        <div class="contain">

            <?php
            $table_products = mysqli_fetch_array($select_displayed_items_statement2);

            $p_id = $table_products['displayed_item_id'];
            $p_image = $table_products['displayed_item_image'];
            $p_image2 = $table_products['displayed_item_overlay_image'];


            ?>
            <div class="add_x_img">
                <h1>add new items</h1>
                <form action="image_adding_form_action.php?product_id=<?php echo $product_id; ?>" class="ximg_add" method="post" enctype="multipart/form-data" onSubmit="return validate()">
                    <input type="file" name="ximg" class="x_image" id="x_image" onSubmit="return validate()">
                    <div class="col-12">
                        <div class="col-3"><img src="image/item_images/<?php echo $p_image; ?>" alt="image" class="img-fluid"></div>
                        <div class="col-3"><img src="image/item_images/<?php echo $p_image2; ?>" alt="image" class="img-fluid"></div>
                    </div>
                    <input type="submit" name="add" value="Add" class="addimg">
                </form>
            </div>
            <div class="cl"></div>
        </div>
    </div>
</body>

</html>