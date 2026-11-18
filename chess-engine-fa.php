<?php
/**
 * Template Name: Chess Engine Project Fa
 */

custom_header(); ?>

<style>
/* تم تحلیلی و ماتریکسی (Emerald/Green) - فارسی */
.chess-theme {
    --chess-primary: #10b981;
    --chess-secondary: #059669;
    --chess-glow: rgba(16, 185, 129, 0.25);
}
.chess-theme .blockchain-hero {
    background: radial-gradient(circle at top, rgba(16, 185, 129, 0.1), transparent 70%);
}
.chess-theme h1 {
    background: linear-gradient(135deg, #fff 0%, var(--chess-primary) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.chess-theme .hero-badge {
    background: rgba(16, 185, 129, 0.1);
    border-color: rgba(16, 185, 129, 0.4);
    color: var(--chess-primary);
}
.chess-theme .service-card {
    background: linear-gradient(145deg, rgba(20, 25, 30, 0.95), rgba(10, 15, 20, 0.95));
    border-color: rgba(16, 185, 129, 0.2);
}
.chess-theme .service-card:hover {
    border-color: var(--chess-primary);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5), 0 0 25px var(--chess-glow);
    transform: translateY(-5px);
}
.chess-theme .service-icon {
    background: linear-gradient(135deg, #1e293b, #0f172a);
    border: 1px solid var(--chess-primary);
    color: var(--chess-primary);
}
.chess-theme .tech-badge {
    background: rgba(16, 185, 129, 0.1);
    border-color: rgba(16, 185, 129, 0.3);
    color: var(--chess-primary);
}
.chess-theme .cta-button {
    background: linear-gradient(135deg, var(--chess-primary), var(--chess-secondary));
    color: #0f172a;
    border: none;
    box-shadow: 0 10px 20px rgba(16, 185, 129, 0.2);
}
.chess-theme .cta-button:hover {
    box-shadow: 0 15px 35px rgba(16, 185, 129, 0.4);
    transform: translateY(-3px);
}
.chess-theme .section-title {
    color: var(--chess-primary);
}
.chess-theme .process-step {
    border-color: rgba(16, 185, 129, 0.3);
}
.chess-theme .step-number {
    background: var(--chess-primary);
    color: #0f172a;
}
</style>

    <div class="blockchain-services-container chess-theme">
        <!-- Hero Section -->
        <section class="blockchain-hero">
            <div class="hero-content">
                <h1>♟️ موتور هوشمند شطرنج</h1>
                <p>موتور شطرنج با پرفورمنس بالا که در زبان Rust و با استفاده از شبکه‌های عصبی NNUE برای ارزیابی پیشرفته موقعیت و جستجوی حرکات نوشته شده است.</p>
                <div class="hero-badges">
                    <span class="hero-badge">Rust</span>
                    <span class="hero-badge">NNUE</span>
                    <span class="hero-badge">هوش مصنوعی شطرنج</span>
                    <span class="hero-badge">Alpha-Beta</span>
                </div>
                <div class="cta-button" id="projectConsultationButton">گفتگو درباره پروژه مشابه</div>
            </div>
            <div class="hero-visual">
                <div class="visual-element">🧠</div>
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="blockchain-services-section">
            <h2 class="section-title">قابلیت‌های کلیدی</h2>
            <p class="section-description">مهندسی شده برای سرعت، دقت و برتری تاکتیکی</p>

            <div class="services-grid">
                <!-- High-Performance Core -->
                <div class="service-card">
                    <div class="service-icon">🦀</div>
                    <h3>هسته قدرتمند مبتنی بر Rust</h3>
                    <p>ایمنی حافظه و انتزاع‌های بدون هزینه (Zero-Cost) برای حداکثر سرعت اجرا و پایداری.</p>
                    <ul class="service-features">
                        <li>انتزاع‌های بدون هزینه</li>
                        <li>ایمنی کامل حافظه</li>
                        <li>نمایش با Bitboard</li>
                        <li>تولید حرکات فوق‌سریع</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Rust</span>
                        <span class="tech-badge">Cargo</span>
                        <span class="tech-badge">Bitboards</span>
                    </div>
                </div>

                <!-- NNUE Evaluation -->
                <div class="service-card">
                    <div class="service-icon">🧠</div>
                    <h3>ارزیابی با NNUE</h3>
                    <p>شبکه عصبی با قابلیت به‌روزرسانی کارآمد (NNUE) که مستقیماً در درخت جستجو اجرا می‌شود.</p>
                    <ul class="service-features">
                        <li>به‌روزرسانی افزایشی (Incremental)</li>
                        <li>شبکه‌های عصبی عمیق</li>
                        <li>ویژگی‌های نسبی شاه و مهره</li>
                        <li>استنتاج بسیار بهینه</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">NNUE</span>
                        <span class="tech-badge">Python</span>
                        <span class="tech-badge">PyTorch</span>
                    </div>
                </div>

                <!-- Advanced Search -->
                <div class="service-card">
                    <div class="service-icon">🔍</div>
                    <h3>الگوریتم‌های جستجوی پیشرفته</h3>
                    <p>تکنیک‌های هرس (Pruning) پیشرفته برای جستجو در عمق بیشتر و زمان کمتر.</p>
                    <ul class="service-features">
                        <li>هرس آلفا-بتا (Alpha-Beta)</li>
                        <li>عمیق‌سازی تکراری</li>
                        <li>جداول جابجایی (Transposition)</li>
                        <li>هرس حرکات پوچ (Null Move)</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Minimax</span>
                        <span class="tech-badge">Zobrist Hashing</span>
                        <span class="tech-badge">الگوریتم‌ها</span>
                    </div>
                </div>

                <!-- UCI Protocol -->
                <div class="service-card">
                    <div class="service-icon">🔌</div>
                    <h3>پروتکل استاندارد UCI</h3>
                    <p>انطباق کامل با پروتکل رابط جهانی شطرنج (UCI) برای یکپارچه‌سازی یکپارچه با رابط‌های کاربری.</p>
                    <ul class="service-features">
                        <li>سازگاری با تمام رابط‌ها</li>
                        <li>پشتیبانی از Arena / CuteChess</li>
                        <li>مدیریت دستورات استاندارد</li>
                        <li>پشتیبانی از رشته FEN</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">UCI</span>
                        <span class="tech-badge">GUI</span>
                        <span class="tech-badge">FEN</span>
                    </div>
                </div>

                <!-- Multithreading -->
                <div class="service-card">
                    <div class="service-icon">⚡</div>
                    <h3>پردازش چند رشته‌ای (Lazy SMP)</h3>
                    <p>استفاده از پردازنده‌های چند هسته‌ای برای جستجوی همزمان در بخش‌های مختلف درخت حرکات.</p>
                    <ul class="service-features">
                        <li>پیاده‌سازی Lazy SMP</li>
                        <li>ساختار داده‌های Thread-Safe</li>
                        <li>جداول هش اشتراکی</li>
                        <li>عملکرد مقیاس‌پذیر</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Rayon</span>
                        <span class="tech-badge">Multi-core</span>
                        <span class="tech-badge">Concurrency</span>
                    </div>
                </div>

                <!-- Endgame Tablebases -->
                <div class="service-card">
                    <div class="service-icon">📚</div>
                    <h3>جداول انتهایی Syzygy</h3>
                    <p>بازی کامل و بی‌نقص در مراحل انتهایی بازی با استفاده از دیتابیس‌های از پیش محاسبه شده.</p>
                    <ul class="service-features">
                        <li>کاوش در Syzygy 6-Men</li>
                        <li>دانش کامل انتهای بازی</li>
                        <li>تشخیص دقیق مهره‌ها</li>
                        <li>دسترسی سریع به دیسک</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Syzygy</span>
                        <span class="tech-badge">File I/O</span>
                        <span class="tech-badge">Endgame</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Section -->
        <section class="networks-section">
            <h2 class="section-title">پشته فناوری (Tech Stack)</h2>
            <p class="section-description">پایه‌های فنی یک موتور شطرنج مدرن</p>

            <div class="networks-grid">
                <div class="network-item"><div class="network-logo">🦀</div><span class="network-name">Rust</span></div>
                <div class="network-item"><div class="network-logo">🧠</div><span class="network-name">NNUE</span></div>
                <div class="network-item"><div class="network-logo">🐍</div><span class="network-name">Python (آموزش)</span></div>
                <div class="network-item"><div class="network-logo">🔍</div><span class="network-name">Alpha-Beta</span></div>
                <div class="network-item"><div class="network-logo">🔌</div><span class="network-name">UCI Protocol</span></div>
                <div class="network-item"><div class="network-logo">⚡</div><span class="network-name">Multithreading</span></div>
                <div class="network-item"><div class="network-logo">📦</div><span class="network-name">Cargo</span></div>
                <div class="network-item"><div class="network-logo">♟️</div><span class="network-name">Chess AI</span></div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="blockchain-process-section">
            <h2 class="section-title">معماری موتور</h2>
            <p class="section-description">از وضعیت صفحه تا انتخاب بهترین حرکت</p>

            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>نمایش صفحه</h3>
                    <p>از Bitboardها برای نمایش مهره‌ها استفاده می‌شود که امکان تولید حرکات را با سرعت نور فراهم می‌کند.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>درخت جستجو</h3>
                    <p>هرس آلفا-بتا اعمال می‌شود تا فقط امیدوارکننده‌ترین حرکات بررسی شوند.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>ارزیابی NNUE</h3>
                    <p>در برگ‌های درخت، شبکه عصبی NNUE موقعیت را ارزیابی می‌کند تا مشخص شود چه کسی در حال بردن است.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>خروجی حرکت</h3>
                    <p>موتور بهترین حرکت را در قالب UCI برای اجرا در رابط کاربری (GUI) خروجی می‌دهد.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="blockchain-consultation-cta">
            <div class="cta-content">
                <h2>💼 به راه‌حل‌های هوش مصنوعی با پرفورمنس بالا نیاز دارید؟</h2>
                <p>از موتورهای شطرنج تا الگوریتم‌های پیچیده و مدل‌های هوش مصنوعی، ما نرم‌افزارهای حیاتی از نظر عملکرد را می‌سازیم.</p>
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
            echo do_shortcode('[contact-form-7 id="'.$contact.'" title="Chess Engine Project Fa"]');
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