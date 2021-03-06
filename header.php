<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1">

	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]> 
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->    

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" />
    
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrapper">
<header>
    <div id="sidebarlogo">	
    <?php get_sidebar('logo'); ?>
        </div>

    <div id="headright">
        
		<h1 class="bloginfo"><?php bloginfo('name'); ?></h1>
		<p class="description"><?php bloginfo('description'); ?></p>
</div><!--END HEADRIGHT-->
</header>

<!-- START NAVIGATION -->
<nav>
        <?php wp_nav_menu( array( 
			'theme_location' => 'main-menu' ,
			'menu' => 'Main Menu' ,
			'container'  => 'ul', 

		) ); ?>
    
</nav>
<!-- END NAVIGATION -->

<!-- START MIDDLE -->
<div id="middle">

