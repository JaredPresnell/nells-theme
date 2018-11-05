<?php 
	
/*
	@package nells
*/
	
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="google-site-verification" content="4hHkUljiqWGO4fntf5smbp-ujtQcej7j6VpHr2uZO3k" />
		<?php if(is_front_page()){
			$title = "Jared Presnell";
		}
		else if(is_page('About')){
			$title="About | Jared Presnell";
		}
		else $title= get_the_title() . " | Jared Presnell";
		?> 
		<title><?php echo $title ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<?php wp_head(); ?>	
		
	</head>


<body <?php body_class(); ?>>

