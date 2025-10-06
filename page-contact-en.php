<?php
/**
 * Template Name: Contact Us English
 */

custom_header(); ?>
    <main class="contact-page">
        <div class="container">
            <h1><?php the_title(); ?></h1>

            <div class="contact-layout">
                <!-- Contact Information -->
                <div class="contact-info">
                    <h2>Contact Information</h2>

                    <div class="info-item">
                        <strong>Address:</strong>
                        <p>123 Main Street, Your City, Country</p>
                    </div>

                    <div class="info-item">
                        <strong>Email:</strong>
                        <p>info@yourwebsite.com</p>
                    </div>

                    <div class="info-item">
                        <strong>Phone:</strong>
                        <p>+1 (234) 567-8900</p>
                    </div>

                    <div class="info-item">
                        <strong>Business Hours:</strong>
                        <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    <h2>Send Us a Message</h2>

                    <?php if (isset($_GET['sent']) && $_GET['sent'] == 'true') : ?>
                        <div class="success-message">
                            ✓ Thank you! Your message has been sent successfully.
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_GET['sent']) && $_GET['sent'] == 'false') : ?>
                        <div class="error-message">
                            ✗ Sorry, there was an error sending your message. Please try again.
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="contact-form">
                        <input type="hidden" name="action" value="submit_contact_form">
                        <?php wp_nonce_field('contact_form_action', 'contact_form_nonce'); ?>

                        <div class="form-group">
                            <label for="contact-name">Your Name *</label>
                            <input type="text" id="contact-name" name="contact_name" required>
                        </div>

                        <div class="form-group">
                            <label for="contact-email">Your Email *</label>
                            <input type="email" id="contact-email" name="contact_email" required>
                        </div>

                        <div class="form-group">
                            <label for="contact-phone">Phone Number</label>
                            <input type="tel" id="contact-phone" name="contact_phone">
                        </div>

                        <div class="form-group">
                            <label for="contact-subject">Subject *</label>
                            <input type="text" id="contact-subject" name="contact_subject" required>
                        </div>

                        <div class="form-group">
                            <label for="contact-message">Your Message *</label>
                            <textarea id="contact-message" name="contact_message" rows="6" required></textarea>
                        </div>

                        <button type="submit" class="submit-button">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>