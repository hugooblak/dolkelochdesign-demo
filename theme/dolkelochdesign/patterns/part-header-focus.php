<?php
/**
 * Title: Part: header focus
 * Slug: dolkelochdesign/part-header-focus
 * Inserter: no
 *
 * Template part markup lives in a pattern so links use this site's own address.
 */
?>
<!-- wp:group {"tagName":"div","className":"do-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group do-header has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"do-brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group do-brand"><!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"right","className":"do-focus-phone","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"small"} -->
<p class="has-text-align-right do-focus-phone has-small-font-size" style="line-height:1.3"><span class="do-hide-mobile">Frågor? </span><a href="tel:<?php echo esc_attr( do_lead( 'telefon_tel' ) ); ?>"><strong><?php echo esc_html( do_lead( 'telefon' ) ); ?></strong></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
