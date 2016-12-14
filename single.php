<?php get_header(); ?>


<div id="main" role="main">
<!-- Container Start -->
    <div class="container">
        <!-- Row Start -->
        <div class="row">
        <div class="col-md-9 ">
		    <div class="rich_editor_text"></div>
		    <div class="element_size_100">

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
                          
        <div id="comments">
			<header class="cs-heading-title">
				<h2 class="cs-section-title">4 Comments</h2>
			</header>
	         <ul>
                    
	<li class="comment even thread-even depth-1" id="li-comment-155">

 		<div class="thumblist" id="comment-155">

        	<ul>

                <li>

                    <figure>

                        <a href="#"><img alt="" src="http://0.gravatar.com/avatar/0b64e37a0cea43f132a4506216287a33?s=50&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/0b64e37a0cea43f132a4506216287a33?s=100&amp;d=mm&amp;r=g 2x" class="avatar avatar-50 photo" height="50" width="50" data-pagespeed-url-hash="2850427502" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>

                    </figure>

                     <div class="text">

                      <header>

                            <h5>Fiona lara</h5>
                            <time>September 24, 2013 - 12:42 pm</time>
							
                            <a rel="nofollow" class="comment-reply-link" href="http://chimpgroup.com/wp-demo/statfort/education-standard-in-europe/?replytocom=155#respond" onclick="return addComment.moveForm( &quot;comment-155&quot;, &quot;155&quot;, &quot;respond&quot;, &quot;2788&quot; )" aria-label="Reply to Fiona lara">reply</a>
                            
                      </header>

                      <p>Nam viverra odio nec arcu vehicula in facilisis felis iaculis. Aliquam ornare, libero sit amet malesuada rhoncus, nibh risus aliquam enim, eu accumsan mauris nulla et velit. Sed sit amet feugiat diam ibero sit amet malesuada rhoncus, nibh risus aliquam enim, eu accumsan mauris nulla et velit. Sed sit amet feugiat diam.</p>

                    </div>

                </li>

            </ul>

        </div>

     </li>

	<ul class="children">

	<li class="comment odd alt depth-2" id="li-comment-156">

 		<div class="thumblist" id="comment-156">

        	<ul>

                <li>

                    <figure>

                        <a href="#"><img alt="" src="http://2.gravatar.com/avatar/52f743ca980df8104df02359cfe9c9e0?s=50&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/52f743ca980df8104df02359cfe9c9e0?s=100&amp;d=mm&amp;r=g 2x" class="avatar avatar-50 photo" height="50" width="50" data-pagespeed-url-hash="1241961387" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>

                    </figure>

                     <div class="text">

                      <header>

                            <h5>David Arora</h5>
                            <time>September 24, 2013 - 12:43 pm</time>
							
                            <a rel="nofollow" class="comment-reply-link" href="http://chimpgroup.com/wp-demo/statfort/education-standard-in-europe/?replytocom=156#respond" onclick="return addComment.moveForm( &quot;comment-156&quot;, &quot;156&quot;, &quot;respond&quot;, &quot;2788&quot; )" aria-label="Reply to David Arora">reply</a>
                            
                      </header>

                      <p>Nam viverra odio nec arcu vehicula in facilisis felis iaculis. Aliquam ornare, libero sit amet malesuada rhoncus, nibh risus aliquam enim, eu accumsan mauris nulla et velit. Sed sit amet feugiat diam ibero sit amet malesuada rhoncus,</p>

                    </div>

                </li>

            </ul>

        </div>

     </li>

	<ul class="children">

	<li class="comment even depth-3" id="li-comment-158">

 		<div class="thumblist" id="comment-158">

        	<ul>

                <li>

                    <figure>

                        <a href="#"><img alt="" src="http://0.gravatar.com/avatar/cc9c72aefba075027f4a1d5321da59af?s=50&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/cc9c72aefba075027f4a1d5321da59af?s=100&amp;d=mm&amp;r=g 2x" class="avatar avatar-50 photo" height="50" width="50" data-pagespeed-url-hash="3113035245" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>

                    </figure>

                     <div class="text">

                      <header>

                            <h5>Alax Price</h5>
                            <time>September 24, 2013 - 12:45 pm</time>
							
                            <a rel="nofollow" class="comment-reply-link" href="http://chimpgroup.com/wp-demo/statfort/education-standard-in-europe/?replytocom=158#respond" onclick="return addComment.moveForm( &quot;comment-158&quot;, &quot;158&quot;, &quot;respond&quot;, &quot;2788&quot; )" aria-label="Reply to Alax Price">reply</a>
                            
                      </header>

                      <p>Nam viverra odio nec arcu vehicula in facilisis felis idculis. Aliquam ornare, libero sit amet malesuada rhoncus, nibh risus aliquam enim, eu accumsan mauris nulla et velit. Sed sit amet feugiat diam ibero sit amet malesuada rhoncus, nibh risus aliquam enim, eu accumsan mauris nulla et velit. Sed sit amet feugiat diam.</p>

                    </div>

                </li>

            </ul>

        </div>

     </li>

	<!-- #comment-## -->
</ul><!-- .children -->
<!-- #comment-## -->
</ul><!-- .children -->


	<!-- #comment-## -->
                </ul>
				                
							</div>
			
 							<div id="respond" class="comment-respond">
			<h3 id="reply-title" class="comment-reply-title">Leave a Comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="/wp-demo/statfort/education-standard-in-europe/#respond" style="display:none;">Cancel reply</a></small></h3>				<form action="http://chimpgroup.com/wp-demo/statfort/wp-comments-post.php" method="post" id="commentform" class="comment-form">
					<p class="comment-form-comment fullwidth"><label for="comment">Comment: <span>(required)</span></label><textarea id="comment" name="comment" class="commenttextarea" rows="4" cols="39"></textarea></p><!-- #form-section-comment .form-section --><p class="comment-notes">
                            </p>
<p class="comment-form-author"><label for="author">Name<span>(required)</span></label><input id="author" name="author" class="nameinput" type="text" value="" size="30" tabindex="1"></p><!-- #form-section-author .form-section -->
<p class="comment-form-email"><label for="email">Email<span>(required)</span></label><input id="email" name="email" class="emailinput" type="text" value="" size="30" tabindex="2"></p><!-- #form-section-email .form-section -->
<p class="comment-form-website"><label for="url">Website<span></span></label><input id="url" name="url" type="text" class="websiteinput" value="" size="30" tabindex="3"></p><!-- #<span class="hiddenSpellError" pre="">form-section-url</span> .form-section -->
<p class="form-submit"><input name="submit" type="submit" id="submit-comment" class="submit" value="Submit"> <input type="hidden" name="comment_post_ID" value="2788" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="0">
</p>				</form>
					</div><!-- #respond -->
						
                      <!-- Blog Post End -->
                     </div>


<?php endwhile; ?>
<?php else : ?>
	  <h3><?php _e('404 Error&#58; Not Found', 'smoothwriter'); ?></h3>
<?php endif; ?>



				    </div>
				</div>

				<aside class="col-md-3">
				    <div class="widget widget_calendar">
				        <header class="cs-heading-title">
				            <h2 class="cs-section-title">Weekly Shedule</h2>
				        </header>
				        <div id="calendar_wrap" class="calendar_wrap">
				            <table id="wp-calendar">
				                <caption>December 2016</caption>
				                <thead>
				                    <tr>
				                        <th scope="col" title="Monday">M</th>
				                        <th scope="col" title="Tuesday">T</th>
				                        <th scope="col" title="Wednesday">W</th>
				                        <th scope="col" title="Thursday">T</th>
				                        <th scope="col" title="Friday">F</th>
				                        <th scope="col" title="Saturday">S</th>
				                        <th scope="col" title="Sunday">S</th>
				                    </tr>
				                </thead>

				                <tfoot>
				                    <tr>
				                        <td colspan="3" id="prev"><a href="http://chimpgroup.com/wp-demo/statfort/2013/08/">« Aug</a>
				                        </td>
				                        <td class="pad">&nbsp;</td>
				                        <td colspan="3" id="next" class="pad">&nbsp;</td>
				                    </tr>
				                </tfoot>

				                <tbody>
				                    <tr>
				                        <td colspan="3" class="pad">&nbsp;</td>
				                        <td>1</td>
				                        <td>2</td>
				                        <td>3</td>
				                        <td>4</td>
				                    </tr>
				                    <tr>
				                        <td>5</td>
				                        <td>6</td>
				                        <td>7</td>
				                        <td>8</td>
				                        <td>9</td>
				                        <td id="today">10</td>
				                        <td>11</td>
				                    </tr>
				                    <tr>
				                        <td>12</td>
				                        <td>13</td>
				                        <td>14</td>
				                        <td>15</td>
				                        <td>16</td>
				                        <td>17</td>
				                        <td>18</td>
				                    </tr>
				                    <tr>
				                        <td>19</td>
				                        <td>20</td>
				                        <td>21</td>
				                        <td>22</td>
				                        <td>23</td>
				                        <td>24</td>
				                        <td>25</td>
				                    </tr>
				                    <tr>
				                        <td>26</td>
				                        <td>27</td>
				                        <td>28</td>
				                        <td>29</td>
				                        <td>30</td>
				                        <td>31</td>
				                        <td class="pad" colspan="1">&nbsp;</td>
				                    </tr>
				                </tbody>
				            </table>
				        </div>
				    </div>
				    <div class="widget widget_text">
				        <header class="cs-heading-title">
				            <h2 class="cs-section-title">Monthly Calendar</h2>
				        </header>
				        <div class="followus">
				            <a title="" href="Facebook URL" data-original-title="Facebook" data-placement="top" target="_blank">


				                <em class="fa fa-facebook-square"></em> Facebook </a>
				            <a title="" href="Google-plus URL" data-original-title="Google-plus" data-placement="top" target="_blank">


				                <em class="fa fa-google-plus-square"></em> Google-plus </a>
				            <a title="" href="Twitter URL" data-original-title="Twitter" data-placement="top" target="_blank">


				                <em class="fa fa fa-twitter-square"></em> Twitter </a>
				            <a title="" href="Youtube URL" data-original-title="Youtube" data-placement="top" target="_blank">


				                <em class="fa fa-youtube-square"></em> Youtube </a>
				            <a title="" href="Skype URL" data-original-title="Skype" data-placement="top" target="_blank">


				                <em class="fa fa-skype"></em> Skype </a>
				            <a title="" href="Instagram URL" data-original-title="Instagram" data-placement="top" target="_blank">


				                <em class="fa fa-instagram"></em> Instagram </a>
				            <a title="" href="Foursquare URL" data-original-title="Foursquare" data-placement="top" target="_blank">


				                <em class="fa  fa-foursquare"></em> Foursquare </a>
				        </div>
				    </div>
				</aside>
		                    
						      
                                               
             					   
             </div>



            <!-- Row End -->
        </div>
	</div>
<?php get_footer(); ?>