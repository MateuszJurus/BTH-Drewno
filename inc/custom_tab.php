<?php 

/**
 * Add a custom product data tab
 */
add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );


function woo_new_product_tab( $tabs ) {

	// Adds the new tab
	$tabs['test_tab'] = array(
		'title' 	=> __( 'Do pobrania', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_new_product_tab_content'
	);

	return $tabs;

}
function woo_new_product_tab_content() {

	// The new tab content
    $montaz = get_field('dp-montaz');
    $montazTekst = get_field('montaz_tekst');
    $karta = get_field('dp-dane');
    $kartaTekst = get_field('dane_techniczne');
	$inne = get_field('dp-inne');
	$inneTekst = get_field('inne_tekst');

	if($montaz == NULL && $karta == NULL) {
		return;
	}

    if($montaz != NULL) {
		echo '<a href="' . $montaz['url'] . '" download>- ' . $montazTekst . '</a><br>';
	}
    if($karta != NULL) {
		echo '<a href="' . $karta['url'] . '" download>- ' . $kartaTekst . '</a><br>';
	}
	if($inne != NULL) {
		echo '<a href="' . $inne['url'] . '" download>- ' . $inneTekst . '</a>';
	}

}