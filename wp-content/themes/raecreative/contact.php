<?php 
/*
	Template Name: contact
*/ 
?>
<?php get_header(); ?>
				<div class="content_incl_footer">
					<div class="content">
						<div class="center">
							<?php
								if( have_posts() ) : while( have_posts() ) : the_post();
									the_content();
								endwhile; else: ?>
								<h2><a href="mailto:studio@raecreative.com">studio@raecreative.com</a></h2>
							<?php endif; ?>
						</div>
					</div>
						<?php
							$args = array('post_type' => 'company_info');
							$comp_info = new WP_Query($args);
							if( $comp_info->have_posts() ) : while ($comp_info->have_posts() ) : $comp_info->the_post(); 
							global $post;
							?>
							
								<div class="gray_center" id="<?php echo $post->post_name; ?>">
									<span class="exit">x</span>
									<?php the_content(); ?>
								</div>
						<?php endwhile; endif;?>
				</div>
			<p class="clearfloat">&nbsp;</p>
		</div>
		<footer>
			<div id="top_footer">
				<p>Rae Creative Ltd</p>
			</div>
			<div id="mid_footer">
				<ul>
					<?php
						while( $comp_info->have_posts() ) : $comp_info->the_post(); ?>
						<li><a href="#" id="<?php echo $post->post_name; ?>-link" class="no_uline"><?php the_title(); ?></a></li>
					<?php
						endwhile;
					?>
				</ul>
			</div>
			<div class="clearfloat" id="bottom_footer">
				<p>All images and content @2013 Rae Creative Ltd</p>
			</div>
		</footer>
<?php get_footer(); ?>