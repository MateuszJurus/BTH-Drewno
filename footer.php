<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Total
 */

?>

<section id="ht-cta-section">
    <div class="ht-cta-section ht-section">
    	<div class="ht-cta-overlay"></div>
    	<div class="ht-container">
    		<?php
    		$total_cta_title = get_theme_mod('total_cta_title');
    		$total_cta_sub_title = get_theme_mod('total_cta_sub_title');
    		$total_cta_button1_text = get_theme_mod('total_cta_button1_text');
    		$total_cta_button1_link = get_theme_mod('total_cta_button1_link');
    		$total_cta_button2_text = get_theme_mod('total_cta_button2_text');
    		$total_cta_button2_link = get_theme_mod('total_cta_button2_link');
    		?>
    		<?php if($total_cta_title || $total_cta_sub_title){ ?>
    		<div class="ht-section-title-tagline">
    		<?php if($total_cta_title){ ?>
    		<h2 class="ht-section-title"><?php echo esc_html($total_cta_title); ?></h2>
    		<?php } ?>
    
    		<?php if($total_cta_sub_title){ ?>
    		<div class="ht-section-tagline"><?php echo esc_html($total_cta_sub_title); ?></div>
    		<?php } ?>
    		</div>
    		<?php } ?>
    
    		<?php 
    		if($total_cta_button1_link || $total_cta_button2_link){
    		?>
    		<div class="ht-cta-buttons">
    
    		<?php if($total_cta_button1_link){ ?>
    		<a class="ht-cta-button1" href="<?php echo esc_url($total_cta_button1_link); ?>"><?php echo esc_html($total_cta_button1_text); ?></a>
    		<?php } ?>
    
    		<?php if($total_cta_button2_link){ ?>
    		<a class="ht-cta-button2" href="<?php echo esc_url($total_cta_button2_link); ?>"><?php echo esc_html($total_cta_button2_text); ?></a>
    		<?php } ?>
    
    		</div>
    		<?php
    		}
    		?>
    
    	</div>
    </div>
</section>
	</div><!-- #content -->

	<footer id="ht-colophon" class="ht-site-footer">
		<?php if(is_active_sidebar('total-footer1') || is_active_sidebar('total-footer2') || is_active_sidebar('total-footer3') || is_active_sidebar('total-footer4')){ ?>
		<div id="ht-top-footer">
			<div class="ht-container">
				<div class="ht-top-footer ht-clearfix">
					<div class="ht-footer ht-footer1">
						<?php if(is_active_sidebar('total-footer1')): 
							dynamic_sidebar('total-footer1');
						endif;
						?>	
					</div>

					<div class="ht-footer ht-footer2">
						<?php if(is_active_sidebar('total-footer2')): 
							dynamic_sidebar('total-footer2');
						endif;
						?>	
					</div>

					<div class="ht-footer ht-footer3">
						<?php if(is_active_sidebar('total-footer3')): 
							dynamic_sidebar('total-footer3');
						endif;
						?>	
					</div>

					<div class="ht-footer ht-footer4">
						<?php if(is_active_sidebar('total-footer4')): 
							dynamic_sidebar('total-footer4');
						endif;
						?>	
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<a class="total-floating-contact" href="tel:+48426725449" aria-label="<?php esc_attr_e( 'Zadzwoń', 'total' ); ?>">
	<svg class="total-floating-contact__icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
		<path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.56 3.58.56a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.19 2.46.56 3.58a1 1 0 0 1-.25 1.01l-2.19 2.2Z"/>
	</svg>
	<span><?php esc_html_e( 'Zadzwoń', 'total' ); ?></span>
</a>

<?php wp_footer(); ?>

</body>
</html>
