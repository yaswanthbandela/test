<?php
/**
 * Title: 404
 * Slug: anmona/404
 * Categories: anmona
 * Keywords: 404, anmona 404, Not Found
 * Viewport width: 1400
 * 
 * @package Anmona
 */
    $anmona_found_found = [
        '404' => ANMONA_THEME_URI . '/assets/images/404.jpg',
    ];
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|anmona-extra-large","bottom":"var:preset|spacing|anmona-extra-large","left":"var:preset|spacing|anmona-medium","right":"var:preset|spacing|anmona-medium"}},"dimensions":{"minHeight":"50vh"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"horizontal"}} -->
<main class="wp-block-group" style="min-height:50vh;padding-top:var(--wp--preset--spacing--anmona-extra-large);padding-right:var(--wp--preset--spacing--anmona-medium);padding-bottom:var(--wp--preset--spacing--anmona-extra-large);padding-left:var(--wp--preset--spacing--anmona-medium)"><!-- wp:image {"id":205,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $anmona_found_found[ '404' ] );?>" alt="Not Found" class="wp-image-205"/></figure>
<!-- /wp:image --></main>
<!-- /wp:group -->