<?php
/**
 * @package CloutierRemix2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php cloutierremix2_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		
		
		
		
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail(); ?>
			</a>
		<?php endif; ?>
		
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'cloutierremix2' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'cloutierremix2' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php cloutierremix2_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->