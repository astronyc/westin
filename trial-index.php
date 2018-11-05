<?php get_header(); ?>

<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

<?php
/*
    Template Name: Blog Posts
*/

// Advanced Custom Fields

/* Get Started Bar (Above Bottom Bar) */
$get_started_text           = get_field('get_started_text');
$get_started_button_text    = get_field('get_started_button_text');
$get_started_button_link    = get_field('get_started_button_link');

?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

				<!-- BLOG CONTENT -->
				<section id="posts">
					<div class="container">
						<div class="row" id="primary">
						
							<main id="content" class="col-sm-9" role="main">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

	<header class="article-header">

		<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		<p class="byline entry-meta vcard">
											<?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
						   /* the time the post was published */
						   '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
						   /* the author of the post */
						   '<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
					); ?>
		</p>
					<!-- SIDEBAR -->
						<aside class="col-sm-3">
						<?php get_sidebar(); ?>
						</aside>

							</main>
						</div>
					</div>
				</section><!--posts-->


						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">


								</header>

								<section class="entry-content cf">
									<?php the_content(); ?>
								</section>

								<footer class="article-footer cf">
									<p class="footer-comment-count">
										<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
									</p>


                 	<?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>


								</footer>

							</article>

							<?php endwhile; ?>

							<div class="navigation">
	<span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
</div><!-- /.navigation -->
									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; wp_reset_query(); ?>

						</main>




				</div>

			</div>


<!--GET STARTED/FREE QUOTE SECTION-->
<section id="get-started">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                <?php echo $get_started_text; ?>
                </div><!--col-->
                <div class="col-md-3">
                    <a class="btn btn-default btn-lg" href="<?php echo $get_started_button_link; ?>" role="button"><?php echo $get_started_button_text; ?></a>
                </div><!--col-->
            </div><!--row-->
        </div><!--container-->
	</section><!--get-started-->
	
<?php get_footer(); ?>
