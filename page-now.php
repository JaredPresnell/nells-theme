<?php

/*
@package nells
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
			<script>
			    (function($){
			        $(window).on("load",function(){
			            $(".nells_sidebar_container").mCustomScrollbar();
			        });
			    })(jQuery);
			</script>
			<div class="nells_container container-fluid">
				<div class="row">
					<!-- <div class="col-3"> -->
					<?php 
						get_template_part('inc/template-parts/nells', 'sidebar');
					?>	
					<!-- </div> -->
					<div class="col-md-9 col-12 background_gradient offset-md-3">

						<div class="row">
							<div class="col-lg-10 col-md-12 background_solid"> 
								<div class="page_intro">
									<h1 class="intro_title"><?php the_title();?></h1>
									<p>What I'm up to right now, inspired by <a href="https://sivers.org/now" rel="noopener" target="_blank">Derek Sivers</a>.</p>
								</div> 
								<div class='now_content_container'>
									<?php the_content(); ?>
								</div>	
							</div><!-- col-md-10 col-sm-10 -->
							
						</div> <!-- row -->
					</div> <!-- col-9 -->
				</div><!-- .row -->
				
			<?php //get_template_part('inc/template-parts/nells', 'footer');?>	
			</div><!-- about_container -->	

		   <?php
		   	endwhile;	
		    ?>

		
		</div> <!-- container -->
    </main><!-- .site-main -->

 
</div><!-- .content-area -->

<?php get_footer(); ?>