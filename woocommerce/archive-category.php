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

<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	do_action( 'woocommerce_archive_description' );
	?>
</header>

<div class="swiper swiper-realisations ht-section">
	<h2 class="ht-section-title">Nasze realizacje</h2>
  <div class="swiper-wrapper">
	<?php 
		global $post;
		// the query
		$the_query = new WP_Query( array( 
			'category_name' => 'realizacje', 
			'posts_per_page' => 5 
		) ); 
		$string = '';
		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
					if ( has_post_thumbnail() ) {
					$string .= '
					<a href="' . get_the_permalink() .'" rel="bookmark" class="swiper-slide">' 
					. get_the_post_thumbnail(get_the_ID(), array( 250, 250) ) . get_the_title() .
					'</a>';
					} else { 
					// if no featured image is found
					$string .= '<a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a>';
					}
					}
			} else {
			// no posts found
		$string .= '<li>Nie znaleziono wpsiów</li>';
		}
		echo $string;
		
		/* Restore original Post Data */
		wp_reset_postdata();
	?>
	<a    style="background-image: url('<?php echo $img_1['url']; ?>')"></a>
  </div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
<?php
do_action( 'woocommerce_after_main_content' );

do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
