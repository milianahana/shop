<?php

include ('menu_header.php');

 if(isset($_SESSION['id'])) {
    $login_id = $_SESSION['id'];

?>
<!---------------------------------------------------------------------------	blog-banner-->
	<div class="container-fluid blog-topbanner">
		<div class="container">
			<h1>BLOG</h1>
		</div>
		<div class="cl"></div>
	</div>
<!---------------------------------------------------------------------------	blog-contents-->
	<div class="container-fluid bloggiess">
		<div class="container blog-contents">
			<div class="col-6 blog-para">
				<h6>design trends,furniture</h6>
				<h2>Minimalist design furniture 2025</h2>
				<p>A taciti cras scelerisque scelerisque gravida natoque nulla vestibulum turpis primis adipiscing fauc...</p>
				<a href="#">Continue reading</a>
			</div>
			<div class="col-6 blog-image">
				
			</div>
		</div>
		<div class="cl"></div>
		<div class="container blog-contents">
			<div class="col-6 blog-image2">
			</div>
			<div class="col-6 blog-para">
				<h6>design trends, Hand made</h6>
				<h2>pottery </h2>
				<p>A taciti cras scelerisque scelerisque gravida natoque nulla vestibulum turpis primis adipiscing fauc...</p>
				<a href="#">Continue reading</a>
			</div>
		</div>
		<div class="cl"></div>
		<div class="container blog-contents">
			<div class="col-6 blog-para">
				<h6>Decoration, Design trends</h6>
				<h2>New home decor from John Doerson</h2>
				<p>A taciti cras scelerisque scelerisque gravida natoque nulla vestibulum turpis primis adipiscing fauc...</p>
				<a href="#">Continue reading</a>
			</div>
			<div class="col-6 blog-image3">
				
			</div>
		</div>
		<div class="cl"></div>
		<div class="container blog-contents">
			<div class="col-6 blog-image4">
			</div>
			<div class="col-6 blog-para">
				<h6>Decoration, Design trends</h6>
				<h2>Minimalist design 2025</h2>
				<p>A taciti cras scelerisque scelerisque gravida natoque nulla vestibulum turpis primis adipiscing fauc...</p>
				<a href="#">Continue reading</a>
			</div>
		</div>
		<div class="cl"></div>
	</div>
<?php 

include('footer.php');

} 
	else{ 

?>

<div class="container-fluid">
	<div class="col-12 error_pages2">
		<h1>404</h1>
		<h2>PAGE NOT FOUND</h2>
		<p>Something went wrong,Login for more access</p>
		<a href="login.php">LOGIN</a><br>
		<a href="index.php" class="back2">GO BACK</a>
	</div>
</div>
<?php } ?>
</body>
</html>