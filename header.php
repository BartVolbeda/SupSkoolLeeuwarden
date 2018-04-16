<?php
/**
 * The Header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Cryout Creations
 * @subpackage nirvana
 * @since nirvana 0.5
 */
 ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php  cryout_meta_hook(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
 	cryout_header_hook();
	wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.10&appId=1870610653268307';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>    
    
<?php cryout_body_hook(); ?>

<div id="wrapper" class="hfeed">
<div id="topbar" ><div id="topbar-inner"><?php do_action(‘wpml_add_language_selector’); ?> <?php cryout_topbar_hook(); ?> </div></div>
<?php cryout_wrapper_hook(); ?>

<div id="header-full">
	<header id="header">
		<div id="masthead">
		<?php cryout_masthead_hook(); ?>
			<div id="branding" role="banner" >
			<div class="imagebox">
				<img class="logoimage" src="<?php echo get_bloginfo('template_directory');?>/images/headers/logo.png" alt="" ></img>
				<img class="handimage" src="<?php echo get_bloginfo('template_directory');?>/images/headers/hand.png" alt="" ></img>
			</div>
				<?php cryout_header_widgets_hook(); ?>
				<div style="clear:both;"></div>
			</div><!-- #branding -->
			<a id="nav-toggle"><span>&nbsp;</span></a>
			<nav id="access" role="navigation">
				<?php cryout_access_hook();?>
			</nav><!-- #access -->
			
			
		</div><!-- #masthead -->
	</header><!-- #header -->
</div><!-- #header-full -->

<div style="clear:both;height:0;"> </div>
<?php cryout_breadcrumbs_hook();?>
<div id="main">
		<?php cryout_main_hook(); ?>
	<div  id="forbottom" >
		<?php cryout_forbottom_hook(); ?>

		<div style="clear:both;"> </div>