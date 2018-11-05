<?php

get_header ();

/*
    Template Name: About Me Page
*/

// Advanced Custom Fields

/*About Me Section */
$about_image                = get_field('about_image');
$education_main             = get_field('education_main');
$education_text             = get_field('education_text');
$location_text              = get_field('location_text');
$location_main              = get_field('location_main');
$about_title                = get_field('about_title');
$about_paragraph_1          = get_field('about_paragraph_1');
$about_paragraph_2          = get_field('about_paragraph_2');
$about_paragraph_3          = get_field('about_paragraph_3');
$reasons_title              = get_field('reasons_title');
$reason_1                   = get_field('reason_1');
$reason_2                   = get_field('reason_2'); 
$reason_3                   = get_field('reason_3');
$reason_4                   = get_field('reason_4');
$reason_5                   = get_field('reason_5');
$reason_6                   = get_field('reason_6');
$reason_7                   = get_field('reason_7');
$reason_8                   = get_field('reason_8');

?>

<!--BANNER/PAGE TITLE-->
<section id="title-banner">
        <div class="container">
			<?php echo the_title(); ?>
        </div><!--container-->
    </section><!--title-banner-->

<!--ABOUT ME-->
<section id="about-me">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $about_image;?>" alt="About image">
                <p><strong><?php echo $education_main; ?></strong><br><?php echo $education_text; ?></p>
                <p><strong><?php echo $location_main; ?></strong><br><?php echo $location_text; ?></p>
            </div>   
            <div class="col-sm-6">
                <h2><?php echo $about_title; ?></h2>
                <hr>
                <p><?php echo $about_paragraph_1; ?></p>
                <p><?php echo $about_paragraph_2; ?></p>
                <p><?php echo $about_paragraph_3; ?></p>
            <h3><?php echo $reasons_title; ?></h3>
                <div class="col-sm-6">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="far fa-check-circle"></i></span><?php echo $reason_1; ?></li>
                        <li><span class="fa-li"><i class="far fa-check-circle"></i></span><?php echo $reason_2; ?></li>
                        <li><span class="fa-li"><i class="far fa-check-circle"></i></span><?php echo $reason_3; ?></li>
                        <li><span class="fa-li"><i class="far fa-check-circle"></i></span><?php echo $reason_4; ?></li>
                    </ul><!--fa-ul-->
                </div><!--end-col-->
                <div class="col-sm-6">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="far fa-check-circle"></i></span><?php echo $reason_5; ?></li>
                        <li><span class="fa-li"><i class="far fa-check-circle"></i></span><?php echo $reason_6; ?></li>
                        <li><span class="fa-li"><i class="far fa-check-circle"></i></span><?php echo $reason_7; ?></li>
                        <li><span class="fa-li"><i class="far fa-check-circle"></i></span><?php echo $reason_8; ?></li>
                    </ul><!--fa-ul-->
                </div><!--end-col-->
                    
            </div><!--end-col-->
        </div><!--row-->
    </div><!--container-->
</section><!--about-me-->


<?php
get_footer ();
?>