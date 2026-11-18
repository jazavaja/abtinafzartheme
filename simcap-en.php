<?php
/**
 * Template Name: Simcap Jewelry Project En
 */

custom_header(); ?>

<style>
/* تم لوکس اختصاصی برای simcap.ir (طلایی و مشکی) */
.simcap-theme {
    --gold-primary: #d4af37;
    --gold-glow: rgba(212, 175, 55, 0.25);
}
.simcap-theme .blockchain-hero {
    background: radial-gradient(circle at top, rgba(212, 175, 55, 0.1), transparent 70%);
}
.simcap-theme h1 {
    background: linear-gradient(135deg, #fff 0%, var(--gold-primary) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.simcap-theme .hero-badge {
    background: rgba(212, 175, 55, 0.1);
    border-color: rgba(212, 175, 55, 0.4);
    color: var(--gold-primary);
}
.simcap-theme .service-card {
    background: linear-gradient(145deg, rgba(20, 20, 20, 0.9), rgba(10, 10, 10, 0.9));
    border-color: rgba(212, 175, 55, 0.2);
}
.simcap-theme .service-card:hover {
    border-color: var(--gold-primary);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5), 0 0 20px var(--gold-glow);
    transform: translateY(-5px);
}
.simcap-theme .service-icon {
    background: linear-gradient(135deg, #2a2a2a, #111);
    border: 1px solid var(--gold-primary);
    color: var(--gold-primary);
}
.simcap-theme .tech-badge {
    background: rgba(212, 175, 55, 0.1);
    border-color: rgba(212, 175, 55, 0.3);
    color: var(--gold-primary);
}
.simcap-theme .cta-button {
    background: linear-gradient(135deg, var(--gold-primary), #b38b22);
    color: #000;
    border: none;
    box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
}
.simcap-theme .cta-button:hover {
    box-shadow: 0 15px 30px rgba(212, 175, 55, 0.4);
    transform: translateY(-3px);
}
.simcap-theme .section-title {
    color: var(--gold-primary);
}
.simcap-theme .process-step {
    border-color: rgba(212, 175, 55, 0.3);
}
.simcap-theme .step-number {
    background: var(--gold-primary);
    color: #000;
}
</style>

    <div class="blockchain-services-container simcap-theme">
        <!-- Hero Section -->
        <section class="blockchain-hero">
            <div class="hero-content">
                <h1>💎 Online Jewelry Store</h1>
                <p>Luxury gold and jewelry e-commerce platform with secure payment gateway, inventory and order management.</p>
                <div class="hero-badges">
                    <span class="hero-badge">Laravel</span>
                    <span class="hero-badge">Vue.js</span>
                    <span class="hero-badge">MySQL</span>
                    <span class="hero-badge">Payment Gateway</span>
                </div>
                <div class="cta-button" id="projectConsultationButton">Build a Similar Store</div>
            </div>
            <div class="hero-visual">
                <div class="visual-element">🛍️</div>
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="blockchain-services-section">
            <h2 class="section-title">Key Capabilities</h2>
            <p class="section-description">A seamless and secure shopping experience</p>

            <div class="services-grid">
                <!-- Product Catalog -->
                <div class="service-card">
                    <div class="service-icon">💍</div>
                    <h3>Dynamic Product Catalog</h3>
                    <p>High-performance catalog with advanced filtering, image zooming, and detailed product specs.</p>
                    <ul class="service-features">
                        <li>Category & Tag Filtering</li>
                        <li>High-Resolution Galleries</li>
                        <li>Weight & Price Calculator</li>
                        <li>Related Products</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Vue.js</span>
                        <span class="tech-badge">Laravel</span>
                        <span class="tech-badge">Vuex</span>
                    </div>
                </div>

                <!-- Secure Payment -->
                <div class="service-card">
                    <div class="service-icon">💳</div>
                    <h3>Secure Checkout</h3>
                    <p>Bank-grade security with multi-step checkout and integrated Iranian payment gateways.</p>
                    <ul class="service-features">
                        <li>SSL Encryption</li>
                        <li>Payment Gateway Integration</li>
                        <li>Guest Checkout Option</li>
                        <li>Order Summary</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Payment API</span>
                        <span class="tech-badge">Security</span>
                        <span class="tech-badge">OTP</span>
                    </div>
                </div>

                <!-- Inventory Management -->
                <div class="service-card">
                    <div class="service-icon">📦</div>
                    <h3>Inventory Management</h3>
                    <p>Real-time inventory tracking based on weight, karat, and live gold market prices.</p>
                    <ul class="service-features">
                        <li>Live Gold Price Sync</li>
                        <li>Stock Alerts</li>
                        <li>Multi-Warehouse Support</li>
                        <li>Barcode Integration</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">MySQL</span>
                        <span class="tech-badge">Cron Jobs</span>
                        <span class="tech-badge">APIs</span>
                    </div>
                </div>

                <!-- Order Tracking -->
                <div class="service-card">
                    <div class="service-icon">🚚</div>
                    <h3>Order Tracking & Delivery</h3>
                    <p>End-to-end order tracking from processing to secure delivery at the customer's doorstep.</p>
                    <ul class="service-features">
                        <li>SMS Notifications</li>
                        <li>Tracking Codes</li>
                        <li>Secure Packaging</li>
                        <li>Delivery Status Updates</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">SMS API</span>
                        <span class="tech-badge">Logistics</span>
                        <span class="tech-badge">Webhooks</span>
                    </div>
                </div>

                <!-- Admin Dashboard -->
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3>Powerful Admin Panel</h3>
                    <p>Comprehensive dashboard for managing products, orders, customers, and financial reports.</p>
                    <ul class="service-features">
                        <li>Sales Analytics</li>
                        <li>Customer Management</li>
                        <li>Discount & Coupon System</li>
                        <li>Role-Based Access</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Laravel Nova</span>
                        <span class="tech-badge">Chart.js</span>
                        <span class="tech-badge">RBAC</span>
                    </div>
                </div>

                <!-- User Accounts -->
                <div class="service-card">
                    <div class="service-icon">👤</div>
                    <h3>Customer Accounts</h3>
                    <p>User-friendly profiles for managing addresses, wishlists, order history, and saved items.</p>
                    <ul class="service-features">
                        <li>Order History</li>
                        <li>Wishlist Feature</li>
                        <li>Address Book</li>
                        <li>Profile Settings</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Auth</span>
                        <span class="tech-badge">Sessions</span>
                        <span class="tech-badge">JWT</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Section -->
        <section class="networks-section">
            <h2 class="section-title">Technology Stack</h2>
            <p class="section-description">Robust technologies ensuring fast and reliable e-commerce</p>

            <div class="networks-grid">
                <div class="network-item"><div class="network-logo">🐘</div><span class="network-name">Laravel</span></div>
                <div class="network-item"><div class="network-logo">💚</div><span class="network-name">Vue.js</span></div>
                <div class="network-item"><div class="network-logo">🐬</div><span class="network-name">MySQL</span></div>
                <div class="network-item"><div class="network-logo">💳</div><span class="network-name">Payment Gateway</span></div>
                <div class="network-item"><div class="network-logo">⚡</div><span class="network-name">Redis Cache</span></div>
                <div class="network-item"><div class="network-logo">📦</div><span class="network-name">Docker</span></div>
                <div class="network-item"><div class="network-logo">🔍</div><span class="network-name">Elasticsearch</span></div>
                <div class="network-item"><div class="network-logo">🔒</div><span class="network-name">SSL / Security</span></div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="blockchain-consultation-cta">
            <div class="cta-content">
                <h2>💼 Need an E-Commerce Platform?</h2>
                <p>Want to launch your own online store with a custom design and secure payment? Let's talk—first consultation is free.</p>
                <div class="cta-button" id="mainProjectConsultationButton">Book Free Consultation</div>
            </div>
        </section>
    </div>

    <!-- Consultation Modal -->
    <div class="modal-overlay" id="projectConsultationModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Request a Similar Project</h3>
                <button class="close-modal" id="closeProjectModal">&times;</button>
            </div>
            <?php
            $contact = get_key_value_url('contact_project_en');
            echo do_shortcode('[contact-form-7 id="'.$contact.'" title="Simcap Project En"]');
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