<?php
function modify_contact_methods($profile_fields) {

	// Add new fields
	$profile_fields['website'] = 'Website URL';
	$profile_fields['twitter'] = 'Twitter Username';
	$profile_fields['facebook'] = 'Facebook URL';
	$profile_fields['pinterest'] = 'Pinterest URL';
	$profile_fields['instagram'] = 'Instagram URL';
	$profile_fields['youtube'] = 'YouTube URL';
	$profile_fields['gplus'] = 'Google+ URL';

	return $profile_fields;
}
add_filter('user_contactmethods', 'modify_contact_methods');
?>