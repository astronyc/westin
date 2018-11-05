<?php
/*
 Template Name: Home Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?> 

<?php 

// Advanced Custom Fields 

/* Introduction Section */
$main_heading                   = get_field('main_heading');  
$button_text                    = get_field('button_text');  
$button_link                    = get_field('button_link');  
$main_paragraph_1               = get_field('main_paragraph_1');
$main_paragraph_2               = get_field('main_paragraph_2');
/* Services / Skill Section */
$first_icon                     = get_field('first_icon'); 
$first_service_title            = get_field('first_service_title'); 
$first_service_description      = get_field('first_service_description'); 
$first_service_link             = get_field('first_service_link'); 
$second_icon                    = get_field('second_icon'); 
$second_service_title           = get_field('second_service_title'); 
$second_service_description     = get_field('second_service_description'); 
$second_service_link            = get_field('second_service_link'); 
$third_icon                     = get_field('third_icon'); 
$third_service_title            = get_field('third_service_title'); 
$third_service_description      = get_field('third_service_description'); 
$third_service_link             = get_field('third_service_link'); 
/* Blog Section */
$args                            = get_field('args');
$recent_posts                    = get_field('recent_posts');
$recent                          = get_field('recent');

get_header(); ?>


<!--MAIN SECTION-->
<section id="main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6">
                    <h3><?php echo $main_heading; ?></h3>
                    <a class="btn btn-default btn-lg" href="<?php echo $button_link; ?>" role="button"><?php echo $button_text; ?>  <i class="far fa-arrow-alt-circle-right"></i>
                    </a>

                    </button><!--button-->
                </div><!--col-->
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-3 about-text">
				<?php echo $main_paragraph_1; ?>
                </div><!--col-->     
                <div class="col-xs-12 col-sm-3 col-md-6 col-lg-3 about-text">
				<?php echo $main_paragraph_2; ?>
                </div><!--col-->     
            </div><!--row-->
        </div><!--container-->
    </section>

<!--SKILLS SECTION-->
    <section id="skills">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="<?php echo $first_service_link; ?>">
                        <?php echo $first_icon; ?>
                    <h4><?php echo $first_service_title; ?></h4></a>
                    <h5><?php echo $first_service_description; ?></h5>
                </div><!--col-->

                <div class="col-sm-4">
                        <a href="<?php echo $second_service_link; ?>">
                        <?php echo $second_icon; ?>
                    <h4><?php echo $second_service_title; ?></h4></a>
                    <h5><?php echo $second_service_description; ?></h5>
                </div><!--col-->

                <div class="col-sm-4">
                        <a href="<?php echo $third_service_link; ?>">
                        <?php echo $third_icon; ?>
                    <h4><?php echo $third_service_title; ?></h4></a>
                    <h5><?php echo $third_service_description; ?></h5>
                </div><!--col-->
            </div><!--row-->
        </div><!--container-->
    </section><!--skills-->


<!--PROJECTS SECTION--> <!--needs to be a container without padding-->
<section id="grid">
    <div class="image-grid">
        <?php
        $args=array(
            'post_type' => 'projects',
            'post_status' => 'publish',
            'posts_per_page' => 6
            );

        $my_query = null;
        $my_query = new WP_Query($args);


        if( $my_query->have_posts() ) {

            $i = 0;
            while ($my_query->have_posts()) : $my_query->the_post();
        // modified to work with 3 columns
        // output an open <div>

        if ( has_post_thumbnail() ) {
        
            // Get the post thumbnail URL
            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); }

        if($i % 3 == 0) { ?> 


        <?php
        }
        ?>

            <a href="<?php echo get_permalink(); ?>">
            <div class="image tile col-md-4 portfolioBox" style="background-image: url('<?php echo $feat_image; ?>');">
                <div class="overlay portfolioOverlay">
                    <div class="text portfolioContent"><?php the_title(); ?>
                    </div>
                </div>
            </div>
            </a>
                
            <?php $i++; 
            if($i != 0 && $i % 3 == 0) { ?>
                <div class="clearfix"></div>

            <?php
            } ?>

            <?php  
                endwhile;
                }
                wp_reset_query();
                ?>

    </div><!--/.container-->  
</section><!--projects-->

<?php get_footer (); ?>