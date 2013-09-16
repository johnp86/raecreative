<?php 
/*
Template Name: left_content
*/
?>
<?php get_header(); ?>
			<div class="content">
				<div class="container">
					<div class="left">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
							endwhile; else: ?>
							<p>Sorry, no posts for this page.</p>
						<?php endif; ?>
					</div>
					<p class="clearfloat">&nbsp;</p>
					</div>
				</div>
			<p class="clearfloat">&nbsp;</p>
<?php get_footer(); ?>