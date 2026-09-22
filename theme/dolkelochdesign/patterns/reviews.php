<?php
/**
 * Title: Omdömen
 * Slug: dolkelochdesign/reviews
 * Categories: dolkelochdesign-sections
 * Description: Google-betyget stort, tre omdömen bredvid. Texterna är platshållare och byts mot företagets riktiga omdömen.
 */
$reviews = (array) do_lead( 'omdomen_lista', array() );
?>
<!-- wp:group {"align":"full","className":"do-sec-reviews","backgroundColor":"sand","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull do-sec-reviews has-sand-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:30%"><!-- wp:group {"className":"do-rating","layout":{"type":"default"}} -->
<div class="wp-block-group do-rating"><!-- wp:paragraph {"className":"do-rating-num"} -->
<p class="do-rating-num"><?php echo esc_html( do_lead( 'betyg' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"do-stars do-stars-lg"} -->
<p class="do-stars do-stars-lg"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color"><?php echo esc_html( do_lead( 'omdomen' ) ); ?> omdömen på Google</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( do_lead( 'google_url', '#' ) ); ?>" rel="nofollow">Läs alla omdömen på Google →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:70%"><?php
foreach ( $reviews as $r ) :
	?><!-- wp:group {"className":"do-review","layout":{"type":"default"}} -->
<div class="wp-block-group do-review"><!-- wp:paragraph {"className":"do-stars"} -->
<p class="do-stars"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $r[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"do-review-by","fontSize":"small","textColor":"ink-soft"} -->
<p class="do-review-by has-ink-soft-color has-text-color"><strong><?php echo esc_html( $r[1] ); ?></strong> · <?php echo esc_html( $r[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
