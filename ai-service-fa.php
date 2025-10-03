<?php
/**
 * Template Name: AI & Data Solutions Fa
 */

get_header(); ?>

    <style>
        /* ---------------------------------- */
        /* GLOBAL STYLES & TYPOGRAPHY */
        /* ---------------------------------- */
        body {
            margin: 0;
            /* Using a system font stack for modern feel */
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Tahoma', 'Vazirmatn', sans-serif; /* Added common Persian fonts */
            /* Primary background: dark blue/black - Main Theme Color */
            background-color: #020617;
            color: #ffffff;
            line-height: 1.8; /* Increased line-height for better Persian readability */
            /* FIXED: Set global direction to Right-to-Left (RTL) */
            direction: rtl;
            text-align: right; /* Default text alignment */
        }
        a {
            color: #66BB6A; /* Slightly brighter green for general links */
            text-decoration: none;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #81C784; /* Lighter on hover */
            text-decoration: underline;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1.5rem;
        }
        h1, h2, h3 {
            margin-bottom: 1rem;
            font-weight: 700;
            letter-spacing: normal; /* Normal letter spacing for Persian */
            text-align: right; /* Ensure headings align right by default */
        }
        h1 {
            font-size: clamp(3rem, 7vw, 5rem);
            text-align: center; /* Override h1 to be centered for the hero */
            color: #ffffff;
            line-height: 1.1;
        }
        h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            margin-top: 3rem;
            margin-bottom: 2rem;
            /* FIXED: Change border-left to border-right for RTL accent */
            border-right: 4px solid #4CAF50;
            border-left: none; /* Remove unnecessary border-left */
            padding-right: 1rem; /* FIXED: Use padding-right for spacing */
            padding-left: 0;
        }
        h3 {
            font-size: 1.75rem;
            font-weight: 600;
            color: #4CAF50;
        }

        /* ---------------------------------- */
        /* BUTTON STYLES (CTA) */
        /* ---------------------------------- */
        .btn {
            display: inline-block;
            padding: 0.85rem 2rem;
            background: linear-gradient(90deg, #4CAF50 0%, #66BB6A 100%);
            color: #FFFFFF !important;
            font-weight: bold;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
            text-decoration: none !important;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.4);
        }
        .btn:hover {
            background: linear-gradient(90deg, #66BB6A 0%, #4CAF50 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(76, 175, 80, 0.6);
            color: #FFFFFF !important;
            text-decoration: none;
        }

        /* ---------------------------------- */
        /* HERO SECTION */
        /* ---------------------------------- */
        .hero {
            text-align: center;
            padding: 8rem 2rem 6rem;
            background: linear-gradient(180deg, rgba(13, 17, 23, 0) 0%, #020617 100%),
            radial-gradient(circle at top, #1c2738 0%, #020617 70%);
            box-shadow: 0 0 50px rgba(76, 175, 80, 0.1) inset;
        }
        .hero .tagline {
            font-size: 1.2rem;
            font-weight: 600;
            color: #4CAF50;
            margin-bottom: 1rem;
            letter-spacing: normal;
            text-transform: none;
        }
        .hero p.subtitle {
            font-size: 1.5rem;
            margin-bottom: 3rem;
            color: #A0AEC0;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        /* ---------------------------------- */
        /* CORE EXPERTISE (SMALL CARDS) */
        /* ---------------------------------- */
        .services-grid {
            padding-top: 2rem;
            padding-bottom: 4rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }
        .service-item {
            background-color: #161B22;
            padding: 2.5rem;
            border-radius: 12px;
            text-align: right; /* FIXED: Ensure content is right-aligned */
            box-shadow: 0 0 0 1px rgba(76, 175, 80, 0.1), 0 10px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        .service-item:hover {
            transform: translateY(-5px);
            background-color: #1f2731;
        }
        .service-item h3 { margin-top: 0; text-align: right; }
        .service-item p { color: #A0AEC0; }

        /* ---------------------------------- */
        /* AI SERVICES & LIST */
        /* ---------------------------------- */
        .ai-services-section {
            padding-top: 2rem;
            padding-bottom: 5rem;
            background-color: #020617;
        }
        .ai-service-intro {
            font-size: 1.25rem;
            color: #A0AEC0;
            max-width: 900px;
            margin: 0 auto 3rem;
            text-align: center;
        }
        .service-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }
        .service-card {
            background-color: #131720;
            padding: 1.5rem;
            border-radius: 10px;
            /* FIXED: Change border-left to border-right for RTL accent */
            border-right: 4px solid #4CAF50;
            border-left: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s;
            text-align: right; /* FIXED: Ensure content is right-aligned */
        }
        .service-card:hover {
            background-color: #161b27;
        }
        .service-card h4 {
            margin-top: 0;
            font-size: 1.25rem;
            color: #E5E7EB;
            font-weight: 600;
            text-align: right;
        }
        .service-card p {
            font-size: 0.95rem;
            color: #A0AEC0;
        }
        .ai-usp {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px dashed #161B22;
        }
        .usp-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            list-style: none;
            padding: 0;
            text-align: right;
        }
        .usp-list li {
            color: #4CAF50;
            font-weight: 500;
            font-size: 1.1rem;
            text-align: right;
        }
        /* Adjusted margin for RTL checkmark alignment */
        .usp-list span {
            color: #E5E7EB;
            margin-right: 0.5rem;
            margin-left: 0;
        }
        .ai-cta-footer {
            text-align: center;
            margin-top: 4rem;
        }
        .ai-cta-footer h3{
            text-align: center;
        }

        /* ---------------------------------- */
        /* FOUNDER/ENGINE SECTION */
        /* ---------------------------------- */
        .founder-card {
            display: flex;
            flex-wrap: wrap;
            margin-top: 4rem;
            gap: 3rem;
            align-items: center;
            padding: 2rem;
            background-color: #161B22;
            border-radius: 15px;
            /* FIXED: Change border-left to border-right for RTL accent */
            border-right: 5px solid #4CAF50;
            border-left: none;
            text-align: right; /* FIXED: Ensure content is right-aligned */
        }
        .founder-avatar {
            flex-shrink: 0;
            margin-left: 0;
            margin-right: 0;
        }
        .founder-avatar img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #4CAF50;
            box-shadow: 0 0 0 8px rgba(76, 175, 80, 0.1);
        }
        .founder-content {
            flex-grow: 1;
            text-align: right; /* FIXED: Ensure content is right-aligned */
        }
        .founder-title {
            color: #A0AEC0;
            font-style: italic;
            margin-top: -0.5rem;
            margin-bottom: 1.5rem;
        }
        .founder-card h2 {
            border-right: none;
            padding-right: 0;
        }
        .founder-signature {
            margin-top: 2rem;
            font-style: italic;
            font-weight: 500;
            color: #A0AEC0;
        }

        /* ---------------------------------- */
        /* PHILOSOPHY/PRINCIPLES */
        /* ---------------------------------- */
        .philosophy-section {
            margin-top: 5rem;
        }
        .principles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        .principle-card {
            padding: 1.5rem;
            background-color: #0b0f1a;
            border-radius: 8px;
            border: 1px solid #161B22;
            transition: border-color 0.3s;
            text-align: right; /* FIXED: Ensure content is right-aligned */
        }
        .principle-card:hover {
            border-color: #4CAF50;
        }
        .principle-header {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
            /* FIXED: Reverse flex direction for RTL icon alignment */
            flex-direction: row-reverse;
            justify-content: flex-end;
        }
        .principle-icon {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4CAF50;
            /* FIXED: Adjusted margin for RTL icon positioning */
            margin-left: 0.75rem;
            margin-right: 0;
            line-height: 1;
        }
        .principle-card h3 {
            margin: 0;
            color: #E5E7EB;
            font-size: 1.3rem;
            text-align: right;
        }
        .principle-card p {
            color: #A0AEC0;
            margin-top: 0.5rem;
            font-size: 0.95rem;
        }


        /* ---------------------------------- */
        /* RESPONSIVENESS */
        /* ---------------------------------- */
        @media(max-width: 900px) {
            /* FIXED: Ensure text is centered when image is stacked */
            .founder-card { flex-direction: column; text-align: center; }
            .founder-content { text-align: center; } /* Ensure text centers below image */

            .founder-avatar {
                margin-bottom: 1rem;
                margin-left: auto; /* FIXED: Center image when stacked */
                margin-right: auto;
            }
        }
        @media(min-width: 901px) {
            /* Ensure all text is strictly right-aligned on large screens */
            .founder-card, .founder-content, .service-item, .principle-card,
            .founder-content p, .founder-content h2 {
                text-align: right !important;
            }
            .founder-card {
                /* Ensure image is left and text is right on large screens (RTL standard) */
                flex-direction: row-reverse;
            }
        }
    </style>

    <main class="ai-page">
        <section class="hero">
            <div class="container">
                <p class="tagline">راهکارهای هوش مصنوعی و مهندسی داده</p>
                <h1>هوشمندی آینده‌نگر، <br>امروز ساخته می‌شود.</h1>
                <p class="subtitle">ما با بهره‌گیری از روش‌های نوین یادگیری ماشین و یکپارچه‌سازی فول‌استک، سیستم‌های سفارشی و مقیاس‌پذیر هوش مصنوعی طراحی و پیاده‌سازی می‌کنیم تا به پیش‌بینی دقیق، اتوماسیون هوشمند و کشف بینش‌های عمیق از داده‌های شما کمک کنیم.</p>
                <a href="#ai-solutions" class="btn">راهکارهای هوش مصنوعی ما را کاوش کنید</a>
            </div>
        </section>

        <section class="container" id="services-area">
            <h2>حوزه‌های تخصصی ما</h2>
            <div class="services-grid">
                <div class="service-item">
                    <h3>پیش‌بینی و تحلیل روندها 📈</h3>
                    <p>با استفاده از مدل‌های پیشرفته هوش مصنوعی، روندهای آتی بازار، رفتار مشتریان و نیازمندی‌های منابعی شما را با دقت بالایی پیش‌بینی می‌کنیم.</p>
                </div>
                <div class="service-item">
                    <h3>اتوماسیون فرآیندهای هوشمند 🤖</h3>
                    <p>جریان‌های کاری پیچیده، تصمیم‌گیری‌های تکراری و پردازش‌های داده‌ای را با خطوط لوله اتوماسیون هوشمند، ساده‌سازی و بهینه‌سازی می‌کنیم.</p>
                </div>
                <div class="service-item">
                    <h3>استخراج بینش از داده‌ها 🔎</h3>
                    <p>داده‌های حجیم و پیچیده شما را به اطلاعات عملیاتی و قابل استناد برای تصمیم‌گیری‌های کلیدی تبدیل می‌کنیم و با گزارش‌های سفارشی، تصویری روشن از کسب‌وکارتان ارائه می‌دهیم.</p>
                </div>
            </div>
        </section>

        <section class="ai-services-section" id="ai-solutions">
            <div class="container">
                <h2 style="text-align: center;">🧠 خدمات و توانمندی‌های هوش مصنوعی</h2>
                <p class="ai-service-intro">
                    ما راهکارهای هوش مصنوعی سفارشی برای کسب‌وکارهای آینده‌نگر ارائه می‌دهیم. عملیات، تصمیم‌گیری‌ها و تجربه مشتریان خود را با هوش مصنوعی سازمانی متحول کنید؛ راهکاری که به طور دقیق برای صنعت و چالش‌های منحصربه‌فرد شما طراحی شده است.
                </p>

                <div class="service-list">
                    <div class="service-card">
                        <h4>توسعه سفارشی مدل‌های هوش مصنوعی و یادگیری ماشین</h4>
                        <p>طراحی، آموزش و استقرار مدل‌های یادگیری ماشین متناسب با داده‌ها و اهداف کسب‌وکار شما؛ از تحلیل‌های پیشگویانه تا تشخیص ناهنجاری‌ها، در تمامی سطوح سیستم.</p>
                    </div>
                    <div class="service-card">
                        <h4>پردازش زبان طبیعی (NLP)</h4>
                        <p>پیاده‌سازی چت‌بات‌های هوشمند، تحلیل احساسات، خلاصه‌سازی اسناد، استخراج اطلاعات کلیدی و درک متون چندزبانه برای تعاملی طبیعی و کارآمد با کاربران.</p>
                    </div>
                    <div class="service-card">
                        <h4>بینایی کامپیوتر (Computer Vision)</h4>
                        <p>تحلیل تصاویر و ویدیوها برای کنترل کیفیت، تشخیص اشیاء، خواندن بارکدها و QR کدها، بازرسی‌های بصری و راه‌اندازی سیستم‌های نظارتی هوشمند.</p>
                    </div>
                    <div class="service-card">
                        <h4>تحلیل پیشگویانه و هوش تجاری مبتنی بر هوش مصنوعی</h4>
                        <p>تبدیل داده‌های تاریخی به پیش‌بینی‌های عملیاتی؛ شامل پیش‌بینی فروش، بهینه‌سازی موجودی، ارزیابی ریسک و تولید گزارش‌های خودکار از طریق داشبوردهای هوشمند.</p>
                    </div>
                    <div class="service-card">
                        <h4>اتوماسیون فرآیندهای کسب‌وکار با هوش مصنوعی (RPA هوشمند)</h4>
                        <p>خودکارسازی وظایف تکراری مانند پردازش فاکتورها، ورود داده، دسته‌بندی ایمیل‌ها و به‌روزرسانی CRM، با قابلیت تصمیم‌گیری پیشرفته مبتنی بر هوش مصنوعی.</p>
                    </div>
                    <div class="service-card">
                        <h4>راهکارهای هوش مصنوعی مولد (Generative AI)</h4>
                        <p>به‌کارگیری مدل‌های مولد برای تولید محتوا، کمک به کدنویسی، بازیابی دانش داخلی، تولید داده‌های مصنوعی و سایر کاربردهای نوآورانه، با رعایت کامل اصول امنیتی و محدودیت‌های تعریف‌شده توسط شما.</p>
                    </div>
                    <div class="service-card">
                        <h4>یکپارچه‌سازی هوش مصنوعی با سیستم‌های موجود</h4>
                        <p>ادغام بی‌نقص قابلیت‌های هوش مصنوعی با سیستم‌های فعلی شما؛ از ERP و CRM گرفته تا سیستم‌های قدیمی‌تر، چه در سرورهای داخلی و چه در بسترهای ابری (AWS، Azure، GCP)، بدون ایجاد اختلال در فرآیندهای جاری.</p>
                    </div>
                    <div class="service-card">
                        <h4>مشاوره و تدوین استراتژی هوش مصنوعی</h4>
                        <p>شناسایی فرصت‌های کلیدی برای بهره‌برداری از هوش مصنوعی، تدوین نقشه راه عملیاتی و همسوسازی راهکارهای فناورانه با اهداف استراتژیک کسب‌وکار شما، پیش از آغاز مرحله پیاده‌سازی.</p>
                    </div>
                </div>

                <div class="ai-usp">
                    <h3 style="text-align: center; margin-bottom: 2rem;">مزایای همکاری با ما</h3>
                    <ul class="usp-list">
                        <li>✅ <span>سابقه اثبات‌شده در صنعت</span></li>
                        <li>✅ <span>تضمین مالکیت کامل پروژه</span></li>
                        <li>✅ <span>تعهّد به حریم خصوصی و رعایت مقررات داده</span></li>
                        <li>✅ <span>همکاری شفاف و مستقیم</span></li>
                    </ul>
                </div>

                <div class="ai-cta-footer">
                    <h3 style="color: #E5E7EB;">آماده‌اید تا مزیت رقابتی خود را با هوش مصنوعی بسازید؟</h3>
                    <p style="color: #A0AEC0; margin-bottom: 2rem;">بیایید با هم داده‌های شما را به هوشمندی و ایده‌های شما را به واقعیت ملموس تبدیل کنیم.</p>
                    <a href="[Your Schedule Consultation Form Link]" class="btn">
                        👈 درخواست مشاوره رایگان هوش مصنوعی
                    </a>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="founder-card">
                <div class="founder-avatar">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/javad.png"
                         alt="جواد، توسعه‌دهنده فول‌استک و مهندس هوش مصنوعی" loading="lazy">
                </div>
                <div class="founder-content">
                    <h2>نیروی محرکه کار ما</h2>
                    <p class="founder-title">جواد | بنیان‌گذار و مهندس ارشد هوش مصنوعی و فول‌استک</p>
                    <p>راهکارهای ما توسط جواد، متخصصی با نزدیک به یک دهه تجربه در ساخت سیستم‌های هوشمند و مقیاس‌پذیر، طراحی و پیاده‌سازی می‌شوند. این مدل تمرکز‌شده تضمین می‌کند که هر پروژه از تخصص مستقیم و عمیق یک متخصص برجسته بهره‌مند خواهد شد.</p>
                    <p>او به‌طور همزمان بر PHP (Laravel)، پایتون (Django و کتابخانه‌های ML/AI) و جاوا سازمانی (Spring Boot) تسلط دارد و با بهره‌گیری از فریم‌ورک‌های مدرن فرانت‌اند، راه‌حل‌هایی یکپارچه و مستحکم از لایه داده تا رابط کاربری ارائه می‌دهد.</p>
                    <p>از سیستم‌های پیش‌بینی بازار بورس گرفته تا پلتفرم‌های مدیریت ناوگان در مقیاس بزرگ، تعهد ما به عملکرد بالا، کدنویسی تمیز و ایجاد تأثیر ملموس در کسب‌وکار شماست. این نقطه تماس واحد، ارتباطی بی‌نقص و مالکیت کامل پروژه را در تمام مراحل تضمین می‌کند.</p>
                    <div class="founder-signature">– متعهد به برتری در هر خط کد.</div>
                </div>
            </div>

            <div class="philosophy-section">
                <h2>اصول کاری ما</h2>
                <div class="principles-grid">
                    <div class="principle-card">
                        <div class="principle-header">
                            <span class="principle-icon">۱.</span>
                            <h3>تخصص عمیق فول‌استک</h3>
                        </div>
                        <p>ترکیب انعطاف‌پذیری توسعه فول‌استک با تخصص عمیق در بک‌اند و یادگیری ماشین، تضمین می‌کند که راه‌حل‌های ما نه تنها کارآمد، بلکه پایدار و آماده برای آینده باشند.</p>
                    </div>
                    <div class="principle-card">
                        <div class="principle-header">
                            <span class="principle-icon">۲.</span>
                            <h3>کدنویسی هدفمند و بهینه</h3>
                        </div>
                        <p>هر خط کد ما هدفی مشخص دارد. راه‌حل‌ها از روز اول برای دستیابی به بالاترین عملکرد، امنیت و قابلیت نگهداری بهینه‌سازی می‌شوند.</p>
                    </div>
                    <div class="principle-card">
                        <div class="principle-header">
                            <span class="principle-icon">۳.</span>
                            <h3>مالکیت کامل و مسئولیت‌پذیری</h3>
                        </div>
                        <p>ما مسئولیت ایجاد تأثیری ملموس و مثبت در کسب‌وکار شما را بر عهده می‌گیریم؛ از ایده‌پردازی و طراحی تا پیاده‌سازی، استقرار و پشتیبانی، مالکیت کامل پروژه با ماست، نه صرفاً تحویل یک محصول نهایی.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>