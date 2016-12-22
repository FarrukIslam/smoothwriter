<?php 


class smoothwriter_recentpost extends WP_Widget{
	public function __construct(){
		parent::__construct('smoothwriter_recentpost','smoothwriter Recent post Widgets', array(
			'description' => 'Add smoothwriter recent post'
		));
		
	}
	
	// widget output layout
	public function widget($args,$instance){
		
		$title = $instance['title'];
		$numberofpost = $instance['numberofpost'];
		
		
		echo $args['before_widget'].'<div class=" widget-recent-blog">'.
				$args['before_title'].''.$title.''.
				$args['after_title'];
		?>	
		<?php 
			$q = new WP_Query(
				array('posts_per_page' => $numberofpost, 'post_type' => 'post')
				);	
				
			if( $q -> have_posts() ) {
			
			while ( $q -> have_posts() ) : $q -> the_post(); 
		?>
		
		<article class="">		
		<?php
			if(has_post_thumbnail()){ ?>
			<figure>
				<a class='fa fa-hover' href='<?php the_permalink(); ?>' >
				
				<?php the_post_thumbnail( 'recentpostwidget150x150', array( 'class' => 'img-responsive' ) ); ?>
					</a>
			</figure>
				
			<?php 
			}
		?>
			
		    <div class="text">
		        <h6><a class="colrhvr" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>	
				<time datetime="2013-08-22"><?php the_date('F j, Y'); ?></time>
			</div>	
			
		</article>    
		
		
		<?php 
			endwhile; 
			
			} else {
				echo '<h5>'.__( 'No Post added yet!', 'smoothwriter' ).'</h5>';
			}
			// Reset Query
			wp_reset_query();
		?>	
	
		<?php 
		
		echo '</div>'.$args['after_widget'];		
	}
	
	// widget form input 
	public function form($instance){
		
		$title = $instance['title'];
		$numberofpost = $instance['numberofpost'];
		
		?>
			<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title','smoothwriter'); ?></label></p>
			<p><input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>"/></p>
			
			
			<p><label for="<?php echo $this->get_field_id('numberofpost'); ?>"><?php _e('Show Numbers of Post','smoothwriter'); ?></label></p>
			<p><input type="number" class="widefat" id="<?php echo $this->get_field_id('numberofpost'); ?>" name="<?php echo $this->get_field_name('numberofpost'); ?>" value="<?php echo $numberofpost; ?>"/></p>

		<?php
	}
	
	// widget fields data update 
	
	public function update($new_instence,$old_instence){
		$instance = $old_instence;
		
		$instance['title'] = $new_instence['title'];
		$instance['numberofpost'] = $new_instence['numberofpost'];

		return $instance;
		
	}
	
	
}	

function recentpost_smoothwriter_widget(){
	register_widget('smoothwriter_recentpost');
}
add_action('widgets_init','recentpost_smoothwriter_widget');