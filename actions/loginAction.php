<?php 
 require 'actions/database.php';

if(isset($_POST['validate'])){
    if(!empty($_POST['email']) and !empty($_POST['password'])){

        $user_email = htmlspecialchars($_POST['email']);
        $user_password = htmlspecialchars($_POST['password']);

        $checkUserExiste = $bdd->prepare('SELECT * FROM user WHERE email = ?');
        $checkUserExiste->execute(array($user_email));

        if($checkUserExiste->rowCount() > 0){

            

        }else{
        $erroMsg =  "votre adresse email est incorrect..!" ;
        }

    }else{
        $erroMsg =  "veuillez renseigner tous les champs.....!" ;
    }
} 