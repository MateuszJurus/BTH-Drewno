<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?>

<?php

do_action( 'woocommerce_before_main_content' );

?>

<header class="ht-main-header">
	<div class="ht-container">
		<h1>
			<?php echo 'Sklep'; ?>
		</h1>
	</div>
</header>

<section class="category-listing">
	<div class="filters">
		<h3 style="padding: 10px; background-color: #8bab0d; color: white">Kategorie</h3>
		<?php 
			wp_nav_menu( array( 'theme_location' => 'secondary' ) );
			#echo do_shortcode('[woocommerce_product_filter_category style="select" show_names="yes" show_ancestors="yes"]');
			#echo do_shortcode('[woocommerce_product_filter_price heading="Cena"]');
			#echo do_shortcode('[woocommerce_product_filter_attribute]');
			#echo do_shortcode('[woocommerce_product_filter_stock]');
			#echo do_shortcode('[woocommerce_product_filter_tag]');
			#echo do_shortcode('[woocommerce_product_filter_sale]');
			#echo do_shortcode('[searchandfilter id="2116"]');
			
		?><br>
		<div class="summary-description">
			<div>
			<img src="<?php echo site_url(); ?>/wp-content/themes/total/img/odbior_s.webp" alt="Odbiór osobisty" width="238" height="66">
			<p>Odbiór osobisty w naszym punkcie:
			ul. Rokicińska 142, Łódź, 600-015-903 lub (42) 672-54-49</p>
			</div>
			<div>
			<img src="<?php echo site_url(); ?>/wp-content/themes/total/img/zapytaj.webp" alt="Zapytaj o koszty" width="238" height="66">
			<p>Zapłać teraz za same produkty i ustal z nami cenę transportu. Postaramy się znaleźć możliwie najtańszy transport. Zapłacisz nam za to później lub kurierowi przy dostawie.</p>
			</div>
		</div>
	</div>
	
	<ul class="listing" id="sf-main">

	<?php aws_get_search_form( true ); ?>

		<?php
			$products_shortcode = '[products limit="12" paginate="true"]';
			if ( is_product_category() ) {
				$products_shortcode = '[products category="' . get_queried_object_id() . '" limit="12" paginate="true"]';
			}
			echo do_shortcode( $products_shortcode );
		?>
	</ul>
</section>
<hr />
<section id="ht-logo-section" class="ht-section">
	<div class="ht-container">
		<?php
		$total_logo_title = get_theme_mod('total_logo_title');
		$total_logo_sub_title = get_theme_mod('total_logo_sub_title');
		?>
		<?php if($total_logo_title || $total_logo_sub_title){ ?>
		<div class="ht-section-title-tagline">
		<?php if($total_logo_title){ ?>
		<h2 class="ht-section-title"><?php echo esc_html($total_logo_title); ?></h2>
		<?php } ?>

		<?php if($total_logo_sub_title){ ?>
		<div class="ht-section-tagline"><?php echo esc_html($total_logo_sub_title); ?></div>
		<?php } ?>
		</div>
		<?php } ?>

		<?php 
		$total_client_logo_image = get_theme_mod('total_client_logo_image');
		$total_client_logo_image = explode(',', $total_client_logo_image);
		?>

		<div class="ht_client_logo_slider owl-carousel">
		<?php
		foreach ($total_client_logo_image as $total_client_logo_image_single) {
			$image = wp_get_attachment_image_src( $total_client_logo_image_single, 'full');
			?>
			<img src="<?php echo esc_url( $image[0] ); ?>" alt="Logo partnera">
			<?php
		}
		?>
		</div>
	</div>
</section>
<?php
do_action( 'woocommerce_after_main_content' );

do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
