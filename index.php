<?php get_header(); 

/*
    Template Name: Blog Page
*/

// Advanced Custom Fields

?>

<!--BANNER/PAGE TITLE-->
<section id="title-banner">
        <div class="container">
		<?php echo get_the_title( get_option('page_for_posts', true) ); ?>
        </div><!--container-->
    </section><!--title-banner-->


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
									'<span class="by">'.__( 'by', 'bonestheme').'</span><span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">'.get_the_author_link( get_the_author_meta( 'ID' ) ) .'</span>'
								); ?>
					</p>

				</header>

				<?php echo get_the_post_thumbnail('large'); ?>

				<section class="entry-content cf">
					<?php the_content(); ?>
				</section>

				<footer class="article-footer cf">
					<p class="footer-comment-count">
						<?php comments_number( __( '<span>No</span>Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
					</p>


			<?php printf( '<p class="footer-category">' . __('Filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

			<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>


				</footer>

			</article>

			<?php endwhile; ?>

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

			<?php endif; ?>

			</main><!--content-->

			<!-- SIDEBAR -->
		<aside class="col-sm-3">
			<?php get_sidebar(); ?>

		</aside>
		</div><!--primary-->
	</div><!--container-->
</section>

<?php get_footer(); ?>
