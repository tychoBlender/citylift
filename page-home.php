<?php
/**
 * Template Name: One Page Site 
 */
get_header(); ?>

	<div id="primary" class="content-area">		
		<div id="scrollTab"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 18 21" enable-background="new 0 0 18 21" xml:space="preserve">
<g id="UUenwz.tif" display="none">
	<g display="inline">
		<g>
			<g>
				
					<image overflow="visible" width="18" height="21" id="Layer_1_8_" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAWCAYAAAAinad/AAAACXBIWXMAAAsSAAALEgHS3X78AAAA
GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAUpJREFUeNrs1DFIAlEcx3F9mgQK
zkKLg0sNktBgU07NTY0aZBBhUVLSJII0NDQWVJCDk2ASRBRENQTtBYGIDi3OkqSL2PfJfzgszkNu
9ODDO+/93+89796dw2Hj4RxV8LBylaQJ4nK5stYYK4wQ3beFDGZQxiFqhFoPI0jR7CKNgKHrFvuo
EtgfGSZBegUp+DEFF7py/iQTfQ4HqqEgXZzDDnzYw7t0H+ANMZwiLBP/DaPDQ5PHJqaxjSJaUvKB
dbxiEWeYNwYqCdKDj5GUa/rGl/gb38aZ+V2VwGdEcI4FxrsGYZx4aU+QQE9WVmZg+7+Hw/W6BD5i
DheIkuPWq8hiFR1s4IYBP2b7if4vCbxHSBYzq+RmXiOOOwq7VnY7dU2ZvIAj1K28Afr+LOmnSMCL
Wa2y892chE3CzL60ho057jHY0Lau7FeAAQA552ED8QETzQAAAABJRU5ErkJggg==">
				</image>
			</g>
		</g>
	</g>
</g>
<g>
	<g>
		<g>
			<g>
				<rect x="9" y="18.9" fill="#FFFFFF" width="7.9" height="2.1"/>
			</g>
		</g>
	</g>
</g>
<g>
	<g>
		<g>
			<g>
				<rect x="8.9" y="0.1" fill="#FFFFFF" width="1" height="19.3"/>
			</g>
		</g>
	</g>
</g>
<g>
	<g>
		<g>
			<g>
				
					<rect x="12.3" y="-1" transform="matrix(0.716 -0.6981 0.6981 0.716 0.3564 10.6108)" fill="#FFFFFF" width="1.9" height="11.7"/>
			</g>
		</g>
	</g>
</g>
<g>
	<g>
		<g>
			<g>
				<rect x="1.1" y="18.9" fill="#FFFFFF" width="7.9" height="2.1"/>
			</g>
		</g>
	</g>
</g>
<g>
	<g>
		<g>
			<g>
				<rect x="8.1" y="0.1" fill="#FFFFFF" width="1" height="19.3"/>
			</g>
		</g>
	</g>
</g>
<g>
	<g>
		<g>
			<g>
				
					<rect x="3.8" y="-1" transform="matrix(-0.716 -0.6981 0.6981 -0.716 4.804 11.6888)" fill="#FFFFFF" width="1.9" height="11.7"/>
			</g>
		</g>
	</g>
</g>
</svg>
</div>	
		<main id="main" class="site-main" role="main">				
			<?php 
			    $args = array(
			        'post_type' => 'page',
			        'post__not_in' => array(12,95) , //excludes HomePage
			        'order' => 'ASC'
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	

			<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; endif; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
