<?php

session_start();

unset($_SESSION['id']); //null(unset)

session_destroy();

header('location:index.php');

?>