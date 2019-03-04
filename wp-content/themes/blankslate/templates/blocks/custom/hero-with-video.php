<section id="block-hero--" class="block-hero block-hero--custom video--<?php the_sub_field('video_alignment') ?> video--<?php the_sub_field('video_type') ?>">
	<div class="grid__super-container-wrap" style="background-image: url(<?php the_sub_field('bg_img') ?>);">
	<div class="grid__super-container">

		<div class="grid__container">
			<div class="grid grid--full">
				<div class="grid__item one-half portable--one-whole">
					<div class="block-hero__content" >
						<h2 class="block-hero__headline"><span><?php the_sub_field('headline'); ?></span></h2>
					</div>
				</div><!-- 
				 --><div class="grid__item one-half portable--one-whole">
					<div class="block-hero__video-wrapper" >
						<div class="block-hero__video" >

							<!-- Need logic to switch based on video_typ subfield -->
							<?php 

								$file = get_sub_field('local_video');
								$url = $file['url'];
								$title = $file['title'];
								$caption = $file['caption'];
								$type = $file['mime_type'];

								// echo "<pre style='background-color: white;font-size: 18px; line-height: 1.5; font-weight: bold;' >";
								//var_dump($file);
								// echo "</pre>";
							?>
								
							<?php if(get_sub_field('video_type') == 'oembed'): ?>
								<?php the_sub_field('oembed_video'); ?>
							<?php endif; ?>

							<?php if(get_sub_field('video_type') == 'local'): ?>
								<video autoplay controls muted loop id="block-hero__bg-video" class="block-hero__bg-video" >
									<source src="<?php echo $url ?>" type="<?php echo $type; ?>">
								</video>
							<?php endif; ?>

								<?php if(get_sub_field('video_type') == 'youtube'): ?>
									<iframe width="100%" height="" src="https://www.youtube.com/embed/<?php the_sub_field('youtube_video_id'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<?php endif; ?>
							
						</div>		
					</div>		
				</div>
			</div>
		</div>
</section>