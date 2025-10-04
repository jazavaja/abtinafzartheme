<?php
/**
 * Template Name: Startup Consulting Fa
 */

get_header(); ?>

    <style>
        /* ---------------------------------- */
        /* GLOBAL STYLES & TYPOGRAPHY (Inheriting & Tweaking) */
        /* ---------------------------------- */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Tahoma', 'Vazirmatn', sans-serif; /* Added common Persian fonts */
            background-color: #020617;
            color: #ffffff;
            line-height: 1.8; /* Increased line-height for better Persian readability */
            direction: rtl; /* Ensure RTL for Persian */
            text-align: right; /* Default text alignment */
        }
        /*------------------------*/
        @font-face {
            font-family: 'Vazir';
            src: url('../fonts/Vazir.woff2') format('woff2'),
            url('../fonts/Vazir.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Vazir';
            src: url('../fonts/Vazir-Bold.woff2') format('woff2'),
            url('../fonts/Vazir-Bold.woff') format('woff');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        /* Apply to entire page */
        * {
            font-family: 'Vazir', 'Tahoma', 'Arial', sans-serif !important;
        }

        body {
            direction: rtl;
            text-align: right;
            font-family: 'Vazir', 'Tahoma', 'Arial', sans-serif !important;

        }
        /* ===== CONSULTATION SECTION ===== */

        #consultation {
            background: var(--dark);
            position: relative;
        }

        .consultation-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .consultation-card {
            background: rgba(102, 126, 234, 0.05);
            border: 1px solid rgba(102, 126, 234, 0.2);
            border-radius: 30px;
            padding: 60px;
            backdrop-filter: blur(20px);
            position: relative;
            overflow: hidden;
        }



        .consultation-header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            z-index: 1;
        }

        .consultation-header h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .consultation-header p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 1.2rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .form-group {
            position: relative;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 18px 24px;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(102, 126, 234, 0.2);
            border-radius: 15px;
            color: #fff;
            font-size: 1rem;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #667eea;
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
        }

        .form-group textarea {
            grid-column: 1 / -1;
            resize: vertical;
            min-height: 150px;
        }

        .form-submit {
            position: relative;
            z-index: 1;
        }
        /* ===== CONSULTATION SECTION END ===== */

        /*-----------------*/
        a {
            color: #66BB6A;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #81C784;
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1.5rem;
        }
        h1, h2, h3, h4 {
            margin-bottom: 1rem;
            font-weight: 700;
            line-height: 1.2;
        }
        h1 {
            font-size: clamp(2.5rem, 6vw, 4rem);
            color: #ffffff;
        }
        h2 {
            font-size: clamp(2rem, 4vw, 2.8rem);
            margin-top: 3rem;
            margin-bottom: 2rem;
            border-right: 4px solid #4CAF50; /* RTL border */
            padding-right: 1rem;
            border-left: none;
            padding-left: 0;
        }
        h3 {
            font-size: 1.75rem;
            color: #4CAF50;
        }
        p {
            margin-bottom: 1.5rem;
            color: #A0AEC0;
        }

        /* ---------------------------------- */
        /* BUTTON STYLES (CTA) */
        /* ---------------------------------- */
        .btn {
            display: inline-block;
            padding: 0.85rem 2.5rem;
            /*background: linear-gradient(90deg, #4CAF50 0%, #66BB6A 100%);*/
            /*color: #FFFFFF !important;*/
            font-weight: bold;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
            text-decoration: none !important;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.4);
            font-size: 1.1rem;
            border: 2px solid #667eea;
            color: #fff;
            background: transparent;
            backdrop-filter: blur(10px);
        }
        .btn:hover {
            /*background: linear-gradient(90deg, #66BB6A 0%, #4CAF50 100%);*/
            /*transform: translateY(-3px);*/
            transform: translateY(-3px);
            box-shadow: 0 15px 50px rgba(102, 126, 234, 0.6);
            color: #FFFFFF !important;
        }
        .btn-secondary {
            background: transparent;
            border: 2px solid #4CAF50;
            box-shadow: none;
        }
        .btn-secondary:hover {
            background: rgba(76, 175, 80, 0.1);
            transform: translateY(-2px);
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
        }
        .hero p.subtitle {
            font-size: 1.4rem;
            margin-bottom: 3rem;
            color: #A0AEC0;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* ---------------------------------- */
        /* PROBLEM/SOLUTION SECTION */
        /* ---------------------------------- */
        .problem-solution-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }
        .grid-item {
            background-color: #161B22;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 0 0 1px rgba(76, 175, 80, 0.1), 0 10px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, background-color 0.3s ease;
            text-align: right;
        }
        .grid-item:hover {
            transform: translateY(-5px);
            background-color: #1f2731;
        }
        .grid-item h3 {
            margin-top: 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex-direction: row-reverse; /* RTL for icon alignment */
            justify-content: flex-end;
        }
        .grid-item .icon {
            font-size: 1.8rem;
        }

        /* ---------------------------------- */
        /* SERVICES OFFERED SECTION */
        /* ---------------------------------- */
        .services-offered {
            background-color: #0a0f1c;
            padding: 4rem 0;
            margin-top: 5rem;
        }
        .services-offered .container h2 {
            text-align: center;
            border-right: none;
            padding-right: 0;
            margin-bottom: 3rem;
        }
        .services-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }
        .service-card {
            background-color: #131720;
            padding: 1.5rem;
            border-radius: 10px;
            border-right: 4px solid #4CAF50; /* RTL border */
            border-left: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s;
            text-align: right;
        }
        .service-card:hover {
            background-color: #161b27;
        }
        .service-card h4 {
            margin-top: 0;
            font-size: 1.2rem;
            color: #E5E7EB;
            font-weight: 600;
        }
        .service-card p {
            font-size: 0.95rem;
            margin-bottom: 0;
        }

        /* ---------------------------------- */
        /* PROCESS/WORKFLOW SECTION */
        /* ---------------------------------- */
        .process-section {
            margin-top: 5rem;
        }
        .process-steps {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 3rem;
            position: relative;
        }
        .process-steps::before {
            content: '';
            position: absolute;
            top: 40px;
            right: 50px; /* RTL for line position */
            left: 50px;
            height: 4px;
            background: linear-gradient(90deg, #66BB6A, #4CAF50); /* RTL gradient direction */
            z-index: 1;
            border-radius: 2px;
        }
        .step {
            flex-basis: 22%;
            text-align: center;
            background-color: #161B22;
            padding: 2rem 1rem;
            border-radius: 10px;
            position: relative;
            z-index: 2;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .step-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #4CAF50, #66BB6A);
            color: white;
            border-radius: 50%;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            box-shadow: 0 4px 10px rgba(76, 175, 80, 0.4);
        }
        .step h4 {
            color: #E5E7EB;
            font-size: 1.1rem;
        }
        .step p {
            font-size: 0.9rem;
        }

        /* ---------------------------------- */
        /* TESTIMONIAL SECTION */
        /* ---------------------------------- */
        .testimonial-section {
            margin-top: 5rem;
            padding: 4rem 0;
            background-color: #0a0f1c;
            border-radius: 15px;
        }
        .testimonial-card {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #161B22;
            border-radius: 12px;
            text-align: center;
            border-right: 5px solid #4CAF50; /* RTL border */
            border-left: none;
        }
        .testimonial-text {
            font-style: italic;
            font-size: 1.2rem;
            color: #E5E7EB;
            margin-bottom: 1.5rem;
        }
        .testimonial-author {
            font-weight: bold;
            color: #4CAF50;
        }
        .testimonial-author span {
            display: block;
            font-weight: normal;
            color: #A0AEC0;
            font-size: 0.9rem;
            margin-top: 0.25rem;
        }

        /* ---------------------------------- */
        /* FINAL CTA SECTION */
        /* ---------------------------------- */
        .final-cta {
            text-align: center;
            padding: 6rem 2rem;
            margin-top: 5rem;
            background: linear-gradient(180deg, #020617 0%, #0a0f1c 100%);
            border-radius: 15px;
        }
        .final-cta h2 {
            font-size: clamp(2.2rem, 5vw, 3.5rem);
            margin-bottom: 1.5rem;
            border-right: none;
            padding-right: 0;
        }
        .final-cta p {
            font-size: 1.2rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 2.5rem;
        }

        /* ---------------------------------- */
        /* RESPONSIVENESS */
        /* ---------------------------------- */
        @media(max-width: 768px) {
            .process-steps::before {
                display: none; /* Hide line on mobile */
            }
            .process-steps {
                flex-direction: column;
                gap: 1.5rem;
            }
            .step {
                flex-basis: 100%;
            }
            .hero {
                padding: 5rem 1rem 4rem;
            }
            h1 {
                font-size: clamp(2rem, 8vw, 3rem);
            }
        }
    </style>

    <main class="startup-consulting-page">
        <section class="hero">
            <div class="container">
                <p class="tagline">مشاوره استارتاپی</p>
                <h1>از ایده تا واقعیت مقیاس‌پذیر. سریع‌تر.</h1>
                <p class="subtitle">با راهنمایی تخصصی در زمینه هوش مصنوعی، استراتژی داده و توسعه فول‌استک، از پیچیدگی‌های راه‌اندازی و رشد استارتاپ خود عبور کنید. ما چشم‌انداز شما را به محصولی آماده برای بازار تبدیل می‌کنیم.</p>
                <a href="#consulting-services" class="btn">بسته‌های مشاوره ما را ببینید</a>
            </div>
        </section>

        <div class="container">
            <section id="the-problem">
                <h2>مسیر استارتاپی، مملو از چالش است</h2>
                <p>بسیاری از ایده‌های درخشان به دلیل اشتباهات رایج و قابل اجتناب، هرگز به نور روز نمی‌رسند. آیا شما با این چالش‌ها روبرو هستید؟</p>
                <div class="problem-solution-grid">
                    <div class="grid-item">
                        <h3><span class="icon">💸</span> نرخ سوخت سرمایه و بودجه</h3>
                        <p>سرمایه محدود و نرخ سوخت سرمایه بالا می‌تواند استارتاپ شما را پیش از آنکه به تناسب محصول-بازار برسد، از بین ببرد. هدر دادن سرمایه روی تکنولوژی نادرست یا فرآیندهای ناکارآمد، یک خطای مهلک است.</p>
                    </div>
                    <div class="grid-item">
                        <h3><span class="icon">🛠️</span> سردرگمی در انتخاب تکنولوژی</h3>
                        <p>انتخاب اشتباه پشته تکنولوژیکی (Tech Stack) در مراحل اولیه، می‌تواند منجر به هزینه‌های هنگفت بازنویسی، مشکلات مقیاس‌پذیری و آسیب‌پذیری‌های امنیتی در آینده شود.</p>
                    </div>
                    <div class="grid-item">
                        <h3><span class="icon">🎯</span> تناسب محصول با بازار</h3>
                        <p>ساخت محصولی که هیچ‌کس به آن نیاز ندارد، شماره یک دلیل شکست استارتاپ‌هاست. ما به شما کمک می‌کنیم تا محصول حداقلی viable (MVP) خود را تعریف کنید، فرضیات را اعتبارسنجی کرده و بر اساس داده‌های واقعی کاربران، محصول را بهبود بخشید.</p>
                    </div>
                </div>
            </section>

            <section class="final-cta">
                <div class="container">
                    <h2>آماده‌اید آینده خود را بسازید؟</h2>
                    <p>حدس و گمان را کنار بگذارید و با اطمینان شروع به ساخت کنید. بیایید یک تماس کشفی بدون تعهد را برنامه‌ریزی کنیم تا در مورد چالش‌های منحصربه‌فرد استارتاپ شما و نحوه کمک ما برای غلبه بر آن‌ها صحبت کنیم.</p>
                    <a href="#consultation" class="btn">درخواست تماس مشاوره رایگان</a>
                </div>
            </section>

            <section id="the-solution">
                <h2>شریک استراتژیک شما برای موفقیت</h2>
                <p>ما فقط کدنویسی نمی‌کنیم؛ ما بنیانی برای رشد پایدار شما می‌سازیم. خدمات مشاوره ما برای کاهش ریسک مسیر شما و شتاب‌بخشی به مسیر موفقیتتان طراحی شده‌اند.</p>
                <div class="problem-solution-grid">
                    <div class="grid-item">
                        <h3><span class="icon">🧠</span> استراتژی مبتنی بر هوش مصنوعی</h3>
                        <p>از روز اول هوش مصنوعی را ادغام کنید تا یک مزیت رقابتی پایدار ایجاد کنید. ما فرصت‌هایی برای اتوماسیون، تحلیل پیشگویانه و تجربیات کاربری منحصربه‌فرد را شناسایی می‌کنیم که شما را از دیگران متمایز می‌کند.</p>
                    </div>
                    <div class="grid-item">
                        <h3><span class="icon">🏗️</span> معماری مقیاس‌پذیر</h3>
                        <p>ما سیستم‌هایی قوی، امن و مقیاس‌پذیر با استفاده از بهترین روش‌های روز دنیا طراحی و می‌سازیم و تضمین می‌کنیم که تکنولوژی شما به صورت یکپارچه با پایگاه کاربریتان رشد کند.</p>
                    </div>
                    <div class="grid-item">
                        <h3><span class="icon">📈</span> تصمیم‌گیری مبتنی بر داده</h3>
                        <p>از همان ابتدا فرهنگ داده‌محوری را در شرکت خود نهادینه کنید. ما به شما کمک می‌کنیم تا تحلیل‌ها، داشبوردها و حلقه‌های بازخورد مناسب را راه‌اندازی کنید تا تصمیمات آگاهانه بگیرید و به سرعت مسیر خود را تغییر دهید.</p>
                    </div>
                </div>
            </section>



        </div>
        <section id="consultation">
            <div class="consultation-container">
                <div class="consultation-card">
                    <div class="consultation-header">
                        <h2>مشاوره رایگان</h2>
                        <p>ایده‌ای دارید؟ به مشاوره فنی نیاز دارید؟ بیایید صحبت کنیم</p>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="33e14a3" title="Free Conclusion Fa"]'); ?>

                </div>
            </div>
        </section>

        <section class="services-offered" id="consulting-services">
            <div class="container">
                <h2>بسته‌های مشاوره ما</h2>
                <div class="services-list">
                    <div class="service-card">
                        <h4>۱. اعتبارسنجی ایده و محصول حداقلی (MVP)</h4>
                        <p>این بسته برای استارتاپ‌های در مرحله ایده یا پیش از سرمایه‌گذاری اولیه (Pre-Seed) ایده‌آل است. ما به شما کمک می‌کنیم تا ایده خود را اصلاح کنید، MVP را تعریف کنید، نقشه راه فنی ایجاد کرده و یک نمونه اولیه برای جذب سرمایه‌گذاران و کاربران اولیه بسازید.</p>
                    </div>
                    <div class="service-card">
                        <h4>۲. معماری فنی و CTO به صورت سرویس (CTO-as-a-Service)</h4>
                        <p>برای استارتاپ‌هایی که به رهبری فنی متخصص نیاز دارند اما هزینه استخدام CTO تمام‌وقت را ندارند. ما پشته تکنولوژیکی شما را طراحی می‌کنیم، بر فرآیند توسعه نظارت می‌کنیم، از رعایت بهترین روش‌ها اطمینان حاصل کرده و تیم اولیه مهندسی شما را تشکیل می‌دهیم.</p>
                    </div>
                    <div class="service-card">
                        <h4>۳. ادغام هوش مصنوعی و داده</h4>
                        <p>آیا محصولی دارید اما می‌خواهید از قدرت هوش مصنوعی بهره‌مند شوید؟ ما سیستم‌های فعلی شما را بررسی کرده، فرصت‌های تأثیرگذار هوش مصنوعی (پیش‌بینی، پردازش زبان طبیعی، شخصی‌سازی) را شناسایی کرده و راهکارهای یادگیری ماشین سفارشی را پیاده‌سازی می‌کنیم.</p>
                    </div>
                    <div class="service-card">
                        <h4>۴. مقیاس‌پذیری و بهینه‌سازی عملکرد</h4>
                        <p>آیا با رشد استارتاپ شما، سرعت اپلیکیشن کاهش یافته است؟ ما بازرسی کاملی از عملکرد انجام می‌دهیم، گلوگاه‌ها را بازنویسی می‌کنیم، پایگاه داده را بهینه کرده و زیرساخت شما را برای ترافیک بالا و مقیاس‌پذیری جهانی طراحی می‌کنیم.</p>
                    </div>
                    <div class="service-card">
                        <h4>۵. پشتیبانی فنی جذب سرمایه و ارائه (Pitch Deck)</h4>
                        <p>با یک برنامه فنی قوی، سرمایه‌گذاران را تحت تأثیر قرار دهید. ما به شما کمک می‌کنیم تا استراتژی فنی خود را به خوبی بیان کنید، یک دموی فنی متقاعدکننده بسازید و به سؤالات دشوار در مورد مقیاس‌پذیری، امنیت و مزیت رقابتی هوش مصنوعی خود پاسخ دهید.</p>
                    </div>
                    <div class="service-card">
                        <h4>۶. مشاوره مستمر پاره‌وقت</h4>
                        <p>ما را به عنوان مشاور فنی بلندمدت خود استخدام کنید. جلسات منظم، راهنمایی استراتژیک و تخصص مورد نیاز در هر زمان دریافت کنید تا بتوانید چالش‌های فنی را در مسیر رشد پشت سر بگذارید و همیشه یک قدم از رقبا جلوتر باشید.</p>
                    </div>
                </div>
            </div>
        </section>



        <div class="container">
            <section class="process-section">
                <h2>فرآیند اثبات‌شده مشاوره ما</h2>
                <p>شفافیت و همکاری، قلب روش کاری ماست. در اینجا مراحل همکاری ما با شما برای دستیابی به نتایج را می‌بینید:</p>
                <div class="process-steps">
                    <div class="step">
                        <div class="step-number">۱</div>
                        <h4>کاوش و شناخت عمیق</h4>
                        <p>ما با درک عمیق چشم‌انداز، بازار، چالش‌ها و اهداف شما شروع می‌کنیم. بدون هیچ‌گونه فرضی، فقط با شنیدن دقیق.</p>
                    </div>
                    <div class="step">
                        <div class="step-number">۲</div>
                        <h4>استراتژی و نقشه راه</h4>
                        <p>ما یک استراتژی واضح و عملیاتی و یک نقشه راه فنی را با هم خلق می‌کنیم، ویژگی‌ها را اولویت‌بندی کرده و دستاوردهای سریع را شناسایی می‌کنیم.</p>
                    </div>
                    <div class="step">
                        <div class="step-number">۳</div>
                        <h4>ساخت و بهبود مستمر</h4>
                        <p>چه توسعه عملی توسط ما باشد و چه نظارت بر تیم شما، ما به سرعت می‌سازیم، تست می‌کنیم و بهبود می‌بخشیم و بر ارائه ارزش تمرکز می‌کنیم.</p>
                    </div>
                    <div class="step">
                        <div class="step-number">۴</div>
                        <h4>راه‌اندازی و مقیاس‌پذیری</h4>
                        <p>ما شما را در مرحله راه‌اندازی پشتیبانی می‌کنیم، عملکرد را پایش کرده و اطمینان حاصل می‌کنیم که سیستم‌های شما برای رشد بی‌درنگ و موفقیت در آینده معماری شده‌اند.</p>
                    </div>
                </div>
            </section>

            <section class="testimonial-section">
                <h2 style="text-align: center; border-right: none; padding-right: 0;">بنیان‌گذاران چه می‌گویند</h2>
                <div class="testimonial-card">
                    <p class="testimonial-text">"ما با پشته تکنولوژی و مشکلات مقیاس‌پذیری دست‌وپنجه نرم می‌کردیم. جواد فقط کد ما را تعمیر نکرد؛ او یک چشم‌انداز استراتژیک شفاف به ما داد که ماه‌ها تلاش بیهوده و هزاران دلار هزینه را برای ما صرفه‌جویی کرد. تخصص او در هوش مصنوعی بی‌نظیر است. او CTOیی است که هر استارتاپ آرزوی دارد."</p>
                    <p class="testimonial-author">سارا جنینگز <span>مدیرعامل، InnovateAI</span></p>
                </div>
            </section>
        </div>



    </main>

<?php get_footer(); ?>