<?php
  include_once 'config.php';
  include 'functions/functions.php';

  $pages = scandir('pages/');
  $reqPage = $_GET['page'];

  if(isset($reqPage) && !empty($reqPage)) {
    //$reqPage = $_GET['page'];
    if(in_array($reqPage.'.php', $pages)) {
      $page = $reqPage;
    } else {
      $page = "error";
    }
  } else {
    $page = 'home';
  }

  $pFunctions = scandir('functions/');
  if(in_array($page.'.func.php', $pFunctions)) {
    include 'functions/'.$page.'.func.php';
  }
 ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
    <link rel="stylesheet" href="/css/main.css">
  </head>
  <body>
    <?php include'template/navbar.php'; ?>
    <div class="container">
      <?php include 'pages/'.$page.'.php'; ?>
    </div>
    <script
		  src="https://code.jquery.com/jquery-3.2.1.min.js"
		  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		  crossorigin="anonymous">
    </script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js">
    </script>
    <script type="text/javascript" src="js/main.js"></script>
    <?php
      $pages_js = scandir('js/');
      if(in_array($page.'.func.js', $pages_js)) {
    ?>
    <script type="text/javascript" src="js/<?= $page; ?>.func.js"></script>
    <?php
      }
     ?>

  </body>
</html>
