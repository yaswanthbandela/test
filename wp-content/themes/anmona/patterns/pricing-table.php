<?php 
/**
 * Title: Pricing Table
 * Slug: anmona/pricing-table
 * Categories: anmona
 * Keywords: pricing, anmona pricing
 * Viewport width: 1400
 * 
 * @package Anmona
 */
    $anmona_pricing_table = [
        'check' => ANMONA_THEME_URI . '/assets/images/check.png',
    ];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|anmona-extra-large","bottom":"var:preset|spacing|anmona-extra-large","left":"var:preset|spacing|anmona-medium","right":"var:preset|spacing|anmona-medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"40vh"}},"className":"has-background-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color" style="min-height:40vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--anmona-extra-large);padding-right:var(--wp--preset--spacing--anmona-medium);padding-bottom:var(--wp--preset--spacing--anmona-extra-large);padding-left:var(--wp--preset--spacing--anmona-medium)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|anmona-extra-small"}}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--anmona-extra-small)"><?php echo esc_html__( 'Pricing', 'anmona' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Choose best pricing that suites your requirement.', 'anmona' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|anmona-normal"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--anmona-normal)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|anmona-medium"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"border":{"radius":"15px","width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|anmona-medium","left":"var:preset|spacing|anmona-medium","top":"var:preset|spacing|anmona-medium","bottom":"var:preset|spacing|anmona-medium"}}},"borderColor":"anmona-closet-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-anmona-closet-gray-border-color" style="border-width:1px;border-radius:15px;padding-top:var(--wp--preset--spacing--anmona-medium);padding-right:var(--wp--preset--spacing--anmona-medium);padding-bottom:var(--wp--preset--spacing--anmona-medium);padding-left:var(--wp--preset--spacing--anmona-medium)"><!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading"><?php echo esc_html__( 'Basic', 'anmona' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php echo esc_html__( 'FREE', 'anmona' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","width":100,"style":{"elements":{"link":{"color":{"text":"#111111"}}},"border":{"radius":"5px","width":"1px"}},"borderColor":"contrast","className":"is-style-fill","fontSize":"small"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill has-small-font-size"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-border-color has-contrast-border-color wp-element-button" href="#" style="border-width:1px;border-radius:5px"><?php echo esc_html__( 'Get Started', 'anmona' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"25px"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"24px","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( $anmona_pricing_table[ 'check'] );?>" alt="check box" style="object-fit:cover;width:24px;height:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Up to 10 minutes Project consultation', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"undefinedpx","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( $anmona_pricing_table[ 'check'] );?>" alt="check box" style="width:24px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Domain Suggestion', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"undefinedpx","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( $anmona_pricing_table[ 'check'] );?>" alt="check box" style="width:24px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Best Hosting Suggestion', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"undefinedpx","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( $anmona_pricing_table[ 'check'] );?>" alt="check box" style="width:24px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Finding best Plugins', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"border":{"radius":"15px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|anmona-medium","bottom":"var:preset|spacing|anmona-medium","left":"var:preset|spacing|anmona-medium","right":"var:preset|spacing|anmona-medium"}}},"borderColor":"black","backgroundColor":"anmona-navy-blue","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-black-border-color has-white-color has-anmona-navy-blue-background-color has-text-color has-background" style="border-width:1px;border-radius:15px;padding-top:var(--wp--preset--spacing--anmona-medium);padding-right:var(--wp--preset--spacing--anmona-medium);padding-bottom:var(--wp--preset--spacing--anmona-medium);padding-left:var(--wp--preset--spacing--anmona-medium)"><!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading"><?php echo esc_html__( 'Premium', 'anmona' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4} -->
<h4 class="wp-block-heading has-text-align-left"><?php echo esc_html__( '$59', 'anmona' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#b7b7b7"},"elements":{"link":{"color":{"text":"#b7b7b7"}}}},"fontSize":"small"} -->
<p class="has-text-align-left has-text-color has-link-color has-small-font-size" style="color:#b7b7b7"><?php echo esc_html__( 'USD / year', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:button {"width":100,"style":{"border":{"radius":"5px","width":"1px"}},"borderColor":"anmona-gray","fontSize":"small"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-border-color has-anmona-gray-border-color wp-element-button" href="#" style="border-width:1px;border-radius:5px"><?php echo esc_html__( 'Get Started', 'anmona' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"25px"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"24px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}},"className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( $anmona_pricing_table[ 'check'] );?>" alt="check box" style="object-fit:cover;width:24px;height:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'All Free', 'anmona' ); ?></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"undefinedpx","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}},"className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( $anmona_pricing_table[ 'check'] );?>" alt="check box" style="width:24px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Full Site Creating Up to 5 Pages', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"undefinedpx","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}},"className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( $anmona_pricing_table[ 'check'] );?>" alt="check box" style="width:24px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( '2GB Hosting Storage', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"undefinedpx","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}},"className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( $anmona_pricing_table[ 'check'] );?>" alt="check box" style="width:24px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'All Plugins Configuration', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"undefinedpx","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}},"className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( $anmona_pricing_table[ 'check'] );?>" alt="check box" style="width:24px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'White labeling', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"undefinedpx","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}},"className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( $anmona_pricing_table[ 'check'] );?>" alt="check box" style="width:24px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Huge Attachments', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"border":{"radius":"15px","width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|anmona-medium","left":"var:preset|spacing|anmona-medium","top":"var:preset|spacing|anmona-medium","bottom":"var:preset|spacing|anmona-medium"}}},"borderColor":"anmona-closet-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-anmona-closet-gray-border-color" style="border-width:1px;border-radius:15px;padding-top:var(--wp--preset--spacing--anmona-medium);padding-right:var(--wp--preset--spacing--anmona-medium);padding-bottom:var(--wp--preset--spacing--anmona-medium);padding-left:var(--wp--preset--spacing--anmona-medium)"><!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading"><?php echo esc_html__( 'Business', 'anmona' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4} -->
<h4 class="wp-block-heading has-text-align-left"><?php echo esc_html__( '$99', 'anmona' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#b7b7b7"},"elements":{"link":{"color":{"text":"#b7b7b7"}}}},"fontSize":"small"} -->
<p class="has-text-align-left has-text-color has-link-color has-small-font-size" style="color:#b7b7b7"><?php echo esc_html__( 'USD / year', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","width":100,"style":{"elements":{"link":{"color":{"text":"#111111"}}},"border":{"radius":"5px","width":"1px"}},"borderColor":"contrast","fontSize":"small"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-border-color has-contrast-border-color wp-element-button" href="#" style="border-width:1px;border-radius:5px"><?php echo esc_html__( 'Get Started', 'anmona' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"25px"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"24px","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( $anmona_pricing_table[ 'check'] );?>" alt="check box" style="object-fit:cover;width:24px;height:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'All Premium', 'anmona' ); ?></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"undefinedpx","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( $anmona_pricing_table[ 'check'] );?>" alt="check box" style="width:24px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( '5TB storage', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"undefinedpx","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( $anmona_pricing_table[ 'check'] );?>" alt="check box" style="width:24px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Agency access', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"24px","height":"undefinedpx","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( $anmona_pricing_table[ 'check'] );?>" alt="check box" style="width:24px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Reseller access', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->