<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>
<?php wp_title( '' ); ?>
</title>
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name = "viewport" content = "width = device-width, initial-scale=1, user-scalable=yes">
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body <?php body_class(); ?>>
<header class="header"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
  <h1>Degi-Link</h1>
  </a>
  <div class="openbtn"><span></span><span></span><span></span></div>
  <nav class="gnav">
    <div id="g-nav-list">
      <div class="nav-box">
        <?php get_search_form(); ?>
      </div>
    </div>
  </nav>
</header>
