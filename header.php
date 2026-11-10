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
			<?php $header_socials = function_exists( 'get_field' ) ? get_field( 'main_nav_socials', 'option' ) : array(); ?>
			<?php if ( $header_socials ) : ?>
				<div class="main-nav__socials">
          <a
							href="https://www.instagram.com/bth_drewno/"
              target="_blank"
              rel="noopener noreferrer"
							class="main-nav__social"
							aria-label="Instagram Social"
						>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="1000" height="1000" viewBox="0 0 264.5833 264.5833" inkscape:version="1.0.1 (3bc2e813f5, 2020-09-07)" sodipodi:docname="Instagram_(2022).svg"><defs><radialGradient id="f" cx="158.429" cy="578.088" r="52.3515" xlink:href="#a" gradientUnits="userSpaceOnUse" gradientTransform="matrix(0 -4.03418 4.28018 0 -2332.2273 942.2356)" fx="158.429" fy="578.088"/><radialGradient inkscape:collect="always" xlink:href="#b" id="g" gradientUnits="userSpaceOnUse" gradientTransform="matrix(.67441 -1.16203 1.51283 .87801 -814.3657 -47.8354)" cx="172.6149" cy="600.6924" fx="172.6149" fy="600.6924" r="65"/><radialGradient inkscape:collect="always" xlink:href="#c" id="h" cx="144.012" cy="51.3367" fx="144.012" fy="51.3367" r="67.081" gradientTransform="matrix(-2.3989 .67549 -.23008 -.81732 464.9957 -26.4035)" gradientUnits="userSpaceOnUse"/><radialGradient inkscape:collect="always" xlink:href="#d" id="e" gradientUnits="userSpaceOnUse" gradientTransform="matrix(-3.10797 .87652 -.6315 -2.23914 1345.6503 1374.1983)" cx="199.7884" cy="628.4379" fx="199.7884" fy="628.4379" r="52.3515"/><linearGradient inkscape:collect="always" id="d"><stop offset="0" stop-color="#ff005f"/><stop offset="1" stop-color="#fc01d8"/></linearGradient><linearGradient id="c"><stop offset="0" stop-color="#780cff"/><stop stop-color="#820bff" offset="1" stop-opacity="0"/></linearGradient><linearGradient inkscape:collect="always" id="b"><stop offset="0" stop-color="#fc0"/><stop offset="1" stop-color="#fc0" stop-opacity="0"/></linearGradient><linearGradient id="a"><stop offset="0" stop-color="#fc0"/><stop offset=".1242" stop-color="#fc0"/><stop offset=".5672" stop-color="#fe4a05"/><stop offset=".6942" stop-color="#ff0f3f"/><stop offset="1" stop-color="#fe0657" stop-opacity="0"/></linearGradient></defs><sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:zoom=".515" inkscape:cx="500" inkscape:cy="500" inkscape:document-units="mm" inkscape:current-layer="layer1" inkscape:document-rotation="0" showgrid="false" inkscape:window-width="1366" inkscape:window-height="705" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1"/><g inkscape:label="Layer 1" inkscape:groupmode="layer"><path d="M204.1503 18.1429c-55.2305 0-71.3834.057-74.5232.3175-11.3342.9424-18.387 2.7275-26.0708 6.554-5.9214 2.9413-10.5915 6.3506-15.2005 11.1298-8.3938 8.7157-13.481 19.4383-15.3226 32.1842-.8953 6.1877-1.1558 7.4496-1.2087 39.0558-.0203 10.5354 0 24.4007 0 42.9984 0 55.2008.061 71.3418.3256 74.4764.9157 11.032 2.6453 17.9728 6.3081 25.565 7 14.5329 20.369 25.4428 36.119 29.5137 5.4535 1.4044 11.4767 2.1779 19.2092 2.5442 3.2762.1425 36.6684.2443 70.081.2443 33.4127 0 66.8253-.0407 70.02-.2035 8.9535-.4214 14.1526-1.1195 19.9011-2.6054 15.8517-4.0912 28.9767-14.8383 36.119-29.5748 3.5916-7.409 5.4128-14.6144 6.237-25.0704.179-2.2796.2543-38.6263.2543-74.924 0-36.304-.0814-72.5835-.2605-74.8632-.8343-10.6249-2.6555-17.7692-6.363-25.3207-3.0421-6.1816-6.42-10.798-11.324-15.518-8.752-8.3616-19.4555-13.4502-32.2101-15.2902-6.18-.8936-7.411-1.1582-39.033-1.2131z" inkscape:connector-curvature="0" fill="url(#e)" transform="translate(-71.8155 -18.1429)"/><path d="M204.1503 18.1429c-55.2305 0-71.3834.057-74.5232.3175-11.3342.9424-18.387 2.7275-26.0708 6.554-5.9214 2.9413-10.5915 6.3506-15.2005 11.1298-8.3938 8.7157-13.481 19.4383-15.3226 32.1842-.8953 6.1877-1.1558 7.4496-1.2087 39.0558-.0203 10.5354 0 24.4007 0 42.9984 0 55.2008.061 71.3418.3256 74.4764.9157 11.032 2.6453 17.9728 6.3081 25.565 7 14.5329 20.369 25.4428 36.119 29.5137 5.4535 1.4044 11.4767 2.1779 19.2092 2.5442 3.2762.1425 36.6684.2443 70.081.2443 33.4127 0 66.8253-.0407 70.02-.2035 8.9535-.4214 14.1526-1.1195 19.9011-2.6054 15.8517-4.0912 28.9767-14.8383 36.119-29.5748 3.5916-7.409 5.4128-14.6144 6.237-25.0704.179-2.2796.2543-38.6263.2543-74.924 0-36.304-.0814-72.5835-.2605-74.8632-.8343-10.6249-2.6555-17.7692-6.363-25.3207-3.0421-6.1816-6.42-10.798-11.324-15.518-8.752-8.3616-19.4555-13.4502-32.2101-15.2902-6.18-.8936-7.411-1.1582-39.033-1.2131z" inkscape:connector-curvature="0" fill="url(#f)" transform="translate(-71.8155 -18.1429)"/><path d="M204.1503 18.1429c-55.2305 0-71.3834.057-74.5232.3175-11.3342.9424-18.387 2.7275-26.0708 6.554-5.9214 2.9413-10.5915 6.3506-15.2005 11.1298-8.3938 8.7157-13.481 19.4383-15.3226 32.1842-.8953 6.1877-1.1558 7.4496-1.2087 39.0558-.0203 10.5354 0 24.4007 0 42.9984 0 55.2008.061 71.3418.3256 74.4764.9157 11.032 2.6453 17.9728 6.3081 25.565 7 14.5329 20.369 25.4428 36.119 29.5137 5.4535 1.4044 11.4767 2.1779 19.2092 2.5442 3.2762.1425 36.6684.2443 70.081.2443 33.4127 0 66.8253-.0407 70.02-.2035 8.9535-.4214 14.1526-1.1195 19.9011-2.6054 15.8517-4.0912 28.9767-14.8383 36.119-29.5748 3.5916-7.409 5.4128-14.6144 6.237-25.0704.179-2.2796.2543-38.6263.2543-74.924 0-36.304-.0814-72.5835-.2605-74.8632-.8343-10.6249-2.6555-17.7692-6.363-25.3207-3.0421-6.1816-6.42-10.798-11.324-15.518-8.752-8.3616-19.4555-13.4502-32.2101-15.2902-6.18-.8936-7.411-1.1582-39.033-1.2131z" inkscape:connector-curvature="0" fill="url(#g)" transform="translate(-71.8155 -18.1429)"/><path d="M204.1503 18.1429c-55.2305 0-71.3834.057-74.5232.3175-11.3342.9424-18.387 2.7275-26.0708 6.554-5.9214 2.9413-10.5915 6.3506-15.2005 11.1298-8.3938 8.7157-13.481 19.4383-15.3226 32.1842-.8953 6.1877-1.1558 7.4496-1.2087 39.0558-.0203 10.5354 0 24.4007 0 42.9984 0 55.2008.061 71.3418.3256 74.4764.9157 11.032 2.6453 17.9728 6.3081 25.565 7 14.5329 20.369 25.4428 36.119 29.5137 5.4535 1.4044 11.4767 2.1779 19.2092 2.5442 3.2762.1425 36.6684.2443 70.081.2443 33.4127 0 66.8253-.0407 70.02-.2035 8.9535-.4214 14.1526-1.1195 19.9011-2.6054 15.8517-4.0912 28.9767-14.8383 36.119-29.5748 3.5916-7.409 5.4128-14.6144 6.237-25.0704.179-2.2796.2543-38.6263.2543-74.924 0-36.304-.0814-72.5835-.2605-74.8632-.8343-10.6249-2.6555-17.7692-6.363-25.3207-3.0421-6.1816-6.42-10.798-11.324-15.518-8.752-8.3616-19.4555-13.4502-32.2101-15.2902-6.18-.8936-7.411-1.1582-39.033-1.2131z" inkscape:connector-curvature="0" fill="url(#h)" transform="translate(-71.8155 -18.1429)"/><path d="M132.3452 33.973c-26.7167 0-30.0696.1167-40.5629.5939-10.4727.4792-17.6212 2.136-23.8762 4.567-6.4701 2.5107-11.9586 5.8693-17.4265 11.3352-5.472 5.464-8.8332 10.9483-11.354 17.4116-2.4389 6.2524-4.099 13.3976-4.5703 23.8585-.4693 10.4854-.5923 13.8379-.5923 40.5348 0 26.697.1189 30.0371.5943 40.5225.4817 10.465 2.1397 17.6082 4.5703 23.8585 2.5147 6.4654 5.8758 11.9497 11.3458 17.4136 5.466 5.468 10.9544 8.8349 17.4204 11.3456 6.259 2.4309 13.4097 4.0877 23.8803 4.567 10.4933.477 13.8441.5938 40.5588.5938 26.7188 0 30.0615-.1167 40.5547-.5939 10.4728-.4792 17.6295-2.136 23.8885-4.567 6.4681-2.5106 11.9484-5.8775 17.4143-11.3455 5.472-5.4639 8.8332-10.9482 11.354-17.4115 2.4183-6.2524 4.0784-13.3976 4.5703-23.8585.4713-10.4854.5943-13.8277.5943-40.5246 0-26.697-.123-30.0473-.5943-40.5328-.4919-10.465-2.152-17.6081-4.5703-23.8584-2.5208-6.4654-5.882-11.9498-11.354-17.4137-5.4721-5.468-10.9442-8.8266-17.4204-11.3353-6.2714-2.4309-13.424-4.0877-23.8967-4.5669-10.4933-.4772-13.8339-.5939-40.5588-.5939zm-8.825 17.7147c2.6193-.0041 5.5418 0 8.825 0 26.2659 0 29.379.0942 39.7513.5652 9.5915.4383 14.7971 2.0397 18.2648 3.3852 4.5908 1.7817 7.8638 3.9116 11.3048 7.3521 3.4431 3.4406 5.5745 6.7173 7.3617 11.3046 1.3465 3.461 2.9512 8.6628 3.3877 18.2472.4714 10.3625.5739 13.4754.5739 39.7095 0 26.234-.1025 29.347-.5739 39.7095-.4386 9.5843-2.0412 14.7861-3.3877 18.2471-1.783 4.5874-3.9186 7.8539-7.3617 11.2923-3.443 3.4406-6.712 5.5704-11.3048 7.3521-3.4636 1.3517-8.6733 2.949-18.2648 3.3873-10.3702.471-13.4854.5734-39.7513.5734-26.2679 0-29.381-.1024-39.7513-.5734-9.5914-.4423-14.797-2.0438-18.2668-3.3893-4.5908-1.7817-7.87-3.9116-11.313-7.3521-3.4431-3.4405-5.5745-6.709-7.3617-11.2985-1.3465-3.461-2.9512-8.6628-3.3877-18.2471-.4714-10.3626-.5657-13.4754-.5657-39.7259 0-26.2504.0943-29.347.5657-39.7095.4386-9.5844 2.0412-14.7861 3.3877-18.2512 1.783-4.5874 3.9186-7.8641 7.3617-11.3046 3.443-3.4406 6.7222-5.5704 11.313-7.3562 3.4677-1.3517 8.6754-2.949 18.2668-3.3894 9.075-.4096 12.5919-.5324 30.9264-.553zm61.3363 16.322c-6.5173 0-11.805 5.2776-11.805 11.792 0 6.5125 5.2877 11.7962 11.805 11.7962 6.5172 0 11.8049-5.2837 11.8049-11.7962 0-6.5124-5.2877-11.796-11.805-11.796zm-52.5113 13.7826c-27.8993 0-50.5191 22.6031-50.5191 50.4817 0 27.8786 22.6198 50.4714 50.5191 50.4714s50.511-22.5928 50.511-50.4714c0-27.8786-22.6137-50.4817-50.513-50.4817zm0 17.7147c18.109 0 32.7914 14.6694 32.7914 32.767 0 18.0956-14.6824 32.767-32.7914 32.767-18.111 0-32.7913-14.6714-32.7913-32.767 0-18.0976 14.6803-32.767 32.7913-32.767z" inkscape:connector-curvature="0" fill="#fff"/></g></svg>
						</a>
            <a
							href="https://www.facebook.com/bthdrewno"
              target="_blank"
              rel="noopener noreferrer"
							class="main-nav__social"
							aria-label="Facebook social"
						>
<svg
   version="1.1" id="svg9" width="666.66669" height="666.66718" viewBox="0 0 666.66668 666.66717" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs13"><clipPath clipPathUnits="userSpaceOnUse" id="clipPath25"><path d="M 0,700 H 700 V 0 H 0 Z" id="path23" /></clipPath></defs><g id="g17" transform="matrix(1.3333333,0,0,-1.3333333,-133.33333,799.99999)"><g id="g19"><g id="g21" clip-path="url(#clipPath25)"><g id="g27" transform="translate(600,350)"><path d="m 0,0 c 0,138.071 -111.929,250 -250,250 -138.071,0 -250,-111.929 -250,-250 0,-117.245 80.715,-215.622 189.606,-242.638 v 166.242 h -51.552 V 0 h 51.552 v 32.919 c 0,85.092 38.508,124.532 122.048,124.532 15.838,0 43.167,-3.105 54.347,-6.211 V 81.986 c -5.901,0.621 -16.149,0.932 -28.882,0.932 -40.993,0 -56.832,-15.528 -56.832,-55.9 V 0 h 81.659 l -14.028,-76.396 h -67.631 V -248.169 C -95.927,-233.218 0,-127.818 0,0"
             style="fill:#0866ff;fill-opacity:1;fill-rule:nonzero;stroke:none"
             id="path29" /></g><g id="g31" transform="translate(447.9175,273.6036)"><path d="M 0,0 14.029,76.396 H -67.63 v 27.019 c 0,40.372 15.838,55.899 56.831,55.899 12.733,0 22.981,-0.31 28.882,-0.931 v 69.253 c -11.18,3.106 -38.509,6.212 -54.347,6.212 -83.539,0 -122.048,-39.441 -122.048,-124.533 V 76.396 h -51.552 V 0 h 51.552 v -166.242 c 19.343,-4.798 39.568,-7.362 60.394,-7.362 10.254,0 20.358,0.632 30.288,1.831 L -67.63,0 Z"
             style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"
             id="path33" /></g></g></g></g></svg></a>
             <a
							href="https://www.google.com/maps/place/Rokici%C5%84ska+142,+92-412+%C5%81%C3%B3d%C5%BA/@51.7580793,19.5523018,17z/data=!3m1!4b1!4m6!3m5!1s0x471bccc87a81cd69:0x10cc109597ca7a45!8m2!3d51.758076!4d19.5548767!16s%2Fg%2F11c2740zsy?entry=tts&g_ep=EgoyMDI2MTAyNy4wIOC7DCoASAFQAw%3D%3D&skid=b43afa74-92f2-4be0-ba18-225e7abff4f1"
              target="_blank"
              rel="noopener noreferrer"
							class="main-nav__social"
							aria-label="Google maps"
						>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 92.3 132.3"><path fill="#1a73e8" d="M60.2 2.2C55.8.8 51 0 46.1 0 32 0 19.3 6.4 10.8 16.5l21.8 18.3L60.2 2.2z"/><path fill="#ea4335" d="M10.8 16.5C4.1 24.5 0 34.9 0 46.1c0 8.7 1.7 15.7 4.6 22l28-33.3-21.8-18.3z"/><path fill="#4285f4" d="M46.2 28.5c9.8 0 17.7 7.9 17.7 17.7 0 4.3-1.6 8.3-4.2 11.4 0 0 13.9-16.6 27.5-32.7-5.6-10.8-15.3-19-27-22.7L32.6 34.8c3.3-3.8 8.1-6.3 13.6-6.3"/><path fill="#fbbc04" d="M46.2 63.8c-9.8 0-17.7-7.9-17.7-17.7 0-4.3 1.5-8.3 4.1-11.3l-28 33.3c4.8 10.6 12.8 19.2 21 29.9l34.1-40.5c-3.3 3.9-8.1 6.3-13.5 6.3"/><path fill="#34a853" d="M59.1 109.2c15.4-24.1 33.3-35 33.3-63 0-7.7-1.9-14.9-5.2-21.3L25.6 98c2.6 3.4 5.3 7.3 7.9 11.3 9.4 14.5 6.8 23.1 12.8 23.1s3.4-8.7 12.8-23.2"/></svg>  
        </a>
				</div>
			<?php endif; ?>
		</div>
		
	</header><!-- #ht-masthead -->

	<div id="ht-content" class="ht-site-content ht-clearfix  <?php if($active) echo 'announcment-active'; ?>">