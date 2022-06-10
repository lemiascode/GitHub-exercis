<?php session_start();
if(!isset($_POST['auth'])){
    header('location: login.php');
}
?>