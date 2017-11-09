<!DOCTYPE html>
<html lang = "<?php language_attributes(); ?>">
	<head>
		<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('Whitney Houston'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
	
		<?php wp_head(); ?>
    </head>
	<body <?php body_class(); ?>>
		      
	<nav>
	    <div class="nav-container">
		<label for="drop" class="toggle hidden-dk display-md display-sm"><i class="fa fa-bars"></i></label>
	        <input type="checkbox" id="drop">

	    	<ul class="menu-top display-dk hidden-md hidden-sm">
	    		 <li><?php wp_nav_menu(array('theme_location' => 'primary')); ?></li>
	        </ul>

	    </div>    
	</nav>

<main>