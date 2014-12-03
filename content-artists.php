<?php
/**
 * @package CloutierRemix2
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
<header class="entry-header">
	<?php the_title( '<h1 class="entry-title page-header">', '</h1>' ); ?>
</header><!-- .entry-header -->

	<div class="entry-content">
	
		<div id="full-width-slider" class="royalSlider heroSlider ">
	  
	  
			<div class="rsContent">
				<img class="rsImg" src="http://localhost:8888/remix/wp-content/uploads/2013/03/image-alignment-1200x4002.jpg" alt="">    
			    <div class="infoBlock  rsAbsoluteEl" style="color:#000;" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
				    <h4>This is a static HTML block</h4>
				    <p>It's always displayed and not animated by slider.</p>
			    </div>
			</div>
			 
			
			 <div class="rsContent">
			    <img class="rsImg" src="http://localhost:8888/remix/wp-content/uploads/2013/03/image-alignment-1200x4002.jpg" alt="">
			    
			    <div class="infoBlock rsABlock infoBlockLeftBlack" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
			      <h4>You can link to this slide by adding #3 to url.</h4>
			      <p><a href="http://dimsemenov.com/plugins/royal-slider/gallery-with-deeplinking/">Learn more</a></p>
			    </div>
			</div>
			  
			<div class="rsContent">
			    <img class="rsImg" src="http://localhost:8888/remix/wp-content/uploads/2013/03/image-alignment-1200x4002.jpg" alt="">
			    <span class="photosBy rsAbsoluteEl" data-fade-effect="" data-move-offset="40" data-move-effect="bottom" data-speed="200">Photos by <a href="http://www.flickr.com/photos/gilderic/">Gilderic</a></span>
			</div>
		
		</div>
	

	
		
		<div class="row">
			<div class="taxonomies">
				<div class="artist-type">
				 <?php echo get_the_term_list( $post->ID, 'artist-type', 'Type of Artist: ', ', ', '' );	?>
				 <?php echo get_the_terms( $post->ID, 'artist-type' );	?>
				 
				</div>
			</div>
			
			 
			
			<div id="gallery-1" class="royalSlider rsDefault">
				<img class="rsImg" src="http://localhost:8888/remix/wp-content/uploads/2013/03/image-alignment-1200x4002.jpg" data-rsTmb="http://localhost:8888/remix/wp-content/uploads/2013/03/image-alignment-150x150.jpg">   <!-- lazy loaded image with thumbnail -->
				<a class="rsImg" href="http://localhost:8888/remix/wp-content/uploads/2013/03/image-alignment-580x300.jpg">image description<img src="http://localhost:8888/remix/wp-content/uploads/2013/03/image-alignment-150x150.jpg" class="rsTmb" /></a>
				<a class="rsImg" href="http://localhost:8888/remix/wp-content/uploads/2013/03/image-alignment-1200x4002.jpg">image description<img src="http://localhost:8888/remix/wp-content/uploads/2013/03/image-alignment-150x150.jpg" class="rsTmb" /></a>
			</div>

		</div> <!-- .row -->

		
		<div class="row">

			<div class="col-md-10 col-lg-10">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail(); ?>
				<?php endif; ?>
			</div>

			<div class="col-md-2 col-lg-2">
				<?php the_content(); ?>
			</div>

		</div> <!-- .row -->

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'cloutierremix2' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->