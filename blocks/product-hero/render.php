<?php
/**
 * Product hero block template.
 *
 * @var array $block      Block settings and attributes.
 * @var bool  $is_preview Whether the block is currently in preview mode.
 */

$title = get_field( 'title' );
$image = get_field( 'image' );

if ( empty( $title ) ) {
	$title = get_the_title();
}

$image_html = $image ? wp_get_attachment_image( (int) $image, 'full-hd', false, array( 'class' => 'total-product-hero__img' ) ) : '';
?>
<section <?php echo get_block_wrapper_attributes( array( 'class' => 'total-product-hero' . ( $image_html ? ' has-image' : '' ) ) ); ?>>
	<?php if ( $image_html ) : ?>
		<div class="total-product-hero__media" aria-hidden="true"><?php echo $image_html; ?></div>
	<?php endif; ?>
	<div class="total-product-hero__inner l-wrapper">
		<div class="total-product-hero__text">
			<?php if ( function_exists( 'breadcrumb_trail' ) && empty( $is_preview ) ) : ?>
				<div class="total-product-hero__breadcrumbs">
					<?php breadcrumb_trail( array( 'show_browse' => false ) ); ?>
				</div>
			<?php elseif ( ! empty( $is_preview ) ) : ?>
				<div class="total-product-hero__breadcrumbs"><span><?php esc_html_e( 'Home', 'total' ); ?></span> / <span><?php echo esc_html( $title ); ?></span></div>
			<?php endif; ?>
			<?php if ( $title ) : ?>
				<h1 class="total-product-hero__title"><?php echo esc_html( $title ); ?></h1>
			<?php endif; ?>
		</div>
	</div>
</section>
