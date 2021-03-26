<?php
/**
 * Plugin Name: Change Woo texts
 * Plugin URI: https://omukiguy.com
 * Author: TechiePress
 * Author URI: https://omukiguy.com
 * Description: This plugin changes the texts on the checkout page.
 * Version: 0.1.0
 * License: GPL2 or later
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: change-woo-texts
*/

defined( 'ABSPATH' ) or die( 'You are cheating!' );

add_filter( 'gettext', 'techiepress_change_woo_text', 100, 3 );

function techiepress_change_woo_text( $translated_string, $text_tring, $text_domain ) {

    switch( $translated_string ) {
        case 'Billing details':
            $translated_string = __( 'Personal Details', $text_domain );
        break;

        case 'Your order':
            $translated_string = __( 'Order Details', $text_domain );
        break;
        
        case 'Additional information':
            $translated_string = __( 'Order Info', $text_domain );
        break;
    }

    return $translated_string;
}