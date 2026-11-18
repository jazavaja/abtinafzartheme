<?php
/**
 * Template Name: Simcap Jewelry Project Fa
 */

custom_header(); ?>

<style>
/* تم لوکس اختصاصی برای simcap.ir (طلایی و مشکی) - فارسی */
.simcap-theme {
    --gold-primary: #d4af37;
    --gold-glow: rgba(212, 175, 55, 0.25);
}
.simcap-theme .blockchain-hero {
    background: radial-gradient(circle at top, rgba(212, 175, 55, 0.1), transparent 70%);
}
.simcap-theme h1 {
    background: linear-gradient(135deg, #fff 0%, var(--gold-primary) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.simcap-theme .hero-badge {
    background: rgba(212, 175, 55, 0.1);
    border-color: rgba(212, 175, 55, 0.4);
    color: var(--gold-primary);
}
.simcap-theme .service-card {
    background: linear-gradient(145deg, rgba(20, 20, 20, 0.9), rgba(10, 10, 10, 0.9));
    border-color: rgba(212, 175, 55, 0.2);
}
.simcap-theme .service-card:hover {
    border-color: var(--gold-primary);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5), 0 0 20px var(--gold-glow);
    transform: translateY(-5px);
}
.simcap-theme .service-icon {
    background: linear-gradient(135deg, #2a2a2a, #111);
    border: 1px solid var(--gold-primary);
    color: var(--gold-primary);
}
.simcap-theme .tech-badge {
    background: rgba(212, 175, 55, 0.1);
    border-color: rgba(212, 175, 55, 0.3);
    color: var(--gold-primary);
}
.simcap-theme .cta-button {
    background: linear-gradient(135deg, var(--gold-primary), #b38b22);
    color: #000;
    border: none;
    box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
}
.simcap-theme .cta-button:hover {
    box-shadow: 0 15px 30px rgba(212, 175, 55, 0.4);
    transform: translateY(-3px);
}
.simcap-theme .section-title {
    color: var(--gold-primary);
}
.simcap-theme .process-step {
    border-color: rgba(212, 175, 55, 0.3);
}
.simcap-theme .step-number {
    background: var(--gold-primary);
    color: #000;
}
</style>

    <div class="blockchain-services-container simcap-theme">
        <!-- Hero Section -->
        <section class="blockchain-hero">
            <div class="hero-content">
                <h1>💎 فروشگاه طلا و جواهرات آنلاین</h1>
                <p>پلتفرم فروش طلا و جواهرات لوکس آنلاین با درگاه پرداخت امن، مدیریت انبار و رهگیری سفارش.</p>
                <div class="hero-badges">
                    <span class="hero-badge">Laravel</span>
                    <span class="hero-badge">Vue.js</span>
                    <span class="hero-badge">MySQL</span>
                    <span class="hero-badge">درگاه پرداخت</span>
                </div>
                <div class="cta-button" id="projectConsultationButton">ساخت فروشگاه مشابه</div>
            </div>
            <div class="hero-visual">
                <div class="visual-element">🛍️</div>
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="blockchain-services-section">
            <h2 class="section-title">قابلیت‌های کلیدی</h2>
            <p class="section-description">تجربه‌ای بی‌نقص و امن از خرید آنلاین</p>

            <div class="services-grid">
                <!-- Product Catalog -->
                <div class="service-card">
                    <div class="service-icon">💍</div>
                    <h3>کاتالوگ داینامیک محصولات</h3>
                    <p>کاتالوگ با سرعت بالا همراه با فیلترینگ پیشرفته، زوم روی تصاویر و مشخصات دقیق محصولات.</p>
                    <ul class="service-features">
                        <li>فیلترینگ بر اساس دسته‌بندی</li>
                        <li>گالری تصاویر با کیفیت بالا</li>
                        <li>محاسبه‌گر وزن و قیمت</li>
                        <li>نمایش محصولات مشابه</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Vue.js</span>
                        <span class="tech-badge">Laravel</span>
                        <span class="tech-badge">Vuex</span>
                    </div>
                </div>

                <!-- Secure Payment -->
                <div class="service-card">
                    <div class="service-icon">💳</div>
                    <h3>پرداخت امن</h3>
                    <p>امنیت در سطح بانکی با فرآیند پرداخت چند مرحله‌ای و اتصال به درگاه‌های پرداخت معتبر.</p>
                    <ul class="service-features">
                        <li>رمزنگاری SSL</li>
                        <li>اتصال به درگاه پرداخت</li>
                        <li>امکان خرید مهمان</li>
                        <li>خلاصه سفارش شفاف</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Payment API</span>
                        <span class="tech-badge">Security</span>
                        <span class="tech-badge">OTP</span>
                    </div>
                </div>

                <!-- Inventory Management -->
                <div class="service-card">
                    <div class="service-icon">📦</div>
                    <h3>مدیریت انبار</h3>
                    <p>ردیابی لحظه‌ای موجودی انبار بر اساس وزن، عیار و نوسانات لحظه‌ای قیمت طلا.</p>
                    <ul class="service-features">
                        <li>همگام‌سازی با قیمت لحظه‌ای طلا</li>
                        <li>هشدارهای موجودی</li>
                        <li>پشتیبانی از چند انبار</li>
                        <li>یکپارچه‌سازی با بارکد</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">MySQL</span>
                        <span class="tech-badge">Cron Jobs</span>
                        <span class="tech-badge">APIs</span>
                    </div>
                </div>

                <!-- Order Tracking -->
                <div class="service-card">
                    <div class="service-icon">🚚</div>
                    <h3>رهگیری سفارش و ارسال</h3>
                    <p>رهگیری کامل سفارش از مرحله پردازش تا تحویل امن درب منزل مشتری.</p>
                    <ul class="service-features">
                        <li>اطلاع‌رسانی پیامکی</li>
                        <li>کد رهگیری مرسوله</li>
                        <li>بسته‌بندی امن و بیمه</li>
                        <li>به‌روزرسانی وضعیت تحویل</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">SMS API</span>
                        <span class="tech-badge">Logistics</span>
                        <span class="tech-badge">Webhooks</span>
                    </div>
                </div>

                <!-- Admin Dashboard -->
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3>پنل مدیریت قدرتمند</h3>
                    <p>داشبورد جامع برای مدیریت محصولات، سفارشات، مشتریان و گزارش‌های مالی.</p>
                    <ul class="service-features">
                        <li>تحلیل فروش</li>
                        <li>مدیریت مشتریان</li>
                        <li>سیستم کد تخفیف</li>
                        <li>دسترسی‌های نقش‌محور</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Laravel Nova</span>
                        <span class="tech-badge">Chart.js</span>
                        <span class="tech-badge">RBAC</span>
                    </div>
                </div>

                <!-- User Accounts -->
                <div class="service-card">
                    <div class="service-icon">👤</div>
                    <h3>حساب‌های کاربری مشتریان</h3>
                    <p>پروفایل کاربرپسند برای مدیریت آدرس‌ها، علاقه‌مندی‌ها، تاریخچه سفارشات و محصولات ذخیره شده.</p>
                    <ul class="service-features">
                        <li>تاریخچه سفارشات</li>
                        <li>لیست علاقه‌مندی‌ها (Wishlist)</li>
                        <li>دفترچه آدرس‌ها</li>
                        <li>تنظیمات پروفایل</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Auth</span>
                        <span class="tech-badge">Sessions</span>
                        <span class="tech-badge">JWT</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Section -->
        <section class="networks-section">
            <h2 class="section-title">پشته فناوری (Tech Stack)</h2>
            <p class="section-description">تکنولوژی‌های قدرتمند برای تضمین سرعت و پایداری فروشگاه</p>

            <div class="networks-grid">
                <div class="network-item"><div class="network-logo">🐘</div><span class="network-name">Laravel</span></div>
                <div class="network-item"><div class="network-logo">💚</div><span class="network-name">Vue.js</span></div>
                <div class="network-item"><div class="network-logo">🐬</div><span class="network-name">MySQL</span></div>
                <div class="network-item"><div class="network-logo">💳</div><span class="network-name">Payment Gateway</span></div>
                <div class="network-item"><div class="network-logo">⚡</div><span class="network-name">Redis Cache</span></div>
                <div class="network-item"><div class="network-logo">📦</div><span class="network-name">Docker</span></div>
                <div class="network-item"><div class="network-logo">🔍</div><span class="network-name">Elasticsearch</span></div>
                <div class="network-item"><div class="network-logo">🔒</div><span class="network-name">SSL / Security</span></div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="blockchain-consultation-cta">
            <div class="cta-content">
                <h2>💼 به یک پلتفرم فروشگاهی نیاز دارید؟</h2>
                <p>می‌خواهید فروشگاه آنلاین خودتان را با طراحی اختصاصی و پرداخت امن راه‌اندازی کنید؟ بیایید صحبت کنیم.</p>
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
            echo do_shortcode('[contact-form-7 id="'.$contact.'" title="Simcap Project Fa"]');
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