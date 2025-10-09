<?php
/**
 * Template Name: آموزش خصوصی PHP (تخصصی)
 */

custom_header(); ?>

<style>
    /* Modern PHP Private Training Styles */
    .learning-container {
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
        min-height: 100vh;
        position: relative;
        overflow: hidden;
    }

    /* Animated background elements */
    .learning-container::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(139, 92, 246, 0.1) 0%, transparent 70%);
        animation: float 20s infinite;
        z-index: 0;
    }

    .learning-container::after {
        content: '';
        position: absolute;
        bottom: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.08) 0%, transparent 70%);
        animation: float 25s infinite reverse;
        z-index: 0;
    }

    @keyframes float {
        0%, 100% { transform: translate(0, 0) rotate(0deg); }
        33% { transform: translate(30px, -30px) rotate(120deg); }
        66% { transform: translate(-20px, 20px) rotate(240deg); }
    }

    /* Hero Section */
    .php-hero {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 50%, #8b5cf6 100%);
        color: white;
        position: relative;
        overflow: hidden;
        border-radius: 24px;
        margin-bottom: 4rem;
        z-index: 100;
        box-shadow: 0 20px 60px rgba(59, 130, 246, 0.3);
    }

    .php-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.1) 50%, transparent 70%);
        animation: shimmer 3s infinite;
    }

    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    .php-hero h1 {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 1.5rem;
        background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: fadeInUp 1s ease;
    }

    .php-hero p {
        font-size: 1.4rem;
        opacity: 0.95;
        margin-bottom: 2rem;
        animation: fadeInUp 1s ease 0.2s both;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .hero-buttons {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        flex-wrap: wrap;
        animation: fadeInUp 1s ease 0.4s both;
    }

    .hero-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(20px);
        padding: 1rem 2rem;
        border-radius: 50px;
        font-size: 1.1rem;
        font-weight: 600;
        border: 2px solid rgba(255, 255, 255, 0.3);
        transition: all 0.3s ease;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        z-index: 1000;
    }

    .hero-badge::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.5s;
    }

    .hero-badge:hover::before {
        left: 100%;
    }

    .hero-badge:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(255, 255, 255, 0.2);
        background: rgba(255, 255, 255, 0.25);
    }

    /* Why Private Section */
    #why-private {
        padding: 6rem 0;
        position: relative;
        z-index: 1;
    }

    .comparison-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2.5rem;
        margin-top: 3rem;
    }

    .comparison-card {
        background: linear-gradient(145deg, #1e293b, #0f172a);
        padding: 2.5rem;
        border-radius: 20px;
        border: 1px solid rgba(139, 92, 246, 0.2);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }

    .comparison-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #8b5cf6, #3b82f6);
    }

    .comparison-card.highlight {
        border: 2px solid #8b5cf6;
        background: linear-gradient(145deg, #1e1b4b, #0f0b2e);
        box-shadow: 0 20px 60px rgba(139, 92, 246, 0.3);
        transform: scale(1.02);
    }

    .comparison-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(139, 92, 246, 0.2);
    }

    .comparison-card h3 {
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        color: #a78bfa;
        font-weight: 700;
    }

    .comparison-card ul {
        list-style: none;
        padding: 0;
    }

    .comparison-card li {
        padding: 0.8rem 0;
        border-bottom: 1px solid rgba(139, 92, 246, 0.1);
        color: #cbd5e1;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }

    .comparison-card li:hover {
        color: #ffffff;
        padding-right: 1rem;
    }

    /* Learning Paths */
    .paths-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .path-card {
        background: linear-gradient(145deg, rgba(139, 92, 246, 0.1), rgba(59, 130, 246, 0.05));
        padding: 2rem;
        border-radius: 20px;
        text-align: center;
        border: 1px solid rgba(139, 92, 246, 0.3);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }

    .path-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(139, 92, 246, 0.1) 0%, transparent 70%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .path-card:hover::before {
        opacity: 1;
    }

    .path-card:hover {
        transform: translateY(-8px);
        border-color: #8b5cf6;
        box-shadow: 0 20px 40px rgba(139, 92, 246, 0.2);
    }

    .path-card h4 {
        font-size: 1.4rem;
        margin-bottom: 1rem;
        color: #a78bfa;
        font-weight: 600;
    }

    .path-card p {
        color: #94a3b8;
        font-size: 1rem;
        line-height: 1.6;
    }

    /* Projects Section */
    .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .project-card {
        background: linear-gradient(145deg, #1e293b, #0f172a);
        padding: 2rem;
        border-radius: 20px;
        border: 1px solid rgba(139, 92, 246, 0.2);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        text-align: center;
    }

    .project-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #8b5cf6, #3b82f6);
        transform: scaleX(0);
        transition: transform 0.4s ease;
    }

    .project-card:hover::before {
        transform: scaleX(1);
    }

    .project-card:hover {
        transform: translateY(-10px);
        border-color: #8b5cf6;
        box-shadow: 0 20px 40px rgba(139, 92, 246, 0.3);
    }

    .project-icon {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        display: block;
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .project-card h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: #a78bfa;
        font-weight: 700;
    }

    .project-card p {
        color: #cbd5e1;
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .project-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        justify-content: center;
        margin-bottom: 1.5rem;
    }

    .tech-tag {
        background: rgba(139, 92, 246, 0.2);
        color: #a78bfa;
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
        border: 1px solid rgba(139, 92, 246, 0.3);
        transition: all 0.3s ease;
    }

    .tech-tag:hover {
        background: rgba(139, 92, 246, 0.3);
        transform: scale(1.05);
    }

    .project-difficulty {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        align-items: center;
    }

    .difficulty-label {
        color: #94a3b8;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .difficulty-bar {
        width: 100%;
        height: 6px;
        background: rgba(139, 92, 246, 0.2);
        border-radius: 3px;
        overflow: hidden;
    }

    .difficulty-fill {
        height: 100%;
        background: linear-gradient(90deg, #8b5cf6, #3b82f6);
        border-radius: 3px;
        transition: width 0.8s ease;
    }

    .projects-note {
        background: linear-gradient(145deg, rgba(139, 92, 246, 0.1), rgba(59, 130, 246, 0.05));
        border: 1px solid rgba(139, 92, 246, 0.3);
        border-radius: 20px;
        padding: 2rem;
        margin-top: 3rem;
        display: flex;
        align-items: flex-start;
        gap: 1.5rem;
        position: relative;
        overflow: hidden;
    }

    .projects-note::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(139, 92, 246, 0.05) 0%, transparent 70%);
        animation: rotate 15s infinite linear;
    }

    .note-icon {
        font-size: 2.5rem;
        flex-shrink: 0;
        position: relative;
        z-index: 1;
    }

    .note-content {
        flex: 1;
        position: relative;
        z-index: 1;
    }

    .note-content h4 {
        color: #a78bfa;
        font-size: 1.3rem;
        margin-bottom: 1rem;
        font-weight: 700;
    }

    .note-content ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .note-content li {
        color: #cbd5e1;
        font-size: 1rem;
        margin-bottom: 0.5rem;
        padding-right: 1rem;
        transition: all 0.3s ease;
    }

    .note-content li:hover {
        color: #ffffff;
        transform: translateX(5px);
    }

    /* Instructor Section */
    .instructor-section {
        background: linear-gradient(145deg, #1e293b, #0f172a);
        border-radius: 20px;
        padding: 3rem;
        margin: 4rem 0;
        border: 1px solid rgba(139, 92, 246, 0.2);
        position: relative;
        overflow: hidden;
    }

    .instructor-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(139, 92, 246, 0.05) 0%, transparent 70%);
        animation: rotate 20s infinite linear;
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .instructor-card {
        display: flex;
        align-items: center;
        gap: 2rem;
        position: relative;
        z-index: 1;
    }

    .instructor-avatar {
        font-size: 4rem;
        width: 100px;
        height: 100px;
        margin: 10px;
        background: linear-gradient(135deg, #8b5cf6, #3b82f6);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 30px rgba(139, 92, 246, 0.3);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    .instructor-info h3 {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        color: #a78bfa;
        font-weight: 700;
    }

    .instructor-info p {
        color: #cbd5e1;
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 0.8rem;
    }

    /* Testimonials */
    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .testimonial-card {
        background: linear-gradient(145deg, #1e293b, #0f172a);
        padding: 2rem;
        border-radius: 20px;
        border: 1px solid rgba(139, 92, 246, 0.2);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }

    .testimonial-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, #8b5cf6, #3b82f6);
    }

    .testimonial-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(139, 92, 246, 0.2);
        border-color: #8b5cf6;
    }

    .student-info {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .student-avatar {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #8b5cf6, #3b82f6);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
        box-shadow: 0 5px 15px rgba(139, 92, 246, 0.3);
    }

    .student-details h4 {
        color: #a78bfa;
        margin-bottom: 0.3rem;
        font-size: 1.2rem;
        font-weight: 600;
    }

    .student-details p {
        color: #94a3b8;
        font-size: 1rem;
    }

    .voice-player {
        background: rgba(139, 92, 246, 0.1);
        border-radius: 15px;
        padding: 1rem;
        margin-bottom: 1rem;
        border: 1px solid rgba(139, 92, 246, 0.3);
    }

    .voice-player audio {
        width: 100%;
        height: 45px;
        border-radius: 15px;
        background: rgba(139, 92, 246, 0.1);
        border: 1px solid rgba(139, 92, 246, 0.3);
    }

    .rating {
        color: #fbbf24;
        font-size: 1.3rem;
        margin-top: 1rem;
    }

    /* CTA Section */
    .php-cta {
        background: linear-gradient(135deg, #8b5cf6 0%, #3b82f6 50%, #06b6d4 100%);
        border-radius: 24px;
        padding: 4rem 2rem;
        text-align: center;
        position: relative;
        overflow: hidden;
        margin-top: 4rem;
    }

    .php-cta::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.1) 50%, transparent 70%);
        animation: shimmer 3s infinite;
    }

    .php-cta h2 {
        font-size: 2.8rem;
        margin-bottom: 1.5rem;
        color: white;
        font-weight: 800;
        position: relative;
        z-index: 1;
    }

    .php-cta p {
        font-size: 1.3rem;
        margin-bottom: 2.5rem;
        opacity: 0.95;
        position: relative;
        z-index: 1;
    }

    .cta-options {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        justify-content: center;
        margin: 2rem 0;
        position: relative;
        z-index: 1;
    }

    .cta-btn {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(20px);
        border: 2px solid rgba(255, 255, 255, 0.3);
        color: white;
        padding: 1rem 2rem;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.4s ease;
        font-size: 1.1rem;
        font-weight: 600;
        position: relative;
        overflow: hidden;
    }

    .cta-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.5s;
    }

    .cta-btn:hover::before {
        left: 100%;
    }

    .cta-btn.active, .cta-btn:hover {
        background: rgba(255, 255, 255, 0.25);
        border-color: rgba(255, 255, 255, 0.5);
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(255, 255, 255, 0.2);
    }

    .cta-button {
        display: inline-block;
        background: white;
        color: #8b5cf6;
        padding: 1.5rem 3rem;
        border-radius: 50px;
        text-decoration: none;
        font-size: 1.3rem;
        font-weight: 700;
        transition: all 0.4s ease;
        border: 3px solid white;
        cursor: pointer;
        position: relative;
        z-index: 1;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .cta-button:hover {
        background: transparent;
        color: white;
        transform: scale(1.05);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }

    /* Modal Enhancements */
    .modal-overlay {
        backdrop-filter: blur(10px);
    }

    .modal-content {
        border: 1px solid rgba(139, 92, 246, 0.3);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
    }

    .modal-title {
        color: #a78bfa;
        font-weight: 700;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .php-hero h1 {
            font-size: 2.5rem;
        }
        
        .comparison-grid {
            grid-template-columns: 1fr;
        }
        
        .paths-grid {
            grid-template-columns: 1fr;
        }
        
        .instructor-card {
            flex-direction: column;
            text-align: center;
        }
        
        .cta-options {
            flex-direction: column;
            align-items: center;
        }
        
        .cta-btn {
            width: 100%;
            max-width: 300px;
        }
    }

    /* Section spacing */
    .section {
        padding: 4rem 0;
        position: relative;
        z-index: 1;
    }

    .section-title {
        text-align: center;
        font-size: 2.8rem;
        margin-bottom: 1rem;
        color: #a78bfa;
        font-weight: 800;
        position: relative;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #8b5cf6, #3b82f6);
        border-radius: 2px;
    }
</style>

    <div class="learning-container php-specialized">

        <!-- Hero Section -->
        <div class="learning-hero php-hero">
            <h1>🐘 تدریس خصوصی PHP</h1>
            <p>یادگیری PHP همراه با تمرین اختصاصی، <strong>بر اساس هدف، سطح و زمان شما</strong></p>
            <div class="hero-buttons">
                <span class="hero-badge" id="freeClassBadge">جلسه اول رایگان 🎁</span>
            </div>
        </div>

        <!-- Why Private? -->
        <section id="why-private" class="section">
            <h2 class="section-title">چرا آموزش خصوصی PHP؟</h2>
            <div class="comparison-grid">
                <div class="comparison-card">
                    <h3>آموزش گروهی</h3>
                    <ul>
                        <li>سرعت ثابت برای همه</li>
                        <li>سوالات محدود</li>
                        <li>پروژه‌های عمومی</li>
                        <li>زمان‌بندی ثابت</li>
                    </ul>
                </div>
                <div class="comparison-card highlight">
                    <h3>آموزش خصوصی (ما)</h3>
                    <ul>
                        <li>✅ سرعت یادگیری <strong>شخصی‌سازی‌شده</strong></li>
                        <li>✅ پاسخ به <strong>همه سوالات</strong> بدون محدودیت</li>
                        <li>✅ پروژه‌های <strong>متناسب با هدف شما</strong></li>
                        <li>✅ زمان‌بندی <strong>انعطاف‌پذیر</strong> (صبح/عصر/شب)</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Learning Paths -->
        <section class="section">
            <h2 class="section-title">مسیر یادگیری شما چیست؟</h2>
            <p style="text-align: center; color: #cbd5e1; margin-bottom: 2rem;">
                بسته به هدفتان، برنامهٔ آموزشی متفاوتی طراحی می‌کنیم:
            </p>
            <div class="paths-grid">
                <div class="path-card">
                    <h4>🌐 توسعه وب (Backend)</h4>
                    <p>PHP Core, MySQL, REST API, Authentication</p>
                </div>
                <div class="path-card">
                    <h4>📱 اپلیکیشن‌های موبایل</h4>
                    <p>Laravel, API Development, Mobile Backend</p>
                </div>
                <div class="path-card">
                    <h4>🛒 سیستم‌های تجارت الکترونیک</h4>
                    <p>WooCommerce, Payment Gateway, E-commerce</p>
                </div>
                <div class="path-card">
                    <h4>⚙️ سیستم‌های مدیریت محتوا</h4>
                    <p>WordPress Development, Custom Plugins, Themes</p>
                </div>
            </div>
        </section>

        <!-- Real Projects -->
        <section class="section">
            <h2 class="section-title">پروژه‌هایی که در جلسات می‌سازید</h2>
            <p style="text-align: center; color: #cbd5e1; margin-bottom: 3rem; font-size: 1.2rem;">
                هر جلسه یک پروژه واقعی و کاربردی که مستقیماً در رزومه شما قرار می‌گیرد
            </p>
            
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-icon">🛒</div>
                    <h3>فروشگاه آنلاین کامل</h3>
                    <p>سیستم فروش با سبد خرید، پرداخت و مدیریت سفارش</p>
                    <div class="project-tech">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">Stripe API</span>
                    </div>
                    <div class="project-difficulty">
                        <span class="difficulty-label">سطح: پیشرفته</span>
                        <span class="difficulty-bar">
                            <span class="difficulty-fill" style="width: 85%"></span>
                        </span>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-icon">📱</div>
                    <h3>API برای اپلیکیشن موبایل</h3>
                    <p>RESTful API با Laravel برای اپلیکیشن‌های موبایل</p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">JWT</span>
                        <span class="tech-tag">Postman</span>
                    </div>
                    <div class="project-difficulty">
                        <span class="difficulty-label">سطح: متوسط</span>
                        <span class="difficulty-bar">
                            <span class="difficulty-fill" style="width: 70%"></span>
                        </span>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-icon">📊</div>
                    <h3>سیستم مدیریت محتوا</h3>
                    <p>CMS سفارشی با پنل مدیریت و ویرایشگر محتوا</p>
                    <div class="project-tech">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">Bootstrap</span>
                    </div>
                    <div class="project-difficulty">
                        <span class="difficulty-label">سطح: متوسط</span>
                        <span class="difficulty-bar">
                            <span class="difficulty-fill" style="width: 65%"></span>
                        </span>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-icon">🔐</div>
                    <h3>سیستم احراز هویت</h3>
                    <p>سیستم لاگین/ثبت‌نام با OAuth و 2FA</p>
                    <div class="project-tech">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">JWT</span>
                        <span class="tech-tag">OAuth</span>
                    </div>
                    <div class="project-difficulty">
                        <span class="difficulty-label">سطح: متوسط</span>
                        <span class="difficulty-bar">
                            <span class="difficulty-fill" style="width: 75%"></span>
                        </span>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-icon">📧</div>
                    <h3>سیستم ایمیل خودکار</h3>
                    <p>ارسال ایمیل‌های خودکار و مدیریت خبرنامه</p>
                    <div class="project-tech">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">SMTP</span>
                        <span class="tech-tag">Cron Jobs</span>
                    </div>
                    <div class="project-difficulty">
                        <span class="difficulty-label">سطح: مبتدی</span>
                        <span class="difficulty-bar">
                            <span class="difficulty-fill" style="width: 50%"></span>
                        </span>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-icon">📈</div>
                    <h3>داشبورد مدیریت</h3>
                    <p>پنل مدیریت با نمودارها و گزارش‌گیری</p>
                    <div class="project-tech">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">Chart.js</span>
                        <span class="tech-tag">AJAX</span>
                    </div>
                    <div class="project-difficulty">
                        <span class="difficulty-label">سطح: متوسط</span>
                        <span class="difficulty-bar">
                            <span class="difficulty-fill" style="width: 60%"></span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="projects-note">
                <div class="note-icon">💡</div>
                <div class="note-content">
                    <h4>هر پروژه شامل:</h4>
                    <ul>
                        <li>✅ کد کامل و قابل اجرا</li>
                        <li>✅ مستندات کامل</li>
                        <li>✅ فایل‌های نمونه</li>
                        <li>✅ راهنمای نصب و اجرا</li>
                        <li>✅ پشتیبانی نامحدود</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- About Instructor (Optional but powerful) -->
        <section class="section instructor-section">
            <h2 class="section-title">مدرس دوره</h2>
            <div class="instructor-card">
                <div >
                    <img class="instructor-avatar" src="<?php echo get_template_directory_uri(); ?>/images/javad.png"
                         alt="محمدجواد سرلک، توسعه‌دهنده فول‌استک و مهندس هوش مصنوعی"
                         loading="lazy">
                </div>
                <div class="instructor-info">
                    <h3>محمدجوادسرلک</h3>
                    <p>9+ سال تجربه در توسعه PHP و آموزش برنامه‌نویسی</p>
                    <p>همکاری با استارتاپ‌ها و شرکت‌های فناوری در ایران و خارج</p>
                    <p>بیش از ۱۲۰ دانشجوی راضی در ۲ سال گذشته</p>
                </div>
            </div>
        </section>

        <!-- Testimonials (PHP-focused) -->
        <section class="testimonials-section" id="testimonials-section">
            <h2 class="section-title">نظرات دانشجویان PHP</h2>
            <p style="text-align: center; color: #cbd5e1; margin-bottom: 2rem;">
                آن‌ها با آموزش خصوصی، به اهدافشان رسیدند:
            </p>

            <?php
            $args = array(
                'post_type'      => 'student_testimonial',
                'posts_per_page' => 6, // فقط ۶ تا برای فضای بهتر
                'orderby'        => 'date',
                'order'          => 'DESC',
            );
            $testimonials = new WP_Query($args);

            if ($testimonials->have_posts()) :
                ?>
                <div class="testimonials-grid">
                    <?php while ($testimonials->have_posts()) : $testimonials->the_post();
                        $name_fa  = pods_field('student_testimonial', get_the_ID(), 'student_name_fa', true) ?: 'ناشناس';
                        $title_fa = pods_field('student_testimonial', get_the_ID(), 'student_title_fa', true) ?: 'دانشجو';
                        $audio    = pods_field('student_testimonial', get_the_ID(), 'audio_file', true);
                        $rating   = (int) pods_field('student_testimonial', get_the_ID(), 'rating', true);
                        $audio_url = is_array($audio) && isset($audio['guid']) ? esc_url($audio['guid']) : '';
                        $avatar = strtoupper(substr($name_fa, 0, 2));
                        $stars = str_repeat('⭐', min(5, max(0, $rating)));
                        ?>
                        <div class="testimonial-card">
                            <div class="student-info">
                                <div class="student-avatar"><?php echo esc_html($avatar); ?></div>
                                <div class="student-details">
                                    <h4><?php echo esc_html($name_fa); ?></h4>
                                    <p><?php echo esc_html($title_fa); ?></p>
                                </div>
                            </div>
                            <?php if ($audio_url) : ?>
                                <div class="voice-player">
                                    <audio controls style="width: 100%; height: 45px; border-radius: 15px; background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.3);">
                                        <source src="<?php echo $audio_url; ?>" type="audio/mpeg">
                                        مرورگر شما از این فایل پشتیبانی نمی‌کند.
                                    </audio>
                                </div>
                            <?php endif; ?>
                            <div class="rating"><?php echo $stars; ?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata();
            else :
                echo '<p style="text-align: center; color: #cbd5e1;">هنوز نظری ثبت نشده است.</p>';
            endif;
            ?>
        </section>

        <!-- CTA with Goal Selection -->
        <section class="free-class-cta php-cta">
            <h2>🎯 جلسه رایگان — با هدف مشخص!</h2>
            <p>در جلسه اول، هدف شما را بررسی می‌کنیم و یک برنامهٔ شخصی‌سازی‌شده طراحی می‌کنیم.</p>
            <div class="cta-options">
                <button class="cta-btn" data-goal="وب">توسعه وب</button>
                <button class="cta-btn" data-goal="موبایل">اپلیکیشن موبایل</button>
                <button class="cta-btn" data-goal="تجارت">تجارت الکترونیک</button>
                <button class="cta-btn" data-goal="مدیریت">سیستم مدیریت</button>
                <button class="cta-btn" data-goal="عمومی">من هنوز مطمئن نیستم</button>
            </div>
            <div class="cta-button" id="freeClassButton">رزرو جلسه رایگان</div>
        </section>
    </div>

    <!-- Modal -->
    <div class="modal-overlay" id="registrationModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">جلسه رایگان PHP</h3>
                <button class="close-modal" id="closeModal">&times;</button>
            </div>
            <?php
            $contact = get_key_value_url('contact_learn_fa');
            echo do_shortcode('[contact-form-7 id="' . $contact . '" title="Free Conclusion Fa"]');
            ?>
            <!-- Optional: Hidden field for goal can be added via CF7 or JS -->
        </div>
    </div>

    <script>
        // Handle goal selection (optional: store in localStorage or pass to form)
        let selectedGoal = 'عمومی';
        document.querySelectorAll('.cta-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.cta-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                selectedGoal = this.textContent;
            });
        });

        // Open modal
        function openRegistrationModal() {
            // Optional: send selectedGoal to form (e.g., via hidden input)
            document.getElementById('registrationModal').classList.add('active');
        }

        document.getElementById('freeClassButton')?.addEventListener('click', openRegistrationModal);
        document.getElementById('freeClassBadge')?.addEventListener('click', openRegistrationModal);

        // Close modal
        document.getElementById('closeModal')?.addEventListener('click', () => {
            document.getElementById('registrationModal').classList.remove('active');
        });
        document.getElementById('registrationModal')?.addEventListener('click', (e) => {
            if (e.target === document.getElementById('registrationModal')) {
                e.target.classList.remove('active');
            }
        });
    </script>

<?php custom_footer(); ?>
