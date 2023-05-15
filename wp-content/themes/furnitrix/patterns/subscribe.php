<?php
 /**
  * Title: Subscribe
  * Slug: furnitrix/subscribe
  * Categories: furnitrix, page
  */
?>


<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/subscribe-bg.jpg' ); ?>","dimRatio":60,"align":"full","className":"wp-block-section wp-block-subscribe"} -->
<div class="wp-block-cover alignfull wp-block-section wp-block-subscribe">
   <span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/subscribe-bg.jpg' ); ?>" data-object-fit="cover"/>
   <div class="wp-block-cover__inner-container">
      <!-- wp:group {"layout":{"inherit":true}} -->
      <div class="wp-block-group">
         <!-- wp:group {"align":"wide","className":"wp-block-subscribe"} -->
         <div class="wp-block-group alignwide wp-block-subscribe">
            <!-- wp:columns {"align":"wide"} -->
            <div class="wp-block-columns alignwide">
               <!-- wp:column -->
               <div class="wp-block-column">
                  <!-- wp:group {"align":"wide","className":"wp-block-group-heading"} -->
                  <div class="wp-block-group alignwide wp-block-group-heading">
                     <!-- wp:heading -->
                     <h2 class="wp-block-heading"><?php esc_html_e ( 'Newsletter', 'furnitrix' ) ?><br><?php esc_html_e ( 'For Update & Offer', 'furnitrix' ) ?></h2>
                     <!-- /wp:heading -->
                  </div>
                  <!-- /wp:group -->
               </div>
               <!-- /wp:column -->
               <!-- wp:column -->
               <div class="wp-block-column">
                  <!-- wp:group -->
                  <div class="wp-block-group">
                     <!-- wp:tnp/minimal {"padding":0} -->
                     <div style="padding:0" class="wp-block-tnp-minimal">
                        <p></p>
                        <div>[newsletter_form type="minimal"]</div>
                     </div>
                     <!-- /wp:tnp/minimal -->
                  </div>
                  <!-- /wp:group -->
               </div>
               <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
         </div>
         <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
   </div>
</div>
<!-- /wp:cover -->
