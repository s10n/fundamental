<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
	<div class="site-header">
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="menu">
		<?php
			wp_nav_menu( array(
				'theme_location'    => 'gnb',
				'menu_class'        => 'list-inline'
			) );
		?>
		</div><!-- .menu -->
	</div><!-- .header -->

	<div class="site-main">
