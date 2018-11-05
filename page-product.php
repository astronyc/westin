<?php
/*
 Template Name: Product Page
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

/* Product */
$product_image                  = get_field('product_image'); 
$product_title                  = get_field('product_title'); 
$product_price                  = get_field('product_price'); 
$product_description            = get_field('product_description'); 

get_header(); ?>


<!--PRODUCT PAGE-->


<!--BANNER/PAGE TITLE-->
<section id="title-banner">
        <div class="container">
			<?php echo the_title(); ?>
        </div><!--container-->
    </section><!--title-banner-->

<!--PRODUCT INFO-->
<section id="product-info"> 
<div class="container">
    <div class="row">
        <div class="col-md-6"><img src="<?php echo $product_image; ?>">
            <!--add other product img-->
        </div>
        <div class="col-md-6">
            <h2><?php echo $product_title; ?></h2>
            <h3><?php echo $product_price; ?></h3>
            <br>
            <p><?php echo $product_description; ?></p>
            <br>
            <h6>In Stock</h6>
            <!--add quantity button-->
            <a class="btn btn-default btn-sm" href="#" role="button"><h6>Add to cart</h6></a>

            <h5><strong>Category: </strong><a href="#"><i>Cards</i></a></h5>
            <h5><strong>Tags: </strong><a href="#"><i>Cards</i></a></h5>
        </div>
    </div>
</div>
</section>

<?php get_footer(); ?>
