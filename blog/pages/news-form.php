<?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['email']) && empty($_POST['check'])) {
            $email_contact = $_POST['email'];
            $today = date("j M Y");
            $log = fopen('log.txt', "a");
            if (filter_var($email_contact, FILTER_VALIDATE_EMAIL)) {
                fwrite($log, "Date : " . $today . " // Adresse : " . $email_contact . "\n");
                fclose($log);
                $feedback = "Merci pour votre inscription avec $email_contact";
            } else {
                $feedback = "Adresse mail incorrecte";
            }
            
        }
    }
?>
<h2 class="">Envie de recevoir la newsletter de Ma Petite Agence Web ? Des infos pour les petites entreprises, les derniers articles du blog... Maximun une par mois, pas plus, promis !</h2>
 <div class="row">
 		<div class="col s12 m3">
        <form action="" method="post">
        <label for="email">Entrez votre adresse mail ici : </label>
        <input type="text" placeholder="Entrez votre adresse mail" name="email">
        <input type="text" hidden name="check">
        <button class="btn waves-effect waves-light amber accent-4" type="submit" name="submit">Oui, je le veux</button>
   	  </form>
    </div>
  </div>
    <div class="feedback">
        <?= $feedback ?>
    </div>
  