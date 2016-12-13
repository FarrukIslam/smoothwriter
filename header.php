<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta http-equiv="content-language" content="<?php language_attributes(); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

		


    <?php $favicon = cs_get_option('favicon'); ?>
      <?php if($favicon) : ?>
      <link rel="shortcut icon" href="<?php echo $favicon; ?>" sizes="32x32" />

    <?php else : ?>
        
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" sizes="32x32"/>

    <?php endif; ?>

		<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		  

	<?php wp_head(); ?>
	</head>
	
	<body class="<?php body_class(); ?>">
	  
	<!-- Wrapper Start -->
	<div class="wrapper wrapper_boxed">
				
		<!-- Header Start -->
		<header id="header" class="headermain fullwidth">
	        <!-- Main Header -->
			<div id="mainheader" class="fullwidth">
	            <div class="container">
	
					<div id="logo" class="float-left">		
						<a href="<?php bloginfo('home'); ?>">

						<?php $logo = cs_get_option('logo'); ?>
			             <?php if($logo) : ?>
			             
			            <img src="<?php echo $logo; ?>" class="img-responsive" alt="StatFort" />


			            <?php else : ?>

			                <img src="<?php echo get_template_directory_uri(); ?>/img/Writer_Logo-1.png" class="img-responsive" alt="StatFort" />

			                
			            <?php endif; ?>
								        	        </a>
	 				</div>					

					<div id="rightheader" class="flaot-right">
																		
						<!-- SearcH Area -->
						<form action="<?php esc_url(bloginfo('home')); ?>" method="GET" role="search">
							<div class="searcharea float-right">
								<a href="#searchbox" class="btnsearch">
									<em class="fa fa-search"></em>
								</a>

								<div id="searchbox">
									<input type="text" name="s" value="Search for:">
									<button type="submit" class="bgcolr">
										<em class="fa fa-search"></em>
									</button>
								</div>

							</div>
						</form>

	
						<!-- SearcH Area Close-->
						
												
						<!-- Navigation  -->
						<nav class="navigation float-right">
						
						 <?php
						  wp_nav_menu( array(
						    'menu'              => __( 'Primay Menu', 'smoothwriter'),
						    'theme_location'    => 'primarymenu',
						    'depth'             => 2,

						    'menu_id'        => 'menus',
						    'menu_class'        => '',
						    'container'=> false, 
						    'menu_class'=> false, 
						    'fallback_cb'       => 'smoothwriter_default_menu'
						    ));
						?>
						</nav>
						<!-- Navigation Close -->
					</div>	
					<!-- Right Header Close -->	
				</div>	
			</div>	
		</header>	
		<!-- Header Close --> 
		<div class="breadcrumb">
			<div class="container">
				<div class="breadcrumb-inner">
					<div class="subtitle">
						<h1 class="cs-page-title">Content Writer</h1>
					</div>                          
				</div>
			</div>
		</div>

		<div class="clear"></div>