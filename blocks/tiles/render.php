<?php
/**
 * Tiles block template.
 *
 * @var array $block Block settings and attributes.
 */

$tiles = get_field( 'tiles' );

if ( empty( $tiles ) ) {
	if ( ! empty( $is_preview ) ) {
		echo '<p>' . esc_html__( 'Add tiles in the block settings sidebar.', 'total' ) . '</p>';
	}
	return;
}
?>
<section <?php echo get_block_wrapper_attributes( array( 'class' => 'total-tiles' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>>
	<?php foreach ( $tiles as $tile ) :
		$image = ! empty( $tile['image'] ) ? wp_get_attachment_image_url( $tile['image'], 'large' ) : '';
		$link  = $tile['cta'] ?? null;
		$url   = ! empty( $link['url'] ) ? $link['url'] : '';
		$attrs = 'class="total-tiles__tile"';
		if ( $url ) {
			$attrs .= ' href="' . esc_url( $url ) . '"';
			if ( ! empty( $link['target'] ) ) {
				$attrs .= ' target="' . esc_attr( $link['target'] ) . '" rel="noopener"';
			}
		}
		if ( $image ) {
			$attrs .= ' style="background-image:url(' . esc_url( $image ) . ')"';
		}
		$tag = $url ? 'a' : 'div';
		?>
		<<?php echo $tag; ?> <?php echo $attrs; // phpcs:ignore WordPress.Security.EscapeOutput ?>>
			<div class="total-tiles__content">
				<?php if ( ! empty( $tile['title'] ) ) : ?>
					<h3 class="total-tiles__title"><?php echo esc_html( $tile['title'] ); ?></h3>
				<?php endif; ?>
				<?php if ( $url ) : ?>
					<span class="total-tiles__cta"><?php echo esc_html( $link['title'] ?: __( 'Read more', 'total' ) ); ?></span>
				<?php endif; ?>
			</div>
		</<?php echo $tag; ?>>
	<?php endforeach; ?>
</section>
