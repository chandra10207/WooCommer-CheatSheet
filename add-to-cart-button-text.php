<?php

/** Do NOT include the opening php tag */


add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
/**
* Custom text for 'woocommerce_product_add_to_cart_text' filter for all product types/ cases.
*
* @link   https://gist.github.com/deckerweb/cf466e017fd01d503469
*
* @global $product
*
* @return string String for add to cart text.
*/
function custom_woocommerce_product_add_to_cart_text() {

	global $product;

	$product_type = $product->product_type;

	switch ( $product_type ) {

		case 'external':
			return __( 'Buy product', 'woocommerce' );

		break;
		case 'grouped':
			return __( 'View products', 'woocommerce' );

		break;
		case 'simple':
			return __( 'Add to cart', 'woocommerce' );

		break;
		case 'variable':
			return __( 'Select options', 'woocommerce' );

		break;
		default:
			return __( 'Read more', 'woocommerce' );

	}  // end switch

}  // end function
