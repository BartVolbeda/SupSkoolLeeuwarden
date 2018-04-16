<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package Cryout Creations
 * @subpackage nirvana
 * @since nirvana 0.5
 */
?>	<div style="clear:both;"></div>
	</div> <!-- #forbottom -->



	<footer id="footer" role="contentinfo">
		<div id="colophon">
<div class="likebox">              
	<div class="fb-like" data-href="https://www.facebook.com/supskoolleeuwarden" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true" data-colorscheme="light"></div>	
			<?php get_sidebar( 'footer' );?>
</div>			
		</div><!-- #colophon -->

		<div id="footer2">
			<div id="footer2-inside">

			<?php cryout_footer_hook(); ?>
			</div> <!-- #footer2-inside -->
		</div><!-- #footer2 -->

	</footer><!-- #footer -->

	</div><!-- #main -->
</div><!-- #wrapper -->


<?php	wp_footer(); ?>

</body>
</html>
