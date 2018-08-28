<div class="card-testimonial-item">
		<div class="card-testimonial-item__category">
			<span>{{the_field('category')}}</span>
		</div>
		<div class="card-testimonial-item__details">	
			<p class="card-testimonial-item__content">{{the_field('message')}}</p>
			<div class="grid grid--full">
				<?php if(get_field('avatar')) : ?>
				<div class="grid__item one-eighth">
					<img class="card-testimonial-item__avatar" src="{{ the_field('avatar') }}" alt="">
				</div><? endif; ?><!-- 
				 --><div class="grid__item seven-eighths">
				 	<div class="card-testimonial-item__meta<?php if(!get_field('avatar')) : ?> no-avatar<? endif; ?>">
						<span class="card-testimonial-item__name">{{the_title()}}</span>
						<span class="card-testimonial-item__subtext">{{ the_field('subtext') }}</span>
					</div>
				</div>
			</div>	
		</div>
</div>