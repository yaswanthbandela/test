<?php 
/**
 * Title: Testimonial
 * Slug: anmona/testimonial
 * Categories: anmona
 * Keywords: testimonial, anmona testimonial
 * Viewport width: 1400
 * 
 * @package Anmona
 */
    $anmona_testimonial = [
        'admin_img' => ANMONA_THEME_URI . '/assets/images/charlie.jpg',
        'quote_icon'    => ANMONA_THEME_URI . '/assets/images/quote.png',
    ];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|anmona-extra-extra-large","bottom":"var:preset|spacing|anmona-extra-extra-large","left":"var:preset|spacing|anmona-medium","right":"var:preset|spacing|anmona-medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"anmona-navy-blue","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-anmona-navy-blue-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--anmona-extra-extra-large);padding-right:var(--wp--preset--spacing--anmona-medium);padding-bottom:var(--wp--preset--spacing--anmona-extra-extra-large);padding-left:var(--wp--preset--spacing--anmona-medium)"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"letterSpacing":"5px"}},"textColor":"anmona-closet-white"} -->
<p class="has-text-align-center has-anmona-closet-white-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;letter-spacing:5px"><?php echo esc_html__( 'TESTIMONIALS', 'anmona' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|anmona-extra-small","bottom":"var:preset|spacing|anmona-normal"}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="margin-top:var(--wp--preset--spacing--anmona-extra-small);margin-bottom:var(--wp--preset--spacing--anmona-normal)"><?php echo esc_html__( 'Clients Feedback', 'anmona' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|anmona-small","bottom":"var:preset|spacing|anmona-small","left":"var:preset|spacing|anmona-small","right":"var:preset|spacing|anmona-small"}},"border":{"radius":"5px"}},"backgroundColor":"anmona-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-anmona-white-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--anmona-small);padding-right:var(--wp--preset--spacing--anmona-small);padding-bottom:var(--wp--preset--spacing--anmona-small);padding-left:var(--wp--preset--spacing--anmona-small)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p style="margin-top:0;margin-bottom:0"><img class="wp-image-163" style="width: 50px;" src="<?php echo esc_url( $anmona_testimonial[ 'quote_icon' ] );?>" alt="quote"> <em><?php echo esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using this is that it has a more-or-less normal', 'anmona' ); ?></em>.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|anmona-extra-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":42,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( $anmona_testimonial[ 'admin_img' ] );?>" alt="" class="wp-image-42" style="border-radius:50%;object-fit:cover;width:50px;height:50px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-anmona-navy-blue-color"><?php echo esc_html__( 'John Doe', 'anmona' ); ?></mark></strong><br><?php echo esc_html__( 'CEO, Gutenbergkits', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|anmona-small","bottom":"var:preset|spacing|anmona-small","left":"var:preset|spacing|anmona-small","right":"var:preset|spacing|anmona-small"}},"border":{"radius":"5px"}},"backgroundColor":"anmona-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-anmona-white-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--anmona-small);padding-right:var(--wp--preset--spacing--anmona-small);padding-bottom:var(--wp--preset--spacing--anmona-small);padding-left:var(--wp--preset--spacing--anmona-small)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p style="margin-top:0;margin-bottom:0"><img class="wp-image-163" style="width: 50px;" src="<?php echo esc_url( $anmona_testimonial[ 'quote_icon' ] );?>" alt="quote"> <em><?php echo esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using this is that it has a more-or-less normal', 'anmona' ); ?></em>.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|anmona-extra-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":42,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( $anmona_testimonial[ 'admin_img' ] );?>" alt="" class="wp-image-42" style="border-radius:50%;object-fit:cover;width:50px;height:50px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-anmona-navy-blue-color"><?php echo esc_html__( 'John Doe', 'anmona' ); ?></mark></strong><br><?php echo esc_html__( 'CEO, Gutenbergkits', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|anmona-small","bottom":"var:preset|spacing|anmona-small","left":"var:preset|spacing|anmona-small","right":"var:preset|spacing|anmona-small"}},"border":{"radius":"5px"}},"backgroundColor":"anmona-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-anmona-white-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--anmona-small);padding-right:var(--wp--preset--spacing--anmona-small);padding-bottom:var(--wp--preset--spacing--anmona-small);padding-left:var(--wp--preset--spacing--anmona-small)"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p style="margin-top:0;margin-bottom:0"><img class="wp-image-163" style="width: 50px;" src="<?php echo esc_url( $anmona_testimonial[ 'quote_icon' ] );?>" alt="quote"> <em><?php echo esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using this is that it has a more-or-less normal', 'anmona' ); ?></em>.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|anmona-extra-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":42,"width":"50px","height":"50px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( $anmona_testimonial[ 'admin_img' ] );?>" alt="" class="wp-image-42" style="border-radius:50%;object-fit:cover;width:50px;height:50px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-anmona-navy-blue-color"><?php echo esc_html__( 'John Doe', 'anmona' ); ?></mark></strong><br><?php echo esc_html__( 'CEO, Gutenbergkits', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->