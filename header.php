<?php
/**
 * @package aapcse
 */
?><!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lte IE 7]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lt-ie8.css"><![endif]-->
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="section header">
  <header class="container" role="banner">
  	<div class="sixteen columns">
        <a href="#main" class="visuallyhidden focusable" id="skiptomain">Skip to content</a>
        <h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" rel="home">American Association of Pastoral Counselors <span id="southeastregion">Southeast Region</span></a></h1>
        <div id="main-search-box" role="search"><?php  get_search_form() ?></div>
    </div><!--.sixteen.columns-->
  </header>
</div><!--.section-->
<div class="section mainmenu">
  <div class="sixteen columns alpha omega"> 
		<?php 
      wp_nav_menu( array( 
				'theme_location' => 'primary', 
				'container' => 'nav',
				'container_class' => 'container menus',
				'container_id' => 'site-navigation',
				'menu_class' => 'mdd-menu',
				'depth' => 2
			) );
    ?>
  </div>
</div><!--.section-->
<div class="section middle"><!-- content and sidebar -->
	<div class="container">