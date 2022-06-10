<?php

require 'actions/database.php';

if(isset($_POST['validate'])){
    if(!empty($_POST['email']) and !empty($_POST['lastname']) and !empty($_POST['firstname']) and !empty($_POST['password'])){

        $user_email = htmlspecialchars($_POST['email']);
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $checkUserExists = $bdd->prepare('SELECT email FROM user WHERE email=?');
        $checkUserExists->execute(array($user_email));

        if($checkUserExists->rowCount() == 0){

            $inserUser = $bdd->prepare('INSERT INTO user(email, nom, prenom, mdp)VALUES(?, ?, ?, ?)');
            $inserUser->execute(array($user_email, $user_lastname, $user_firstname, $user_password));

            $Req = $bdd->prepare('SELECT * FROM user WHERE nom=? AND prenom=? AND email=?');
            $Req->execute(array($user_lastname, $user_firstname, $user_email));
            
            $infosUser = $Req->fetch();
            
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $infosUser['id'];
            $_SESSION['lastname'] = $infosUser['nom'];
            $_SESSION['firstname'] = $infosUser['prenom'];
            $_SESSION['email'] = $infosUser['email'];
            

            header('location: main.php');

        }else{
            $erroMsg = "L'utilisateur existe déjà sur le site";
        }

    }else{
        $erroMsg =  "veuillez renseigner tous les champs.....!" ;
    }
}