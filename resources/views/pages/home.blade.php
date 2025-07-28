<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arisan Barokah - Platform Arisan Digital Terpercaya</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            padding: 80px 0;
            color: white;
            position: relative;
            overflow: hidden;
            min-height: 500px;
        }

        .hero-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 60px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 1.2;
            animation: slideInDown 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.9;
            animation: slideInUp 1s ease-out 0.3s both;
        }

        .hero-description {
            font-size: 1.1rem;
            margin-bottom: 40px;
            line-height: 1.6;
            opacity: 0.9;
            animation: fadeIn 1s ease-out 0.6s both;
        }

        .hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeIn 1s ease-out 0.9s both;
        }

        .laptop-container {
            position: relative;
            max-width: 700px;
            width: 100%;
        }

        .laptop-image {
            width: 100%;
            height: auto;
            transform: perspective(1000px) rotateY(-5deg) rotateX(5deg);
            transition: transform 0.3s ease;
        }

        .laptop-image:hover {
            transform: perspective(1000px) rotateY(-2deg) rotateX(2deg) scale(1.02);
        }

        .floating-elements {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .floating-item {
            position: absolute;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            animation: floatUp 6s infinite ease-in-out;
        }

        .floating-item:nth-child(1) {
            top: 20%;
            right: -10%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
        }

        .floating-item:nth-child(2) {
            top: 60%;
            right: 10%;
            width: 40px;
            height: 40px;
            animation-delay: 2s;
        }

        .floating-item:nth-child(3) {
            top: 10%;
            right: 20%;
            width: 30px;
            height: 30px;
            animation-delay: 4s;
        }

        @keyframes floatUp {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
                opacity: 0.7;
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
                opacity: 1;
            }
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            animation: slideInUp 1s ease-out 0.9s both;
        }

        .btn {
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary {
            background: linear-gradient(45deg, #ffffff, #f0f0f0);
            color: #6B9B76;
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            padding: 12px 30px;
            font-weight: 600;
            text-transform: none;
            letter-spacing: normal;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 255, 255, 0.4);
            background: linear-gradient(45deg, #f8f8f8, #e8e8e8);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid rgba(255,255,255,0.8);
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.1);
            border-color: white;
            transform: translateY(-2px);
        }

        /* Features Section */
        .features-section {
            padding: 80px 0;
            background: white;
            position: relative;
        }

        /* Image Gallery Section */
        .image-gallery {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .gallery-item {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
            padding: 30px 20px 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        .gallery-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .gallery-description {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        /* Testimonial Section */
        .testimonial-section {
            padding: 80px 0;
            background:  linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
        }

        /* Perubahan warna untuk section title dan description pada testimonial */
        .testimonial-section .section-title {
            color: white !important; /* Mengubah "Apa Kata Mereka" menjadi putih */
        }

        .testimonial-section .section-description {
            color: white !important; /* Mengubah description menjadi putih */
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .testimonial-card {
            background: rgba(255,255,255,0.1);
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .testimonial-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 20px;
            object-fit: cover;
            border: 3px solid rgba(255,255,255,0.3);
        }

        .testimonial-text {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 20px;
            font-style: italic;
        }

        .testimonial-author {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .testimonial-role {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .section-description {
            text-align: center;
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 60px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .feature-card {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background:  linear-gradient(135deg, #6B9B76, #7BA05B);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .feature-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .feature-description {
            color: #666;
            line-height: 1.6;
        }

        /* Stats Section */
        .stats-section {
            padding: 80px 0;
            background:  linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            text-align: center;
        }

        /* Perubahan warna untuk section title pada stats */
        .stats-section .section-title {
            color: white !important; /* Mengubah "Dipercaya Ribuan Pengguna" menjadi putih */
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* How It Works Section */
        .how-it-works {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .steps-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .step-item {
            text-align: center;
            position: relative;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background:  linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 auto 20px;
        }

        .step-title {
            font-size: 1.3rem;
            color: #333;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .step-description {
            color: #666;
            line-height: 1.6;
        }

        /* CTA Section */
        .cta-section {
            padding: 80px 0;
            background:  linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            text-align: center;
        }

        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .cta-description {
            font-size: 1.2rem;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-container {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .laptop-container {
                max-width: 300px;
            }
            
            .cta-buttons {
                justify-content: center;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
            
            .gallery-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .testimonial-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .steps-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        /* Animations */
        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Scroll animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Arisan Barokah<br>Since 2020</h1>
                <p class="hero-description">
                    Arisan Barokah by Owner Farah Proping Dewi, 
                    cocok untuk investasi jangka pendek dengan pilihan 
                    kloter yang banyak.
                </p>
                <div class="cta-buttons">
                    <a href="#" class="btn btn-primary">
                        Masuk
                    </a>
                </div>
            </div>
            
            <div class="hero-visual">
                <div class="laptop-container">
                     <img src="{{ asset('images/2laptop.png') }}" alt="Laptop showing Arisan Barokah platform" class="laptop-image">
                    <div class="floating-elements">
                        <div class="floating-item"></div>
                        <div class="floating-item"></div>
                        <div class="floating-item"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Mengapa Pilih Arisan Barokah?</h2>
            <p class="section-description animate-on-scroll">
                Kami menyediakan platform arisan digital yang aman, transparan, dan mudah digunakan
            </p>
            
            <div class="features-grid">
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title">Keamanan Terjamin</h3>
                    <p class="feature-description">
                        Sistem keamanan berlapis dengan enkripsi tingkat bank untuk melindungi dana dan data pribadi Anda
                    </p>
                </div>
                
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="feature-title">Komunitas Terpercaya</h3>
                    <p class="feature-description">
                        Bergabung dengan komunitas arisan yang telah diverifikasi dan memiliki reputasi baik
                    </p>
                </div>
                
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="feature-title">Mudah Digunakan</h3>
                    <p class="feature-description">
                        Interface yang intuitif dan user-friendly, dapat diakses kapan saja melalui smartphone atau komputer
                    </p>
                </div>
                
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="feature-title">Transparansi Penuh</h3>
                    <p class="feature-description">
                        Lacak perkembangan arisan Anda secara real-time dengan laporan keuangan yang transparan
                    </p>
                </div>
                
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="feature-title">Otomatis & Praktis</h3>
                    <p class="feature-description">
                        Sistem otomatis untuk pengundian, pembayaran, dan notifikasi sehingga Anda tidak perlu repot
                    </p>
                </div>
                
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="feature-title">Customer Support 24/7</h3>
                    <p class="feature-description">
                        Tim customer support yang siap membantu Anda kapan saja untuk memastikan pengalaman terbaik
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Dipercaya Ribuan Pengguna</h2>
            <div class="stats-grid">
                <div class="stat-item animate-on-scroll">
                    <div class="stat-number" data-target="10000">0</div>
                    <div class="stat-label">Pengguna Aktif</div>
                </div>
                <div class="stat-item animate-on-scroll">
                    <div class="stat-number" data-target="500">0</div>
                    <div class="stat-label">Kloter Aktif</div>
                </div>
                <div class="stat-item animate-on-scroll">
                    <div class="stat-number" data-target="50">0</div>
                    <div class="stat-label">Miliar Rupiah</div>
                </div>
                <div class="stat-item animate-on-scroll">
                    <div class="stat-number" data-target="99">0</div>
                    <div class="stat-label">% Kepuasan</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Gallery Section -->
    <section class="image-gallery">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Galeri Arisan Barokah</h2>
            <p class="section-description animate-on-scroll">
                Lihat berbagai aktivitas dan momen kebahagiaan komunitas Arisan Barokah
            </p>
            
            <div class="gallery-grid">
                <div class="gallery-item animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tim Arisan Barokah">
                    <div class="gallery-overlay">
                        <h3 class="gallery-title">Tim Profesional</h3>
                        <p class="gallery-description">Tim ahli yang berpengalaman dalam teknologi finansial</p>
                    </div>
                </div>
                
                <div class="gallery-item animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Keamanan Data">
                    <div class="gallery-overlay">
                        <h3 class="gallery-title">Keamanan Terjamin</h3>
                        <p class="gallery-description">Sistem keamanan berlapis untuk melindungi data Anda</p>
                    </div>
                </div>
                
                <div class="gallery-item animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Komunitas Arisan">
                    <div class="gallery-overlay">
                        <h3 class="gallery-title">Komunitas Aktif</h3>
                        <p class="gallery-description">Ribuan anggota yang saling mendukung</p>
                    </div>
                </div>
                
                <div class="gallery-item animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Teknologi Modern">
                    <div class="gallery-overlay">
                        <h3 class="gallery-title">Teknologi Terdepan</h3>
                        <p class="gallery-description">Platform digital yang mudah dan modern</p>
                    </div>
                </div>
                
                <div class="gallery-item animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Customer Support">
                    <div class="gallery-overlay">
                        <h3 class="gallery-title">Dukungan 24/7</h3>
                        <p class="gallery-description">Customer service yang responsif setiap saat</p>
                    </div>
                </div>
                
                <div class="gallery-item animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1553729459-efe14ef6055d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Sukses Finansial">
                    <div class="gallery-overlay">
                        <h3 class="gallery-title">Sukses Finansial</h3>
                        <p class="gallery-description">Wujudkan impian finansial bersama Arisan Barokah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Apa Kata Mereka</h2>
            <p class="section-description animate-on-scroll">
                Testimoni dari ribuan pengguna yang puas dengan layanan Arisan Barokah
            </p>
            
            <div class="testimonial-grid">
                <div class="testimonial-card animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b977?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Sari Indah" class="testimonial-avatar">
                    <p class="testimonial-text">
                        "Arisan Barokah sangat membantu saya mengelola keuangan dengan sistem arisan yang transparan dan aman. Sudah 2 tahun menggunakan dan tidak pernah ada masalah!"
                    </p>
                    <div class="testimonial-author">Sari Indah</div>
                    <div class="testimonial-role">Ibu Rumah Tangga</div>
                </div>
                
                <div class="testimonial-card animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Budi Santoso" class="testimonial-avatar">
                    <p class="testimonial-text">
                        "Sebagai pengusaha, Arisan Barokah membantu saya mengatur cashflow dengan lebih baik. Interface yang mudah dan customer service yang responsif."
                    </p>
                    <div class="testimonial-author">Budi Santoso</div>
                    <div class="testimonial-role">Pengusaha</div>
                </div>
                
                <div class="testimonial-card animate-on-scroll">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Maya Sari" class="testimonial-avatar">
                    <p class="testimonial-text">
                        "Fitur otomatis Arisan Barokah sangat memudahkan. Saya tidak perlu repot mengatur jadwal pembayaran manual. Semuanya berjalan lancar!"
                    </p>
                    <div class="testimonial-author">Maya Sari</div>
                    <div class="testimonial-role">Karyawan Swasta</div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Cara Kerja Arisan Barokah</h2>
            <p class="section-description animate-on-scroll">
                Mulai arisan digital Anda hanya dalam 3 langkah mudah
            </p>
            
            <div class="steps-container">
                <div class="step-item animate-on-scroll">
                    <div class="step-number">1</div>
                    <h3 class="step-title">Daftar & Verifikasi</h3>
                    <p class="step-description">
                        Buat akun dengan mudah dan lakukan verifikasi identitas untuk keamanan maksimal
                    </p>
                </div>
                
                <div class="step-item animate-on-scroll">
                    <div class="step-number">2</div>
                    <h3 class="step-title">Pilih Kloter Arisan</h3>
                    <p class="step-description">
                        Pilih kloter arisan yang sesuai dengan kemampuan dan kebutuhan Anda
                    </p>
                </div>
                
                <div class="step-item animate-on-scroll">
                    <div class="step-number">3</div>
                    <h3 class="step-title">Mulai Berarisan</h3>
                    <p class="step-description">
                        Lakukan pembayaran rutin dan nikmati kemudahan arisan digital yang aman
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="cta-title animate-on-scroll">Siap Memulai Arisan Digital?</h2>
            <p class="cta-description animate-on-scroll">
                Bergabunglah dengan ribuan orang yang telah merasakan kemudahan Arisan Barokah
            </p>
            <div class="cta-buttons animate-on-scroll">
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-user-plus"></i>
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </section>

    <script>
        // Smooth scroll animation
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-on-scroll');
            
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('animated');
                }
            });
        }

        // Counter animation
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            const animationDuration = 2000; // 2 seconds
            const frameDuration = 1000 / 60; // 60fps
            const totalFrames = Math.round(animationDuration / frameDuration);
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                let frame = 0;
                
                const countAnimation = () => {
                    frame++;
                    const progress = frame / totalFrames;
                    const currentCount = Math.round(target * progress);
                    
                    counter.textContent = currentCount;
                    
                    if (frame < totalFrames) {
                        requestAnimationFrame(countAnimation);
                    } else {
                        counter.textContent = target;
                    }
                };
                
                countAnimation();
            });
        }

        // Initialize animations
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', () => {
            animateOnScroll();
            
            // Start counter animation when stats section is visible
            const statsSection = document.querySelector('.stats-section');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounters();
                        observer.unobserve(entry.target);
                    }
                });
            });
            observer.observe(statsSection);
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add parallax effect to hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroSection = document.querySelector('.hero-section');
            if (heroSection) {
                heroSection.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Add hover effect to feature cards
        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add click ripple effect to buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple');
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Add loading animation
        window.addEventListener('load', () => {
            document.body.classList.add('loaded');
        });
    </script>

    <style>
        /* Additional styles for enhanced interactions */
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255,255,255,0.6);
            transform: scale(0);
            animation: ripple-animation 0.6s linear;
            pointer-events: none;
        }

        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        body {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        body.loaded {
            opacity: 1;
        }

        /* Enhanced button styles */
        .btn {
            position: relative;
            overflow: hidden;
        }

        /* Enhanced floating animations */
        .floating-item::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            background: rgba(255,255,255,0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.7;
            }
            50% {
                transform: translate(-50%, -50%) scale(1.2);
                opacity: 1;
            }
        }

        /* Enhanced scroll indicator */
        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background:  linear-gradient(135deg, #6B9B76, #7BA05B);
            z-index: 1000;
            transition: width 0.1s ease;
        }
    </style>

    <!-- Add scroll indicator -->
    <div class="scroll-indicator"></div>

    <script>
        // Scroll indicator
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.querySelector('.scroll-indicator').style.width = scrolled + '%';
        });
    </script>
</body>
</html>