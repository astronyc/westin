<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title('|'); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/library/css/normalize.css">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


		<?php // wordpress head functions ?>
		<?php wp_head(); ?>

		<!-- HTML5 shive and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- [if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss/maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

<?php 
// Advanced Custom Fields 

?>

<!--TOP-BAR-->
<section id="top-bar">
		<div class="container">
			<span class="top-bar-left">
				<i class="fas fa-phone"></i> <a href=""><?php the_field('phone_number', 'option'); ?></a>
				<i class="fas fa-envelope"></i> <a href=""><?php the_field('contact_email', 'option'); ?></a>
				<i class="far fa-arrow-alt-circle-right"></i> <a href="<?php the_field('top_bar_link', 'option'); ?>"><?php the_field('top_bar_link_text', 'option'); ?></a>
			</span>
			<span class="top-bar-right">
                <ul>
					<li><a href="https://www.behance.net/WestonCarew"><i class="fab fa-behance"></i></a></li>
					<li><a href="https://www.facebook.com/weston.carew"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="https://www.linkedin.com/in/weston-carew-b7a629b1/"><i class="fab fa-linkedin-in"></i></a></li>
					<li><a href="https://instagram.com/westoncarew"><i class="fab fa-instagram"></i></a></li>
                </ul>
			</span><!--top-bar-right-->
		</div><!--container-->
	</section><!--top-bar-->


<!-- NAVBAR -->
<section id="navigation">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('nav_logo', 'option'); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<?php wp_nav_menu(array(
										'container' => false,                           // remove nav container
										'container_class' => 'menu cf',                 // class of container (should you choose to use it)
										'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
										'menu_class' => 'nav navbar-nav navbar-right',               // adding custom nav class
										'theme_location' => 'main-nav',                 // where it's located in the theme
										'before' => '',                                 // before the menu
										'after' => '',                                  // after the menu
										'link_before' => '',                            // before each link
										'link_after' => '',                             // after each link
										'depth' => 0,                                   // limit the depth of the nav
										'fallback_cb' => '',                           // fallback function (if there is one)
										'walker' => new WP_Bootstrap_Navwalker()
							)); ?>

				</div><!-- navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav><!--navbar-->
	</div><!--container-->
</section><!--navigation-->