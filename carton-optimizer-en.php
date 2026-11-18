<?php
/**
 * Template Name: Carton Optimizer Project En
 */

custom_header(); ?>

<style>
/* تم صنعتی و لجستیکی (Industrial Amber) */
.carton-theme {
    --carton-primary: #f59e0b;
    --carton-secondary: #d97706;
    --carton-glow: rgba(245, 158, 11, 0.25);
}
.carton-theme .blockchain-hero {
    background: radial-gradient(circle at top, rgba(245, 158, 11, 0.1), transparent 70%);
}
.carton-theme h1 {
    background: linear-gradient(135deg, #fff 0%, var(--carton-primary) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.carton-theme .hero-badge {
    background: rgba(245, 158, 11, 0.1);
    border-color: rgba(245, 158, 11, 0.4);
    color: var(--carton-primary);
}
.carton-theme .service-card {
    background: linear-gradient(145deg, rgba(20, 25, 30, 0.95), rgba(10, 15, 20, 0.95));
    border-color: rgba(245, 158, 11, 0.2);
}
.carton-theme .service-card:hover {
    border-color: var(--carton-primary);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5), 0 0 25px var(--carton-glow);
    transform: translateY(-5px);
}
.carton-theme .service-icon {
    background: linear-gradient(135deg, #1e293b, #0f172a);
    border: 1px solid var(--carton-primary);
    color: var(--carton-primary);
}
.carton-theme .tech-badge {
    background: rgba(245, 158, 11, 0.1);
    border-color: rgba(245, 158, 11, 0.3);
    color: var(--carton-primary);
}
.carton-theme .cta-button {
    background: linear-gradient(135deg, var(--carton-primary), var(--carton-secondary));
    color: #0f172a;
    border: none;
    box-shadow: 0 10px 20px rgba(245, 158, 11, 0.2);
}
.carton-theme .cta-button:hover {
    box-shadow: 0 15px 35px rgba(245, 158, 11, 0.4);
    transform: translateY(-3px);
}
.carton-theme .section-title {
    color: var(--carton-primary);
}
.carton-theme .process-step {
    border-color: rgba(245, 158, 11, 0.3);
}
.carton-theme .step-number {
    background: var(--carton-primary);
    color: #0f172a;
}
</style>

    <div class="blockchain-services-container carton-theme">
        <!-- Hero Section -->
        <section class="blockchain-hero">
            <div class="hero-content">
                <h1>📦 Carton & Pallet Optimizer</h1>
                <p>Intelligent software for carton cutting optimization, pallet layout planning, and material waste reduction using advanced algorithms.</p>
                <div class="hero-badges">
                    <span class="hero-badge">Python</span>
                    <span class="hero-badge">OR-Tools</span>
                    <span class="hero-badge">Algorithm</span>
                    <span class="hero-badge">Logistics</span>
                </div>
                <div class="cta-button" id="projectConsultationButton">Optimize Your Logistics</div>
            </div>
            <div class="hero-visual">
                <div class="visual-element">🏭</div>
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="blockchain-services-section">
            <h2 class="section-title">Key Capabilities</h2>
            <p class="section-description">Maximizing efficiency in warehousing and packaging</p>

            <div class="services-grid">
                <!-- Carton Optimization -->
                <div class="service-card">
                    <div class="service-icon">📐</div>
                    <h3>Carton Cutting Optimization</h3>
                    <p>Mathematical algorithms to determine the most efficient cutting patterns to minimize cardboard waste.</p>
                    <ul class="service-features">
                        <li>2D Cutting Stock Problem</li>
                        <li>Minimal Waste Calculation</li>
                        <li>Custom Size Generation</li>
                        <li>Automated Marking</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Python</span>
                        <span class="tech-badge">OR-Tools</span>
                        <span class="tech-badge">Math</span>
                    </div>
                </div>

                <!-- Pallet Layout -->
                <div class="service-card">
                    <div class="service-icon">📦</div>
                    <h3>Pallet Layout Planning</h3>
                    <p>3D bin packing algorithms to arrange boxes on pallets for maximum volume utilization and stability.</p>
                    <ul class="service-features">
                        <li>3D Bin Packing</li>
                        <li>Weight Distribution</li>
                        <li>Stability Constraints</li>
                        <li>Max Volume Utilization</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">OR-Tools</span>
                        <span class="tech-badge">3D Math</span>
                        <span class="tech-badge">Heuristics</span>
                    </div>
                </div>

                <!-- 3D Visualization -->
                <div class="service-card">
                    <div class="service-icon">👁️</div>
                    <h3>Interactive 3D Visualization</h3>
                    <p>See the exact layout of the cartons on the pallet in a 3D environment before packing.</p>
                    <ul class="service-features">
                        <li>Rotate & Zoom</li>
                        <li>Layer-by-Layer View</li>
                        <li>Collision Detection</li>
                        <li>Export Blueprint</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Three.js</span>
                        <span class="tech-badge">WebGL</span>
                        <span class="tech-badge">Python</span>
                    </div>
                </div>

                <!-- Constraint Solving -->
                <div class="service-card">
                    <div class="service-icon">⚙️</div>
                    <h3>Complex Constraint Solving</h3>
                    <p>Handling real-world constraints like maximum weight, fragile items, and height limits.</p>
                    <ul class="service-features">
                        <li>Max Weight Limits</li>
                        <li>Fragile Item Rules</li>
                        <li>Height Restrictions</li>
                        <li>Stacking Limits</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">CP-SAT</span>
                        <span class="tech-badge">Linear Programming</span>
                        <span class="tech-badge">Logic</span>
                    </div>
                </div>

                <!-- Data Import/Export -->
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3>Bulk Data Processing</h3>
                    <p>Import thousands of orders from Excel or ERP systems and optimize them in batches.</p>
                    <ul class="service-features">
                        <li>Excel/CSV Integration</li>
                        <li>ERP API Connections</li>
                        <li>Batch Processing</li>
                        <li>Exportable Reports</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Pandas</span>
                        <span class="tech-badge">REST API</span>
                        <span class="tech-badge">Excel</span>
                    </div>
                </div>

                <!-- Cloud Deployment -->
                <div class="service-card">
                    <div class="service-icon">☁️</div>
                    <h3>Cloud Deployment</h3>
                    <p>Run heavy optimization algorithms on the cloud without needing high-end hardware.</p>
                    <ul class="service-features">
                        <li>Scalable Compute</li>
                        <li>Fast Processing</li>
                        <li>Accessible Anywhere</li>
                        <li>Secure Data</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Docker</span>
                        <span class="tech-badge">AWS</span>
                        <span class="tech-badge">FastAPI</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Section -->
        <section class="networks-section">
            <h2 class="section-title">Technology Stack</h2>
            <p class="section-description">Powering logistics with advanced mathematics</p>

            <div class="networks-grid">
                <div class="network-item"><div class="network-logo">🐍</div><span class="network-name">Python</span></div>
                <div class="network-item"><div class="network-logo">⚙️</div><span class="network-name">OR-Tools</span></div>
                <div class="network-item"><div class="network-logo">🐼</div><span class="network-name">Pandas</span></div>
                <div class="network-item"><div class="network-logo">🧊</div><span class="network-name">Three.js</span></div>
                <div class="network-item"><div class="network-logo">⚡</div><span class="network-name">FastAPI</span></div>
                <div class="network-item"><div class="network-logo">🐳</div><span class="network-name">Docker</span></div>
                <div class="network-item"><div class="network-logo">📊</div><span class="network-name">Excel / CSV</span></div>
                <div class="network-item"><div class="network-logo">🏭</div><span class="network-name">Logistics</span></div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="blockchain-process-section">
            <h2 class="section-title">Optimization Workflow</h2>
            <p class="section-description">From order data to the perfect pallet</p>

            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Data Input</h3>
                    <p>Upload item dimensions, quantities, and constraints (weight, fragility).</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Algorithm Processing</h3>
                    <p>OR-Tools algorithms calculate thousands of possible layouts simultaneously.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Select Best Solution</h3>
                    <p>The system identifies the layout with the lowest cost and highest stability.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>3D Visualization</h3>
                    <p>The operator views the 3D model to guide the warehouse team on packing.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="blockchain-consultation-cta">
            <div class="cta-content">
                <h2>💼 Reduce Your Logistics Costs</h2>
                <p>Optimize your packaging and warehouse operations to save money and materials. Let's talk.</p>
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
            echo do_shortcode('[contact-form-7 id="'.$contact.'" title="Carton Optimizer Project En"]');
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