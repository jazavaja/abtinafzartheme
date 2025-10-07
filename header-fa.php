<!doctype html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="all">

    <?php wp_head(); ?>

    
</head>

<body <?php body_class('site-body'); ?>>

<div class="bg-blobs">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
</div>

<div class="relative z-10">
    <header class="site-header">
        <div class="container">
            <div class="header-inner">
                <!-- Logo -->
                <div class="logo-wrap">
                    <div class="h-10 w-auto" style="width: 50px !important;">
                        <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        } else {
                            echo '<span class="text-white font-bold text-xl">' . get_bloginfo('name') . '</span>';
                        }
                        ?>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="desktop-nav">
                    <?php
                    $menu_name = 'primary-menu';
                    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
                        $menu = wp_get_nav_menu_object($locations[$menu_name]);
                        $menu_items = wp_get_nav_menu_items($menu->term_id);

                        echo '<ul class="nav-list">';
                        foreach ((array)$menu_items as $menu_item) {
                            $title = esc_html($menu_item->title);
                            $url = esc_url($menu_item->url);
                            echo '<li><a class="nav-link" href="' . $url . '">' . $title . '</a></li>';
                        }
                        echo '</ul>';
                    }
                    ?>
                </nav>

                <!-- Mobile Menu Toggle -->
                <button class="hamburger" id="mobile-menu-toggle" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- CTA Button -->
                <?php
                $url_primary = esc_html(get_key_value_url('url_primary_fa', null));
                $url_learning = home_url($url_primary);
                $button_text = esc_html(get_key_value_url('text_primary_fa', null));
                if ($url_primary) {
                    ?>
                    <a href="<?php echo esc_url($url_learning); ?>" class="btn btn-gradient">
                        <?php echo esc_html($button_text); ?>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobile-menu">
            <?php
            if (!empty($menu_items)) {
                echo '<ul>';
                foreach ((array)$menu_items as $menu_item) {
                    $title = esc_html($menu_item->title);
                    $url = esc_url($menu_item->url);
                    echo '<li><a href="' . $url . '">' . $title . '</a></li>';
                }
                echo '</ul>';
            }

            if ($url_primary) {
                ?>

                <a href="<?php echo $url_learning ?>" class="mobile-cta btn btn-gradient">
                    <?php echo $button_text ?>
                </a>
                <?php
            }
            ?>
        </div>
    </header>

    <!-- Mobile menu toggle script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.getElementById('mobile-menu-toggle');
            const menu = document.getElementById('mobile-menu');

            if (toggle && menu) {
                toggle.addEventListener('click', () => {
                    menu.classList.toggle('active');
                    toggle.classList.toggle('active');
                });
            }
        });
    </script>
