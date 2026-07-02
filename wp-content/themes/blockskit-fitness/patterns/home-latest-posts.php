<?php
/**
 * Title: Latest Posts
 * Slug: blockskit-fitness/home-latest-posts
 * Categories: theme
 * Keywords: latest-posts
 */
?>
<!-- wp:group {"metadata":{"name":"blog"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","top":"100px","bottom":"100px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"backgroundColor":"light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--x-small);padding-bottom:100px;padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"shadow":"6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0)","spacing":{"padding":{"top":"6px","bottom":"6px","left":"18px","right":"18px"}},"border":{"right":{"color":"var:preset|color|highlight","width":"2px"},"left":{"color":"var:preset|color|highlight","width":"2px"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-right-color:var(--wp--preset--color--highlight);border-right-width:2px;border-left-color:var(--wp--preset--color--highlight);border-left-width:2px;padding-top:6px;padding-right:18px;padding-bottom:6px;padding-left:18px;box-shadow:6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0)"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"4px"}},"fontSize":"x-small"} -->
<h5 class="wp-block-heading has-text-align-center has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:4px"><?php esc_html_e( 'OUR BLOG', 'blockskit-fitness' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"xxx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xxx-large-font-size" style="font-style:normal;font-weight:800"><?php esc_html_e( 'Our Popular Articles', 'blockskit-fitness' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Do metus cubilia minim adipiscing adipisicing tincidunt praesent, quod excepteur, error gravida sit maecenas ex.', 'blockskit-fitness' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"-50px"}},"shadow":"var:preset|shadow|light","border":{"left":{"width":"0px","style":"none"},"top":[],"right":[],"bottom":[]},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/' ) ); ?>img09.png","id":251,"source":"file","title":"img09"},"backgroundSize":"200px","backgroundPosition":"100% 100%","backgroundRepeat":"no-repeat"}},"backgroundColor":"pure-white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group is-style-default has-pure-white-background-color has-background" style="border-left-style:none;border-left-width:0px;margin-top:-50px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small);box-shadow:var(--wp--preset--shadow--light)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"}},"fontSize":"x-small"} /-->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light"} -->
<p class="has-light-color has-text-color has-link-color" style="font-style:normal;font-weight:300;line-height:1">|</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"bottom":"var:preset|spacing|x-small"}},"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1.3","letterSpacing":"0px","fontSize":"24px"}},"fontFamily":"source-sans-3"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->