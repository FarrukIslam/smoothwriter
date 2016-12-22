<?php get_header(); ?>

<div class="container">
    <!-- Row Start -->
    <div class="row">
        <div class="col-md-9 ">
		    <div class="rich_editor_text"></div>
		    <div class="element_size_100">
		    		
				<h1 class="page-title-archive"> 
							
					<?php printf( __( 'Search Results for: %s', 'smoothwriter' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h1>

				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<div class="blog blog_detail">
		        <article class="cls-post-image ">
		            <figure class="detail_figure">
		            	<?php the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-responsive' ) ); ?>
		            </figure>                                                             
		            <ul class="post-options">
		                                	
		                <li><i class="fa fa-calendar"></i><time><?php the_time('F j, Y') ?></time></li>
		                <li><i class="fa fa-user"></i><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></li>
		                
						<li><i class="fa fa-align-justify"></i>
							<?php
								echo get_the_tag_list('<a>','</a> <a> ','</a>');
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