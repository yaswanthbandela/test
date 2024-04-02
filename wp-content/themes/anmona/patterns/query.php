<?php
/**
 * Title: Query
 * Slug: anmona/query
 * Categories: anmona
 * Keywords: query, anmona query, posts
 * Viewport width: 1400
 * 
 * @package Anmona
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|anmona-extra-large","bottom":"var:preset|spacing|anmona-extra-large","left":"var:preset|spacing|anmona-medium","right":"var:preset|spacing|anmona-medium"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--anmona-extra-large);padding-right:var(--wp--preset--spacing--anmona-medium);padding-bottom:var(--wp--preset--spacing--anmona-extra-large);padding-left:var(--wp--preset--spacing--anmona-medium)"><!-- wp:query {"queryId":9,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|anmona-medium"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"style":{"color":{"duotone":"unset"},"border":{"radius":"5px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|anmona-extra-small"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--anmona-extra-small);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-author {"avatarSize":24,"showBio":false,"byline":"","linkTarget":"_blank","style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"textTransform":"capitalize"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|anmona-black"},":hover":{"color":{"text":"var:preset|color|anmona-navy-blue"}}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"medium"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":15,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|anmona-extra-small"}}}} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|anmona-navy-blue"}}}},"textColor":"anmona-black"} -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-numbers {"midSize":1} /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->