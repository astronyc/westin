<?php
// Advanced Custom Fields 

/* Get Started */       
$leading_text                   = get_field('leading_text'); 
$leading_button_link            = get_field('leading_button_link'); 
$leading_button_text            = get_field('leading_button_text'); 

?>        
        <footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

				</div>

			</footer>

		</div>
   
		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>



<!--GET STARTED/FREE QUOTE SECTION-->
<section id="get-started">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php the_field('leading_text', 'option'); ?>
                </div><!--col-->
                <div class="col-md-3">
                    <a class="btn btn-default btn-lg" href="<?php the_field('leading_button_link', 'option'); ?>" role="button"><?php the_field('leading_button_text', 'option'); ?></a>
                </div><!--col-->
            </div><!--row-->
        </div><!--container-->
</section><!--get-started-->

<!--BOTTOM BAR SECTION -->
<section id="explore">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-5">
                <h5>Availability</h5>
                <p class="explore-text availability"><?php the_field('availability_text', 'option'); ?></p>
            </div>
            <div class="col-xs-12 col-md-4 connect">
                <h5>Connect</h5>
                <p class="explore-text"><i class="fas fa-map-marker-alt"></i>  <?php the_field('location', 'option'); ?></p>
                <p class="explore-text"><i class="fas fa-phone"></i>  <?php the_field('phone_number', 'option'); ?></p>
                <p class="explore-text"><i class="fas fa-envelope"></i>  <?php the_field('contact_email', 'option'); ?></p>
                <span>
                    <a href="https://www.behance.net/WestonCarew"><i class="fab fa-behance"></i></a>
					<a href="https://www.facebook.com/weston.carew"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.linkedin.com/in/weston-carew-b7a629b1/"><i class="fab fa-linkedin-in"></i></a>
					<a href="https://instagram.com/westoncarew"><i class="fab fa-instagram"></i></a>
                </span>
            </div>
            <div class="col-xs-12 col-md-3">
                <h5>Explore</h5>
                <ul>
                    <p><a href="<?php the_field('link_1', 'option'); ?>"><?php the_field('link_text_1', 'option'); ?></a></p>
                    <p><a href="<?php the_field('link_2', 'option'); ?>"><?php the_field('link_text_2', 'option'); ?></a></p>
                    <p><a href="<?php the_field('link_3', 'option'); ?>"><?php the_field('link_text_3', 'option'); ?></a></p>
                    <p><a href="<?php the_field('link_4', 'option'); ?>"><?php the_field('link_text_4', 'option'); ?></a></p>
                    <p><a href="<?php the_field('link_5', 'option'); ?>"><?php the_field('link_text_5', 'option'); ?></a></p>
                </ul><!--explore-->
            </div>

        </div><!--row-->
    </div><!--container-->
</section>

<!--FOOTER SECTION-->
	<section id="footer">
  		<div class="container">
        	<div class="copyright">
			<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> - All Rights Reserved</p>
        	</div>
   		 </div><!--container-->
	</section><!--footer-->

	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

	</body>

</html> <!-- end of site. what a ride! -->
