<?php
/**
 * Text block template.
 *
 * @var array $block      Block settings and attributes.
 * @var bool  $is_preview Whether the block is currently in preview mode.
 */

$content = get_field( 'content' );

if ( empty( $content ) ) {
	if ( ! empty( $is_preview ) ) {
		echo '<p>' . esc_html__( 'Add text in the block settings sidebar.', 'total' ) . '</p>';
	}
	return;
}
?>
<section <?php echo get_block_wrapper_attributes( array( 'class' => 'total-text l-wrapper' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>>
	<div class="total-text__content">
		<?php echo wp_kses_post( $content ); ?>
	</div>
</section>
