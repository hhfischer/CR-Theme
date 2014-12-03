<?php
/**
 * The template for displaying all single posts.
 *
 * @package cloutierremix2
 */

get_header(); ?>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
	  <div class="navbar-header">
      <a class="navbar-brand" href="#mmenu">
        <span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
      </a>
    </div>
    ...
  </div>
</nav>

<div id="full-width-slider" class="royalSlider heroSlider rsMinW">
  
  <div class="rsContent">
    <img class="rsImg" src="http://localhost:8888/remix/wp-content/themes/cloutierremix2/img/full-width/1.jpg" alt="">
    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
      <h4>This is an animated block, add any number of them to any type of slide</h4>
      <p>Put completely anything inside - text, images, inputs, links, buttons.</p>
    </div>
  </div>
  <div class="rsContent">
    <img class="rsImg" src="http://localhost:8888/remix/wp-content/themes/cloutierremix2/img/full-width/2.jpg" alt="">
     <div class="infoBlock  rsAbsoluteEl" style="color:#000;" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
      <h4>This is a static HTML block</h4>
      <p>It's always displayed and not animated by slider.</p>
    </div>
  </div>
 <div class="rsContent">
    <img class="rsImg" src="http://localhost:8888/remix/wp-content/themes/cloutierremix2/img/full-width/3.jpg" alt="">
    <div class="infoBlock rsABlock infoBlockLeftBlack" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
      <h4>You can link to this slide by adding #3 to url.</h4>
      <p><a href="http://dimsemenov.com/plugins/royal-slider/gallery-with-deeplinking/">Learn more</a></p>
    </div>
  </div>
  <div class="rsContent">
    <img class="rsImg" src="http://localhost:8888/remix/wp-content/themes/cloutierremix2/img/full-width/4.jpg" alt="">
    <span class="photosBy rsAbsoluteEl" data-fade-effect="" data-move-offset="40" data-move-effect="bottom" data-speed="200">Photos by <a href="http://www.flickr.com/photos/gilderic/">Gilderic</a></span>
  </div>

</div>

<div class="container">
	
	<a href="#mmenu">example</a>
	
	<div class="row">

	<div id="primary" class="col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
				
			<article class="resume">
			<?php	
				if( get_field( 'resume' ) ): 
			    the_field( 'resume' ); 
				endif;
			?>
			</article>
	
			<?php get_template_part( 'content', 'artists' ); ?>				
			
		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- row -->
</div><!-- container -->
<?php get_footer(); ?>