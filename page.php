<?php get_header(); ?>        			 
    <div class="container">
		<!-- Row Start -->
		<div class="row">
			<div class="col-md-12">
				<div class="element_size_100">
					<div class="course-detail">
					<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
					 <article>
						<figure class="detail_figure">
							<?php the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-responsive' ) ); ?>
						</figure>
						<?php the_content(); ?>
						<div class="clear"></div>
									
					 </article>
					 <?php endwhile; ?>
						<?php else : ?>
							  <h3><?php _e('404 Error&#58; Not Found', 'smoothwriter'); ?></h3>
						<?php endif; ?>

					</div>
				</div>
			</div>						   
		</div>
		<!-- Row End -->
	</div>
	<div class="clear"></div>
<?php get_footer(); ?>

