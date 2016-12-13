<?php 
/* Template Name: Contact Us */
get_header(); ?>



<div class="header_element"></div>
	<div class="row">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58312.20096075815!2d89.21486304593506!3d24.012984002223924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe84d98fa5bf3d%3A0xb038902617eb9884!2sPabna!5e0!3m2!1sen!2sbd!4v1481649225699" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
<div class="clear"></div>    
			  
			  
			  
		<div id="main" role="main">
			<!-- Container Start -->
			<div class="container">
				<!-- Row Start -->
				<div class="row">
					<div class="col-md-9 ">
						<div class="rich_editor_text">
							<h4>Get Ready to Quote</h4>
							<p>Contact with us for your help. We are available 24hours</p>
						</div>	 
		 
						<script type="text/javascript">
								jQuery().ready(function($) {
									var container = $('');
									var validator = jQuery("#frm1").validate({
										messages:{
											contact_name: '',
											contact_email:{
												required: '',
												email:'',
											},
											subject: {
												required:'',
											},
											contact_msg: '',
										},
										errorContainer: container,
										errorLabelContainer: jQuery(container),
										errorElement:'div',
										errorClass:'frm_error',
										meta: "validate"
									});
								});
								function frm_submit1(){
									var $ = jQuery;
									$("#submit_btn1").hide();
									$("#loading_div1").html('<img src="http://chimpgroup.com/wp-demo/statfort/wp-content/themes/statfort/images/ajax-loader.gif" alt="" />');
									$.ajax({
										type:'POST', 
										url: 'http://chimpgroup.com/wp-demo/statfort/wp-content/themes/statfort/page_contact_submit.php',
										data:$('#frm1').serialize(), 
										success: function(response) {
											//$('#frm').get(0).reset();
											$("#loading_div1").html('');
											$("#form_hide1").hide();
											$("#succ_mess1").show('');
											$("#succ_mess1").html(response);
											//$('#frm_slide').find('.form_result').html(response);
										}
									});
								}
						</script>
						
						
						<div class="element_size_100">
							 <header class="cs-heading-title">
								 <h2 class="cs-section-title">Send us a message </h2>
							 </header>
							 <div class="inputforms respond">
								 <div class="textsection">
									<div class="succ_mess" id="succ_mess1" style="display:none;"></div>
								 </div>
								 <div id="form_hide1">
									 <div class="respond fullwidth" id="respond">
									
									 <form id="frm1" name="frm1" method="post" action="j" novalidate="novalidate">   
												   
										 <p class="comment-form-author">
											 <label>Name <span>(required) </span></label>
											 <span class="icon-input">
												<input type="text" name="contact_name" id="contact_name" class="nameinput {validate:{required:true}}" value="">
												<i class="fa fa-user"></i>
											 </span>
										 </p>
										 <p class="comment-form-email">
											 <label>Email <span>(required) </span></label>
											 <span class="icon-input">
												<input type="text" name="contact_email" id="contact_email" class="emailinput {validate:{required:true ,email:true}}" value="">
												<i class="fa fa-envelope"></i>
											 </span>
										 </p>
										 <p class="comment-form-contact">
											 <label>Subject <span>(required) </span></label>
											 <span class="icon-input">
												<input type="text" name="subject" id="subject" class="subjectinput {validate:{required:true}}" value="">
												<i class="fa fa-align-left"></i>
											 </span>
											
										 </p>
										 <p class="comment-form-comment">
											 <label>Message <span>(required) </span></label>
											 <textarea name="contact_msg" id="contact_msg" class="{validate:{required:true}}"></textarea>
											
										 </p>
									 
										 <p class="form-submit">
											 <input type="hidden" value="dum1@chimpgroup.com" name="cs_contact_email">
											 <input type="hidden" value="Email Sent Successfully.Thank you, your message has been submitted to us." name="cs_contact_succ_msg">
											 <input type="hidden" name="bloginfo" value="StatFort">
											 <input type="hidden" name="counter_node" value="1">
											 <button name="submit" id="submit_btn1">Submit </button>
											
										 </p>
										<div id="loading_div1"></div>
										 <p></p>
									 </form>
								 </div>
								 </div>
							  </div>
						</div>
					</div>
						   
						   
						   
						   
					<aside class="col-md-3">
						<div class="widget widget_calendar">
							<header class="cs-heading-title">
								<h2 class="cs-section-title">Weekly Shedule </h2>
							</header>
							<div id="calendar_wrap">
								<table id="wp-calendar">
									<caption>September 2015 </caption>
									 <thead>
										 <tr>
											 <th scope="col" title="Monday">M </th>
											 <th scope="col" title="Tuesday">T </th>
											 <th scope="col" title="Wednesday">W </th>
											 <th scope="col" title="Thursday">T </th>
											 <th scope="col" title="Friday">F </th>
											 <th scope="col" title="Saturday">S </th>
											 <th scope="col" title="Sunday">S </th>
										 </tr>
									 </thead>

									 <tfoot>
										 <tr>
											 <td colspan="3" id="prev"><a href="http://chimpgroup.com/wp-demo/statfort/2013/08/">« Aug </a></td>
											 <td class="pad">&nbsp; </td>
											 <td colspan="3" id="next" class="pad">&nbsp; </td>
										 </tr>
									 </tfoot>

									 <tbody>
										 <tr>
											 <td colspan="1" class="pad">&nbsp; </td><td>1 </td><td>2 </td><td>3 </td><td>4 </td><td>5 </td><td>6 </td>
										 </tr>
										 <tr>
											 <td>7 </td><td id="today">8 </td><td>9 </td><td>10 </td><td>11 </td><td>12 </td><td>13 </td>
										 </tr>
										 <tr>
											 <td>14 </td><td>15 </td><td>16 </td><td>17 </td><td>18 </td><td>19 </td><td>20 </td>
										 </tr>
										 <tr>
											 <td>21 </td><td>22 </td><td>23 </td><td>24 </td><td>25 </td><td>26 </td><td>27 </td>
										 </tr>
										 <tr>
											 <td>28 </td><td>29 </td><td>30 </td>
											 <td class="pad" colspan="4">&nbsp; </td>
										 </tr>
									</tbody>
							</table>
						</div>
					</div>
					
					<div class="widget widget_text">
						<header class="cs-heading-title">
							<h2 class="cs-section-title">Monthly Calendar </h2>
						</header>
						<div class="followus">
							<a title="" href="Facebook URL" data-original-title="Facebook" data-placement="top" target="_blank"><em class="fa fa-facebook-square"></em>Facebook  </a>
							
							<a title="" href="Google-plus URL" data-original-title="Google-plus" data-placement="top" target="_blank"><em class="fa fa-google-plus-square"></em>Google-plus </a>
							
							<a title="" href="Twitter URL" data-original-title="Twitter" data-placement="top" target="_blank"><em class="fa fa fa-twitter-square"></em>Twitter  </a>
							
							<a title="" href="Youtube URL" data-original-title="Youtube" data-placement="top" target="_blank"><em class="fa fa-youtube-square"></em>Youtube  </a>
							
							<a title="" href="Skype URL" data-original-title="Skype" data-placement="top" target="_blank"><em class="fa fa-skype"></em>Skype  </a>
							
							<a title="" href="Instagram URL" data-original-title="Instagram" data-placement="top" target="_blank"><em class="fa fa-instagram"></em>Instagram  </a>
							
							<a title="" href="Foursquare URL" data-original-title="Foursquare" data-placement="top" target="_blank"><em class="fa  fa-foursquare"></em>Foursquare  </a>
						</div>
					</div>                             
				</aside>
													   
										   
				</div>
				<!-- Row End -->
			</div>
		</div>
		<!-- Content Section End -->
		<div class="clear"></div>
    
	

 
<?php get_footer(); ?>