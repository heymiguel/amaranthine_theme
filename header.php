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
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600,500,700|Lato:400,300,300italic,400italic,700,700italic,900' rel='stylesheet' type='text/css'>

  <?php wp_head(); ?>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>


<body <?php body_class(); ?>>

<header class="clearfix">
  <div class="leftHeader">

  <div class="navLogo"> <!-- Start of customizable logo (top left corner) -->
      <?php if ( get_theme_mod( 'amaranthine_logo' ) ) : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">             
          <img src="<?php echo get_theme_mod( 'amaranthine_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
        <?php else : ?> <!-- NEED TO FIGURE OUT HOW TO HIDE TEXT IF IMAGE ISNT PRESENT -->
        <h1>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>
      <?php endif; ?> 
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_locations' => 'primary'
        )); ?>
      </div>
  </div> <!-- End of customizable logo -->
      <div class="rightHeader">
      <div class="socials clearfix">
          
            <div class="socialIcons clearfix">
            <span>possible email goes here</span>
                <i class="fa fa-envelope"></i>
                <i class="fa fa-twitter fa-lg"></i>
                <i class="fa fa-github-alt fa-lg"></i>
                <i class="fa fa-linkedin fa-lg"></i>
                <i class="fa fa-medium fa-lg"></i>
            </div>
       </div> 
      </div>

  </div> <!-- /.container -->
</header><!--/.header-->

