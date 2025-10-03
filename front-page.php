<?php
/**
 * Front Page - چندزبانه با Polylang
 */

get_header();

// تشخیص زبان فعلی
if (function_exists('pll_current_language')) {
    $lang = pll_current_language(); // 'fa' یا 'en'
} else {
    $lang = 'fa'; // پیش‌فرض فارسی
}

// لود کردن محتوای متناسب با زبان
if ($lang === 'en') {
    get_template_part('template-parts/front-content', 'en');
} else {
    get_template_part('template-parts/front-content', 'fa');
}

get_footer();
?>