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

// ثبت ویجت کاستوم
class Contact_Info_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'contact_info_widget', // Base ID
            'ویجت تماس با ما', // Name
            array(
                'description' => 'ویجت اختصاصی برای نمایش اطلاعات تماس',
                'classname' => 'custom-contact-widget'
            ) // Args
        );
    }

    // بخش نمایش در front-end
    public function widget($args, $instance) {
        // داده‌ها را از ACF دریافت می‌کنیم
        $widget_id = 'widget_' . $args['widget_id'];
        $phone = get_field('phone_number', $widget_id);
        $email = get_field('email_address', $widget_id);
        $address = get_field('address', $widget_id);
        $show_icons = get_field('show_icons', $widget_id);

        $title = !empty($instance['title']) ? $instance['title'] : 'تماس با ما';

        echo $args['before_widget'];
        echo $args['before_title'] . apply_filters('widget_title', $title) . $args['after_title'];
        ?>

        <div class="custom-contact-widget-content">
            <?php if($phone): ?>
                <div class="contact-item">
                    <?php if($show_icons): ?>
                        <span class="contact-icon">📞</span>
                    <?php endif; ?>
                    <span class="contact-text"><?php echo esc_html($phone); ?></span>
                </div>
            <?php endif; ?>

            <?php if($email): ?>
                <div class="contact-item">
                    <?php if($show_icons): ?>
                        <span class="contact-icon">📧</span>
                    <?php endif; ?>
                    <span class="contact-text">
                    <a href="mailto:<?php echo esc_attr($email); ?>">
                        <?php echo esc_html($email); ?>
                    </a>
                </span>
                </div>
            <?php endif; ?>

            <?php if($address): ?>
                <div class="contact-item">
                    <?php if($show_icons): ?>
                        <span class="contact-icon">📍</span>
                    <?php endif; ?>
                    <span class="contact-text"><?php echo nl2br(esc_html($address)); ?></span>
                </div>
            <?php endif; ?>
        </div>

        <?php
        echo $args['after_widget'];
    }

    // فرم مدیریت در بک-اند
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'تماس با ما';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                عنوان ویجت:
            </label>
            <input
                class="widefat"
                id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                name="<?php echo esc_attr($this->get_field_name('title')); ?>"
                type="text"
                value="<?php echo esc_attr($title); ?>"
            >
        </p>
        <p style="color: #666; font-style: italic;">
            تنظیمات اطلاعات تماس از طریق Advanced Custom Fields در دسترس است.
        </p>
        <?php
    }

    // ذخیره سازی تنظیمات
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

// ثبت ویجت
function register_custom_contact_widget() {
    register_widget('Contact_Info_Widget');
}
add_action('widgets_init', 'register_custom_contact_widget');


// Handle Contact Form Submission
function handle_contact_form_submission() {
    // Verify nonce for security
    if (!isset($_POST['contact_form_nonce']) || !wp_verify_nonce($_POST['contact_form_nonce'], 'contact_form_action')) {
        wp_die('Security check failed');
    }

    // Get and sanitize form data
    $name = sanitize_text_field($_POST['contact_name']);
    $email = sanitize_email($_POST['contact_email']);
    $phone = sanitize_text_field($_POST['contact_phone']);
    $subject = sanitize_text_field($_POST['contact_subject']);
    $message = sanitize_textarea_field($_POST['contact_message']);

    // Prepare email
    $to = get_option('admin_email'); // Sends to WordPress admin email
    $email_subject = 'Contact Form: ' . $subject;

    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n\n";
    $email_body .= "Message:\n$message\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
        'Reply-To: ' . $email
    );

    // Send email
    $sent = wp_mail($to, $email_subject, $email_body, $headers);

    // Redirect back to contact page with success message
    if ($sent) {
        wp_redirect(add_query_arg('sent', 'true', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('sent', 'false', wp_get_referer()));
    }
    exit;
}

// Hook for logged in users
add_action('admin_post_submit_contact_form', 'handle_contact_form_submission');

// Hook for non-logged in users
add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission');


// Enqueue theme styles
function abtinafzar_enqueue_styles() {
    // Main theme stylesheet
    wp_enqueue_style('abtinafzar-style', get_stylesheet_uri());

    // Load page-specific styles only when needed
    if (is_page_template('page-contact.php')) {
        wp_enqueue_style(
            'abtinafzar-contact-style',
            get_template_directory_uri() . '/assets/css/contact-page.css',
            array('abtinafzar-style'),
            '1.0.0'
        );
    }

    if (is_page_template('aboutus.php')) {
        wp_enqueue_style(
            'abtinafzar-about-style',
            get_template_directory_uri() . '/assets/css/aboutus.css',
            array('abtinafzar-style'),
            '1.0.0'
        );
    }

    if (is_page_template('front-page.php')) {
        wp_enqueue_style(
            'abtinafzar-homepage-style',
            get_template_directory_uri() . '/assets/css/homepage.css',
            array('abtinafzar-style'),
            '1.0.0'
        );
    }
    if (is_page_template('privacy.php')) {
        wp_enqueue_style(
            'abtinafzar-homepage-style',
            get_template_directory_uri() . '/assets/css/privacy.css',
            array('abtinafzar-style'),
            '1.0.0'
        );
    }
    if (is_front_page()) {
        wp_enqueue_style(
            'abtinafzar-homepage-style',
            get_template_directory_uri() . '/assets/css/homepage.css',
            array('abtinafzar-style'),
            '1.0.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'abtinafzar_enqueue_styles');



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
// Customizer: Hero section settings
//add_action('customize_register', function (WP_Customize_Manager $wp_customize) {
//    // Panel/Section
//    $wp_customize->add_section('abtinafzar_hero', [
//        'title'       => __('Hero Section', 'abtinafzar'),
//        'priority'    => 30,
//        'description' => __('Edit homepage hero texts and image', 'abtinafzar'),
//    ]);
//
//    // Kicker
//    $wp_customize->add_setting('abtinafzar_hero_kicker', [
//        'default'           => 'AI-Powered SEO Revolution',
//        'sanitize_callback' => 'sanitize_text_field',
//        'transport'         => 'refresh',
//    ]);
//    $wp_customize->add_control('abtinafzar_hero_kicker', [
//        'label'   => __('Kicker (small label)', 'abtinafzar'),
//        'section' => 'abtinafzar_hero',
//        'type'    => 'text',
//    ]);
//
//    // Title
//    $wp_customize->add_setting('abtinafzar_hero_title', [
//        'default'           => 'Effortless SEO, Powered by AI',
//        'sanitize_callback' => 'sanitize_text_field',
//        'transport'         => 'refresh',
//    ]);
//    $wp_customize->add_control('abtinafzar_hero_title', [
//        'label'   => __('Main Title', 'abtinafzar'),
//        'section' => 'abtinafzar_hero',
//        'type'    => 'text',
//    ]);
//
//    // Subtitle
//    $wp_customize->add_setting('abtinafzar_hero_subtitle', [
//        'default'           => "Stop wrestling with complex SEO tasks. Let abtinafzar's intelligent platform generate fully optimized articles, images, and technical metadata automatically. Dominate Google with a single click.",
//        'sanitize_callback' => 'wp_kses_post',
//        'transport'         => 'refresh',
//    ]);
//    $wp_customize->add_control('abtinafzar_hero_subtitle', [
//        'label'   => __('Subtitle', 'abtinafzar'),
//        'section' => 'abtinafzar_hero',
//        'type'    => 'textarea',
//    ]);
//
//    // Primary button label/link
//    $wp_customize->add_setting('abtinafzar_hero_primary_label', [
//        'default'           => 'Start Your Free Trial',
//        'sanitize_callback' => 'sanitize_text_field',
//    ]);
//    $wp_customize->add_control('abtinafzar_hero_primary_label', [
//        'label'   => __('Primary Button Label', 'abtinafzar'),
//        'section' => 'abtinafzar_hero',
//        'type'    => 'text',
//    ]);
//    $wp_customize->add_setting('abtinafzar_hero_primary_link', [
//        'default'           => '#pricing',
//        'sanitize_callback' => 'esc_url_raw',
//    ]);
//    $wp_customize->add_control('abtinafzar_hero_primary_link', [
//        'label'   => __('Primary Button Link', 'abtinafzar'),
//        'section' => 'abtinafzar_hero',
//        'type'    => 'url',
//    ]);
//
//    // Secondary button label/link
//    $wp_customize->add_setting('abtinafzar_hero_secondary_label', [
//        'default'           => 'Watch Demo',
//        'sanitize_callback' => 'sanitize_text_field',
//    ]);
//    $wp_customize->add_control('abtinafzar_hero_secondary_label', [
//        'label'   => __('Secondary Button Label', 'abtinafzar'),
//        'section' => 'abtinafzar_hero',
//        'type'    => 'text',
//    ]);
//    $wp_customize->add_setting('abtinafzar_hero_secondary_link', [
//        'default'           => '#comparison',
//        'sanitize_callback' => 'esc_url_raw',
//    ]);
//    $wp_customize->add_control('abtinafzar_hero_secondary_link', [
//        'label'   => __('Secondary Button Link', 'abtinafzar'),
//        'section' => 'abtinafzar_hero',
//        'type'    => 'url',
//    ]);
//
//    // Hero image
//    $wp_customize->add_setting('abtinafzar_hero_image', [
//        'default'           => get_template_directory_uri() . '/images/hero.png',
//        'sanitize_callback' => 'esc_url_raw',
//    ]);
//    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'abtinafzar_hero_image', [
//        'label'    => __('Hero Image', 'abtinafzar'),
//        'section'  => 'abtinafzar_hero',
//        'settings' => 'abtinafzar_hero_image',
//    ]));
//});
// Helper to output safe attribute
//function abtinafzar_attr($text) {
//    echo esc_attr($text);
//}
// Helper: fetch JSON array from theme_mod with default fallback
//function abtinafzar_get_json_mod(string $key, array $default) : array {
//    $raw = get_theme_mod($key, wp_json_encode($default));
//    if (!is_string($raw) || $raw === '') {
//        return $default;
//    }
//    $decoded = json_decode($raw, true);
//    if (json_last_error() !== JSON_ERROR_NONE || !is_array($decoded)) {
//        return $default;
//    }
//    return $decoded;
//}
// Sanitize JSON textarea: accept only valid JSON, else keep previous value
//function abtinafzar_sanitize_json($value, $setting) {
//    if (is_array($value)) {
//        return wp_json_encode($value);
//    }
//    if (!is_string($value)) {
//        return $setting->default;
//    }
//    $decoded = json_decode($value, true);
//    if (json_last_error() === JSON_ERROR_NONE) {
//        return wp_json_encode($decoded);
//    }
//    return $setting->default;
//}
// Customizer: Other sections via JSON blocks (fast, simple)
//add_action('customize_register', function (WP_Customize_Manager $wp_customize) {
//    // Features
//    $wp_customize->add_section('abtinafzar_features', [
//        'title' => __('Features Section', 'abtinafzar'),
//        'priority' => 31,
//    ]);
//    $features_default = [
//        [ 'title' => 'AI-Generated Articles', 'image' => get_template_directory_uri() . '/images/ai-generate.png', 'desc' => 'Generate complete, SEO-optimized articles based on your keywords, tone, and user intent.' ],
//        [ 'title' => 'Automatic Schema Markup', 'image' => get_template_directory_uri() . '/images/schema.png', 'desc' => 'Automatically inserts the correct structured data (JSON-LD) for your content, including Article, Product, and FAQ schemas.' ],
//        [ 'title' => 'Full WooCommerce Support', 'image' => get_template_directory_uri() . '/images/full-ecommerce.png', 'desc' => 'Supercharge your e-commerce store by automatically generating SEO-friendly product descriptions and meta tags.' ],
//        [ 'title' => 'Smart Metadata Generation', 'image' => get_template_directory_uri() . '/images/smart-meta.png', 'desc' => 'Our AI analyzes your content and generates compelling metadata designed to maximize your click-through rate (CTR).' ],
//        [ 'title' => 'AI Image Generation & SEO', 'image' => get_template_directory_uri() . '/images/image-ai.png', 'desc' => "Automatically create relevant images that match your content's intent and generates optimized alt text for every image." ],
//        [ 'title' => 'Multi-Language Engine', 'image' => get_template_directory_uri() . '/images/multi-lang.png', 'desc' => 'Built-in, native support for both English and Persian (Farsi), a unique tool for global and local markets.' ],
//    ];
//    $wp_customize->add_setting('abtinafzar_features_json', [
//        'default' => wp_json_encode($features_default),
//        'sanitize_callback' => 'abtinafzar_sanitize_json',
//    ]);
//    $wp_customize->add_control('abtinafzar_features_json', [
//        'label' => __('Features JSON (array of {title, image, desc})', 'abtinafzar'),
//        'type' => 'textarea',
//        'section' => 'abtinafzar_features',
//    ]);
//
//    // Problems
//    $wp_customize->add_section('abtinafzar_problems', [
//        'title' => __('Problems Section', 'abtinafzar'),
//        'priority' => 32,
//    ]);
//    $problems_default = [
//        [
//            'text' => 'Manual content creation is slow and expensive.',
//            'icon' => '⌛',
//        ],
//        [
//            'text' => 'Technical SEO, like schema markup, is complex and easy to get wrong.',
//            'icon' => '⚙️',
//        ],
//        [
//            'text' => "Keeping up with Google\'s E-E-A-T standards requires constant effort.",
//            'icon' => '📉',
//        ],
//    ];
//
//    $wp_customize->add_setting('abtinafzar_problems_json', [
//        'default'           => wp_json_encode($problems_default),
//        'sanitize_callback' => 'abtinafzar_sanitize_json',
//    ]);
//
//    $wp_customize->add_control('abtinafzar_problems_json', [
//        'label'   => __('Problems JSON (array of {text, icon})', 'abtinafzar'),
//        'type'    => 'textarea',
//        'section' => 'abtinafzar_problems',
//    ]);
//
//
//    // Solutions
//    $wp_customize->add_section('abtinafzar_solutions', [
//        'title' => __('Solutions Section', 'abtinafzar'),
//        'priority' => 33,
//    ]);
//    $solutions_default = [
//        ['title' => 'AI that Writes and Optimizes', 'desc' => 'Generate long-form, E-E-A-T-friendly content and technical metadata with one click.'],
//        ['title' => 'Automate Your Workflow', 'desc' => 'From keyword to published post with schema, images, and internal links—automatically.'],
//        ['title' => 'Built for WordPress', 'desc' => 'Native plugin support, schema, WooCommerce integration, and multi-language content.'],
//    ];
//    $wp_customize->add_setting('abtinafzar_solutions_json', [
//        'default' => wp_json_encode($solutions_default),
//        'sanitize_callback' => 'abtinafzar_sanitize_json',
//    ]);
//    $wp_customize->add_control('abtinafzar_solutions_json', [
//        'label' => __('Solutions JSON (array of {title, desc})', 'abtinafzar'),
//        'type' => 'textarea',
//        'section' => 'abtinafzar_solutions',
//    ]);
//
//    // Audience
//    $wp_customize->add_section('abtinafzar_audience', [
//        'title' => __('Target Audience Section', 'abtinafzar'),
//        'priority' => 34,
//    ]);
//    $audience_default = [
//        [
//            'title' => 'Digital Marketing Agencies',
//            'desc'  => 'Manage dozens of client websites efficiently. Automate content production and technical SEO to deliver faster results.',
//            'icon'  => '📈',
//        ],
//        [
//            'title' => 'E-commerce Store Owners',
//            'desc'  => 'Bring your products to the first page of Google with automatically generated unique descriptions and technical SEO.',
//            'icon'  => '🛒',
//        ],
//        [
//            'title' => 'SEO Freelancers & Content Creators',
//            'desc'  => 'Deliver high-quality, optimized content to your clients 10x faster. Free up your time from repetitive tasks.',
//            'icon'  => '✍️',
//        ],
//        [
//            'title' => 'Small Business Owners & Bloggers',
//            'desc'  => 'Grow your organic traffic without a dedicated marketing team. Consistently publish high-quality content that ranks.',
//            'icon'  => '🚀',
//        ],
//    ];
//
//    $wp_customize->add_setting('abtinafzar_audience_json', [
//        'default' => wp_json_encode($audience_default),
//        'sanitize_callback' => 'abtinafzar_sanitize_json',
//    ]);
//    $wp_customize->add_control('abtinafzar_audience_json', [
//        'label' => __('Audience JSON (array of {title, desc})', 'abtinafzar'),
//        'type' => 'textarea',
//        'section' => 'abtinafzar_audience',
//    ]);
//
//    // Pricing
//    $wp_customize->add_section('abtinafzar_pricing', [
//        'title' => __('Pricing Section', 'abtinafzar'),
//        'priority' => 35,
//    ]);
//    $pricing_default = [
//        [
//            'name' => 'Free', 'price' => '$0', 'popular' => false,
//            'cta' => 'Get Started Free',
//            'features' => [
//                '1 AI Articles / month',
//                '3 AI Images / month',
//                'Unlimited Suggest title',
//                'Basic WordPress Plugin',
//                "Experience abtinafzar power"
//            ]
//        ],
//        [
//            'name' => 'Starter', 'price' => '$19', 'popular' => true,
//            'cta' => 'Choose Starter',
//            'features' => [
//                '10 AI Articles / month',
//                '30 AI Images / month',
//                'Full WordPress Plugin Access',
//                'Advanced SEO Features',
//                'Email Support',
//                'Schema Markup'
//            ]
//        ],
//        [
//            'name' => 'Pro', 'price' => '$49', 'popular' => false,
//            'cta' => 'Choose Pro',
//            'features' => [
//                '100 AI Articles / month',
//                '300 AI Images / month',
//                'Everything in Starter +',
//                'Advanced Schema Support',
//                'WooCommerce Integration',
//                'Priority Support'
//            ]
//        ],
//        [
//            'name' => 'Agency', 'price' => 'Contact Us', 'popular' => false,
//            'cta' => 'Contact Sales',
//            'features' => [
//                'Unlimited Articles & Images',
//                'Unlimited Team Members',
//                'Full API Access',
//                'Dedicated Account Manager',
//                'White-label Options',
//                'Custom Integrations'
//            ]
//        ],
//    ];
//    $wp_customize->add_setting('abtinafzar_pricing_json', [
//        'default' => wp_json_encode($pricing_default),
//        'sanitize_callback' => 'abtinafzar_sanitize_json',
//    ]);
//    $wp_customize->add_control('abtinafzar_pricing_json', [
//        'label' => __('Pricing JSON (array of {name, price, popular, cta, features[]})', 'abtinafzar'),
//        'type' => 'textarea',
//        'section' => 'abtinafzar_pricing',
//    ]);
//
//    // CTA
//    $wp_customize->add_section('abtinafzar_cta', [
//        'title' => __('CTA Section', 'abtinafzar'),
//        'priority' => 36,
//    ]);
//    $wp_customize->add_setting('abtinafzar_cta_title', [
//        'default' => 'Ready to Revolutionize Your SEO?',
//        'sanitize_callback' => 'sanitize_text_field',
//    ]);
//    $wp_customize->add_control('abtinafzar_cta_title', [
//        'label' => __('CTA Title', 'abtinafzar'), 'type' => 'text', 'section' => 'abtinafzar_cta'
//    ]);
//    $wp_customize->add_setting('abtinafzar_cta_subtitle', [
//        'default' => 'Join thousands of smart marketers, agencies, and business owners who are automating their growth. Let AI handle your SEO while you focus on what matters most.',
//        'sanitize_callback' => 'wp_kses_post',
//    ]);
//    $wp_customize->add_control('abtinafzar_cta_subtitle', [
//        'label' => __('CTA Subtitle', 'abtinafzar'), 'type' => 'textarea', 'section' => 'abtinafzar_cta'
//    ]);
//    $wp_customize->add_setting('abtinafzar_cta_primary_label', [ 'default' => 'Start Generating Content for Free', 'sanitize_callback' => 'sanitize_text_field' ]);
//    $wp_customize->add_control('abtinafzar_cta_primary_label', [ 'label' => __('CTA Primary Label', 'abtinafzar'), 'type' => 'text', 'section' => 'abtinafzar_cta' ]);
//    $wp_customize->add_setting('abtinafzar_cta_primary_link', [ 'default' => '#pricing', 'sanitize_callback' => 'esc_url_raw' ]);
//    $wp_customize->add_control('abtinafzar_cta_primary_link', [ 'label' => __('CTA Primary Link', 'abtinafzar'), 'type' => 'url', 'section' => 'abtinafzar_cta' ]);
//    $wp_customize->add_setting('abtinafzar_cta_secondary_label', [ 'default' => 'Schedule Demo', 'sanitize_callback' => 'sanitize_text_field' ]);
//    $wp_customize->add_control('abtinafzar_cta_secondary_label', [ 'label' => __('CTA Secondary Label', 'abtinafzar'), 'type' => 'text', 'section' => 'abtinafzar_cta' ]);
//    $wp_customize->add_setting('abtinafzar_cta_secondary_link', [ 'default' => '#comparison', 'sanitize_callback' => 'esc_url_raw' ]);
//    $wp_customize->add_control('abtinafzar_cta_secondary_link', [ 'label' => __('CTA Secondary Link', 'abtinafzar'), 'type' => 'url', 'section' => 'abtinafzar_cta' ]);
//    $wp_customize->add_setting('abtinafzar_cta_image', [ 'default' => get_template_directory_uri() . '/images/hero.png', 'sanitize_callback' => 'esc_url_raw' ]);
//    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'abtinafzar_cta_image', [ 'label' => __('CTA Image', 'abtinafzar'), 'section' => 'abtinafzar_cta', 'settings' => 'abtinafzar_cta_image' ]));
//
//    // Comparison
//    $wp_customize->add_section('abtinafzar_comparison', [
//        'title' => __('Comparison Section', 'abtinafzar'),
//        'priority' => 37,
//    ]);
//    $comparison_default = [
//        ['feature' => 'AI Content Generation', 'others' => false],
//        ['feature' => 'Full Automation', 'others' => false],
//        ['feature' => 'Auto Schema Generation', 'others' => 'Limited'],
//        ['feature' => 'Custom Tone Control', 'others' => false],
//        ['feature' => 'AI-Powered Readability Editing', 'others' => false],
//        ['feature' => 'Integrated AI Image Generation', 'others' => false],
//    ];
//    $wp_customize->add_setting('abtinafzar_comparison_json', [
//        'default' => wp_json_encode($comparison_default),
//        'sanitize_callback' => 'abtinafzar_sanitize_json',
//    ]);
//    $wp_customize->add_control('abtinafzar_comparison_json', [
//        'label' => __('Comparison JSON (array of {feature, others})', 'abtinafzar'),
//        'type' => 'textarea',
//        'section' => 'abtinafzar_comparison',
//    ]);
//});
//
//function abtinafzar_customize_register_footer(WP_Customize_Manager $wp_customize) {
//    $footer_links_default = [
//        ["label" => "Features", "url" => "#features"],
//        ["label" => "Pricing", "url" => "#pricing"],
//    ];
//
//    $wp_customize->add_section('abtinafzar_footer', [
//        'title'    => __('Footer Settings', 'abtinafzar'),
//        'priority' => 130,
//    ]);
//
//    $wp_customize->add_setting('abtinafzar_footer_links', [
//        'default'           => wp_json_encode($footer_links_default),
//        'sanitize_callback' => 'abtinafzar_sanitize_json',
//    ]);
//
//    $wp_customize->add_control('abtinafzar_footer_links', [
//        'label'   => __('Footer Links (JSON)', 'abtinafzar'),
//        'type'    => 'textarea',
//        'section' => 'abtinafzar_footer',
//    ]);
//}
//
//add_action('customize_register', 'abtinafzar_customize_register_footer');

