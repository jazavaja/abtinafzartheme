<?php
/**
 * Template Name: Startup Consulting En
 */

get_header(); ?>

    <style>
        /* ---------------------------------- */
        /* GLOBAL STYLES & TYPOGRAPHY (Inheriting & Tweaking) */
        /* ---------------------------------- */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', sans-serif;
            background-color: #020617;
            color: #ffffff;
            line-height: 1.6;
            direction: ltr; /* Ensure LTR for English */
            text-align: left; /* Default text alignment */
        }
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
            border-left: 4px solid #4CAF50; /* LTR border */
            padding-left: 1rem;
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
            background: linear-gradient(90deg, #4CAF50 0%, #66BB6A 100%);
            color: #FFFFFF !important;
            font-weight: bold;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
            text-decoration: none !important;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.4);
            font-size: 1.1rem;
        }
        .btn:hover {
            background: linear-gradient(90deg, #66BB6A 0%, #4CAF50 100%);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(76, 175, 80, 0.6);
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
            text-transform: uppercase;
            letter-spacing: 1px;
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
            border-left: none;
            padding-left: 0;
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
            border-left: 4px solid #4CAF50;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s;
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
            left: 50px;
            right: 50px;
            height: 4px;
            background: linear-gradient(90deg, #4CAF50, #66BB6A);
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
            border-left: 5px solid #4CAF50;
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
            border-left: none;
            padding-left: 0;
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
                <p class="tagline">Startup Consulting</p>
                <h1>From Idea to Scalable Reality. Faster.</h1>
                <p class="subtitle">Navigate the complexities of launching and scaling your tech startup with expert guidance in AI, data strategy, and full-stack development. We turn your vision into a market-ready product.</p>
                <a href="#consulting-services" class="btn">Explore Our Consulting Packages</a>
            </div>
        </section>

        <div class="container">
            <section id="the-problem">
                <h2>The Startup Journey is Fraught with Challenges</h2>
                <p>Many brilliant ideas never see the light of day due to common, yet avoidable, pitfalls. Are you facing these challenges?</p>
                <div class="problem-solution-grid">
                    <div class="grid-item">
                        <h3><span class="icon">💸</span> Burn Rate & Budget</h3>
                        <p>Limited capital and a high burn rate can kill your startup before it finds product-market fit. Wasting funds on the wrong technology or inefficient processes is a critical error.</p>
                    </div>
                    <div class="grid-item">
                        <h3><span class="icon">🛠️</span> Tech Stack Paralysis</h3>
                        <p>Choosing the wrong technology stack early on can lead to massive refactoring costs, scalability issues, and security vulnerabilities down the line.</p>
                    </div>
                    <div class="grid-item">
                        <h3><span class="icon">🎯</span> Product-Market Fit</h3>
                        <p>Building a product that nobody wants is the #1 reason startups fail. We help you define your MVP, validate assumptions, and iterate based on real user data.</p>
                    </div>
                </div>
            </section>

            <section id="the-solution">
                <h2>Your Strategic Partner for Success</h2>
                <p>We don't just write code; we build foundations for sustainable growth. Our consulting services are designed to de-risk your journey and accelerate your path to success.</p>
                <div class="problem-solution-grid">
                    <div class="grid-item">
                        <h3><span class="icon">🧠</span> AI-First Strategy</h3>
                        <p>Integrate AI from day one to create a competitive moat. We identify opportunities for automation, predictive analytics, and unique user experiences that set you apart.</p>
                    </div>
                    <div class="grid-item">
                        <h3><span class="icon">🏗️</span> Scalable Architecture</h3>
                        <p>We design and build robust, secure, and scalable systems using modern best practices, ensuring your technology grows seamlessly with your user base.</p>
                    </div>
                    <div class="grid-item">
                        <h3><span class="icon">📈</span> Data-Driven Decisions</h3>
                        <p>Establish a culture of data from the start. We help you set up the right analytics, dashboards, and feedback loops to make informed decisions and pivot quickly.</p>
                    </div>
                </div>
            </section>
        </div>

        <section class="services-offered" id="consulting-services">
            <div class="container">
                <h2>Our Consulting Packages</h2>
                <div class="services-list">
                    <div class="service-card">
                        <h4>1. Idea & MVP Validation</h4>
                        <p>Perfect for pre-seed or idea-stage startups. We help you refine your concept, define a Minimum Viable Product (MVP), create a technical roadmap, and build a prototype to attract early investors and users.</p>
                    </div>
                    <div class="service-card">
                        <h4>2. Technical Architecture & CTO-as-a-Service</h4>
                        <p>For startups needing expert technical leadership without the cost of a full-time CTO. We design your entire tech stack, oversee development, ensure best practices, and build your initial engineering team.</p>
                    </div>
                    <div class="service-card">
                        <h4>3. AI & Data Integration</h4>
                        <p>Already have a product but want to leverage AI? We audit your current systems, identify high-impact AI opportunities (forecasting, NLP, personalization), and implement custom machine learning solutions.</p>
                    </div>
                    <div class="service-card">
                        <h4>4. Scaling & Performance Optimization</h4>
                        <p>Is your app slowing down as you grow? We conduct a thorough performance audit, refactor bottlenecks, optimize your database, and architect your infrastructure for high traffic and global scalability.</p>
                    </div>
                    <div class="service-card">
                        <h4>5. Fundraising & Pitch Deck Technical Support</h4>
                        <p>Impress investors with a solid technical plan. We help you articulate your technology strategy, build a compelling tech demo, and answer tough questions about scalability, security, and your AI moat.</p>
                    </div>
                    <div class="service-card">
                        <h4>6. Ongoing Fractional Advisory</h4>
                        <p>Retain us as your long-term technical advisor. Get regular check-ins, strategic guidance, and on-demand expertise to navigate technical challenges as you scale, ensuring you stay ahead of the curve.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <section class="process-section">
                <h2>Our Proven Consulting Process</h2>
                <p>Transparency and collaboration are at the heart of our methodology. Here’s how we partner with you to achieve results.</p>
                <div class="process-steps">
                    <div class="step">
                        <div class="step-number">1</div>
                        <h4>Deep Dive Discovery</h4>
                        <p>We start by understanding your vision, market, challenges, and goals inside and out. No assumptions, just deep listening.</p>
                    </div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <h4>Strategy & Roadmap</h4>
                        <p>We co-create a clear, actionable strategy and a technical roadmap, prioritizing features and identifying quick wins.</p>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <h4>Build & Iterate</h4>
                        <p>Whether it's hands-on development or overseeing your team, we build, test, and iterate rapidly, focusing on delivering value.</p>
                    </div>
                    <div class="step">
                        <div class="step-number">4</div>
                        <h4>Launch & Scale</h4>
                        <p>We support you through launch, monitor performance, and ensure your systems are architected for seamless growth and future success.</p>
                    </div>
                </div>
            </section>

            <section class="testimonial-section">
                <h2 style="text-align: center; border-left: none; padding-left: 0;">What Founders Say</h2>
                <div class="testimonial-card">
                    <p class="testimonial-text">"We were struggling with our tech stack and scaling issues. Javad didn't just fix our code; he provided a clear strategic vision that saved us months of wasted effort and thousands of dollars. His expertise in AI is second to none. He's the CTO every startup wishes they had."</p>
                    <p class="testimonial-author">Sarah Jenkins <span>CEO, InnovateAI</span></p>
                </div>
            </section>
        </div>

        <section class="final-cta">
            <div class="container">
                <h2>Ready to Build Your Future?</h2>
                <p>Stop guessing and start building with confidence. Let's schedule a no-obligation discovery call to discuss your startup's unique challenges and how we can help you overcome them.</p>
                <a href="[Your Calendly or Contact Form Link]" class="btn">Book Your Free Discovery Call</a>
            </div>
        </section>

    </main>

<?php get_footer(); ?>