<?php
/**
 * Template Name: Crypto Exchange Project En
 */

custom_header(); ?>

<style>
/* تم نئونی کریپتو (Cyan/Blue) */
.crypto-theme {
    --crypto-primary: #00f2fe;
    --crypto-secondary: #4facfe;
    --crypto-glow: rgba(0, 242, 254, 0.25);
}
.crypto-theme .blockchain-hero {
    background: radial-gradient(circle at top, rgba(0, 242, 254, 0.1), transparent 70%);
}
.crypto-theme h1 {
    background: linear-gradient(135deg, #fff 0%, var(--crypto-primary) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.crypto-theme .hero-badge {
    background: rgba(0, 242, 254, 0.1);
    border-color: rgba(0, 242, 254, 0.4);
    color: var(--crypto-primary);
}
.crypto-theme .service-card {
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.9), rgba(10, 10, 15, 0.9));
    border-color: rgba(0, 242, 254, 0.2);
}
.crypto-theme .service-card:hover {
    border-color: var(--crypto-primary);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5), 0 0 25px var(--crypto-glow);
    transform: translateY(-5px);
}
.crypto-theme .service-icon {
    background: linear-gradient(135deg, #1e293b, #0f172a);
    border: 1px solid var(--crypto-primary);
    color: var(--crypto-primary);
}
.crypto-theme .tech-badge {
    background: rgba(0, 242, 254, 0.1);
    border-color: rgba(0, 242, 254, 0.3);
    color: var(--crypto-primary);
}
.crypto-theme .cta-button {
    background: linear-gradient(135deg, var(--crypto-primary), var(--crypto-secondary));
    color: #0f172a;
    border: none;
    box-shadow: 0 10px 20px rgba(0, 242, 254, 0.2);
}
.crypto-theme .cta-button:hover {
    box-shadow: 0 15px 35px rgba(0, 242, 254, 0.4);
    transform: translateY(-3px);
}
.crypto-theme .section-title {
    color: var(--crypto-primary);
}
.crypto-theme .process-step {
    border-color: rgba(0, 242, 254, 0.3);
}
.crypto-theme .step-number {
    background: var(--crypto-primary);
    color: #0f172a;
}
</style>

    <div class="blockchain-services-container crypto-theme">
        <!-- Hero Section -->
        <section class="blockchain-hero">
            <div class="hero-content">
                <h1>🪙 Digital Currency Exchange</h1>
                <p>Platform for buying and selling digital currencies and crypto assets with wallet integration, transactions, and real-time reporting.</p>
                <div class="hero-badges">
                    <span class="hero-badge">Node.js</span>
                    <span class="hero-badge">React</span>
                    <span class="hero-badge">MongoDB</span>
                    <span class="hero-badge">Blockchain</span>
                </div>
                <div class="cta-button" id="projectConsultationButton">Build a Crypto Exchange</div>
            </div>
            <div class="hero-visual">
                <div class="visual-element">📈</div>
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="blockchain-services-section">
            <h2 class="section-title">Key Capabilities</h2>
            <p class="section-description">Enterprise-grade infrastructure for crypto trading</p>

            <div class="services-grid">
                <!-- Trading Engine -->
                <div class="service-card">
                    <div class="service-icon">⚙️</div>
                    <h3>High-Performance Trading Engine</h3>
                    <p>Ultra-low latency order matching engine capable of handling thousands of transactions per second.</p>
                    <ul class="service-features">
                        <li>Real-time Order Matching</li>
                        <li>Limit & Market Orders</li>
                        <li>Stop-Loss & Take-Profit</li>
                        <li>High Throughput</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Node.js</span>
                        <span class="tech-badge">WebSockets</span>
                        <span class="tech-badge">Redis</span>
                    </div>
                </div>

                <!-- Multi-Currency Wallet -->
                <div class="service-card">
                    <div class="service-icon">👛</div>
                    <h3>Multi-Currency Wallet</h3>
                    <p>Secure hot and cold wallets supporting a wide range of cryptocurrencies and tokens.</p>
                    <ul class="service-features">
                        <li>BTC, ETH, USDT Support</li>
                        <li>Cold Storage Integration</li>
                        <li>Instant Deposits/Withdrawals</li>
                        <li>Address Generation</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Blockchain API</span>
                        <span class="tech-badge">Web3</span>
                        <span class="tech-badge">Security</span>
                    </div>
                </div>

                <!-- Advanced Charts -->
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3>Advanced Trading Charts</h3>
                    <p>Interactive and professional charting tools with real-time market data.</p>
                    <ul class="service-features">
                        <li>Candlestick Charts</li>
                        <li>Technical Indicators</li>
                        <li>Depth Chart</li>
                        <li>Real-time Price Updates</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">React</span>
                        <span class="tech-badge">TradingView</span>
                        <span class="tech-badge">D3.js</span>
                    </div>
                </div>

                <!-- KYC & Security -->
                <div class="service-card">
                    <div class="service-icon">🛡️</div>
                    <h3>KYC & Top-Tier Security</h3>
                    <p>Bank-grade security protocols and automated identity verification systems.</p>
                    <ul class="service-features">
                        <li>Automated KYC/AML</li>
                        <li>Two-Factor Authentication (2FA)</li>
                        <li>Anti-DDoS Protection</li>
                        <li>Withdrawal Whitelists</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">JWT</span>
                        <span class="tech-badge">OAuth</span>
                        <span class="tech-badge">Encryption</span>
                    </div>
                </div>

                <!-- Liquidity Management -->
                <div class="service-card">
                    <div class="service-icon">💧</div>
                    <h3>Liquidity Management</h3>
                    <p>Integration with external liquidity providers to ensure deep order books and minimal slippage.</p>
                    <ul class="service-features">
                        <li>API Liquidity Aggregation</li>
                        <li>Market Making Bots</li>
                        <li>Spread Management</li>
                        <li>Order Book Depth</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">REST API</span>
                        <span class="tech-badge">WebSockets</span>
                        <span class="tech-badge">MongoDB</span>
                    </div>
                </div>

                <!-- Reporting & Admin -->
                <div class="service-card">
                    <div class="service-icon">📑</div>
                    <h3>Admin & Reporting Panel</h3>
                    <p>Comprehensive dashboard for managing users, monitoring trades, and handling financial reports.</p>
                    <ul class="service-features">
                        <li>User Management</li>
                        <li>Transaction Monitoring</li>
                        <li>Fee Configuration</li>
                        <li>Financial Reports</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Node.js</span>
                        <span class="tech-badge">React Admin</span>
                        <span class="tech-badge">MongoDB</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Section -->
        <section class="networks-section">
            <h2 class="section-title">Technology Stack</h2>
            <p class="section-description">Scalable architecture for high-frequency trading</p>

            <div class="networks-grid">
                <div class="network-item"><div class="network-logo">🟢</div><span class="network-name">Node.js</span></div>
                <div class="network-item"><div class="network-logo">⚛️</div><span class="network-name">React</span></div>
                <div class="network-item"><div class="network-logo">🍃</div><span class="network-name">MongoDB</span></div>
                <div class="network-item"><div class="network-logo">🔗</div><span class="network-name">Blockchain API</span></div>
                <div class="network-item"><div class="network-logo">🔴</div><span class="network-name">Redis</span></div>
                <div class="network-item"><div class="network-logo">⚡</div><span class="network-name">WebSockets</span></div>
                <div class="network-item"><div class="network-logo">🐳</div><span class="network-name">Docker</span></div>
                <div class="network-item"><div class="network-logo">🔒</div><span class="network-name">SSL / KYC</span></div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="blockchain-process-section">
            <h2 class="section-title">Trading Flow</h2>
            <p class="section-description">How users interact with the exchange</p>

            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Registration & KYC</h3>
                    <p>Users sign up, verify their identity, and secure their accounts with 2FA.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Deposit Funds</h3>
                    <p>Users deposit fiat or crypto into their secure exchange wallets.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Execute Trades</h3>
                    <p>Users place buy/sell orders, matched instantly by the high-performance engine.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Withdraw Assets</h3>
                    <p>Users withdraw their funds securely to external wallets or bank accounts.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="blockchain-consultation-cta">
            <div class="cta-content">
                <h2>💼 Want to Launch a Crypto Exchange?</h2>
                <p>Need a secure, fast, and reliable trading platform? Let's discuss your project over a free consultation.</p>
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
            echo do_shortcode('[contact-form-7 id="'.$contact.'" title="Crypto Exchange Project En"]');
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