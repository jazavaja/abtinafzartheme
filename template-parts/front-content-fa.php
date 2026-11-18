<?php
/**
 * Template Name: Home Page
 */

// لینک‌های پروژه‌ها از طریق تابع get_key_value_url (Pods)
$project_saman    = esc_url(get_key_value_url('project_saman_url_fa', '#'));
$project_pasargad = esc_url(get_key_value_url('project_pasargad_url_fa', '#'));
$project_simcap   = esc_url(get_key_value_url('project_simcap_url_fa', '#'));
$project_exchange = esc_url(get_key_value_url('project_exchange_url_fa', '#'));
$project_isatis   = esc_url(get_key_value_url('project_isatis_url_fa', '#'));
$project_chess    = esc_url(get_key_value_url('project_chess_url_fa', '#'));
$project_carton   = esc_url(get_key_value_url('project_carton_url_fa', '#'));

?>
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
    <section id="projects" class="projects-section">
        <div class="projects-header reveal reveal-delay-1">
            <h2 class="section-title">پروژه‌های برگزیده</h2>
            <p class="section-subtitle reveal reveal-delay-2">اخرین کارهای انجام شده توسط تیم آبتین‌افزار</p>
        </div>
        <div class="projects-grid">
            <div class="project-card reveal reveal-delay-3">
                <div class="card-glow"></div>
                <span class="card-number">۰۱</span>
                <div class="card-content">
                    <span class="card-tech"><span></span>RAG · LLM · Python · FastAPI</span>
                    <h3>چت‌بات فین‌تک بانک سامان</h3>
                    <p>چت‌بات هوشمند مبتنی بر RAG و مدل‌های زبان بزرگ (LLM) برای پاسخگویی به سوالات مشتریان و تراکنش‌های بانکی.</p>
                    <a href="<?php echo $project_saman; ?>" class="card-link">مشاهده پروژه <span>→</span></a>
                </div>
            </div>
            <div class="project-card reveal reveal-delay-4">
                <div class="card-glow"></div>
                <span class="card-number">۰۲</span>
                <div class="card-content">
                    <span class="card-tech"><span></span>AI · Python · Django · PostgreSQL</span>
                    <h3>سامانه بهینه‌سازی خرید و ربات صف — نفت پاسارگاد</h3>
                    <p>سیستم هوشمند برای بهینه‌سازی زمان خرید، مدیریت صف و خرید خودکار در شرکت نفت پاسارگاد با هوش مصنوعی.</p>
                    <a href="<?php echo $project_pasargad; ?>" class="card-link">مشاهده پروژه <span>→</span></a>
                </div>
            </div>
            <div class="project-card reveal reveal-delay-5">
                <div class="card-glow"></div>
                <span class="card-number">۰۳</span>
                <div class="card-content">
                    <span class="card-tech"><span></span>Laravel · Vue.js · MySQL · Payment</span>
                    <h3>فروشگاه طلا آنلاین simcap.ir</h3>
                    <p>پلتفرم فروش طلا و جواهرات آنلاین با درگاه پرداخت، مدیریت انبار و سفارش.</p>
                    <a href="<?php echo $project_simcap; ?>" class="card-link">مشاهده پروژه <span>→</span></a>
                </div>
            </div>
            <div class="project-card reveal reveal-delay-3">
                <div class="card-glow"></div>
                <span class="card-number">۰۴</span>
                <div class="card-content">
                    <span class="card-tech"><span></span>Node.js · React · MongoDB · Blockchain</span>
        <h3>صرافی ارز دیجیتال</h3>
        <p>سامانه خرید و فروش ارزهای دیجیتال و کریپتو کوین با کیف پول، تراکنش و گزارش‌دهی لحظه‌ای.</p>
                    <a href="<?php echo $project_exchange; ?>" class="card-link">مشاهده پروژه <span>→</span></a>
                </div>
            </div>
            <div class="project-card reveal reveal-delay-4">
                <div class="card-glow"></div>
                <span class="card-number">۰۵</span>
                <div class="card-content">
                    <span class="card-tech"><span></span>Laravel · Vue.js · MySQL · API</span>
                    <h3>CRM کارگزاری ایساتیس</h3>
                    <p>پلتفرم جامع مدیریت مشتریان، ردیابی لیدها و جریان فروش برای کارگزاری ایساتیس.</p>
                    <a href="<?php echo $project_isatis; ?>" class="card-link">مشاهده پروژه <span>→</span></a>
                </div>
            </div>
            <div class="project-card reveal reveal-delay-5">
                <div class="card-glow"></div>
                <span class="card-number">۰۶</span>
                <div class="card-content">
                    <span class="card-tech"><span></span>Rust · NNUE · Chess · AI</span>
                    <h3>موتور هوشمند شطرنج (Rust + NNUE)</h3>
                    <p>موتور شطرنج با نوشته شدن در زبان Rust و استفاده از تکنیک NNUE برای ارزیابی وضعیت درختی بازی.</p>
                    <a href="<?php echo $project_chess; ?>" class="card-link">مشاهده پروژه <span>→</span></a>
                </div>
            </div>
            <div class="project-card reveal reveal-delay-6">
                <div class="card-glow"></div>
                <span class="card-number">۰۷</span>
                <div class="card-content">
                    <span class="card-tech"><span></span>Python · OR-Tools · Algorithm · Logistics</span>
                    <h3>بهینه‌سازی طراحی کارتن و چیدمان پالت</h3>
                    <p>نرم‌افزار هوشمند برای بهینه‌سازی برش کارتن، چیدمان کالا روی پالت و کاهش هدررفت مواد.</p>
                    <a href="<?php echo $project_carton; ?>" class="card-link">مشاهده پروژه <span>→</span></a>
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
                <?php
                $contact = get_key_value_url('contact_front_fa');
                echo do_shortcode('[contact-form-7 id="' . $contact . '" title="Free Conclusion Fa"]');
                ?>

            </div>
        </div>
    </section>

    <!-- Services Section -->
<?php

$web = esc_url(get_key_value_url('web_develop_url_fa'));
$ai = esc_url(get_key_value_url('ai_url_fa'));
$enterprise = esc_url(get_key_value_url('enterprise_url_fa'));
$blockchain = esc_url(get_key_value_url('blockchain_url_fa'));
$consultation = esc_url(get_key_value_url('consultation_startups_url_fa'));
$training = esc_url(get_key_value_url('training_url_fa'));

?>
    <section id="services">
        <h2 class="section-title">خدمات من</h2>
        <p class="section-subtitle">آنچه می‌توانم برای شما انجام دهم</p>
        <div class="services-grid">
            <a href="<?php echo $web ?>" class="service-card">
                <div class="service-icon">🚀</div>
                <h3>توسعه وب از ابتدا تا انتها</h3>
                <p>ما هر پلتفرم وب‌مبتنی که تصور می‌کنید می‌سازیم—با استفاده از استک‌های مدرن مانند Django، Laravel و
                    React.</p>
            </a>
            <a href="<?php echo $ai ?>" class="service-card">
                <div class="service-icon">🧠</div>
                <h3>راهکارهای هوش مصنوعی و داده</h3>
                <p>سیستم‌های هوشمند برای پیش‌بینی، اتوماسیون و بینش با استفاده از یادگیری ماشین و مهندسی داده</p>
            </a>
            <a href="<?php echo $enterprise ?>" class="service-card">
                <div class="service-icon">🏛️</div>
                <h3>سیستم‌های مدیریت سازمانی</h3>
                <p>پلتفرم‌های جامع برای دانشگاه‌ها، مدارس و کارگزاری‌ها با استفاده از Java، Spring و معماری‌های امن</p>
            </a>
            <a href="<?php echo $blockchain ?>" class="service-card">
                <div class="service-icon">🔗</div>
                <h3>راهکارهای بلاکچین و Web3</h3>
                <p>توسعه کامل اپلیکیشن‌های غیرمتمرکز، قراردادهای هوشمند و اکوسیستم توکن در اتریوم و سایر بلاکچین‌ها</p>
            </a>
            <a href="<?php echo $consultation ?>" class="service-card">
                <div class="service-icon">💡</div>
                <h3>مشاوره استارتاپ ها</h3>
                <p>راهنمایی تخصصی در معماری محصول، انتخاب استک فناوری و نقشه‌راه توسعه مقیاس‌پذیر</p>
            </a>
            <a href="<?php echo $training ?>" class="service-card">
                <div class="service-icon">🎓</div>
                <h3>تدریس خصوصی برنامه نویسی</h3>
                <p>یادگیری برنامه‌نویسی با تدریس خصوصی تخصصی از صفر تا پیشرفته، با آموزش عملی و پروژه‌محور.</p>
            </a>
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

    // Reveal-on-scroll animation for projects section
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>

<?php get_footer(); ?>