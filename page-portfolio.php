<?php
get_header ();
/*
    Template Name: Portfolio Page
*/

?>

<!--BANNER/PAGE TITLE-->
<section id="title-banner">
        <div class="container">
			<?php echo the_title(); ?>
        </div><!--container-->
    </section><!--title-banner-->

<!--PROJECTS SECTION--> <!--needs to be a container without padding-->
<section id="grid">
    <div class="image-grid">
        <?php
        $args=array(
            'post_type' => 'projects',
            'post_status' => 'publish',
            'posts_per_page' => 28
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
