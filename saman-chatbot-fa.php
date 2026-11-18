<?php
/**
 * Template Name: Saman Bank Chatbot Project Fa
 */

custom_header(); ?>

    <div class="blockchain-services-container">
        <!-- Hero Section -->
        <section class="blockchain-hero">
            <div class="hero-content">
                <h1>🤖 ربات چت فین‌تک بانک سامان</h1>
                <p>چت‌بات هوشمند مبتنی بر RAG و مدل‌های زبانی بزرگ (LLM) برای پاسخ به سوالات مشتریان و انجام تراکنش‌های بانکی.</p>
                <div class="hero-badges">
                    <span class="hero-badge">🧠 RAG</span>
                    <span class="hero-badge">🤖 LLM</span>
                    <span class="hero-badge">🐍 Python</span>
                    <span class="hero-badge">⚡ FastAPI</span>
                </div>
                <div class="cta-button" id="projectConsultationButton">گفتگو درباره پروژه مشابه</div>
            </div>
            <div class="hero-visual">
                <div class="visual-element">💬</div>
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="blockchain-services-section">
            <h2 class="section-title">قابلیت‌های کلیدی</h2>
            <p class="section-description">آنچه این راه‌حل برای مشتریان بانکی فراهم می‌کند</p>

            <div class="services-grid">
                <!-- Natural Language Understanding -->
                <div class="service-card">
                    <div class="service-icon">💬</div>
                    <h3>درک زبان طبیعی (NLU)</h3>
                    <p>درک دقیق سوالات پیچیده بانکی به زبان فارسی و انگلیسی با استفاده از مدل‌های زبانی مدرن</p>
                    <ul class="service-features">
                        <li>تشخیص نیت (Intent Recognition)</li>
                        <li>استخراج موجودیت (Entity Extraction)</li>
                        <li>آگاهی از زمینه (Context Awareness)</li>
                        <li>مکالمات چند مرحله‌ای</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">LLM</span>
                        <span class="tech-badge">NLP</span>
                        <span class="tech-badge">Prompting</span>
                    </div>
                </div>

                <!-- Banking Transaction Automation -->
                <div class="service-card">
                    <div class="service-icon">🏦</div>
                    <h3>خودکارسازی تراکنش‌های بانکی</h3>
                    <p>اجرای امن عملیات بانکی از طریق دستورات زبان طبیعی</p>
                    <ul class="service-features">
                        <li>استعلام موجودی</li>
                        <li>انتقال وجه</li>
                        <li>پرداخت قبض</li>
                        <li>تاریخچه تراکنش‌ها</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">FastAPI</span>
                        <span class="tech-badge">REST API</span>
                        <span class="tech-badge">OAuth2</span>
                    </div>
                </div>

                <!-- RAG-based Knowledge Retrieval -->
                <div class="service-card">
                    <div class="service-icon">📚</div>
                    <h3>بازیابی دانش مبتنی بر RAG</h3>
                    <p>تولید تقویت‌شده با بازیابی (RAG) برای پاسخ‌های دقیق بر اساس سیاست‌های رسمی بانک</p>
                    <ul class="service-features">
                        <li>جستجوی برداری (Vector Search)</li>
                        <li>تکه‌بندی اسناد (Document Chunking)</li>
                        <li>رتبه‌بندی معنایی</li>
                        <li>ارجاع به منبع</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">RAG</span>
                        <span class="tech-badge">Vector DB</span>
                        <span class="tech-badge">Embeddings</span>
                    </div>
                </div>

                <!-- Secure Authentication -->
                <div class="service-card">
                    <div class="service-icon">🔐</div>
                    <h3>احراز هویت امن</h3>
                    <p>احراز هویت چندلایه برای محافظت از تراکنش‌های مالی حساس</p>
                    <ul class="service-features">
                        <li>تایید با رمز یکبار مصرف (OTP)</li>
                        <li>نشست‌های مبتنی بر توکن</li>
                        <li>محدودیت نرخ درخواست (Rate Limiting)</li>
                        <li>ثبت گزارش‌های حسابرسی</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">JWT</span>
                        <span class="tech-badge">OTP</span>
                        <span class="tech-badge">SSL</span>
                    </div>
                </div>

                <!-- Multi-language Support -->
                <div class="service-card">
                    <div class="service-icon">🌐</div>
                    <h3>پشتیبانی از چند زبان</h3>
                    <p>مکالمه روان به زبان‌های فارسی و انگلیسی با تشخیص خودکار زبان</p>
                    <ul class="service-features">
                        <li>پشتیبانی کامل از زبان فارسی</li>
                        <li>پشتیبانی از زبان انگلیسی</li>
                        <li>تشخیص خودکار زبان</li>
                        <li>توکن‌بندی اختصاصی فارسی</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Hazm</span>
                        <span class="tech-badge">i18n</span>
                        <span class="tech-badge">Unicode</span>
                    </div>
                </div>

                <!-- Analytics & Insights -->
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3>تحلیل و بینش</h3>
                    <p>داشبوردهای دقیق برای ردیابی مکالمات، دقت و رضایت مشتری</p>
                    <ul class="service-features">
                        <li>متریک‌های مکالمه</li>
                        <li>دقت پاسخ‌دهی</li>
                        <li>رضایت کاربران</li>
                        <li>گزارش‌های عملکرد</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">PostgreSQL</span>
                        <span class="tech-badge">Redis</span>
                        <span class="tech-badge">Grafana</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Section -->
        <section class="networks-section">
            <h2 class="section-title">پشته فناوری (Tech Stack)</h2>
            <p class="section-description">فناوری‌های مدرن و سطح تولید که نیروی محرکه این چت‌بات هستند</p>

            <div class="networks-grid">
                <div class="network-item">
                    <div class="network-logo">🐍</div>
                    <span class="network-name">Python</span>
                </div>
                <div class="network-item">
                    <div class="network-logo">⚡</div>
                    <span class="network-name">FastAPI</span>
                </div>
                <div class="network-item">
                    <div class="network-logo">🦜</div>
                    <span class="network-name">LangChain</span>
                </div>
                <div class="network-item">
                    <div class="network-logo">🤖</div>
                    <span class="network-name">OpenAI / Local LLM</span>
                </div>
                <div class="network-item">
                    <div class="network-logo">🧠</div>
                    <span class="network-name">Vector Database</span>
                </div>
                <div class="network-item">
                    <div class="network-logo">🐘</div>
                    <span class="network-name">PostgreSQL</span>
                </div>
                <div class="network-item">
                    <div class="network-logo">⚡</div>
                    <span class="network-name">Redis</span>
                </div>
                <div class="network-item">
                    <div class="network-logo">🐳</div>
                    <span class="network-name">Docker</span>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="blockchain-process-section">
            <h2 class="section-title">خط لوله RAG چگونه کار می‌کند</h2>
            <p class="section-description">از پرسش کاربر تا پاسخ دقیق بانکی</p>

            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>دریافت پرسش کاربر</h3>
                    <p>کاربر سوال بانکی یا درخواست تراکنش خود را از طریق رابط چت ارسال می‌کند</p>
                </div>

                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>بازیابی زمینه (Context)</h3>
                    <p>جستجوی برداری، اسناد مرتبط را از پایگاه دانش بانکی استخراج می‌کند</p>
                </div>

                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>تولید تقویت‌شده</h3>
                    <p>مدل زبانی (LLM) پرسش کاربر را با زمینه بازیابی شده ترکیب کرده و پاسخ دقیق تولید می‌کند</p>
                </div>

                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>اقدام و ثبت (Logging)</h3>
                    <p>ربات چت عملیات امن بانکی را انجام داده و تعامل را برای حسابرسی ثبت می‌کند</p>
                </div>
            </div>
        </section>

        <!-- Project Results / Highlights -->
        <section class="networks-section">
            <h2 class="section-title">نکات برجسته پروژه</h2>
            <p class="section-description">تأثیر قابل اندازه‌گیری که این راه‌حل ایجاد کرده است</p>

            <div class="networks-grid">
                <div class="network-item">
                    <div class="network-logo">📈</div>
                    <span class="network-name">~۹۵٪ دقت پاسخ</span>
                </div>
                <div class="network-item">
                    <div class="network-logo">⏱️</div>
                    <span class="network-name">زمان پاسخ کمتر از ۲ ثانیه</span>
                </div>
                <div class="network-item">
                    <div class="network-logo">🕐</div>
                    <span class="network-name">در دسترس بودن ۲۴/۷</span>
                </div>
                <div class="network-item">
                    <div class="network-logo">🌍</div>
                    <span class="network-name">فارسی و انگلیسی</span>
                </div>
                <div class="network-item">
                    <div class="network-logo">🔒</div>
                    <span class="network-name">امنیت در سطح بانکی</span>
                </div>
                <div class="network-item">
                    <div class="network-logo">🔗</div>
                    <span class="network-name">یکپارچه‌سازی REST API</span>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="blockchain-consultation-cta">
            <div class="cta-content">
                <h2>💼 ایده مشابهی دارید؟</h2>
                <p>به یک چت‌بات هوش مصنوعی یا راه‌حل مبتنی بر RAG برای کسب‌وکار خود نیاز دارید؟ اولین جلسه مشاوره ما کاملاً رایگان است</p>
                <div class="consultation-features">
                    <div class="feature-item">
                        <span class="feature-icon">🎯</span>
                        <span>تحلیل ایده پروژه</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">💡</span>
                        <span>معماری فنی</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">💰</span>
                        <span>برآورد هزینه و زمان</span>
                    </div>
                </div>
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
            // کلید فرم تماس را اینجا قرار دهید (مشابه contact_blockchain_fa)
            $contact = get_key_value_url('contact_project_fa'); 
            echo do_shortcode('[contact-form-7 id="'.$contact.'" title="Saman Chatbot Project Fa"]');
            ?>
        </div>
    </div>

    <script>
        // Project consultation modal functionality
        const projectConsultationButton = document.getElementById('projectConsultationButton');
        const mainProjectConsultationButton = document.getElementById('mainProjectConsultationButton');
        const projectConsultationModal = document.getElementById('projectConsultationModal');
        const closeProjectModal = document.getElementById('closeProjectModal');

        // Open modal
        if (projectConsultationButton) {
            projectConsultationButton.addEventListener('click', () => {
                projectConsultationModal.classList.add('active');
            });
        }

        if (mainProjectConsultationButton) {
            mainProjectConsultationButton.addEventListener('click', () => {
                projectConsultationModal.classList.add('active');
            });
        }

        // Close modal
        if (closeProjectModal) {
            closeProjectModal.addEventListener('click', () => {
                projectConsultationModal.classList.remove('active');
            });
        }

        // Close modal when clicking outside
        if (projectConsultationModal) {
            projectConsultationModal.addEventListener('click', (e) => {
                if (e.target === projectConsultationModal) {
                    projectConsultationModal.classList.remove('active');
                }
            });
        }
    </script>

<?php custom_footer(); ?>