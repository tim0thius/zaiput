<section id="block-about--<?= $about_id ?>" class="block-about" role="main" >
		<div class="grid__container">
			<div class="grid">
				<div class="grid__item one-whole desk--one-half">
					<div class="block-about__content">
						<div class="block-about__content-inner">
							<h2 class="block-about__headline">Zaiput in Space</h2>
							<p class="block-about__summary">{{the_field('about_me_summary', 'option')}}</p>
							<span class="block-about__readmore" >read the article: <a href="" class="block-about__readmore-link">Article Name</a></span>
						</div>
					</div>
				</div><!-- 
				 --><div class="grid__item one-whole desk--one-half">
					<div class="block-about__imagebox" style="background-image: url('{{the_field('about_image', 'option')}}')"></div>
				</div>
			</div>
			
		</div>
</section>