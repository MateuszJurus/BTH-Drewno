<?php
/**
 * Product CTA block template.
 *
 * @var array $block Block settings and attributes.
 */

$items = get_field( 'product_ctas' );

if ( empty( $items ) ) {
	if ( ! empty( $is_preview ) ) {
		echo '<p>' . esc_html__( 'Add product CTA items in the block settings sidebar.', 'total' ) . '</p>';
	}
	return;
}
?>
<section <?php echo get_block_wrapper_attributes( array( 'class' => 'total-product-cta l-wrapper' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>>
	<?php foreach ( $items as $item ) :
		$image = ! empty( $item['image'] ) ? wp_get_attachment_image_url( (int) $item['image'], 'large' ) : '';
		$link  = ! empty( $item['link'] ) && is_array( $item['link'] ) ? $item['link'] : array();
		$url   = ! empty( $link['url'] ) ? $link['url'] : '';
		$tag   = $url ? 'a' : 'div';
		$attrs = 'class="total-product-cta__item"';

		if ( $url ) {
			$attrs .= ' href="' . esc_url( $url ) . '"';
			if ( ! empty( $link['target'] ) ) {
				$attrs .= ' target="' . esc_attr( $link['target'] ) . '" rel="noopener"';
			}
		}

		if ( $image ) {
			$attrs .= ' style="background-image:url(' . esc_url( $image ) . ')"';
		}
		?>
		<<?php echo $tag; ?> <?php echo $attrs; // phpcs:ignore WordPress.Security.EscapeOutput ?>>
			<?php if ( ! empty( $item['text'] ) ) : ?>
				<span class="total-product-cta__title"><?php echo esc_html( $item['text'] ); ?></span>
			<?php endif; ?>
		</<?php echo $tag; ?>>
	<?php endforeach; ?>
</section>
