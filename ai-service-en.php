<?php
/**
 * Template Name: AI & Data Solutions
 */

custom_header(); ?>

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

        <section id="consultation">
            <div class="consultation-container">
                <div class="consultation-card">
                    <div class="consultation-header">
                        <h2>Free Consultation</h2>
                        <p>Got an idea in the field of AI? Need technical advice? Let’s talk.</p>
                    </div>
                    <?php
                    $contact = get_key_value_url('contact_ai_en');
                    echo do_shortcode('[contact-form-7 id="'.$contact.'" title="Free Conclusion Fa"]');
                    ?>
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

<?php custom_footer(); ?>