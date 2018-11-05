<?php
get_header ();
/*
    Template Name: Shop Page
*/

// Advanced Custom Fields

/* Products */
$product                        = get_field('product'); 
$product_image                  = get_field('product_image'); 
$product_price                  = get_field('product_price'); 
$product_link                   = get_field('product_link'); 
?>

<!--BANNER/PAGE TITLE-->
<section id="title-banner">
        <div class="container">
			<?php echo the_title(); ?>
        </div><!--container-->
    </section><!--title-banner-->

<!--PRODUCT INFO-->
<section id="products"> 
    <div class="container">
        <h2>Products</h2>

        <!--insert drop down-->

        <div class="row">
        <?php

            // check if the repeater field has rows of data
            if( have_rows('product') ):?>


                <?php 
                
                // loop through the rows of data
                while ( have_rows('product') ) : the_row();

                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <img src="<?php the_sub_field('product_image') ?>" alt="">
                        <h3><a href="<?php the_sub_field('product_link') ?>"><?php the_sub_field('product') ?></a></h3>
                        <h4>$<?php the_sub_field('product_price') ?></h4>
                        <a class="btn btn-default btn-sm" href="#" role="button"><h6>Add to cart</h6></a>
                    </div><!--end-col-->

            <?php endwhile;

            else :

                // no rows found

            endif; ?>
        
        </div><!--row-->
    </div>
</section>

<?php get_footer (); ?>
