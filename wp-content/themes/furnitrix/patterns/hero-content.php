<?php
 /**
  * Title: Hero Content
  * Slug: furnitrix/hero-content
  * Categories: furnitrix, page
  */
?>

<!-- wp:group {"align":"full","className":"wp-block-section  wp-block-hero-content"} -->
<div class="wp-block-group alignfull wp-block-section wp-block-hero-content">
	<!-- wp:group {"layout":{"inherit":false}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"color":{}},"layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:media-text {"mediaPosition":"right","mediaId":15319,"mediaLink":"http://localhost/catchmain/?attachment_id=15319","mediaType":"image"} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile">
				<div class="wp-block-media-text__content">
					<!-- wp:group {"className":"wp-block-group-heading"} -->
					<div class="wp-block-group wp-block-group-heading">
						<!-- wp:heading -->
            <h2><?php esc_html_e ( 'Exquisite Decors', 'furnitrix' ) ?></h2>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph -->
					<p><?php printf( 
							esc_html__( 'Modern Furniture from Famous Manufacturers and Designers Offering the Finest Furnishings for Every Room of Your %1$sHome%2$s or %1$sOffice.%2$s', 'furnitrix' ), 
							'<span>', 
							'</span>' 
					);?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p><?php printf( 
							esc_html__( 'Conservation of forests while providing the customers with the best selection &amp;amp; quality available for  %1$sFurnitrix%2$s made wood furniture', 'furnitrix' ), 
							'<span>', 
							'</span>' 
					);?></p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"className":"is-style-outline"} -->
						<div class="wp-block-button is-style-outline">
						<a class="wp-block-button__link wp-element-button"><?php esc_html_e ( 'About Us', 'furnitrix' ) ?></a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<figure class="wp-block-media-text__media">
				<img src="<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/hero-content.png' )); ?>" alt="" class="wp-image-15319 size-full"/>
				</figure>
			</div>
			<!-- /wp:media-text -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->