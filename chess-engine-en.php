<?php
/**
 * Template Name: Chess Engine Project En
 */

custom_header(); ?>

<style>
/* تم تحلیلی و ماتریکسی (Emerald/Green) */
.chess-theme {
    --chess-primary: #10b981;
    --chess-secondary: #059669;
    --chess-glow: rgba(16, 185, 129, 0.25);
}
.chess-theme .blockchain-hero {
    background: radial-gradient(circle at top, rgba(16, 185, 129, 0.1), transparent 70%);
}
.chess-theme h1 {
    background: linear-gradient(135deg, #fff 0%, var(--chess-primary) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.chess-theme .hero-badge {
    background: rgba(16, 185, 129, 0.1);
    border-color: rgba(16, 185, 129, 0.4);
    color: var(--chess-primary);
}
.chess-theme .service-card {
    background: linear-gradient(145deg, rgba(20, 25, 30, 0.95), rgba(10, 15, 20, 0.95));
    border-color: rgba(16, 185, 129, 0.2);
}
.chess-theme .service-card:hover {
    border-color: var(--chess-primary);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5), 0 0 25px var(--chess-glow);
    transform: translateY(-5px);
}
.chess-theme .service-icon {
    background: linear-gradient(135deg, #1e293b, #0f172a);
    border: 1px solid var(--chess-primary);
    color: var(--chess-primary);
}
.chess-theme .tech-badge {
    background: rgba(16, 185, 129, 0.1);
    border-color: rgba(16, 185, 129, 0.3);
    color: var(--chess-primary);
}
.chess-theme .cta-button {
    background: linear-gradient(135deg, var(--chess-primary), var(--chess-secondary));
    color: #0f172a;
    border: none;
    box-shadow: 0 10px 20px rgba(16, 185, 129, 0.2);
}
.chess-theme .cta-button:hover {
    box-shadow: 0 15px 35px rgba(16, 185, 129, 0.4);
    transform: translateY(-3px);
}
.chess-theme .section-title {
    color: var(--chess-primary);
}
.chess-theme .process-step {
    border-color: rgba(16, 185, 129, 0.3);
}
.chess-theme .step-number {
    background: var(--chess-primary);
    color: #0f172a;
}
</style>

    <div class="blockchain-services-container chess-theme">
        <!-- Hero Section -->
        <section class="blockchain-hero">
            <div class="hero-content">
                <h1>♟️ Smart Chess Engine</h1>
                <p>High-performance chess engine written in Rust using NNUE (Efficiently Updatable Neural Networks) for advanced position evaluation and move search.</p>
                <div class="hero-badges">
                    <span class="hero-badge">Rust</span>
                    <span class="hero-badge">NNUE</span>
                    <span class="hero-badge">Chess AI</span>
                    <span class="hero-badge">Alpha-Beta</span>
                </div>
                <div class="cta-button" id="projectConsultationButton">Discuss a Similar Project</div>
            </div>
            <div class="hero-visual">
                <div class="visual-element">🧠</div>
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="blockchain-services-section">
            <h2 class="section-title">Key Capabilities</h2>
            <p class="section-description">Engineered for speed, accuracy, and tactical superiority</p>

            <div class="services-grid">
                <!-- High-Performance Core -->
                <div class="service-card">
                    <div class="service-icon">🦀</div>
                    <h3>Rust-Powered Core</h3>
                    <p>Memory safety and zero-cost abstractions for maximum execution speed and stability.</p>
                    <ul class="service-features">
                        <li>Zero-Cost Abstractions</li>
                        <li>Memory Safety</li>
                        <li>Bitboard Representation</li>
                        <li>Blazing Fast Move Generation</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Rust</span>
                        <span class="tech-badge">Cargo</span>
                        <span class="tech-badge">Bitboards</span>
                    </div>
                </div>

                <!-- NNUE Evaluation -->
                <div class="service-card">
                    <div class="service-icon">🧠</div>
                    <h3>NNUE Evaluation</h3>
                    <p>Efficiently Updatable Neural Network that runs directly inside the search tree.</p>
                    <ul class="service-features">
                        <li>Incremental Updates</li>
                        <li>Deep Neural Networks</li>
                        <li>King-Piece Relative Features</li>
                        <li>Highly Optimized Inference</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">NNUE</span>
                        <span class="tech-badge">Python</span>
                        <span class="tech-badge">PyTorch</span>
                    </div>
                </div>

                <!-- Advanced Search -->
                <div class="service-card">
                    <div class="service-icon">🔍</div>
                    <h3>Advanced Search Algorithms</h3>
                    <p>State-of-the-art pruning techniques to search deeper in less time.</p>
                    <ul class="service-features">
                        <li>Alpha-Beta Pruning</li>
                        <li>Iterative Deepening</li>
                        <li>Transposition Tables</li>
                        <li>Null Move Pruning</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Minimax</span>
                        <span class="tech-badge">Zobrist Hashing</span>
                        <span class="tech-badge">Algorithms</span>
                    </div>
                </div>

                <!-- UCI Protocol -->
                <div class="service-card">
                    <div class="service-icon">🔌</div>
                    <h3>UCI Protocol Integration</h3>
                    <p>Full compliance with the Universal Chess Interface for seamless GUI integration.</p>
                    <ul class="service-features">
                        <li>Compatible with all major GUIs</li>
                        <li>Arena / CuteChess Support</li>
                        <li>Standard Command Handling</li>
                        <li>FEN String Support</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">UCI</span>
                        <span class="tech-badge">GUI</span>
                        <span class="tech-badge">FEN</span>
                    </div>
                </div>

                <!-- Multithreading -->
                <div class="service-card">
                    <div class="service-icon">⚡</div>
                    <h3>Multithreading (Lazy SMP)</h3>
                    <p>Utilizing multi-core processors to search different parts of the tree simultaneously.</p>
                    <ul class="service-features">
                        <li>Lazy SMP Implementation</li>
                        <li>Thread-Safe Data Structures</li>
                        <li>Shared Hash Tables</li>
                        <li>Scalable Performance</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Rayon</span>
                        <span class="tech-badge">Multi-core</span>
                        <span class="tech-badge">Concurrency</span>
                    </div>
                </div>

                <!-- Endgame Tablebases -->
                <div class="service-card">
                    <div class="service-icon">📚</div>
                    <h3>Syzygy Tablebases</h3>
                    <p>Perfect endgame play by probing pre-calculated endgame databases.</p>
                    <ul class="service-features">
                        <li>Syzygy 6-Men Probing</li>
                        <li>Perfect Endgame Knowledge</li>
                        <li>Piece Recognition</li>
                        <li>Fast Disk Access</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Syzygy</span>
                        <span class="tech-badge">File I/O</span>
                        <span class="tech-badge">Endgame</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Section -->
        <section class="networks-section">
            <h2 class="section-title">Technology Stack</h2>
            <p class="section-description">The technical foundation of a modern chess engine</p>

            <div class="networks-grid">
                <div class="network-item"><div class="network-logo">🦀</div><span class="network-name">Rust</span></div>
                <div class="network-item"><div class="network-logo">🧠</div><span class="network-name">NNUE</span></div>
                <div class="network-item"><div class="network-logo">🐍</div><span class="network-name">Python (Training)</span></div>
                <div class="network-item"><div class="network-logo">🔍</div><span class="network-name">Alpha-Beta</span></div>
                <div class="network-item"><div class="network-logo">🔌</div><span class="network-name">UCI Protocol</span></div>
                <div class="network-item"><div class="network-logo">⚡</div><span class="network-name">Multi-threading</span></div>
                <div class="network-item"><div class="network-logo">📦</div><span class="network-name">Cargo</span></div>
                <div class="network-item"><div class="network-logo">♟️</div><span class="network-name">Chess AI</span></div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="blockchain-process-section">
            <h2 class="section-title">Engine Architecture</h2>
            <p class="section-description">From board state to the best move</p>

            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Board Representation</h3>
                    <p>Bitboards are used to represent pieces, allowing for lightning-fast move generation.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Search Tree</h3>
                    <p>Alpha-Beta pruning is applied to explore only the most promising moves.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>NNUE Evaluation</h3>
                    <p>At leaf nodes, the NNUE network evaluates the position to determine who is winning.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Output Move</h3>
                    <p>The engine outputs the best move in UCI format for the GUI to execute.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="blockchain-consultation-cta">
            <div class="cta-content">
                <h2>💼 Need High-Performance AI Solutions?</h2>
                <p>From Chess Engines to complex algorithms and AI models, we build performance-critical software.</p>
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
            echo do_shortcode('[contact-form-7 id="'.$contact.'" title="Chess Engine Project En"]');
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