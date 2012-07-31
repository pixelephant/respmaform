<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="hu"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="hu"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="hu"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="hu"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php 

  $a = explode("/",$_SERVER['REQUEST_URI']);

  $menu['index'] = '';
  $menu['hireus'] = '';
  $menu['method'] = '';
  $menu['portfolio'] = '';

  $item = explode(".",$a[count($a)-1]);

  $menu[$item[0]] = "active";

?>
  <title>Maform</title>
  <meta name="description" content="">
  <meta name="apple-mobile-web-app-capable" content="yes" />  

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/flexslider.css">

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>
      <a id="logo" href="/"><img src="img/uj_logo.png" alt=""></a>
    <nav>
      <ul>
        <li><a class="<?php echo $menu['method'] ?>" href="method.php">Method</a></li>
        <li><a class="<?php echo $menu['portfolio'] ?>" href="portfolio.php">Works</a></li>
        <li><a class="<?php echo $menu['hireus'] ?>" href="hireus.php">Hire us!</a></li>
        <li id="language"><a href="#">Hu</a></li>
    </ul>
    </nav>
    <div class="flexslider carousel">
      <ul class="slides">        
        <li><img src="img/slider/slider-face.jpg" alt=""></li>
        <li><img src="img/slider/slider-m8.jpg" alt=""></li>
        <li><img src="img/slider/slider-pa.jpg" alt=""></li>
        <li><img src="img/slider/slider-paq.jpg" alt=""></li>
      </ul>
    </div>
  </header>