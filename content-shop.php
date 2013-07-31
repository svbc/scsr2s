<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div id="border-other-l">
    <div id="border-other-r">

	<header class="entry-header-other-pages">
		<div id="bot_Border"></div>
		<h1 class="entry-title-other-pages">
			<?php if (is_search()) : ?>
				<h1 class="page-title"><?php _e('Search Results:', 'jigoshop'); ?> &ldquo;<?php the_search_query(); ?>&rdquo; <?php if (get_query_var('paged')) echo ' &mdash; Page '.get_query_var('paged'); ?></h1>
			<?php else : ?>
				<h1 class="page-title"><?php _e('All Products', 'jigoshop'); ?></h1>
			<?php endif; ?>
		</h1>
		<span id="entry-title-bg"></span>
		<div id="bot_Border" style="margin-top:5px;"></div>
	</header><!-- .entry-header -->

	<div class="entry-content">

        <div class="other-pages-content" style="padding:20px;padding-top:0;">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- content -->

	</div><!-- .entry-content -->

	</div>
	</div>

	<footer class="entry-meta">
		<div id="foot_area_one">
			<div>
				<h1>NEED HELP?</h1>
				<h4>CALL 415-345-9860 OR <a href="">CONTACT US</a></h4>
			</div>
		</div>
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
