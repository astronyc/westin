<?php
/*
    Template Name: Blog Posts
*/

// Advanced Custom Fields
$get_the_title         			= get_field('get_the_title');

/* Blog Post Images */
$image_1                        = get_field('image_1');
$image_2                        = get_field('image_2');
$image_3                        = get_field('image_3');
$image_4                        = get_field('image_4');


get_header ();
?>

<!--BANNER/PAGE TITLE-->
<section id="title-banner">
        <div class="container">
            ddd
        </div><!--container-->
    </section><!--title-banner-->

<!-- BLOG CONTENT -->
<section id="posts">
	 <div class="container">
	    <div class="row" id="primary">
	    
		    <main id="content" class="col-sm-9" role="main">
		    	
		    	<article class="post">
					<div class="post-image">
							<a href="post.html"><img src="<?php echo $image_1; ?>"></a>
					</div><!-- post-image -->
		    		<header>
		    			<h2><a href="post.html">Blog post title</a></h2>
		    			<div class="post-details">
								<i class="fa fa-clock"></i><span><time>August 7, 2014</time></span>
								<i class="fa fa-user"></i><span><a href="index.html">John Doe</a></span>
								<i class="fa fa-folder"></i><span><a href="">Tutorials</a>, <a href="">Coding</a></span>
								<i class="fa fa-comments post-comments-badge"></i><span><a href="">168 Comments</a></span>
		    			</div><!-- post-details -->
		    		</header>
		    		<div class="post-excerpt">
						<br>
		    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt...</p>
						<button type="submit" class="btn btn-default submit"><a href="#">Read More</a></button>
						<hr>
					</div><!-- post-excerpt -->
		    	</article><!-- post -->
		    	
		    	<article class="post">
					<div class="post-image">
						<a href=""><img src="<?php echo $image_2; ?>"></a>
					</div><!-- post-image -->
		    		<header>
		    			<h2><a href="">A different post, with a longer title</a></h2>
		    			<div class="post-details">
								<i class="fa fa-clock"></i><span><time>August 7, 2014</time></span>
								<i class="fa fa-user"></i><span><a href="index.html">John Doe</a></span>
								<i class="fa fa-folder"></i><span><a href="">Tutorials</a>, <a href="">Coding</a></span>
								<i class="fa fa-comments post-comments-badge"></i><span><a href="">168 Comments</a></span>
							</div><!-- post-details -->
						</header>
						<div class="post-excerpt">
								<br>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt...</p>
							<button type="submit" class="btn btn-default submit"><a href="#">Read More</a></button>
							<hr>
						</div><!-- post-excerpt -->
					</article><!-- post -->
		    	
		    	<article class="post">
					<div class="post-image">
						<a href=""><img src="<?php echo $image_3; ?>"></a>
					</div><!-- post-image -->
		    		<header>
		    			<h2><a href="">Short n' sweet</a></h2>
		    			<div class="post-details">
								<i class="fa fa-clock"></i><span><time>August 7, 2014</time></span>
								<i class="fa fa-user"></i><span><a href="index.html">John Doe</a></span>
								<i class="fa fa-folder"></i><span><a href="">Tutorials</a>, <a href="">Coding</a></span>
								<i class="fa fa-comments post-comments-badge"></i><span><a href="">168 Comments</a></span>
							</div><!-- post-details -->
						</header>
						<div class="post-excerpt">
								<br>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt...</p>
							<button type="submit" class="btn btn-default submit"><a href="#">Read More</a></button>
							<hr>
						</div><!-- post-excerpt -->
					</article><!-- post -->

		    	<article class="post">
					<div class="post-image">
					<a href=""><img src="<?php echo $image_4; ?>"></a>
					</div><!-- post-image -->
		    		<header>
		    			<h2><a href="">Last but certainly not least</a></h2>
		    			<div class="post-details">
								<i class="fa fa-clock"></i><span><time>August 7, 2014</time></span>
								<i class="fa fa-user"></i><span><a href="index.html">John Doe</a></span>
								<i class="fa fa-folder"></i><span><a href="">Tutorials</a>, <a href="">Coding</a></span>
								<i class="fa fa-comments post-comments-badge"></i><span><a href="">168 Comments</a></span>
							</div><!-- post-details -->
						</header>
						<div class="post-excerpt">
								<br>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt...</p>
							<button type="submit" class="btn btn-default submit"><a href="#">Read More</a></button>
							<hr>
						</div><!-- post-excerpt -->
					</article><!-- post -->
		    </main><!-- content -->		    
			
<!-- SIDEBAR -->
		<aside class="col-sm-3">
			<div class="widget">
				<form role="form" class="search-form">
		   			<label for="sidebar-search" class="sr-only">Search</label>
		    		<input type="text" placeholder="Search" id="sidebar-search">
				</form>
			</div><!-- widget -->

			<div class="widget">
					<h3>Recent Posts</h3>
		    		<ul>
						<hr>
						<li><a href=""><i class="far fa-file-alt"></i>Blog post title</a></li>
						<hr>
						<li><a href=""><i class="far fa-file-alt"></i>A different post, with a longer title</a></li>
						<hr>
						<li><a href=""><i class="far fa-file-alt"></i>Short n' sweet</a></li>
						<hr>
						<li><a href=""><i class="far fa-file-alt"></i>Last but certainly not least</a></li>
						<hr>
					</ul>
			</div><!-- widget -->
		    	
			<div class="widget">
				<h3>Categories</h3>
		    		<ul>
						<hr>
						<li><a href=""><i class="far fa-folder"></i>Freelance</a></li>
						<hr>
						<li><a href=""><i class="far fa-folder"></i>Inspiration</a></li>
						<hr>
						<li><a href=""><i class="far fa-folder"></i>Design Process</a></li>
						<hr>
		    		</ul>
			</div><!-- widget -->
				
			<div class="widget">
				<h3>Archives</h3>
					<ul>
						<hr>
						<li><a href=""><i class="far fa-file"></i>February 2018</a></li>
						<hr>
						<li><a href=""><i class="far fa-file"></i>December 2017</a></li>
						<hr>
						<li><a href=""><i class="far fa-file"></i>October 2017</a></li>
						<hr>
						<li><a href=""><i class="far fa-file"></i>July 2017</a></li>
						<hr>
						<li><a href=""><i class="far fa-file"></i>May 2017</a></li>
						<hr>
					</ul>
				</div><!-- widget -->
			</aside>
		</div><!-- primary -->
	</div><!-- container -->
</section><!--blog-posts-->


<?php get_footer(); 
?>