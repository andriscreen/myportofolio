<?php include 'sendmail.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Andri Irawan</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Loading Screen -->
    <div id="loading" class="loading">
        <div class="loading-content">
            <div class="loading-spinner"></div>
            <p>Memuat portofolio...</p>
        </div>
    </div>

    <!-- Floating Elements -->
    <div class="floating-elements">
        <div class="floating-element el-1"></div>
        <div class="floating-element el-2"></div>
        <div class="floating-element el-3"></div>
        <div class="floating-element el-4"></div>
    </div>

    <!-- Cursor Effect -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>

    <!-- Header & Navigation -->
    <header class="header">
        <nav class="nav container">
            <div class="nav-logo">
                <span class="logo-text">Dev<span class="logo-accent">Kentang</span></span>
            </div>
            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a href="#skills" class="nav-link">Keahlian</a>
                    </li>
                    <li class="nav-item">
                        <a href="#projects" class="nav-link">Proyek</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Kontak</a>
                    </li>
                </ul>
                <div class="nav-close" id="nav-close">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="nav-toggle" id="nav-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main">
        <!-- Home Section -->
        <section class="home section" id="home">
            <div class="home-container container grid">
                <div class="home-content">
                    <div class="home-badge">Halo! Saya</div>
                    <h1 class="home-title">
                        <span class="title-name">Andri Irawan</span>
                        <span class="title-role">Full Stack Developer</span>
                    </h1>
                    <p class="home-description">
                        Saya bikin website dan aplikasi web yang keren, responsif, dan fungsional. 
                        Dari frontend sampai backend, semua bisa saya handle!
                    </p>
                    <div class="home-buttons">
                        <a href="#projects" class="btn btn-primary">
                            <span>Lihat Karya Saya</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#contact" class="btn btn-secondary">
                            <span>Yuk Ngobrol!</span>
                        </a>
                    </div>
                    <div class="home-social">
                        <a href="#" class="social-link">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>
                <div class="home-image">
                    <div class="image-wrapper">
                        <div class="image-placeholder">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="image-overlay"></div>
                    </div>
                    <div class="floating-tech">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">MongoDB</span>
                    </div>
                </div>
            </div>
            <div class="scroll-indicator">
                <div class="scroll-line"></div>
                <span>Scroll ke bawah</span>
            </div>
        </section>

        <!-- About Section -->
        <section class="about section" id="about">
            <div class="about-container container grid">
                <div class="about-image">
                    <div class="image-frame">
                        <div class="image-container">
                            <img src="andri2.png" alt="Foto Profil" class="profile-photo">
                        </div>
                    </div>
                </div>
                <div class="about-content">
                    <h2 class="section-title">Sedikit Cerita Tentang Saya</h2>
                    <p class="about-text">
                        Halo! Saya seorang Full Stack Developer yang passionate banget sama dunia web development. 
                        Udah lebih dari 1 tahun saya berkecimpung di industri ini, dan tiap hari masih selalu excited 
                        buat belajar teknologi baru.
                    </p>
                    <p class="about-text">
                        Saya nggak cuma fokus bikin kode yang clean dan efisien, tapi juga peduli sama user experience. 
                        Buat saya, website yang bagus itu nggak cuma jalan aja, tapi juga harus enak dipake dan nyaman 
                        diliat.
                    </p>
                    <div class="about-stats">
                        <div class="stat">
                            <div class="stat-number" data-count="15">0</div>
                            <div class="stat-label">Proyek Selesai</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number" data-count="1">0</div>
                            <div class="stat-label">Tahun Pengalaman</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number" data-count="6">0</div>
                            <div class="stat-label">Klien Puas</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section class="skills section" id="skills">
            <div class="skills-container container">
                <h2 class="section-title">Yang Bisa Saya Lakukan</h2>
                <p class="section-subtitle">
                    Dari frontend yang cantik sampai backend yang powerful, ini teknologi yang biasa saya gunakan
                </p>
                
                <div class="skills-grid">
                    <!-- Frontend Skills -->
                    <div class="skill-category">
                        <div class="category-header">
                            <i class="fas fa-paint-brush"></i>
                            <h3>Frontend Development</h3>
                        </div>
                        <div class="skill-tags">
                            <div class="skill-tag" data-level="Intermediate">
                                <span>React.js</span>
                            </div>
                            <div class="skill-tag" data-level="Intermediate">
                                <span>Vue.js</span>
                            </div>
                            <div class="skill-tag" data-level="Advanced">
                                <span>Bootstrap</span>
                            </div>
                            <div class="skill-tag" data-level="Intermediate">
                                <span>Tailwind CSS</span>
                            </div>
                            <div class="skill-tag" data-level="Intermediate">
                                <span>JavaScript</span>
                            </div>
                            <div class="skill-tag" data-level="Beginner">
                                <span>SASS/SCSS</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Backend Skills -->
                    <div class="skill-category">
                        <div class="category-header">
                            <i class="fas fa-server"></i>
                            <h3>Backend Development</h3>
                        </div>
                        <div class="skill-tags">
                            <div class="skill-tag" data-level="Intermediate">
                                <span>Node.js</span>
                            </div>
                            <div class="skill-tag" data-level="Beginner">
                                <span>Python</span>
                            </div>
                            <div class="skill-tag" data-level="Advanced">
                                <span>PHP</span>
                            </div>
                            <div class="skill-tag" data-level="Beginner">
                                <span>RESTful API</span>
                            </div>
                            <div class="skill-tag" data-level="Beginner">
                                <span>GraphQL</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Database & Tools -->
                    <div class="skill-category">
                        <div class="category-header">
                            <i class="fas fa-database"></i>
                            <h3>Database & Tools</h3>
                        </div>
                        <div class="skill-tags">
                            <div class="skill-tag" data-level="Beginner">
                                <span>MongoDB</span>
                            </div>
                            <div class="skill-tag" data-level="Beginner">
                                <span>PostgreSQL</span>
                            </div>
                            <div class="skill-tag" data-level="Beginner">
                                <span>MySQL</span>
                            </div>
                            <div class="skill-tag" data-level="advanced">
                                <span>Git & GitHub</span>
                            </div>
                            <div class="skill-tag" data-level="Beginner">
                                <span>Docker</span>
                            </div>
                            <div class="skill-tag" data-level="Beginner">
                                <span>AWS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section class="projects section" id="projects">
            <div class="projects-container container">
                <h2 class="section-title">Karya Terbaru Saya</h2>
                <p class="section-subtitle">
                    Beberapa proyek yang sudah saya kerjakan dan bikin bangga
                </p>
                
                <div class="projects-grid">
                    <!-- Project 1 -->
                    <div class="project-card">
                        <div class="project-image">
                            <div class="image-placeholder">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="#" class="project-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a href="#" class="project-link">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">Canteen Platform</h3>
                            <p class="project-description">
                                Platform meal schedule modern dengan sistem MVC dan dashboard admin yang powerful.
                            </p>
                            <div class="project-tech">
                                <span>Bootstrap</span>
                                <span>Node.js</span>
                                <span>MySQL</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Project 2 -->
                    <div class="project-card">
                        <div class="project-image">
                            <div class="image-placeholder">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="#" class="project-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a href="#" class="project-link">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">Project Management App</h3>
                            <p class="project-description">
                                Aplikasi manajemen proyek real-time dengan fitur kolaborasi tim dan pelacakan progress.
                            </p>
                            <div class="project-tech">
                                <span>Vue.js</span>
                                <span>Firebase</span>
                                <span>SCSS</span>
                                <span>PWA</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Project 3 -->
                    <div class="project-card">
                        <div class="project-image">
                            <div class="image-placeholder">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="#" class="project-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a href="#" class="project-link">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">Analytics Dashboard</h3>
                            <p class="project-description">
                                Dashboard analitik dengan visualisasi data real-time dan reporting yang customizable.
                            </p>
                            <div class="project-tech">
                                <span>React</span>
                                <span>D3.js</span>
                                <span>Python</span>
                                <span>PostgreSQL</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="projects-cta">
                    <a href="https://github.com/andriscreen/" class="btn btn-outline">
                        <span>Lihat Semua Proyek</span>
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact section" id="contact">
            <div class="contact-container container grid">
                <div class="contact-content">
                    <h2 class="section-title">Yuk Bekerja Sama!</h2>
                    <p class="contact-description">
                        Lagi butuh website keren? Atau mau diskusi project? Jangan sungkan buat hubungi saya!
                    </p>
                    
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Email</h3>
                                <p>hi@andriirawan.com</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Whatsapp</h3>
                                <p>+62 812 9276 1191</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Lokasi</h3>
                                <p>Tangerang, Indonesia</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-social">
                        <a href="#" class="social-link">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>
                
                <div class="contact-form">
                    <?php if (isset($status)): ?>
                        <div class="form-status <?php echo $status; ?>">
                            <?php echo $message_status; ?>
                        </div>
                    <?php endif; ?>
                    
                    <form class="form" method="POST" action="">
                        <div class="form-group">
                            <input type="text" name="name" class="form-input" placeholder="Nama lengkap kamu" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" name="email" class="form-input" placeholder="Email aktif kamu" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="subject" class="form-input" placeholder="Subjek pesan" required>
                        </div>
                        
                        <div class="form-group">
                            <textarea name="message" class="form-input form-textarea" placeholder="Ceritain project atau ide yang kamu punya..." required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-full">
                            <span>Kirim Pesan</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container container">
            <div class="footer-content">
                <div class="footer-logo">
                    <span class="logo-text">Dev<span class="logo-accent">Kentang</span></span>
                    <p>Full Stack Web Developer</p>
                </div>
                
                <div class="footer-links">
                    <div class="footer-group">
                        <h3>Navigasi</h3>
                        <a href="#home">Home</a>
                        <a href="#about">Tentang</a>
                        <a href="#projects">Proyek</a>
                        <a href="#contact">Kontak</a>
                    </div>
                    
                    <div class="footer-group">
                        <h3>Keahlian</h3>
                        <a href="#">Frontend</a>
                        <a href="#">Backend</a>
                        <a href="#">Full Stack</a>
                        <a href="#">UI/UX</a>
                    </div>
                    
                    <div class="footer-group">
                        <h3>Media Sosial</h3>
                        <a href="#">GitHub</a>
                        <a href="#">LinkedIn</a>
                        <a href="#">Instagram</a>
                        <a href="#">Tiktok</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 DevKentang. Dibuat dengan <i class="fas fa-heart"></i> dan banyak <i class="fas fa-coffee"></i></p>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <a href="#home" class="back-to-top" id="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <script src="script.js"></script>
</body>
</html>