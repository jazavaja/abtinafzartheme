<?php
/**
 * Template Name: AI & Data Solutions
 */

get_header(); ?>

    <style>
        /* ---------------------------------- */
        /* GLOBAL STYLES & TYPOGRAPHY */
        /* ---------------------------------- */
        body {
            margin: 0;
            /* Using a system font stack for modern feel */
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
            /* Primary background: dark blue/black - Using your requested theme color for the body/main background */
            background-color: #020617; /* Main Theme Color */
            color: #ffffff;
            line-height: 1.6;
            /* Ensure all text flows left-to-right */
            direction: ltr;
            text-align: left;
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
            letter-spacing: -0.025em;
            text-align: left; /* Ensure headings align left by default */
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
            border-left: 4px solid #4CAF50;
            padding-left: 1rem;
        }
        h3 {
            font-size: 1.75rem;
            font-weight: 600;
            color: #4CAF50;
        }

        /* ---------------------------------- */
        /* BUTTON STYLES (CTA) - FIXED HOVER & TEXT COLOR */
        /* ---------------------------------- */
        .btn {
            display: inline-block;
            padding: 0.85rem 2rem;
            /* Gradient button */
            background: linear-gradient(90deg, #4CAF50 0%, #66BB6A 100%);
            color: #FFFFFF !important; /* FIXED: Ensure text is white for contrast */
            font-weight: bold;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
            text-decoration: none !important;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.4);
        }
        .btn:hover {
            /* FIXED: Subtle change on hover for better UX */
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
            letter-spacing: 0.1em;
            text-transform: uppercase;
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
            text-align: left; /* FIXED: Ensure content is left-aligned */
            box-shadow: 0 0 0 1px rgba(76, 175, 80, 0.1), 0 10px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        .service-item:hover {
            transform: translateY(-5px);
            background-color: #1f2731;
        }
        .service-item h3 { margin-top: 0; text-align: left; }
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
            border-left: 4px solid #4CAF50;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s;
            text-align: left; /* FIXED: Ensure content is left-aligned */
        }
        .service-card:hover {
            background-color: #161b27;
        }
        .service-card h4 {
            margin-top: 0;
            font-size: 1.25rem;
            color: #E5E7EB;
            font-weight: 600;
            text-align: left;
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
        }
        .usp-list li {
            color: #4CAF50;
            font-weight: 500;
            font-size: 1.1rem;
            text-align: left;
        }
        .usp-list span {
            color: #E5E7EB;
            margin-left: 0.5rem;
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
            border-left: 5px solid #4CAF50;
            text-align: left; /* FIXED: Ensure content is left-aligned */
        }
        .founder-avatar {
            flex-shrink: 0;
            /* Center image only when stacked vertically (handled in media query) */
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
            text-align: left; /* FIXED: Ensure content is left-aligned */
        }
        .founder-title {
            color: #A0AEC0;
            font-style: italic;
            margin-top: -0.5rem;
            margin-bottom: 1.5rem;
        }
        .founder-card h2 {
            border-left: none;
            padding-left: 0;
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
            text-align: left; /* FIXED: Ensure content is left-aligned */
        }
        .principle-card:hover {
            border-color: #4CAF50;
        }
        .principle-header {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        .principle-icon {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4CAF50;
            margin-right: 0.75rem;
            line-height: 1;
        }
        .principle-card h3 {
            margin: 0;
            color: #E5E7EB;
            font-size: 1.3rem;
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
            /* Ensure all text is strictly left-aligned on large screens */
            .founder-card, .founder-content, .service-item, .principle-card,
            .founder-content p, .founder-content h2 {
                text-align: left !important;
            }
        }
    </style>

    <main class="ai-page">
        <section class="hero">
            <div class="container">
                <p class="tagline">Enterprise AI & Data Engineering</p>
                <h1>Future-Proof Intelligence, <br> Built Today.</h1>
                <p class="subtitle">We deploy custom, scalable AI systems for **forecasting, automation, and deep insights**, leveraging modern machine learning and full-stack integration.</p>
                <a href="#ai-solutions" class="btn">Explore AI Solutions</a>
            </div>
        </section>

        <section class="container" id="services-area">
            <h2>Core Expertise</h2>
            <div class="services-grid">
                <div class="service-item">
                    <h3>Forecasting 📈</h3>
                    <p>Predict future market trends, customer behavior, and resource needs with highly accurate, AI-powered models.</p>
                </div>
                <div class="service-item">
                    <h3>Automation 🤖</h3>
                    <p>Streamline complex workflows, decision-making, and data processing using intelligent automation pipelines.</p>
                </div>
                <div class="service-item">
                    <h3>Data Insights 🔎</h3>
                    <p>Transform vast, complex datasets into actionable business intelligence using advanced data science and custom reporting.</p>
                </div>
            </div>
        </section>

        <section class="ai-services-section" id="ai-solutions">
            <div class="container">
                <h2 style="text-align: center;">🧠 AI Services & Capabilities</h2>
                <p class="ai-service-intro">
                    Custom AI Solutions for Forward-Thinking Businesses. Transform your operations, decisions, and customer experiences with enterprise-grade artificial intelligence—built specifically for your industry and challenges.
                </p>

                <div class="service-list">
                    <div class="service-card">
                        <h4>Custom AI & Machine Learning Development</h4>
                        <p>End-to-end design, training, and deployment of ML models tailored to your business data and objectives—from forecasting to anomaly detection.</p>
                    </div>
                    <div class="service-card">
                        <h4>Natural Language Processing (NLP)</h4>
                        <p>Intelligent chatbots, sentiment analysis, document summarization, entity extraction, and multilingual text understanding for seamless human-language interaction.</p>
                    </div>
                    <div class="service-card">
                        <h4>Computer Vision</h4>
                        <p>Image and video analysis for quality control, object detection, barcode/QR reading, visual inspection, and smart surveillance systems.</p>
                    </div>
                    <div class="service-card">
                        <h4>Predictive Analytics & AI-Powered BI</h4>
                        <p>Turn historical data into actionable foresight—predict sales, optimize inventory, assess risk, and automate dynamic reporting with intelligent dashboards.</p>
                    </div>
                    <div class="service-card">
                        <h4>AI-Driven Process Automation (Intelligent RPA)</h4>
                        <p>Automate repetitive, rule-based tasks like invoice processing, data entry, email triage, and CRM updates—enhanced with AI for decision-making.</p>
                    </div>
                    <div class="service-card">
                        <h4>Generative AI Solutions</h4>
                        <p>Leverage cutting-edge generative models for content creation, code assistance, internal knowledge retrieval, synthetic data generation, and more—securely and on your terms.</p>
                    </div>
                    <div class="service-card">
                        <h4>AI Integration with Existing Systems</h4>
                        <p>Seamlessly embed AI capabilities into your current ERP, CRM, or legacy platforms—on-premise or cloud (AWS, Azure, GCP)—with minimal disruption.</p>
                    </div>
                    <div class="service-card">
                        <h4>AI Strategy & Consulting</h4>
                        <p>Identify high-impact AI opportunities, build a realistic roadmap, and align technology with your business goals—before writing a single line of code.</p>
                    </div>
                </div>

                <div class="ai-usp">
                    <h3 style="text-align: center; margin-bottom: 2rem;">Why Partner With Us?</h3>
                    <ul class="usp-list">
                        <li>✅ <span>Proven Industry Experience</span></li>
                        <li>✅ <span>End-to-End Ownership</span></li>
                        <li>✅ <span>Data Privacy & Compliance</span></li>
                        <li>✅ <span>Transparent Collaboration</span></li>
                    </ul>
                </div>

                <div class="ai-cta-footer">
                    <h3 style="color: #E5E7EB;">Ready to Build Your AI Advantage?</h3>
                    <p style="color: #A0AEC0; margin-bottom: 2rem;">Let’s turn your data into intelligence—and your vision into reality.</p>
                    <a href="[Your Schedule Consultation Form Link]" class="btn">
                        👉 Schedule a Free AI Consultation
                    </a>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="founder-card">
                <div class="founder-avatar">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/javad.png"
                         alt="Javad, Full-Stack Developer & AI Engineer" loading="lazy">
                </div>
                <div class="founder-content">
                    <h2>The Engine Behind Our Work</h2>
                    <p class="founder-title">Javad | Founder & Lead AI/Full-Stack Engineer</p>
                    <p>Our solutions are engineered by **Javad**, who brings nearly a decade of experience building intelligent, scalable systems. This unique solo-founder model guarantees that every project benefits from direct, high-level expertise.</p>
                    <p>His combined mastery of **PHP (Laravel)**, **Python (Django & ML/AI)**, and enterprise **Java (Spring Boot)**, alongside modern front-end frameworks, ensures solutions are robust from the database to the browser.</p>
                    <p>From AI stock prediction systems to large-scale fleet management platforms, our commitment is to performance, clean code, and tangible business impact. This singular point of contact ensures seamless communication and full project ownership.</p>
                    <div class="founder-signature">– Committed to excellence in every line of code.</div>
                </div>
            </div>

            <div class="philosophy-section">
                <h2>Our Core Principles</h2>
                <div class="principles-grid">
                    <div class="principle-card">
                        <div class="principle-header">
                            <span class="principle-icon">1.</span>
                            <h3>Full-Stack Depth</h3>
                        </div>
                        <p>Combining full-stack versatility with deep backend and machine learning expertise—ensuring your solutions are not just functional, but robust and future-ready.</p>
                    </div>
                    <div class="principle-card">
                        <div class="principle-header">
                            <span class="principle-icon">2.</span>
                            <h3>Purposeful Coding</h3>
                        </div>
                        <p>Every line of code serves a goal. Solutions are meticulously optimized for performance, security, and long-term maintainability from day one.</p>
                    </div>
                    <div class="principle-card">
                        <div class="principle-header">
                            <span class="principle-icon">3.</span>
                            <h3>Total Ownership</h3>
                        </div>
                        <p>We take full responsibility for generating a tangible real-world impact—we own the project from concept to deployment and beyond, not just the delivery.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>