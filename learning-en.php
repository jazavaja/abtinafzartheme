<?php
/**
 * Template Name: Learning English
 */

get_header(); ?>

    <style>
        * {
            font-family: 'Vazir', Tahoma, Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #020617;
            color: #ffffff;
        }

        .learning-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        /* Hero Section */
        .learning-hero {
            text-align: center;
            padding: 4rem 2rem;
            background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
            border-radius: 30px;
            margin-bottom: 4rem;
            position: relative;
            overflow: hidden;
        }

        .learning-hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: pulse 15s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .learning-hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            position: relative;
            z-index: 2;
        }

        .learning-hero p {
            font-size: 1.3rem;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-size: 1.1rem;
            margin-top: 2rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            position: relative;
            z-index: 2;
            animation: glow 2s infinite;
            cursor: pointer;
        }

        @keyframes glow {
            0%, 100% { box-shadow: 0 0 20px rgba(124, 58, 237, 0.5); }
            50% { box-shadow: 0 0 30px rgba(124, 58, 237, 0.8); }
        }

        /* Section Title */
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #a78bfa;
        }

        /* Courses Grid */
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 5rem;
        }

        .course-card {
            background: linear-gradient(145deg, #1e293b, #0f172a);
            border-radius: 20px;
            padding: 2.5rem;
            border: 1px solid rgba(167, 139, 250, 0.2);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .course-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #7c3aed, #06b6d4);
        }

        .course-card:hover {
            transform: translateY(-10px);
            border-color: #7c3aed;
            box-shadow: 0 20px 40px rgba(124, 58, 237, 0.3);
        }

        .course-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            display: block;
        }

        .course-card h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #a78bfa;
        }

        .course-card p {
            color: #cbd5e1;
            line-height: 1.8;
            margin-bottom: 2rem;
            font-size: 1rem;
        }

        .course-details {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .detail-badge {
            background: rgba(124, 58, 237, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            border: 1px solid rgba(124, 58, 237, 0.4);
        }

        .class-types {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .class-btn {
            flex: 1;
            padding: 1rem;
            border-radius: 15px;
            border: 2px solid #7c3aed;
            background: transparent;
            color: #a78bfa;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
            font-weight: 500;
        }

        .class-btn:hover {
            background: #7c3aed;
            color: white;
            transform: scale(1.05);
        }

        .class-btn.private {
            border-color: #06b6d4;
            color: #67e8f9;
        }

        .class-btn.private:hover {
            background: #06b6d4;
            color: white;
        }

        /* Testimonials Section */
        .testimonials-section {
            background: linear-gradient(145deg, #1e293b, #0f172a);
            border-radius: 30px;
            padding: 4rem 2rem;
            margin-bottom: 4rem;
            border: 1px solid rgba(167, 139, 250, 0.2);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .testimonial-card {
            background: rgba(30, 41, 59, 0.5);
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid rgba(124, 58, 237, 0.3);
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            border-color: #7c3aed;
        }

        .student-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .student-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #7c3aed, #06b6d4);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .student-details h4 {
            color: #a78bfa;
            margin-bottom: 0.3rem;
            font-size: 1.1rem;
        }

        .student-details p {
            color: #94a3b8;
            font-size: 0.9rem;
        }

        .voice-player {
            background: rgba(124, 58, 237, 0.1);
            border-radius: 15px;
            padding: 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            border: 1px solid rgba(124, 58, 237, 0.3);
        }

        .play-button {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #7c3aed;
            border: none;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .play-button:hover {
            background: #6d28d9;
            transform: scale(1.1);
        }

        .voice-wave {
            flex: 1;
            height: 30px;
            background: linear-gradient(90deg,
            rgba(124, 58, 237, 0.3) 0%,
            rgba(124, 58, 237, 0.6) 50%,
            rgba(124, 58, 237, 0.3) 100%);
            border-radius: 10px;
            position: relative;
            overflow: hidden;
        }

        .voice-wave::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
            transparent,
            rgba(255, 255, 255, 0.2),
            transparent);
            animation: wave 2s infinite;
        }

        @keyframes wave {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .rating {
            color: #fbbf24;
            font-size: 1.2rem;
        }

        /* Free Class CTA */
        .free-class-cta {
            text-align: center;
            background: linear-gradient(135deg, #7c3aed 0%, #06b6d4 100%);
            padding: 4rem 2rem;
            border-radius: 30px;
            margin-top: 4rem;
        }

        .free-class-cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .free-class-cta p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button {
            display: inline-block;
            background: white;
            color: #7c3aed;
            padding: 1.5rem 3rem;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            transition: all 0.3s ease;
            border: 3px solid white;
            cursor: pointer;
        }

        .cta-button:hover {
            background: transparent;
            color: white;
            transform: scale(1.05);
        }

        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background: #0f172a;
            border-radius: 20px;
            width: 90%;
            max-width: 500px;
            padding: 2rem;
            border: 1px solid #7c3aed;
            position: relative;
            transform: translateY(-20px);
            transition: transform 0.3s ease;
        }

        .modal-overlay.active .modal-content {
            transform: translateY(0);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(167, 139, 250, 0.3);
        }

        .modal-title {
            font-size: 1.8rem;
            color: #a78bfa;
        }

        .close-modal {
            background: none;
            border: none;
            color: #cbd5e1;
            font-size: 1.8rem;
            cursor: pointer;
            transition: color 0.3s;
        }

        .close-modal:hover {
            color: #fbbf24;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #cbd5e1;
        }

        .form-control {
            width: 100%;
            padding: 0.8rem;
            border-radius: 10px;
            border: 1px solid rgba(167, 139, 250, 0.3);
            background: rgba(30, 41, 59, 0.5);
            color: white;
            font-size: 1rem;
        }

        .form-control:focus {
            outline: none;
            border-color: #7c3aed;
            box-shadow: 0 0 0 2px rgba(124, 58, 237, 0.3);
        }

        .submit-btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, #7c3aed, #06b6d4);
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(124, 58, 237, 0.4);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .learning-hero h1 {
                font-size: 2rem;
            }

            .courses-grid {
                grid-template-columns: 1fr;
            }

            .section-title {
                font-size: 2rem;
            }

            .class-types {
                flex-direction: column;
            }

            .modal-content {
                width: 95%;
                padding: 1.5rem;
            }
        }
    </style>

    <div class="learning-container">
        <!-- Hero Section -->
        <div class="learning-hero">
            <h1>🎓 Professional Programming Courses</h1>
            <p>From Beginner to Expert with the Best Teaching Methods</p>
            <span class="hero-badge" id="freeClassBadge">✨ First Class FREE for All Courses ✨</span>
        </div>

        <!-- Courses Section -->
        <h2 class="section-title">Available Courses</h2>
        <div class="courses-grid">
            <!-- Python Course -->
            <div class="course-card">
                <span class="course-icon">🐍</span>
                <h3>Python Programming</h3>
                <p>Learn Python from scratch to advanced, including Django, Flask, Data Science and Automation</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ 48 Hours</span>
                    <span class="detail-badge">📚 12 Projects</span>
                    <span class="detail-badge">🎯 Beginner to Advanced</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="Python Programming">Group Class</button>
                    <button class="class-btn private" data-course="Python Programming">Private Class</button>
                </div>
            </div>

            <!-- PHP Course -->
            <div class="course-card">
                <span class="course-icon">🐘</span>
                <h3>PHP Development</h3>
                <p>Master PHP, MySQL, and develop dynamic websites and content management systems</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ 40 Hours</span>
                    <span class="detail-badge">📚 10 Projects</span>
                    <span class="detail-badge">🎯 Beginner to Advanced</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="PHP Development">Group Class</button>
                    <button class="class-btn private" data-course="PHP Development">Private Class</button>
                </div>
            </div>

            <!-- Laravel Course -->
            <div class="course-card">
                <span class="course-icon">🔷</span>
                <h3>Laravel Framework</h3>
                <p>Build professional web applications with Laravel, REST API, Authentication and Real-time Features</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ 50 Hours</span>
                    <span class="detail-badge">📚 15 Projects</span>
                    <span class="detail-badge">🎯 Intermediate to Advanced</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="Laravel Framework">Group Class</button>
                    <button class="class-btn private" data-course="Laravel Framework">Private Class</button>
                </div>
            </div>

            <!-- Django Course -->
            <div class="course-card">
                <span class="course-icon">🎸</span>
                <h3>Django Framework</h3>
                <p>Develop scalable web applications with Django, REST Framework, Celery and Docker</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ 45 Hours</span>
                    <span class="detail-badge">📚 13 Projects</span>
                    <span class="detail-badge">🎯 Intermediate to Advanced</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="Django Framework">Group Class</button>
                    <button class="class-btn private" data-course="Django Framework">Private Class</button>
                </div>
            </div>

            <!-- AI/ML Course -->
            <div class="course-card">
                <span class="course-icon">🤖</span>
                <h3>AI & Machine Learning</h3>
                <p>Master Artificial Intelligence, Deep Learning, TensorFlow, PyTorch and real-world AI applications</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ 60 Hours</span>
                    <span class="detail-badge">📚 20 Projects</span>
                    <span class="detail-badge">🎯 Advanced Level</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="AI & Machine Learning">Group Class</button>
                    <button class="class-btn private" data-course="AI & Machine Learning">Private Class</button>
                </div>
            </div>

            <!-- JavaScript Course -->
            <div class="course-card">
                <span class="course-icon">💛</span>
                <h3>JavaScript Mastery</h3>
                <p>Complete JavaScript ES6+, Async/Await, DOM Manipulation, and modern web development</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ 42 Hours</span>
                    <span class="detail-badge">📚 14 Projects</span>
                    <span class="detail-badge">🎯 Beginner to Advanced</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="JavaScript Mastery">Group Class</button>
                    <button class="class-btn private" data-course="JavaScript Mastery">Private Class</button>
                </div>
            </div>

            <!-- React Course -->
            <div class="course-card">
                <span class="course-icon">⚛️</span>
                <h3>React Development</h3>
                <p>Build modern user interfaces with React, Redux, Hooks, Next.js and TypeScript</p>
                <div class="course-details">
                    <span class="detail-badge">⏱️ 55 Hours</span>
                    <span class="detail-badge">📚 18 Projects</span>
                    <span class="detail-badge">🎯 Intermediate to Advanced</span>
                </div>
                <div class="class-types">
                    <button class="class-btn" data-course="React Development">Group Class</button>
                    <button class="class-btn private" data-course="React Development">Private Class</button>
                </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="testimonials-section">
            <h2 class="section-title">Student Testimonials</h2>
            <p style="text-align: center; color: #cbd5e1; margin-bottom: 2rem;">Listen to what our students say about their learning experience</p>

            <div class="testimonials-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div class="student-info">
                        <div class="student-avatar">AH</div>
                        <div class="student-details">
                            <h4>Ali Hosseini</h4>
                            <p>Python Developer</p>
                        </div>
                    </div>
                    <div class="voice-player">
                        <audio controls style="width: 100%; height: 45px; border-radius: 15px; background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.3);">
                            <source src="https://irsv.upmusics.com/dlw/7%20Band%20-%20Biroone%20Shahr%20(320).mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="student-info">
                        <div class="student-avatar">SM</div>
                        <div class="student-details">
                            <h4>Sara Mohammadi</h4>
                            <p>Full Stack Developer</p>
                        </div>
                    </div>
                    <div class="voice-player">
                        <audio controls style="width: 100%; height: 45px; border-radius: 15px; background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.3);">
                            <source src="https://irsv.upmusics.com/dlw/7%20Band%20-%20Biroone%20Shahr%20(320).mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div class="student-info">
                        <div class="student-avatar">RK</div>
                        <div class="student-details">
                            <h4>Reza Karimi</h4>
                            <p>AI Engineer</p>
                        </div>
                    </div>
                    <div class="voice-player">
                        <audio controls style="width: 100%; height: 45px; border-radius: 15px; background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.3);">
                            <source src="https://irsv.upmusics.com/dlw/7%20Band%20-%20Biroone%20Shahr%20(320).mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-card">
                    <div class="student-info">
                        <div class="student-avatar">MA</div>
                        <div class="student-details">
                            <h4>Maryam Ahmadi</h4>
                            <p>React Developer</p>
                        </div>
                    </div>
                    <div class="voice-player">
                        <audio controls style="width: 100%; height: 45px; border-radius: 15px; background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.3);">
                            <source src="https://irsv.upmusics.com/dlw/7%20Band%20-%20Biroone%20Shahr%20(320).mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>

                <!-- Testimonial 5 -->
                <div class="testimonial-card">
                    <div class="student-info">
                        <div class="student-avatar">PM</div>
                        <div class="student-details">
                            <h4>Pouya Moradi</h4>
                            <p>Backend Developer</p>
                        </div>
                    </div>
                    <div class="voice-player">
                        <audio controls style="width: 100%; height: 45px; border-radius: 15px; background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.3);">
                            <source src="https://irsv.upmusics.com/dlw/7%20Band%20-%20Biroone%20Shahr%20(320).mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>

                <!-- Testimonial 6 -->
                <div class="testimonial-card">
                    <div class="student-info">
                        <div class="student-avatar">NR</div>
                        <div class="student-details">
                            <h4>Navid Rezaei</h4>
                            <p>Laravel Developer</p>
                        </div>
                    </div>
                    <div class="voice-player">
                        <audio controls style="width: 100%; height: 45px; border-radius: 15px; background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.3);">
                            <source src="https://irsv.upmusics.com/dlw/7%20Band%20-%20Biroone%20Shahr%20(320).mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>

        <!-- Free Class CTA -->
        <div class="free-class-cta">
            <h2>🎁 Get Your First Class FREE!</h2>
            <p>Experience our teaching quality before committing. No credit card required.</p>
            <div class="cta-button" id="freeClassButton">Book Free Class Now</div>
        </div>
    </div>

    <!-- Registration Modal -->
    <div class="modal-overlay" id="registrationModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Register for Free Class</h3>
                <button class="close-modal" id="closeModal">&times;</button>
            </div>
            <form id="freeClassForm" method="post">
                <?php wp_nonce_field('free_class_nonce', 'free_class_nonce_field'); ?>
                <input type="hidden" name="action" value="save_free_class_request">

                <div class="form-row">
                    <div class="form-group half">
                        <label for="studentName">Full Name</label>
                        <input type="text" id="studentName" name="student_name" class="form-control" required>
                    </div>
                    <div class="form-group half">
                        <label for="studentPhone">Phone Number</label>
                        <input type="tel" id="studentPhone" name="student_phone" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="studentEmail">Email Address</label>
                    <input type="email" id="studentEmail" name="student_email" class="form-control" required>
                </div>

                <div class="form-row">
                    <div class="form-group half">
                        <label for="courseSelect">Select Course</label>
                        <select id="courseSelect" name="course" class="form-control" required>
                            <option value="">Choose a course</option>
                            <option value="Python Programming">Python Programming</option>
                            <option value="PHP Development">PHP Development</option>
                            <option value="Laravel Framework">Laravel Framework</option>
                            <option value="Django Framework">Django Framework</option>
                            <option value="AI & Machine Learning">AI & Machine Learning</option>
                            <option value="JavaScript Mastery">JavaScript Mastery</option>
                            <option value="React Development">React Development</option>
                        </select>
                    </div>
                    <div class="form-group half">
                        <label for="classType">Class Type</label>
                        <select id="classType" name="class_type" class="form-control" required>
                            <option value="">Choose class type</option>
                            <option value="Group Class">Group Class</option>
                            <option value="Private Class">Private Class</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Register for Free Class</button>
            </form>
        </div>
    </div>

    <style>
        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background: #0f172a;
            border-radius: 20px;
            width: 90%;
            max-width: 500px;
            padding: 2rem;
            border: 1px solid #7c3aed;
            position: relative;
            transform: translateY(-20px);
            transition: transform 0.3s ease;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-overlay.active .modal-content {
            transform: translateY(0);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(167, 139, 250, 0.3);
            position: sticky;
            top: 0;
            background: #0f172a;
            z-index: 10;
        }

        .modal-title {
            font-size: 1.8rem;
            color: #a78bfa;
            margin: 0;
        }

        .close-modal {
            background: none;
            border: none;
            color: #cbd5e1;
            font-size: 1.8rem;
            cursor: pointer;
            transition: color 0.3s;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .close-modal:hover {
            color: #fbbf24;
            background: rgba(255, 255, 255, 0.1);
        }

        .form-row {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            flex: 1;
        }

        .form-group.half {
            flex: 1;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #cbd5e1;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.8rem;
            border-radius: 10px;
            border: 1px solid rgba(167, 139, 250, 0.3);
            background: rgba(30, 41, 59, 0.5);
            color: white;
            font-size: 1rem;
        }

        .form-control:focus {
            outline: none;
            border-color: #7c3aed;
            box-shadow: 0 0 0 2px rgba(124, 58, 237, 0.3);
        }

        .submit-btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, #7c3aed, #06b6d4);
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(124, 58, 237, 0.4);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }

            .form-group.half {
                width: 100%;
            }

            .modal-content {
                width: 95%;
                padding: 1.5rem;
                margin: 1rem;
            }

            .close-modal {
                font-size: 1.5rem;
                width: 36px;
                height: 36px;
            }
        }
    </style>

    <script>

        // Course card button interactions
        document.querySelectorAll('.class-btn').forEach(button => {
            button.addEventListener('click', function() {
                const courseTitle = this.getAttribute('data-course');
                const classType = this.textContent;

                // Open registration modal with pre-filled values
                openRegistrationModal(courseTitle, classType);
            });
        });

        // Free class registration modal
        const freeClassBadge = document.getElementById('freeClassBadge');
        const freeClassButton = document.getElementById('freeClassButton');
        const registrationModal = document.getElementById('registrationModal');
        const closeModal = document.getElementById('closeModal');
        const freeClassForm = document.getElementById('freeClassForm');

        // Open modal functions
        function openRegistrationModal(course = '', classType = '') {
            if (course) {
                document.getElementById('courseSelect').value = course;
            }
            if (classType) {
                document.getElementById('classType').value = classType;
            }
            registrationModal.classList.add('active');
        }

        freeClassBadge.addEventListener('click', () => openRegistrationModal());
        freeClassButton.addEventListener('click', () => openRegistrationModal());

        // Close modal
        closeModal.addEventListener('click', () => {
            registrationModal.classList.remove('active');
        });

        // Close modal when clicking outside
        registrationModal.addEventListener('click', (e) => {
            if (e.target === registrationModal) {
                registrationModal.classList.remove('active');
            }
        });

        // Form submission
        freeClassForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form values
            const name = document.getElementById('studentName').value;
            const email = document.getElementById('studentEmail').value;
            const phone = document.getElementById('studentPhone').value;
            const course = document.getElementById('courseSelect').value;
            const classType = document.getElementById('classType').value;

            // In a real implementation, you would send this data to your server
            // For now, we'll just show an alert
            alert(`Thank you ${name}!\n\nYour registration for a free ${classType} in ${course} has been received.\nWe'll contact you at ${email} or ${phone} to schedule your class.`);

            // Reset form and close modal
            freeClassForm.reset();
            registrationModal.classList.remove('active');
        });
    </script>

<?php get_footer(); ?>