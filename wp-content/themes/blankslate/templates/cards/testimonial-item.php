<div class="card-testimonial-item">
		<div class="card-testimonial-item__category">
			<span>{{the_field('category')}}</span>
		</div>
		<div class="card-testimonial-item__details">
			<span class="card-testimonial-item__category card-testimonial-item__category--mobile">Product: {{the_field('category')}}</span>	
			<p class="card-testimonial-item__content">{{the_field('message')}}</p>
			<div class="card-testimonial-item__footer">
				<?php if(get_field('avatar')) : ?>
					<img class="card-testimonial-item__avatar" src="{{ the_field('avatar') }}" alt="">
				<? endif; ?>
			 	<div class="card-testimonial-item__meta<?php if(!get_field('avatar')) : ?> no-avatar<? endif; ?>">
					<span class="card-testimonial-item__name">{{the_title()}}</span>
					<span class="card-testimonial-item__subtext">{{ the_field('subtext') }}</span>
				</div>
			</div>	
			<?php if($counter < $testimonials_count - 1) : ?>
				<hr class="component__divider">
			<?php endif; ?>
		</div>
</div>