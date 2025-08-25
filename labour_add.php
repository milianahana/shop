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
	<div class="cl"></div>
	<div class="container-fluid">
		<div class="w">
			<div class="col-6" style="background-image: url(image/about-banner.jpg);height:300px;">

			</div>
			<div class="col-6 add_items_content">
				<h1>add new items</h1>
				<form action="items_add_form_action.php" class="items_add" method="post" enctype="multipart/form-data" onSubmit="return validate()">
					<input type="file" name="item" class="item_image" id="item_image" style="border: none;" onSubmit="return validate()">
					<input placeholder="Id.no" type="text" class="name" name="item_name" id="item_name" onSubmit="return validate()">
					<input placeholder="Name" type="text" class="category" name="item_category" id="item_category" onSubmit="return validate()">
					<textarea placeholder="Address" name="address" id="adrs" style="width: 100%;height: 115px;font-size: 16px;padding: 12px;"></textarea>					
					<input placeholder="Phone.no" type="text" class="sort" name="item_sort" id="item_sort" onSubmit="return validate()" >
					<input type="submit" name="add" value="Add" class="addItem">
				</form>
			</div>
		</div>
	</div>
	</div>
</body>
</html>