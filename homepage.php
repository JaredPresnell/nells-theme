<?php /* Template Name: HomePage */ ?>

<?php

/*
	
@package nells
 - template for the homepage
 */

?>

<?php get_header(); ?>
 
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    	<div class="container">

		    <?php
		    // Start the loop.
		   	while ( have_posts() ) : the_post();
		    ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="homepage_container">
					<div class="row homepage_row_top">	<!-- header_homepage  -->
						<div class="col-sm-4">
							<?php get_template_part('inc/template-parts/logo'); ?>	
						</div>
						<div class="col-sm-4"></div>
						<div class="col-sm-4">
							<a class="social_link" style="visibility:hidden;"><i class="fab fa-github"></i></a>
							<a class="social_link" style="visibility:hidden;"><i class="fab fa-codepen"></i></a>
							<a class="social_link" style="visibility:hidden;"><i class="fab fa-linkedin"></i></a>
						</div>
					</div> <!-- header homepage -->
					<div class="row divider_container">
						<div class="col-4 divider_top"></div>	
						<div class="col-4 divider_top"></div>	
						<div class="col-4 divider_top"></div>	
					</div><!-- row -->
					<svg class="hello_svg" viewBox="0 0 56 18">0
						<!-- <text class="homepage_hello" x="0" y="15">Hello</text> -->
							<text class="homepage_hello" x="50%" y="50%" alignment-baseline="middle" text-anchor="middle">Hello</text>
					<svg>
					<?php the_content(); ?>
					<div class="divider_bottom"></div>	
				</div><!-- homepage container -->
				
				<footer class="entry-footer">
					<?php //echo sunset_posted_footer(); ?>
				</footer>
				
			</article>

		   <?php
		   	endwhile;
		    ?>
		</div> <!-- container -->
    </main><!-- .site-main -->

 
</div><!-- .content-area -->
 
<?php get_footer(); ?>
