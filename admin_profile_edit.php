<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled Document</title>
    <link rel="stylesheet" href="css/grid_style.css">
    <link rel="stylesheet" href="css/index_style.css">
    <script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
</head>

<body>
    <div class="col-12 admin_profile" id="profile" style="padding: 0;">
        <div class="procon">
            <div class="col-12 admin_profile_ribbon">
            </div>
            <div class="col-12 admin_profile_align">
                <div class="col-8 admin_profile_picture">
                    <div class="col-2"><img src="image/profiles_pictures/default_profile.png" alt=""></div>
                    <div class="col-10">
                        <p>djhfdui</p>
                    </div>
                </div>
                <div class="col-4 admin_profile_edit"><a href="admin_home.php" style="background-color: yellowgreen;">back</a></div>
            </div>
            <form action="admin_profile_edit_form_action.php" method="post" enctype="multipart/form-data" class="profile_form">
                <div class="col-12">
                    <div class="col-6">
                        <h4>Full Name</h4>
                        <input class="profile_input"></input>
                    </div>
                    <div class="col-6">
                        <h4>User Name</h4>
                        <input class="profile_input"></input>
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-6">
                        <h4>Gender</h4>
                        <div style="display:flex;justify-content:space-between;">
                            <label for="male" class="male"> Male</label>
                            <input type="radio" id="male" value="male" name="a_gen" required>
                            <label for="female"> Female</label>
                            <input type="radio" id="female" value="female" name="a_gen" required><br>
                        </div>
                    </div>
                    <div class="col-6">
                        <h4>Country</h4>
                        <input class="profile_input"></input>
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-6">
                        <h4>Language</h4>
                        <input class="profile_input"></input>
                    </div>
                    <div class="col-6">
                        <h4>Time Zone</h4>
                        <input class="profile_input"></input>
                    </div>
                </div>
                <div class="col-12" style="display: flex;justify-content:center;align-items:center;">
                    <input type="submit" name="submit" value="Update" class="ap_sbmt">
                </div>
            </form>
        </div>
    </div>
</body>

</html>