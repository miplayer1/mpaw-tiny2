<h1>Blog</h1>

<div class="row">
  <?php
    $posts = getPosts();

    foreach ($posts as $post) {
  ?>
      <div class="col l6 m6 s12">
        <div class="card">
          <div class="card-image">
          	<img src="<?= 'assets/posts/'. $post->image; ?>" alt="<?= $post->title; ?>"/>
          	<a href="index.php?page=post&id=<?= $post->id; ?>" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
          </div>
				<div class="card-content">          	
          	<h2><?=  $post->title; ?></h2>
          
            <h6 class="grey-text"><?= date('d/m/Y à H:i', strtotime($post->date)); ?> par <?= $post->name; ?></h6>
          </div>
        </div>  
      </div>

  <?php
    }
  ?>

</div>
  