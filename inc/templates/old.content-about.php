<?php

/*
	
@package nells
-- template for the about page 
*/

?>


<div class="about_container container-fluid">
	<div class="row">
		<!-- <div class="col-3"> -->
		<?php 
			get_template_part('inc/template-parts/nells', 'sidebar');
		?>	
		<!-- </div> -->
		<div class="col-9 background_gradient offset-3">	

			<div class="row">
				<div class="col-lg-10 col-md-11 col-sm-12 background_solid">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="row homepage_row_top">	<!-- homepage_row_top  -->
						<!-- <div class="col-sm-4"> -->
							<?php //get_template_part('inc/template-parts/logo'); ?>
						<!-- </div>
						<div class="col-sm-4"></div>
						<div class="col-sm-4">
								<a class="social_link"><i class="fab fa-github"></i></a>
								<a class="social_link"><i class="fab fa-codepen"></i></a>
								<a class="social_link"><i class="fab fa-linkedin"></i></a>
						</div> -->
					</div> <!-- homepage_row_top -->
				<!-- 	<div class="row divider_container">
						<div class="col-4 divider_top"></div>	
						<div class="col-4 divider_top"></div>	
						<div class="col-4 divider_top"></div>	
					</div> --><!-- row -->
					<?php the_content(); ?>
					<div class="divider_bottom"></div>	
					<!-- </div> --><!-- .nav-container -->
				</article>	
				</div><!-- col-md-10 col-sm-10 -->	
				
			</div> <!-- col-9 -->
		</div> <!-- row -->
	</div><!-- .row -->
	
	
</div><!-- about_container -->

<footer class="entry-footer">
	<?php //echo sunset_posted_footer(); ?>
</footer>




<!-- <div class="nav-container nav-homepage"> -->
					
						<!-- <nav class="navbar navbar-expand-md navbar-nells">
							<?php
								/*wp_nav_menu( array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav',
									//'walker' => new Nells_Walker_Nav_Primary()
								) );	*/
							?>
						</nav>
						 -->