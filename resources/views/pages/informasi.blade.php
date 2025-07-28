<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi - Arisan Barokah Platform Digital Terpercaya</title>
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
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Section */
        .page-header {
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            padding: 80px 0 60px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            opacity: 0.1;
        }

        .page-header-content {
            position: relative;
            z-index: 2;
        }

        .page-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: slideInDown 1s ease-out;
        }

        .page-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            animation: slideInUp 1s ease-out 0.3s both;
        }

        /* Breadcrumb */
        .breadcrumb {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 20px 0;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        .breadcrumb-nav {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            color: white;
        }

        .breadcrumb-nav a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb-nav a:hover {
            color: white;
        }

        .breadcrumb-nav span {
            color: rgba(255,255,255,0.6);
        }

        /* Main Content */
        .main-content {
            padding: 60px 0;
            background: white;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 60px;
            margin-bottom: 60px;
        }

        .content-main {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .content-sidebar {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        /* Table of Contents */
        .toc-widget {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: sticky;
            top: 20px;
        }

        .toc-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .toc-list {
            list-style: none;
        }

        .toc-list li {
            margin-bottom: 10px;
        }

        .toc-list a {
            color: #666;
            text-decoration: none;
            padding: 8px 0;
            display: block;
            border-left: 3px solid transparent;
            padding-left: 15px;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .toc-list a:hover,
        .toc-list a.active {
            color: #6B9B76;
            border-left-color: #6B9B76;
            background: rgba(107, 155, 118, 0.05);
            padding-left: 20px;
        }

        /* Info Widget */
        .info-widget {
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .info-widget-icon {
            width: 60px;
            height: 60px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.5rem;
        }

        .info-widget h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .info-widget p {
            opacity: 0.9;
            margin-bottom: 20px;
        }

        .info-widget .btn {
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .info-widget .btn:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-2px);
        }

        /* Content Sections */
        .content-section {
            margin-bottom: 50px;
        }

        .content-section h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 3px solid #6B9B76;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .content-section h3 {
            font-size: 1.5rem;
            color: #333;
            margin: 30px 0 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .content-section h4 {
            font-size: 1.2rem;
            color: #333;
            margin: 25px 0 10px;
            font-weight: 600;
        }

        .content-section p {
            margin-bottom: 15px;
            color: #666;
            line-height: 1.8;
        }

        .content-section ul, 
        .content-section ol {
            margin: 20px 0;
            padding-left: 30px;
        }

        .content-section li {
            margin-bottom: 8px;
            color: #666;
            line-height: 1.6;
        }

        /* Feature Cards */
        .feature-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin: 30px 0;
        }

        .feature-card {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            border-left: 4px solid #6B9B76;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }

        .feature-card-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .feature-card h4 {
            color: #333;
            margin: 0 0 10px 0;
            font-size: 1.1rem;
        }

        .feature-card p {
            color: #666;
            font-size: 0.9rem;
            margin: 0;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            margin: 30px 0;
        }

        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid #f0f0f0;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #6B9B76;
            margin-bottom: 10px;
        }

        .stat-label {
            color: #666;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
        }

        /* Alert Box */
        .alert {
            padding: 20px 25px;
            border-radius: 15px;
            margin: 25px 0;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .alert-info {
            background: rgba(107, 155, 118, 0.1);
            border-left: 4px solid #6B9B76;
            color: #4a5568;
        }

        .alert-warning {
            background: rgba(255, 193, 7, 0.1);
            border-left: 4px solid #ffc107;
            color: #4a5568;
        }

        .alert-success {
            background: rgba(40, 167, 69, 0.1);
            border-left: 4px solid #28a745;
            color: #4a5568;
        }

        .alert-icon {
            font-size: 1.2rem;
            margin-top: 2px;
        }

        .alert-info .alert-icon {
            color: #6B9B76;
        }

        .alert-warning .alert-icon {
            color: #ffc107;
        }

        .alert-success .alert-icon {
            color: #28a745;
        }

        /* FAQ Section */
        .faq-item {
            background: white;
            border-radius: 15px;
            margin-bottom: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }

        .faq-question {
            padding: 20px 25px;
            background: #f8f9fa;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.3s ease;
            font-weight: 500;
            color: #333;
        }

        .faq-question:hover {
            background: #e9ecef;
        }

        .faq-answer {
            padding: 0 25px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            color: #666;
        }

        .faq-item.active .faq-answer {
            padding: 20px 25px;
            max-height: 200px;
        }

        .faq-icon {
            transition: transform 0.3s ease;
            color: #6B9B76;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        /* Footer CTA Section */
        .footer-cta {
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            padding: 80px 0;
            text-align: center;
            color: white;
        }

        .footer-cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .footer-cta p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .footer-cta .btn {
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .footer-cta .btn:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-2px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2.2rem;
            }

            .page-subtitle {
                font-size: 1.1rem;
            }

            .content-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .content-main {
                padding: 25px;
            }

            .toc-widget,
            .info-widget {
                padding: 20px;
            }

            .content-section h2 {
                font-size: 1.6rem;
            }

            .feature-cards {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Scroll Animation */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
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

        /* Floating elements */
        .floating-elements {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
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
            right: 10%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
        }

        .floating-item:nth-child(2) {
            top: 60%;
            right: 20%;
            width: 40px;
            height: 40px;
            animation-delay: 2s;
        }

        .floating-item:nth-child(3) {
            top: 10%;
            right: 30%;
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

        /* Scroll indicator */
        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            z-index: 1000;
            transition: width 0.1s ease;
        }
    </style>
</head>
<body>
    <!-- Scroll Indicator -->
    <div class="scroll-indicator"></div>

    <!-- Header Section -->
    <section class="page-header">
        <div class="container">
            <div class="page-header-content">
                <h1 class="page-title">Informasi</h1>
                <p class="page-subtitle">
                    Pelajari lebih lanjut tentang Arisan Barokah, cara kerja, keamanan, dan semua yang perlu Anda ketahui tentang platform arisan digital terpercaya
                </p>
            </div>
        </div>
        <div class="floating-elements">
            <div class="floating-item"></div>
            <div class="floating-item"></div>
            <div class="floating-item"></div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="container">
            <nav class="breadcrumb-nav">
                <a href="#"><i class="fas fa-home"></i> Beranda</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <span>Informasi</span>
            </nav>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-content">
        <div class="container">
            <div class="content-grid">
                <!-- Main Content -->
                <div class="content-main">
                    <!-- Tentang Arisan Barokah -->
                    <div class="content-section animate-on-scroll" id="tentang">
                        <h2><i class="fas fa-info-circle"></i> Tentang Arisan Barokah</h2>
                        <p>
                            Arisan Barokah adalah platform arisan digital terdepan di Indonesia yang menggabungkan tradisi arisan dengan teknologi modern. 
                            Kami hadir untuk memberikan solusi keuangan yang aman, transparan, dan mudah digunakan bagi semua kalangan.
                        </p>
                        <p>
                            Didirikan oleh Owner Farah Proping Dewi sejak 2020, Arisan Barokah telah melayani ribuan pengguna aktif 
                            dan memfasilitasi miliaran rupiah dalam transaksi arisan digital. Kami menyediakan pilihan kloter yang beragam, 
                            cocok untuk investasi jangka pendek dengan sistem yang terpercaya.
                        </p>

                        <div class="stats-grid">
                            <div class="stat-card">
                                <div class="stat-number">10K+</div>
                                <div class="stat-label">Pengguna Aktif</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-number">500+</div>
                                <div class="stat-label">Kloter Aktif</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-number">50M+</div>
                                <div class="stat-label">Total Transaksi</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-number">99%</div>
                                <div class="stat-label">Tingkat Kepuasan</div>
                            </div>
                        </div>
                    </div>

                    <!-- Cara Kerja -->
                    <div class="content-section animate-on-scroll" id="cara-kerja">
                        <h2><i class="fas fa-cogs"></i> Cara Kerja Arisan Barokah</h2>
                        <p>
                            Sistem arisan digital Arisan Barokah dirancang untuk memberikan pengalaman yang mudah dan aman. 
                            Berikut adalah proses lengkap cara kerja platform kami:
                        </p>

                        <h3><i class="fas fa-user-plus"></i> 1. Pendaftaran & Verifikasi</h3>
                        <p>
                            Proses pendaftaran yang mudah dengan verifikasi identitas untuk memastikan keamanan semua anggota.
                        </p>
                        <ul>
                            <li>Daftar dengan email dan nomor telepon</li>
                            <li>Verifikasi OTP melalui SMS/Email</li>
                            <li>Upload dokumen identitas (KTP/SIM)</li>
                            <li>Verifikasi rekening bank</li>
                        </ul>

                        <h3><i class="fas fa-users"></i> 2. Bergabung dengan Kloter</h3>
                        <p>
                            Pilih kloter arisan yang sesuai dengan kemampuan finansial dan preferensi Anda.
                        </p>
                        <ul>
                            <li>Browse kloter yang tersedia</li>
                            <li>Pilih nominal dan durasi yang sesuai</li>
                            <li>Baca syarat dan ketentuan kloter</li>
                            <li>Konfirmasi keikutsertaan</li>
                        </ul>

                        <h3><i class="fas fa-credit-card"></i> 3. Pembayaran Rutin</h3>
                        <p>
                            Sistem pembayaran otomatis yang memudahkan Anda dalam melakukan iuran bulanan.
                        </p>
                        <ul>
                            <li>Auto-debit dari rekening bank</li>
                            <li>Notifikasi sebelum tanggal jatuh tempo</li>
                            <li>Multiple payment methods</li>
                            <li>Konfirmasi pembayaran real-time</li>
                        </ul>

                        <h3><i class="fas fa-random"></i> 4. Undian & Penerimaan</h3>
                        <p>
                            Sistem undian yang fair dan transparan untuk menentukan penerima dana arisan.
                        </p>
                        <ul>
                            <li>Undian otomatis sistem komputer</li>
                            <li>Live streaming proses undian</li>
                            <li>Notifikasi hasil undian</li>
                            <li>Transfer dana otomatis ke pemenang</li>
                        </ul>
                    </div>

                    <!-- Keamanan -->
                    <div class="content-section animate-on-scroll" id="keamanan">
                        <h2><i class="fas fa-shield-alt"></i> Keamanan & Kepercayaan</h2>
                        <p>
                            Keamanan adalah prioritas utama Arisan Barokah. Kami menggunakan teknologi terdepan untuk melindungi 
                            data dan dana Anda dengan standar keamanan perbankan.
                        </p>

                        <div class="alert alert-info">
                            <i class="fas fa-info-circle alert-icon"></i>
                            <div>
                                <strong>Jaminan Keamanan 100%</strong><br>
                                Semua dana anggota diasuransikan dan dilindungi dengan sistem keamanan berlapis.
                            </div>
                        </div>

                        <div class="feature-cards">
                            <div class="feature-card">
                                <div class="feature-card-icon">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <h4>Enkripsi SSL 256-bit</h4>
                                <p>Semua data ditransmisikan dengan enkripsi tingkat militer</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-card-icon">
                                    <i class="fas fa-database"></i>
                                </div>
                                <h4>Data Center Aman</h4>
                                <p>Server tersimpan di data center bersertifikat ISO 27001</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-card-icon">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <h4>Verifikasi Berlapis</h4>
                                <p>Sistem verifikasi identitas dan rekening yang ketat</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-card-icon">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <h4>Monitoring 24/7</h4>
                                <p>Pengawasan sistem keamanan sepanjang waktu</p>
                            </div>
                        </div>
                    </div>

                    <!-- Jenis Arisan -->
                    <div class="content-section animate-on-scroll" id="jenis-arisan">
                        <h2><i class="fas fa-list"></i> Jenis Arisan yang Tersedia</h2>
                        <p>
                            Arisan Barokah menyediakan berbagai jenis arisan yang dapat disesuaikan dengan kebutuhan dan kemampuan Anda.
                        </p>

                        <h3><i class="fas fa-calendar-alt"></i> Arisan Rutin</h3>
                        <p>
                            Arisan dengan periode tetap dan nominal yang konsisten setiap bulannya.
                        </p>
                        <ul>
                            <li>Periode: 6 bulan, 12 bulan, 24 bulan</li>
                            <li>Nominal: Rp 500.000 - Rp 10.000.000</li>
                            <li>Anggota: 6-24 orang per kloter</li>
                            <li>Undian: Setiap bulan pada tanggal yang sama</li>
                        </ul>

                        <h3><i class="fas fa-star"></i> Arisan Premium</h3>
                        <p>
                            Arisan dengan nominal besar untuk komunitas eksklusif dengan benefit tambahan.
                        </p>
                        <ul>
                            <li>Nominal mulai dari Rp 10.000.000</li>
                            <li>Benefit cashback dan reward</li>
                            <li>Customer service dedicated</li>
                            <li>Insurance coverage lebih tinggi</li>
                        </ul>

                        <h3><i class="fas fa-bolt"></i> Arisan Kilat</h3>
                        <p>
                            Arisan jangka pendek dengan periode singkat untuk kebutuhan mendesak.
                        </p>
                        <ul>
                            <li>Periode: 2-6 bulan</li>
                            <li>Undian lebih sering (mingguan/bi-weekly)</li>
                            <li>Proses cepat dan fleksibel</li>
                            <li>Minimal anggota lebih sedikit</li>
                        </ul>
                    </div>

                    <!-- FAQ -->
                    <div class="content-section animate-on-scroll" id="faq">
                        <h2><i class="fas fa-question-circle"></i> Frequently Asked Questions</h2>
                        <p>
                            Berikut adalah pertanyaan yang sering diajukan oleh pengguna Arisan Barokah.
                        </p>

                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Bagaimana cara bergabung dengan kloter arisan?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Setelah registrasi dan verifikasi, Anda dapat browse kloter yang tersedia, pilih yang sesuai, baca syarat ketentuan, dan konfirmasi keikutsertaan.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Apa yang terjadi jika ada anggota yang tidak bayar?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Arisan Barokah memiliki sistem backup fund dan asuransi untuk menjamin kelangsungan arisan. Anggota yang menunggak akan dikenakan sanksi sesuai ketentuan.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Berapa biaya administrasi Arisan Barokah?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Biaya administrasi sangat terjangkau, mulai dari 1-2% dari nominal arisan. Detail biaya akan dijelaskan sebelum Anda bergabung dengan kloter.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <span>Bagaimana sistem undian dilakukan?</span>
                                <i class="fas fa-chevron-down faq-icon"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Undian dilakukan secara otomatis oleh sistem komputer yang fair dan transparan. Proses undian dapat disaksikan melalui live streaming.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Kontak -->
                    <div class="content-section animate-on-scroll" id="kontak">
                        <h2><i class="fas fa-phone"></i> Hubungi Kami</h2>
                        <p>
                            Tim customer service Arisan Barokah siap membantu Anda 24/7. Hubungi kami melalui berbagai channel yang tersedia.
                        </p>

                        <div class="alert alert-success">
                            <i class="fas fa-headset alert-icon"></i>
                            <div>
                                <strong>Customer Service 24/7</strong><br>
                                Tim support kami siap membantu Anda kapan saja, termasuk hari libur dan weekend.
                            </div>
                        </div>

                        <div class="feature-cards">
                            <div class="feature-card">
                                <div class="feature-card-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <h4>Telepon</h4>
                                <p>0804-1-BAROKAH (0804-1-227652)</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-card-icon">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <h4>WhatsApp</h4>
                                <p>+62 811-2345-6789</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-card-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h4>Email</h4>
                                <p>support@arisanbarokah.id</p>
                            </div>
                            <div class="feature-card">
                                <div class="feature-card-icon">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <h4>Live Chat</h4>
                                <p>Chat langsung di website</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="content-sidebar">
                    <!-- Table of Contents -->
                    <div class="toc-widget">
                        <h3 class="toc-title">
                            <i class="fas fa-list"></i>
                            Daftar Isi
                        </h3>
                        <ul class="toc-list">
                            <li><a href="#tentang" class="toc-link">Tentang Arisan Barokah</a></li>
                            <li><a href="#cara-kerja" class="toc-link">Cara Kerja</a></li>
                            <li><a href="#keamanan" class="toc-link">Keamanan</a></li>
                            <li><a href="#jenis-arisan" class="toc-link">Jenis Arisan</a></li>
                            <li><a href="#faq" class="toc-link">FAQ</a></li>
                            <li><a href="#kontak" class="toc-link">Hubungi Kami</a></li>
                        </ul>
                    </div>

                    <!-- Info Widget -->
                    <div class="info-widget">
                        <div class="info-widget-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3>Siap Memulai?</h3>
                        <p>Bergabunglah dengan ribuan pengguna yang telah merasakan kemudahan Arisan Barokah</p>
                        <a href="{{ route('register') }}" class="btn">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer CTA Section -->
    <section class="footer-cta">
        <div class="container">
            <h2 class="animate-on-scroll">Siap Memulai Arisan Digital?</h2>
            <p class="animate-on-scroll">
                Bergabunglah dengan ribuan orang yang telah merasakan kemudahan Arisan Barokah
            </p>
            <div class="animate-on-scroll">
                <a href="#" class="btn">
                    <i class="fas fa-user-plus"></i>
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </section>

    <script>
        // Smooth scroll for TOC links
        document.querySelectorAll('.toc-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Active TOC link highlighting
        function updateActiveTocLink() {
            const sections = document.querySelectorAll('.content-section');
            const tocLinks = document.querySelectorAll('.toc-link');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.getBoundingClientRect().top;
                if (sectionTop <= 100) {
                    current = section.getAttribute('id');
                }
            });

            tocLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveTocLink);
        window.addEventListener('load', updateActiveTocLink);

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                const faqItem = this.parentElement;
                const isActive = faqItem.classList.contains('active');
                
                // Close all FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                });
                
                // Open clicked item if it wasn't active
                if (!isActive) {
                    faqItem.classList.add('active');
                }
            });
        });

        // Scroll animations
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

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);

        // Counter animation for stats
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            let hasAnimated = false;

            const observerCallback = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !hasAnimated) {
                        hasAnimated = true;
                        counters.forEach(counter => {
                            const target = counter.textContent;
                            const numericTarget = parseInt(target.replace(/\D/g, ''));
                            const suffix = target.replace(/\d/g, '');
                            let current = 0;
                            const increment = numericTarget / 100;
                            
                            const updateCounter = () => {
                                if (current < numericTarget) {
                                    current += increment;
                                    counter.textContent = Math.ceil(current) + suffix;
                                    requestAnimationFrame(updateCounter);
                                } else {
                                    counter.textContent = target;
                                }
                            };
                            
                            updateCounter();
                        });
                    }
                });
            };

            const observer = new IntersectionObserver(observerCallback, {
                threshold: 0.5
            });

            const statsGrid = document.querySelector('.stats-grid');
            if (statsGrid) {
                observer.observe(statsGrid);
            }
        }

        // Initialize counter animation
        animateCounters();

        // Smooth scroll for all anchor links
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

        // Back to top functionality
        function createBackToTop() {
            const backToTop = document.createElement('div');
            backToTop.innerHTML = '<i class="fas fa-chevron-up"></i>';
            backToTop.style.cssText = `
                position: fixed;
                bottom: 30px;
                right: 30px;
                width: 50px;
                height: 50px;
                background: linear-gradient(135deg, #6B9B76, #7BA05B);
                color: white;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                opacity: 0;
                transition: all 0.3s ease;
                z-index: 1000;
                font-size: 1.2rem;
                box-shadow: 0 4px 15px rgba(107, 155, 118, 0.3);
            `;

            backToTop.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            backToTop.addEventListener('mouseenter', () => {
                backToTop.style.transform = 'translateY(-3px) scale(1.1)';
                backToTop.style.boxShadow = '0 6px 20px rgba(107, 155, 118, 0.4)';
            });

            backToTop.addEventListener('mouseleave', () => {
                backToTop.style.transform = 'translateY(0) scale(1)';
                backToTop.style.boxShadow = '0 4px 15px rgba(107, 155, 118, 0.3)';
            });

            document.body.appendChild(backToTop);

            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    backToTop.style.opacity = '1';
                } else {
                    backToTop.style.opacity = '0';
                }
            });
        }

        // Initialize back to top button
        createBackToTop();

        // Search functionality for FAQ
        function createFAQSearch() {
            const faqSection = document.querySelector('#faq');
            if (!faqSection) return;

            const searchContainer = document.createElement('div');
            searchContainer.style.cssText = `
                margin-bottom: 30px;
                position: relative;
            `;

            const searchInput = document.createElement('input');
            searchInput.type = 'text';
            searchInput.placeholder = 'Cari pertanyaan...';
            searchInput.style.cssText = `
                width: 100%;
                padding: 15px 50px 15px 20px;
                border: 2px solid #e9ecef;
                border-radius: 15px;
                font-size: 1rem;
                transition: border-color 0.3s ease;
                outline: none;
                background: #f8f9fa;
            `;

            const searchIcon = document.createElement('i');
            searchIcon.className = 'fas fa-search';
            searchIcon.style.cssText = `
                position: absolute;
                right: 20px;
                top: 50%;
                transform: translateY(-50%);
                color: #6B9B76;
                pointer-events: none;
            `;

            searchContainer.appendChild(searchInput);
            searchContainer.appendChild(searchIcon);

            const faqTitle = faqSection.querySelector('h2');
            faqTitle.parentNode.insertBefore(searchContainer, faqTitle.nextSibling);

            // Search functionality
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                const faqItems = document.querySelectorAll('.faq-item');

                faqItems.forEach(item => {
                    const question = item.querySelector('.faq-question span').textContent.toLowerCase();
                    const answer = item.querySelector('.faq-answer p').textContent.toLowerCase();
                    
                    if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });

            // Focus styling
            searchInput.addEventListener('focus', () => {
                searchInput.style.borderColor = '#6B9B76';
                searchInput.style.background = 'white';
            });

            searchInput.addEventListener('blur', () => {
                searchInput.style.borderColor = '#e9ecef';
                searchInput.style.background = '#f8f9fa';
            });
        }

        // Initialize FAQ search
        createFAQSearch();

        // Scroll indicator
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.querySelector('.scroll-indicator').style.width = scrolled + '%';
        });

        // Add parallax effect to header
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const pageHeader = document.querySelector('.page-header');
            if (pageHeader && scrolled < window.innerHeight) {
                pageHeader.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
        });

        // Initialize loading animation
        window.addEventListener('load', () => {
            document.body.style.opacity = '1';
        });

        // Set initial opacity
        document.body.style.opacity = '0';
        document.body.style.transition = 'opacity 0.3s ease';
    </script>
</body>
                            <div class="faq-answer">
                                <p>Ya, Arisan Barokah menggunakan sistem keamanan berlapis dengan enkripsi SSL 256-bit, data center bersertifikat, dan monitoring 24/7. Semua dana anggota juga diasuransikan.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">