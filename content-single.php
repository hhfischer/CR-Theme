<?php
/**
 * @package CloutierRemix2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php cloutierremix2_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail(); ?>
			</a>
		<?php endif; ?>
		
		<?php the_content(); ?>
		
		
		<?php
		// Display author bio if post isn't password protected
		if ( ! post_password_required() ) : ?>
		
		<?php if ( get_the_author_meta('description') != '' ) : ?>       
			<div class="author-meta well well-lg">
				<div class="media">
					<div class="media-object pull-left">
						<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_meta( 'ID' ), 80 ); }?>
					</div>
					<div class="media-body">
						<h5 class="media-heading"><?php the_author_posts_link(); ?></h5>
						<p><?php the_author_meta('description') ?></p>
						<?php
						// Retrieve a custom field value
						$websiteHandle = get_the_author_meta('website');
						$twitterHandle = get_the_author_meta('twitter'); 
 						$fbHandle = get_the_author_meta('facebook');
 						$pintertestHandle = get_the_author_meta('pinterest');
						$instagramHandle = get_the_author_meta('instagram');
						$youtubeHandle = get_the_author_meta('youtube');
						$gHandle = get_the_author_meta('gplus');
						?>
						<p> 
							<?php if ( get_the_author_meta('website') != '' ) : ?>
							<a href="<?php echo $websiteHandle; ?>" target="_blank"><i class="fa fa-globe"></i></a>
							<?php endif; // no twitter handle ?>
							
							<?php if ( get_the_author_meta('twitter') != '' ) : ?>
							<a href="<?php echo $twitterHandle; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
							<?php endif; // no twitter handle ?>

							<?php if ( get_the_author_meta('facebook') != '' ) : ?>
							<a href="<?php echo $fbHandle; ?>" target="_blank"><i class="fa fa-facebook"></i></i></a>
							<?php endif; // no facebook url ?>
							
							<?php if ( get_the_author_meta('pinterest') != '' ) : ?>
							<a href="<?php echo $pinterestHandle; ?>" target="_blank"><i class="fa fa-pinterest"></i></i></a>
							<?php endif; // no facebook url ?>
							
							<?php if ( get_the_author_meta('instagram') != '' ) : ?>
							<a href="<?php echo $instagramHandle; ?>" target="_blank"><i class="fa fa-instagram"></i></i></a>
							<?php endif; // no instagram url ?>
							
							<?php if ( get_the_author_meta('youtube') != '' ) : ?>
							<a href="<?php echo $youtubeHandle; ?>" target="_blank"><i class="fa fa-youtube-play"></i></i></a>
							<?php endif; // no instagram url ?>

							<?php if ( get_the_author_meta('gplus') != '' ) : ?>
							<a href="/<?php echo $gHandle; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
							<?php endif; // no google+ url ?>
						</p>
					</div>
				</div>
			</div><!-- end of #author-meta -->
        <?php endif; // no description, no author's meta ?>

			
		<?php
		//end password protection check 
		endif; ?>
		
		
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