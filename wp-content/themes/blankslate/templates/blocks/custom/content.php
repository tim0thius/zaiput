<?php
$background_color = "#fff";
if (get_sub_field('background_color_accent')) {
	$background_color = '#fafafa';
}

if (get_sub_field('image_drop_shadow')) {
	$shadow_class = 'has_shadow';
}
?>
<section id="" class="block-custom-content block-custom-content--image-<?php the_sub_field('image_alignment') ?>" role="main" style="background-color: <?php echo $background_color ?>;">
	<div class="grid__container">
		<div class="grid grid--image-<?php the_sub_field('image_alignment') ?> grid--main" style="display:flex;">
			<div class="grid__item one-whole desk--one-half lap--two-thirds">
				<div class="block-page__content">
					<div class="block-page__content-inner">

						<article id="">
							<header class="header">
								<h1 class="block-page__headline"><?php the_sub_field('headline'); ?></h1>
							</header>
							<section class="block-page__content">
								<?php the_sub_field('content'); ?>
							</section>
						</article>

					</div>
				</div>
			</div>
			<!-- 
			 -->
			<div class="grid__item one-whole desk--one-half lap--one-third">
				<div class="block-page__imagebox">
					<img class="<?php echo $shadow_class; ?>" src="<?php the_sub_field('image') ?>" alt="">
				</div>
			</div>
		</div>

	</div>
</section>