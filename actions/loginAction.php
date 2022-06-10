<?php 
 require 'actions/database.php';

if(isset($_POST['validate'])){
    if(!empty($_POST['email']) and !empty($_POST['password'])){

        //Récuperer les données de l'utilisateur(si l'email est correct)
        $user_email = htmlspecialchars($_POST['email']);
        $user_password = htmlspecialchars($_POST['password']);

        //vérifier si l'utilisateur existe
        $checkUserExiste = $bdd->prepare('SELECT * FROM user WHERE email = ?');
        $checkUserExiste->execute(array($user_email));

        //verifier si le mot de passe est correct
        if($checkUserExiste->rowCount() > 0){

            $infosUser = $checkUserExiste->fetch();
            if(password_verify($user_password, $infosUser['mdp'])){

                $_SESSION['auth'] = true;
                $_SESSION['id'] = $infosUser['id'];
                $_SESSION['lastname'] = $infosUser['nom'];
                $_SESSION['firstname'] = $infosUser['prenom'];
                $_SESSION['email'] = $infosUser['email'];

                //Rediriger l'utilisateur vers la page d'accueil
                header('location: main.php');
                

            }else{
                $erroMsg =  "veuillez bien vérifier votre adresse email et le mot de passe" ;
            }

        }else{

        $erroMsg =  "veuillez bien vérifier votre adresse email" ;
        }

    }else{
        $erroMsg =  "veuillez renseigner tous les champs.....!" ;
    }
} 