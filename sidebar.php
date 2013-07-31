<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
        <aside class="widget widget_text" id="text-2"><img src="<?php echo get_template_directory_uri(); ?>/images/srs2-logo.gif" /></aside>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
            <aside class="widget widget_text" id="text-2">
            <a target="_blank" title="Visit Website" href="http://santaclaraca.gov/"><img style="padding-right:40px; padding-left:20px;" src="<?php echo get_template_directory_uri(); ?>/images/santaclara-city.jpg" /></a>
           <a target="_blank" title="Visit Website" href="http://www.santaclarausd.org/"> <img src="<?php echo get_template_directory_uri(); ?>/images/scusd-logo.png" /></a>
           </aside>
             <aside class="widget widget_text" id="text-2"><iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FSantaClaraSR2S&amp;width=313&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:313px; height:290px;" allowTransparency="true"></iframe></aside>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>