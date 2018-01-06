<h2>Blog</h2>

<?php

  $posts = getPosts();

  foreach ($posts as $post) {
?>
  <div class="row">
    <div class="col s12 m12 l12">
      <h4><?= $post->title; ?></h4>
      <div class="row">
        <div class="truncate col s12 m6 l8">
          <?= substr(nl2br($post->content),0,300); ?>
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
<div class="center-align">
  <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</div>