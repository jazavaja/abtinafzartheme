<?php
/**
 * Template Name: Home Page English
 */

get_header(); ?>
yuyuy
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
    <section id="projects">
        <h2 class="section-title">Featured Projects</h2>
        <p class="section-subtitle">Swipe to explore my work</p>
        <div class="projects-carousel">
            <div class="projects-track" id="projectsTrack">
                <div class="project-circle">
                    <span class="project-number">01</span>
                    <span class="tech-badge">Django + React + PostgreSQL</span>
                    <h3>FleetManager</h3>
                    <p>Real-time GPS tracking, maintenance scheduling, and analytics for fleet operations.</p>
                </div>
                <div class="project-circle">
                    <span class="project-number">02</span>
                    <span class="tech-badge">Python + TensorFlow + Keras</span>
                    <h3>AI Stock Predictor</h3>
                    <p>Market trend forecasting with 89% accuracy using deep learning and technical indicators.</p>
                </div>
                <div class="project-circle">
                    <span class="project-number">03</span>
                    <span class="tech-badge">Laravel + Vue.js + MySQL</span>
                    <h3>E-Commerce Backend</h3>
                    <p>Scalable API with payment, inventory, and user management for online retail.</p>
                </div>
                <div class="project-circle">
                    <span class="project-number">04</span>
                    <span class="tech-badge">Spring + Java + Oracle</span>
                    <h3>University CRM System</h3>
                    <p>Student lifecycle and support management platform for universities.</p>
                </div>
                <div class="project-circle">
                    <span class="project-number">05</span>
                    <span class="tech-badge">React + Laravel + AI Services</span>
                    <h3>Easyka Smart School Platform</h3>
                    <p>AI-powered school management with finance, homework, and admin automation.</p>
                </div>
                <div class="project-circle">
                    <span class="project-number">06</span>
                    <span class="tech-badge">Python + Scrapy + Selenium</span>
                    <h3>Advanced Data Scraper</h3>
                    <p>Robust tool for extracting dynamic data from complex websites at scale.</p>
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
                <form class="consultation-form">
                    <div class="form-grid">
                        <div class="form-group">
                            <input type="text" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="Mobile" required>
                        </div>
                    </div>
                    <div class="form-group full-width">
                        <textarea placeholder="Your Message" required></textarea>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            Send Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <h2 class="section-title">My Services</h2>
        <p class="section-subtitle">What I can do for you</p>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🚀</div>
                <h3>End-to-End Web Development</h3>
                <p>SWe build any web-based platform you envision—using modern stacks like Django, Laravel, and React.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🧠</div>
                <h3>AI & Data Solutions</h3>
                <p>Intelligent systems for forecasting, automation, and insights using machine learning and advanced data pipelines</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🏛️</div>
                <h3>Enterprise Management Systems</h3>
                <p>Comprehensive platforms for universities, schools, and brokerages using Java, Spring, and secure architectures</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🔗</div>
                <h3>Blockchain & Web3 Solutions</h3>
                <p>End-to-end development of decentralized apps, smart contracts, and token ecosystems on Ethereum and other blockchains</p>
            </div>
            <div class="service-card">
                <div class="service-icon">💡</div>
                <h3>Consultation Startups & Businesses</h3>
                <p>Expert guidance on product architecture, tech stack selection, and scalable development roadmaps</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🎓</div>
                <h3>Professional Training & Workshops</h3>
                <p>Hands-on technical training in web development, AI, and system design for teams and students</p>
            </div>
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

        // Auto-scroll projects with pause on hover
        const projectsTrack = document.getElementById('projectsTrack');
        let scrollAmount = 0;
        let isScrolling = true;
        let autoScrollInterval;

        function startAutoScroll() {
            autoScrollInterval = setInterval(() => {
                if (isScrolling) {
                    projectsTrack.scrollLeft += 8;

                    // Reset to start when reaching the end
                    if (projectsTrack.scrollLeft >= projectsTrack.scrollWidth - projectsTrack.clientWidth - 1) {
                        projectsTrack.scrollLeft = 0;
                    }
                }
            }, 20);
        }

        // Pause on hover
        projectsTrack.addEventListener('mouseenter', () => {
            isScrolling = false;
        });

        // Resume on mouse leave
        projectsTrack.addEventListener('mouseleave', () => {
            isScrolling = true;
        });

        // Manual scroll with mouse wheel
        projectsTrack.addEventListener('wheel', (e) => {
            e.preventDefault();
            projectsTrack.scrollLeft += e.deltaY;
            isScrolling = false;

            // Resume auto-scroll after 2 seconds of no manual scrolling
            clearTimeout(scrollAmount);
            scrollAmount = setTimeout(() => {
                isScrolling = true;
            }, 2000);
        });

        // Start auto-scroll
        startAutoScroll();
    </script>

<?php get_footer(); ?>