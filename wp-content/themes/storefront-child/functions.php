<?php

/**
 * Đặt các đoạn code cần tùy biến của bạn vào bên dưới
 */

/**
 * Xóa đi các thành phần không sử dụng trong homepage
 * @hook after_setup_theme
 *
 * template-homepage.php
 * @hook homepage
 * @hooked storefront_homepage_content - 10
 * @hooked storefront_product_categories - 20
 * @hooked storefront_recent_products - 30
 * @hooked storefront_featured_products - 40
 * @hooked storefront_popular_products - 50
 * @hooked storefront_on_sale_products - 60
 * @hooked storefront_best_selling_products - 70
 */
function tp_homepage_blocks()
{
    /*
    * Sử dụng: remove_action( 'homepage', 'tên_hàm_cần_xóa', số thứ tự mặc định );
    */
    remove_action('homepage', 'storefront_homepage_content', 10);
    remove_action('homepage', 'storefront_product_categories', 20);
    remove_action('homepage', 'storefront_featured_products', 40);
    remove_action('homepage', 'storefront_popular_products', 50);

    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
}

add_action('after_setup_theme', 'tp_homepage_blocks', 10);

/**
 * Tùy biến Product by Category
 * @hook storefront_product_categories_args
 *
 */
function tp_product_categories_args($args)
{
    $args = array(
        'limit' => 6,
        'columns' => 3,
        'title' => __('Product by Category', 'thachpham')
    );
    return $args;
}

add_filter('storefront_product_categories_args', 'tp_product_categories_args');

/**
 * Tùy bien recent product
 * @hook storefront_recent_products_args
 */
function custom_product_recent_args($args)
{
    $args = array(
        'limit' => 6,
        'columns' => 3,
        'title' => __('Recent Product', 'storefront'),
    );

    return $args;
}

add_filter('storefront_recent_products_args', 'custom_product_recent_args');

/**
 * custom param breadcumb
 * @hook woocommerce_breadcrumb_defaults
 */
function custom_breadcumb_args($args) {
	$args = array(
		'wrap_before' => '<ol class="breadcrumb" ' . ( is_single() ? 'itemprop="breadcrumb"' : '' ) . '>',
		'delimiter'   => '',
		'wrap_after'  => '</ol>',
		'before'      => '<li>',
		'after'       => '</li>',
		'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' )
	);
	return $args;
}

add_filter('woocommerce_breadcrumb_defaults', 'custom_breadcumb_args');

require('inc/kia-template-function.php');
require('inc/kia-template-hooks.php');