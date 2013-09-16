<?php 
/*
Template Name: left_content_with_scroller
*/
?>
<?php get_header(); ?>
			<div class="content">
				<div class="container">
					<div class="left">
							<?php 
								$args = array(
									'post_type' => 'client_list'
								);
								$clients = new WP_Query( $args );
								?>
									<div class="scroll-pane">
								<?php
								while ( $clients->have_posts() ) : $clients->the_post(); ?>
									
									<div class="client_item"><?php the_post_thumbnail("client_logo") ?></div>
							
							<?php
								endwhile;
							 ?>
							 <p class="clear">&nbsp;</p>
						</div>
					</div>
					<p class="clearfloat">&nbsp;</p>
				</div>
				
			</div>
			<p class="clearfloat">&nbsp;</p>
<?php get_footer();  ?>