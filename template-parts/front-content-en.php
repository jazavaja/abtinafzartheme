<?php
/**
 * Template Name: Home Page English
 */
?>
<!-- Hero Section -->
<section class="hero">
    <div class="hero-gradient"></div>
    <div class="particles" id="particles"></div>
    <div class="hero-content">
        <span class="hero-badge">Mohammad Javad Sarlak - Founder & CEO</span>
        <h1>AbtinafzarJavan Company</h1>
        <p class="hero-subtitle">Building intelligent, scalable systems that power the future of
            business</p>
        <div class="hero-buttons">
            <a href="#projects" class="btn btn-primary">Explore Projects</a>
            <a href="#consultation" class="btn btn-outline">Free Consultation</a>
        </div>
    </div>
    <div class="scroll-indicator"></div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects-section">
    <div class="projects-header reveal reveal-delay-1">
        <h2 class="section-title">Featured Projects</h2>
        <p class="section-subtitle reveal reveal-delay-2">Latest works by Abtinafzar team</p>
    </div>
    <div class="projects-grid">
        <div class="project-card reveal reveal-delay-3">
            <div class="card-glow"></div>
            <span class="card-number">01</span>
            <div class="card-content">
                <span class="card-tech"><span></span>RAG · LLM · Python · FastAPI</span>
                <h3>Saman Bank FinTech Chatbot</h3>
                <p>AI-powered chatbot based on RAG and Large Language Models for customer inquiries and banking transactions.</p>
                <a href="#" class="card-link">View Project <span>→</span></a>
            </div>
        </div>
        <div class="project-card reveal reveal-delay-4">
            <div class="card-glow"></div>
            <span class="card-number">02</span>
            <div class="card-content">
                <span class="card-tech"><span></span>AI · Python · Django · PostgreSQL</span>
                <h3>Purchase Optimization & Queue Bot — Pasargad Oil</h3>
                <p>Intelligent system for purchase time optimization, queue management, and autonomous buying for Pasargad Oil Company.</p>
                <a href="#" class="card-link">View Project <span>→</span></a>
            </div>
        </div>
        <div class="project-card reveal reveal-delay-5">
            <div class="card-glow"></div>
            <span class="card-number">03</span>
            <div class="card-content">
                <span class="card-tech"><span></span>Laravel · Vue.js · MySQL · Payment</span>
                <h3>Online Jewelry Store — simcap.ir</h3>
                <p>Online gold and jewelry e-commerce platform with payment gateway, inventory and order management.</p>
                <a href="#" class="card-link">View Project <span>→</span></a>
            </div>
        </div>
        <div class="project-card reveal reveal-delay-3">
            <div class="card-glow"></div>
            <span class="card-number">04</span>
            <div class="card-content">
                <span class="card-tech"><span></span>Node.js · React · MongoDB · Blockchain</span>
        <h3>Digital Currency Exchange</h3>
        <p>Platform for buying and selling digital currencies and crypto assets with wallet integration, transactions, and real-time reporting.</p>
                <a href="#" class="card-link">View Project <span>→</span></a>
            </div>
        </div>
        <div class="project-card reveal reveal-delay-4">
            <div class="card-glow"></div>
            <span class="card-number">05</span>
            <div class="card-content">
                <span class="card-tech"><span></span>Laravel · Vue.js · MySQL · API</span>
                <h3>Isatis Brokerage CRM</h3>
                <p>Customer relationship, lead and sales pipeline management platform for Isatis brokerage.</p>
                <a href="#" class="card-link">View Project <span>→</span></a>
            </div>
        </div>
        <div class="project-card reveal reveal-delay-5">
            <div class="card-glow"></div>
            <span class="card-number">06</span>
            <div class="card-content">
                <span class="card-tech"><span></span>Rust · NNUE · Chess · AI</span>
                <h3>Smart Chess Engine (Rust + NNUE)</h3>
                <p>Chess engine written in Rust using NNUE technique for position evaluation and move search.</p>
                <a href="#" class="card-link">View Project <span>→</span></a>
            </div>
        </div>
        <div class="project-card reveal reveal-delay-6">
            <div class="card-glow"></div>
            <span class="card-number">07</span>
            <div class="card-content">
                <span class="card-tech"><span></span>Python · OR-Tools · Algorithm · Logistics</span>
                <h3>Carton Design & Pallet Layout Optimizer</h3>
                <p>Intelligent software for carton cutting optimization, pallet layout planning, and material waste reduction.</p>
                <a href="#" class="card-link">View Project <span>→</span></a>
            </div>
        </div>
    </div>
</section>

<!-- Consultation Section -->
<section id="consultation">
    <div class="consultation-container">
        <div class="consultation-card">
            <div class="consultation-header">
                <h2> Free Consultation</h2>
                <p>Have an idea? Need technical advice? Let's talk—no obligation</p>
            </div>
            <?php
            $contact = get_key_value_url('contact_front_en');
            echo do_shortcode('[contact-form-7 id="'.$contact.'" title="Free Conclusion"]');
            ?>
        </div>
    </div>
</section>

<!-- Services Section -->

<?php

$web = esc_html( get_key_value_url('web_develop_url_en') );
$ai =  esc_html( get_key_value_url('ai_url_en') );
$enterprise  =  esc_html( get_key_value_url('enterprise_url_en') );
$blockchain  =  esc_html( get_key_value_url('blockchain_url_en') );
$consultation  =  esc_html( get_key_value_url('consultation_startups_url_en') );
$training   =  esc_html( get_key_value_url('training_url_en') );

?>
<section id="services">
    <h2 class="section-title">My Services</h2>
    <p class="section-subtitle">What I Can Do for You</p>
    <div class="services-grid">
        <a href="<?php echo $web ?>" class="service-card">
            <div class="service-icon">🚀</div>
            <h3>Full-Stack Web Development</h3>
            <p>We build any web-based platform you can imagine — using modern stacks such as Django, Laravel, and React.</p>
        </a>
        <a href="<?php echo $ai ?>" class="service-card">
            <div class="service-icon">🧠</div>
            <h3>AI and Data Solutions</h3>
            <p>Intelligent systems for prediction, automation, and insights using machine learning and data engineering.</p>
        </a>
        <a href="<?php echo $enterprise ?>" class="service-card">
            <div class="service-icon">🏛️</div>
            <h3>Enterprise Management Systems</h3>
            <p>Comprehensive platforms for universities, schools, and brokerages built with Java, Spring, and secure architectures.</p>
        </a>
        <a href="<?php echo $blockchain ?>" class="service-card">
            <div class="service-icon">🔗</div>
            <h3>Blockchain and Web3 Solutions</h3>
            <p>End-to-end development of decentralized applications, smart contracts, and token ecosystems on Ethereum and other blockchains.</p>
        </a>
        <a href="<?php echo $consultation ?>" class="service-card">
            <div class="service-icon">💡</div>
            <h3>Startup Consultation</h3>
            <p>Expert guidance in product architecture, technology stack selection, and scalable development roadmaps.</p>
        </a>
        <a href="<?php echo $training ?>" class="service-card">
            <div class="service-icon">🎓</div>
            <h3>Professional Training & Workshops</h3>
            <p>Hands-on technical training in web development, artificial intelligence, and system design for teams and students.</p>
        </a>
    </div>
</section>


<script>
    // Generate floating particles
    const particlesContainer = document.getElementById('particles');
    for (let i = 0; i < 50; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 20 + 's';
        particle.style.animationDuration = (Math.random() * 10 + 15) + 's';
        particlesContainer.appendChild(particle);
    }

    // Smooth scroll for navigation
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({behavior: 'smooth', block: 'start'});
            }
        });
    });

    // Reveal-on-scroll animation for projects section
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>

