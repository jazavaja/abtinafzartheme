<?php
/**
 * Header EN - نسخه نهایی (رفع باگ sticky با حذف wrapper)
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> dir="ltr">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" media="all">
    <?php wp_head(); ?>
<style>
/* ============ Base: sticky-safe ============ */
html,
body.site-body {
    overflow: visible !important;
}
body.site-body { margin: 0; }

/* Background blobs */
.bg-blobs {
    position: fixed;
    inset: 0;
    overflow: hidden;
    pointer-events: none;
    z-index: -1;
}

/* ============ Sticky header ============ */
.site-header {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1000;
    width: 100%;
    background: rgba(15, 23, 42, 0.85);
    -webkit-backdrop-filter: blur(14px);
    backdrop-filter: blur(14px);
    border-bottom: 1px solid rgba(168, 85, 247, 0.18);
    transition: background 0.3s ease, box-shadow 0.3s ease;
}
.site-header.is-scrolled {
    background: rgba(15, 23, 42, 0.97);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.45);
}
.header-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 10px 16px;
    min-height: 64px;
    box-sizing: border-box;
}

/* Logo */
.logo-wrap { display: flex; align-items: center; flex-shrink: 0; }
.logo-wrap .h-10 { width: 50px !important; height: auto; }
.logo-wrap img { max-width: 100%; height: auto; display: block; }

/* Desktop nav */
@media (min-width: 768px) {
    .desktop-nav { display: flex !important; align-items: center; gap: 24px; }
}
.desktop-nav .nav-list {
    display: flex; align-items: center; gap: 24px;
    list-style: none; margin: 0; padding: 0;
}
.desktop-nav .nav-link {
    color: #e2e8f0; text-decoration: none; font-size: 15px;
    font-weight: 500; padding: 6px 2px; transition: color 0.2s ease;
}
.desktop-nav .nav-link:hover { color: #a855f7; }

/* Language switch */
.lang-switch-container {
    display: inline-flex; align-items: center; gap: 12px;
    background: rgba(15, 23, 42, 0.6);
    padding: 6px 14px; border-radius: 9999px;
    border: 1px solid rgba(168, 85, 247, 0.25);
    -webkit-backdrop-filter: blur(16px);
    backdrop-filter: blur(16px);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}
.lang-switch-container:hover {
    border-color: rgba(168, 85, 247, 0.5);
    box-shadow: 0 0 20px rgba(168, 85, 247, 0.15);
}
.lang-switch-container .lang-label {
    font-size: 13px; font-weight: 600;
    color: rgba(255, 255, 255, 0.4);
    transition: color 0.3s ease, text-shadow 0.3s ease;
}
.lang-switch-container .lang-label.active {
    color: #ffffff;
    text-shadow: 0 0 10px rgba(168, 85, 247, 0.5);
}
.toggle-switch-btn {
    position: relative; width: 52px; height: 28px;
    background: linear-gradient(135deg, #0f172a, #1e1b4b);
    border-radius: 50px;
    border: 1px solid rgba(255, 255, 255, 0.15);
    cursor: pointer;
    transition: border-color 0.4s ease, box-shadow 0.4s ease;
    display: inline-block;
    box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.6);
    text-decoration: none;
}
.toggle-switch-btn:hover {
    border-color: #a855f7;
    box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.6), 0 0 12px rgba(168, 85, 247, 0.3);
}
.toggle-thumb {
    position: absolute; top: 2px; left: 2px;
    width: 22px; height: 22px;
    background: linear-gradient(135deg, #ffffff, #e2e8f0);
    border-radius: 50%;
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), background 0.4s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4), 0 0 10px rgba(255, 255, 255, 0.2);
}
.toggle-switch-btn.fa-side .toggle-thumb { transform: translateX(0); }
.toggle-switch-btn.en-side .toggle-thumb {
    transform: translateX(24px);
    background: linear-gradient(135deg, #a855f7, #ec4899);
    box-shadow: 0 4px 15px rgba(236, 72, 153, 0.4), 0 0 15px rgba(168, 85, 247, 0.5);
}

/* Panel button */
.btn-panel {
    display: inline-flex; align-items: center; justify-content: center;
    padding: 8px 16px; border-radius: 10px;
    background: linear-gradient(135deg, #a855f7, #ec4899);
    color: #fff; text-decoration: none;
    font-weight: 600; font-size: 14px; white-space: nowrap;
    transition: filter 0.2s ease, transform 0.2s ease;
}
.btn-panel:hover { filter: brightness(1.1); transform: translateY(-1px); }

/* Hamburger */
.hamburger {
    display: none; background: transparent; border: 0;
    width: 36px; height: 36px; padding: 6px; cursor: pointer;
    flex-direction: column; justify-content: space-between;
}
.hamburger span {
    display: block; height: 2px; width: 100%;
    background: #e2e8f0; border-radius: 2px;
    transition: transform 0.3s ease, opacity 0.3s ease;
}
.hamburger.active span:nth-child(1) { transform: translateY(8px) rotate(45deg); }
.hamburger.active span:nth-child(2) { opacity: 0; }
.hamburger.active span:nth-child(3) { transform: translateY(-8px) rotate(-45deg); }

/* Mobile menu */
.mobile-menu {
    display: none; width: 100%; box-sizing: border-box;
    background: rgba(15, 23, 42, 0.97);
    -webkit-backdrop-filter: blur(16px);
    backdrop-filter: blur(16px);
    border-top: 1px solid rgba(168, 85, 247, 0.25);
    box-shadow: 0 14px 34px rgba(0, 0, 0, 0.5);
    padding: 16px 18px 22px;
    max-height: calc(100vh - 70px);
    overflow-y: auto;
}
.mobile-menu.active { display: block; animation: mobileMenuIn 0.25s ease; }
@keyframes mobileMenuIn {
    from { opacity: 0; transform: translateY(-8px); }
    to   { opacity: 1; transform: translateY(0); }
}
.mobile-nav-list {
    list-style: none; margin: 0; padding: 0;
    display: flex; flex-direction: column; gap: 4px;
}
.mobile-nav-list li a {
    display: block; padding: 12px 14px; border-radius: 10px;
    color: #e2e8f0; font-size: 15px; font-weight: 500;
    text-decoration: none;
    transition: background 0.2s ease, color 0.2s ease;
}
.mobile-nav-list li a:hover,
.mobile-nav-list li a:focus {
    background: rgba(168, 85, 247, 0.16); color: #ffffff;
}
.mobile-menu-actions {
    display: flex; flex-direction: column; align-items: flex-start;
    gap: 14px; margin-top: 16px; padding-top: 16px;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
}

/* Responsive */
@media (max-width: 767px) {
    .desktop-nav { display: none !important; }
    .hamburger { display: flex; }
    .header-inner { padding: 8px 10px; gap: 10px; }
    .btn-panel { padding: 6px 12px !important; font-size: 12px !important; }
    .lang-switch-container { padding: 2px 6px !important; gap: 6px !important; }
    .toggle-switch-btn { width: 40px !important; height: 22px !important; }
    .toggle-thumb { width: 18px !important; height: 18px !important; }
    .toggle-switch-btn.en-side .toggle-thumb { transform: translateX(18px) !important; }
}
@media (min-width: 768px) {
    .mobile-menu { display: none !important; }
}
</style>
</head>

<body <?php body_class('site-body'); ?>>
<?php wp_body_open(); ?>

    <div class="bg-blobs">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
    </div>

    <?php
    $menu_name  = 'primary-menu';
    $menu_items = array();
    $locations  = get_nav_menu_locations();

    if ( $locations && isset( $locations[ $menu_name ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        if ( $menu ) {
            $menu_items = wp_get_nav_menu_items( $menu->term_id );
        }
    }
    ?>

    <!-- Header — DIRECT child of body (no wrapper!) -->
    <header class="site-header">
        <div class="container">
            <div class="header-inner">

                <div class="logo-wrap">
                    <div class="h-10 w-auto">
                        <?php
                        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                            the_custom_logo();
                        } else {
                            echo '<span class="text-white font-bold text-xl">' . esc_html( get_bloginfo( 'name' ) ) . '</span>';
                        }
                        ?>
                    </div>
                </div>

                <nav class="desktop-nav">
                    <?php if ( ! empty( $menu_items ) ) : ?>
                        <ul class="nav-list">
                            <?php foreach ( (array) $menu_items as $menu_item ) : ?>
                                <li>
                                    <a class="nav-link" href="<?php echo esc_url( $menu_item->url ); ?>">
                                        <?php echo esc_html( $menu_item->title ); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if ( function_exists( 'pll_the_languages' ) ) :
                        $translations = pll_the_languages( array( 'raw' => 1 ) );
                        if ( ! empty( $translations ) ) :
                            $current_lang = pll_current_language();
                            $other_url    = '';
                            $is_fa        = ( $current_lang === 'fa' );

                            foreach ( $translations as $lang ) {
                                if ( $lang['slug'] !== $current_lang ) {
                                    $other_url = $lang['url'];
                                }
                            }
                            if ( empty( $other_url ) ) {
                                $other_url = home_url();
                            }
                    ?>
                            <div class="lang-switch-container">
                                <span class="lang-label <?php echo $is_fa ? 'active' : ''; ?>">FA</span>
                                <a href="<?php echo esc_url( $other_url ); ?>"
                                   class="toggle-switch-btn <?php echo $is_fa ? 'en-side' : 'fa-side'; ?>"
                                   title="Switch Language" aria-label="Switch Language">
                                    <span class="toggle-thumb"></span>
                                </a>
                                <span class="lang-label <?php echo ! $is_fa ? 'active' : ''; ?>">EN</span>
                            </div>
                    <?php endif; endif; ?>
                </nav>

                <button class="hamburger" id="mobile-menu-toggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobile-menu">
                    <span></span><span></span><span></span>
                </button>

                <a href="https://accounting.abtinafzar.ir" class="btn btn-panel" target="_blank" rel="noopener">
                    Login Panel
                </a>
            </div>
        </div>
    </header>

    <!-- Mobile menu — DIRECT child of body -->
    <div class="mobile-menu" id="mobile-menu">
        <?php if ( ! empty( $menu_items ) ) : ?>
            <ul class="mobile-nav-list">
                <?php foreach ( (array) $menu_items as $menu_item ) : ?>
                    <li>
                        <a class="mobile-nav-link" href="<?php echo esc_url( $menu_item->url ); ?>">
                            <?php echo esc_html( $menu_item->title ); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <div class="mobile-menu-actions">
            <?php if ( function_exists( 'pll_the_languages' ) ) :
                $translations = pll_the_languages( array( 'raw' => 1 ) );
                if ( ! empty( $translations ) ) :
                    $current_lang = pll_current_language();
                    $other_url    = '';
                    $is_fa        = ( $current_lang === 'fa' );

                    foreach ( $translations as $lang ) {
                        if ( $lang['slug'] !== $current_lang ) {
                            $other_url = $lang['url'];
                        }
                    }
                    if ( empty( $other_url ) ) {
                        $other_url = home_url();
                    }
            ?>
                    <div class="lang-switch-container">
                        <span class="lang-label <?php echo $is_fa ? 'active' : ''; ?>">FA</span>
                        <a href="<?php echo esc_url( $other_url ); ?>"
                           class="toggle-switch-btn <?php echo $is_fa ? 'en-side' : 'fa-side'; ?>"
                           title="Switch Language" aria-label="Switch Language">
                            <span class="toggle-thumb"></span>
                        </a>
                        <span class="lang-label <?php echo ! $is_fa ? 'active' : ''; ?>">EN</span>
                    </div>
            <?php endif; endif; ?>
        </div>
    </div>

    <script>
    (function () {
        function init() {
            var toggle = document.getElementById('mobile-menu-toggle');
            var menu   = document.getElementById('mobile-menu');

            if (toggle && menu) {
                toggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    var opened = menu.classList.toggle('active');
                    toggle.classList.toggle('active', opened);
                    toggle.setAttribute('aria-expanded', opened ? 'true' : 'false');
                });
                menu.querySelectorAll('a').forEach(function (link) {
                    link.addEventListener('click', function () {
                        menu.classList.remove('active');
                        toggle.classList.remove('active');
                        toggle.setAttribute('aria-expanded', 'false');
                    });
                });
            }

            var header = document.querySelector('.site-header');
            if (header) {
                var onScroll = function () {
                    if (window.scrollY > 10) header.classList.add('is-scrolled');
                    else header.classList.remove('is-scrolled');
                };
                window.addEventListener('scroll', onScroll, { passive: true });
                onScroll();
            }
        }
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
        } else {
            init();
        }
    })();
    </script>
</body>