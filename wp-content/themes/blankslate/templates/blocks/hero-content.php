<section id="block-hero-content--<?= $hero_content_id ?>-<?= get_row_index() ?>" class="block-hero-content {{ get_sub_field( 'content_placement' ) }}" role="main" style="background-image:url({{ get_sub_field( 'hp_hero_bg_image' ) }})" >
		<div class="grid__super-container" >
			<div class="grid__container" >
				<div class="block-hero-content__content">
					<div class="block-hero-content__content-inner">
						<p class="block-hero-content__summary">{{the_field('about_me_summary', 'option')}}</p>
					</div>
				</div>
			</div>
		</div>
</section>