<?php
/**
 * Template Name: Learning Fa
 */

custom_header(); ?>



    <div class="learning-container">
        <!-- Hero Section -->
        <div class="learning-hero">
            <h1>🎓 تدریس خصوصی برنامه نویسی</h1>
            <p>از مبتدی تا متخصص با بهترین روش‌های آموزشی</p>
            <span class="hero-badge" id="freeClassBadge">رزرو جلسه اول رایگان 📅 </span>
            <a class="hero-badge"  href="#testimonials-section" style="text-decoration: none">
                ✨ نظرات دانشجویان ما ✨
            </a>
        </div>


        <!-- Testimonials Section -->

        <div class="testimonials-section" id="testimonials-section">
            <h2 class="section-title">نظرات دانشجویان</h2>
            <p style="text-align: center; color: #cbd5e1; margin-bottom: 2rem;">ببینید دانشجویان ما در مورد تجربه یادگیری خود چه می‌گویند</p>

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
                        $name_en  = pods_field('student_testimonial', get_the_ID(), 'student_name_fa', true);
                        $title_en = pods_field('student_testimonial', get_the_ID(), 'student_title_fa', true);
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

        <!-- Courses Section -->
        <h2 class="section-title">دوره‌های موجود</h2>
        <div class="courses-grid">
            <!-- Python Course -->
            <div class="course-card">
                <span class="course-icon">🐍</span>
                <h3><a href="<?php echo esc_url(home_url(get_key_value_url('python_url_fa'))); ?>" >تدریس خصوصی پایتون</a></h3>
                <p>پایتون را از صفر تا پیشرفته بیاموزید، شامل جنگو، فلسک، علم داده و اتوماسیون</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ ۴۸ ساعت</span>
                    <span class="detail-badge">📚 ۱۲ پروژه</span>
                    <span class="detail-badge">🎯 مبتدی تا پیشرفته</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" id="freeClassBadge" data-course="برنامه‌نویسی پایتون">کلاس گروهی</button>
                    <button class="class-btn private" id="freeClassBadge" data-course="برنامه‌نویسی پایتون">کلاس خصوصی</button>
                </div>
            </div>

            <!-- PHP Course -->
            <div class="course-card">
                <span class="course-icon">🐘</span>
                <h3><a href="<?php echo esc_url(home_url(get_key_value_url('php_url_fa'))); ?>" >تدریس خصوصی PHP</a></h3>

                <p>بر PHP، MySQL و توسعه وب‌سایت‌های داینامیک و سیستم‌های مدیریت محتوا مسلط شوید</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ ۴۰ ساعت</span>
                    <span class="detail-badge">📚 ۱۰ پروژه</span>
                    <span class="detail-badge">🎯 مبتدی تا پیشرفته</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="توسعه وب با PHP">کلاس گروهی</button>
                    <button class="class-btn private" data-course="توسعه وب با PHP">کلاس خصوصی</button>
                </div>
            </div>

            <!-- Laravel Course -->
            <div class="course-card">
                <span class="course-icon">🔷</span>
                <h3><a href="<?php echo esc_url(home_url(get_key_value_url('laravel_url_fa'))); ?>" >تدریس خصوصی لاراول</a></h3>
                <p>اپلیکیشن‌های وب حرفه‌ای با لاراول، REST API، احراز هویت و قابلیت‌های Real-time بسازید</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ ۵۰ ساعت</span>
                    <span class="detail-badge">📚 ۱۵ پروژه</span>
                    <span class="detail-badge">🎯 متوسط تا پیشرفته</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="فریمورک لاراول">کلاس گروهی</button>
                    <button class="class-btn private" data-course="فریمورک لاراول">کلاس خصوصی</button>
                </div>
            </div>

            <!-- Django Course -->
            <div class="course-card">
                <span class="course-icon">🎸</span>
                <h3><a href="<?php echo esc_url(home_url(get_key_value_url('django_url_fa'))); ?>" >تدریس خصوصی جنگو</a></h3>
                <p>اپلیکیشن‌های وب مقیاس‌پذیر با جنگو، REST Framework، Celery و Docker توسعه دهید</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ ۴۵ ساعت</span>
                    <span class="detail-badge">📚 ۱۳ پروژه</span>
                    <span class="detail-badge">🎯 متوسط تا پیشرفته</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="فریمورک جنگو">کلاس گروهی</button>
                    <button class="class-btn private" data-course="فریمورک جنگو">کلاس خصوصی</button>
                </div>
            </div>

            <!-- AI/ML Course -->
            <div class="course-card">
                <span class="course-icon">🤖</span>
                <h3><a href="<?php echo esc_url(home_url(get_key_value_url('django_url_fa'))); ?>" >تدریس خصوصی هوش مصنوعی</a></h3>
                <p>بر هوش مصنوعی، یادگیری عمیق، TensorFlow، PyTorch و کاربردهای واقعی AI مسلط شوید</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ ۶۰ ساعت</span>
                    <span class="detail-badge">📚 ۲۰ پروژه</span>
                    <span class="detail-badge">🎯 سطح پیشرفته</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="هوش مصنوعی و یادگیری ماشین">کلاس گروهی</button>
                    <button class="class-btn private" data-course="هوش مصنوعی و یادگیری ماشین">کلاس خصوصی</button>
                </div>
            </div>

            <!-- JavaScript Course -->
            <div class="course-card">
                <span class="course-icon">💛</span>
                <h3><a href="<?php echo esc_url(home_url(get_key_value_url('javascript_url_fa'))); ?>" >تدریس خصوصی JavaScript</a></h3>
                <p>جاوا اسکریپت ES6+، Async/Await، کار با DOM و توسعه وب مدرن را به طور کامل بیاموزید</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ ۴۲ ساعت</span>
                    <span class="detail-badge">📚 ۱۴ پروژه</span>
                    <span class="detail-badge">🎯 مبتدی تا پیشرفته</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="تسلط بر جاوا اسکریپت">کلاس گروهی</button>
                    <button class="class-btn private" data-course="تسلط بر جاوا اسکریپت">کلاس خصوصی</button>
                </div>
            </div>

            <!-- React Course -->
            <div class="course-card">
                <span class="course-icon">⚛️</span>
                <h3><a href="<?php echo esc_url(home_url(get_key_value_url('javascript_url_fa'))); ?>" >تدریس خصوصی React</a></h3>
                <p>رابط‌های کاربری مدرن با ری‌اکت، Redux، Hooks، Next.js و TypeScript بسازید</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ ۵۵ ساعت</span>
                    <span class="detail-badge">📚 ۱۸ پروژه</span>
                    <span class="detail-badge">🎯 متوسط تا پیشرفته</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="توسعه با ری‌اکت">کلاس گروهی</button>
                    <button class="class-btn private" data-course="توسعه با ری‌اکت">کلاس خصوصی</button>
                </div>
            </div>
        </div>


        <!----------------------------------------------------------------->

        <!-- Free Class CTA -->
        <div class="free-class-cta">
            <h2>🎁 جلسه اول را رایگان دریافت کنید!</h2>
            <p>کیفیت آموزش ما را قبل از ثبت‌نام تجربه کنید. نیازی به اطلاعات پرداخت نیست.</p>
            <div class="cta-button" id="freeClassButton">رزرو جلسه رایگان</div>
        </div>
    </div>

    <!-- Registration Modal -->
    <div class="modal-overlay" id="registrationModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">ثبت‌نام برای جلسه رایگان</h3>
                <button class="close-modal" id="closeModal">&times;</button>
            </div>
            <?php
            $contact = get_key_value_url('contact_learn_fa');

            echo do_shortcode('[contact-form-7 id="'.$contact.'" title="Free Conclusion Fa"]');
            ?>
        </div>
    </div>



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

<?php custom_footer(); ?>