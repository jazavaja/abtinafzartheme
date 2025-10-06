<?php
/*
Template Name: Privacy Policy
*/
custom_header(); ?>

    <style>
        .privacy-policy {
            background-color: #0f172a;
            color: #e2e8f0;
            min-height: 100vh;
            padding: 2rem 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .privacy-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .privacy-header {
            text-align: center;
            margin-bottom: 2.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #334155;
        }

        .privacy-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
            color: #f8fafc;
            line-height: 1.2;
        }

        .privacy-content {
            line-height: 1.8;
            font-size: 1.1rem;
        }

        .privacy-content h2 {
            color: #cbd5e1;
            margin: 2rem 0 1.2rem;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .privacy-content p {
            margin-bottom: 1.5rem;
            color: #cbd5e1;
        }

        .privacy-content ul {
            padding-left: 1.5rem;
            margin: 1.5rem 0;
            color: #94a3b8;
        }

        .privacy-content li {
            margin-bottom: 0.8rem;
        }

        .privacy-footer {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid #334155;
            text-align: center;
            color: #94a3b8;
            font-size: 0.95rem;
        }

        /* Responsive adjustments */
        @media (max-width: 640px) {
            .privacy-title {
                font-size: 2rem;
            }

            .privacy-content h2 {
                font-size: 1.5rem;
            }

            .privacy-content {
                font-size: 1rem;
            }
        }
    </style>

    <div class="privacy-policy">
        <div class="privacy-container">
            <header class="privacy-header">
                <h1 class="privacy-title">Privacy Policy</h1>
            </header>

            <main class="privacy-content">
                <p>Your privacy is important to us. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website.</p>

                <h2>Information We Collect</h2>
                <p>We may collect both personal and non-personal information:</p>
                <ul>
                    <li>Personal identification information (name, email, phone number)</li>
                    <li>Technical data (IP address, browser type, operating system)</li>
                    <li>Usage data (pages visited, time spent on site)</li>
                    <li>Cookies and tracking technologies</li>
                </ul>

                <h2>How We Use Your Information</h2>
                <p>We use the collected information to:</p>
                <ul>
                    <li>Provide and maintain our services</li>
                    <li>Improve user experience</li>
                    <li>Communicate with you about our services</li>
                    <li>Comply with legal obligations</li>
                    <li>Prevent fraud and security issues</li>
                </ul>

                <h2>Data Protection</h2>
                <p>We implement appropriate security measures to protect your personal information:</p>
                <ul>
                    <li>Encryption of sensitive data</li>
                    <li>Regular security assessments</li>
                    <li>Access controls and authentication</li>
                    <li>Data minimization practices</li>
                </ul>

                <h2>Your Rights</h2>
                <p>Depending on your location, you may have the right to:</p>
                <ul>
                    <li>Access your personal information</li>
                    <li>Request correction of inaccurate data</li>
                    <li>Request deletion of your data</li>
                    <li>Object to processing of your data</li>
                    <li>Withdraw consent at any time</li>
                </ul>

                <h2>Changes to This Policy</h2>
                <p>We may update our Privacy Policy periodically. We will notify you of any changes by posting the new policy on this page with an updated effective date.</p>

                <h2>Contact Us</h2>
                <p>If you have any questions about this Privacy Policy, please contact us at:</p>
                <p>privacy@abtinafzar.ir</p>
            </main>

            <footer class="privacy-footer">
                <p>Last updated: <?php echo date('F j, Y'); ?></p>
            </footer>
        </div>
    </div>

<?php custom_footer(); ?>