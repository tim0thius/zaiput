<?php
$bg_url = get_field('default_background_image', 'option');
if(get_field('background_image')){
	$bg_url = get_field('background_image');
}
?>
<div id="component-subpage-header" class="component-subpage-header section section--contained" style="background-image: url({{ $bg_url }})" >
</div>