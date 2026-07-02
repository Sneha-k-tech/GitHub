<?php
/**
 * Title: Hero Banner
 * Slug: blockskit-fitness/home-hero-banner
 * Categories: theme
 * Keywords: hero banner
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/img02.jpg' ) ); ?>","id":243,"dimRatio":30,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":50,"contentPosition":"bottom center","sizeSlug":"full","metadata":{"name":"banner"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="padding-top:0;padding-right:var(--wp--preset--spacing--x-small);padding-bottom:0;padding-left:var(--wp--preset--spacing--x-small);min-height:50px"><img class="wp-block-cover__image-background wp-image-243 size-full" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/img02.jpg' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/img09.png' ) ); ?>","id":251,"source":"file","title":"img09"},"backgroundSize":"contain","backgroundRepeat":"no-repeat","backgroundPosition":"0% 50%"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"140px","top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:140px"><!-- wp:spacer {"height":"350px"} -->
<div style="height:350px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"shadow":"6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0)","spacing":{"padding":{"top":"6px","bottom":"6px","left":"18px","right":"18px"}},"border":{"left":{"color":"var:preset|color|highlight","width":"2px"},"right":{"color":"var:preset|color|highlight","width":"2px"},"bottom":{"width":"2px"}}},"backgroundColor":"light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-background-color has-background" style="border-right-color:var(--wp--preset--color--highlight);border-right-width:2px;border-bottom-width:2px;border-left-color:var(--wp--preset--color--highlight);border-left-width:2px;padding-top:6px;padding-right:18px;padding-bottom:6px;padding-left:18px;box-shadow:6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0)"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"4px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small"} -->
<h5 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:4px"><?php esc_html_e( 'FITNESS JOURNEY', 'blockskit-fitness' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1.1"}},"fontSize":"xxxx-large"} -->
<h2 class="wp-block-heading has-text-align-left has-xxxx-large-font-size" style="font-style:normal;font-weight:800;line-height:1.1"><?php esc_html_e( 'Building Better Health Through Fitness !!', 'blockskit-fitness' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e( 'Do metus cubilia minim adipiscing adipisicing tincidunt praesent, quod excepteur, error gravida sit maecenas ex quos mollis. Duis quos, luctus tristique integer enim aliq.', 'blockskit-fitness' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"18px","bottom":"18px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:18px;padding-right:var(--wp--preset--spacing--medium);padding-bottom:18px;padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'GET STARTED', 'blockskit-fitness' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-bk-button-secondary","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"16px","bottom":"16px"}}}} -->
<div class="wp-block-button is-style-bk-button-secondary"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:16px;padding-right:var(--wp--preset--spacing--medium);padding-bottom:16px;padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'DISCOVER MORE', 'blockskit-fitness' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->