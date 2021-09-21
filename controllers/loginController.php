<?php 
    if (isset($_POST['username'])) {
        if ($_POST['username'] != '') {
            $_SESSION['username'] = trim($_POST['username']);
            header('Location:?section=home');
        }
    }

    include('views/pages/login.php');
?>