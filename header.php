<?php
/**
 * The header for our theme.
 *
 * @package Total
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<style>
/* latin-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Oswald';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Pontano Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/qFdD35GdgYR8EzR6oBLDHa3ayz8Ns1s.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Pontano Sans';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/qFdD35GdgYR8EzR6oBLDHa3axT8N.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Pontano Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/qFdD35GdgYR8EzR6oBLDHa3ayz8Ns1s.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Pontano Sans';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/qFdD35GdgYR8EzR6oBLDHa3axT8N.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Pontano Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/qFdD35GdgYR8EzR6oBLDHa3ayz8Ns1s.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Pontano Sans';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/qFdD35GdgYR8EzR6oBLDHa3axT8N.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Pontano Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/qFdD35GdgYR8EzR6oBLDHa3ayz8Ns1s.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Pontano Sans';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/qFdD35GdgYR8EzR6oBLDHa3axT8N.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Pontano Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/qFdD35GdgYR8EzR6oBLDHa3ayz8Ns1s.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Pontano Sans';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(<?php echo get_site_url(); ?>/wp-content/themes/total/fonts/qFdD35GdgYR8EzR6oBLDHa3axT8N.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
fscript {s}
</style>
<?php wp_head(); ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HX3X6WDJ65"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HX3X6WDJ65');
</script>
</head>
<body <?php body_class(); ?>>
<div id="cart-count" style="display: none;" data-count="<?php global $woocommerce;print_r(count(WC()->cart->get_cart())); ?>"></div>
<div id="ht-page">

<!-- announcments from acf -->

		<?php 
			$active = get_field('ann', 'option');
			$content = get_field('ann_content', 'option')
		?>

	<header id="ht-masthead" class="ht-site-header">

		<?php if($active && $content): ?>

			<div class="announcments js-ann">
				<p class="announcments__text">
					<?php echo $content; ?>
				</p>
			</div>

		<?php endif; ?>
		<!-- -->

		<div class="ht-container ht-site-top-nav">
			<span><b>Zadzwoń do nas!</b></span>
			<span class="ht-site-top-nav-phone"><a href="tel:+426725449">(42) 672 54 49</a></span>
			<span><b>Salon</b> Pon.-Pią.: 8:00 - 17:00 | Sob.: 10:00 - 14:00</span>
			<span><b>Magazyn</b> Pon.-Pią.: 8:00 - 16:00</span>
		</div>
		<div class="ht-container main-nav">
			<div id="ht-site-branding">
				<?php 
				if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) :
					the_custom_logo();
				else : 
					if ( is_front_page() ) : ?>
						<h1 class="ht-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="ht-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
					<p class="ht-site-description"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			<nav id="ht-site-navigation" class="ht-main-navigation">
				<div class="toggle-bar"><span></span></div>
				<?php 
				wp_nav_menu( array( 
					'theme_location' => 'primary', 
					'container_class' => 'ht-menu ht-clearfix' ,
					'menu_class' => 'ht-clearfix',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				) ); 
				?>
			</nav><!-- #ht-site-navigation -->
		</div>
		
	</header><!-- #ht-masthead -->

	<div id="ht-content" class="ht-site-content ht-clearfix  <?php if($active) echo 'announcment-active'; ?>">