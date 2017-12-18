<?php
  require_once('contact.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>Soyez présent sur internet | MPAW, sites web pour Smalls Business</title>
    <meta name="keywords" content="site web, site internet pour petite entreprise, small business, réseaux sociaux" />
    <meta name="publisher" content="cooldev">
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1 user-scalable=no" />
    <meta name="google-site-verification" content="" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="Shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="Soyez présent sur internet | MPAW, sites web pour Smalls Business" />
	<meta property="og:site_name" content="Ma petite agence web">
	<meta property="og:url" content="http://www.mpaw.xyz/" />
	<meta property="og:description" content="Où vous trouver, comment vous contacter, êtes-vous ouvert aujourd'hui ? Autant d'informations que vos futurs clients doivent trouver rapidement" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://www.mpaw.xyz/assets/img/og-img.png" />


<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.mpaw.xyz/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->
  </head>
  <body >
<?php include('private/views/nav.php');?>
<?php include('private/views/header.php');?>
<?php include('private/views/section-cards.php');?>
<?php include('private/views/section-text-color.php');?>
<?php include('private/views/contact-form.php');?>
<?php include('private/views/footer.php');?>

    <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js" ></script>
    <script type="text/javascript" src="js/main.js"></script>
    </script>
  </body>
</html>
