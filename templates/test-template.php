<?php
/**
 * Template Name: Test
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?>

<style>
    .ht-cta-button1 {
        position: relative;
        background-color: #ef6e00;
        margin: 0 auto;
        color: white;
        display: block; 
        width: fit-content;
        text-align: center;
        padding: 10px 25px;
    }

    .ht-cta-button1:hover {
        color: white;
        background: black;
    }

    .ht-cta-button2, .ht-cta-button3, .ht-cta-button4 {
        background-color: #8bab0d; color: white;padding: 10px 20px; margin: 0px 10px 0;display: inline-block; width: fit-content;
    }

    .ht-cta-button2:hover, .ht-cta-button3:hover, .ht-cta-button4:hover {
        cursor: pointer;
        background-color: black;
        color: white;
    }

    .ht-cta-button2 {
        animation: fadeIn3 1s;
    }

    .ht-cta-button3 {
        animation: fadeIn2 1s;
    }
    .ht-cta-button4 {
        animation: fadeIn1 1s;
    }

    @keyframes fadeIn1{
        0% {
            opacity: 0;
            transform: translate(0, 20px);
        }

        66% {
            opacity: 0;
            transform: translate(0, 20px);
        }

        100% {
            opacity: 1;
            transform: translate(0, 0);
        }
    }

    @keyframes fadeIn2{
        0% {
            opacity: 0;
            transform: translate(0, 20px);
        }

        33% {
            opacity: 0;
            transform: translate(0, 20px);
        }

        100% {
            opacity: 1;
            transform: translate(0, 0);
        }
    }

    @keyframes fadeIn3{
        0% {
            opacity: 0;
            transform: translate(0, 20px);
        }

        100% {
            opacity: 1;
            transform: translate(0, 0);
        }
    }

    @media all and (max-width: 420px) {
        .ht-cta-button2, .ht-cta-button3, .ht-cta-button4 {
            padding: 5px 10px;
        }
    }
</style>

<div class="hero--alt">
	 <div class="hero--alt__item"  style="display: flex;flex-flow: column;justify-content:center;align-items:center;
	 background:linear-gradient(0deg, rgba(0,0,0, 0.6), rgba(0,0,0, .6)), url(/wp-content/themes/total/hero.webp);
	 background-size: cover; height: 500px; width: 100%;background-position: center">
		 <h1 class="ht-section-title" style="color: white;max-width: 1170px;text-align: center; font-size: 42px">BTH Drewno</h1>
		 <a class="ht-cta-button1" style="" href="/kontakt">Zadzwoń lub napisz do nas!</a>
		<span style="color: white; text-align: center; display: block;margin: 30px;">lub zapoznaj się z naszą ofertą:</span>
		<div style="display: block; margin: 10px auto;width: fit-content">
		<a href="/oferta/tarasy-drewniane-i-kompozytowe/" class="ht-cta-button2">Tarasy</a>
		<a href="/oferta/elewacje-drewniane/" class="ht-cta-button3">Elewacje</a>
		<a href="/oferta/podlogi-drewniane/" class="ht-cta-button4">Podłogi</a>
		
		</div></div>
</div>


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
			<img src="<?php echo esc_url( $image[0] ); ?>" class="js-lazy" loading="lazy" alt="Partner Logo" >
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
