<?php
 /**
  * Title: Header Media
  * Slug: furnitrix/header-media
  * Categories: furnitrix, header
  */
?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/slider-one.jpg' ); ?>","id":15177,"dimRatio":60,"focalPoint":{"x":"0.54","y":"0.57"},"align":"full","className":"wp-block-custom-header-media wp-block-section wp-block-no-padding"} -->
<div class="wp-block-cover alignfull wp-block-custom-header-media wp-block-section wp-block-no-padding">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span>
	<img class="wp-block-cover__image-background wp-image-15177" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/slider-one.jpg' ); ?>" style="object-position:54% 57%" data-object-fit="cover" data-object-position="54% 57%"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"textAlign":"center"} -->
			<h2 class="has-text-align-center"><?php esc_html_e ( 'Minimal Collection', 'furnitrix' ) ?></h2>
			<!-- /wp:heading -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button"><?php esc_html_e ( 'Shop Now', 'furnitrix' ) ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->