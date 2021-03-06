<?php
/**
 * The home template file.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 0.1
 */

get_header(); ?>

	<div id="primary" class="col-md-12">
		<main id="main-content" class="site-main" role="main">

			<div class="col-sm-12 col-md-8 conceito">
				<div class="col-sm-4 col-md-3">

					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'about-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav about-nav',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>

				</div>
				
				<?php $conceito = get_page_by_path( 'o-conceito', OBJECT, 'page' ); ?>
				<?php if ( $conceito ): ?>
					<div class="col-sm-8 col-md-9 desc">
						<div class="border"></div>
						<h2><?php echo $conceito->post_title; ?></h2>
						<span><?php echo get_excerpt( $conceito->post_content, '450', ' ...' ); ?></span>
						<a href="<?php echo get_permalink( $conceito->ID ); ?>" class="mais"><?php _e( 'Leia mais', 'odin' ); ?></a>
					</div><!-- .desc -->
				<?php endif ?>
			</div><!-- .conceito -->

			<div class="col-md-8 col-sm-12 rede">
				<?php $rede = get_page_by_path( 'rede-internacional', OBJECT, 'page' ); ?>
				<?php if ( $rede ): ?>
					<div class="col-md-4 thumb">
						<a href="<?php echo get_permalink( $rede->ID ); ?>">
							<?php echo get_the_post_thumbnail( $rede->ID, 'thumb-600-300' ); ?>
						</a>
					</div><!-- .thumb -->
					<div class="col-md-8 desc">
						<h2><?php echo $rede->post_title; ?></h2>
						<span><?php echo get_excerpt( $rede->post_content, '400', ' ...' ); ?></span>
						<a href="<?php echo get_permalink( $rede->ID ); ?>" class="mais"><?php _e( 'Leia mais', 'odin' ); ?></a>
					</div><!-- rede -->
				<?php endif ?>
			</div><!-- .rede -->

		</main><!-- #content -->
	</div><!-- #primary -->

	<?php get_template_part( 'pre', 'footer' ); ?>

<?php
get_footer();
