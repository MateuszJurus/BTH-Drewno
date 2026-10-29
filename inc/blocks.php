<?php
/**
 * Gutenberg blocks registration.
 *
 * Every folder in /blocks containing a block.json is registered automatically.
 *
 * @package total
 */

function total_register_blocks() {
	$block_files = glob( get_template_directory() . '/blocks/*/block.json' );

	if ( ! $block_files ) {
		return;
	}

	foreach ( $block_files as $block_file ) {
		register_block_type_from_metadata( dirname( $block_file ) );
	}
}
add_action( 'init', 'total_register_blocks' );

/**
 * Names of all blocks defined in the theme's /blocks folder.
 *
 * @return string[]
 */
function total_get_theme_block_names() {
	$names = array();

	foreach ( glob( get_template_directory() . '/blocks/*/block.json' ) ?: array() as $file ) {
		$data = json_decode( file_get_contents( $file ), true );
		if ( ! empty( $data['name'] ) ) {
			$names[] = $data['name'];
		}
	}

	return $names;
}

/**
 * Render only the theme's custom blocks found in a post's content.
 *
 * @param int|null $post_id Post ID, defaults to the current post.
 */
function total_render_theme_blocks( $post_id = null ) {
	$post = get_post( $post_id );
	if ( ! $post ) {
		return;
	}

	$names = total_get_theme_block_names();

	foreach ( parse_blocks( $post->post_content ) as $block ) {
		if ( in_array( $block['blockName'], $names, true ) ) {
			echo render_block( $block ); // phpcs:ignore WordPress.Security.EscapeOutput
		}
	}
}

/**
 * ACF field group for the Tiles block (requires ACF PRO for the repeater).
 */
function total_register_tiles_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key'      => 'group_total_tiles',
		'title'    => 'Tiles',
		'fields'   => array(
			array(
				'key'          => 'field_total_tiles',
				'label'        => 'Tiles',
				'name'         => 'tiles',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add tile',
				'sub_fields'   => array(
					array(
						'key'           => 'field_total_tiles_image',
						'label'         => 'Background image',
						'name'          => 'image',
						'type'          => 'image',
						'return_format' => 'id',
						'preview_size'  => 'medium',
					),
					array(
						'key'   => 'field_total_tiles_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'wysiwyg',
					),
					array(
						'key'           => 'field_total_tiles_cta',
						'label'         => 'CTA',
						'name'          => 'cta',
						'type'          => 'link',
						'return_format' => 'array',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param'    => 'block',
					'operator' => '==',
					'value'    => 'acf/tiles',
				),
			),
		),
	) );
}
add_action( 'acf/init', 'total_register_tiles_fields' );

/**
 * ACF field group for the Product CTA block.
 */
function total_register_product_cta_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key'      => 'group_total_product_cta',
		'title'    => 'Product CTA',
		'fields'   => array(
			array(
				'key'          => 'field_total_product_ctas',
				'label'        => 'Product CTA items',
				'name'         => 'product_ctas',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add product CTA',
				'sub_fields'  => array(
					array(
						'key'           => 'field_total_product_cta_image',
						'label'         => 'Image',
						'name'          => 'image',
						'type'          => 'image',
						'return_format' => 'id',
						'preview_size'  => 'medium',
					),
					array(
						'key'      => 'field_total_product_cta_text',
						'label'    => 'Title',
						'name'     => 'text',
						'type'     => 'text',
						'required' => 1,
					),
					array(
						'key'           => 'field_total_product_cta_link',
						'label'         => 'Link',
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
						'required'      => 1,
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param'    => 'block',
					'operator' => '==',
					'value'    => 'acf/product-cta',
				),
			),
		),
	) );
}
add_action( 'acf/init', 'total_register_product_cta_fields' );

/**
 * ACF field group for the Hero block.
 */
function total_register_hero_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key'      => 'group_total_hero',
		'title'    => 'Hero',
		'fields'   => array(
			array(
				'key'           => 'field_total_hero_background_image',
				'label'         => 'Background image',
				'name'          => 'background_image',
				'type'          => 'image',
				'return_format' => 'id',
				'preview_size'  => 'medium',
			),
			array(
				'key'          => 'field_total_hero_title',
				'label'        => 'Title',
				'name'         => 'title',
				'type'         => 'repeater',
				'instructions' => 'Add words or phrases. Each item will be separated with a •.',
				'layout'       => 'table',
				'button_label' => 'Add word',
				'sub_fields'   => array(
					array(
						'key'   => 'field_total_hero_title_word',
						'label' => 'Word',
						'name'  => 'word',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_total_hero_title_link',
						'label'         => 'Link',
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
					),
				),
			),
			array(
				'key'          => 'field_total_hero_subtitle',
				'label'        => 'Subtitle',
				'name'         => 'subtitle',
				'type'         => 'repeater',
				'instructions' => 'Add words or phrases. Each item will be separated with a •.',
				'layout'       => 'table',
				'button_label' => 'Add word',
				'sub_fields'   => array(
					array(
						'key'   => 'field_total_hero_subtitle_word',
						'label' => 'Word',
						'name'  => 'word',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_total_hero_subtitle_link',
						'label'         => 'Link',
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
					),
				),
			),
			array(
				'key'   => 'field_total_hero_location',
				'label' => 'Location',
				'name'  => 'location',
				'type'  => 'text',
			),
		),
		'location' => array(
			array(
				array(
					'param'    => 'block',
					'operator' => '==',
					'value'    => 'acf/hero',
				),
			),
		),
	) );
}
add_action( 'acf/init', 'total_register_hero_fields' );

/**
 * ACF field group for the Products block.
 */
function total_register_products_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key'      => 'group_total_products',
		'title'    => 'Products',
		'fields'   => array(
			array(
				'key'   => 'field_total_products_title',
				'label' => 'Title',
				'name'  => 'title',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_total_products_title_link',
				'label'         => 'Title link',
				'name'          => 'title_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'          => 'field_total_products_description',
				'label'        => 'Description',
				'name'         => 'description',
				'type'         => 'textarea',
				'rows'         => 3,
				'new_lines'    => 'br',
			),
			array(
				'key'           => 'field_total_products_button_text',
				'label'         => 'Button text',
				'name'          => 'button_text',
				'type'          => 'text',
				'instructions'  => 'Used on every product button. Leave empty for the default.',
				'placeholder'   => 'View product',
			),
			array(
				'key'           => 'field_total_products_products',
				'label'         => 'Products',
				'name'          => 'products',
				'type'          => 'post_object',
				'post_type'     => array( 'product' ),
				'multiple'      => 1,
				'max'           => 4,
				'return_format' => 'id',
				'ui'            => 1,
				'instructions'  => 'Select up to 4 products.',
			),
		),
		'location' => array(
			array(
				array(
					'param'    => 'block',
					'operator' => '==',
					'value'    => 'acf/products',
				),
			),
		),
	) );
}
add_action( 'acf/init', 'total_register_products_fields' );

/**
 * ACF field group for the Product hero block.
 */
function total_register_product_hero_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key'      => 'group_total_product_hero',
		'title'    => 'Product hero',
		'fields'   => array(
			array(
				'key'   => 'field_total_product_hero_title',
				'label' => 'Title',
				'name'  => 'title',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_total_product_hero_image',
				'label'         => 'Image',
				'name'          => 'image',
				'type'          => 'image',
				'return_format' => 'id',
				'preview_size'  => 'medium',
			),
		),
		'location' => array(
			array(
				array(
					'param'    => 'block',
					'operator' => '==',
					'value'    => 'acf/product-hero',
				),
			),
		),
	) );
}
add_action( 'acf/init', 'total_register_product_hero_fields' );

/**
 * ACF field group for the Text block.
 */
function total_register_text_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key'      => 'group_total_text',
		'title'    => 'Text',
		'fields'   => array(
			array(
				'key'          => 'field_total_text_content',
				'label'        => 'Content',
				'name'         => 'content',
				'type'         => 'wysiwyg',
				'tabs'         => 'all',
				'toolbar'      => 'full',
				'media_upload' => 1,
			),
		),
		'location' => array(
			array(
				array(
					'param'    => 'block',
					'operator' => '==',
					'value'    => 'acf/text',
				),
			),
		),
	) );
}
add_action( 'acf/init', 'total_register_text_fields' );

/**
 * ACF field group for the Realizacje block.
 */
function total_register_realizacje_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key'      => 'group_total_realizacje',
		'title'    => 'Realizacje',
		'fields'   => array(
			array(
				'key'   => 'field_total_realizacje_title',
				'label' => 'Title',
				'name'  => 'title',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_total_realizacje_title_link',
				'label'         => 'Title link',
				'name'          => 'title_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'       => 'field_total_realizacje_description',
				'label'     => 'Description',
				'name'      => 'description',
				'type'      => 'textarea',
				'rows'      => 3,
				'new_lines' => 'br',
			),
			array(
				'key'           => 'field_total_realizacje_posts',
				'label'         => 'Posts',
				'name'          => 'posts',
				'type'          => 'post_object',
				'post_type'     => array( 'post' ),
				'taxonomy'      => array( 'category:realizacje' ),
				'multiple'      => 1,
				'max'           => 4,
				'return_format' => 'id',
				'ui'            => 1,
				'instructions'  => 'Select up to 4 posts from the "realizacje" category.',
			),
		),
		'location' => array(
			array(
				array(
					'param'    => 'block',
					'operator' => '==',
					'value'    => 'acf/realizacje',
				),
			),
		),
	) );
}
add_action( 'acf/init', 'total_register_realizacje_fields' );

/**
 * Add a custom block category.
 */
function total_block_categories( $categories ) {
	return array_merge(
		array(
			array(
				'slug'  => 'total',
				'title' => esc_html__( 'Total', 'total' ),
			),
		),
		$categories
	);
}
add_filter( 'block_categories_all', 'total_block_categories' );
