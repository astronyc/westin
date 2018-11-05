<?php
get_header ();
/*
    Template Name: Services Page
*/

// Advanced Custom Fields

/* Services */
$main_heading               = get_field('main_heading');
$main_paragraph             = get_field('main_paragraph');
$services_heading           = get_field('services_heading');
$services_paragraph_1       = get_field('services_paragraph_1');
$services_paragraph_2       = get_field('services_paragraph_2');
$second_heading             = get_field('second_heading');
$second_paragraph_1         = get_field('second_paragraph_1');
$second_paragraph_2         = get_field('second_paragraph_2');

/* Reasons To Work With Me */
$first_subheading           = get_field('first_subheading');
$list                       = get_field('list');
$list_item                  = get_field('list_item');

/* Quick Links */
$second_subheading          = get_field('second_subheading');
$second_list                = get_field('second_list');
$second_list_item           = get_field('second_list_item');
$second_list_item_link      = get_field('second_list_item_link');

/* What's Included */
$third_subheading           = get_field('third_subheading');
$third_list                 = get_field('third_list');
$third_list_item            = get_field('third_list_item');

/* Additional Options */ 
$fourth_subheading          = get_field('fourth_subheading');
$fourth_list                = get_field('fourth_list');
$fourth_list_item           = get_field('fourth_list_item');

$link                       = get_field('link');

$services_tag                       = get_field('services_tag');
?>



<!--MAIN SECTION-->
<section id="main-services">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-12 col-lg-8">
                    <h3><?php echo $main_heading; ?></h3>
                    <hr>
                    <h4><?php echo $main_paragraph; ?></h4>
            </div><!--row-->
        </div><!--container-->
    </section>

<!--SERVICES-->
<section id="services-design">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2><?php echo $services_heading; ?></h2>
                    <p><?php echo $services_paragraph_1; ?></p>
                    <p><?php echo $services_paragraph_2; ?></p>
                </div>

            <div class="col-md-4">
                <h3><?php echo $first_subheading; ?></h3>
                <ul class="fa-ul">
                <?php

                    // check if the repeater field has rows of data
                    if( have_rows('list') ):?>

                
                        <?php 
                        
                        // loop through the rows of data
                        while ( have_rows('list') ) : the_row();

                            ?>

                            <li><span class="fa-li"><i class="far fa-check-circle"></i></span><?php the_sub_field('list_item') ?></li>

                    <?php endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>
                </ul><!--fa-ul-->
                    


                <h3><?php echo $second_subheading; ?></h3>
                <ul class="fa-ul">
                <?php

                    // check if the repeater field has rows of data
                    if( have_rows('second_list') ):?>

                
                        <?php 
                        
                        // loop through the rows of data
                        while ( have_rows('second_list') ) : the_row();

                            ?>
                            <li><span class="fa-li"><i class="fas fa-external-link-alt"></i></span><a href="<?php the_sub_field('second_list_item_link') ?>"><?php the_sub_field('second_list_item') ?></a></li>

                    <?php endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>
                </ul>
            </div>
            </div><!--row-->
        </div><!--container-->
    </section><!--skills-->

<!-- trial-->

<section id="grid">
    <div class="image-grid">
        <?php
        $args=array(
            'post_type' => 'projects',
            'post_status' => 'publish',
            'tag' => $services_tag,
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


<!--SERVICES-->
<section id="services-design">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2><?php echo $second_heading; ?></h2>
                    <p><?php echo $second_paragraph_1; ?></p>
                    <p><?php echo $second_paragraph_2; ?></p>
                </div>

            <div class="col-md-4">
                <h3><?php echo $third_subheading; ?></h3>
                <ul class="fa-ul">
                <?php

                    // check if the repeater field has rows of data
                    if( have_rows('third_list') ):?>

                
                        <?php 
                        
                        // loop through the rows of data
                        while ( have_rows('third_list') ) : the_row();

                            ?>

                            <li><span class="fa-li"><i class="far fa-check-circle"></i></span><?php the_sub_field('third_list_item') ?></li>

                    <?php endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>
                </ul><!--fa-ul-->

                <h3><?php echo $fourth_subheading; ?></h3>
                <ul class="fa-ul">
                <?php

                    // check if the repeater field has rows of data
                    if( have_rows('fourth_list') ):?>

                
                        <?php 
                        
                        // loop through the rows of data
                        while ( have_rows('fourth_list') ) : the_row();

                            ?>

                            <li><span class="fa-li"><i class="far fa-check-circle"></i></span><?php the_sub_field('fourth_list_item') ?></li>

                    <?php endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>
                </ul><!--fa-ul-->
            </div>
            </div><!--row-->
        </div><!--container-->
    </section><!--skills-->

<?php get_footer();?>