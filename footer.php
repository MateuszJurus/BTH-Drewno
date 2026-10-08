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

		<div id="ht-bottom-footer">
			<div class="ht-container">
				<div class="ht-site-info">
					© BTH Drewno - made by <a href="https://woodlovers.pl" rel="nofollow" target="_blank">woodlovers</a>
				</div><!-- #site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<div id="ht-back-top" class="ht-hide"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
<?php wp_footer(); ?>

</body>
</html>
