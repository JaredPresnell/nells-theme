<?php /*
	
@package nells

*/

if(is_front_page()){
	get_header('homepage');
}
else{get_header();} ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div class="container">
				
				<?php 
					//query_posts(array('post_type' =>array('book') ) );
					
					if(have_posts()):
					   	while ( have_posts() ) : the_post();
							get_template_part( 'inc/template-parts/content', get_post_format() );						

					    ?> 
					    <?php
							endwhile;
						   	endif;
					    ?>
                	
				?>
				
			</div><!-- .container -->	
		</main>
	</div><!-- #primary -->
	
<?php get_footer(); ?>