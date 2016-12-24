<?php get_header(); ?>    
		

		
			<!-- Container Start -->
			<div class="container">
				<!-- Row Start -->
				<div class="row">
					<div class="col-md-9 ">
						<div class="rich_editor_text"></div>      
						<div class="element_size_100">
						
							
							
							<div class="postlist blog blog-large lightbox">
							<!-- Blog Start -->


							<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

								 <!-- Blog Post Start -->
								<article class="cls-post-image <?php post_class(); ?>" id="<?php the_ID(); ?>">
								 
									<figure>
										<a href="<?php the_permalink(); ?>">
										<?php 
											the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-responsive' ) ); 
										?>
									  
										<figcaption>
											 <a class="btnreadmore bgcolr" href="">  <em class="fa fa-long-arrow-right"></em>
											 </a>
										</figcaption>
													 
									</figure>

									<!-- Blog Post Thumbnail End -->
									<div class="blog_text webkit">
									
										<div class="calendar-date">
											 <span><?php the_time('M') ?> </span>
											 <time datetime="2014-12-01"><?php the_time('j') ?> </time>
										</div>
										 
										<div class="text">
										
											<h2 class="heading-color cs-post-title"> 
												 <a href="<?php the_permalink(); ?>" class="colrhvr"><?php the_title(); ?></a>
											</h2>
											<ul class="post-options">
												<li>
													<i class="fa fa-user"></i><a href="<?php the_permalink(); ?>"><?php the_author(); ?> </a>                
												</li>
											
												<li>
						                            <i class="fa fa-list"></i>
						                            <?php
												    	$terms = get_terms( 'category' );
												    	foreach ($terms as $key => $term) {
												    		echo '<a href="' . get_category_link( $term->term_id ) . '">' . $term->name .  '</a>';
												    	}		   
													?>                          		
												</li>		  
											</ul>
											<p><?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="cs-read-more colr">read more </a></p>
									   </div>
									   
									</div>
									
								</article>
								<!-- Blog Post End -->
								<?php endwhile; ?>
								 
									<?php else : ?>
									<h3><?php _e('404 Error&#58; Not Found', 'bestblog'); ?></h3>
								<?php endif; ?>	
							
								
								<!-- Blog Post End -->
																   
							</div>

							<!-- Pagination -->
								<?php smoothwiter_pagination(); ?>
							<!-- End Pagination -->
							
						</div>                 
					</div>

					<aside class="col-md-3">

						<div class="widget widget_categories">
							<header class="cs-heading-title">
								<h2 class="cs-section-title">Categories</h2>
							</header>	
							
							<ul>
								<li class="cat-item cat-item-80"><a href="" >Blog</a> (28)</li>
								<li class="cat-item cat-item-1"><a href="" >Nature</a> (11)</li>
								<li class="cat-item cat-item-71"><a href="" >Our Story</a> (14)</li>
								<li class="cat-item cat-item-72"><a href="" >Science</a> (13)</li>
								<li class="cat-item cat-item-6"><a href="" >Statfort</a> (11)</li>
							</ul>
						</div>

						
						
						<div class="widget facebok_widget">
							
							<header class="cs-heading-title">
								<h2 class="cs-section-title">facebook</h2>
							</header>
							
							<style type="text/css" >


							</style>

							<div class="facebook">
								<div class="facebookOuter">
									<div class="facebookInner">
										<div class="fb-like-box" colorscheme="light" data-height="240"  data-width="190" data-href="https://www.facebook.com/envato" data-border-color="#fff" data-show-faces="true"  data-show-border="false" data-stream="false" data-header="false">
										</div>          
									</div>
								</div>
							</div>

							<script>
							</script>

						</div>
							
						<div class="widget widget_gallery">
						
							<header class="cs-heading-title">
								<h2 class="cs-section-title">Our Photos</h2>
							</header>
							
							<ul class="gallery-list lightbox">
							
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
								<li><a  href="" target="_self"><img width='60' height='60' src='<?php echo get_template_directory_uri(); ?>/img/12-stat-fort-uni-150x150.jpg' alt='' /></a></li>
								
							</ul>
						</div>
								 
								 
						<div class="widget widget-recent-blog">
								 
							<header class="cs-heading-title">
								<h2 class="cs-section-title">Recent Posts</h2>
							</header>
							<!-- Recent Posts Start -->
							<!-- Upcoming Widget Start -->

							<article class="">
								<figure>
									<a class='fa fa-hover' href='' ><img src='<?php echo get_template_directory_uri(); ?>/img/02-stat-fort-uni-150x150.jpg' alt='' width='60'></a>
								</figure>
								<div class="text">
									<h6><a class="colrhvr" href="">Choosing the paths of life.</a></h6>	
									<time datetime="2013-08-22">August 22, 2013</time>

								</div>
							</article>                 

							<!-- Upcoming Widget Start -->

							<article class="">
								<figure>
									<a class='fa fa-hover' href='' ><img src='<?php echo get_template_directory_uri(); ?>/img/03-stat-fort-uni-150x150.jpg' alt='' width='60'></a>
								</figure>			 
								<div class="text">
									<h6><a class="colrhvr" href="">What’s up with the Microbiol...</a></h6>	
									<time datetime="2013-08-22">August 22, 2013</time>
								</div>			
							</article>
							
							<!-- Upcoming Widget Start -->
							
							<article class="">

								<figure>
									<a class='fa fa-hover' href='' ><img src='<?php echo get_template_directory_uri(); ?>/img/04-stat-fort-uni-150x150.jpg' alt='' width='60'></a>
								</figure>						 
								<div class="text">
									<h6><a class="colrhvr" href="">Stuyding music at Academy.</a></h6>	
									<time datetime="2013-08-22">August 22, 2013</time>
								</div>

							</article>                 

							<!-- Upcoming Widget Start -->

							<article class="">
								<figure>
									<a class='fa fa-hover' href='' ><img src='<?php echo get_template_directory_uri(); ?>/img/05-stat-fort-uni-150x150.jpg' alt='' width='60'></a>
								</figure>								 
								<div class="text">
									<h6><a class="colrhvr" href="">Who was the founder of our Uni...</a></h6>	
									<time datetime="2013-08-22">August 22, 2013</time>

								</div>				
							</article>                 
							
							<!-- Recent Posts End -->     

						</div>
						
						<div class="widget widget_text">
							<div class="textwidget">
								<a href="">
									<img src="<?php echo get_template_directory_uri(); ?>/img/img-wi1.jpg" alt="" />
								</a>
							</div>
						</div>                            				
					</aside>
													   
										   
				</div>
				<!-- Row End -->
			</div>
		
    

   <?php get_footer(); ?>