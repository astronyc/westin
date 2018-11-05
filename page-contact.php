<?php
get_header ();

/*
    Template Name: Contact Page
*/

//Advanced Custom Fields

$form_title                     = get_field('form_title'); 
$form_text                      = get_field('form_text'); 
$form_field_name                = get_field('form_field_name'); 
$form_field_email               = get_field('form_field_email'); 
$form_field_telephone           = get_field('form_field_telephone'); 
$dropdown_1                     = get_field('dropdown_1'); 
$dropdown_2                     = get_field('dropdown_2');
$dropdown_3                     = get_field('dropdown_3'); 
$dropdown_4                     = get_field('dropdown_4'); 
$dropdown_5                     = get_field('dropdown_5');
$form_message                   = get_field('form_message');
$form_button_text               = get_field('form_button_text');

/* Sidebar */
$main_heading                   = get_field('main_heading');
$subheading_1                   = get_field('subheading_1');
$subheading_text_1              = get_field('subheading_text_1');
$subheading_2                   = get_field('subheading_2');
$subheading_text_2              = get_field('subheading_text_2');
$subheading_3                   = get_field('subheading_3');
$icon_1                         = get_field('icon_1');
$icon_link_1                    = get_field('icon_link_1');
$icon_2                         = get_field('icon_2');
$icon_link_2                    = get_field('icon_link_2');
$icon_3                         = get_field('icon_3');
$icon_link_3                    = get_field('icon_link_3');
$icon_4                         = get_field('icon_4');
$icon_link_4                    = get_field('icon_link_4');


?>

<!--BANNER/PAGE TITLE-->
<section id="title-banner">
        <div class="container">
			<?php echo the_title(); ?>
        </div><!--container-->
    </section><!--title-banner-->

<!--REQUEST A QUOTE/ FORM SECTION-->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8">
            <h2><?php echo $form_title; ?></h2>
                <hr>
                <p><?php echo $form_text; ?></p>
            <?php echo do_shortcode( '[contact-form-7 id="750" title="Contact form 1"]' ); ?>
            </div><!--col-->
            
            <div class="col-sm-12 col-md-4">
                <h2><?php echo $main_heading; ?></h2>
                <hr>
                <h3><?php echo $subheading_1; ?></h3>
                <p><?php echo $subheading_text_1; ?></p>
                <h3><?php echo $subheading_2; ?></h3>
                <p><?php echo $subheading_text_2; ?></p>
                <h3><?php echo $subheading_3; ?></h3>
                <span>
                <a href="<?php echo $icon_link_1; ?>"><?php echo $icon_1; ?>
				<a href="<?php echo $icon_link_2; ?>"><?php echo $icon_2; ?>
				<a href="<?php echo $icon_link_3; ?>"><?php echo $icon_3; ?>
				<a href="<?php echo $icon_link_4; ?>"><?php echo $icon_4; ?>
                </span> 
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</section>


<?php get_footer (); ?>
