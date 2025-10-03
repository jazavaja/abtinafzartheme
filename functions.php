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
function abtinafzar_enqueue_styles(): void {
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

    if (is_page_template('front-page-en.php')) {
        wp_enqueue_style(
            'abtinafzar-homepage-style',
            get_template_directory_uri() . '/assets/css/homepage.css',
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

