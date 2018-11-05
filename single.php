<?php get_header();

// Advanced Custom Fields

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

<!-- PROJECT POST-->
<section id="posts project-page">
	 <div class="container">
	    <div class="row" id="primary">

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-2of3 d-5of7 cf col-xs-12 col-sm-9" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


							    <!-- CONTENT -->
									<section id="project-page">
										<div class="container">
											<div class="row">
												<div class="col-lg-8">
													<?php

													// check if the repeater field has rows of data
													if( have_rows('slider_image') ):


														// loop through the rows of data
														while ( have_rows('slider_image') ) : the_row();

															// display a sub field value ?>
															<img src="<?php the_sub_field('portfolio_slider'); "full" ?>">

														<?php
														endwhile;

													else :

														// no rows found

													endif;

													?>
												</div><!--end-col-->

												<div class="col-lg-8">
												
												
												</div><!--end-col-->

												<div class="col-lg-4">
												<h2><?php echo $sidebar_heading; ?></h2>
												<hr>
												<h4><?php echo $sidebar_subtitle_1; ?>:</h4>
												<p><?php echo $sidebar_description_1; ?></p>
												<h4><?php echo $sidebar_subtitle_2; ?>:</h4>
												<p><?php echo $sidebar_description_2; ?></p>
												<h4><?php echo $sidebar_subtitle_3; ?>:</h4>
												<p><?php echo $sidebar_description_3; ?></p>
												</div><!--end-col-->
											</div><!--row-->
										</div><!--container-->
									</section><!--project page-->

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</main>
					
				</div>

			</div>

		</div>
	</div>
</section>

<!--NEXT/ PREVIOUS PROJECT LINKS-->
<section id="project-links">
	<div class="container">
	<hr>
		<div class="prev-posts pull-left">
		<?php
		$prev_post = get_previous_post();
		if($prev_post) {
		$prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
		echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class=" "><< '. $prev_title . '</a>' . "\n";
						}
		?>
		</div>

		<div class="next-posts pull-right">
		<?
		$next_post = get_next_post();
		if($next_post) {
		$next_title = strip_tags(str_replace('"', '', $next_post->post_title));
		echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class=" ">'. $next_title . ' >></a>' . "\n";
						}
		?>
		</div>
	</div><!--container-->
</section><!--project links-->

<?php get_footer(); ?>
