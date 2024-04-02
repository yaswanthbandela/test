<?php
/**
 * Title: Search
 * Slug: anmona/search
 * Categories: anmona
 * Keywords: search, anmona search, search page
 * Viewport width: 1400
 * 
 * @package Anmona
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|anmona-extra-large","bottom":"var:preset|spacing|anmona-extra-large","left":"var:preset|spacing|anmona-medium","right":"var:preset|spacing|anmona-medium"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--anmona-extra-large);padding-right:var(--wp--preset--spacing--anmona-medium);padding-bottom:var(--wp--preset--spacing--anmona-extra-large);padding-left:var(--wp--preset--spacing--anmona-medium)"><!-- wp:query-title {"type":"search","textAlign":"center","level":4} /-->

<!-- wp:query {"queryId":24,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:separator {"opacity":"css","style":{"color":{"background":"#ffffff"}},"className":"alignwide is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-css-opacity has-background alignwide is-style-wide" style="background-color:#ffffff;color:#ffffff"/>
<!-- /wp:separator -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:post-date {"textColor":"anmona-navy-blue","fontSize":"extra-small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"72px","lineHeight":"1.1"},"color":{"text":"#ffffff","link":"#ffffff"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:group {"style":{"border":{"width":"1px","color":"#B6BBC4","radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|anmona-normal","bottom":"var:preset|spacing|anmona-normal","left":"var:preset|spacing|anmona-normal","right":"var:preset|spacing|anmona-normal"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:#B6BBC4;border-width:1px;border-radius:5px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--anmona-normal);padding-right:var(--wp--preset--spacing--anmona-normal);padding-bottom:var(--wp--preset--spacing--anmona-normal);padding-left:var(--wp--preset--spacing--anmona-normal)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"textTransform":"none"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="text-transform:none"><?php echo esc_html__( 'Sorry! nothing found', 'anmona' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","buttonText":"Search"} /--></div>
<!-- /wp:group -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->