<?php get_header(); ?> 

<div class="container">
	<div class="row">
	    <div class="col-md-2 text-center featureIcon">
	      <i class="fa fa-list-alt" aria-hidden="true"></i>
	    </div>

	    <div class="col-md-6">
	      <h2>Ask our content writers about <strong>blog posts</strong></h2>
	      <p>Blogs increase customer engagement, promote products or services, build a following, and promote interaction with existing and potential customers.</p>
	      
	      <p><a href="/pricing#blog-posts" title="" class="btn btn-lg btn-primary">Get Started</a></p>
	    </div>

	    <div class="col-md-4 col-sm-12 col-xs-12">
	    	<form class="paypal" action="<?php echo get_template_directory_uri(); ?>/inc/payment/payments.php" method="post" id="paypal_form" target="_blank">
				<input type="hidden" name="cmd" value="_xclick" />
				<!-- <input type="text" name="no_note" value="1" /> -->
				<!-- <input type="text" name="lc" value="UK" /> -->
				<!-- <input type="text" name="currency_code" value="GBP" /> -->
				<!-- <input type="text" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" /> -->
				<!-- <input type="text" name="first_name" value="Customer's First Name"  />
				<input type="text" name="last_name" value="Customer's Last Name"  /> -->
				<!-- <input type="text" name="payer_email" value="customer@example.com"  /> -->
				<!-- <input type="text" name="item_number" value="123456" / > -->
				<!-- <input type="submit" name="submit" value="Submit Payment"/> -->
			



				<input type="hidden" name="cmd" value="_xclick" />
				<div id="pricing-table" class="clear">
				 
				    <div class="plan" id="most-popular">
				    				
				       <table class="poweropint">
					       	<tr>
					       		<th>Select Slider</th>
					       		<td><input type="text" name="item_number" class="input_pslider"></td>
					       	</tr>
					       	<tr>
					       		<th>Select Edit Slider</th>
					       		<td><input type="text" name="item_number2" class="input_pslider"></td>
					       	</tr>
					       	<tr>
					       		<th>Dedline</th>
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
		

	    </div>



	</div><!-- end row -->
</div>
<div class="clear"></div>
<?php get_footer(); ?>

