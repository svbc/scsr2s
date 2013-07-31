<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
			<div style="float:left; text-align:left;"><span style="margin-right:5px; float:left; font-weight:bold; color:#fff; font-size:13px;">&copy;Santa Clara SR2S | </span><ul><?php wp_list_pages('title_li='); ?></ul></div>
            <div style="float:right; font-weight:bold;font-size:13px;">Website Developed by <a title="Visit iWebMonster.net" target="_blank" href="http://www.iwebmonster.net">iWebMonster.net</a></div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>