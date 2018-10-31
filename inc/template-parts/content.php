<?php

/*
@package nells
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header text-center">
		
		<?php the_title( '<h1 class="entry-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h1>'); ?>
		
		<div class="entry-meta">
		</div>
		
	</header>
	
	<div class="entry-content">
		
		<div class="entry-excerpt">
			<?php the_excerpt(); ?>
		</div>
		
		<div class="button-container text-center">
			<a href="<?php the_permalink(); ?>" class="btn"><?php _e( 'Read More' ); ?></a>
		</div>
		
	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
	</footer>
	
</article>