<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>-child/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>-child/css/kia-custom.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <?php
    do_action('storefront_before_header'); ?>

    <section class="">

        <div class="top group">
            <div class="container group">
                <div class="top-left">
                    <div class="addon">
                        <div style="float:right;">
                            <div style="float:right;" class="g-plusone" data-size="medium" data-width="50"
                                 data-href="index.html"></div>
                        </div>
                        <div style="float:right;padding-right:7px;" class="fb-like"
                             data-href="http://kialongbien3s.gianhangvn.com" data-layout="button_count"
                             data-action="like" data-colorscheme="light" data-show-faces="true"
                             data-share="false"></div>
                    </div>

                </div>
                <div class="top-right">
                    <div class="hotline">
            	    <span class="icon">
                        <em class="fa fa-phone">&nbsp; </em>
                    </span>
                        <p><a href="tel:0936116332">0936.116.332</a></p>
                    </div>

                    <div class="cart">
                        <a href="gio-hang.html" class="title-cart">
                            <span class="fa fa-shopping-cart"></span>
                            <span class="cart-large"><span lang="master_shopping">Giỏ hàng</span> : <span
                                    class="total-product">0</span> <span lang="master_shopping_product">Sản phẩm</span></span>
                            <span class="cart-small">(<span class="total-product">0</span>)</span>
                        </a>
                    </div>

                    <div class="search-box">
                        <span class="btn-search"><span class="fa fa-search"></span></span>
                        <input class="text-search" type="text" id="txtTuKhoaTimKiem" name="txtTuKhoaTimKiem"
                               placeholder="Tìm kiếm..." lang="master_search"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="header group">
            <div class="container group">
                <div class="logo">
                    <a href="index.html">
                        <img alt="Logo" class="img-logo"
                             src="<?php echo get_template_directory_uri(); ?>-child/Images/logo.png"/>
                    </a>
                </div>
                <nav class="cd-nav">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'	=> 'primary',
                                'container_class'	=> 'primary-navigation',
                                'menu_id' => 'cd-primary-nav',
                                'menu_class' => 'cd-primary-nav'
                            )
                        );
                    ?>
                </nav>
            </div>


        </div>
    </section>

    <?php
    /**
     * Functions hooked in to storefront_before_content
     *
     * @hooked storefront_header_widget_region - 10
     */
    do_action('storefront_before_content'); ?>

    <div id="content" class="site-content" tabindex="-1">
        <div id="primary" class="content-area container group">

<?php
/**
 * Functions hooked in to storefront_content_top
 *
 * @hooked woocommerce_breadcrumb - 10
 */
do_action('storefront_content_top');
