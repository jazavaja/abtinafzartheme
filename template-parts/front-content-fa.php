<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-gradient"></div>
        <div class="particles" id="particles"></div>
        <div class="hero-content">
            <span class="hero-badge">محمدجواد سرلک - بنیانگذار و مدیرعامل</span>
            <h1>شرکت آبتین‌افزار جوان</h1>
            <p class="hero-subtitle">ساخت سیستم‌های هوشمند و مقیاس‌پذیر که آینده کسب‌وکار را قدرت می‌بخشند</p>
            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary">مشاهده پروژه‌ها</a>
                <a href="#consultation" class="btn btn-outline">مشاوره رایگان</a>
            </div>
        </div>
        <div class="scroll-indicator"></div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <h2 class="section-title">پروژه‌های برگزیده</h2>
        <p class="section-subtitle">برای مشاهده کارهای من اسکرول کنید</p>
        <div class="projects-carousel">
            <div class="projects-track" id="projectsTrack">
                <div class="project-circle">
                    <span class="project-number">۰۱</span>
                    <span class="tech-badge">Django + React + PostgreSQL</span>
                    <h3>مدیریت ناوگان</h3>
                    <p>ردیابی GPS بلادرنگ، زمان‌بندی تعمیرات و تحلیل‌های عملیاتی ناوگان.</p>
                </div>
                <div class="project-circle">
                    <span class="project-number">۰۲</span>
                    <span class="tech-badge">Python + TensorFlow + Keras</span>
                    <h3>پیش‌بینی هوش مصنوعی سهام</h3>
                    <p>پیش‌بینی روند بازار با دقت ۸۹٪ با استفاده از یادگیری عمیق و شاخص‌های تکنیکال.</p>
                </div>
                <div class="project-circle">
                    <span class="project-number">۰۳</span>
                    <span class="tech-badge">Laravel + Vue.js + MySQL</span>
                    <h3>بک‌اند فروشگاه اینترنتی</h3>
                    <p>API مقیاس‌پذیر با پرداخت، مدیریت موجودی و کاربران برای خرده‌فروشی آنلاین.</p>
                </div>
                <div class="project-circle">
                    <span class="project-number">۰۴</span>
                    <span class="tech-badge">Spring + Java + Oracle</span>
                    <h3>سیستم CRM دانشگاهی</h3>
                    <p>پلتفرم مدیریت چرخه حیات و پشتیبانی دانشجویان برای دانشگاه‌ها.</p>
                </div>
                <div class="project-circle">
                    <span class="project-number">۰۵</span>
                    <span class="tech-badge">React + Laravel + AI Services</span>
                    <h3>پلتفرم مدرسه هوشمند ایزی‌کا</h3>
                    <p>مدیریت مدرسه مبتنی بر هوش مصنوعی با اتوماسیون مالی، تکالیف و مدیریت.</p>
                </div>
                <div class="project-circle">
                    <span class="project-number">۰۶</span>
                    <span class="tech-badge">Python + Scrapy + Selenium</span>
                    <h3>استخراج‌کننده پیشرفته داده</h3>
                    <p>ابزار قدرتمند برای استخراج داده‌های پویا از وب‌سایت‌های پیچیده در مقیاس بزرگ.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Consultation Section -->
    <section id="consultation">
        <div class="consultation-container">
            <div class="consultation-card">
                <div class="consultation-header">
                    <h2>مشاوره رایگان</h2>
                    <p>ایده‌ای دارید؟ به مشاوره فنی نیاز دارید؟ بیایید صحبت کنیم</p>
                </div>
                <form class="consultation-form">
                    <div class="form-grid">
                        <div class="form-group">
                            <input type="text" placeholder="نام شما" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="موبایل" required>
                        </div>
                    </div>
                    <div class="form-group full-width">
                        <textarea placeholder="پیام شما" required></textarea>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            ارسال درخواست
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <h2 class="section-title">خدمات من</h2>
        <p class="section-subtitle">آنچه می‌توانم برای شما انجام دهم</p>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🚀</div>
                <h3>توسعه وب از ابتدا تا انتها</h3>
                <p>ما هر پلتفرم وب‌مبتنی که تصور می‌کنید می‌سازیم—با استفاده از استک‌های مدرن مانند Django، Laravel و React.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🧠</div>
                <h3>راهکارهای هوش مصنوعی و داده</h3>
                <p>سیستم‌های هوشمند برای پیش‌بینی، اتوماسیون و بینش با استفاده از یادگیری ماشین و مهندسی داده</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🏛️</div>
                <h3>سیستم‌های مدیریت سازمانی</h3>
                <p>پلتفرم‌های جامع برای دانشگاه‌ها، مدارس و کارگزاری‌ها با استفاده از Java، Spring و معماری‌های امن</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🔗</div>
                <h3>راهکارهای بلاکچین و Web3</h3>
                <p>توسعه کامل اپلیکیشن‌های غیرمتمرکز، قراردادهای هوشمند و اکوسیستم توکن در اتریوم و سایر بلاکچین‌ها</p>
            </div>
            <div class="service-card">
                <div class="service-icon">💡</div>
                <h3>استراتژی فناوری برای استارتاپ‌ها و کسب‌وکارها</h3>
                <p>راهنمایی تخصصی در معماری محصول، انتخاب استک فناوری و نقشه‌راه توسعه مقیاس‌پذیر</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🎓</div>
                <h3>آموزش حرفه‌ای و کارگاه‌ها</h3>
                <p>آموزش فنی عملی در توسعه وب، هوش مصنوعی و طراحی سیستم برای تیم‌ها و دانشجویان</p>
            </div>
        </div>
    </section>

    <script>
        // Generate floating particles
        const particlesContainer = document.getElementById('particles');
        for (let i = 0; i < 50; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 20 + 's';
            particle.style.animationDuration = (Math.random() * 10 + 15) + 's';
            particlesContainer.appendChild(particle);
        }

        // Smooth scroll for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({behavior: 'smooth', block: 'start'});
                }
            });
        });

        // Auto-scroll projects with pause on hover
        const projectsTrack = document.getElementById('projectsTrack');
        let scrollAmount = 0;
        let isScrolling = true;
        let autoScrollInterval;

        function startAutoScroll() {
            autoScrollInterval = setInterval(() => {
                if (isScrolling) {
                    projectsTrack.scrollLeft += 8;

                    // Reset to start when reaching the end
                    if (projectsTrack.scrollLeft >= projectsTrack.scrollWidth - projectsTrack.clientWidth - 1) {
                        projectsTrack.scrollLeft = 0;
                    }
                }
            }, 20);
        }

        // Pause on hover
        projectsTrack.addEventListener('mouseenter', () => {
            isScrolling = false;
        });

        // Resume on mouse leave
        projectsTrack.addEventListener('mouseleave', () => {
            isScrolling = true;
        });

        // Manual scroll with mouse wheel
        projectsTrack.addEventListener('wheel', (e) => {
            e.preventDefault();
            projectsTrack.scrollLeft += e.deltaY;
            isScrolling = false;

            // Resume auto-scroll after 2 seconds of no manual scrolling
            clearTimeout(scrollAmount);
            scrollAmount = setTimeout(() => {
                isScrolling = true;
            }, 2000);
        });

        // Start auto-scroll
        startAutoScroll();
    </script>

<?php get_footer(); ?>