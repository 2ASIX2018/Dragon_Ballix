<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?> ">
	<head>
		<meta content="Jorge Sendra Gómez" name="author">
		<meta content="DragonBallWorld" name="description">
		<meta content="Dragon ball" name="keywords">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
        
        <title><?php bloginfo('DragonBallWorld'); ?></title>

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"  />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>style.css"  />
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
		
<?php wp_head(); ?>
		
    </head>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="padding-top:40px";>
      <div class="container col-md-3">
      
         <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      </div>
      <div class="nav-menu col-md-9">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </div>
</nav>
</header>
