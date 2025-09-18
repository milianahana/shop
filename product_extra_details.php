<!doctype html>
<?php

include('indoor_database.php');



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
	<div class="container-fluid ">
		<div class="col-12">
			<table class="details">
				<?php

				$select_displayed_items2 = "SELECT `displayed_item_id`, `displayed_item_name`, `displayed_item_rate`, `displayed_item_quandity`, `displayed_item_sort` FROM `displayed_items`";
				$select_displayed_items_statement2 = mysqli_query($con, $select_displayed_items2);
				if (!$select_displayed_items_statement2) {
					echo "error_selecting";
				} else {

				?>
					<thead style="position: sticky;top:0;">
						<tr class="products_heading">
							<th>Id.no</th>
							<th>Name</th>
							<th>Price</th>
							<th>Category</th>
							<th>Quantity</th>
							<th>Category</th>
						</tr>
					</thead>
					<?php

					while ($table_products = mysqli_fetch_array($select_displayed_items_statement2)) {
						$p_id = $table_products['displayed_item_id'];
						$p_name = $table_products['displayed_item_name'];
						$p_price = $table_products['displayed_item_rate'];
						$p_quandity = $table_products['displayed_item_quandity'];
						$p_sort = $table_products['displayed_item_sort'];

					?>
						<tr style="text-align: center;">
							<td><?php echo $p_id; ?></td>
							<td><?php echo $p_name ?></td>
							<td><?php echo $p_price; ?></td>
							<td><?php echo $p_sort; ?></td>
							<td><?php echo $p_quandity; ?></td>
							<td><?php echo $p_quandity; ?>
							<td>
							<td style="background-color:#F1F9F9;width:8%;"><a href="product_extra_details_form.php?product_id=<?php echo $p_id; ?>" style="color: black;position:relative;">add images</a></td>
							<td style="background-color:#F1F9F9;width:8%;"><a href="product_extra_details_form.php?product_id=<?php echo $p_id; ?>" style="color: black;position:relative;">add details</a></td>
							<td style="background-color:#F1F9F9;width:8%;"><a href="product_extra_details_form.php?product_id=<?php echo $p_id; ?>" style="color: black;position:relative;">details</a></td>
						</tr>
				<?php
					}
				}
				?>
			</table>
		</div>
	</div>
</body>

</html>