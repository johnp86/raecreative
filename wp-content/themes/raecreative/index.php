<?php get_header(); ?>
			<div class="content">
				<div id="home_slider">
					<ul id="home_images">
						<?php
							$args = array( 
								'post_type' => 'home_page_slider' 
								);
							$slides = new WP_Query( $args );
							while ( $slides->have_posts() ) : $slides->the_post();
							?>
							
								<li><?php the_post_thumbnail("home_slides") ?></li>
							
							<?php endwhile; ?>
					</ul>
				</div>
				</div>
				<p class="clearfloat">&nbsp;</p>
				
				<span class="webaddress">www.raecreative.com</span>
<?php get_footer() ?>