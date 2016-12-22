<?php 
/* Template Name: Contact Us */
get_header(); ?>

<div class="header_element"></div>
<div class="row">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58312.20096075815!2d89.21486304593506!3d24.012984002223924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe84d98fa5bf3d%3A0xb038902617eb9884!2sPabna!5e0!3m2!1sen!2sbd!4v1481649225699" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="clear"></div>    
			  

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