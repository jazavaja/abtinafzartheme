<?php
/**
 * Template Name: Crypto Exchange Project Fa
 */

custom_header(); ?>

<style>
/* تم نئونی کریپتو (Cyan/Blue) - فارسی */
.crypto-theme {
    --crypto-primary: #00f2fe;
    --crypto-secondary: #4facfe;
    --crypto-glow: rgba(0, 242, 254, 0.25);
}
.crypto-theme .blockchain-hero {
    background: radial-gradient(circle at top, rgba(0, 242, 254, 0.1), transparent 70%);
}
.crypto-theme h1 {
    background: linear-gradient(135deg, #fff 0%, var(--crypto-primary) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.crypto-theme .hero-badge {
    background: rgba(0, 242, 254, 0.1);
    border-color: rgba(0, 242, 254, 0.4);
    color: var(--crypto-primary);
}
.crypto-theme .service-card {
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.9), rgba(10, 10, 15, 0.9));
    border-color: rgba(0, 242, 254, 0.2);
}
.crypto-theme .service-card:hover {
    border-color: var(--crypto-primary);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5), 0 0 25px var(--crypto-glow);
    transform: translateY(-5px);
}
.crypto-theme .service-icon {
    background: linear-gradient(135deg, #1e293b, #0f172a);
    border: 1px solid var(--crypto-primary);
    color: var(--crypto-primary);
}
.crypto-theme .tech-badge {
    background: rgba(0, 242, 254, 0.1);
    border-color: rgba(0, 242, 254, 0.3);
    color: var(--crypto-primary);
}
.crypto-theme .cta-button {
    background: linear-gradient(135deg, var(--crypto-primary), var(--crypto-secondary));
    color: #0f172a;
    border: none;
    box-shadow: 0 10px 20px rgba(0, 242, 254, 0.2);
}
.crypto-theme .cta-button:hover {
    box-shadow: 0 15px 35px rgba(0, 242, 254, 0.4);
    transform: translateY(-3px);
}
.crypto-theme .section-title {
    color: var(--crypto-primary);
}
.crypto-theme .process-step {
    border-color: rgba(0, 242, 254, 0.3);
}
.crypto-theme .step-number {
    background: var(--crypto-primary);
    color: #0f172a;
}
</style>

    <div class="blockchain-services-container crypto-theme">
        <!-- Hero Section -->
        <section class="blockchain-hero">
            <div class="hero-content">
                <h1>🪙 صرافی ارز دیجیتال</h1>
                <p>سامانه خرید و فروش ارزهای دیجیتال و کریپتوکارنسی با کیف پول اختصاصی، تراکنش‌های امن و گزارش‌دهی لحظه‌ای.</p>
                <div class="hero-badges">
                    <span class="hero-badge">Node.js</span>
                    <span class="hero-badge">React</span>
                    <span class="hero-badge">MongoDB</span>
                    <span class="hero-badge">Blockchain</span>
                </div>
                <div class="cta-button" id="projectConsultationButton">ساخت صرافی مشابه</div>
            </div>
            <div class="hero-visual">
                <div class="visual-element">📈</div>
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="blockchain-services-section">
            <h2 class="section-title">قابلیت‌های کلیدی</h2>
            <p class="section-description">زیرساخت سازمانی برای معاملات پرسرعت ارز دیجیتال</p>

            <div class="services-grid">
                <!-- Trading Engine -->
                <div class="service-card">
                    <div class="service-icon">⚙️</div>
                    <h3>موتور معاملات پرسرعت</h3>
                    <p>موتور تطبیق سفارشات (Matching Engine) با تاخیر بسیار پایین، قادر به پردازش هزاران تراکنش در ثانیه.</p>
                    <ul class="service-features">
                        <li>تطبیق سفارشات در لحظه</li>
                        <li>سفارشات Limit و Market</li>
                        <li>حد ضرر (Stop-Loss) و حد سود</li>
                        <li>توان عملیاتی بالا</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Node.js</span>
                        <span class="tech-badge">WebSockets</span>
                        <span class="tech-badge">Redis</span>
                    </div>
                </div>

                <!-- Multi-Currency Wallet -->
                <div class="service-card">
                    <div class="service-icon">👛</div>
                    <h3>کیف پول چند ارزی</h3>
                    <p>کیف پول‌های امن گرم و سرد (Hot/Cold) با پشتیبانی از طیف گسترده‌ای از ارزهای دیجیتال.</p>
                    <ul class="service-features">
                        <li>پشتیبانی از BTC, ETH, USDT</li>
                        <li>یکپارچه‌سازی با کلد استوریج</li>
                        <li>واریز و برداشت آنی</li>
                        <li>تولید آدرس اختصاصی</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Blockchain API</span>
                        <span class="tech-badge">Web3</span>
                        <span class="tech-badge">Security</span>
                    </div>
                </div>

                <!-- Advanced Charts -->
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3>چارت‌های معاملاتی پیشرفته</h3>
                    <p>ابزارهای تحلیل تکنیکال تعاملی و حرفه‌ای همراه با داده‌های لحظه‌ای بازار.</p>
                    <ul class="service-features">
                        <li>نمودارهای شمعی (Candlestick)</li>
                        <li>اندیکاتورهای تکنیکال</li>
                        <li>نمودار عمق بازار</li>
                        <li>به‌روزرسانی لحظه‌ای قیمت</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">React</span>
                        <span class="tech-badge">TradingView</span>
                        <span class="tech-badge">D3.js</span>
                    </div>
                </div>

                <!-- KYC & Security -->
                <div class="service-card">
                    <div class="service-icon">🛡️</div>
                    <h3>احراز هویت و امنیت بالا</h3>
                    <p>پروتکل‌های امنیتی در سطح بانکی و سیستم‌های خودکار احراز هویت.</p>
                    <ul class="service-features">
                        <li>احراز هویت خودکار (KYC/AML)</li>
                        <li>تایید دو مرحله‌ای (2FA)</li>
                        <li>محافظت در برابر DDoS</li>
                        <li>لیست سفید آدرس‌های برداشت</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">JWT</span>
                        <span class="tech-badge">OAuth</span>
                        <span class="tech-badge">Encryption</span>
                    </div>
                </div>

                <!-- Liquidity Management -->
                <div class="service-card">
                    <div class="service-icon">💧</div>
                    <h3>مدیریت نقدینگی</h3>
                    <p>اتصال به تامین‌کنندگان نقدینگی خارجی برای تضمین عمق بازار و کاهش لغزش قیمت (Slippage).</p>
                    <ul class="service-features">
                        <li>تجمیع نقدینگی از طریق API</li>
                        <li>ربات‌های بازارساز (Market Maker)</li>
                        <li>مدیریت اسپرد (Spread)</li>
                        <li>عمق دفتر سفارشات</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">REST API</span>
                        <span class="tech-badge">WebSockets</span>
                        <span class="tech-badge">MongoDB</span>
                    </div>
                </div>

                <!-- Reporting & Admin -->
                <div class="service-card">
                    <div class="service-icon">📑</div>
                    <h3>پنل مدیریت و گزارش‌دهی</h3>
                    <p>داشبورد جامع برای مدیریت کاربران، پایش معاملات و مدیریت گزارش‌های مالی.</p>
                    <ul class="service-features">
                        <li>مدیریت کاربران</li>
                        <li>پایش تراکنش‌ها</li>
                        <li>تنظیمات کارمزد</li>
                        <li>گزارش‌های مالی</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Node.js</span>
                        <span class="tech-badge">React Admin</span>
                        <span class="tech-badge">MongoDB</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Section -->
        <section class="networks-section">
            <h2 class="section-title">پشته فناوری (Tech Stack)</h2>
            <p class="section-description">معماری مقیاس‌پذیر برای معاملات با فرکانس بالا</p>

            <div class="networks-grid">
                <div class="network-item"><div class="network-logo">🟢</div><span class="network-name">Node.js</span></div>
                <div class="network-item"><div class="network-logo">⚛️</div><span class="network-name">React</span></div>
                <div class="network-item"><div class="network-logo">🍃</div><span class="network-name">MongoDB</span></div>
                <div class="network-item"><div class="network-logo">🔗</div><span class="network-name">Blockchain API</span></div>
                <div class="network-item"><div class="network-logo">🔴</div><span class="network-name">Redis</span></div>
                <div class="network-item"><div class="network-logo">⚡</div><span class="network-name">WebSockets</span></div>
                <div class="network-item"><div class="network-logo">🐳</div><span class="network-name">Docker</span></div>
                <div class="network-item"><div class="network-logo">🔒</div><span class="network-name">SSL / KYC</span></div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="blockchain-process-section">
            <h2 class="section-title">فرآیند معاملات</h2>
            <p class="section-description">کاربران چگونه با صرافی تعامل می‌کنند</p>

            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>ثبت‌نام و احراز هویت</h3>
                    <p>کاربران ثبت‌نام کرده، هویت خود را تایید کرده و حساب خود را با 2FA امن می‌کنند.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>واریز وجه</h3>
                    <p>کاربران ریال یا ارز دیجیتال خود را به کیف پول‌های امن صرافی واریز می‌کنند.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>ثبت سفارش</h3>
                    <p>کاربران سفارشات خرید/فروش خود را ثبت می‌کنند که بلافاصله توسط موتور معاملات تطبیق داده می‌شوند.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>برداشت دارایی</h3>
                    <p>کاربران دارایی‌های خود را به صورت امن به کیف پول‌های خارجی یا حساب‌های بانکی برداشت می‌کنند.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="blockchain-consultation-cta">
            <div class="cta-content">
                <h2>💼 قصد راه‌اندازی صرافی ارز دیجیتال دارید؟</h2>
                <p>به یک پلتفرم معاملاتی امن، سریع و پایدار نیاز دارید؟ بیایید در یک جلسه مشاوره رایگان درباره پروژه شما صحبت کنیم.</p>
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
            echo do_shortcode('[contact-form-7 id="'.$contact.'" title="Crypto Exchange Project Fa"]');
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