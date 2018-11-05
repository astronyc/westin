<?php
get_header ();
/*
    Template Name: Project Page
*/

// Advanced Custom Fields

/*Project Images*/
$image_1         = get_field('image_1');
$image_2         = get_field('image_2');
$image_3         = get_field('image_3');
$image_4         = get_field('image_4');
$image_5         = get_field('image_5');
$image_6         = get_field('image_6');
$image_7         = get_field('image_7');
$image_8         = get_field('image_8');
$image_9         = get_field('image_9');
$image_10        = get_field('image_10');

/* Sidebar */
$sidebar_heading            = get_field('sidebar_heading');    
$sidebar_subtitle_1         = get_field('sidebar_subtitle_1');
$sidebar_subtitle_2         = get_field('sidebar_subtitle_2');
$sidebar_subtitle_3         = get_field('sidebar_subtitle_3');
$sidebar_description_1      = get_field('sidebar_description_1');
$sidebar_description_2      = get_field('sidebar_description_2');
$sidebar_description_3      = get_field('sidebar_description_3');

?>

<!--BANNER/PAGE TITLE-->
<section id="title-banner">
        <div class="container">
			<?php echo the_title(); ?>
        </div><!--container-->
    </section><!--title-banner-->

    <!-- CONTENT -->
<section id="project-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <img src="<?php echo $image_1; ?>" alt="">
                <img src="<?php echo $image_2; ?>" alt="">
                <img src="<?php echo $image_3; ?>" alt="">
                <img src="<?php echo $image_4; ?>" alt="">
                <img src="<?php echo $image_5; ?>" alt="">
                <img src="<?php echo $image_6; ?>" alt="">
                <img src="<?php echo $image_7; ?>" alt="">
                <img src="<?php echo $image_8; ?>" alt="">
                <img src="<?php echo $image_9; ?>" alt="">
                <img src="<?php echo $image_10; ?>" alt="">
            </div><!--end-col-->

            <div class="col-lg-4">
            <h2><?php echo $sidebar_heading; ?></h2>
            <hr>
            <h3><?php echo $sidebar_subtitle_1; ?>:</h3>
            <p><?php echo $sidebar_description_1; ?></p>
            <h3><?php echo $sidebar_subtitle_2; ?>:</h3>
            <p><?php echo $sidebar_description_2; ?></p>
            <h3><?php echo $sidebar_subtitle_3; ?>:</h3>
            <p><?php echo $sidebar_description_3; ?></p>
            </div><!--end-col-->
        </div><!--row-->
    </div><!--container-->
</section><!-- project page -->

<?php get_footer (); ?>