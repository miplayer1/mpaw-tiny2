<?php
  $post = getPost();
  
  if($post == false) {
    header('location:index.php?page=error');
  } else {
?>

  </div>


  <div class="parallax-container">
    <div class="parallax">
      <img src="assets/posts/<?= $post->image; ?>" alt="<?= $post->title; ?>">
    </div>
  </div>

  <div class="container">
    <h1><?= $post->title; ?></h1>
    <h6><?= $post->name; ?> le <?= date("d/m/Y à H:i", strtotime($post->date))?></h6>
    <?= nl2br($post->content); ?>
<?php
  }
 ?>

<hr>
  <h4>Commentaires sur l'article</h4>
  <?php
    $comments = getComment();

    if($comments != false) {
      foreach ($comments as $comment) {
  ?>
        <blockquote >
          <?= $comment->name;?> le <?= date("d/m/Y", strtotime($comment->date)); ?>
          <p><?= nl2br($comment->comment); ?></p>
        </blockquote>
  //<?php
      }

  } else {
    echo'Aucun commentaire publié... Soyez le premier';
  }
   ?>
<hr>
<h4>Commenter l'article</h4>

<?php
  if(isset($_POST['submit'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $comment = htmlspecialchars(trim($_POST['comment']));

    if(empty($name) || empty($email) || empty($comment)) {
      $errors = [];
      $errors['empty'] = "Tous les champs ne sont pas remplis";
    } else {
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "L'email n'est pas valide";
      }
    }

    if(!empty($errors)) {
?>
  <div class="card red">
    <div class="card-content white-text center-align">
<?php
  foreach ($errors as $error) {
    echo($error)."<br/>";
  }
 ?>
    </div>
  </div>

<?php
    } else {
      postComment($name, $email, $comment);
      $errors['comment'] = "Votre commentaire a été soumis";
?>
<div class="card green">
  <div class="card-content white-text center-align">
<?php
foreach ($errors as $error) {
  echo($error);
}
?>
  </div>
</div>

<script type="text/javascript">
  window.location.replace('index.php?page=home&id=<?= $_GET['id']; ?>');
</script>

<?php
    }

  }
 ?>

<form class="" action="" method="post">
  <div class="row">
  <div class="input-field col s12 m6 l6">
    <input type="text" name="name" id="name">
    <label for="id">Nom</label>
  </div>
  <div class="input-field col s12 m6">
    <input type="email" name="email" id="email">
    <label for="email">Email</label>
  </div>
  <div class="input-field col s12">
    <textarea name="comment" class="materialize-textarea"></textarea>
    <label for="comment">Commentaire</label>
  </div>
  <div class="col s12 center">
    <button type="submit" name="submit" class="btn waves-effect">Commenter ce post</button>
  </div>
</div>

</form>-->
