<h1>Sidebar Options</h1>
<?php settings_errors(); ?>
<?php 
	$pages = esc_attr(get_option('nells_pages')); 
?>
<h1><?php print $pages; ?></h1>
<form method="post" action="options.php" class="nells_general_form">
	<?php settings_fields('nells-pages-settings-group');?>
	<?php do_settings_sections('nells_admin_settings');	?>
	<?php submit_button();?>
</form>	

