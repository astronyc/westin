<?php
/*
    Template Name: FAQ Page
*/

// Advanced Custom Fields

/* Questions */
$title                          = get_field('title');
$questions                      = get_field('questions');
$question                       = get_field('question');
$answer                         = get_field('answer');
 
get_header ();
?>

<!--BANNER/PAGE TITLE-->
<section id="title-banner">
        <div class="container">
			<?php echo the_title(); ?>
        </div><!--container-->
    </section><!--title-banner-->

<!--FAQ CONTENT-->
<section id="faq">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2><?php echo $title; ?></h2>
                <hr>
                <?php

                    // check if the repeater field has rows of data
                    if( have_rows('overview_of_questions') ):?>


                        <?php 
                        
                        // loop through the rows of data
                        while ( have_rows('overview_of_questions') ) : the_row();

                            ?>
                            <h6><a href="#Q1"><?php the_sub_field('question') ?></a></h6>

                    <?php endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>
             
            </div><!--end-col-->
            <div class="col-sm-8">
            <?php

// check if the repeater field has rows of data
if( have_rows('questions') ):?>


    <?php 
    
    // loop through the rows of data
    while ( have_rows('questions') ) : the_row();

        ?>

        <h3 id="Q1">Q: <?php the_sub_field('question') ?></h3>
        <br>
        <p><?php the_sub_field('answer') ?></p>
        <h5><a href="#Q1">Back to Questions</a></h5>
        <hr>

<?php endwhile;

else :

    // no rows found

endif;

?>
             
            
            </div><!--end-col-->
        </div><!--row-->
    </div><!--container-->
</section><!---->


<?php get_footer(); 
?>