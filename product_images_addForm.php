 <!doctype html>
 <?php


    include('indoor_database.php');

    if (isset($_GET['product_id'])) {
        $product_id = $_GET['product_id'];
        $select_displayed_items2 = "SELECT * FROM `displayed_items` WHERE `displayed_item_id`='$product_id'";
        $select_displayed_items_statement2 = mysqli_query($con, $select_displayed_items2);
        if (!$select_displayed_items_statement2) {
            echo "error_selecting";
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
     <div class="container-fluid pageBack">
         <a href="admin_home.php">&#x2190; back</a>
     </div>
     <div class="container-fluid extraImages">
         <?php

            $table_products = mysqli_fetch_array($select_displayed_items_statement2);

            $p_id = $table_products['displayed_item_id'];
            $p_name = $table_products['displayed_item_name'];
            $p_image = $table_products['displayed_item_image'];
            $p_price = $table_products['displayed_item_rate'];
            $p_quandity = $table_products['displayed_item_quandity'];
            $p_category = $table_products['displayed_item_category'];

            ?>
         <div class="coi-12">
             <div class="col-3">
                 <h2>product details</h2>
                 <img src="image/item_images/<?php echo $p_image; ?>" alt="image" class="extraImage_head">
             </div>
             <div class="col-9">
                 <form action="product_extra_details_form_action.php" class="extraDetails_form" method="post" enctype="multipart/form-data" onSubmit="return validate()">
                     <h1><?php echo $p_name; ?></h1>
                     <p><?php echo $p_price; ?></p>
                     <p><?php echo $p_category; ?></p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley <br>of type and scrambled it to make a type specimen book</p>
                 </form>
             </div>
             <div class="col-12 image_add_contents">
                 <table class="image_add_table">
                     <tr>
                         <td style="width:10%;"><img src="image/Terracotta-green-use.png" alt="" width="100%"></td>
                         <td style="padding:2%;">jsdhfuj</td>
                     </tr>
                 </table>
             </div>
         </div>
     </div>
 </body>

 </html>