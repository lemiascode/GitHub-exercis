<?php require 'actions/loginAction.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php' ?>
<body>
    
<br><br>
    <form class="container" method="POST">

    <?php if(isset($erroMsg)){ echo '<p>'. $erroMsg . '</p>'; } ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adresse email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="entre l'adresse email ex:ebome@gmail.com">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="entre le mot de passe">
  </div>
  <button type="submit" class="btn btn-primary" name="validate">Se Connecter</button>
  <br><br>
  <a href="signup.php"><p>Je n'ai pas de compte, je m'inscris</p></a>
</form>

</body>
</html>