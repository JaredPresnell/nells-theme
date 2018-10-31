<?php

/*
	
@package nells
*/

if( ! is_active_sidebar('nells-sidebar-mobile') ) {
	return;
}
?>

<aside id="secondary" class="nells_mobile_sidebar" role="complementary">
	<?php dynamic_sidebar( 'nells-sidebar-mobile' ); ?>	
</aside>

