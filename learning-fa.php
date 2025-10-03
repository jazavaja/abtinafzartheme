<?php
/**
 * Template Name: Learning Fa
 */

get_header(); ?>



    <div class="learning-container">
        <!-- Hero Section -->
        <div class="learning-hero">
            <h1>🎓 دوره‌های تخصصی برنامه‌نویسی</h1>
            <p>از مبتدی تا متخصص با بهترین روش‌های آموزشی</p>
            <span class="hero-badge" id="freeClassBadge">✨ جلسه اول تمام دوره‌ها رایگان است ✨</span>
        </div>

        <!-- Courses Section -->
        <h2 class="section-title">دوره‌های موجود</h2>
        <div class="courses-grid">
            <!-- Python Course -->
            <div class="course-card">
                <span class="course-icon">🐍</span>
                <h3>برنامه‌نویسی پایتون</h3>
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
                <h3>توسعه وب با PHP</h3>
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
                <h3>فریمورک لاراول</h3>
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
                <h3>فریمورک جنگو</h3>
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
                <h3>هوش مصنوعی و یادگیری ماشین</h3>
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
                <h3>تسلط بر جاوا اسکریپت</h3>
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
                <h3>توسعه با ری‌اکت</h3>
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

        <!-- Testimonials Section -->
        <div class="testimonials-section">
            <h2 class="section-title">نظرات دانشجویان</h2>
            <p style="text-align: center; color: #cbd5e1; margin-bottom: 2rem;">ببینید دانشجویان ما در مورد تجربه یادگیری خود چه می‌گویند</p>

            <div class="testimonials-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div class="student-info">
                        <div class="student-avatar">AH</div>
                        <div class="student-details">
                            <h4>علی حسینی</h4>
                            <p>توسعه‌دهنده پایتون</p>
                        </div>
                    </div>
                    <div class="voice-player">
                        <audio controls
                               style="width: 100%; height: 45px; border-radius: 15px; background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.3);">
                            <source src="https://irsv.upmusics.com/dlw/7%20Band%20-%20Biroone%20Shahr%20(320).mp3"
                                    type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="student-info">
                        <div class="student-avatar">SM</div>
                        <div class="student-details">
                            <h4>سارا محمدی</h4>
                            <p>توسعه‌دهنده فول‌استک</p>
                        </div>
                    </div>
                    <div class="voice-player">
                        <audio controls
                               style="width: 100%; height: 45px; border-radius: 15px; background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.3);">
                            <source src="https://irsv.upmusics.com/dlw/7%20Band%20-%20Biroone%20Shahr%20(320).mp3"
                                    type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div class="student-info">
                        <div class="student-avatar">RK</div>
                        <div class="student-details">
                            <h4>رضا کریمی</h4>
                            <p>مهندس هوش مصنوعی</p>
                        </div>
                    </div>
                    <div class="voice-player">
                        <audio controls
                               style="width: 100%; height: 45px; border-radius: 15px; background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.3);">
                            <source src="https://irsv.upmusics.com/dlw/7%20Band%20-%20Biroone%20Shahr%20(320).mp3"
                                    type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-card">
                    <div class="student-info">
                        <div class="student-avatar">MA</div>
                        <div class="student-details">
                            <h4>مریم احمدی</h4>
                            <p>توسعه‌دهنده ری‌اکت</p>
                        </div>
                    </div>
                    <div class="voice-player">
                        <audio controls
                               style="width: 100%; height: 45px; border-radius: 15px; background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.3);">
                            <source src="https://irsv.upmusics.com/dlw/7%20Band%20-%20Biroone%20Shahr%20(320).mp3"
                                    type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>

                <!-- Testimonial 5 -->
                <div class="testimonial-card">
                    <div class="student-info">
                        <div class="student-avatar">PM</div>
                        <div class="student-details">
                            <h4>پویا مرادی</h4>
                            <p>توسعه‌دهنده بک‌اند</p>
                        </div>
                    </div>
                    <div class="voice-player">
                        <audio controls
                               style="width: 100%; height: 45px; border-radius: 15px; background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.3);">
                            <source src="https://irsv.upmusics.com/dlw/7%20Band%20-%20Biroone%20Shahr%20(320).mp3"
                                    type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>

                <!-- Testimonial 6 -->
                <div class="testimonial-card">
                    <div class="student-info">
                        <div class="student-avatar">NR</div>
                        <div class="student-details">
                            <h4>ناوید رضایی</h4>
                            <p>توسعه‌دهنده لاراول</p>
                        </div>
                    </div>
                    <div class="voice-player">
                        <audio controls
                               style="width: 100%; height: 45px; border-radius: 15px; background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.3);">
                            <source src="https://irsv.upmusics.com/dlw/7%20Band%20-%20Biroone%20Shahr%20(320).mp3"
                                    type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>

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

            <?php echo do_shortcode('[contact-form-7 id="2f6453b" title="Register for Free Fa"]'); ?>
        </div>
    </div>

    <select id="courseSelect" name="course" class="form-control" required>
        <option value="">یک دوره را انتخاب کنید</option>
        <option value="برنامه‌نویسی پایتون">برنامه‌نویسی پایتون</option>
        <option value="توسعه وب با PHP">توسعه وب با PHP</option>
        <option value="فریمورک لاراول">فریمورک لاراول</option>
        <option value="فریمورک جنگو">فریمورک جنگو</option>
        <option value="هوش مصنوعی و یادگیری ماشین">هوش مصنوعی و یادگیری ماشین</option>
        <option value="تسلط بر جاوا اسکریپت">تسلط بر جاوا اسکریپت</option>
        <option value="توسعه با ری‌اکت">توسعه با ری‌اکت</option>
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