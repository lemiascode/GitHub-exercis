<?php
try{
    //session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=login_user;charset=utf8;','root','');
}catch(Exception $e){
    die('une a été trouvée :' . $e->getMessage());
}