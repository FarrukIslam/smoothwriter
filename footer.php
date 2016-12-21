</div>
<!-- Content Section End -->
<div class="clear"></div> 

  
<!-- Footer Widgets Start -->
<div id="footer-widgets" class="fullwidth" style=" background: url('<?php echo get_template_directory_uri(); ?>/img/img/footer-bg.jpg') no-repeat scroll center bottom / cover  rgba(0, 0, 0, 0)">
                <!-- Container Start -->
                <div class="container">
                    <!-- Footer Widgets Start -->
                    
                    <?php if (is_active_sidebar('footer-sidebar')) : ?>
				     	<?php dynamic_sidebar( 'footer-sidebar' ); ?>
				     <?php else : ?> 
				     <?php endif; ?>

                </div>
                <!-- Container End -->
				
                <footer id="footer">
                    <div class="container">
                    	<header>
							<a href="<?php bloginfo('home'); ?>">

							<?php $footer_logo = cs_get_option('footer_logo'); ?>
						        <?php if($footer_logo) : ?>
						        <img src="<?php echo $footer_logo; ?>" width="220" height="35" alt="StatFort">        

						      <?php else : ?>
						           <img src="<?php echo get_template_directory_uri(); ?>/img/Writer_Logo-1.png" width="220" height="35" alt="StatFort">        

						          
						      <?php endif; ?>

							</a>
						                       
						</header>
                        <p class="copright">
						<?php $footer_copyright = cs_get_option('copy_right'); ?>
						        <?php if($footer_copyright) : ?>
						        <?php echo $footer_copyright; ?>
						      <?php else : ?>
						           ©2016 Stat Fort Wordpress All rights reserved. 
								 <a href="#">Design by FarrukIslam</a> 
						          
						      <?php endif; ?>

							</a>

                                               
                        </p>
                        <!-- Language Section Start -->

						<div class="language-sec">
						<!-- Wp Language Start -->
						</div>

                        <!-- Language Section End -->
                        <a class="back-to-top bgcolrhvr" id="btngotop" href=""><em class="fa fa-chevron-up"></em></a>
                    </div>
                </footer>
				
				
		</div>
		<!-- Footer Start -->
	<div class="clear"></div>
</div>
<!-- Wrapper End -->


	 
  <?php $ganalytics = cs_get_option('ganalytics'); ?>
      <?php if($ganalytics) : ?>
      <script>
         (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
               (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
               m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
         })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

         ga('create', '<?php echo $ganalytics; ?>', 'auto');
         ga('send', 'pageview');
      </script>
    <?php endif; ?> 
		
	<?php wp_footer(); ?>	
	</body>
</html>
<!-- Columns End -->
