<?php
/*
 Template Name: Zach's Page
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

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- List Custom Post Type Loops -->

<div class="container my-container">
<?php
  $args=array(
     'post_type' => 'gamaray',
     'post_status' => 'publish',
     'posts_per_page' => 16
    );

  $my_query = null;
  $my_query = new WP_Query($args);

  if( $my_query->have_posts() ) {

    $i = 0;
    while ($my_query->have_posts()) : $my_query->the_post();
  // modified to work with 3 columns
  // output an open <div>
  if($i % 3 == 0) { ?> 

  <div class="row">

  <?php
  }
  ?>

    <div class="col-md-4"> hello
        <a href="<?php echo get_permalink() ?>">
            <div class="my-inner" style="background-image: <?php echo the_post_thumbnail() ?>">
                <h3><?php post_title() ?></h3>
            </div>
        </a>
    </div>  
      <?php $i++; 
      if($i != 0 && $i % 3 == 0) { ?>
        </div><!--/.row-->
        <div class="clearfix"></div>

      <?php
       } ?>

      <?php  
        endwhile;
        }
        wp_reset_query();
        ?>

</div><!--/.container-->  





<?php endwhile; ?>
<?php endif; ?>


<?php get_footer (); ?>