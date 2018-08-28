 <div class="card-team-item">
		<div class="card-team-item__avatar">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
		</div>
		<div class="card-team-item__details">
			<h4 class="card-team-item__title"><?php echo $title; ?></h4>
			<p class="card-team-item__bio"><?php echo $content; ?></p>
			<?php if(get_row_index() < $count - 1) : ?>
				<hr class="component__divider">
			<?php endif; ?>
		</div>

</div>