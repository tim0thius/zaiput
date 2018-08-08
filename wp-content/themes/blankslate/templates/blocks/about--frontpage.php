<section id="block-about--<?= $about_id ?>" class="block-about" role="main" >
		<div class="grid__container">
			<div class="grid">
				<div class="grid__item one-half portable--one-whole">
					<div class="block-about__content">
						<div class="block-about__content-inner">
							<h2 class="block-about__headline">Zaiput in Space</h2>
							<p class="block-about__summary">{{the_field('about_me_summary', 'option')}}</p>
							<span class="block-about__readmore" ><img class="block-about__link-icon" src="/wp-content/themes/blankslate/assets/img/icon_link.svg" alt=""><a href="/zaiput-in-space/" class="block-about__readmore-link">Read the full article</a></span>
						</div>
					</div>
				</div><!-- 
				 --><div class="grid__item one-half portable--one-whole">
					<div class="block-about__imagebox" style="background-image: url('{{the_field('about_image', 'option')}}')"></div>
				</div>
			</div>
			
		</div>
</section>