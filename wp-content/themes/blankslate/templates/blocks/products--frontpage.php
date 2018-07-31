<?php
	$args = array('post_type' => 'product');
	$category_posts = new WP_Query($args);

	$index = 0;
	if(get_row_index()){
		$index = get_row_index();
	}
?>
<section id="block-product--<?= $product_id ?>-<?= $index ?> " class="block-product" role="main" >
		<div class="grid__container">
			<div class="grid">
				<?php

				   // $args = array('post_type' => 'product');
				   // $category_posts = new WP_Query($args);

				   if($category_posts->have_posts()) : 
				   	$counter = 0;
				      while($category_posts->have_posts()) : 
				         $category_posts->the_post();			    
				?><!-- 
				 --><div class="grid__item one-third palm--one-whole">
					@include( 'templates/cards/product-item' )	
				</div><!-- 
				 --><?php
				 		$counter ++;
				         if($counter == 6){break;}
				      endwhile;
				   else: 
				?>
				    Oops, there are no posts.
				<?php
				   endif;
				   wp_reset_postdata();
				?>
			</div>
		</div>
</section>