<?php
/**
 * Hero block template.
 *
 * @var array  $block      Block settings and attributes.
 * @var string $content    Block content.
 * @var bool   $is_preview Whether the block is currently in preview mode.
 * @var int    $post_id    The post ID the block is attached to.
 *
 * @package total
 */

$title_raw    = get_field( 'title' );
$subtitle_raw = get_field( 'subtitle' );
$location     = get_field( 'location' );
$bg_image     = get_field( 'background_image' ) ?: get_field( 'image' );

/**
 * Extract non-empty words or phrases (with optional link data) from repeater rows or text.
 *
 * @param mixed $raw Field raw value.
 * @return array<int, array{text: string, url: string, target: string}> Array of items.
 */
$extract_items = function( $raw ) {
	$items = array();

	if ( ! empty( $raw ) ) {
		if ( is_array( $raw ) ) {
			foreach ( $raw as $row ) {
				$text   = '';
				$url    = '';
				$target = '';

				if ( is_array( $row ) ) {
					$text = $row['word'] ?? $row['text'] ?? $row['title'] ?? '';

					$link = $row['link'] ?? $row['url'] ?? null;
					if ( is_array( $link ) ) {
						$url    = ! empty( $link['url'] ) ? trim( $link['url'] ) : '';
						$target = ! empty( $link['target'] ) ? trim( $link['target'] ) : '';
						if ( '' === $text && ! empty( $link['title'] ) ) {
							$text = $link['title'];
						}
					} elseif ( is_string( $link ) ) {
						$url = trim( $link );
					}

					if ( '' === $text ) {
						foreach ( $row as $k => $v ) {
							if ( 'link' !== $k && 'url' !== $k && is_string( $v ) ) {
								$text = $v;
								break;
							}
						}
					}
				} elseif ( is_string( $row ) ) {
					$text = $row;
				}

				$text = trim( (string) $text );
				if ( '' !== $text ) {
					$items[] = array(
						'text'   => $text,
						'url'    => $url,
						'target' => $target,
					);
				}
			}
		} elseif ( is_string( $raw ) ) {
			foreach ( explode( '•', $raw ) as $part ) {
				$part = trim( $part );
				if ( '' !== $part ) {
					$items[] = array(
						'text'   => $part,
						'url'    => '',
						'target' => '',
					);
				}
			}
		}
	}

	return $items;
};

$title_items    = $extract_items( $title_raw );
$subtitle_items = $extract_items( $subtitle_raw );
$location       = is_string( $location ) ? trim( $location ) : '';

$bg_image_url = '';
if ( ! empty( $bg_image ) ) {
	if ( is_numeric( $bg_image ) ) {
		$bg_image_url = wp_get_attachment_image_url( (int) $bg_image, 'full' );
	} elseif ( is_array( $bg_image ) && ! empty( $bg_image['url'] ) ) {
		$bg_image_url = $bg_image['url'];
	} elseif ( is_string( $bg_image ) ) {
		$bg_image_url = $bg_image;
	}
}

// Editor preview empty state.
if ( empty( $title_items ) && empty( $subtitle_items ) && empty( $location ) && empty( $bg_image_url ) ) {
	if ( ! empty( $is_preview ) ) {
		echo '<div ' . get_block_wrapper_attributes( array( 'class' => 'total-hero total-hero--empty' ) ) . '>'; // phpcs:ignore WordPress.Security.EscapeOutput
		echo '<div class="total-hero__content"><p>' . esc_html__( 'Hero block: Add background image, title, subtitle, and location in the block settings.', 'total' ) . '</p></div>';
		echo '</div>';
	}
	return;
}

$wrapper_styles = array();
if ( $bg_image_url ) {
	$wrapper_styles[] = 'background-image:url(' . esc_url( $bg_image_url ) . ');';
}

$wrapper_attrs = get_block_wrapper_attributes( array(
	'class' => 'total-hero' . ( $bg_image_url ? ' has-background-image' : '' ),
	'style' => ! empty( $wrapper_styles ) ? implode( ' ', $wrapper_styles ) : null,
) );
?>
<section <?php echo $wrapper_attrs; // phpcs:ignore WordPress.Security.EscapeOutput ?>>
	<div class="total-hero__overlay" aria-hidden="true"></div>
	<div class="total-hero__content">
		<?php if ( ! empty( $title_items ) ) : ?>
			<h1 class="total-hero__title">
				<?php
				$count = count( $title_items );
				foreach ( $title_items as $index => $item ) :
					$has_link = ! empty( $item['url'] );
					$tag      = $has_link ? 'a' : 'span';
					$attrs    = 'class="total-hero__word' . ( $has_link ? ' total-hero__word--link' : '' ) . '"';
					if ( $has_link ) {
						$attrs .= ' href="' . esc_url( $item['url'] ) . '"';
						if ( ! empty( $item['target'] ) ) {
							$attrs .= ' target="' . esc_attr( $item['target'] ) . '"';
							if ( '_blank' === $item['target'] ) {
								$attrs .= ' rel="noopener noreferrer"';
							}
						}
					}
					?>
					<<?php echo $tag; ?> <?php echo $attrs; // phpcs:ignore WordPress.Security.EscapeOutput ?>><?php echo esc_html( $item['text'] ); ?></<?php echo $tag; ?>><?php if ( $index < $count - 1 ) : ?><span class="total-hero__bullet" aria-hidden="true">&nbsp;&bull;</span><?php endif; ?>
				<?php endforeach; ?>
			</h1>
		<?php endif; ?>

		<?php if ( ! empty( $subtitle_items ) ) : ?>
			<div class="total-hero__subtitle">
				<?php
				$count = count( $subtitle_items );
				foreach ( $subtitle_items as $index => $item ) :
					$has_link = ! empty( $item['url'] );
					$tag      = $has_link ? 'a' : 'span';
					$attrs    = 'class="total-hero__word' . ( $has_link ? ' total-hero__word--link' : '' ) . '"';
					if ( $has_link ) {
						$attrs .= ' href="' . esc_url( $item['url'] ) . '"';
						if ( ! empty( $item['target'] ) ) {
							$attrs .= ' target="' . esc_attr( $item['target'] ) . '"';
							if ( '_blank' === $item['target'] ) {
								$attrs .= ' rel="noopener noreferrer"';
							}
						}
					}
					?>
					<<?php echo $tag; ?> <?php echo $attrs; // phpcs:ignore WordPress.Security.EscapeOutput ?>><?php echo esc_html( $item['text'] ); ?></<?php echo $tag; ?>><?php if ( $index < $count - 1 ) : ?><span class="total-hero__bullet" aria-hidden="true">&nbsp;&bull;</span><?php endif; ?>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<?php if ( ! empty( $location ) ) : ?>
			<div class="total-hero__location"><?php echo esc_html( $location ); ?></div>
		<?php endif; ?>
	</div>
</section>
