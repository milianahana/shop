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
     <div class="container-fluid">
         <?php
            $table_products = mysqli_fetch_array($select_displayed_items_statement2);

            $p_id = $table_products['displayed_item_id'];
            $p_image = $table_products['displayed_item_image'];
            $p_name = $table_products['displayed_item_name'];


            ?>
         <div class="col-9" style="margin-left: 15%;margin-top:5%;">
             <div class="col-6"><img src="image/item_images/<?php echo $p_image; ?>" alt="image" class="img-fluid"></div>
             <div class="col-6">
                 <h6 style="padding: 2% 0;">scandal by the carts</h6>
                 <h4 style="padding: 2% 0;">PRODUCT CODE:45N08N71KM</h4>
                 <h1 style="padding: 2% 0 5% 0; text-transform:capitalize;"><?php echo $p_name; ?></h1>
                 <hr>
                 <p style="padding: 5% 0;">descrption Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                     It has survived not only five centuries,
                     but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                 <hr>
                 <div class="col-6"><h4 style="padding: 5% 0;">more images</h4></div>
                 <div class="col-6"><h4 style="padding: 5% 0;"><a href="#">add</a></h4></div>
                 <div class="col-2"><img src="image/item_images/<?php echo $p_image; ?>" alt="image" class="img-fluid"></div>
                 <div class="col-2"><img src="image/item_images/<?php echo $p_image; ?>" alt="image" class="img-fluid"></div>
                 <div class="col-2"><img src="image/item_images/<?php echo $p_image; ?>" alt="image" class="img-fluid"></div>
             </div>
         </div>
         <div class="col-9" style="margin-left: 15%;">
             <h3>multiple colors</h3>
         </div>
         <div class="cl"></div>
     </div>
     .
     <!-- <div class="container-fluid extraDetails">
         <div class="coi-12">
             <?php
                // $table_products = mysqli_fetch_array($select_displayed_items_statement2);

                // $p_id = $table_products['displayed_item_id'];
                // $p_image = $table_products['displayed_item_image'];

                ?>

             <h2>product details</h2>
             <img src="image/item_images/<?php // echo $p_image; 
                                            ?>" alt="">
             <div class="col-12 admin_top_contents">
                 <form action="product_extra_details_form_action.php" class="extraDetails_form" method="post" enctype="multipart/form-data" onSubmit="return validate()">
                     <input type="file" name="item" class="item_image" id="item_image" onSubmit="return validate()">
                     <input placeholder="ProductId" type="text" class="name" name="item_id" id="item_id" value="<?php echo $product_id; ?>" onSubmit="return validate()">
                     <input placeholder="Color" type="text" class="name" name="item_color" id="item_color" onSubmit="return validate()">
                     <input placeholder="ColorCode" type="text" class="category" name="item_colorid" id="item_colorid" onSubmit="return validate()">
                     <input placeholder="Size" type="text" class="price" name="item_size" id="item_size" onSubmit="return validate()"><br>
                     <input type="submit" name="add" value="Add" class="addDetails">
                 </form>
             </div>
         </div>
     </div> -->
 </body>

 </html>