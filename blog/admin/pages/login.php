<?php

  if (isset($_SESSION['admin'])) {
    header("location:index.php?page=dashboard");
  }
?>
    <div class="row">
      <div class="col s12 m6 l4 offset-m3 offset-l4">
        <div class="card-panel">
          <div class="row">
            <div class="col s6 offset-s3">
              <img src="../assets/admin.png" alt="Administrateur" width="100%">
            </div>
          </div>
          <h4 class="center-align">Se connecter</h4>

    <?php

      if(isset($_POST['submit'])) {
        $email = htmlspecialchars(trim($_POST['email']));
        $password = $_POST['password'];

        $errors = [];

        if(empty($email) | empty($password)) {
          $errors['empty'] = "Tous les champs n'ont pas été remplis";
        } else {
          if(isAdmin($email, $password) == 0) {
            $errors['exists'] = "Cet administrateur n'existe pas";
          }
        }
        if(!empty($errors)) {
    ?>
          <div class="card red">
            <div class="card-content white-text">
    <?php

              foreach ($errors as $error) {
                echo $error."<br/>";
              }

    ?>
            </div>
          </div>
    <?php
        } else {
          $_SESSION['admin'] = $email;
          header('location:index.php?page=dashboard');
        }
      }

     ?>

          <form class="" action="" method="post">
            <div class="row">
              <div class="input-field col s12">
                <input type="email" name="email" id="email">
                <label for="email">Adresse email</label>
              </div>
              <div class="input-field col s12">
                <input type="password" name="password" id="password">
                <label for="password">Mot de passe</label>
              </div>
              <div class="col s12">
                <button class="btn waves-effect waves-light light-blue center col s10 offset-s1"type="submit" name="submit"><i class="material-icons left">perm_identity</i>Se connecter</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
