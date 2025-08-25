 <?php
include ('menu_header.php');

include('indoor_database.php');

$select_displayed_items="SELECT `displayed_item_id`, `displayed_item_image`, `displayed_item_overlay_image`, `displayed_item_name`, `displayed_item_category`, `displayed_item_rate` FROM `displayed_items` LIMIT 0,4";
$select_displayed_items_statement=mysqli_query($con,$select_displayed_items);
if(!$select_displayed_items_statement)
{
	echo "error in select";
}
?>
<!---------------------------------------------------------------------------	shop_banner-->
	<div class="container-fluid shop-topbanner">
		<div class="container shop-top">
			<h1>shop</h1>
		</div>
		<div class="cl"></div>
	</div>
<!---------------------------------------------------------------------------	products-->
		<div class="container-fluid">
		<div class="container related-products">
			<div class="col-12 shop-filter">
				<div class="col-7 filter-h4"><h4>home/shop</h4></div>
				<div class="col-5 filter-icons header" id="myHeader">
					<div class="col-2 arrange" onclick="three()"><img src="image/filter (1).png" alt="" class="img-fluid"></div>
					<div class="col-2 arrange" onclick="four()"><img src="image/filter (2).png" alt="" class="img-fluid"></div>
					<div class="col-4 filter-menu">
						<div class="col-5 filter-para"><p>filter</p></div>
						<div class="col-3 filter-button"><img src="image/filter.png" alt="" class="img-fluid"></div>
					</div>
				</div>
			</div>
			<div id="pageOne" class="col-12 relatedproduct filterproduct" style="display: block;">
				<div class="row">
				<?php
				
				while($shopitems_data=mysqli_fetch_array($select_displayed_items_statement))
				{
					$add_item_image=$shopitems_data['displayed_item_image'];
					$add_item_overlay_image=$shopitems_data['displayed_item_overlay_image'];
					$add_item_name=$shopitems_data['displayed_item_name'];
					$add_item_category=$shopitems_data['displayed_item_category'];
					$add_item_price=$shopitems_data['displayed_item_rate'];
				
				
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
										<div class="text2"><img src="image/heart.png" width="25" class="heart"><br><img src="image/shopping-cart-add.png" width="25" class="cart"><br> </div>
									</div>
								</div>
							</div>
							<h4><?php echo $add_item_name;?></h4>
							<h5><?php echo $add_item_category;?></h5>
							<h4><?php echo $add_item_price;?></h4>
						</div>
  					</div>
					<?php } ?>
				</div>
			</div>
			<div id="pageTwo" class="col-12 relatedproduct filterproduct" style="display: none;">
				<div class="row">
				<?php
				
					$select_displayed_items2="SELECT `displayed_item_id`, `displayed_item_image`, `displayed_item_overlay_image`, 
					`displayed_item_name`, `displayed_item_category`, `displayed_item_rate` FROM `displayed_items` LIMIT 4,8";
					$select_displayed_items_statement2=mysqli_query($con,$select_displayed_items2);
					if(!$select_displayed_items_statement2)
					{
						echo "error in select";
					}
				while($shopitems_data2=mysqli_fetch_array($select_displayed_items_statement2))
				{
					$add_item_image=$shopitems_data2['displayed_item_image'];
					$add_item_overlay_image=$shopitems_data2['displayed_item_overlay_image'];
					$add_item_name=$shopitems_data2['displayed_item_name'];
					$add_item_category=$shopitems_data2['displayed_item_category'];
					$add_item_price=$shopitems_data2['displayed_item_rate'];
					$add_item_price=$shopitems_data2['displayed_item_rate'];
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
										<div class="text2"><img src="image/heart.png" width="25" class="heart"><br><img src="image/shopping-cart-add.png" width="25" class="cart"><br> </div>
									</div>
								</div>
							</div>
							<h4><?php echo $add_item_name;?></h4>
							<h5><?php echo $add_item_category;?></h5>
							<h4><?php echo $add_item_price;?></h4>
						</div>
  					</div>
					<?php } ?>
				</div>
			</div>
			<div id="pageThree" class="col-12 relatedproduct filterproduct" style="display: none;">
				<div class="row">
				<?php
				
					$select_displayed_items2="SELECT `displayed_item_id`, `displayed_item_image`, `displayed_item_overlay_image`, 
					`displayed_item_name`, `displayed_item_category`, `displayed_item_rate` FROM `displayed_items` LIMIT 12,16";
					$select_displayed_items_statement2=mysqli_query($con,$select_displayed_items2);
					if(!$select_displayed_items_statement2)
					{
						echo "error in select";
					}
				while($shopitems_data2=mysqli_fetch_array($select_displayed_items_statement2))
				{
					$add_item_image=$shopitems_data2['displayed_item_image'];
					$add_item_overlay_image=$shopitems_data2['displayed_item_overlay_image'];
					$add_item_name=$shopitems_data2['displayed_item_name'];
					$add_item_category=$shopitems_data2['displayed_item_category'];
					$add_item_price=$shopitems_data2['displayed_item_rate'];
					$add_item_price=$shopitems_data2['displayed_item_rate'];
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
										<div class="text2"><img src="image/heart.png" width="25" class="heart"><br><img src="image/shopping-cart-add.png" width="25" class="cart"><br> </div>
									</div>
								</div>
							</div>
							<h4><?php echo $add_item_name;?></h4>
							<h5><?php echo $add_item_category;?></h5>
							<h4><?php echo $add_item_price;?></h4>
						</div>
  					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="cl"></div>
	</div>
<!---------------------------------------------------------------------------  buttons-->	
	<div class="container-fluid">
		<div class="container shop-pages">
			<button type="button">&#x2190;</button>
			<button type="button" onClick="shopProduct('pageOne')">1</button>
			<button type="button" onClick="shopProduct('pageTwo')">2</button>
			<button type="button" onClick="shopProduct('pageThree')">3</button>
			<button type="button">&#x2192;</button>
			<hr class="shophr">
		</div>
		<div class="cl"></div>
	</div>
<!--	---------------------------------------------------------------------------------footer1-->
<!--
	<div class="container-fluid">
		<div class="container collections">
			<p class="para4-p">indoor collections</p>
			<h1>our collections</h1>
			<p>Built a tested code base or had them built, you decided on a content.</p>
			<div class="col-3 collection-imgs"><img src="image/gallery_vase.png" class="img-fluid"></div>
			<div class="col-3 collection-imgs"><img src="image/gallery_sofa.jpg" class="img-fluid"></div>
			<div class="col-3 collection-imgs"><img src="image/gallery_livingroom2.png" class="img-fluid"></div>
			<div class="col-3 collection-imgs"><img src="image/gallery_decoration.png" class="img-fluid"></div>
			<div class="col-12 dots">&#x25CF; &#x25CF; &#x25CF;</div>
		</div>
		<div class="cl"></div>
		<div class="container footer-menu">
			<h1>indoor</h1>
				<a href="#">home</a>
				<a href="shop.php">shop</a>
				<a href="blog.php">blog</a>
				<a href="#">about us</a>
		</div><hr class="footer-line">
		<div class="cl"></div>
		<div class="container">
			<div class="col-6"><p class="footer-p">Copyright @ 2025 Indoor Loreal London-All Rights Reserved</p></div>
			<div class="col-6">
				<div class="col-1"><img src="image/footer_facebook.png" alt="" width="200%"></div>
				<div class="col-1"><img src="image/footer_instagram.png" alt="" width="200%"></div>
				<div class="col-1"><img src="image/footer_twitter.png" alt="" width="200%"></div>
				<div class="col-1"><img src="image/footer_pintrest.png" alt="" width="200%"></div>
				<div class="col-1"><img src="image/footer_youtube.png" alt="" width="200%"></div>
			</div>
		</div>
		<div class="cl"></div>
	</div>
-->

<?php 
include('footer.php');
?>
	<script>
		function shopProduct(pages) {
		const allPages = ['pageOne', 'pageTwo', 'pageThree'];

		allPages.forEach(id => {
			const element = document.getElementById(id);
			if (element) {
				element.style.display = 'none';
			}
		});

		const selectedElement = document.getElementById(pages);
		if (selectedElement) {
			selectedElement.style.display = 'block';
		}
	}
	</script>
</body>
</html>