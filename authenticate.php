<?php
if(!isset($_SESSION['login_user'])) {
    header('Location: profile.php');
    exit();
}
?>