<?php get_header(); ?>  

<div class="container">
	<!-- Row Start -->
	<div class="row">
		<div class="col-md-12 ">
			<div class="rich_editor_text"></div>    
			<div class="element_size_100">
				<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?> 
				<header class="cs-heading-title">
					<h2 class="cs-section-title float-left"><?php the_title(); ?></h2>
				</header>

				<div class="event eventlisting">
				
					<article class="events">
					
						<figure>
							<?php if( $meta_data['pricing_image']) : ?>
					     		<img src="<?php echo $meta_data['pricing_image']; ?>" class="img-responsive tab-image">
				       		<?php endif; ?>
						</figure>
						
						<div class="text">
							<div class="event-texttop">
								<h2 class="cs-post-title">
								<?php $meta_data=get_post_meta( get_the_ID(), 'pricing_tab_option', true );
								    echo $meta_data['tab_title']; 
								?>
								</h2>
								<ul class="post-categories">

									<?php
										$cat_value = array(
											'type'                     => 'product',
											'child_of'                 => 0,
											'parent'                   => '',
											'orderby'                  => 'name',
											'order'                    => 'ASC',
											'hide_empty'               => 1,
											'hierarchical'             => 1,
											'exclude'                  => '',
											'include'                  => '',
											'number'                   => '',
											'taxonomy'                 => 'product_cat',
											'pad_counts'               => false 

										); 
										
										$categories = get_categories( $cat_value );
										if($categories):
											foreach($categories as $cat) {
												echo '<li><a href="' . get_category_link( $cat->term_id ) . '">' . $cat->name . '</a></li>';
											}
										endif;	
									?>
								</ul>
							</div>
							<div class="post-options">
								<?php the_excerpt(); ?>
							</div>
						</article>
					</div>
					<?php endwhile; ?> 
				<?php endif; ?>	
			</div>                  
		</div>
	</div>
	<!-- Row End -->
</div>

<div class="clear"></div>
<?php get_footer(); ?>