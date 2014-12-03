<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bootstrapwp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	
<a href="#menu">DEMO</a>



<?php if (has_nav_menu('mmenu', 'cloutierremix2')) { ?>
    <nav role="navigation" id="menu">
        <?php wp_nav_menu(array(
          'container'       => '',
          'menu_class'      => 'mmenu',
          'theme_location'  => 'mmenu')
        ); 
        ?>
    </nav>
	<?php } ?>
	
	
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

	
		<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
				      <a class="navbar-brand" href="#mmenu">
				        <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				      </a>
    			</div>
  			</div>
  		</nav>

				
	</header><!-- #masthead -->

	<div id="content" class="site-content">