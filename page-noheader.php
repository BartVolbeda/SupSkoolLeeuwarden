<?php
/**
 * Template Name: Custom zonder Header (Hatogkrøller)
 *
 * @package WordPress
 * @subpackage hatogkrøller
 */
if ($nirvana_frontpage=="Enable" && is_front_page() && 'posts' == get_option( 'show_on_front' )): get_template_part( 'frontpage' );
else :
?>

<!DOCTYPE html>
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

<?php cryout_body_hook(); ?>

<div id="wrapper" class="hfeed">

    
<div id="main">
		<?php cryout_main_hook(); ?>
	<div  id="forbottom" >
		<?php cryout_forbottom_hook(); ?>

		<div style="clear:both;"> </div>
    
		<section id="container" class="<?php echo nirvana_get_layout_class(); ?>">

			<div id="content" role="main">
			<?php cryout_before_content_hook(); ?>

				<?php get_template_part( 'content/content', 'page'); ?>

			<?php cryout_after_content_hook(); ?>
			</div><!-- #content -->
			<?php nirvana_get_sidebar(); ?>
		</section><!-- #container -->


<?php
endif;
?>
<div style="clear:both;"></div>
	</div> <!-- #forbottom -->


	</div><!-- #main -->
</div><!-- #wrapper -->


<?php	wp_footer(); ?>

</body>
</html>