<?php
/* Template Name: Other pages Template */
?>
<? get_header( 'other_pages' ); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'other_pages' ); ?>

					 <?php /*comments_template( '', true );*/ ?>

				<?php endwhile;  ?>
               <?php get_footer(); ?>
			</div><!-- #content -->
		</div><!-- #primary -->

