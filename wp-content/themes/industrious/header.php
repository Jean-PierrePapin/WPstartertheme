<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html <?php language_attributes(); ?>>
	<head>
		<title>Industrious by TEMPLATED</title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		<?php wp_head(); ?>

	</head>
	<body class="is-preload">

		<!-- Header -->
		<header id="header">
			<a class="logo" href="<?php echo home_url(); ?>">Industrious</a>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Nav -->
		<nav id="menu">
			
			<?php 

			if( has_nav_menu( 'primary' ) ) {
				wp_nav_menu([
					'theme_location'			=>	'primary',
					'container'					=>	false,
					'menu_class'				=>	'links',
					'fallback_cb'				=>	false,
					'depth'						=>	0
				]); 
			}
					
			?>

		</nav>