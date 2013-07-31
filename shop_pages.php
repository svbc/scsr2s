<?php
/* Template Name: Shop pages x Template */
?>
<? get_header( 'shop' ); ?>

		<div id="primary">
			<div id="content" role="main" style="margin-top:50px;">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'other_pages' ); ?>

					 <?php /*comments_template( '', true );*/ ?>

				<?php endwhile;  ?>
               <?php get_footer(); ?>
			</div><!-- #content -->
		</div><!-- #primary -->

