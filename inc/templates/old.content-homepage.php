<?php

/*
	
@package nells
-- template for the homepage 
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header text-center">
		
		<?php /* the_title( '<h1 class="entry-title">', '</h1>');*/ ?>
		
		<!-- <div class="entry-meta">
			<?php //echo sunset_posted_meta(); ?>
		</div> -->
		
	</header>

	<div class="homepage_container">
		<div class="container-fluid nav-homepage-container">
			<div class="row">
				<div class="nav-container nav-homepage">
					
					<nav class="navbar navbar-expand-md navbar-nells">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'container' => false,
								'menu_class' => 'nav navbar-nav',
								//'walker' => new Nells_Walker_Nav_Primary()
							) );	
						?>
					</nav>
					
				</div><!-- .nav-container -->	
			</div><!-- .row -->

		</div><!-- .container-fluid -->
		<div class="row homepage_row_top">	<!-- header_homepage  -->
			<div class="col-sm-4">
				<?php get_template_part('inc/template-parts/logo'); ?>	
			</div>
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<a class="social_link"><i class="fab fa-github"></i></a>
				<a class="social_link"><i class="fab fa-codepen"></i></a>
				<a class="social_link"><i class="fab fa-linkedin"></i></a>
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