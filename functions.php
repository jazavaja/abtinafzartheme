<?php
/**
 * abtinafzar theme functions
 */

register_nav_menus(
    array(
        'primary-menu' => __( 'Primary Menu' ),
        // you can register more menu locations here
    )
);


//------------------------------------------------------------------------------------
// بارگذاری TGM Plugin Activation
if (!class_exists('TGM_Plugin_Activation')) {
    require_once get_template_directory() . '/include/class-tgm-plugin-activation.php';
}

add_action('tgmpa_register', 'my_theme_register_required_plugins');
function my_theme_register_required_plugins() {

    $plugins = array(
        // Contact Form 7
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => true, // اجباری
        ),
        // Flamingo (برای ذخیره فرم‌ها)
        array(
            'name'      => 'Flamingo',
            'slug'      => 'flamingo',
            'required'  => true,
        ),
        // Pods - Custom Content Types and Fields
        array(
            'name'      => 'Pods - Custom Content Types and Fields',
            'slug'      => 'pods',
            'required'  => true,
        ),
    );

    $config = array(
        'id'           => 'my-theme',
        'default_path' => '',
        'menu'         => 'install-required-plugins', // نام منو در پیشخوان
        'has_notices'  => true,  // نمایش نوتیفیکیشن اگر پلاگین نصب نیست
        'dismissable'  => false, // کاربر نتونه نوتیف رو ببنده (چون اجباریه!)
        'is_automatic' => true,  // نصب و فعال‌سازی خودکار (با یک کلیک)
        'message'      => 'این تم به پلاگین‌های زیر نیاز دارد تا به درستی کار کند.',
    );

    tgmpa($plugins, $config);
}

//------------------------------------------------------------------------------------------

/**
 * Get value by key from key_values custom post type
 *
 * @param string $key The key to search for
 * @param mixed $default Default value if key not found
 * @return string|mixed The value or default
 */
function get_key_value_url( $key, $default = '#' ) {
    $args = array(
        'post_type'      => 'key_values',
        'posts_per_page' => 1,
        'meta_query'     => array(
            array(
                'key'     => 'key',
                'value'   => $key,
                'compare' => '='
            )
        )
    );

    $key_values = new WP_Query($args);

    if ( $key_values->have_posts() ) {
        $key_values->the_post();
        $value = pods_field( 'key_values', get_the_ID(), 'value', true );
        wp_reset_postdata();
        return $value;
    }

    wp_reset_postdata();
    return $default;
}


function custom_header() {
    if (function_exists('pll_current_language')) {
        $lang = pll_current_language();
    } else {
        $lang = 'fa'; // default
    }

    if ($lang === 'en') {
        get_header('en'); // loads header-en.php
    } else {
        get_header('fa'); // loads header-fa.php
    }
}
function custom_footer(){
    $locale = get_locale();
    if ($locale === 'fa_IR') {
        get_footer('fa');
    } else {
        get_footer('en');
    }
}

//--------------------------------------------------------------------------------------------


function always_load_cf7_scripts() {
    if (function_exists('wpcf7_enqueue_scripts')) {
        wpcf7_enqueue_scripts();
    }
    if (function_exists('wpcf7_enqueue_styles')) {
        wpcf7_enqueue_styles();
    }
}
add_action('wp_enqueue_scripts', 'always_load_cf7_scripts');



function allow_audio_uploads($mimes) {
    $mimes['mp3'] = 'audio/mpeg';
    $mimes['wav'] = 'audio/wav';
    $mimes['ogg'] = 'audio/ogg';
    return $mimes;
}
add_filter('upload_mimes', 'allow_audio_uploads');


// Hook for non-logged in users
add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission');


//// Enqueue theme styles
//function abtinafzar_enqueue_styles(): void {
//    // Main theme stylesheet
//    wp_enqueue_style('abtinafzar-style', get_stylesheet_uri());
//
//    // Load page-specific styles only when needed
//    if (is_page_template('page-contact-en.php')) {
//        wp_enqueue_style(
//            'abtinafzar-contact-style',
//            get_template_directory_uri() . '/assets/css/contact-page.css',
//            array('abtinafzar-style'),
//            '1.0.0'
//        );
//    }
//
//    if (is_page_template('page-contact-fa.php')) {
//        wp_enqueue_style(
//            'abtinafzar-contact-style',
//            get_template_directory_uri() . '/assets/css/contact-page.css',
//            array('abtinafzar-style'),
//            '1.0.0'
//        );
//    }
//
//    if (is_page_template('learning-en.php')) {
//        wp_enqueue_style(
//            'abtinafzar-contact-style',
//            get_template_directory_uri() . '/assets/css/learning-en.css',
//            array('abtinafzar-style'),
//            '1.0.0'
//        );
//    }
//
//    if (is_page_template('learning-fa.php')) {
//        wp_enqueue_style(
//            'abtinafzar-contact-style',
//            get_template_directory_uri() . '/assets/css/learning-en.css',
//            array('abtinafzar-style'),
//            '1.0.0'
//        );
//    }
//
//    if (is_page_template('aboutus-en.php')) {
//        wp_enqueue_style(
//            'abtinafzar-about-en-style',
//            get_template_directory_uri() . '/assets/css/aboutus.css',
//            array('abtinafzar-style'),
//            '1.0.0'
//        );
//    }
//
//    if (is_page_template('aboutus-fa.php')) {
//        wp_enqueue_style(
//            'abtinafzar-about-fa-style',
//            get_template_directory_uri() . '/assets/css/aboutus-fa.css',
//            array('abtinafzar-style'),
//            '1.0.0'
//        );
//    }
//
//    if (is_page_template('front-page-en.php')) {
//        wp_enqueue_style(
//            'abtinafzar-homepage-style',
//            get_template_directory_uri() . '/assets/css/homepage.css',
//            array('abtinafzar-style'),
//            '1.0.0'
//        );
//    }
//
//    if (is_page_template('front-page.php')) {
//        wp_enqueue_style(
//            'abtinafzar-homepage-style',
//            get_template_directory_uri() . '/assets/css/homepage.css',
//            array('abtinafzar-style'),
//            '1.0.0'
//        );
//    }
//    if (is_page_template('privacy.php')) {
//        wp_enqueue_style(
//            'abtinafzar-homepage-style',
//            get_template_directory_uri() . '/assets/css/privacy.css',
//            array('abtinafzar-style'),
//            '1.0.0'
//        );
//    }
//}
//
//add_action('wp_enqueue_scripts', 'abtinafzar_enqueue_styles',1);


/**
 * Get Student Testimonials for the learning page.
 *
 * @param int $number The number of testimonials to retrieve.
 * @return WP_Query
 */
function get_student_testimonials($number = 6)
{
    $args = array(
        'post_type' => 'student-testimonial',
        'posts_per_page' => $number,
        'orderby' => 'date', // You can change to 'rand' for random order
        'order' => 'DESC',
    );
    return new WP_Query($args);
}


// Add Footer Links section to Customizer
function rankola_customize_register_footer_links($wp_customize) {
    // فقط در اینجا کلاس رو تعریف می‌کنیم (چون WP_Customize_Control در اینجا موجود است)
    if (!class_exists('Rankola_Footer_Links_Control')) {
        class Rankola_Footer_Links_Control extends WP_Customize_Control {
            public $type = 'footer-links';

            public function render_content() {
                ?>
                <label>
                    <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                    <p class="description">لینک‌های پاورقی را به صورت JSON وارد کنید.</p>
                    <textarea rows="10" style="width:100%;font-family:monospace;" <?php $this->link(); ?>><?php echo esc_textarea($this->value()); ?></textarea>
                    <p class="description">
                        مثال:<br>
                        <code>[
                            {"url": "https://yoursite.com/about", "label": "درباره ما"},
                            {"url": "https://yoursite.com/contact", "label": "تماس با ما"}
                            ]</code>
                    </p>
                </label>
                <?php
            }
        }
    }

    // Section
    $wp_customize->add_section('rankola_footer_section', array(
        'title'    => __('Footer Links', 'rankola'),
        'priority' => 150,
    ));

    // Setting
    $wp_customize->add_setting('rankola_footer_links', array(
        'default'           => '',
        'sanitize_callback' => 'rankola_sanitize_footer_links',
    ));

    // Control
    $wp_customize->add_control(new Rankola_Footer_Links_Control($wp_customize, 'rankola_footer_links', array(
        'label'    => __('لینک‌های سریع فوتر', 'rankola'),
        'section'  => 'rankola_footer_section',
        'settings' => 'rankola_footer_links',
    )));
}

add_action('customize_register', 'rankola_customize_register_footer_links');

// Sanitize callback
function rankola_sanitize_footer_links($value) {
    $links = json_decode($value, true);
    if (!is_array($links)) return '';

    $sanitized = array();
    foreach ($links as $link) {
        if (isset($link['url']) && isset($link['label'])) {
            $sanitized[] = array(
                'url'   => esc_url_raw($link['url']),
                'label' => sanitize_text_field($link['label']),
            );
        }
    }
    return json_encode($sanitized);
}


add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description'),
));

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

add_action('wp_enqueue_scripts', function () {
    // Tailwind via CDN
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', [], null, false);
    // Google Fonts
    wp_enqueue_style('inter-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap', [], null);
    // Lucide icons
    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest', [], null, true);
    // Custom inline CSS
    wp_add_inline_style('inter-font',
        ":root{--font-inter:'Inter',sans-serif;} body{font-family:var(--font-inter);} .font-sans{font-family:var(--font-inter);}"
    );
});

