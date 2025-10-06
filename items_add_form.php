<!doctype html>
<?php

include('indoor_database.php');

$select_login_table = "SELECT`login_profile` FROM `login`";
$select_login_table_statement = mysqli_query($con, $select_login_table);
if (!$select_login_table_statement) {
	echo "CONNECTION ERROR";
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
	<?php

	$persnol_data = mysqli_fetch_array($select_login_table_statement);

	$admin_profile = $persnol_data['login_profile'];

	?>
	<div class="container-fluid admin_menu_logo">
		<div class="col-12 admin_add">
			<div class="col-8 admin_back
			">
				<a href="admin_home.php">back</a>
			</div>
			<div class="col-3 logout_button">
				<a href="login.php">log out</a>
			</div>
			<div class="col-1">
				<img src="image/profiles_pictures/<?php echo $admin_profile; ?>" alt="" width="40%">
			</div>
		</div>
		<div class="cl"></div>
	</div>
	<div class="container-fluid add_items_top">
		<div class="col-8" style="background-color: yellow;">
			<div class="add_items_content">
				<h1>add new items</h1>
				<form action="items_add_form_action.php" class="items_add" method="post" enctype="multipart/form-data" onSubmit="return validate()">
					<div>
						<h2>Media Upload</h2>
						<div class="col-12 forMain">
							<label for="item_image">Main-image</label>
							<div><input type="file" name="item" class="mainimage" id="item_image" onSubmit="return validate()"><br></div>
						</div>
						<div class="col-12 forMain">
							<label for="item_overlay_image">Overlay-image</label>
							<div><input type="file" name="overlay_item" class="item_image" id="item_overlay_image" onSubmit="return validate()"><br></div>
						</div>
						<div class="col-12 forBackground">
							<label for="item_background">Banner-image</label>
							<div><input type="file" name="item_background" class="mainimage" id="item_background" onSubmit="return validate()"><br></div>
						</div>
					</div>
					<div>
						<h2>Product Details</h2>
						<div class="col-12 for">
							<div class="col-8">
								<label for="item_name">Product</label><br>
								<input type="text" class="forname" name="item_name" id="item_name" onSubmit="return validate()"><br>
							</div>
							<div class="col-4">
								<label for="item_category">Category</label>
								<input type="text" class="category" name="item_category" id="item_category" onSubmit="return validate()"><br>
								<label for="item_price">Price</label>
								<input type="text" class="price" name="item_price" id="item_price" onSubmit="return validate()"><br>
							</div>
						</div>
					</div>
					<!-- 
					
					<label for="main_description">Main Description</label><br>
					<textarea name="des" id="main_description"></textarea><br>
					
					<label for="item_quantity">Quantity</label><br>
					<input type="text" class="quandity" name="item_quandity" id="item_quantity" onSubmit="return validate()"><br>
					<label for="item_sort">Sort</label><br>
					<input type="text" class="sort" name="item_sort" id="item_sort" onSubmit="return validate()"><br>

					<label for="head1">Sub-head</label><br>
					<input type="text" class="sort" name="head1" id="head1" onSubmit="return validate()"><br>
					<label for="des1">Sub-description</label><br>
					<textarea name="des1" id="des1"></textarea><br>
					<label for="head2">About</label><br>
					<input type="text" class="sort" name="head2" id="head2" onSubmit="return validate()"><br>
					<label for="des2">About-description</label><br>
					<textarea name="des2" id="des2"></textarea>
					<input type="submit" name="add" value="Add" class="addItem" style="margin-left: 15%;"> -->
				</form>
			</div>
			<div class="cl"></div>
		</div>
	</div>
	<script>
		function validate() {
			var image = document.getElementById("item_image");
			var oimage = document.getElementById("item_overlay_image");
			var name = document.getElementById("item_name");
			var category = document.getElementById("item_category");
			var price = document.getElementById("item_price");
			var sort = document.getElementById("item_sort");
			var f = 0;


			if (image.value == "") {
				image.style.border = "2px solid red";
				image.focus();
				f = 1;
			}
			if (oimage.value == "") {
				oimage.style.border = "2px solid red";
				oimage.focus();
				f = 0;
			}
			if (name.value == "") {
				name.style.border = "2px solid red";
				name.focus();
				f = 1;
			}
			if (category.value == "") {
				category.style.border = "2px solid red";
				category.focus();
				f = 1;
			}
			if (price.value == "") {
				price.style.border = "2px solid red";
				price.focus();
				f = 1;
			}
			if (sort.value == "") {
				sort.style.border = "2px solid red";
				sort.focus();
				f = 1;
			}
			if (f == 0) {
				return true;
			} else {
				return false;
			}
		}

		function removeValidation(id) {
			var rem = document.getElementById(id);

			rem.style.border = "";

		}
	</script>
</body>

</html>