<?php
/**
 * Front Page - چندزبانه با Polylang
 */

custom_header();

// تشخیص زبان فعلی
if (function_exists('pll_current_language')) {
    $lang = pll_current_language(); // 'fa' یا 'en'
} else {
    $lang = 'fa'; // پیش‌فرض فارسی
}

// لود کردن محتوای متناسب با زبان
if ($lang === 'en') {
    wp_enqueue_style(
        'abtinafzar-homepage-style',
        get_template_directory_uri() . '/assets/css/homepage-en.css',
        array('abtinafzar-style'),
        '1.0.0'
    );
    get_template_part('template-parts/front-content', 'en');
} else {
    wp_enqueue_style(
        'abtinafzar-homepage-style',
        get_template_directory_uri() . '/assets/css/homepage.css',
        array('abtinafzar-style'),
        '1.0.0'
    );
    get_template_part('template-parts/front-content', 'fa');
}
custom_footer();

//$locale = get_locale();
//if ($locale === 'fa_IR') {
//    get_footer('fa');
//} else {
//    get_footer('en');
//}


//get_footer();
?>