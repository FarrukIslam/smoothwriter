<?php get_header(); ?>

<div class="container">
    <!-- Row Start -->
    <div class="row">
        <div class="col-md-9 ">
		    <div class="rich_editor_text"></div>
		    <div class="element_size_100">

				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<div class="blog blog_detail">
		        <article class="cls-post-image ">
		            <figure class="detail_figure">
		            	<?php the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-responsive' ) ); ?>
		            </figure>                                                             
		            <ul class="post-options">
		                                	
		                <li><i class="fa fa-calendar"></i><time><?php the_time('F j, Y') ?></time></li>
		                <li><i class="fa fa-user"></i><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></li>  
						<li>
                            <i class="fa fa-list"></i>
                            <?php
						    	$terms = get_terms( 'category' );
						    	foreach ($terms as $key => $term) {
						    		echo '<a href="' . get_category_link( $term->term_id ) . '">' . $term->name .  '</a>';
						    	}		   
							?>                          		
						</li>	                                 
		                <li><i class="fa fa-comment-o"></i><a href="<?php the_permalink(); ?>"><?php comments_popup_link('No Comment', '% Comment', 'bestblog'); ?></a>   
		                </li>
		            </ul>
		            <div class="detail_text rich_editor_text">
		            	<?php the_content(); ?>

		            </div>
		        </article>
		        <!-- Post tags Section -->
		        <div class="post-tags">
		            <ul>
		                <li><i class="fa fa-tags"></i>
		                <?php
							echo get_the_tag_list('<a>','</a> <a> ','</a>');
									?>
						</li>      
		            </ul>
		        </div>

		        <?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>
		    </div>
			<?php endwhile; ?>
			<?php else : ?>
				  <h3><?php _e('404 Error&#58; Not Found', 'smoothwriter'); ?></h3>
			<?php endif; ?>
		    </div>
		</div>

		<?php get_sidebar(); ?>	
	 </div>
<!-- Row End -->
</div>

<?php get_footer(); ?>