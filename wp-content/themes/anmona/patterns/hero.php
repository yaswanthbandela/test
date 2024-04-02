<?php 
/**
 * Title: Hero
 * Slug: anmona/hero
 * Categories: anmona
 * Keywords: hero, anmona hero
 * Viewport width: 1400
 * 
 * @package Anmona
 */
    $anmona_hero = [
        'admin_img' => ANMONA_THEME_URI . '/assets/images/charlie.jpg',
        'bg_img'    => ANMONA_THEME_URI . '/assets/images/bg.jpg',
    ];
?>
<!-- wp:cover {"url":"<?php echo esc_url( $anmona_hero['bg_img'] ); ?>","id":53,"dimRatio":80,"overlayColor":"anmona-navy-blue","minHeight":750,"minHeightUnit":"px","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"var:preset|spacing|anmona-extra-large","bottom":"var:preset|spacing|anmona-extra-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--anmona-extra-large);padding-bottom:var(--wp--preset--spacing--anmona-extra-large);min-height:750px"><span aria-hidden="true" class="wp-block-cover__background has-anmona-navy-blue-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-53" alt="Anmona" src="<?php echo esc_url( $anmona_hero['bg_img'] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|anmona-extra-extra-large"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading"><?php echo esc_html__( 'Charlie', 'anmona' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"1"}}} -->
<h2 class="wp-block-heading" style="line-height:1"><?php echo esc_html__( 'Sr. WordPress Developer', 'anmona' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum tincidunt quam, at sagittis leo efficitur in. Etiam aliquam, augue mollis efficitur rhoncus, arcu felis aliquet felis, a varius diam magna porttitor augue', 'anmona' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"anmona-closet-gray","textColor":"anmona-navy-blue","style":{"elements":{"link":{"color":{"text":"var:preset|color|anmona-navy-blue"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-anmona-navy-blue-color has-anmona-closet-gray-background-color has-text-color has-background has-link-color wp-element-button" href="#"><?php echo esc_html__( 'Download My CV', 'anmona' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"align":"center","lightbox":{"enabled":true},"id":42,"width":"300px","height":"300px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url( $anmona_hero['admin_img'] ); ?>" class="wp-image-42" style="border-radius:50%;object-fit:cover;width:300px;height:300px"/><figcaption class="wp-element-caption"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-anmona-white-color"><?php echo esc_html__( 'Mr. charlie', 'anmona' ); ?></mark></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->