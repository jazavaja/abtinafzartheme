<!doctype html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="all">

    <?php wp_head(); ?>

    <style>
        /* Blob animations */
        .animate-blob { animation: blob 8s infinite; }
        .animation-delay-2000 { animation-delay: -2s; }
        .animation-delay-4000 { animation-delay: -4s; }

        @keyframes blob {
            0% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(.9); }
            100% { transform: translate(0, 0) scale(1); }
        }

        /* Mobile menu styles */
        .mobile-menu { display: none; }
        .mobile-menu.active { display: block; }
        .hamburger {
            display: none;
            flex-direction: column;
            justify-content: space-around;
            width: 30px;
            height: 24px;
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 0;
            z-index: 10;
        }
        .hamburger span {
            width: 100%;
            height: 2px;
            background: #cbd5e1;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .hamburger { display: flex; }
            .desktop-nav { display: none; }

            .mobile-menu {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: #0f172a;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                padding: 1rem 0;
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
            }
            .mobile-menu ul {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
            .mobile-menu a {
                color: #cbd5e1;
                text-decoration: none;
                font-weight: 500;
                padding: 0.5rem 1rem;
                border-radius: 4px;
                transition: color 0.2s;
            }
            .mobile-menu a:hover { color: white; }
            .mobile-cta {
                display: block !important;
                margin-top: 1rem;
                text-align: center;
            }
        }
    </style>
</head>

<body <?php body_class('bg-slate-950 text-slate-300 font-sans antialiased'); ?>>

<div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
    <div class="absolute top-[10%] left-[10%] w-[500px] h-[500px] bg-purple-500/10 rounded-full filter blur-3xl animate-blob"></div>
    <div class="absolute top-[30%] right-[10%] w-[600px] h-[600px] bg-blue-500/10 rounded-full filter blur-3xl animate-blob animation-delay-2000"></div>
    <div class="absolute bottom-[10%] left-[20%] w-[400px] h-[400px] bg-pink-500/10 rounded-full filter blur-3xl animate-blob animation-delay-4000"></div>
</div>

<div class="relative z-10">
    <header class="sticky top-0 z-50 w-full border-b border-white/10 bg-slate-950/80 backdrop-blur-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
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
                <nav class="desktop-nav hidden md:flex items-center space-x-8">
                    <?php
                    $menu_name = 'primary-menu';
                    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
                        $menu = wp_get_nav_menu_object($locations[$menu_name]);
                        $menu_items = wp_get_nav_menu_items($menu->term_id);

                        echo '<ul class="flex items-center space-x-8">';
                        foreach ((array)$menu_items as $menu_item) {
                            $title = esc_html($menu_item->title);
                            $url   = esc_url($menu_item->url);
                            echo '<li><a class="text-sm font-medium text-slate-300 hover:text-white transition-colors" href="' . $url . '">' . $title . '</a></li>';
                        }
                        echo '</ul>';
                    }
                    ?>
                </nav>

                <!-- Mobile Menu Toggle -->
                <button class="hamburger md:hidden" id="mobile-menu-toggle" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- CTA Button -->
                <?php
                $url_learning = home_url('/learning-fa');
                $button_text = 'شروع آموزش';
                ?>
                <a href="<?php echo esc_url($url_learning); ?>" class="hidden md:inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-purple-500 to-blue-500 rounded-md hover:opacity-90 transition-opacity">
                    <?php echo esc_html($button_text); ?>
                </a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobile-menu">
            <?php
            if (!empty($menu_items)) {
                echo '<ul>';
                foreach ((array)$menu_items as $menu_item) {
                    $title = esc_html($menu_item->title);
                    $url   = esc_url($menu_item->url);
                    echo '<li><a href="' . $url . '">' . $title . '</a></li>';
                }
                echo '</ul>';
            }
            ?>
            <a href="#pricing" class="mobile-cta hidden px-4 py-2 mx-auto max-w-xs text-center text-sm font-medium text-white bg-gradient-to-r from-purple-500 to-blue-500 rounded-md hover:opacity-90 transition-opacity">
                شروع آموزش
            </a>
        </div>
    </header>

    <!-- Mobile menu toggle script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.getElementById('mobile-menu-toggle');
            const menu   = document.getElementById('mobile-menu');

            if (toggle && menu) {
                toggle.addEventListener('click', () => {
                    menu.classList.toggle('active');
                    toggle.classList.toggle('active');
                });
            }
        });
    </script>
