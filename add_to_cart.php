 <?php

include ('menu_header.php');

if(isset($_GET['product_id']))
{
	$product_id=$_GET['product_id'];

$select_displayed_items="SELECT `displayed_item_image`, `displayed_item_name`, `displayed_item_category`, `displayed_item_rate`, displayed_item_sort FROM 
`displayed_items` WHERE `displayed_item_id`='$product_id'";
$select_displayed_item_statement=mysqli_query($con,$select_displayed_items);
if(!$select_displayed_item_statement)
	{
		echo "error in connecting";
	}
}

 
    

?>
<div class="container-fluid cart_top">
     <div class="col-12">
        <h1>My Cart</h1>
        <div class="col-8">
        <hr>
        <?php
			while($items_data=mysqli_fetch_array($select_displayed_item_statement))
            {
                $add_item_image=$items_data['displayed_item_image'];
                $add_item_name=$items_data['displayed_item_name'];
                $add_item_price=$items_data['displayed_item_rate'];

            }
        ?>
					
            <div class="col-6">
                <div class="col-6"><img src="image/item_images/<?php echo $add_item_image;?>" alt="" class="img-fluid"></div>
                <div class="col-6 cart_details">
                    <h4><?php echo $add_item_name; ?></h4>
                    <div class="col-12 cart_color" style="padding: 0;">
                        <div class="col-4"><p>color</p></div>
                        <div class="col-1 circle green"></div>
                    </div>
                    <div class="col-12 cart_color" style="padding: 0;">
                        <div class="col-4"><p>Size</p></div>
                        <div class="col-1">S</div>
                    </div>
                    <div class="col-12 cart_color" style="padding: 0;">
                        <div class="col-6"><p>In Stock</p></div>
                    </div>
                </div>
            </div>
            <div class="col-6 cart_to_details">
                <div class="col-4">
                    <h4>Each</h4><br>
                    <h3><?php echo $add_item_price; ?></h3>
                </div>
                <div class="col-4">
                    <h4>Quantity</h4><br>
                    <input type="number" class="count">
                </div>
                <div class="col-4">
                    <h4>Total</h4><br>
                    <h3>$745.25</h3>
                </div>
            </div>
            <div class="cl"></div>
            <div class="col-3"></div>
            <div class="col-9" style="text-align: start;">
                <a href="#">Remove</a>
                <a href="#">Move to Wishlist</a>
                <a href="#">Save for Later</a>
            </div>
            <div class="cl"></div>
        <hr>
        </div>
        <div class="col-4 summary">
            <h2>SUMMARY</h2>
            <div class="col-12 summary_out">
                <div><p>Item</p></div>
                <div><p>price</p></div>
            </div>
            <hr>
            <div class="col-12 summary_out">
                <div><p>Shipping</p></div>
                <div><p>price</p></div>
            </div>
            <div class="col-12 summary_out">
                <div><p>Tax</p></div>
                <div><p>price</p></div>
            </div>
            <div class="col-12 summary_out">
                <div><p>Discount</p></div>
                <div><p>price</p></div>
            </div>
            <hr>
            <div class="col-12 summary_out">
                <div><h3>Total</h3></div>
                <div><h3>price</h3></div>
            </div>
            <button>Checkout</button>
        </div>
    </div>
</div>
