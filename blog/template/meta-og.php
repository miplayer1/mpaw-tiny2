  <?php
    $posts = getPosts();

    //foreach ($posts as $post) {
  ?>
<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="<?= $post->ogtitle; ?>" />
	<meta property="og:site_name" content="Ma petite agence web">
	<meta property="og:url" content="<?= $post->ogurl; ?>" />
	<meta property="og:description" content="<?= $post->ogdescription; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?= $post->ogimage ?>" />
	