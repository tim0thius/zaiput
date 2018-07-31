<section id="block-product-tabs--<?= $post_slug ?>" class="block-product-tabs">
	<div class="grid__container">
			<div class="" >
				<div class="grid">
					<div class="grid__item one-quarter">
						<ul class="block-product-tabs__tab-container">
							@if(get_field(description_content))
							<li class="block-product-tabs__tab"><a data-tab-target="description" class="action--open-tab active" >Description</a></li>
							@endif
							@if(get_field(features_content))
							<li class="block-product-tabs__tab"><a data-tab-target="features" class="action--open-tab" >Features</a></li>
							@endif
							@if(get_field(how-it-works_content))
							<li class="block-product-tabs__tab"><a data-tab-target="how" class="action--open-tab" >How It Works</a></li>
							@endif
							@if(get_field(performance_content))
							<li class="block-product-tabs__tab"><a data-tab-target="performance" class="action--open-tab" >Performance</a></li>
							@endif
							@if(get_field(applications_content))
							<li class="block-product-tabs__tab"><a data-tab-target="applications" class="action--open-tab" >Applications</a></li>
							@endif
							@if(get_field(membranes_content))
							<li class="block-product-tabs__tab"><a data-tab-target="membranes" class="action--open-tab" >Membranes</a></li>
							@endif
							@if(get_field(literature_content))
							<li class="block-product-tabs__tab"><a data-tab-target="literature" class="action--open-tab" >Literature</a></li>
							@endif
							@if(get_field(specifications_content))
							<li class="block-product-tabs__tab"><a data-tab-target="specifications" class="action--open-tab" >Specifications</a></li>
							@endif
							@if(get_field(ordering_info_content))
							<li class="block-product-tabs__tab"><a data-tab-target="ordering" class="action--open-tab" >Ordering Information</a></li>
							@endif
							@if(get_field(product_faq_content))
							<li class="block-product-tabs__tab"><a data-tab-target="faq" class="action--open-tab" >FAQ</a></li>
							@endif
						</ul>
					</div><!-- 
					 --><div class="grid__item three-quarters">	
					 <div class="block-product-tabs__container">
					 	<div class="block-product-tabs__content active" id="description" >
					 		<!-- Description -->
					 		{{the_field('description_content')}}
					 	</div>
						<div class="block-product-tabs__content" id="features" >
							<!-- Features -->
							{{the_field('features_content')}}
						</div>
						<div class="block-product-tabs__content" id="how" >
							<!-- How It Works -->
							{{the_field('how-it-works_content')}}
						</div>
						<div class="block-product-tabs__content" id="performance" >
							<!-- Performance -->
							{{the_field('performance_content')}}
						</div>
						<div class="block-product-tabs__content" id="applications" >
							<!-- Applications -->
							{{the_field('applications_content')}}
						</div>
						<div class="block-product-tabs__content" id="membranes" >
							<!-- Membranes -->
							{{the_field('membranes_content')}}
						</div>
						<div class="block-product-tabs__content" id="literature" >
							<!-- Literature -->
							{{the_field('literature_content')}}
						</div>
						<div class="block-product-tabs__content" id="specifications" >
							<!-- Specifications -->
							{{the_field('specifications_content')}}
						</div>
						<div class="block-product-tabs__content" id="ordering" >
							<!-- Ordering Information -->
							{{the_field('ordering_info_content')}}
						</div>	<div class="block-product-tabs__content" id="faq" >
							<!-- product FAQ -->
							{{the_field('product_faq_content')}}
						</div>					
					 </div>							
					</div>
				</div>	
			</div>
		</div>	
</section>