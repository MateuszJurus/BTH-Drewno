<?php
/**
 * Header social links.
 *
 * @package Total
 */

function total_register_header_social_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	$icon_choices = array();

	foreach ( total_font_awesome_icon_array() as $icon ) {
		$icon_choices[ $icon ] = $icon;
	}

	acf_add_local_field_group(
		array(
			'key'      => 'group_total_header_socials',
			'title'    => __( 'Main navigation socials', 'total' ),
			'fields'   => array(
				array(
					'key'          => 'field_total_header_socials',
					'label'        => __( 'Social links', 'total' ),
					'name'         => 'main_nav_socials',
					'type'         => 'repeater',
					'layout'       => 'table',
					'button_label' => __( 'Add social link', 'total' ),
					'sub_fields'  => array(
						array(
							'key'      => 'field_total_header_social_icon',
							'label'    => __( 'Icon', 'total' ),
							'name'     => 'icon',
							'type'     => 'select',
							'choices'  => $icon_choices,
							'ui'       => 1,
							'allow_null' => 1,
							'return_format' => 'value',
						),
						array(
							'key'           => 'field_total_header_social_url',
							'label'         => __( 'Link', 'total' ),
							'name'          => 'url',
							'type'          => 'url',
							'placeholder'   => 'https://',
							'required'      => 1,
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'navigation-icons',
					),
				),
			),
		)
	);
}
add_action( 'acf/init', 'total_register_header_social_fields' );

/**
 * Keep field groups created against the previous Options slug visible.
 *
 * @param bool  $match Whether the location rule matches.
 * @param array $rule  Location rule settings.
 * @param array $screen Current admin screen settings.
 * @return bool
 */
function total_match_legacy_options_page( $match, $rule, $screen ) {
	if ( 'options_page' !== $rule['param'] || empty( $rule['value'] ) || empty( $screen['options_page'] ) ) {
		return $match;
	}

	$options_page_slugs = array( 'acf-options', 'options' );

	if ( in_array( $rule['value'], $options_page_slugs, true ) && in_array( $screen['options_page'], $options_page_slugs, true ) ) {
		return true;
	}

	return $match;
}
add_filter( 'acf/location/rule_match/options_page', 'total_match_legacy_options_page', 10, 3 );
