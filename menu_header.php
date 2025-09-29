<?php
session_start();
include('indoor_database.php');

$signin_user_profile = "default_profile.png";
$login_id = "";

if (isset($_SESSION['id'])) {
    $login_id = $_SESSION['id'];

    $signin_select_statement = $con->prepare("SELECT `signin_profile` FROM `signin` WHERE signin_login_id = ?");
    $signin_select_statement->bind_param("i", $login_id);
    $signin_select_statement->execute();
    $result = $signin_select_statement->get_result();

    if ($login_data = $result->fetch_assoc()) {
        $signin_user_profile = $login_data['signin_profile'];
    }
    $signin_select_statement->close();
}

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indoor</title>
    <link rel="stylesheet" href="css/grid_style.css">
    <link rel="stylesheet" href="css/index_style.css">
    <script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
</head>

<body>
    <!---------------------------------------------------------------------------	menu_bar-->
    <div class="condainer-fluid menu_bar">
        <div class="menu">
            <div class="col-3 logo">
                <h1>indoor</h1>
            </div>
            <div class="col-5 menu1">
                <a href="index.php">home</a>
                <a href="shop.php">shop</a>
                <a href="blog.php">blog</a>
                <a href="about_us.php">about us</a>
            </div>
            <div class="col-4 menu2">
                <a href="<?php echo $login_id == "" ? "login.php" : "signout_action.php" ?>"><?php echo $login_id == "" ? "LOG IN" : "LOG OUT" ?></a>
                <a href="wishlist.php"><img src="image/heart.png" width="25px"></a>
                <a href="add_to_cart.php"><img src="image/shopping-cart-add.png" width="25px"></a>
                <a href="#"><span class="blue-btn">Rs. 0.00</span></a>
                <img src="image/profiles_pictures/<?php echo ($signin_user_profile); ?>" alt="Profile" class="profile-image">
            </div>
        </div>
        <div class="cl"></div>
        <hr>
    </div>
</body>

</html>