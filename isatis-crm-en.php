<?php
/**
 * Template Name: Isatis CRM Project En
 */

custom_header(); ?>

<style>
/* تم سازمانی و داده‌محور (Corporate Blue/Indigo) */
.crm-theme {
    --crm-primary: #3b82f6;
    --crm-secondary: #8b5cf6;
    --crm-glow: rgba(59, 130, 246, 0.25);
}
.crm-theme .blockchain-hero {
    background: radial-gradient(circle at top, rgba(59, 130, 246, 0.1), transparent 70%);
}
.crm-theme h1 {
    background: linear-gradient(135deg, #fff 0%, var(--crm-primary) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.crm-theme .hero-badge {
    background: rgba(59, 130, 246, 0.1);
    border-color: rgba(59, 130, 246, 0.4);
    color: var(--crm-primary);
}
.crm-theme .service-card {
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.95), rgba(10, 15, 30, 0.95));
    border-color: rgba(59, 130, 246, 0.2);
}
.crm-theme .service-card:hover {
    border-color: var(--crm-primary);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5), 0 0 25px var(--crm-glow);
    transform: translateY(-5px);
}
.crm-theme .service-icon {
    background: linear-gradient(135deg, #1e293b, #0f172a);
    border: 1px solid var(--crm-primary);
    color: var(--crm-primary);
}
.crm-theme .tech-badge {
    background: rgba(59, 130, 246, 0.1);
    border-color: rgba(59, 130, 246, 0.3);
    color: var(--crm-primary);
}
.crm-theme .cta-button {
    background: linear-gradient(135deg, var(--crm-primary), var(--crm-secondary));
    color: #fff;
    border: none;
    box-shadow: 0 10px 20px rgba(59, 130, 246, 0.2);
}
.crm-theme .cta-button:hover {
    box-shadow: 0 15px 35px rgba(59, 130, 246, 0.4);
    transform: translateY(-3px);
}
.crm-theme .section-title {
    color: var(--crm-primary);
}
.crm-theme .process-step {
    border-color: rgba(59, 130, 246, 0.3);
}
.crm-theme .step-number {
    background: var(--crm-primary);
    color: #fff;
}
</style>

    <div class="blockchain-services-container crm-theme">
        <!-- Hero Section -->
        <section class="blockchain-hero">
            <div class="hero-content">
                <h1>🏢 Isatis Brokerage CRM</h1>
                <p>Comprehensive customer relationship, lead, and sales pipeline management platform for Isatis brokerage.</p>
                <div class="hero-badges">
                    <span class="hero-badge">Laravel</span>
                    <span class="hero-badge">Vue.js</span>
                    <span class="hero-badge">MySQL</span>
                    <span class="hero-badge">REST API</span>
                </div>
                <div class="cta-button" id="projectConsultationButton">Build a Custom CRM</div>
            </div>
            <div class="hero-visual">
                <div class="visual-element">📈</div>
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="blockchain-services-section">
            <h2 class="section-title">Key Capabilities</h2>
            <p class="section-description">Streamlining sales and customer management</p>

            <div class="services-grid">
                <!-- Lead Management -->
                <div class="service-card">
                    <div class="service-icon">🎯</div>
                    <h3>Lead Management</h3>
                    <p>Capture, track, and score leads from various sources to ensure no potential client is missed.</p>
                    <ul class="service-features">
                        <li>Lead Scoring System</li>
                        <li>Auto-Assignment</li>
                        <li>Source Tracking</li>
                        <li>Status Updates</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Vue.js</span>
                        <span class="tech-badge">Laravel</span>
                        <span class="tech-badge">MySQL</span>
                    </div>
                </div>

                <!-- Sales Pipeline -->
                <div class="service-card">
                    <div class="service-icon">🚀</div>
                    <h3>Visual Sales Pipeline</h3>
                    <p>Drag-and-drop Kanban boards to visualize deals moving through the sales funnel.</p>
                    <ul class="service-features">
                        <li>Kanban View</li>
                        <li>Deal Tracking</li>
                        <li>Revenue Forecasting</li>
                        <li>Stages Customization</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Vue Draggable</span>
                        <span class="tech-badge">REST API</span>
                        <span class="tech-badge">Laravel</span>
                    </div>
                </div>

                <!-- Customer 360 -->
                <div class="service-card">
                    <div class="service-icon">👤</div>
                    <h3>360-Degree Customer Profiles</h3>
                    <p>A complete view of every client, including interaction history, documents, and transaction status.</p>
                    <ul class="service-features">
                        <li>Interaction History</li>
                        <li>Document Management</li>
                        <li>Account Balances (API)</li>
                        <li>Custom Fields</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">MySQL</span>
                        <span class="tech-badge">Eloquent ORM</span>
                        <span class="tech-badge">OAuth2</span>
                    </div>
                </div>

                <!-- Task Management -->
                <div class="service-card">
                    <div class="service-icon">📅</div>
                    <h3>Task & Activity Management</h3>
                    <p>Never miss a follow-up with integrated calendars, reminders, and activity logs.</p>
                    <ul class="service-features">
                        <li>Task Reminders</li>
                        <li>Meeting Scheduling</li>
                        <li>Call Logs</li>
                        <li>Email Integration</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Vue.js</span>
                        <span class="tech-badge">Cron Jobs</span>
                        <span class="tech-badge">SMTP</span>
                    </div>
                </div>

                <!-- Analytics -->
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3>Analytics & Reporting</h3>
                    <p>Data-driven dashboards to track agent performance, conversion rates, and overall sales health.</p>
                    <ul class="service-features">
                        <li>Conversion Rates</li>
                        <li>Agent Performance</li>
                        <li>Sales Velocity</li>
                        <li>Exportable Reports</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Chart.js</span>
                        <span class="tech-badge">SQL</span>
                        <span class="tech-badge">Laravel</span>
                    </div>
                </div>

                <!-- Role-Based Access -->
                <div class="service-card">
                    <div class="service-icon">🔐</div>
                    <h3>Role-Based Access Control</h3>
                    <p>Granular permissions to ensure data security across different levels of the organization.</p>
                    <ul class="service-features">
                        <li>Admin & Agent Roles</li>
                        <li>Data Visibility Rules</li>
                        <li>Audit Logs</li>
                        <li>Secure Authentication</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Laravel Gates</span>
                        <span class="tech-badge">JWT</span>
                        <span class="tech-badge">Security</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Section -->
        <section class="networks-section">
            <h2 class="section-title">Technology Stack</h2>
            <p class="section-description">Robust backend and reactive frontend for enterprise CRM</p>

            <div class="networks-grid">
                <div class="network-item"><div class="network-logo">🐘</div><span class="network-name">Laravel</span></div>
                <div class="network-item"><div class="network-logo">💚</div><span class="network-name">Vue.js</span></div>
                <div class="network-item"><div class="network-logo">🐬</div><span class="network-name">MySQL</span></div>
                <div class="network-item"><div class="network-logo">🔗</div><span class="network-name">REST API</span></div>
                <div class="network-item"><div class="network-logo">🔴</div><span class="network-name">Redis</span></div>
                <div class="network-item"><div class="network-logo">📈</div><span class="network-name">Chart.js</span></div>
                <div class="network-item"><div class="network-logo">🐳</div><span class="network-name">Docker</span></div>
                <div class="network-item"><div class="network-logo">🔒</div><span class="network-name">OAuth2</span></div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="blockchain-process-section">
            <h2 class="section-title">Sales Pipeline Workflow</h2>
            <p class="section-description">From lead acquisition to closed deal</p>

            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Capture & Qualify</h3>
                    <p>Leads enter the system and are scored based on their potential to become clients.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Engage & Nurture</h3>
                    <p>Agents schedule follow-ups, log calls, and send targeted communications.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Propose & Negotiate</h3>
                    <p>Deals are moved through the Kanban pipeline as proposals are presented and discussed.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Close & Onboard</h3>
                    <p>Deals are marked as won, and the customer is officially onboarded into the brokerage system.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="blockchain-consultation-cta">
            <div class="cta-content">
                <h2>💼 Need a Custom CRM for Your Business?</h2>
                <p>Off-the-shelf CRMs not cutting it? Let's build a custom system tailored exactly to your sales workflow.</p>
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
            echo do_shortcode('[contact-form-7 id="'.$contact.'" title="Isatis CRM Project En"]');
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