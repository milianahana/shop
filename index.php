 <?php

include ('menu_header.php');

include('indoor_database.php');

//$select_displayed_items="SELECT  `displayed_item_image`, `displayed_item_overlay_image`, `displayed_item_name`, `displayed_item_category`, `displayed_item_rate` FROM `displayed_items` WHERE displayed_item_sort=1 LIMIT 0,8";
$select_sorted="SELECT COUNT(*) cont, displayed_item_sort FROM `displayed_items` WHERE displayed_item_sort IN(1,2,3) GROUP BY displayed_item_sort";
$select_sorted_statement=mysqli_query($con,$select_sorted);
while($fetch_sort=mysqli_fetch_array($select_sorted_statement))
{
//	echo $count=$fetch_sort['cont'];
	switch($fetch_sort['displayed_item_sort']){
			
		case 1:
			$count1=$fetch_sort['cont'];
			break;
		case 2:
			$count2=$fetch_sort['cont'];
			break;
		case 3:
			$count3=$fetch_sort['cont'];
			break;
	}
}
$select_displayed_items="SELECT  `displayed_item_image`, `displayed_item_overlay_image`, `displayed_item_name`, `displayed_item_category`, `displayed_item_rate`, displayed_item_sort FROM `displayed_items` WHERE displayed_item_sort IN(1,2,3)";
$select_displayed_item_statement=mysqli_query($con,$select_displayed_items);
if(!$select_displayed_item_statement)
	{
		echo "error in connecting";
	} 
else{
?>
<!--	---------------------------------------------------------------------------------banner-->
	<div class="container-fluid">
		<div class="col-6 h_banner">
			<div class="col-6 h-image">
				<img src="image/home-banner2.jpg" alt="" class="img-fluid">
			</div>
		</div>
		<div class="col-6 h_content">
			<p class="para5-p">indoor plats</p>
			<h1>A large selection of pots, mugs and decors.</h1>
			<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring possession of my entire soul which I enjoy with my whole heart.</p>
			<a href="#" class="view v1">view more</a>
			<a href="shop.php" class="shop s1">shop now</a>
		</div>
		<div class="cl"></div>
	</div>
<!--	---------------------------------------------------------------------------------logos--->	
	<div class="container-fluid logo_banner">
			<div class="col-3 jerk"><img src="image/logo_jerk.png" class="img-fluid"></div>
			<div class="col-3 jerk"><img src="image/logo_rosemond.png" class="img-fluid"></div>
			<div class="col-3 jerk"><img src="image/logo_oliveo.png" class="img-fluid"></div>
			<div class="col-3 jerk"><img src="image/logo_sunflora.png" class="img-fluid"></div>
		<div class="cl"></div>
	</div>
<!--	---------------------------------------------------------------------------------banner2-topslide-->
	<div class="container-fluid slide">
		<div class="col-12 slidetop">
			<div class="col-4 slidetop-banner img1"></div>
				<div class="col-4  slidetop-banner para1">
					<div class="overlay3">
						<div class="text3">
							<p class="para1-p">Indoor</p>
							<h1>New Decoration Solutions for Home</h1>
							<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, andexpound the actual teachings of the great consequences.</p>
							<a href="#" class="view">view more</a>
							<a href="shop.php" class="shop">shop more</a>
						</div>
					</div>
				</div>
			<div class="col-4 slidetop-banner img2"></div>
		</div>
		<div class="cl"></div>
	</div>
<!--	---------------------------------------------------------------------------------product-->
	<div class="container-fluid">
		<div class="container product_banner">
			<p class="para2-p">Indoor Accessories</p>
			<h1>featured products</h1>
			<p>Will your clients accept that you go about things order.</p>
			<div class="nav">
				<button type="button" onClick="homeProduct('best_seller')">best seller <?php echo $count1; ?></button>
				<button type="button" onClick="homeProduct('featured')">featured <?php echo $count2; ?></button>
				<button type="button" onClick="homeProduct('sales')">sales <?php echo $count3; ?></button>
			</div>
			<div class="cl"></div>
			<div id="best_seller" class="col-12 products" style="display: block;">
				<div class="row">
					<?php
					while($items_data=mysqli_fetch_array($select_displayed_item_statement))
					{
						switch($items_data["displayed_item_sort"]){
							case 1:
								$as[] = $items_data;
							break;
							case 2:
								$seller[] = $items_data;
							break;
							case 3:
								$sales[] = $items_data;
							break;
						}
//						$as[] = $items_data;
						/*$add_item_image=$items_data['displayed_item_image'];
						$add_item_overlay_image=$items_data['displayed_item_overlay_image'];
						$add_item_name=$items_data['displayed_item_name'];
						$add_item_category=$items_data['displayed_item_category'];
						$add_item_price=$items_data['displayed_item_rate'];*/
					}
				/*	var_dump($as);
					echo "Seller Items";
					var_dump($seller);
					echo "Sales Items";
					var_dump($sales);*/
					foreach($as as $x){
					?>
					<div class="column">
      					<div class="col3 five pot">
							<div class="con2">
								<div class="con">
									<div class="product1">
										<img src="image/item_images/<?php echo $x['displayed_item_image'];?>" alt="" class="img-fluid">
										<div class="overlayimage"><img src="image/item_images/<?php echo $x['displayed_item_overlay_image'];?>" alt="" class="img-fluid"></div>
									</div>
									<div class="overlay">
										<div class="textshop"><a href="#">add to cart</a></div>
									</div>
									<div class="overlay2">
										<div class="text2"><input type="button" name="like" class="like" id="like"><img src="image/heart.png" width="25" class="heart"><br><img src="image/shopping-cart-add.png" width="25" class="cart"><br> </div>
									</div>
								</div>
							</div>
							<h4><?php echo $x['displayed_item_name']; ?></h4>
							<h5><?php echo $x['displayed_item_category']; ?></h5>
							<h4><?php echo $x['displayed_item_rate']; ?></h4>
						</div>
  					</div>
					<?php }
					}?>
				</div>
			</div>
			<div id="featured" class="col-12 products" style="display: none;">
				<div class="row">
					<?php
					
//					$select_displayed_items2="SELECT  `displayed_item_image`, `displayed_item_overlay_image`, `displayed_item_name`, `displayed_item_category`, `displayed_item_rate` FROM `displayed_items` WHERE displayed_item_sort=2 LIMIT 0,8 ";
//					$select_displayed_item_statement2=mysqli_query($con,$select_displayed_items2);
//					
//					while($items_data2=mysqli_fetch_array($select_displayed_item_statement2))
//					{
//						$add_item_image=$items_data2['displayed_item_image'];
//						$add_item_overlay_image=$items_data2['displayed_item_overlay_image'];
//						$add_item_name=$items_data2['displayed_item_name'];
//						$add_item_category=$items_data2['displayed_item_category'];
//						$add_item_price=$items_data2['displayed_item_rate'];
					foreach($seller as $x){
						$add_item_image=$x['displayed_item_image'];
						$add_item_overlay_image=$x['displayed_item_overlay_image'];
						$add_item_name=$x['displayed_item_name'];
						$add_item_category=$x['displayed_item_category'];
						$add_item_price=$x['displayed_item_rate'];
					?>
					<div class="column">
      					<div class="col3 five pot">
							<div class="con2">
								<div class="con">
									<div class="product1">
										<img src="image/item_images/<?php echo $add_item_image;?>" alt="" class="img-fluid">
										<div class="overlayimage"><img src="image/item_images/<?php echo $add_item_overlay_image;?>" alt="" class="img-fluid"></div>
									</div>
									<div class="overlay">
										<div class="textshop"><a href="#">add to cart</a></div>
									</div>
									<div class="overlay2">
										<div class="text2"><input type="button" name="like" class="like" id="like"><img src="image/heart.png" width="25" class="heart"><br><img src="image/shopping-cart-add.png" width="25" class="cart"><br> </div>
									</div>
								</div>
							</div>
							<h4><?php echo $add_item_name; ?></h4>
							<h5><?php echo $add_item_category; ?></h5>
							<h4><?php echo $add_item_price; ?></h4>
						</div>
  					</div>
					<?php } ?>
				</div>
			</div>
			<div id="sales" class="col-12 products" style="display: none;">
				<div class="row">
					<?php
					
					/*$select_displayed_items3="SELECT  `displayed_item_image`, `displayed_item_overlay_image`, `displayed_item_name`, `displayed_item_category`, `displayed_item_rate` FROM `displayed_items` WHERE displayed_item_sort=3 LIMIT 0,8 ";
					$select_displayed_item_statement3=mysqli_query($con,$select_displayed_items3);
					
					while($items_data3=mysqli_fetch_array($select_displayed_item_statement3))
					{
						$add_item_image=$items_data3['displayed_item_image'];
						$add_item_overlay_image=$items_data3['displayed_item_overlay_image'];
						$add_item_name=$items_data3['displayed_item_name'];
						$add_item_category=$items_data3['displayed_item_category'];
						$add_item_price=$items_data3['displayed_item_rate'];*/
					
						foreach($sales as $x){
						$add_item_image=$x['displayed_item_image'];
						$add_item_overlay_image=$x['displayed_item_overlay_image'];
						$add_item_name=$x['displayed_item_name'];
						$add_item_category=$x['displayed_item_category'];
						$add_item_price=$x['displayed_item_rate'];
					?>
					<div class="column">
      					<div class="col3 five pot">
							<div class="con2">
								<div class="con">
									<div class="product1">
										<img src="image/item_images/<?php echo $add_item_image;?>" alt="" class="img-fluid">
										<div class="overlayimage"><img src="image/item_images/<?php echo $add_item_overlay_image;?>" alt="" class="img-fluid"></div>
									</div>
									<div class="overlay">
										<div class="textshop"><a href="#">add to cart</a></div>
									</div>
									<div class="overlay2">
										<div class="text2"><input type="button" name="like" class="like" id="like"><img src="image/heart.png" width="25" class="heart"><br><img src="image/shopping-cart-add.png" width="25" class="cart"><br> </div>
									</div>
								</div>
							</div>
							
							<h4><?php echo $add_item_name; ?></h4>
							<h5><?php echo $add_item_category; ?></h5>
							<h4><?php echo $add_item_price; ?></h4>
						</div>
  					</div>
					<?php } ?>
				</div>
			</div>
			<a href="shop.php" class="row-shop">shop now</a>
		</div>
		<div class="cl"></div>
	</div>
<!--	---------------------------------------------------------------------------------banner3-table-->
	<div class="container-fluid">
		<div class="parallelslide">
			<div class="col-4 parallelslide-content">
				<p class="para3-p">See Our Collections</p>
				<h1>New Decoration Solutions for Home.</h1>
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, andexpound the actual teachings of the great consequences.</p>
				<a href="#" class="view">view more</a>
				<a href="shop.php" class="shop">shop now</a>
			</div>
			<div class="col-8 parallelslide-image">
				<img src="image/hommebanner4-woodtable.png" class="img-fluid">
			</div>
		</div>
		<div class="cl"></div>
	</div>
<!--	---------------------------------------------------------------------------------banner3-zoom-->
	<div class="container-fluid zoombanner">
		<div class="col-12">
			<div class="col-6 zoom-mirror">
				<div class="col-9 zoom-image1">
					<img src="image/womenvase.png" >
				</div>
				<div class="col-3 zoom-content1">
					<h2>product</h2>
					<h1>sculpturesque stoneware</h1>
					<a href="#" class="view2">view more</a>
				</div>
			</div>
			<div class="col-6 zoom-mirror">
				<div class="col-9 zoom-image1">
					<img src="image/mirror.png" >
				</div>
				<div class="col-3 zoom-content1">
					<h2>product</h2>
					<h1>Decoration columns</h1>
					<a href="#" class="view2">view more</a>
				</div>
			</div>
		</div>
		<div class="cl"></div>
	</div>
<!--	---------------------------------------------------------------------------------footer1-->
<?php 
			
include ('footer.php');
			
?>	
<script>
	function addToWishlist(productId){
		$.ajax({
			type:"POST",
			url:"like_action.php",
			data:{
				productId:productId
			},
			success:function(response){
				if(response.success){
					updateWishlistCount(response.wishlistCount);
					displayMessage("Product added to wishlist!", "success");
				}
			},
				error:function(xhr, status, error){
					displayMessage("Error adding product to wishlist.", "error");
				}
		});
	}
	
	/*function turnToBestseller(){
		document.getElementById("best_seller").style.display="block";
		document.getElementById("featured").style.display="none";
		document.getElementById("sales").style.display="none";
	}
	function turnToFeatured(){
		document.getElementById("best_seller").style.display="none";
		document.getElementById("featured").style.display="block";
		document.getElementById("sales").style.display="none";
	}
	function turnToSales(){
		document.getElementById("best_seller").style.display="none";
		document.getElementById("featured").style.display="none";
		document.getElementById("sales").style.display="block";
	}*/
	
	/*function homeProduct(division){
		document.getElementById(division).style.display="block";
	}*/
	function homeProduct(division) {
    const allDivisions = ['best_seller', 'featured', 'sales'];

    allDivisions.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
            element.style.display = 'none';
        }
    });

    const selectedElement = document.getElementById(division);
    if (selectedElement) {
        selectedElement.style.display = 'block';
    }
}
</script>

</body>
</html>