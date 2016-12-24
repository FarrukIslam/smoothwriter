<?php 
/* Template Name: Contact Us */
get_header(); ?>

<div class="container">
	<!-- Row Start -->
	<div class="row">
		<div class="col-md-9 ">
			<div class="rich_editor_text">

	        	<?php $contact_content = cs_get_option('contact_content'); ?>
			        <?php if($contact_content) : ?>
			        <?php echo $contact_content; ?>
			    <?php else : ?>
			        <h4>Get Ready to Quote</h4>
					<p>Contact with us for your help. We are available 24hours</p> 
			          
			    <?php endif; ?>
				
			</div>	 

			<div class="element_size_100">
				 <header class="cs-heading-title">
					 <h2 class="cs-section-title">Send us a message </h2>
				 </header>
				 <div class="inputforms respond">
					 <div id="form_hide1">
						 <div class="respond fullwidth" id="respond">
						
						 <form id="frm1" method="post">   
									   
							 <p class="comment-form-author">
								 <label>Name <span>(required) </span></label>
								 <span class="icon-input">
									<input type="text" name="contact_name" id="contact_name" class="nameinput">
									<i class="fa fa-user"></i>
								 </span>
							 </p>
							 <p class="comment-form-email">
								 <label>Email <span>(required) </span></label>
								 <span class="icon-input">
									<input type="text" name="contact_email" id="contact_email" class="emailinput" value="">
									<i class="fa fa-envelope"></i>
								 </span>
							 </p>
							 <p class="comment-form-contact">
								 <label>Subject <span>(required) </span></label>
								 <span class="icon-input">
									<input type="text" name="subject" id="subject" class="subjectinput" value="">
									<i class="fa fa-align-left"></i>
								 </span>
								
							 </p>
							 <p class="comment-form-comment">
								 <label>Message <span>(required) </span></label>
								 <textarea name="contact_msg" id="contact_msg" class=""></textarea>
								
							 </p>
						 
							 <p class="form-submit">
								 <button name="submit" id="submit_btn1">Submit </button>
								
							 </p>
						 </form>
					 </div>
					 </div>
				  </div>
			</div>
		</div>
			   
			   
		<?php get_sidebar(); ?>
										   
							   
	</div>
	<!-- Row End -->
</div>

<!-- Content Section End -->
<div class="clear"></div>
    
	

 
<?php get_footer(); ?>