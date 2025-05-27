## Woocommerce Javascript events

### Woocommerce Checkout JS events
```
$( document.body ).trigger( 'init_checkout' );
$( document.body ).trigger( 'payment_method_selected' );
$( document.body ).trigger( 'update_checkout' );
$( document.body ).trigger( 'updated_checkout' );
$( document.body ).trigger( 'checkout_error' );
$( document.body ).trigger( 'applied_coupon_in_checkout' );
$( document.body ).trigger( 'removed_coupon_in_checkout' );
```

### Woocommerce cart page JS events
```
$( document.body ).trigger( 'wc_cart_emptied' );
$( document.body ).trigger( 'update_checkout' );
$( document.body ).trigger( 'updated_wc_div' );
$( document.body ).trigger( 'updated_cart_totals' );
$( document.body ).trigger( 'country_to_state_changed' );
$( document.body ).trigger( 'updated_shipping_method' );
$( document.body ).trigger( 'applied_coupon', [ coupon_code ] );
$( document.body ).trigger( 'removed_coupon', [ coupon ] );
```

### Woocommerce Single product page JS events
```
$( '.wc-tabs-wrapper, .woocommerce-tabs, #rating' ).trigger( 'init' );
```

### Woocommerce Variable product page JS events
```
$( document.body ).trigger( 'found_variation', [variation] );
```

### Woocommerce Add to cart JS events
```
$( document.body ).trigger( 'adding_to_cart', [ $thisbutton, data ] );
$( document.body ).trigger( 'added_to_cart', [ response.fragments, response.cart_hash, $thisbutton ] );
$( document.body ).trigger( 'removed_from_cart', [ response.fragments, response.cart_hash, $thisbutton ] );
$( document.body ).trigger( 'wc_cart_button_updated', [ $button ] );
$( document.body ).trigger( 'cart_page_refreshed' );
$( document.body ).trigger( 'cart_totals_refreshed' );
$( document.body ).trigger( 'wc_fragments_loaded' );
```

### Woocommerce Add payment method JS events
```
$( document.body ).trigger( 'init_add_payment_method' );
```

### To bind listener to these events, use:
```
jQuery('<event_target>').on('<event_name>', function(){
    console.log('<event_name> triggered');
});
```

### F. ex.
```
jQuery('body').on('init_checkout', function(){
    console.log('init_checkout triggered');
    // now.do.whatever();
});
```

### Woocommerce change single product gallery slider options
Have a look at this file yyou will see filter available to change default options:
/wp-content/plugins/woocommerce/includes/class-wc-frontend-scripts.php



```

			case 'wc-single-product':
				$params = array(
					'i18n_required_rating_text'         => esc_attr__( 'Please select a rating', 'woocommerce' ),
					'i18n_product_gallery_trigger_text' => esc_attr__( 'View full-screen image gallery', 'woocommerce' ),
					'review_rating_required'            => wc_review_ratings_required() ? 'yes' : 'no',
					'flexslider'                        => apply_filters(
						'woocommerce_single_product_carousel_options',
						array(
							'rtl'            => is_rtl(),
							'animation'      => 'slide',
							'smoothHeight'   => true,
							'directionNav'   => false,
							'controlNav'     => 'thumbnails',
							'slideshow'      => false,
							'animationSpeed' => 500,
							'animationLoop'  => false, // Breaks photoswipe pagination if true.
							'allowOneSlide'  => false,
						)
					),
					'zoom_enabled'                      => apply_filters( 'woocommerce_single_product_zoom_enabled', get_theme_support( 'wc-product-gallery-zoom' ) ),
					'zoom_options'                      => apply_filters( 'woocommerce_single_product_zoom_options', array() ),
					'photoswipe_enabled'                => apply_filters( 'woocommerce_single_product_photoswipe_enabled', get_theme_support( 'wc-product-gallery-lightbox' ) ),
					'photoswipe_options'                => apply_filters(
						'woocommerce_single_product_photoswipe_options',
						array(
							'shareEl'               => false,
							'closeOnScroll'         => false,
							'history'               => false,
							'hideAnimationDuration' => 0,
							'showAnimationDuration' => 0,
						)
					),
					'flexslider_enabled'                => apply_filters( 'woocommerce_single_product_flexslider_enabled', get_theme_support( 'wc-product-gallery-slider' ) ),
				);
				break;

```

Change wc_single_product_params global variable values for JS

```
jQuery(function ($) {
    wc_single_product_params.flexslider.directionNav = true;
    wc_single_product_params.flexslider.slideshow = true;
    wc_single_product_params.flexslider.animationLoop = true;
    wc_single_product_params.flexslider.animationSpeed = 500;
    console.log("wc_single_product_params");
    console.log(wc_single_product_params);
});
```



