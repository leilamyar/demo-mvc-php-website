<?php 
    if (isset($_SESSION['username'])) {
        include('views/pages/nav/loggedin.php');
    } else {
        include('views/pages/nav/loggedout.php');
    }
?>