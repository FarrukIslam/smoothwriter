<?php get_header(); ?>

<div class="container">
    <!-- Row Start -->
    <div class="row">
        <div class="col-md-9 ">
		    <div class="rich_editor_text"></div>
		    <div class="element_size_100">
		    	<h1 class="page-title-archive"> 
			
					<?php _e('Showing Archives for:','smoothwriter'); 
						
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', 'smoothwriter' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'smoothwriter' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'smoothwriter' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'smoothwriter' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'smoothwriter' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'smoothwriter');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'smoothwriter' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'smoothwriter' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'smoothwriter' );

						else :
							_e( 'Archives', 'smoothwriter' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>

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
		                <li><i class="fa fa-comment-o"></i><a href="<?php the_permalink(); ?>"><?php comments_popup_link('No Comment', '% Comment', 'smoothwriter'); ?></a>   
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