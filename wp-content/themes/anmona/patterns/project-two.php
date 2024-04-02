<?php 
/**
 * Title: Project
 * Slug: anmona/project-two
 * Categories: anmona
 * Keywords: project, anmona project
 * Viewport width: 1400
 * 
 * @package Anmona
 */
    $anmona_projects_two = [
        'menu'      => ANMONA_THEME_URI . '/assets/images/menu.jpg',
        'resturant' => ANMONA_THEME_URI . '/assets/images/resturant.jpg',
        'business'  => ANMONA_THEME_URI . '/assets/images/business.jpg',
        'hero'      => ANMONA_THEME_URI . '/assets/images/hero.jpg',
        'corporate' => ANMONA_THEME_URI . '/assets/images/corporate.jpg',
        'theme'     => ANMONA_THEME_URI . '/assets/images/theme.jpg',
    ];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|anmona-extra-large","bottom":"var:preset|spacing|anmona-extra-large","left":"var:preset|spacing|anmona-medium","right":"var:preset|spacing|anmona-medium"}}},"backgroundColor":"anmona-navy-blue","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-anmona-navy-blue-background-color has-background" style="padding-top:var(--wp--preset--spacing--anmona-extra-large);padding-right:var(--wp--preset--spacing--anmona-medium);padding-bottom:var(--wp--preset--spacing--anmona-extra-large);padding-left:var(--wp--preset--spacing--anmona-medium)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|anmona-extra-extra-large"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|anmona-white"}}}},"textColor":"anmona-white"} -->
<h3 class="wp-block-heading has-anmona-white-color has-text-color has-link-color"><?php echo esc_html__( 'My Projects', 'anmona' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|anmona-white"}}}},"textColor":"anmona-white"} -->
<p class="has-anmona-white-color has-text-color has-link-color"><?php echo esc_html__( 'I have completed hundreds of WordPress based Projects including themes, plugins, and Gutenberg based blocks. Here I have noted some notable items that I have completed recently for different clients.', 'anmona' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"anmona-white","style":{"border":{"width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|anmona-white"}}}},"borderColor":"anmona-white","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-anmona-white-color has-text-color has-link-color has-border-color has-anmona-white-border-color wp-element-button" href="#" style="border-width:2px" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'View All Projects', 'anmona' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:gallery {"columns":3,"imageCrop":false,"linkTo":"none","sizeSlug":"full"} -->
<figure class="wp-block-gallery has-nested-images columns-3"><!-- wp:image {"lightbox":{"enabled":true},"id":126,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $anmona_projects_two[ 'menu' ] ); ?>" alt="menu" class="wp-image-126"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"id":127,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $anmona_projects_two[ 'resturant' ] ); ?>" alt="resturant" class="wp-image-127"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"id":128,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $anmona_projects_two[ 'theme' ] ); ?>" alt="theme" class="wp-image-128"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"id":123,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $anmona_projects_two[ 'business' ] ); ?>" alt="business" class="wp-image-123"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"id":124,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $anmona_projects_two[ 'corporate' ] ); ?>" alt="corporate" class="wp-image-124"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"id":125,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $anmona_projects_two[ 'hero' ] ); ?>" alt="hero" class="wp-image-125"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->