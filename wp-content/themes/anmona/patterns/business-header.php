<?php 
/**
 * Title: Business Header
 * Slug: anmona/business-header
 * Categories: anmona
 * Keywords: header, anmona header, business header
 * Viewport width: 1400
 * 
 * @package Anmona
 */

 $anmona_business_header = [
     'bg_img'    => ANMONA_THEME_URI . '/assets/images/bg.jpg',
 ];

?>
<!-- wp:cover {"url":"<?php echo esc_url( $anmona_business_header[ 'bg_img' ] );?>","id":53,"dimRatio":80,"overlayColor":"anmona-navy-blue","minHeightUnit":"vh","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"var:preset|spacing|anmona-medium","bottom":"var:preset|spacing|anmona-medium","left":"var:preset|spacing|anmona-medium","right":"var:preset|spacing|anmona-medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--anmona-medium);padding-right:var(--wp--preset--spacing--anmona-medium);padding-bottom:var(--wp--preset--spacing--anmona-medium);padding-left:var(--wp--preset--spacing--anmona-medium)"><span aria-hidden="true" class="wp-block-cover__background has-anmona-navy-blue-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-53" alt="" src="<?php echo esc_url( $anmona_business_header[ 'bg_img' ] );?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"position":{"type":""},"dimensions":{"minHeight":"60px"},"spacing":{"padding":{"right":"var:preset|spacing|anmona-small","left":"var:preset|spacing|anmona-small"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|anmona-closet-gray","width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--anmona-closet-gray);border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;min-height:60px;padding-right:var(--wp--preset--spacing--anmona-small);padding-left:var(--wp--preset--spacing--anmona-small)"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:site-logo {"width":48,"shouldSyncIcon":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"75%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:navigation {"ref":7,"textColor":"anmona-white","layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"textTransform":"uppercase"},"spacing":{"blockGap":"var:preset|spacing|anmona-medium"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|anmona-huge","bottom":"var:preset|spacing|anmona-huge"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--anmona-huge);padding-bottom:var(--wp--preset--spacing--anmona-huge)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"750px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":5} -->
<h5 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'No. 1 Leading IT Company', 'anmona' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="line-height:1"><?php echo esc_html__( 'Empower Gutenberg Functionalities', 'anmona' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Anmona is not just another WordPress theme; it\'s a revolution in web design. Built upon the innovative concept of full site editing, Anmona empowers users to craft stunning websites with unparalleled ease and flexibility.', 'anmona' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"anmona-closet-gray","textColor":"anmona-navy-blue","style":{"elements":{"link":{"color":{"text":"var:preset|color|anmona-navy-blue"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-anmona-navy-blue-color has-anmona-closet-gray-background-color has-text-color has-background has-link-color wp-element-button" href="#"><?php echo esc_html__( 'Download My CV', 'anmona' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->