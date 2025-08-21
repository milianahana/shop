<!doctype html>
<?php

include('indoor_database.php');

$select_login_table="SELECT`login_profile` FROM `login`";
$select_login_table_statement=mysqli_query($con,$select_login_table);
if(!$select_login_table_statement){
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
	<div class="container-fluid admin-top-line">
		<?php
		
		$persnol_data=mysqli_fetch_array($select_login_table_statement);
		
		$admin_profile=$persnol_data['login_profile'];
		
		?>
		<div class="container admin-menu">
			<div class="col-6 admin-profile">
				<img src="image/profiles_pictures/<?php echo $admin_profile;?>" alt="" width="12%">
			</div>
			<div class="col-6 admin-signout">
				<form action="signout_action.php" method="post" class="signout_action" onSubmit=" return validate()">
					<input type="submit" name="out" value="Signout" class="signout">
				</form>
			</div>
		</div>
		<div class="cl"></div>
	</div>
	<div class="container-fluid add_items_top">
		<div class="col-9 add-container">
			<div class="col-12 add_items_outerline">
				<div class="col-6 add_items_image">
					<img src="image/add_item_illustration.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-6 add_items_content">
					<h1>add new items</h1>
					<form action="items_add_form_action.php" class="items_add" method="post" enctype="multipart/form-data" onSubmit="return validate()">
						<input type="file" name="item" class="item_image" id="item_image" onSubmit="return validate()">
						<input type="file" name="overlay_item" class="item_image" id="item_overlay_image" onSubmit="return validate()">
						<input placeholder="Item" type="text" class="name" name="item_name" id="item_name" onSubmit="return validate()">
						<input placeholder="Category" type="text" class="category" name="item_category" id="item_category" onSubmit="return validate()">
						<input placeholder="Price" type="text" class="price" name="item_price" id="item_price" onSubmit="return validate()">
						<input placeholder="Quandity" type="text" class="quandity" name="item_quandity" id="item_quandity" onSubmit="return validate()">
						<input placeholder="Sort" type="text" class="sort" name="item_sort" id="item_sort" onSubmit="return validate()" >
						<input type="submit" name="add" value="Add" class="addItem">
					</form>
				</div>
			</div>
			<div class="cl"></div>
		</div>
	</div>
	<script>
	   function validate(){
		   var image=document.getElementById("item_image");
		   var oimage=document.getElementById("item_overlay_image");
		   var name=document.getElementById("item_name");
		   var category=document.getElementById("item_category");
		   var price=document.getElementById("item_price");
		   var sort=document.getElementById("item_sort");
		   var f=0;


		   if(image.value=="")
		   {
			   image.style.border="2px solid red";
			   image.focus();
			   f=1;
		   }
		   if(oimage.value=="")
		   {
			   oimage.style.border="2px solid red";
			   oimage.focus();
			   f=0;
		   }
		   if(name.value=="")
		   {
			   name.style.border="2px solid red";
			   name.focus();
			   f=1;
		   }
		   if(category.value=="")
		   {
			   category.style.border="2px solid red";
			   category.focus();
			   f=1;
		   }
		   if(price.value=="")
		   {
			   price.style.border="2px solid red";
			   price.focus();
			   f=1;
		   }
		   if(sort.value=="")
		   {
			   sort.style.border="2px solid red";
			   sort.focus();
			   f=1;
		   }
		   if(f==0)
			   {
				   return true;
			   }
		   else{
			   return false;
		   }
	   }
			function removeValidation(id){
				var rem=document.getElementById(id);

				rem.style.border="";

			}
	</script>
</body>
</html>