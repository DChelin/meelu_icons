<?php
/**
 * ----------------------------------------------------------------------------------------
 * WooCommerce single product summary
 * ----------------------------------------------------------------------------------------
 */
add_action('woocommerce_single_product_summary', 'meelu_purchase_benefits', 60);
function meelu_purchase_benefits() {
	$product_title = get_the_title();
	if ( $product_title == "Meelu Original Mattress" ) {
	?>
		<ul class="meelu-purchase-benefits" style="display: flex; justify-content: space-between; flex-wrap: wrap; align-items: center;">
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-100-night-trial.png'; ?>" alt="<?php _e( '100 Night Risk-Free Trial When Purchased from www.meelusleep.com', 'generatepress' ); ?>">
				<p><?php _e( '100 Night Risk-Free Trial When Purchased From www.meelusleep.com', 'generatepress' ); ?></p>
			</li>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-easy-shopping.png'; ?>" alt="<?php _e( 'Free Delivery to Your Door (3-7 Working Days)', 'generatepress' ); ?>">
				<p><?php _e( 'Free Delivery to Your Door (3-7 Working Days)', 'generatepress' ); ?></p>
			</li>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-15-year-warranty.png'; ?>" alt="<?php _e( '15 Year Warranty', 'generatepress' ); ?>">
				<p><?php _e( '15 Year Warranty', 'generatepress' ); ?></p>
			</li>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-zip-and-wash.png'; ?>" alt="<?php _e( 'Zip &amp; Wash Cover', 'generatepress' ); ?>">
				<p><?php _e( 'Zip &amp; Wash Cover', 'generatepress' ); ?></p>
			</li>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-proudly-made-in-sa-v2.png'; ?>" alt="<?php _e( 'Proudly made in RSA', 'generatepress' ); ?>">
				<p><?php _e( 'Proudly made in RSA', 'generatepress' ); ?></p>
			</li>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/weight_icon.png'; ?>" alt="<?php _e( '150kg per side', 'generatepress' ); ?>">
				<p><?php _e( '150kg per side', 'generatepress' ); ?></p>
			</li>
		</ul>
		<?php
	} else if ( $product_title == "Meelu Pillow" ) { ?>
		<ul class="meelu-purchase-benefits">
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-easy-shopping.png'; ?>" alt="<?php _e( 'Free Delivery to Your Door (3-7 Working Days)', 'generatepress' ); ?>">
				<p><?php _e( 'Free Delivery to Your Door (3-7 Working Days)', 'generatepress' ); ?></p>
			</li>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-zip-and-wash.png'; ?>" alt="<?php _e( 'Zip &amp; Wash Cover', 'generatepress' ); ?>">
				<p><?php _e( 'Zip &amp; Wash Cover', 'generatepress' ); ?></p>
			</li>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-proudly-made-in-sa-v2.png'; ?>" alt="<?php _e( 'Proudly made in RSA', 'generatepress' ); ?>">
				<p><?php _e( 'Proudly made in RSA', 'generatepress' ); ?></p>
			</li>
		</ul><?php
	} else if ( $product_title == "Meelu Life Mattress" ) { ?>
		<ul class="meelu-purchase-benefits">
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-100-night-trial.png'; ?>" alt="<?php _e( '100 Night Risk-Free Trial', 'generatepress' ); ?>">
				<p><?php _e( '100 Night Risk-Free Trial', 'generatepress' ); ?></p>
			</li>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-easy-shopping.png'; ?>" alt="<?php _e( 'Free Delivery to Your Door (3-5 Working Days)', 'generatepress' ); ?>">
				<p><?php _e( 'Free Delivery to Your Door (3-5 Working Days)', 'generatepress' ); ?></p>
			</li>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-warranty.png'; ?>" alt="<?php _e( '10 Year Warranty', 'generatepress' ); ?>">
				<p><?php _e( '10 Year Warranty', 'generatepress' ); ?></p>
			</li>

			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/life.png'; ?>" alt="<?php _e( '110kg per side', 'generatepress' ); ?>">
				<p><?php _e( '110kg per side', 'generatepress' ); ?></p>
			</li>

			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-comfort-and-support.png'; ?>" alt="<?php _e( 'Essential Comfort &amp; Support', 'generatepress' ); ?>">
				<p><?php _e( 'Essential Comfort &amp; Support', 'generatepress' ); ?></p>
			</li>
			
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-proudly-made-in-sa-v2.png'; ?>" alt="<?php _e( 'Proudly made in RSA', 'generatepress' ); ?>">
				<p><?php _e( 'Proudly made in RSA', 'generatepress' ); ?></p>
			</li>
		</ul>
	<?php
	} else if ( $product_title == "Meelu Hybrid Mattress" ) { ?>
		<ul class="meelu-purchase-benefits">
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-100-night-trial.png'; ?>" alt="<?php _e( '100 Night Risk-Free Trial', 'generatepress' ); ?>">
				<p><?php _e( '100 Night Risk-Free Trial', 'generatepress' ); ?></p>
			</li>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-easy-shopping.png'; ?>" alt="<?php _e( 'Free Delivery to Your Door (3-5 Working Days)', 'generatepress' ); ?>">
				<p><?php _e( 'Free Delivery to Your Door (3-5 Working Days)', 'generatepress' ); ?></p>
			</li>
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-warranty.png'; ?>" alt="<?php _e( '10 Year Warranty', 'generatepress' ); ?>">
				<p><?php _e( '10 Year Warranty', 'generatepress' ); ?></p>
			</li>

			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/weight_icon.png'; ?>" alt="<?php _e( '150kg per side', 'generatepress' ); ?>">
				<p><?php _e( '150kg per side', 'generatepress' ); ?></p>
			</li>

			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-comfort-and-support.png'; ?>" alt="<?php _e( 'Essential Comfort &amp; Support', 'generatepress' ); ?>">
				<p><?php _e( 'Essential Comfort &amp; Support', 'generatepress' ); ?></p>
			</li>
			
			<li>
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/icons/icon-proudly-made-in-sa-v2.png'; ?>" alt="<?php _e( 'Proudly made in RSA', 'generatepress' ); ?>">
				<p><?php _e( 'Proudly made in RSA', 'generatepress' ); ?></p>
			</li>
		</ul>
	<?php }
}
?>
