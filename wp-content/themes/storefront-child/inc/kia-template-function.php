<?php
/**
 * Created by PhpStorm.
 * User: d10cn
 * Date: 15-Dec-16
 * Time: 11:35
 */

if ( ! function_exists( 'kia_recent_products' ) ) {
    /**
     * Display Recent Products
     * Hooked into the `homepage` action in the homepage template
     *
     * @since  1.0.0
     * @param array $args the product section args.
     * @return void
     */
    function kia_recent_products( $args ) {

        if ( storefront_is_woocommerce_activated() ) {

            $args = apply_filters( 'storefront_recent_products_args', array(
                'limit' 			=> 4,
                'columns' 			=> 4,
                'title'				=> __( 'New In', 'storefront' ),
            ) );

            echo '<div class="box" aria-label="Recent Products">';

            do_action( 'storefront_homepage_before_recent_products' );
            echo '<div class="box-header"><h2 class="box-title">'. wp_kses_post( $args['title'] ) .'</h2></div>';

            do_action( 'storefront_homepage_after_recent_products_title' );
            echo '<div class="box-content">';
                echo storefront_do_shortcode( 'recent_products', array(
                    'per_page' => intval( $args['limit'] ),
                    'columns'  => intval( $args['columns'] ),
                ) );
            echo '</div>';

            do_action( 'storefront_homepage_after_recent_products' );

            echo '</div>';
        }
    }
}