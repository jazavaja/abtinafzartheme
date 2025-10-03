<?php

/**
 * Template Name: Contact Us Fa
 */

get_header(); ?>
<main class="contact-page">
    <div class="container">
        <h1><?php the_title(); ?></h1>

        <div class="contact-layout">
            <!-- اطلاعات تماس -->
            <div class="contact-info">
                <h2>اطلاعات تماس</h2>

                <div class="info-item">
                    <strong>آدرس:</strong>
                    <p>خیابان اصلی ۱۲۳، شهر شما، کشور</p>
                </div>

                <div class="info-item">
                    <strong>ایمیل:</strong>
                    <p>info@yourwebsite.com</p>
                </div>

                <div class="info-item">
                    <strong>تلفن:</strong>
                    <p>+1 (234) 567-8900</p>
                </div>

                <div class="info-item">
                    <strong>ساعات کاری:</strong>
                    <p>شنبه تا چهارشنبه: ۹:۰۰ صبح تا ۶:۰۰ عصر</p>
                </div>
            </div>

            <!-- فرم تماس -->
            <div class="contact-form-wrapper">
                <h2>پیام خود را ارسال کنید</h2>

                <?php if (isset($_GET['sent']) && $_GET['sent'] == 'true') : ?>
                    <div class="success-message">
                        ✓ ممنون! پیام شما با موفقیت ارسال شد.
                    </div>
                <?php endif; ?>

                <?php if (isset($_GET['sent']) && $_GET['sent'] == 'false') : ?>
                    <div class="error-message">
                        ✗ متاسفانه در ارسال پیام شما خطایی رخ داد. لطفاً دوباره تلاش کنید.
                    </div>
                <?php endif; ?>

                <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="contact-form">
                    <input type="hidden" name="action" value="submit_contact_form">
                    <?php wp_nonce_field('contact_form_action', 'contact_form_nonce'); ?>

                    <div class="form-group">
                        <label for="contact-name">نام شما *</label>
                        <input type="text" id="contact-name" name="contact_name" required>
                    </div>

                    <div class="form-group">
                        <label for="contact-email">ایمیل شما *</label>
                        <input type="email" id="contact-email" name="contact_email" required>
                    </div>

                    <div class="form-group">
                        <label for="contact-phone">شماره تلفن</label>
                        <input type="tel" id="contact-phone" name="contact_phone">
                    </div>

                    <div class="form-group">
                        <label for="contact-subject">موضوع *</label>
                        <input type="text" id="contact-subject" name="contact_subject" required>
                    </div>

                    <div class="form-group">
                        <label for="contact-message">پیام شما *</label>
                        <textarea id="contact-message" name="contact_message" rows="6" required></textarea>
                    </div>

                    <button type="submit" class="submit-button">ارسال پیام</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
