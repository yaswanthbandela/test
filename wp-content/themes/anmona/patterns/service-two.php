<?php 
/**
 * Title: Service
 * Slug: anmona/service-two
 * Categories: anmona
 * Keywords: service, anmona service
 * Viewport width: 1400
 * 
 * @package Anmona
 */
    $anmona_service_two = [
        'dev_icon'    => ANMONA_THEME_URI . '/assets/images/dev.png',
        'plugin_icon' => ANMONA_THEME_URI . '/assets/images/plugin.png',
        'block_icon'  => ANMONA_THEME_URI . '/assets/images/block.png',
    ];
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|anmona-medium","left":"var:preset|spacing|anmona-medium","top":"var:preset|spacing|anmona-extra-large","bottom":"var:preset|spacing|anmona-extra-large"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"anmona-navy-blue","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-anmona-navy-blue-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--anmona-extra-large);padding-right:var(--wp--preset--spacing--anmona-medium);padding-bottom:var(--wp--preset--spacing--anmona-extra-large);padding-left:var(--wp--preset--spacing--anmona-medium)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|anmona-extra-small"}},"elements":{"link":{"color":{"text":"var:preset|color|anmona-white"}}}},"textColor":"anmona-white"} -->
<h3 class="wp-block-heading has-text-align-center has-anmona-white-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--anmona-extra-small)"><?php echo esc_html__( 'My Services', 'anmona' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|anmona-normal","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|anmona-white"}}}},"textColor":"anmona-white"} -->
<p class="has-text-align-center has-anmona-white-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--anmona-normal);margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__( 'I offer different types of WordPress based services', 'anmona' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|anmona-medium"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|anmona-normal","bottom":"var:preset|spacing|anmona-normal","left":"var:preset|spacing|anmona-medium","right":"var:preset|spacing|anmona-medium"}},"border":{"width":"1px","color":"#eeeeee","radius":"5px"}},"backgroundColor":"anmona-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-anmona-white-background-color has-background" style="border-color:#eeeeee;border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--anmona-normal);padding-right:var(--wp--preset--spacing--anmona-medium);padding-bottom:var(--wp--preset--spacing--anmona-normal);padding-left:var(--wp--preset--spacing--anmona-medium)"><!-- wp:image {"align":"center","id":103,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $anmona_service_two[ 'dev_icon' ] );?>" alt="Theme Development" class="wp-image-103" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|anmona-medium","bottom":"var:preset|spacing|anmona-extra-small"}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<h5 class="wp-block-heading has-text-align-center has-small-font-size" style="margin-top:var(--wp--preset--spacing--anmona-medium);margin-bottom:var(--wp--preset--spacing--anmona-extra-small);padding-top:0;padding-bottom:0;text-transform:uppercase"><?php echo esc_html__( 'Theme Development', 'anmona' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<p class="has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__( 'Anmona empowers users to craft stunning websites with unparalleled ease and flexibility.', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|anmona-normal","bottom":"var:preset|spacing|anmona-normal","left":"var:preset|spacing|anmona-medium","right":"var:preset|spacing|anmona-medium"}},"border":{"width":"1px","color":"#eeeeee","radius":"5px"}},"backgroundColor":"anmona-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-anmona-white-background-color has-background" style="border-color:#eeeeee;border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--anmona-normal);padding-right:var(--wp--preset--spacing--anmona-medium);padding-bottom:var(--wp--preset--spacing--anmona-normal);padding-left:var(--wp--preset--spacing--anmona-medium)"><!-- wp:image {"align":"center","id":112,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $anmona_service_two[ 'plugin_icon' ] );?>" alt="Plugin Development" class="wp-image-112" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|anmona-medium","bottom":"var:preset|spacing|anmona-extra-small"}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<h5 class="wp-block-heading has-text-align-center has-small-font-size" style="margin-top:var(--wp--preset--spacing--anmona-medium);margin-bottom:var(--wp--preset--spacing--anmona-extra-small);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;text-transform:uppercase"><?php echo esc_html__( 'Plugin Development', 'anmona' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<p class="has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__( 'Anmona empowers users to craft stunning websites with unparalleled ease and flexibility.', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|anmona-normal","bottom":"var:preset|spacing|anmona-normal","left":"var:preset|spacing|anmona-medium","right":"var:preset|spacing|anmona-medium"}},"border":{"width":"1px","color":"#eeeeee","radius":"5px"}},"backgroundColor":"anmona-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-anmona-white-background-color has-background" style="border-color:#eeeeee;border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--anmona-normal);padding-right:var(--wp--preset--spacing--anmona-medium);padding-bottom:var(--wp--preset--spacing--anmona-normal);padding-left:var(--wp--preset--spacing--anmona-medium)"><!-- wp:image {"align":"center","id":114,"width":"50px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $anmona_service_two[ 'block_icon' ] );?>" alt="Block Development" class="wp-image-114" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|anmona-medium","bottom":"var:preset|spacing|anmona-extra-small"}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<h5 class="wp-block-heading has-text-align-center has-small-font-size" style="margin-top:var(--wp--preset--spacing--anmona-medium);margin-bottom:var(--wp--preset--spacing--anmona-extra-small);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;text-transform:uppercase"><?php echo esc_html__( 'block Development', 'anmona' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<p class="has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php echo esc_html__( 'Anmona empowers users to craft stunning websites with unparalleled ease and flexibility.', 'anmona' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->