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
		?>
		<div class="total-tiles__tile"<?php echo $image ? ' style="background-image:url(' . esc_url( $image ) . ')"' : ''; ?>>
			<div class="total-tiles__content">
				<?php if ( ! empty( $tile['title'] ) ) : ?>
					<h3 class="total-tiles__title"><?php echo esc_html( $tile['title'] ); ?></h3>
				<?php endif; ?>
				<?php if ( ! empty( $link['url'] ) ) : ?>
					<a class="total-tiles__cta" href="<?php echo esc_url( $link['url'] ); ?>"<?php echo ! empty( $link['target'] ) ? ' target="' . esc_attr( $link['target'] ) . '" rel="noopener"' : ''; ?>>
						<?php echo esc_html( $link['title'] ?: __( 'Read more', 'total' ) ); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	<?php endforeach; ?>
</section>
