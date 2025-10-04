<?php
/**
 * Template Name: Learning English
 */

get_header(); ?>



    <div class="learning-container">
        <!-- Hero Section -->
        <div class="learning-hero">
            <h1>🎓 Professional Programming Courses</h1>
            <p>From Beginner to Expert with the Best Teaching Methods</p>
            <span class="hero-badge" id="freeClassBadge">✨ First Class FREE for All Courses ✨</span>
        </div>

        <!-- Courses Section -->
        <h2 class="section-title">Available Courses</h2>
        <div class="courses-grid">
            <!-- Python Course -->
            <div class="course-card">
                <span class="course-icon">🐍</span>
                <h3>Python Programming</h3>
                <p>Learn Python from scratch to advanced, including Django, Flask, Data Science and Automation</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ 48 Hours</span>
                    <span class="detail-badge">📚 12 Projects</span>
                    <span class="detail-badge">🎯 Beginner to Advanced</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" id="freeClassBadge" data-course="Python Programming">Group Class</button>
                    <button class="class-btn private" id="freeClassBadge" data-course="Python Programming">Private Class</button>
                </div>
            </div>

            <!-- PHP Course -->
            <div class="course-card">
                <span class="course-icon">🐘</span>
                <h3>PHP Development</h3>
                <p>Master PHP, MySQL, and develop dynamic websites and content management systems</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ 40 Hours</span>
                    <span class="detail-badge">📚 10 Projects</span>
                    <span class="detail-badge">🎯 Beginner to Advanced</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="PHP Development">Group Class</button>
                    <button class="class-btn private" data-course="PHP Development">Private Class</button>
                </div>
            </div>

            <!-- Laravel Course -->
            <div class="course-card">
                <span class="course-icon">🔷</span>
                <h3>Laravel Framework</h3>
                <p>Build professional web applications with Laravel, REST API, Authentication and Real-time Features</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ 50 Hours</span>
                    <span class="detail-badge">📚 15 Projects</span>
                    <span class="detail-badge">🎯 Intermediate to Advanced</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="Laravel Framework">Group Class</button>
                    <button class="class-btn private" data-course="Laravel Framework">Private Class</button>
                </div>
            </div>

            <!-- Django Course -->
            <div class="course-card">
                <span class="course-icon">🎸</span>
                <h3>Django Framework</h3>
                <p>Develop scalable web applications with Django, REST Framework, Celery and Docker</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ 45 Hours</span>
                    <span class="detail-badge">📚 13 Projects</span>
                    <span class="detail-badge">🎯 Intermediate to Advanced</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="Django Framework">Group Class</button>
                    <button class="class-btn private" data-course="Django Framework">Private Class</button>
                </div>
            </div>

            <!-- AI/ML Course -->
            <div class="course-card">
                <span class="course-icon">🤖</span>
                <h3>AI & Machine Learning</h3>
                <p>Master Artificial Intelligence, Deep Learning, TensorFlow, PyTorch and real-world AI applications</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ 60 Hours</span>
                    <span class="detail-badge">📚 20 Projects</span>
                    <span class="detail-badge">🎯 Advanced Level</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="AI & Machine Learning">Group Class</button>
                    <button class="class-btn private" data-course="AI & Machine Learning">Private Class</button>
                </div>
            </div>

            <!-- JavaScript Course -->
            <div class="course-card">
                <span class="course-icon">💛</span>
                <h3>JavaScript Mastery</h3>
                <p>Complete JavaScript ES6+, Async/Await, DOM Manipulation, and modern web development</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ 42 Hours</span>
                    <span class="detail-badge">📚 14 Projects</span>
                    <span class="detail-badge">🎯 Beginner to Advanced</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="JavaScript Mastery">Group Class</button>
                    <button class="class-btn private" data-course="JavaScript Mastery">Private Class</button>
                </div>
            </div>

            <!-- React Course -->
            <div class="course-card">
                <span class="course-icon">⚛️</span>
                <h3>React Development</h3>
                <p>Build modern user interfaces with React, Redux, Hooks, Next.js and TypeScript</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ 55 Hours</span>
                    <span class="detail-badge">📚 18 Projects</span>
                    <span class="detail-badge">🎯 Intermediate to Advanced</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="React Development">Group Class</button>
                    <button class="class-btn private" data-course="React Development">Private Class</button>
                </div>
            </div>
        </div>


<!--   -------------------------------     -------------------------------->

        <!-- Testimonials Section -->

        <div class="testimonials-section">
            <h2 class="section-title">Student Testimonials</h2>
            <p style="text-align: center; color: #cbd5e1; margin-bottom: 2rem;">Listen to what our students say about their learning experience</p>

            <?php
            $args = array(
                'post_type'      => 'student_testimonial',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $testimonials = new WP_Query($args);

            if ($testimonials->have_posts()) :
                ?>
                <div class="testimonials-grid">
                    <?php while ($testimonials->have_posts()) : $testimonials->the_post();

                        // دریافت فیلدها از Pods
                        $name_en  = pods_field('student_testimonial', get_the_ID(), 'student_name_en', true);
                        $title_en = pods_field('student_testimonial', get_the_ID(), 'student_title_en', true);
                        $audio    = pods_field('student_testimonial', get_the_ID(), 'audio_file', true); // باید آرایه باشه
                        $rating   = (int) pods_field('student_testimonial', get_the_ID(), 'rating', true);

                        // اگر نام خالی بود، پیش‌فرض
                        $name_en = $name_en ?: 'Anonymous';
                        $title_en = $title_en ?: 'Student';

                        // استخراج URL فایل صوتی
                        $audio_url = is_array($audio) && isset($audio['guid']) ? esc_url($audio['guid']) : '';

                        // دو حرف اول نام برای آواتار
                        $avatar = strtoupper(substr($name_en, 0, 2));

                        // ساخت ستاره‌ها
                        $stars = str_repeat('⭐', min(5, max(0, $rating)));

                        ?>
                        <div class="testimonial-card">
                            <div class="student-info">
                                <div class="student-avatar"><?php echo esc_html($avatar); ?></div>
                                <div class="student-details">
                                    <h4><?php echo esc_html($name_en); ?></h4>
                                    <p><?php echo esc_html($title_en); ?></p>
                                </div>
                            </div>
                            <?php if ($audio_url) : ?>
                                <div class="voice-player">
                                    <audio controls
                                           style="width: 100%; height: 45px; border-radius: 15px; background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.3);">
                                        <source src="<?php echo $audio_url; ?>" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                </div>
                            <?php endif; ?>
                            <div class="rating"><?php echo $stars; ?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php
                wp_reset_postdata();
            else :
                echo '<p style="text-align: center; color: #cbd5e1;">No testimonials found.</p>';
            endif;
            ?>
        </div>


<!------------------------------------------------------------------------>


        <!-- Free Class CTA -->
        <div class="free-class-cta">
            <h2>🎁 Get Your First Class FREE!</h2>
            <p>Experience our teaching quality before committing. No credit card required.</p>
            <div class="cta-button" id="freeClassButton">Book Free Class Now</div>
        </div>
    </div>

    <!-- Registration Modal -->
    <div class="modal-overlay" id="registrationModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Register for Free Class</h3>
                <button class="close-modal" id="closeModal">&times;</button>
            </div>

            <?php echo do_shortcode('[contact-form-7 id="1ffbcfa" title="Register for Free Class"]'); ?>
        </div>
    </div>

    <select id="courseSelect" name="course" class="form-control" required>
        <option value="">Choose a course</option>
        <option value="Python Programming">Python Programming</option>
        <option value="PHP Development">PHP Development</option>
        <option value="Laravel Framework">Laravel Framework</option>
        <option value="Django Framework">Django Framework</option>
        <option value="AI & Machine Learning">AI & Machine Learning</option>
        <option value="JavaScript Mastery">JavaScript Mastery</option>
        <option value="React Development">React Development</option>
    </select>


    <script>

        // Course card button interactions
        document.querySelectorAll('.class-btn').forEach(button => {
            button.addEventListener('click', function () {
                console.log("HH")
                const courseTitle = this.getAttribute('data-course');
                const classType = this.textContent;

                // Open registration modal with pre-filled values
                openRegistrationModal(courseTitle, classType);
            });
        });

        // Free class registration modal
        const freeClassBadge = document.getElementById('freeClassBadge');
        const freeClassButton = document.getElementById('freeClassButton');
        const registrationModal = document.getElementById('registrationModal');
        const closeModal = document.getElementById('closeModal');
        const freeClassForm = document.getElementById('freeClassForm');

        // Open modal functions
        function openRegistrationModal(course = '', classType = '') {
            registrationModal.classList.add('active');
        }

        freeClassBadge.addEventListener('click', () => openRegistrationModal());
        freeClassButton.addEventListener('click', () => openRegistrationModal());

        // Close modal
        closeModal.addEventListener('click', () => {
            registrationModal.classList.remove('active');
        });

        // Close modal when clicking outside
        registrationModal.addEventListener('click', (e) => {
            if (e.target === registrationModal) {
                registrationModal.classList.remove('active');
            }
        });
    </script>

<?php get_footer(); ?>