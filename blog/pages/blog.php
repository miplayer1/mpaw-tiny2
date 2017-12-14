<h2>Blog</h2>

<?php

  $posts = getPosts();

  foreach ($posts as $post) {
?>
  <div class="row">
    <div class="col s12 m12 l12">
      <h4><?= $post->title; ?></h4>
      <div class="row">
        <div class="col s12 m6 l8">
          <?= substr(nl2br($post->content),0,1200); ?>
          <br />
        </div>
        <div class="col s12 m6 l4">
          <img src="assets/posts/<?= $post->image; ?>" alt="<?= $post->title; ?>" class="materialBoxed responsive-img">
          <br><br>
          <a class="btn lightblue waves-effect waves-light" href="index.php?page=post&id=<?= $post->id; ?>">Lire l'article complet</a>
        </div>
      </div>
    </div>
  </div>
<?php
  }
?>
