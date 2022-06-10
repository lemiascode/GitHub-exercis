<?php require 'actions/signupAction.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>

    <br></br>
    <h1>Formulaire</h1>
    <form class="container" method="POST">
       <?php if(isset($erroMsg)){ echo '<p>'. $erroMsg . '</p>'; } ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Adresse Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="ex: ebome@gmail.com">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="lastname" aria-describedby="emailHelp" placeholder="veuillez entre votre nom">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" aria-describedby="emailHelp" placeholder="veuillez entre votre prénom">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="veuillez entre votre mot de passe">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">verifie moi</label>
        </div>
        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
        <br><br>
        <a href="../login.php">
            <p>J'ai déjà un compte, je me connecte</p>
        </a>
    </form>

</body>

</html>