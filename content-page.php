<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style=" padding:0;">
	<header class="entry-header">
    <?php the_post_thumbnail( 'large' );?>
		<h1 class="entry-title" ><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content" style="padding-top:10px;">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
