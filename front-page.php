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

<?php if(have_rows('slider', 1878)): ?>

<div id="ht-home-slider-section">
	<div id="ht-bx-slider" class="owl-carousel">
			<?php while(have_rows('slider', 1878)) : the_row(); ?>
			<?php
			$slide = get_sub_field('slide');
			$img = $slide['zdjecie'];
			$imgMobile = $slide['zdjecie_mobile'];
			?>
			<a href="<?php if($slide['link']['url']) { echo $slide['link']['url'];}; ?>"><div class="ht-slide">
			<div class="ht-slide-overlay"></div>
				<?php if($imgMobile["url"]): ?>
					<picture>
						<source media="(min-width: 420px)" srcset="<?php echo $img['url']; ?>">
						<?php echo '<img alt="'. $imgMobile["alt"] .'" width="420" height="210" src="'.$imgMobile["url"].'" fetchpriority="high">';  ?>
					</picture>
				<?php else: ?>
					<?php echo '<img alt="'. $img["alt"] .'" src="'.$img["url"].'" fetchpriority="high">';  ?>
				<?php endif; ?>
					<div class="ht-slide-caption">
					<?php if($slide['tytul']): ?>
					<div class="ht-slide-cap-title">
						<span><?php echo esc_html($slide['tytul']); ?></span>
					</div>
					<?php endif; ?>

					<div class="ht-slide-cap-desc">
						<?php the_content(); ?>
					</div>
				</div>
				</div>
			</a>
			<?php endwhile; ?>
		
	</div>
</div>
<?php endif; ?>


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

<div class="ht-section section-products">
	<h2 class="ht-section-title">Proponowane produkty</h2>
<?php
echo do_shortcode('[featured_products per_page="5" columns="5"]');
?>

</div>

<section class="ht-section">
		<div class="ht-container">
			<div class="ht-container ht-clearfix">
				<div class="ht-about-sec">
					<div class="ht-about-image">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/BTH-Drewno-1.webp" loading="lazy" fetchpriority="low" width="585" height="439" alt="BTH Drewno">
					</div>
					<div class="ht-content">
					<h2 class="ht-section-title">BTH Drewno</h2>
						<p>Oferujemy produkty pochodzące od sprawdzonych dostawców i renomowanych producentów.</p>
						<p>U nas możesz zamówić produkt jak również skorzystać z zakupu podłogi, tarasu czy elewacji wraz z <strong>montażem</strong>.</p>
						<p>Potrzebujesz bezpłatnej wyceny czy doradztwa w wyborze produktu? <a href="/kontakt">Skontaktuj się z nami</a>!</p>
						<p><a href="/sklep">Zapraszamy do zapoznania się z naszą ofertą.</a></p>
					</div>
				</div>
			</div>
		</div>
</section>

<section id="ht-blog-section" class="ht-section section-blog">
	<div class="ht-container">
		<?php
		$total_blog_title = get_theme_mod('total_blog_title');
		$total_blog_sub_title = get_theme_mod('total_blog_sub_title');
		?>
		<?php if($total_blog_title || $total_blog_sub_title){ ?>
		<div class="ht-section-title-tagline">
		<?php if($total_blog_title){ ?>
		<h2 class="ht-section-title"><?php echo esc_html($total_blog_title); ?></h2>
		<?php } ?>

		<?php if($total_blog_sub_title){ ?>
		<div class="ht-section-tagline"><?php echo esc_html($total_blog_sub_title); ?></div>
		<?php } ?>
		</div>
		<?php } ?>

		<div class="ht-blog-wrap ht-clearfix">
		<?php 
			$total_blog_post_count = get_theme_mod('total_blog_post_count', 3 );
			$total_blog_cat_exclude = get_theme_mod('total_blog_cat_exclude');
            $total_blog_cat_exclude = explode(',', $total_blog_cat_exclude);

			$args = array(
				'posts_per_page' => absint($total_blog_post_count),
				'category__not_in' => $total_blog_cat_exclude
				);
			$query = new WP_Query($args);
			if($query -> have_posts()):
				while($query -> have_posts()) : $query -> the_post();
				$total_image = wp_get_attachment_image_src(get_post_thumbnail_id() , 'total-blog-thumb');
				?>
				<div class="ht-blog-post ht-clearfix">
					<?php 
					if(has_post_thumbnail()){
					?> 
						<div class="ht-blog-thumbnail">
							<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($total_image[0]) ?>" loading="lazy" width="364" height="254" fetchpriority="low" alt="<?php the_title(); ?>"></a>
						</div>
					<?php
					}
					?>
					<div class="ht-blog-excerpt">
					<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					<div class="ht-blog-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><?php echo get_the_date(); ?></div>
						<?php 
						if(has_excerpt() && '' != trim(get_the_excerpt())){
							the_excerpt();
						}else{
							echo esc_html(total_excerpt( get_the_content() , 190 ));
						}
						?>
					</div>

					<div class="ht-blog-read-more">
						<a href="<?php the_permalink(); ?>"><?php esc_html_e('Czytaj dalej', 'total'); ?></a>
					</div>
				</div>
				<?php
				endwhile;
			endif;
			wp_reset_postdata();
		?>
		</div>	
	</div>
</section>

<?php
do_action( 'woocommerce_after_main_content' );

do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
