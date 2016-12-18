<?php 

function smoothwriterslider_shortcode_func($atts,$post_ID) {

   extract( shortcode_atts( array(
    'numberpost' => '3',
   ), $atts) );

 ob_start();

?>
<div id="banner">       
<!-- Flex Slider -->
	<div id="flexslider1">
		<div class="flexslider">
			<ul class="slides">


        <?php 

	      $slidersitems = new wp_Query(array(
	        'post_type' => 'sm_slider',
	        'posts_per_page' => $numberpost,
	      ));
	      
       	  while( $slidersitems -> have_posts() ) : $slidersitems -> the_post();

   		 ?>
      

         <?php 
            $post_thumbnail_id = get_post_thumbnail_id($post_ID);
		    $image = wp_get_attachment_image_src($post_thumbnail_id, 'smoothwriterslider1290x560');
		 ?>
          	<li>
				<figure>
					<img src="<?php echo $image[0]; ?>" alt="">   
					<figcaption>
                        <div class="container">
							<h2 class="colr"><?php the_title(); ?></h2>
							<p>
								<?php the_excerpt(); ?>       
							</p>
						</div>
                    </figcaption>
                </figure>
			</li>



        <?php endwhile; ?>  

        	
			</ul>
		</div>
	</div>	
	<!-- Slider height and width -->
</div>
<div class="clear"></div>


 <?php 
 $html = ob_get_contents();
 ob_get_clean();
 return $html;
}

add_shortcode('sw_slider', 'smoothwriterslider_shortcode_func');


//heading style 1

function sw_button_shortcode_func($atts,$post_ID) {

   extract( shortcode_atts( array(
    'text' => 'More FAQ',
    'link' => '#',
   
   ), $atts) );

	ob_start();
	?>
    
    <div class="button">
    <a href="<?php echo $link; ?>" class="big-btn square" target="_self" style=" cursor:pointer; color:#fff ;background-color:#409f74"><?php echo $text; ?></a></div>

  

	 <?php 
	 $html = ob_get_contents();
	 ob_get_clean();
	 return $html;
	}

add_shortcode('sw_button1', 'sw_button_shortcode_func');

//heading style 1

function sw_sectiontitle_shortcode_func($atts,$post_ID) {

   extract( shortcode_atts( array(
    'subtitle' => ' ',
    'title' => 'Section Title',
    'float'   => '',
   ), $atts) );

	ob_start();
	?>
    
    <div class="parallax-fullwidth services-container">
		<header class="cs-heading-title">
			<h2 class="cs-section-title"><?php echo $title; ?></h2>
		</header>
	</div>
	<style>
		.services-container header.cs-heading-title h2 {
	    	float: <?php echo $float; ?>!important;
		}
	</style>

  

	 <?php 
	 $html = ob_get_contents();
	 ob_get_clean();
	 return $html;
	}

add_shortcode('sw_section_title1', 'sw_sectiontitle_shortcode_func');




//heading style 2

function sw_sectiontitle2_shortcode_func($atts,$post_ID) {

   extract( shortcode_atts( array(
    'subtitle' => 'Write Subtitle',
    'title' => 'Section Title',
    'align'   => 'center',
   ), $atts) );

	ob_start();
	?>
    
    <div class="parallax-fullwidth services-container">
		<header class="heading-style-2">
			<h2><?php echo $title; ?></h2>
			<p><?php echo $subtitle; ?></p>
		</header>
	</div>
	<style>
		.header.heading-style-2{
	    	text-align: <?php echo $align; ?>!important;
		}
	</style>

  

	 <?php 
	 $html = ob_get_contents();
	 ob_get_clean();
	 return $html;
	}

add_shortcode('sw_section_title2', 'sw_sectiontitle2_shortcode_func');


//services section 

function sw_service_shortcode_func($atts,$post_ID) {

   extract( shortcode_atts( array(
    'icon' => 'fa-heart-o',
    'title' => 'Service Title',
   ), $atts) );

	ob_start();
	?>
    
   	<article class="service-v1">
		<figure>
			<em class="fa <?php echo $icon; ?>"></em>
		</figure>
		<a href="service_url">
			<h5><?php echo $title; ?></h5>
		</a>
		<p></p>
	</article>

  

	 <?php 
	 $html = ob_get_contents();
	 ob_get_clean();
	 return $html;
	}

add_shortcode('sw_service', 'sw_service_shortcode_func');

//portfolio shortcodes 



function sw_portfolio_shortcode_func($atts,$post_ID) {

   extract( shortcode_atts( array(
    'numberpost' => '6',
   ), $atts) );

 ob_start();

?>
<div class="col-md-12 ">
    <div class="rich_editor_text"></div>
        <div class="postlist blog blog-grid lightbox">
            <!-- Blog Start -->
          <div class="latest-news fullwidth"> 


        <?php 

	      $portfoilositems = new wp_Query(array(
	        'post_type' => 'sm_portfolio',
	        'posts_per_page' => $numberpost,
	      ));
	      
       	  while( $portfoilositems -> have_posts() ) : $portfoilositems -> the_post();

   		 ?>
      

         <?php 
            $post_thumbnail_id = get_post_thumbnail_id($post_ID);
		    $image = wp_get_attachment_image_src($post_thumbnail_id, 'portfilio230x172');
		 ?>
          	
			<article>
			    <figure><a href="<?php the_permalink(); ?>">
			    <img src="<?php echo $image[0]; ?>" alt=""></a>
			    </figure>                            
			    <div class="text fullwidth">
				<!--<ul class="post-categories">
	            	<li>
	                	 <a href="#" rel="tag">Blog</a>, 
	                	 <a href="#" rel="tag">Nature</a>, 
	                	 <a href="#" rel="tag">Statfort</a>
	            	 </li>                                   	
	            </ul>-->
		<?php 
		/*	$portfolio_terms = get_terms( 'portfolio_cat' );

			if ( ! empty( $portfolio_terms ) && ! is_wp_error( $portfolio_terms ) ){
			 echo '<ul class="post-categories">';
			 foreach ( $portfolio_terms as $pterm ) {
			   echo '<li><a href="'.get_term_link($term->slug, $portfolio_terms) .'" rel="tag">' . $pterm->name . '</a></li>';

			 }
			 echo '</ul>';
			}*/
		?>
					         
		            <h2 class="cs-post-title">
		            	<a href="<?php the_permalink(); ?>" class="colrhvr">
							<?php the_title(); ?>
						</a>
		            </h2> 
		            <p class="content-hover"><?php the_excerpt(); ?></p>                 	                  
			    </div>
			</article>


        <?php endwhile; ?>  

        	
		</div>
	</div>
</div>


 <?php 
 $html = ob_get_contents();
 ob_get_clean();
 return $html;
}

add_shortcode('sw_portfolio', 'sw_portfolio_shortcode_func');



/* team memer section */


function smoothwriterteammember_shortcode_func($atts,$post_ID) {

   extract( shortcode_atts( array(
    'heading_title' => 'Our Team Member',
    'numberpost' => '3',
   ), $atts) );

 ob_start();

?>
<div class="element_size_100 teammember-section">
	<header class="cs-heading-title">
		<h2 class="cs-section-title"><?php echo $heading_title; ?></h2>
	</header>
		
    <div class="our_staff our-carousel">
		<div class="center">
			<a id="prev3" href="#" class="prev-btn"><i class="fa fa-long-arrow-left"></i></a>
			<a id="next3" href="#" class="next-btn"><i class="fa fa-long-arrow-right"></i></a>
		</div>
			
        <div class="cycle-slideshow" data-cycle-timeout=4000 data-cycle-fx=carousel data-cycle-slides="article" data-allow-wrap="true" 
               data-cycle-next="#next3" data-cycle-prev="#prev3">


        <?php 

	      $team_member = new wp_Query(array(
	        'post_type' => 'sm_team_member',
	        'posts_per_page' => $numberpost,
	      ));
	      
       	  while( $team_member -> have_posts() ) : $team_member -> the_post();

   		 ?>
      

         <?php 
            $post_thumbnail_id = get_post_thumbnail_id($post_ID);
		    $image = wp_get_attachment_image_src($post_thumbnail_id, 'teammember230x172');
		 ?>

			<article style="border-color: #C70808">
				<figure class="post-img">
					<img src="<?php echo $image[0]; ?>" alt=""<figcaption>
						<a href="" class="btnreadmore bgcolr"><em class="fa fa-long-arrow-right"></em></a>
					</figcaption>
				</figure>
		                                
				<div class="text">
					<h2 class="cs-post-title"><a href="" class="colrhvr"><?php the_title(); ?></a></h2>
					<h6 class="cat-department">Chemistery Department</h6>
					
					<div class="post-options">
						<ul>
							<li>
								<em class="fa fa-envelope-o"></em> 
								<a href="mailto:contact@envato.com">contact@envato.com</a>
							</li>                                                                                 
						</ul>
					</div>
					
				</div>
            </article> 



        <?php endwhile; ?>  

    	</div>
    </div>
</div>  
 <?php 
 $html = ob_get_contents();
 ob_get_clean();
 return $html;
}

add_shortcode('sw_team_member', 'smoothwriterteammember_shortcode_func');


//blog post shortcodes 


function sm_blog_shortcode_func($atts,$post_ID) {

   extract( shortcode_atts( array(
    'numberpost' => '3',
   ), $atts) );

 ob_start();

?>
<div class="postlist blog blog-medium">


        <?php 

	      $blog_item = new wp_Query(array(
	        'post_type' => 'post',
	        'posts_per_page' => $numberpost,
	      ));
	      
       	  while( $blog_item -> have_posts() ) : $blog_item -> the_post();

   		 ?>
      

         <?php 
            $post_thumbnail_id = get_post_thumbnail_id($post_ID);
		    $image = wp_get_attachment_image_src($post_thumbnail_id, 'fontpageblog275x185');
		 ?>
			 <article class="cls-post-image">
					
	            <figure>
					<a href="" >
						<img src="<?php echo $image[0]; ?>" alt="" >
					</a>
					<figcaption>
						<a class="btnreadmore bgcolr" href=""> 
							<em class="fa fa-long-arrow-right"></em>
						</a>
					</figcaption>
											
				</figure>                   
			
			<!-- Blog Post Thumbnail End -->
	            <div class="blog_text webkit">
	                <div class="text">
	                    <h2 class="heading-color cs-post-title"> 
	                        <a href="<?php the_permalink(); ?>" class="colrhvr">
								<?php the_title(); ?>                                    
							</a>
	                    </h2>
	                    <ul class="post-options">
	                        <li>
	                            <i class="fa fa-user"></i>
	                                <a href="<?php the_permalink(); ?>" ><?php the_author(); ?></a>                                        
							</li>
	                                        
							<li class="featured">Featured</li>
	                        <li>
	                            <i class="fa fa-list"></i>
								<a href="" rel="tag">Nature</a> 
							</li>
							
					<p><?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="cs-read-more colr">read more</a></p>
	                </div>
	            </div>
	        </article>



        <?php endwhile; ?>  
</div>



 <?php 
 $html = ob_get_contents();
 ob_get_clean();
 return $html;
}

add_shortcode('sw_blog_post', 'sm_blog_shortcode_func');



//priceing section 


function sm_price_tab_shortcode_func($atts,$post_ID) {

   extract( shortcode_atts( array(
    'heading_title' => 'Our Priceing include',
    'numberpost' => '-1',
   ), $atts) );

 ob_start();

?>


<?php 

  $sm_price = new wp_Query(array(
    'post_type' => 'sm_price_tab',
    'posts_per_page' => $numberpost,
  ));
?> 



<script type="text/javascript">
// $(function(){
//     $('.nav-tabs li').on('click', function(event) {
//         $('.nav-tabs li').removeClass('active'); // remove active class from tabs
//         $(this).addClass('active'); // add active class to clicked tab
//     });
//     $('.nav-tabs li').on('click', function(event) {
//         $('.tab-content div').removeClass('active');
//         $('.tab-content div').addClass('active');
//     });

// });

</script>

<div class="featureTabs">

<div class="tab-nav">
  <div class="container">
    <h2 class="bottom40"><?php echo $heading_title; ?></h2>
    <ul class="list-unstyled row" role="tablist">

<?php while( $sm_price -> have_posts() ) : $sm_price -> the_post(); ?>

<?php 

$meta_data    = get_post_meta( get_the_ID(), 'pricing_tab_option', true );

?>
    		          
    <li role="presentation" class="col-sm-4 col-xs-6">
        <a href="#<?php the_ID(); ?>" aria-controls="Blog Posts" role="tab" data-toggle="tab" aria-expanded="false">
       

         <?php
         	//tab icon
          if( $meta_data['tab_icon']) : ?>
            <i class="fa  <?php echo $meta_data['tab_icon']; ?>"></i>
        <?php else : ?>
            <i class="fa fa-list-alt"></i>
        <?php endif; ?> 


         <?php
         	//tab title 
          if( $meta_data['tab_title']) : ?>
            <?php echo $meta_data['tab_title']; ?>
        <?php else : ?>
           Blog Post
        <?php endif; ?> 

        </a>
    </li>    
		        
<?php endwhile; ?>  
		</ul>
  </div><!-- end container -->
</div><!-- end tab nav -->




 <div class="tab-content">
<?php while( $sm_price -> have_posts() ) : $sm_price -> the_post(); ?>

  <div role="tabpanel" class="tab-pane container" id="<?php the_ID(); ?>">
	  <div class="row">

	    <div class="col-md-2 text-center featureIcon">
	     <?php if( $meta_data['pricing_image']) : ?>
	     	<img src="<?php echo $meta_data['pricing_image']; ?>" class="img-responsive tab-image">
        <?php else : ?>
             <i class="fa fa-list-alt" aria-hidden="true"></i>
        <?php endif; ?>
	     
	    </div>
	    <div class="col-md-6">
	      <h2><?php the_title(); ?></h2>
	      <?php
         	//tab icon
          if( $meta_data['pricing_desc']) : ?>
          	<p><?php echo $meta_data['pricing_desc']; ?></p>
          	
        <?php else : ?>
            <p>Blogs increase customer engagement,</p>
        <?php endif; ?>
	      
	      
	      <p><a href="<?php the_permalink(); ?>" title="" class="btn btn-lg btn-primary">Get Started</a></p>
	    </div>

	    <div class="col-md-4">
	    	<form class="paypal" action="<?php echo get_template_directory_uri(); ?>/inc/payment/payments.php" method="post" id="paypal_form" target="_blank">
				
				

				<input type="hidden" name="cmd" value="_xclick" />
				<div id="pricing-table" class="clear">
				 
				    <div class="plan" id="most-popular">

				    <?php 
						$post_meta  = get_post_meta( get_the_ID(), 'pricing_tab_option', true );
						$pirces =  $post_meta['pricing_option'] ;

						foreach( $pirces as $key => $price ){
						 $val = $price['price'];
						}  
						?>

					<input type="hidden" name="item_amount" value="<?php echo '$'.$val; ?>"  />

	 
					<input type="hidden" name="item_name" value=" <?php
			         	//tab icon
			          if( $meta_data['price_name']) : ?>
			          	<?php echo $meta_data['price_name']; ?>
			          	
				        <?php else : ?>
				            Blog Post
				        <?php endif; ?>"  />


						<h3>
						<?php
				         	//tab icon
				          if( $meta_data['Pricing_title']) : ?>
				          	<?php echo $meta_data['Pricing_title']; ?>
				          	
				        <?php else : ?>
				            Professional
				        <?php endif; ?>
				        <span>$


						<?php 
						$post_meta  = get_post_meta( get_the_ID(), 'pricing_tab_option', true );
						$prices =  $post_meta['pricing_option'] ;

						foreach( $prices as $key => $price ){
						  echo $price['price'];
						}  
						?>


				        </span>

				    </h3>

	 				<?php echo $meta_data['pricing_content_body']; ?>

				     <div class="select-page">
						<h5>Select your Page</t5>	
						<select name="item_number" class="slectpage" id="">
						<?php 
						$post_meta  = get_post_meta( get_the_ID(), 'pricing_tab_option', true );
						$prices =  $post_meta['pricing_option'] ;

						foreach( $prices as $key => $price ){
						  

						  
						  
						  //echo $song['select_price'];
						  ?>
						  <option value="<?php echo $price['select_page_id']; ?>"><?php echo $price['select_name']; ?></option>
						  <?php
						}  
						?>

									
								</select>
						
					</div>  
					<input class="submint-btn signup" type="submit" name="submit" value="Pay With Paypal"/> 
  
				    </div>

				</div>

			</form>

	    </div>
	  </div><!-- end row -->
	</div><!-- end tab pane -->
<?php endwhile; ?>  

	</div>
</div>
    	
 <?php 
 $html = ob_get_contents();
 ob_get_clean();
 return $html;
}

add_shortcode('sm_price_tab', 'sm_price_tab_shortcode_func');










