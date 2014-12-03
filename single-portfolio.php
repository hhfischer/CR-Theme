<?php
/**
 * The template for displaying all single posts.
 *
 * @package cloutierremix2
 */

get_header(); ?>

<div class="container">
	<div class="row">

	<div id="primary" class="col-md-9 col-lg-9">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'portfolio' ); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
</div>
<?php get_footer(); ?>