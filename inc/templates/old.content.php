<?php

/*
	
@package nells
-- template for the about page 
*/

?>
<!-- <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css" /> -->
<!-- <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> -->
<script>
    (function($){
        $(window).on("load",function(){
            $(".nells_sidebar_container").mCustomScrollbar();
        });
    })(jQuery);
</script>
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
						<div class="row homepage_row_top">
						</div> <!-- all this does is add margin to the top, i should probably fix this later -->
							<?php the_content(); ?>
						<div class="divider_bottom"></div>	
					</article>	
				</div><!-- col-md-10 col-sm-10 -->	
				
			</div> <!-- col-9 -->
		</div> <!-- row -->
	</div><!-- .row -->
	
	
</div><!-- about_container -->

<footer class="entry-footer">
	<?php //echo sunset_posted_footer(); ?>
</footer>