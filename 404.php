<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<div id="primary" class="<?php echo odin_classes_page_full(); ?>">
		<main id="main-content" class="site-main erro-404" role="main">

			<div class="col-md-3 thumb"></div>
			<div class="col-md-9">

				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Not Found', 'odin' ); ?></h1>
				</header>

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'odin' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
