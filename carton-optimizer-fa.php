<?php
/**
 * Template Name: Carton Optimizer Project Fa
 */

custom_header(); ?>

<style>
/* تم صنعتی و لجستیکی (Industrial Amber) - فارسی */
.carton-theme {
    --carton-primary: #f59e0b;
    --carton-secondary: #d97706;
    --carton-glow: rgba(245, 158, 11, 0.25);
}
.carton-theme .blockchain-hero {
    background: radial-gradient(circle at top, rgba(245, 158, 11, 0.1), transparent 70%);
}
.carton-theme h1 {
    background: linear-gradient(135deg, #fff 0%, var(--carton-primary) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.carton-theme .hero-badge {
    background: rgba(245, 158, 11, 0.1);
    border-color: rgba(245, 158, 11, 0.4);
    color: var(--carton-primary);
}
.carton-theme .service-card {
    background: linear-gradient(145deg, rgba(20, 25, 30, 0.95), rgba(10, 15, 20, 0.95));
    border-color: rgba(245, 158, 11, 0.2);
}
.carton-theme .service-card:hover {
    border-color: var(--carton-primary);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5), 0 0 25px var(--carton-glow);
    transform: translateY(-5px);
}
.carton-theme .service-icon {
    background: linear-gradient(135deg, #1e293b, #0f172a);
    border: 1px solid var(--carton-primary);
    color: var(--carton-primary);
}
.carton-theme .tech-badge {
    background: rgba(245, 158, 11, 0.1);
    border-color: rgba(245, 158, 11, 0.3);
    color: var(--carton-primary);
}
.carton-theme .cta-button {
    background: linear-gradient(135deg, var(--carton-primary), var(--carton-secondary));
    color: #0f172a;
    border: none;
    box-shadow: 0 10px 20px rgba(245, 158, 11, 0.2);
}
.carton-theme .cta-button:hover {
    box-shadow: 0 15px 35px rgba(245, 158, 11, 0.4);
    transform: translateY(-3px);
}
.carton-theme .section-title {
    color: var(--carton-primary);
}
.carton-theme .process-step {
    border-color: rgba(245, 158, 11, 0.3);
}
.carton-theme .step-number {
    background: var(--carton-primary);
    color: #0f172a;
}
</style>

    <div class="blockchain-services-container carton-theme">
        <!-- Hero Section -->
        <section class="blockchain-hero">
            <div class="hero-content">
                <h1>📦 بهینه‌سازی کارتن و پالت</h1>
                <p>نرم‌افزار هوشمند برای بهینه‌سازی برش کارتن، چیدمان کالا روی پالت و کاهش هدررفت مواد با استفاده از الگوریتم‌های پیشرفته.</p>
                <div class="hero-badges">
                    <span class="hero-badge">Python</span>
                    <span class="hero-badge">OR-Tools</span>
                    <span class="hero-badge">الگوریتم</span>
                    <span class="hero-badge">لجستیک</span>
                </div>
                <div class="cta-button" id="projectConsultationButton">بهینه‌سازی لجستیک شما</div>
            </div>
            <div class="hero-visual">
                <div class="visual-element">🏭</div>
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="blockchain-services-section">
            <h2 class="section-title">قابلیت‌های کلیدی</h2>
            <p class="section-description">حداکثرسازی بهره‌وری در انبارداری و بسته‌بندی</p>

            <div class="services-grid">
                <!-- Carton Optimization -->
                <div class="service-card">
                    <div class="service-icon">📐</div>
                    <h3>بهینه‌سازی برش کارتن</h3>
                    <p>الگوریتم‌های ریاضی برای تعیین بهینه‌ترین الگوهای برش جهت به حداقل رساندن هدررفت مقوا.</p>
                    <ul class="service-features">
                        <li>مسئله برش دو بعدی (Cutting Stock)</li>
                        <li>محاسبه حداقل هدررفت</li>
                        <li>تولید سایزهای سفارشی</li>
                        <li>علامت‌گذاری خودکار</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Python</span>
                        <span class="tech-badge">OR-Tools</span>
                        <span class="tech-badge">Math</span>
                    </div>
                </div>

                <!-- Pallet Layout -->
                <div class="service-card">
                    <div class="service-icon">📦</div>
                    <h3>برنامه‌ریزی چیدمان پالت</h3>
                    <p>الگوریتم‌های بسته‌بندی سه‌بعدی (3D Bin Packing) برای چیدمان جعبه‌ها روی پالت با حداکثر استفاده از فضا.</p>
                    <ul class="service-features">
                        <li>بسته‌بندی سه‌بعدی</li>
                        <li>توزیع وزن</li>
                        <li>محدودیت‌های پایداری</li>
                        <li>حداکثر استفاده از حجم</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">OR-Tools</span>
                        <span class="tech-badge">3D Math</span>
                        <span class="tech-badge">Heuristics</span>
                    </div>
                </div>

                <!-- 3D Visualization -->
                <div class="service-card">
                    <div class="service-icon">👁️</div>
                    <h3>نمایش سه‌بعدی تعاملی</h3>
                    <p>مشاهده دقیق چیدمان کارتن‌ها روی پالت در یک محیط سه‌بعدی قبل از بسته‌بندی.</p>
                    <ul class="service-features">
                        <li>چرخش و بزرگنمایی</li>
                        <li>نمای لایه به لایه</li>
                        <li>تشخیص برخورد (Collision)</li>
                        <li>خروجی نقشه (Blueprint)</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Three.js</span>
                        <span class="tech-badge">WebGL</span>
                        <span class="tech-badge">Python</span>
                    </div>
                </div>

                <!-- Constraint Solving -->
                <div class="service-card">
                    <div class="service-icon">⚙️</div>
                    <h3>حل محدودیت‌های پیچیده</h3>
                    <p>مدیریت محدودیت‌های دنیای واقعی مانند حداکثر وزن، اقلام شکستنی و محدودیت ارتفاع.</p>
                    <ul class="service-features">
                        <li>حداکثر وزن مجاز</li>
                        <li>قوانین اقلام شکستنی</li>
                        <li>محدودیت ارتفاع</li>
                        <li>محدودیت چیدمان روی هم</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">CP-SAT</span>
                        <span class="tech-badge">Linear Programming</span>
                        <span class="tech-badge">Logic</span>
                    </div>
                </div>

                <!-- Data Import/Export -->
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3>پردازش انبوه داده‌ها</h3>
                    <p>ورود هزاران سفارش از اکسل یا سیستم‌های ERP و بهینه‌سازی آن‌ها به صورت دسته‌ای.</p>
                    <ul class="service-features">
                        <li>یکپارچه‌سازی با Excel/CSV</li>
                        <li>اتصال به APIهای ERP</li>
                        <li>پردازش دسته‌ای (Batch)</li>
                        <li>گزارش‌های قابل خروجی</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Pandas</span>
                        <span class="tech-badge">REST API</span>
                        <span class="tech-badge">Excel</span>
                    </div>
                </div>

                <!-- Cloud Deployment -->
                <div class="service-card">
                    <div class="service-icon">☁️</div>
                    <h3>استقرار ابری</h3>
                    <p>اجرای الگوریتم‌های سنگین بهینه‌سازی روی سرورهای ابری بدون نیاز به سخت‌افزار قدرتمند.</p>
                    <ul class="service-features">
                        <li>پردازش مقیاس‌پذیر</li>
                        <li>پردازش سریع</li>
                        <li>دسترسی از هر جا</li>
                        <li>داده‌های امن</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Docker</span>
                        <span class="tech-badge">AWS</span>
                        <span class="tech-badge">FastAPI</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Section -->
        <section class="networks-section">
            <h2 class="section-title">پشته فناوری (Tech Stack)</h2>
            <p class="section-description">توانمندسازی لجستیک با ریاضیات پیشرفته</p>

            <div class="networks-grid">
                <div class="network-item"><div class="network-logo">🐍</div><span class="network-name">Python</span></div>
                <div class="network-item"><div class="network-logo">⚙️</div><span class="network-name">OR-Tools</span></div>
                <div class="network-item"><div class="network-logo">🐼</div><span class="network-name">Pandas</span></div>
                <div class="network-item"><div class="network-logo">🧊</div><span class="network-name">Three.js</span></div>
                <div class="network-item"><div class="network-logo">⚡</div><span class="network-name">FastAPI</span></div>
                <div class="network-item"><div class="network-logo">🐳</div><span class="network-name">Docker</span></div>
                <div class="network-item"><div class="network-logo">📊</div><span class="network-name">Excel / CSV</span></div>
                <div class="network-item"><div class="network-logo">🏭</div><span class="network-name">لجستیک</span></div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="blockchain-process-section">
            <h2 class="section-title">فرآیند بهینه‌سازی</h2>
            <p class="section-description">از داده‌های سفارش تا پالت ایده‌آل</p>

            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>ورود داده‌ها</h3>
                    <p>ابعاد، تعداد و محدودیت‌های اقلام (وزن، شکنندگی) بارگذاری می‌شوند.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>پردازش الگوریتم</h3>
                    <p>الگوریتم‌های OR-Tools هزاران چیدمان ممکن را به طور همزمان محاسبه می‌کنند.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>انتخاب بهترین راه‌حل</h3>
                    <p>سیستم چیدمانی با کمترین هزینه و بالاترین پایداری را شناسایی می‌کند.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>نمایش سه‌بعدی</h3>
                    <p>اپراتور مدل سه‌بعدی را مشاهده می‌کند تا تیم انبار را برای بسته‌بندی راهنمایی کند.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="blockchain-consultation-cta">
            <div class="cta-content">
                <h2>💼 هزینه‌های لجستیک خود را کاهش دهید</h2>
                <p>عملیات بسته‌بندی و انبارداری خود را بهینه کنید تا در هزینه‌ها و مواد صرفه‌جویی کنید. بیایید صحبت کنیم.</p>
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
            echo do_shortcode('[contact-form-7 id="'.$contact.'" title="Carton Optimizer Project Fa"]');
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