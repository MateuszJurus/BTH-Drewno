<?php
/**
 * Realizacje block template.
 *
 * @var array $block      Block settings and attributes.
 * @var bool  $is_preview Whether the block is currently in preview mode.
 */

$title       = get_field( 'title' );
$description = get_field( 'description' );
$selected    = get_field( 'posts' );

$items = array();
foreach ( array_slice( (array) $selected, 0, 4 ) as $item ) {
	$item_id = is_object( $item ) ? $item->ID : (int) $item;
	if ( $item_id && 'publish' === get_post_status( $item_id ) ) {
		$items[] = $item_id;
	}
}

if ( empty( $items ) ) {
	if ( ! empty( $is_preview ) ) {
		echo '<p>' . esc_html__( 'Select posts in the block settings sidebar.', 'total' ) . '</p>';
	}
	return;
}
?>
<section <?php echo get_block_wrapper_attributes( array( 'class' => 'total-realizacje l-wrapper' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>>
	<?php if ( $title ) : ?>
		<h2 class="total-realizacje__heading"><?php echo esc_html( $title ); ?></h2>
	<?php endif; ?>
	<?php if ( $description ) : ?>
		<div class="total-realizacje__description"><?php echo wp_kses_post( $description ); ?></div>
	<?php endif; ?>
	<div class="swiper swiper-featured-products">
		<div class="swiper-wrapper">
			<?php foreach ( $items as $item_id ) : ?>
				<a class="swiper-slide total-realizacje__item" href="<?php echo esc_url( get_permalink( $item_id ) ); ?>">
					<span class="total-realizacje__image">
						<?php if ( has_post_thumbnail( $item_id ) ) : ?>
							<?php echo get_the_post_thumbnail( $item_id, 'large' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
						<?php endif; ?>
					</span>
					<span class="total-realizacje__name"><?php echo esc_html( get_the_title( $item_id ) ); ?></span>
				</a>
			<?php endforeach; ?>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</section>
