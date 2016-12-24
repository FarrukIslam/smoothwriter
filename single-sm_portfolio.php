<?php get_header(); ?>
<div class="container">
	<!-- Row Start -->
	<div class="row">
		<div class="col-md-12">
		
			<div class="element_size_100">
				<div class="event  event-detail">

				<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?> 
					<article>
						<div class="detail_figure"></div>                                 
						<div class="detail_inner">
						<?php 
							if ( has_post_thumbnail() ) {
								$profile_thumb = wp_get_attachment_url( get_post_thumbnail_id());
						?>
	    				<figure>
							<img  width="230" height="172" src="<?php echo $profile_thumb; ?>"/>                                     
						</figure>
					    <?php    } ?>
							
							<div class="text">
							<ul class="post-categories">
						    	<li>
									<?php
							    	$terms = get_terms( 'portfolio_cat' );
							    	foreach ($terms as $key => $term) {
							    		echo '<a href="' . get_category_link( $term->term_id ) . '">' . $term->name .  '</a>';
							    	}		   
									?>
							
				            	 </li>                                   	
				            </ul> 
								<div class="post-options">
									<p><?php the_title(); ?></p>
								</div>
							</div>
						
							<div class="detail_text rich_editor_text">
								<?php the_content(); ?>
							</div>
							
					</article>
					<?php endwhile; ?> 
				<?php endif; ?>	

				</div>
			</div>
		
		</div>						   
							   
	</div>
	<!-- Row End -->
</div>

<div class="clear"></div>
<?php get_footer(); ?>