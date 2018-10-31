<h1>Sidebar Options</h1>
<?php settings_errors(); ?>
<?php 
	$profilePicture = esc_attr(get_option('profile_picture')); 
	$firstName = esc_attr(get_option('first_name'));
	$lastName = esc_attr(get_option('last_name'));
	$fullName = $firstName . ' ' . $lastName;
	$pages = esc_attr(get_option('nells_pages'));
?>
<div class="nells_sidebar_preview">
	<h1 class="nells_username"><?php print $fullName; ?>
	</h1>
	<div class="image-container">
		<div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $profilePicture;?>);"></div>
	</div>
	<h2 class="nells_description"></h2>
</div><!-- nells_sidebar_preview -->
<div>
	<form method="post" action="options.php" class="nells_general_form">
		<?php settings_fields('nells-settings-group');?>
		<?php do_settings_sections('nells_admin');	?>
		<?php submit_button();?>
	</form>	
</div>
