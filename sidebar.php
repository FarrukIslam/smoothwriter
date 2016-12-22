<aside class="col-md-3">

<?php $ensright = cs_get_option('enable_sidebar_right'); ?>
<?php if($ensright) : ?>
    <?php if (is_active_sidebar('right-sidebar')) : ?>
     	<?php dynamic_sidebar( 'right-sidebar' ); ?>
     <?php else : ?> 
     <?php endif; ?>
<?php endif; ?> 
                				
</aside>