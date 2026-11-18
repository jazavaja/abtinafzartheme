<?php
/**
 * Template Name: Isatis CRM Project Fa
 */

custom_header(); ?>

<style>
/* تم سازمانی و داده‌محور (Corporate Blue/Indigo) - فارسی */
.crm-theme {
    --crm-primary: #3b82f6;
    --crm-secondary: #8b5cf6;
    --crm-glow: rgba(59, 130, 246, 0.25);
}
.crm-theme .blockchain-hero {
    background: radial-gradient(circle at top, rgba(59, 130, 246, 0.1), transparent 70%);
}
.crm-theme h1 {
    background: linear-gradient(135deg, #fff 0%, var(--crm-primary) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.crm-theme .hero-badge {
    background: rgba(59, 130, 246, 0.1);
    border-color: rgba(59, 130, 246, 0.4);
    color: var(--crm-primary);
}
.crm-theme .service-card {
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.95), rgba(10, 15, 30, 0.95));
    border-color: rgba(59, 130, 246, 0.2);
}
.crm-theme .service-card:hover {
    border-color: var(--crm-primary);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5), 0 0 25px var(--crm-glow);
    transform: translateY(-5px);
}
.crm-theme .service-icon {
    background: linear-gradient(135deg, #1e293b, #0f172a);
    border: 1px solid var(--crm-primary);
    color: var(--crm-primary);
}
.crm-theme .tech-badge {
    background: rgba(59, 130, 246, 0.1);
    border-color: rgba(59, 130, 246, 0.3);
    color: var(--crm-primary);
}
.crm-theme .cta-button {
    background: linear-gradient(135deg, var(--crm-primary), var(--crm-secondary));
    color: #fff;
    border: none;
    box-shadow: 0 10px 20px rgba(59, 130, 246, 0.2);
}
.crm-theme .cta-button:hover {
    box-shadow: 0 15px 35px rgba(59, 130, 246, 0.4);
    transform: translateY(-3px);
}
.crm-theme .section-title {
    color: var(--crm-primary);
}
.crm-theme .process-step {
    border-color: rgba(59, 130, 246, 0.3);
}
.crm-theme .step-number {
    background: var(--crm-primary);
    color: #fff;
}
</style>

    <div class="blockchain-services-container crm-theme">
        <!-- Hero Section -->
        <section class="blockchain-hero">
            <div class="hero-content">
                <h1>🏢 CRM کارگزاری ایساتیس</h1>
                <p>پلتفرم جامع مدیریت مشتریان، ردیابی لیدها و مدیریت جریان فروش برای کارگزاری ایساتیس.</p>
                <div class="hero-badges">
                    <span class="hero-badge">Laravel</span>
                    <span class="hero-badge">Vue.js</span>
                    <span class="hero-badge">MySQL</span>
                    <span class="hero-badge">REST API</span>
                </div>
                <div class="cta-button" id="projectConsultationButton">ساخت CRM اختصاصی</div>
            </div>
            <div class="hero-visual">
                <div class="visual-element">📈</div>
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="blockchain-services-section">
            <h2 class="section-title">قابلیت‌های کلیدی</h2>
            <p class="section-description">بهینه‌سازی فرآیند فروش و مدیریت ارتباط با مشتریان</p>

            <div class="services-grid">
                <!-- Lead Management -->
                <div class="service-card">
                    <div class="service-icon">🎯</div>
                    <h3>مدیریت لیدها (سرنخ‌ها)</h3>
                    <p>جذب، ردیابی و امتیازدهی به سرنخ‌ها از منابع مختلف برای اطمینان از عدم از دست رفتن مشتریان بالقوه.</p>
                    <ul class="service-features">
                        <li>سیستم امتیازدهی لید</li>
                        <li>تخصیص خودکار به کارشناسان</li>
                        <li>ردیابی منبع ورودی</li>
                        <li>به‌روزرسانی وضعیت</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Vue.js</span>
                        <span class="tech-badge">Laravel</span>
                        <span class="tech-badge">MySQL</span>
                    </div>
                </div>

                <!-- Sales Pipeline -->
                <div class="service-card">
                    <div class="service-icon">🚀</div>
                    <h3>قیف فروش بصری</h3>
                    <p>تخته‌های کانبان (Kanban) با قابلیت کشیدن و رها کردن برای مشاهده معاملات در حال حرکت در قیف فروش.</p>
                    <ul class="service-features">
                        <li>نمای کانبان</li>
                        <li>ردیابی معاملات</li>
                        <li>پیش‌بینی درآمد</li>
                        <li>سفارشی‌سازی مراحل</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Vue Draggable</span>
                        <span class="tech-badge">REST API</span>
                        <span class="tech-badge">Laravel</span>
                    </div>
                </div>

                <!-- Customer 360 -->
                <div class="service-card">
                    <div class="service-icon">👤</div>
                    <h3>پروفایل ۳۶۰ درجه مشتریان</h3>
                    <p>نمای کامل از هر مشتری شامل تاریخچه تعاملات، اسناد و وضعیت تراکنش‌ها.</p>
                    <ul class="service-features">
                        <li>تاریخچه تعاملات</li>
                        <li>مدیریت اسناد و مدارک</li>
                        <li>موجودی حساب (متصل به API)</li>
                        <li>فیلدهای سفارشی</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">MySQL</span>
                        <span class="tech-badge">Eloquent ORM</span>
                        <span class="tech-badge">OAuth2</span>
                    </div>
                </div>

                <!-- Task Management -->
                <div class="service-card">
                    <div class="service-icon">📅</div>
                    <h3>مدیریت تسک‌ها و فعالیت‌ها</h3>
                    <p>هرگز یک پیگیری را از دست ندهید؛ با تقویم‌های یکپارچه، یادآورها و گزارش فعالیت‌ها.</p>
                    <ul class="service-features">
                        <li>یادآور تسک‌ها</li>
                        <li>زمان‌بندی جلسات</li>
                        <li>ثبت تماس‌ها</li>
                        <li>یکپارچه‌سازی ایمیل</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Vue.js</span>
                        <span class="tech-badge">Cron Jobs</span>
                        <span class="tech-badge">SMTP</span>
                    </div>
                </div>

                <!-- Analytics -->
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3>تحلیل و گزارش‌دهی</h3>
                    <p>داشبوردهای مبتنی بر داده برای پایش عملکرد کارشناسان، نرخ تبدیل و سلامت کلی فروش.</p>
                    <ul class="service-features">
                        <li>نرخ تبدیل (Conversion)</li>
                        <li>عملکرد کارشناسان</li>
                        <li>سرعت فروش</li>
                        <li>گزارش‌های قابل خروجی</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Chart.js</span>
                        <span class="tech-badge">SQL</span>
                        <span class="tech-badge">Laravel</span>
                    </div>
                </div>

                <!-- Role-Based Access -->
                <div class="service-card">
                    <div class="service-icon">🔐</div>
                    <h3>دسترسی‌های نقش‌محور (RBAC)</h3>
                    <p>سطوح دسترسی دقیق برای تضمین امنیت داده‌ها در سطوح مختلف سازمان.</p>
                    <ul class="service-features">
                        <li>نقش‌های مدیر و کارشناس</li>
                        <li>قوانین رویت داده‌ها</li>
                        <li>لاگ‌های حسابرسی (Audit)</li>
                        <li>احراز هویت امن</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Laravel Gates</span>
                        <span class="tech-badge">JWT</span>
                        <span class="tech-badge">Security</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Section -->
        <section class="networks-section">
            <h2 class="section-title">پشته فناوری (Tech Stack)</h2>
            <p class="section-description">بک‌اند قدرتمند و فرانت‌اند واکنش‌گرا برای CRM سازمانی</p>

            <div class="networks-grid">
                <div class="network-item"><div class="network-logo">🐘</div><span class="network-name">Laravel</span></div>
                <div class="network-item"><div class="network-logo">💚</div><span class="network-name">Vue.js</span></div>
                <div class="network-item"><div class="network-logo">🐬</div><span class="network-name">MySQL</span></div>
                <div class="network-item"><div class="network-logo">🔗</div><span class="network-name">REST API</span></div>
                <div class="network-item"><div class="network-logo">🔴</div><span class="network-name">Redis</span></div>
                <div class="network-item"><div class="network-logo">📈</div><span class="network-name">Chart.js</span></div>
                <div class="network-item"><div class="network-logo">🐳</div><span class="network-name">Docker</span></div>
                <div class="network-item"><div class="network-logo">🔒</div><span class="network-name">OAuth2</span></div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="blockchain-process-section">
            <h2 class="section-title">جریان کاری قیف فروش</h2>
            <p class="section-description">از جذب سرنخ تا بستن معامله</p>

            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>جذب و اعتبارسنجی</h3>
                    <p>سرنخ‌ها وارد سیستم می‌شوند و بر اساس پتانسیل تبدیل شدن به مشتری امتیازدهی می‌شوند.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>تعامل و پرورش</h3>
                    <p>کارشناسان پیگیری‌ها را زمان‌بندی می‌کنند، تماس‌ها را ثبت کرده و ارتباطات هدفمند ارسال می‌کنند.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>پیشنهاد و مذاکره</h3>
                    <p>معاملات در قیف کانبان جابجا می‌شوند تا زمانی که پیشنهادات ارائه و مذاکرات انجام شود.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>بستن معامله و آنبوردینگ</h3>
                    <p>معامله با موفقیت بسته شده و مشتری رسماً وارد سیستم کارگزاری می‌شود.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="blockchain-consultation-cta">
            <div class="cta-content">
                <h2>💼 به یک CRM اختصاصی برای کسب‌وکار خود نیاز دارید؟</h2>
                <p>سیستم‌های آماده جوابگوی نیاز شما نیست؟ بیایید یک سیستم کاملاً اختصاصی متناسب با جریان کاری فروش شما بسازیم.</p>
                <div class="cta-button" id="mainProjectConsultationButton">رزرو مشاوره رایگان</div>
            </div>
        </section>
    </div>

    <!-- Consultation Modal -->
    <div class="modal-overlay" id="projectConsultationModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">درخواست پروژه مشابه</h3>
                <button class="close-modal" id="closeProjectModal">&times;</button>
            </div>
            <?php
            $contact = get_key_value_url('contact_project_fa');
            echo do_shortcode('[contact-form-7 id="'.$contact.'" title="Isatis CRM Project Fa"]');
            ?>
        </div>
    </div>

    <script>
        const projectConsultationButton = document.getElementById('projectConsultationButton');
        const mainProjectConsultationButton = document.getElementById('mainProjectConsultationButton');
        const projectConsultationModal = document.getElementById('projectConsultationModal');
        const closeProjectModal = document.getElementById('closeProjectModal');

        if (projectConsultationButton) projectConsultationButton.addEventListener('click', () => projectConsultationModal.classList.add('active'));
        if (mainProjectConsultationButton) mainProjectConsultationButton.addEventListener('click', () => projectConsultationModal.classList.add('active'));
        if (closeProjectModal) closeProjectModal.addEventListener('click', () => projectConsultationModal.classList.remove('active'));
        if (projectConsultationModal) projectConsultationModal.addEventListener('click', (e) => {
            if (e.target === projectConsultationModal) projectConsultationModal.classList.remove('active');
        });
    </script>

<?php custom_footer(); ?>