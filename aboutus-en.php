<?php
/**
 * Template Name: About Us English
 */

// Enqueue custom stylesheet

get_header(); ?>

    <main class="about-page">
        <div class="container">
            <h1><?php the_title(); ?></h1>

            <div class="about-layout">
                <!-- Founder Spotlight -->
                <div class="founder-card">
                    <div class="founder-avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/javad.png"
                             alt="Mohammad Javad Sarlak, Full-Stack Developer & AI Engineer"
                             loading="lazy">
                    </div>
                    <div class="founder-content">
                        <h2>Hi, I’m Mohammad Javad Sarlak</h2>
                        <p class="founder-title">Full-Stack Developer & AI Engineer</p>
                        <p>
                            With nearly a decade of experience, I specialize in building scalable, secure, and intelligent web applications.
                            My journey spans backend architecture in <strong>PHP (Laravel)</strong>, <strong>Python (Django, AI/ML)</strong>,
                            and <strong>Java (Spring Boot)</strong>, paired with modern frontends in <strong>React</strong> and <strong>Vue.js</strong>.
                        </p>
                        <p>
                            I’ve engineered everything from AI-driven stock prediction systems to full-stack fleet management platforms—always
                            with a focus on performance, clean code, and real-world impact. As a solo founder, I bring end-to-end ownership
                            to every project, from concept to deployment.
                        </p>
                        <p>
                            Beyond development, I mentor aspiring programmers and teach advanced topics in web development and AI—because
                            great technology starts with great understanding.
                        </p>
                        <div class="signature">— Javad</div>
                    </div>
                </div>

                <!-- Philosophy & Approach -->
                <div class="philosophy-section">
                    <h2>What Drives Me</h2>
                    <div class="principle">
                        <h3>Depth Meets Versatility</h3>
                        <p>I combine broad full-stack fluency with deep expertise in backend systems and machine learning—so your solution is both robust and future-ready.</p>
                    </div>
                    <div class="principle">
                        <h3>Code with Purpose</h3>
                        <p>Every line I write is intentional—optimized for performance, security, and maintainability.</p>
                    </div>
                    <div class="principle">
                        <h3>Ownership, Not Just Delivery</h3>
                        <p>I treat your project like my own—because in many cases, it is.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>