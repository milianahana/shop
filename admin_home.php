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
	<link rel="stylesheet" href="css/font_awesom_all.css">
	<link rel="stylesheet" href="css/fontawesome.css">
	<script src="js/fontawesome.js"></script>
	<script src="js/fontawesome_all.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
	<div class="container-fluid admin_menu_logo">
		<div class="col-12 admin_logobar">
				<?php
		
		$persnol_data=mysqli_fetch_array($select_login_table_statement);
		
		$admin_profile=$persnol_data['login_profile'];
		
		?>
				<div class="col-8 logo_image">
					<img src="image/admin_logo.png" alt="" class="admin_logo">
				</div>
				<div class="col-3 logout_button">
					<a href="login.php">log out</a>
				</div>
				<div class="col-1">
					<img src="image/profiles_pictures/<?php echo $admin_profile;?>" alt="" width="40%">
				</div>
		</div>
		<div class="col-1 admin_menu-bar">
			<div class="col-12 admin_menu-button">
				<div class="b_home"><button type="button" onClick="displayHome()"><img src="image/admin_home.png" alt="" class="admin_menu" width="85%"></button></div><br>
				<div class="b_menu"><button type="button" onClick="displayMsg()"><img src="image/admin_menu.png" alt="" class="admin_menu" width="85%"></button></div><br>
				<div class="b_analyse"><button type="button" onClick="displayProducts()"><img src="image/admin_product.png" alt="" class="admin_analyse" width="90%"></button></div><br>
				<div class="b_dark"><button type="button" onClick="displayDark()"><img src="image/admin_dark.png" alt="" class="admin_dark" width="90%"></button></div><br>
				<div class="b_bright"><button type="button" onClick="displayBright()"><img src="image/admin_bright.png" alt="" class="admin_bright" width="90%"></button></div><br>
				<div class="b_profile"><button type="button" onClick="displayProfile()"><img src="image/admin_profile.png" alt="" class="admin_profile" width="100%"></button></div><br>
				<div class="b_logout"><button  type="button" onClick="displayLogin()"><img src="image/admin_logout.png" alt="" class="admin_logout" width="90%"></button></div><br>
			</div>
		</div>
			<div class="cl"></div>
	</div>
	<div class="container-fluid">
		<div class="col-12 admin_common-frame" id="home" style="display: block;">
			<h2 class="dashboard_h1">dashboard</h2>
			<div class="col-12 admin_top_contents">
					<div class="col-3 admin_total_revenue">
						<div class="col-6 admin_total_revenue_image"><img src="image/purple-heart.png" alt="" class="img-fluid purple"></div>
						<div class="col-6 admin_total_revenue_content"><h1>$<span  class="value" name="23567">0</span></h1><p>Total Revenue</p></div>
					</div>
					<div class="col-3 admin_total_revenue">
						<div class="col-6 admin_total_revenue_image"><img src="image/green-cart.png" alt="" class="img-fluid grn"></div>
						<div class="col-6 admin_total_revenue_content"><h1>$<span  class="value" name="127">0</span></h1><p>Today's Revenue</p></div>
					</div>
					<div class="col-3 admin_total_revenue">
						<div class="col-6 admin_total_revenue_image"><img src="image/employees.png" alt="" class="img-fluid blu"></div>
						<div class="col-6 admin_total_revenue_content"><h1><span  class="value" name="0.62">0</span>%</h1><p>New Employees</p></div>
					</div>
					<div class="col-3 admin_total_revenue">
						<div class="col-6 admin_total_revenue_image"><img src="image/yellow-eye.png" alt="" class="img-fluid yellow"></div>
						<div class="col-6 admin_total_revenue_content"><h1><span  class="value" name="78.35">0</span>k</h1><p>Today's Visits</p></div>
					</div>
				</div>
			<div class="col-12 admin_graphical">
					<div class="col-4 admin_revenue_graph">
						<h3>Total Revenue</h3>
						<h4>Total sales made today</h4>
						<h1>$<span  class="value" name="178">0</span></h1>
						<p>Traditional heading elements are designed to work best in the meat of your page content.</p>
						<div class="col-4 admin_target"><p>Target</p><h2><span class="red">&#x2193;</span><span  class="value" name="17.87">0</span>k</h2></div>
						<div class="col-4 admin_lastweek"><p>Last Week</p><h2><span class="gren">&#x2191;</span><span  class="value" name="16.98">0</span>k</h2></h2></div>
						<div class="col-4 admin_lastmonth"><p>Last Month</p><h2><span class="red">&#x2193;</span><span  class="value" name="32.14">0</span>k</h2></h2></div>
					</div>
					<div class="col-8 admin_salegraph" style="padding-bottom: 10px;">
						<h3>Sales Analytics</h3>
						<div class="col-10"><canvas id="myChart" style="width:100%;max-width:700px;padding-left: 100px;"></canvas></div>
						<div class="col-2"></div>
						<div class="col-12"><p>Sale</p></div>
						<div class="cl"></div>
					</div>
				</div>
			<div class="col-12 admin_sale_details">
				<?php
			
			$select_displayed_items="SELECT `displayed_item_name`, `displayed_item_rate`, `displayed_item_quandity`, `displayed_item_sort` FROM `displayed_items`";
			$select_displayed_items_statement=mysqli_query($con,$select_displayed_items);
			if(!$select_displayed_items_statement)
			{
				echo "error_selecting";
			}
			else{
				
			?>
					<div class="col-5 admin_location_map">
						<h3>Sales by Locations</h3>
						<img src="image/location.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-7 admin_products_details">
						<h3>Top selling products</h3>
						<div style="overflow: scroll;height: 394px;">
							<table class="products">
								<thead style="position: sticky;top:0;">
									<tr class="products_heading" sty>
										<th>name</th>
										<th>price</th>
										<th>quantity</th>
										<th>amount</th>
									</tr>
								</thead>
								<?php

								while($table_products=mysqli_fetch_array($select_displayed_items_statement))
								{
									$p_name=$table_products['displayed_item_name'];
									$p_price=$table_products['displayed_item_rate'];
									$p_quandity=$table_products['displayed_item_quandity'];
									$p_sort=$table_products['displayed_item_sort'];

								?>
								<tr>
									<td><?php echo $p_name; ?></td>
									<td><?php echo $p_price; ?></td>
									<td><?php echo $p_quandity; ?></td>
									<td><?php echo $p_sort; ?></td>
								</tr>
								<?php
								}
				}
							?>
							</table>
						</div>
					</div>
				</div>
				</div>
		<div class="cl"></div>
		<div class="col-12 admin_common_msg" id="msg" style="display: none;">
			<div class="col-3">
					<div class="col-12 admin_calender">
						<div class="create_event">
							<img src="image/create_events.png" width="5%">
							<a href="#" class="big">Create New event</a>
						</div>
						<p class="grey">Drag and drop your event or click in the calender</p>
						<div>
							<p class="align"><img src="image/event_ green.png">New event planning</p>
							<p class="align"><img src="image/event_ blue.png">Meeting</p>
							<p class="align"><img src="image/event_ yellow.png">Reports</p>
							<p class="align"><img src="image/event_ red.png">Create new theme</p>
						</div>
					</div>
					<div class="col-12 upcoming_events">
						<h3>Upcoming events</h3>
						<p class="grey">Don't miss scheduled events</p>
						<div class="col-12 spcl_date">
							<h5>4Jan 2025</h5>
							<h3>World Braille day</h3>
						</div>
						<div class="col-12 spcl_date">
							<h5>4Jan 2025</h5>
							<h3>World Braille day</h3>
						</div>
					</div>
					<div class="col-12 calender_para">
						<p>Welcome to your calender event that application book will appear here.Click on event to see the details and manage applications event.</p>
					</div>
			</div>
			<div class="col-9 calender">
					<iframe src="https://calendar.google.com/calendar/embed?src=hf134497%40gmail.com&ctz=Asia%2FKolkata" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

			</div> 
			<div class="col-12">
				<div class="col-3 admin_chat">
					<h3>Chat <img src="image/create_events.png" width="6%"></h3>
					<input type="text" placeholder="Search" class="admin_chatsearch" id="admin_chatsearch">
					<h4>Chat</h4><hr>
					<div class="col-12 chat1">
						<div class="col-2"><img src="image/user1.jpg" width="130%"></div>
						<div class="col-10"><p>Manifac</p><h6>wyncmmsgs ivebsysinceyes</h6></div>
					</div>
					<div class="col-12 chat1">
						<div class="col-2"><img src="image/user2.jpg" width="130%"></div>
						<div class="col-10"><p>Manifac</p><h6>wyncmmsgs ivebsysinceyes</h6></div>
					</div>
					<div class="col-12 chat1">
						<div class="col-2"><img src="image/user4.jpg" width="130%"></div>
						<div class="col-10"><p>Manifac</p><h6>wyncmmsgs ivebsysinceyes</h6></div>
					</div>
				</div>
			</div>
		</div>
		<div class="cl"></div>
		<div class="col-12 admin_common_product" id="products" style="display: none;">
			<div class="col-5" style="background-color: white; margin: 0 40px;">
				<div class="col-12 add_items">
					<div class="col-6"><h3>Products</h3></div>
					<div class="col-6 item_add_button"><a href="items_add_form.php">add</a></div>
				</div>
				<div class="col-12 admin_products_details">
					<?php
			
					$select_displayed_items2="SELECT `displayed_item_name`, `displayed_item_rate`, `displayed_item_quandity`, `displayed_item_sort` FROM `displayed_items`";
					$select_displayed_items_statement2=mysqli_query($con,$select_displayed_items2);
					if(!$select_displayed_items_statement2)
					{
						echo "error_selecting";
					}
					else{

					?>
					<div style="overflow: scroll;height: 394px;">
					<table class="products">
						<thead style="position: sticky;top:0;">
							<tr class="products_heading" sty>
										<th>name</th>
										<th>price</th>
										<th>quantity</th>
										<th>amount</th>
									</tr>
						</thead>
					 	<?php
						
						while($table_products=mysqli_fetch_array($select_displayed_items_statement2))
						{
							$p_name=$table_products['displayed_item_name'];
							$p_price=$table_products['displayed_item_rate'];
							$p_quandity=$table_products['displayed_item_quandity'];
							$p_sort=$table_products['displayed_item_sort'];

						?>
						<tr>
							<td><?php echo $p_name; ?></td>
							<td><?php echo $p_price; ?></td>
							<td><?php echo $p_quandity; ?></td>
							<td><?php echo $p_sort; ?></td>
						</tr>
						<?php
								}
				}
							?>
						</table>
					</div>
				</div>
			</div>
			<div class="col-6 " style="background-color: white">
				<div class="col-12 add_items">
					<div class="col-6"><h3>Employees</h3></div>
					<div class="col-6 item_add_button"><a href="labour_add.php">add</a></div>
				</div>
				<div class="col-12" style="overflow: scroll;height: 394px;">
					<table class="products">
						<thead style="position: sticky;top:0;">
							<tr class="products_heading">
								<th>Id.no</th>
								<th>Name</th>
								<th>number</th>
								<th>shift-time</th>
							</tr>
						</thead>
						<tr style="text-align: center;">
							<td>15289</td>
							<td>ahanika</td>
							<td>8547596240</td>
							<td>morning(8:00am) to noon(2:30pm)</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="cl"></div>
	</div>
</body>
	
	<script>
const counters = document.querySelectorAll('.value');
const speed = 100;

counters.forEach( counter => {
   const animate = () => {
      const value = +counter.getAttribute('name');
      const data = +counter.innerText;
     
      const time = value / speed;
     if(data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, .01);
        }else{
          counter.innerText = value;
        }
     
   }
   
   animate(); 
});
		const ytitle="Net revenue";
		const xValues = ["Jan'01", "02 Jan", "03 Jan", "04 Jan", "05 Jan","06 Jan","07 Jan","08 Jan","09 Jan","10 Jan","11 Jan","12 Jan"];
		const yValues = [400, 450, 410, 650,500,250,200,300,700,308,203,100];
		const barColors = ["lightblue", "lightblue","lightblue","lightblue","lightblue","lightblue","lightblue","lightblue","lightblue","lightblue","lightblue","lightblue"];

		new Chart("myChart", {
			type: "bar",
			data: {
				labels: xValues,
				datasets: [{
					backgroundColor: barColors,
					data: yValues,
				}]
			},
			options: {
				legend: {display: false},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});	
		
		function displayHome(){
			document.getElementById("home").style.display="block";
			document.getElementById("msg").style.display="none";
			document.getElementById("products").style.display="none";
		}
		function displayMsg(){
			document.getElementById("msg").style.display="block";
			document.getElementById("home").style.display="none";
			document.getElementById("products").style.display="none";
		}
		function displayProducts(){
			document.getElementById("products").style.display="block";
			document.getElementById("home").style.display="none";
			document.getElementById("msg").style.display="none";
		}
</script>
</html>