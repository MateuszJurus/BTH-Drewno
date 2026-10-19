<?php
/**
 * Products block template.
 *
 * @var array $block Block settings and attributes.
 */

$title       = get_field( 'title' );
$description = get_field( 'description' );
$button_text = get_field( 'button_text' ) ?: __( 'View product', 'total' );
$selected = get_field( 'products' );

$products = array();
if ( ! empty( $selected ) && function_exists( 'wc_get_product' ) ) {
	foreach ( array_slice( (array) $selected, 0, 4 ) as $item ) {
		$product = wc_get_product( $item );
		if ( $product && $product->is_visible() ) {
			$products[] = $product;
		}
	}
}

if ( empty( $products ) ) {
	if ( ! empty( $is_preview ) ) {
		echo '<p>' . esc_html__( 'Select products in the block settings sidebar.', 'total' ) . '</p>';
	}
	return;
}
?>
<section <?php echo get_block_wrapper_attributes( array( 'class' => 'total-products l-wrapper' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>>
	<?php if ( $title ) : ?>
		<h2 class="total-products__heading"><?php echo esc_html( $title ); ?></h2>
	<?php endif; ?>
	<?php if ( $description ) : ?>
		<div class="total-products__description"><?php echo wp_kses_post( $description ); ?></div>
	<?php endif; ?>
	<div class="swiper swiper-featured-products">
		<div class="swiper-wrapper">
			<?php foreach ( $products as $product ) : ?>
				<a class="swiper-slide total-products__item" href="<?php echo esc_url( $product->get_permalink() ); ?>">
					<span class="total-products__image"><?php echo $product->get_image( 'woocommerce_thumbnail' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></span>
					<span class="total-products__name"><?php echo esc_html( $product->get_name() ); ?></span>
					<span class="total-products__price"><?php echo wp_kses_post( $product->get_price_html() ); ?></span>
					<span class="total-products__button"><?php echo esc_html( $button_text ); ?></span>
				</a>
			<?php endforeach; ?>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</section>
