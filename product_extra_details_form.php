 <!doctype html>
<?php


include('indoor_database.php');

if(isset($_GET['product_id']))
{
    $product_id=$_GET['product_id'];
    $select_displayed_items2="SELECT `displayed_item_id`, `displayed_item_image` FROM `displayed_items` WHERE `displayed_item_id`='$product_id'";
    $select_displayed_items_statement2=mysqli_query($con,$select_displayed_items2);
    if(!$select_displayed_items_statement2)
        {
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
	<link rel="stylesheet" href="css/font_awesom_all.css">
	<link rel="stylesheet" href="css/fontawesome.css">
	<script src="js/fontawesome.js"></script>
	<script src="js/fontawesome_all.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
    <div class="container-fluid pageBack">
        <a href="admin_home.php">&#x2190; back</a>
    </div>
    <div class="container-fluid extraDetails">
        <div class="coi-12">
            <?php
                $table_products=mysqli_fetch_array($select_displayed_items_statement2);
							
				$p_id=$table_products['displayed_item_id'];
				$p_image=$table_products['displayed_item_image'];
				
            ?>

            <h2>product details</h2>
            <img src="image/item_images/<?php echo $p_image;?>" alt="">
			<div class="col-12 admin_top_contents">
                <form action="product_extra_details_form_action.php" class="extraDetails_form" method="post" enctype="multipart/form-data" onSubmit="return validate()">
					<input type="file" name="item" class="item_image" id="item_image" onSubmit="return validate()">
					<input placeholder="ProductId" type="text" class="name" name="item_id" id="item_id" value="<?php echo $product_id;?>" onSubmit="return validate()">
					<input placeholder="Color" type="text" class="name" name="item_color" id="item_color" onSubmit="return validate()">
					<input placeholder="ColorCode" type="text" class="category" name="item_colorid" id="item_colorid" onSubmit="return validate()">
					<input placeholder="Size" type="text" class="price" name="item_size" id="item_size" onSubmit="return validate()"><br>
					<input type="submit" name="add" value="Add" class="addDetails">
				</form>
            </div>
        </div>
    </div>
    </body>
</html>