<?php get_header(); ?>        			 
    <div class="container">
		<!-- Row Start -->
		<div class="row">
			<div class="col-md-12">
				<div class="element_size_100">
					<div class="course-detail">
					 <?php if(have_posts()) : ?>
 
			        <?php while(have_posts())  : the_post(); ?> 
			        
			        <?php the_content(); ?> <?php endwhile; ?> 
			        
			       <?php endif; ?> 
						

					</div>
				</div>
			</div>						   
		</div>
		<!-- Row End -->
	</div>
	<div class="clear"></div>
<?php get_footer(); ?>

