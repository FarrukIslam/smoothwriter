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
			    <ul class="post-categories">

			    <?php 
			    	$terms = get_terms( 'portfolio_cat' );
			    	foreach ($terms as $key => $term) {
			    		echo '<li>'.$term->name.'</li>';
			    	}
			    ?>
			    	           	                                   	
	            </ul>     
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

			$meta_data    = get_post_meta( get_the_ID(), 'team_member', true );

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
					<h6 class="cat-department"><?php echo $meta_data['regisnation']; ?></h6>
					
					<div class="post-options">
						<ul>

						<?php 
						
						$contact_media =  $meta_data['profile_option'] ;

						foreach( $contact_media as $key => $contact ){
						 
						  
						  ?>
						
							<li>
								<em class="fa <?php echo $contact['icon']; ?>"></em> 
								<a href="#"><?php echo $contact['text_name']; ?></a>
							</li> 
							<?php } ?>                                                                                
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
    'section_title' => 'Our Blog',
   ), $atts) );

 ob_start();

?>

<div class="element_size_100">
    <header class="cs-heading-title">
		<h2 class="cs-section-title float-left"><?php echo $section_title; ?></h2>
	</header>	
	
	<div class="postlist blog blog-medium lightbox">



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
			 <?php if($image) : ?>					
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
				<?php endif; ?>                 
			
			<!-- Blog Post Thumbnail End -->
	            <div class="blog_text webkit">
	                <div class="text">
	                    <h2 class="heading-color cs-post-title"> 
	                        <a href="<?php the_permalink(); ?>" class="colrhvr"><?php the_title(); ?></a>
	                    </h2>
	                    <ul class="post-options">
	                        <li>
	                            <i class="fa fa-user"></i>
	                                <a href="<?php the_permalink(); ?>" ><?php the_author(); ?></a>                                        
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
						<p><?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="cs-read-more colr">read more</a></p>
	                </div>
	            </div>
	        </article>



        <?php endwhile; ?>  
</div>

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
    'order' => 'ASC'
  ));
?> 

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
       
        <div class="tab_menu_icon">
	        <?php
	          if( $meta_data['tab_icon']) : ?>
	            <i class="fa  <?php echo $meta_data['tab_icon']; ?>"></i>
	        <?php else : ?>
	            <i class="fa fa-list-alt"></i>
	        <?php endif; ?>
        </div> 

        <div class="tab_menu_title">
	        <?php
	          if( $meta_data['tab_title']) : ?>
	            <?php echo $meta_data['tab_title']; ?>
	        <?php else : ?>
	           Blog Post
	        <?php endif; ?> 
        </div>

        </a>
    </li>    
		        
<?php endwhile; ?>  
		</ul>
  </div><!-- end container -->
</div><!-- end tab nav -->




 <div class="tab-content">
<?php while( $sm_price -> have_posts() ) : $sm_price -> the_post(); ?>

<?php 

$meta_data    = get_post_meta( get_the_ID(), 'pricing_tab_option', true );

?>
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

	    <div class="col-md-4 col-sm-12 col-xs-12">
	    	<?php if($meta_data['product_id']) : ?>
	    	<?php echo do_shortcode('[products ids="'.$meta_data['product_id'].'"] '); ?>
	    	<?php else : ?>
	    	<?php echo do_shortcode('[sm_price_powerpoint] '); ?>
	    	<?php endif ?>
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







//power point slider

function sm_price_powerpoint_func($atts,$post_ID) {

   extract( shortcode_atts( array(
    'subtitle1' => 'Number of New Slide',
    'subtitle2' => 'Number of Edit Slide',
    'deadline'   => 'Deadline',
   ), $atts) );

	ob_start();
	?>
    <form class="paypal" action="<?php echo get_template_directory_uri(); ?>/inc/payment/payments.php" method="post" id="paypal_form" target="_blank">
		<input type="hidden" name="cmd" value="_xclick" />
		<div id="pricing-table" class="clear">
		 
		    <div class="plan" id="most-popular">
		    				
		       <table class="poweropint">
			       	<tr>
			       		<th><?php echo $subtitle1; ?></th>
			       		<td><input type="text" name="item_number" class="input_pslider"></td>
			       	</tr>
			       	<tr>
			       		<th><?php echo $subtitle2; ?></th>
			       		<td><input type="text" name="item_number2" class="input_pslider"></td>
			       	</tr>
			       	<tr>
			       		<th><?php echo $deadline; ?></th>
			       		<td>
			       			<select name="item_time">
			       				<option value="0">24 Hours</option>
			       				<option value="2">2 Days</option>
			       				<option value="4">3 Days</option>
			       				<option value="6">4-5 Days</option>
			       				<option value="8">6-9 Days</option>
			       				<option value="10">10 Days or more</option>
			       			</select>
			       		</td>
			       	</tr>

		       </table>
		       
		        <input class="submint-btn signup" type="submit" name="submit" value="Pay With Paypal"/> 
		    </div>

		</div>

	</form>

	 <?php 
	 $html = ob_get_contents();
	 ob_get_clean();
	 return $html;
	}

add_shortcode('sm_price_powerpoint', 'sm_price_powerpoint_func');




