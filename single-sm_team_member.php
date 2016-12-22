<?php get_header(); ?>         

<!-- Container Start -->
<div class="container">
	<!-- Row Start -->
	<div class="row">
		<div class="col-md-8">	
			<div class="element_size_100">
				<div class="event  event-detail">
				<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?> 
	        
        			<article>
						<div class="detail_figure"></div>                   
						<div class="detail_inner">
							<div class="teacher-details">		  
								<?php the_content(); ?> 
							</div>
						</div>
					</article>

				</div>
			</div>
		</div>

		<div class="col-md-4 pull-right">
				
			<?php 
				if ( has_post_thumbnail() ) {
					$profile_thumb = wp_get_attachment_url( get_post_thumbnail_id() ,'teammember500x500');
			?>
			<figure class="detail_figure">
				<img src="<?php echo $profile_thumb; ?>"/>                                     
			</figure>
		    <?php    } ?>

						
			<div class="portfolio-detail-sidebar">
				<h6><?php the_title(); ?> </h6>
				<p><?php the_excerpt(); ?></p> 

				<ul class="profile-cat">
					<li>
				                                      	 
					<?php
						$cat_value = array(
							'type'                     => 'sm_team_member',
							'child_of'                 => 0,
							'parent'                   => '',
							'orderby'                  => 'name',
							'order'                    => 'ASC',
							'hide_empty'               => 1,
							'hierarchical'             => 1,
							'exclude'                  => '',
							'include'                  => '',
							'number'                   => '',
							'taxonomy'                 => 'sm_team_member_cat',
							'pad_counts'               => false 

						); 
						
						$categories = get_categories( $cat_value );
						if($categories):
							foreach($categories as $cat) {
								echo '<a href="' . get_category_link( $cat->term_id ) . '">' . $cat->name . '</a>';
							}
						endif;	
					?>
					</li>  
				</ul>	
					
				 <ul>

				 <?php 
				
				$contact_media =  $meta_data['profile_option'] ;

				foreach( $contact_media as $key => $contact ){ ?>
					<li>
						<span class="icon-stack pull-left">
							<em class="icon-circle icon-stack-base"></em>
							<em class="fa <?php echo $contact['icon']; ?>"></em>
						</span>
						
						<div class="text">
							   <span><?php echo $contact['title_name']; ?> </span>
							   <p><?php echo $contact['text_name']; ?></p>
						</div>
						
					</li>
				<?php } ?> 
					
				</ul>
			</div>
	 <!-- Share Post End -->
		</div>
		<?php endwhile; ?> 
    
  	<?php endif; ?>					   
</div>
<!-- Row End -->
</div>

<div class="clear"></div>
    
<?php get_footer(); ?>