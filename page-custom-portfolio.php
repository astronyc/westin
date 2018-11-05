<?php
/*
 Template Name: Custom Portfolio Page
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

<!--BANNER/PAGE TITLE-->
  <section id="title-banner">
    <div class="container">
      <?php echo the_title(); ?>
    </div><!--container-->
  </section><!--title-banner-->
        
  <section id="projects">
    <div class="imageGrid container-fluid no-pad">

    <?php
      $args=array(
        'post_type' => 'projects',
        'post_status' => 'publish',
        'posts_per_page' => 18
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


      <div class="row">

      <?php
      }
      ?>

        <a href="<?php echo get_permalink(); ?>">
          <div class="tile col-md-4 portfolioBox" style="background-image: url('<?php echo $feat_image; ?>');">
              <div class="overlay portfolioOverlay">
                <div class="text portfolioContent"><?php the_title(); ?>
                </div>
              </div>
          </div>
        </a>
            
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
</section><!-- my projects -->

<?php get_footer (); ?>
