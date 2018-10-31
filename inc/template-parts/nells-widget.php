<?php 
	$profilePicture = esc_attr(get_option('profile_picture')); 
	$firstName = esc_attr(get_option('first_name'));
	$lastName = esc_attr(get_option('last_name'));
	$fullName = $firstName . ' ' . $lastName;
?>

<div class="nells_sidebar">
	<?php get_template_part('inc/template-parts/logo','sidebar'); ?>
	<div class="image-container">
		<div class="border_div">
			<div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $profilePicture;?>);"></div>
		</div>
	</div>
	<!-- <h2 class="nells_description"></h2> -->
</div><!-- nells_sidebar_preview -->