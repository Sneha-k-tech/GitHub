<?php
/**
 * Title: Header
 * Slug: blockskit-fitness/header
 * Categories: theme
 */
?>
<!-- wp:group {"className":"bk-header-transparent","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group bk-header-transparent" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":26,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontSize":"large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"bk-hide-tab bk-hide-mob"} -->
<div class="wp-block-column is-vertically-aligned-center bk-hide-tab bk-hide-mob" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:navigation {"ref":384,"textColor":"accent-text","icon":"menu","overlayTextColor":"pure-black","style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"x-small","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:navigation-link {"label":"HOME","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"ABOUT US","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"OUR CLASSES","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"BLOG","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"CONTACT US","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"left":"var:preset|spacing|small","right":"var:preset|spacing|small","top":"13px","bottom":"13px"}}},"fontSize":"x-small"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-x-small-font-size has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:13px;padding-right:var(--wp--preset--spacing--small);padding-bottom:13px;padding-left:var(--wp--preset--spacing--small)"><?php esc_html_e( 'JOIN NOW', 'blockskit-fitness' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->