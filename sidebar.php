<?php

/*
	
@package nells
*/

if( ! is_active_sidebar('nells-sidebar') ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'nells-sidebar' ); ?>
</aside>

