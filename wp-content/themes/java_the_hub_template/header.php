<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <script src="//use.typekit.net/kaj1sye.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
  <?php wp_head(); ?>
</head>


<body class="tk-futura-pt" <?php body_class(); ?>>

<header>
  <div class="container">
    
    <h1>
      <a class="welcome" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>

      <?php 
      wp_nav_menu(
        array(
          'container' => 'nav',
          'theme_location' => 'primary'
          )
        );
       ?> 
     <!--  <ul class="menu">
        <li><a href="/">Home</a></li>
        <li><a href="page-news.php">News</a></li>
        <li><a href="page-menu.php">Menu</a></li>
      </ul> -->


  </div> <!-- /.container -->
</header><!--/.header-->

