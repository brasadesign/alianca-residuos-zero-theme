<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="col-md-12 bg-menu"></div>

	<div class="container">
		<header id="header" role="banner">

			<nav id="main-navigation" class="navbar navbar-top" role="navigation">
				<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'odin' ); ?>"><?php _e( 'Skip to content', 'odin' ); ?></a>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
					<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php /*

					<a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

					*/ ?>
				</div>

				<div class="collapse navbar-collapse navbar-main-navigation">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>

					<form method="get" class="navbar-form navbar-right" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
						<label for="navbar-search" class="sr-only"><?php _e( 'Search:', 'odin' ); ?></label>
						<div class="form-group">
							<input type="search" class="form-control" name="s" id="navbar-search" />
						</div>
						<button type="submit" class="btn btn-default"><?php _e( 'Search', 'odin' ); ?></button>
					</form>
				</div><!-- .navbar-collapse -->
			</nav><!-- #main-menu -->

			<?php if ( is_home() ) : ?>

				<?php
					$header_image = get_header_image();
					if ( ! empty( $header_image ) ) :
				?>
					<img src="<?php echo esc_url( $header_image ); ?>" height="<?php esc_attr_e( $header_image->height ); ?>" width="<?php esc_attr_e( $header_image->width ); ?>" alt="<?php bloginfo( 'name' ); ?>" />

				<?php else: ?>

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/desenho.png" alt="<?php bloginfo( 'name' ); ?>">

				<?php endif; ?>

				<h1 class="site-title"><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<?php else : ?>

				</div><!-- .container -->

					<div class="sub-header">

						<div class="container">

							<a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-internas.jpg" alt="<?php bloginfo( 'name' ); ?>"></a>
							<a class="click conceito" id="conceito-click" data-open="false"><?php _e( 'Entenda o Conceito', 'odin' ); ?></a>
			                <?php $conceito = get_page_by_path( 'o-conceito', OBJECT, 'page' ); ?>
			                <?php if($conceito):?>
			                    <div class="col-md-12" id="conceito-content">
			                    	<?php echo apply_filters('the_content', $conceito->post_content); ?>
			                    </div><!-- #conceito-content.col-md-12 -->
			                <?php endif;?>
			                <?php if(is_page() && is_page_template('page-home-alternativa.php')): ?>
			                    <div class="col-md-12" id="slider-novidades-container">
			                    	<?php echo do_shortcode('[brasa_slider name="Novidades"]');?>
			                    </div><!-- #slider-novidades.col-md-12 -->
			                <?php endif;?>
						</div><!-- .container -->

					</div><!-- sub-header -->

				<div class="container">

			<?php endif ?>



		</header><!-- #header -->

		<div id="main" class="site-main row">
