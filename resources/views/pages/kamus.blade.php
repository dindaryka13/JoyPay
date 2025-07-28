<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamus Arisan Digital - JoyPay Platform Arisan Digital</title>
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
            min-height: 100vh;
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
            background: url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
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
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            padding: 20px 0;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        .breadcrumb-nav {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
        }

        .breadcrumb-nav a {
            color: #6B9B76;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb-nav a:hover {
            color: #7BA05B;
        }

        .breadcrumb-nav span {
            color: #666;
        }

        /* Main Content */
        .main-content {
            padding: 60px 0;
            background: transparent;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 60px;
            margin-bottom: 60px;
        }

        .content-main {
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .content-sidebar {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        /* Search Section */
        .search-section {
            margin-bottom: 40px;
        }

        .search-container {
            position: relative;
            max-width: 600px;
        }

        .search-input {
            width: 100%;
            padding: 18px 60px 18px 20px;
            border: 2px solid rgba(107, 155, 118, 0.3);
            border-radius: 50px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            outline: none;
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
        }

        .search-input:focus {
            border-color: #6B9B76;
            background: white;
            box-shadow: 0 0 0 3px rgba(107, 155, 118, 0.1);
        }

        .search-icon {
            position: absolute;
            right: 25px;
            top: 50%;
            transform: translateY(-50%);
            color: #6B9B76;
            font-size: 1.2rem;
        }

        .search-results-count {
            margin-top: 15px;
            color: #666;
            font-size: 0.9rem;
        }

        /* Alphabet Filter */
        .alphabet-filter {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 30px 0;
            padding: 25px;
            background: rgba(255,255,255,0.8);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            border: 1px solid rgba(255,255,255,0.3);
        }

        .alphabet-letter {
            width: 40px;
            height: 40px;
            border: 2px solid rgba(107, 155, 118, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            color: #6B9B76;
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
        }

        .alphabet-letter:hover,
        .alphabet-letter.active {
            border-color: #6B9B76;
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(107, 155, 118, 0.3);
        }

        .alphabet-letter.disabled {
            opacity: 0.3;
            cursor: not-allowed;
            pointer-events: none;
        }

        /* Dictionary Entries */
        .dictionary-section {
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 3px solid #6B9B76;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dictionary-grid {
            display: grid;
            gap: 20px;
        }

        .dictionary-entry {
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 15px;
            padding: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .dictionary-entry::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }

        .dictionary-entry:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            transform: translateY(-5px);
            background: rgba(255,255,255,0.95);
        }

        .dictionary-entry:hover::before {
            transform: scaleY(1);
        }

        .entry-term {
            font-size: 1.4rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .entry-category {
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .entry-pronunciation {
            color: #888;
            font-style: italic;
            margin-bottom: 12px;
            font-size: 0.9rem;
        }

        .entry-definition {
            color: #555;
            line-height: 1.7;
            margin-bottom: 15px;
        }

        .entry-example {
            background: rgba(107, 155, 118, 0.1);
            padding: 15px;
            border-radius: 10px;
            border-left: 4px solid #6B9B76;
            margin-top: 15px;
        }

        .entry-example-title {
            font-weight: 600;
            color: #6B9B76;
            margin-bottom: 8px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .entry-example-text {
            color: #666;
            font-style: italic;
            line-height: 1.6;
        }

        .entry-related {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e9ecef;
        }

        .entry-related-title {
            font-size: 0.85rem;
            font-weight: 600;
            color: #666;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .entry-related-terms {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .related-term {
            background: rgba(107, 155, 118, 0.1);
            color: #6B9B76;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid rgba(107, 155, 118, 0.2);
        }

        .related-term:hover {
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 4px 10px rgba(107, 155, 118, 0.3);
        }

        /* Sidebar Widgets */
        .sidebar-widget {
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            position: sticky;
            top: 20px;
        }

        .widget-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .widget-title i {
            color: #6B9B76;
        }

        .popular-terms {
            list-style: none;
        }

        .popular-terms li {
            margin-bottom: 12px;
        }

        .popular-terms a {
            color: #666;
            text-decoration: none;
            padding: 8px 0;
            display: block;
            border-left: 3px solid transparent;
            padding-left: 15px;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .popular-terms a:hover {
            color: #6B9B76;
            border-left-color: #6B9B76;
            background: rgba(107, 155, 118, 0.05);
            padding-left: 20px;
        }

        /* Stats Widget */
        .stats-widget {
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 20px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.8rem;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Category Filter */
        .category-filter {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 20px 0;
        }

        .category-btn {
            padding: 8px 16px;
            border: 2px solid rgba(107, 155, 118, 0.3);
            border-radius: 25px;
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
            color: #6B9B76;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .category-btn:hover,
        .category-btn.active {
            border-color: #6B9B76;
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(107, 155, 118, 0.3);
        }

        /* No Results */
        .no-results {
            text-align: center;
            padding: 60px 20px;
            color: #666;
        }

        .no-results-icon {
            font-size: 4rem;
            color: rgba(107, 155, 118, 0.3);
            margin-bottom: 20px;
        }

        .no-results h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #333;
        }

        .no-results p {
            font-size: 1rem;
            opacity: 0.8;
        }

        /* Loading Animation */
        .loading {
            display: none;
            text-align: center;
            padding: 40px;
            color: #666;
        }

        .loading-spinner {
            width: 40px;
            height: 40px;
            border: 4px solid rgba(107, 155, 118, 0.2);
            border-top: 4px solid #6B9B76;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Floating Elements */
        .floating-elements {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .floating-item {
            position: absolute;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            animation: floatUp 8s infinite ease-in-out;
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
            left: 5%;
            width: 40px;
            height: 40px;
            animation-delay: 3s;
        }

        .floating-item:nth-child(3) {
            top: 80%;
            right: 20%;
            width: 30px;
            height: 30px;
            animation-delay: 6s;
        }

        @keyframes floatUp {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
                opacity: 0.5;
            }
            50% {
                transform: translateY(-30px) rotate(180deg);
                opacity: 0.8;
            }
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

            .sidebar-widget {
                padding: 20px;
            }

            .alphabet-filter {
                padding: 15px;
            }

            .alphabet-letter {
                width: 35px;
                height: 35px;
                font-size: 0.9rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .entry-term {
                font-size: 1.2rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
                gap: 15px;
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

        /* Back to top button */
        .back-to-top {
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
        }

        .back-to-top.visible {
            opacity: 1;
        }

        .back-to-top:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(107, 155, 118, 0.4);
        }

        /* Scroll indicator */
        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            z-index: 1001;
            transition: width 0.1s ease;
        }
    </style>
</head>
<body>
    <!-- Floating Background Elements -->
    <div class="floating-elements">
        <div class="floating-item"></div>
        <div class="floating-item"></div>
        <div class="floating-item"></div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator"></div>

    <!-- Header Section -->
    <section class="page-header">
        <div class="container">
            <div class="page-header-content">
                <h1 class="page-title">Kamus Arisan Digital</h1>
                <p class="page-subtitle">
                    Kumpulan istilah dan definisi lengkap seputar arisan digital, kloter, dan terminologi JoyPay untuk membantu pemahaman Anda
                </p>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="container">
            <nav class="breadcrumb-nav">
                <a href="#"><i class="fas fa-home"></i> Beranda</a>
                <span><i class="fas fa-chevron-right"></i></span>
                <span>Kamus Arisan Digital</span>
            </nav>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-content">
        <div class="container">
            <div class="content-grid">
                <!-- Main Content -->
                <div class="content-main">
                    <!-- Search Section -->
                    <div class="search-section animate-on-scroll">
                        <div class="search-container">
                            <input type="text" class="search-input" placeholder="Cari istilah arisan digital..." id="searchInput">
                            <i class="fas fa-search search-icon"></i>
                        </div>
                        <div class="search-results-count" id="resultsCount">Menampilkan semua istilah</div>
                    </div>

                    <!-- Category Filter -->
                    <div class="category-filter animate-on-scroll">
                        <button class="category-btn active" data-category="all">Semua</button>
                        <button class="category-btn" data-category="dasar">Istilah Dasar</button>
                        <button class="category-btn" data-category="teknis">Teknis</button>
                        <button class="category-btn" data-category="keuangan">Keuangan</button>
                        <button class="category-btn" data-category="teknologi">Teknologi</button>
                    </div>

                    <!-- Alphabet Filter -->
                    <div class="alphabet-filter animate-on-scroll" id="alphabetFilter">
                        <!-- Alphabet buttons will be generated by JavaScript -->
                    </div>

                    <!-- Dictionary Entries -->
                    <div class="dictionary-section animate-on-scroll">
                        <h2 class="section-title">
                            <i class="fas fa-book"></i>
                            Daftar Istilah
                        </h2>
                        
                        <div class="dictionary-grid" id="dictionaryGrid">
                            <!-- Dictionary entries will be populated by JavaScript -->
                        </div>

                        <!-- No Results -->
                        <div class="no-results" id="noResults" style="display: none;">
                            <div class="no-results-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <h3>Istilah Tidak Ditemukan</h3>
                            <p>Coba gunakan kata kunci yang berbeda atau jelajahi kategori lain</p>
                        </div>

                        <!-- Loading -->
                        <div class="loading" id="loading">
                            <div class="loading-spinner"></div>
                            <p>Memuat istilah...</p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="content-sidebar">
                    <!-- Popular Terms Widget -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">
                            <i class="fas fa-fire"></i>
                            Istilah Populer
                        </h3>
                        <ul class="popular-terms">
                            <li><a href="#" data-term="kloter">Kloter</a></li>
                            <li><a href="#" data-term="slot">Slot</a></li>
                            <li><a href="#" data-term="auto-debit">Auto-debit</a></li>
                            <li><a href="#" data-term="undian">Undian</a></li>
                            <li><a href="#" data-term="admin-fee">Admin Fee</a></li>
                            <li><a href="#" data-term="escrow">Escrow</a></li>
                            <li><a href="#" data-term="roi">ROI</a></li>
                        </ul>
                    </div>

                    <!-- Stats Widget -->
                    <div class="stats-widget">
                        <div class="widget-title">
                            <i class="fas fa-chart-bar"></i>
                            Statistik Kamus
                        </div>
                        <div class="stats-grid">
                            <div class="stat-item">
                                <div class="stat-number" id="totalTerms">0</div>
                                <div class="stat-label">Total Istilah</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">4</div>
                                <div class="stat-label">Kategori</div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links Widget -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">
                            <i class="fas fa-external-link-alt"></i>
                            Tautan Berguna
                        </h3>
                        <ul class="popular-terms">
                            <li><a href="#">Panduan Pemula</a></li>
                            <li><a href="#">FAQ Lengkap</a></li>
                            <li><a href="#">Syarat & Ketentuan</a></li>
                            <li><a href="#">Hubungi Support</a></li>
                            <li><a href="#">Download App</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </div>

    <script>
        // Dictionary data
        const dictionaryData = [
            {
                term: "Kloter",
                category: "dasar",
                pronunciation: "/klo·ter/",
                definition: "Kelompok atau grup arisan yang terdiri dari sejumlah anggota yang telah ditentukan. Setiap kloter memiliki nominal iuran, periode, dan jadwal undian yang sama.",
                example: "Saya bergabung dengan kloter arisan 12 bulan dengan nominal Rp 1.000.000 per bulan.",
                related: ["Slot", "Anggota", "Periode"]
            },
            {
                term: "Slot",
                category: "dasar",
                pronunciation: "/slot/",
                definition: "Posisi atau tempat yang tersedia dalam sebuah kloter arisan. Setiap slot mewakili satu anggota dalam kloter tersebut.",
                example: "Kloter ini masih memiliki 3 slot kosong yang bisa diisi oleh anggota baru.",
                related: ["Kloter", "Anggota", "Kuota"]
            },
            {
                term: "Auto-debit",
                category: "teknis",
                pronunciation: "/au·to de·bit/",
                definition: "Sistem pembayaran otomatis yang memotong iuran arisan langsung dari rekening bank anggota pada tanggal yang telah ditentukan.",
                example: "Dengan fitur auto-debit, iuran bulanan akan dipotong otomatis dari rekening pada tanggal 1 setiap bulan.",
                related: ["Pembayaran", "Rekening", "Iuran"]
            },
            {
                term: "Undian",
                category: "dasar",
                pronunciation: "/un·di·an/",
                definition: "Proses pengacakan yang dilakukan untuk menentukan anggota mana yang akan menerima dana arisan pada periode tertentu.",
                example: "Undian kloter ini dilakukan setiap tanggal 15 dan hasilnya diumumkan melalui aplikasi.",
                related: ["Pemenang", "Periode", "Transparansi"]
            },
            {
                term: "Admin Fee",
                category: "keuangan",
                pronunciation: "/ad·min fi/",
                definition: "Biaya administrasi yang dikenakan platform untuk mengelola dan memfasilitasi jalannya arisan digital.",
                example: "Admin fee untuk kloter ini sebesar 2% dari total dana yang diterima pemenang.",
                related: ["Biaya", "Platform", "Layanan"]
            },
            {
                term: "Escrow",
                category: "teknologi",
                pronunciation: "/es·krow/",
                definition: "Sistem penyimpanan dana sementara di rekening pihak ketiga yang netral untuk menjamin keamanan transaksi arisan.",
                example: "Dana iuran anggota disimpan dalam sistem escrow sebelum diserahkan kepada pemenang undian.",
                related: ["Keamanan", "Dana", "Jaminan"]
            },
            {
                term: "ROI",
                category: "keuangan",
                pronunciation: "/ar o ai/",
                definition: "Return on Investment, yaitu tingkat pengembalian atau keuntungan yang diperoleh dari mengikuti arisan dibandingkan dengan investasi lainnya.",
                example: "ROI dari arisan ini cukup menarik karena anggota mendapat dana lebih awal tanpa bunga.",
                related: ["Investasi", "Keuntungan", "Analisis"]
            },
            {
                term: "Periode",
                category: "dasar",
                pronunciation: "/pe·ri·o·de/",
                definition: "Jangka waktu berjalannya sebuah kloter arisan, mulai dari pembentukan hingga semua anggota mendapat giliran.",
                example: "Periode kloter 12 bulan berarti arisan akan berjalan selama 12 bulan dengan 12 kali undian.",
                related: ["Durasi", "Kloter", "Jadwal"]
            },
            {
                term: "Anggota",
                category: "dasar",
                pronunciation: "/ang·go·ta/",
                definition: "Peserta yang bergabung dalam sebuah kloter arisan dan berkewajiban membayar iuran sesuai ketentuan.",
                example: "Kloter ini terdiri dari 10 anggota dengan iuran masing-masing Rp 500.000 per bulan.",
                related: ["Kloter", "Peserta", "Iuran"]
            },
            {
                term: "Iuran",
                category: "keuangan",
                pronunciation: "/i·u·ran/",
                definition: "Jumlah uang yang harus dibayarkan setiap anggota secara rutin sesuai dengan periode yang ditentukan dalam kloter.",
                example: "Iuran bulanan untuk kloter ini adalah Rp 1.000.000 yang dibayar setiap tanggal 1.",
                related: ["Pembayaran", "Nominal", "Kewajiban"]
            },
            {
                term: "Pemenang",
                category: "dasar",
                pronunciation: "/pe·me·nang/",
                definition: "Anggota kloter yang terpilih melalui undian untuk menerima dana arisan pada periode tertentu.",
                example: "Pemenang undian bulan ini adalah Ibu Sari yang akan menerima dana Rp 10.000.000.",
                related: ["Undian", "Dana", "Giliran"]
            },
            {
                term: "Verifikasi",
                category: "teknis",
                pronunciation: "/ve·ri·fi·ka·si/",
                definition: "Proses pemeriksaan dan validasi data anggota untuk memastikan keabsahan identitas dan rekening bank.",
                example: "Proses verifikasi membutuhkan upload KTP dan bukti rekening bank yang masih aktif.",
                related: ["Validasi", "Identitas", "Keamanan"]
            },
            {
                term: "Nominal",
                category: "keuangan",
                pronunciation: "/no·mi·nal/",
                definition: "Jumlah atau besaran uang yang ditetapkan untuk iuran maupun dana yang akan diterima dalam kloter arisan.",
                example: "Nominal kloter premium ini dimulai dari Rp 5.000.000 per slot.",
                related: ["Jumlah", "Iuran", "Dana"]
            },
            {
                term: "Live Streaming",
                category: "teknologi",
                pronunciation: "/laif stri·ming/",
                definition: "Siaran langsung proses undian arisan melalui platform digital untuk menjamin transparansi dan kredibilitas.",
                example: "Undian kloter dilakukan secara live streaming setiap hari Sabtu pukul 20.00 WIB.",
                related: ["Transparansi", "Undian", "Teknologi"]
            },
            {
                term: "Dashboard",
                category: "teknologi",
                pronunciation: "/dash·board/",
                definition: "Halaman utama aplikasi yang menampilkan ringkasan informasi kloter, pembayaran, dan aktivitas arisan anggota.",
                example: "Melalui dashboard, saya bisa melihat status pembayaran dan jadwal undian semua kloter yang saya ikuti.",
                related: ["Interface", "Informasi", "Aplikasi"]
            },
            {
                term: "Backup Fund",
                category: "keuangan",
                pronunciation: "/bek·ap fund/",
                definition: "Dana cadangan yang disediakan platform untuk menjamin kelancaran arisan jika ada anggota yang menunggak pembayaran.",
                example: "Backup fund memastikan pemenang undian tetap menerima dana penuh meski ada anggota yang telat bayar.",
                related: ["Jaminan", "Cadangan", "Keamanan"]
            },
            {
                term: "Notifikasi",
                category: "teknis",
                pronunciation: "/no·ti·fi·ka·si/",
                definition: "Pemberitahuan otomatis yang dikirim kepada anggota mengenai jadwal pembayaran, hasil undian, atau informasi penting lainnya.",
                example: "Saya menerima notifikasi bahwa pembayaran iuran akan dipotong otomatis besok.",
                related: ["Pemberitahuan", "Informasi", "Aplikasi"]
            },
            {
                term: "Multi-platform",
                category: "teknologi",
                pronunciation: "/mul·ti plat·form/",
                definition: "Kemampuan platform arisan untuk diakses melalui berbagai perangkat seperti website, aplikasi mobile, dan tablet.",
                example: "JoyPay dapat digunakan multi-platform, baik melalui website maupun aplikasi mobile.",
                related: ["Akses", "Perangkat", "Fleksibilitas"]
            },
            {
                term: "Kuota",
                category: "dasar",
                pronunciation: "/ku·o·ta/",
                definition: "Batas maksimal jumlah anggota yang dapat bergabung dalam sebuah kloter arisan.",
                example: "Kuota kloter ini sudah penuh dengan 15 anggota, tidak bisa menerima pendaftar baru.",
                related: ["Slot", "Kapasitas", "Anggota"]
            },
            {
                term: "Waiting List",
                category: "teknis",
                pronunciation: "/wei·ting list/",
                definition: "Daftar tunggu calon anggota yang ingin bergabung ketika kloter sudah penuh dan menunggu ada slot kosong.",
                example: "Saya masuk waiting list nomor 3 untuk kloter premium yang sedang penuh.",
                related: ["Antrian", "Slot", "Pendaftaran"]
            },
            {
                term: "Early Bird",
                category: "keuangan",
                pronunciation: "/er·li berd/",
                definition: "Promosi atau keuntungan khusus yang diberikan untuk anggota yang mendaftar lebih awal dalam sebuah kloter.",
                example: "Pendaftar early bird mendapat potongan admin fee sebesar 50% untuk 10 pendaftar pertama.",
                related: ["Promo", "Diskon", "Pendaftaran"]
            },
            {
                term: "Cashback",
                category: "keuangan",
                pronunciation: "/kash·bek/",
                definition: "Pengembalian sebagian uang atau reward yang diberikan kepada anggota berdasarkan aktivitas atau loyalitas tertentu.",
                example: "Anggota premium mendapat cashback 1% dari total iuran yang telah dibayarkan.",
                related: ["Reward", "Bonus", "Loyalitas"]
            },
            {
                term: "Referral",
                category: "teknis",
                pronunciation: "/re·fe·ral/",
                definition: "Program rujukan dimana anggota existing mendapat keuntungan jika berhasil mengajak orang lain bergabung.",
                example: "Program referral memberikan bonus Rp 100.000 untuk setiap teman yang berhasil diajak bergabung.",
                related: ["Rujukan", "Bonus", "Network"]
            },
            {
                term: "KYC",
                category: "teknis",
                pronunciation: "/kei wai si/",
                definition: "Know Your Customer, proses verifikasi identitas pelanggan untuk memenuhi regulasi dan mencegah fraud.",
                example: "Proses KYC memerlukan foto selfie dengan KTP untuk verifikasi identitas.",
                related: ["Verifikasi", "Identitas", "Regulasi"]
            }
        ];

        // Generate alphabet filter
        function generateAlphabetFilter() {
            const alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');
            const alphabetFilter = document.getElementById('alphabetFilter');
            
            // Get available letters
            const availableLetters = new Set();
            dictionaryData.forEach(item => {
                availableLetters.add(item.term.charAt(0).toUpperCase());
            });
            
            alphabet.forEach(letter => {
                const btn = document.createElement('div');
                btn.className = `alphabet-letter ${!availableLetters.has(letter) ? 'disabled' : ''}`;
                btn.textContent = letter;
                btn.dataset.letter = letter;
                
                if (availableLetters.has(letter)) {
                    btn.addEventListener('click', () => filterByLetter(letter));
                }
                
                alphabetFilter.appendChild(btn);
            });
        }

        // Render dictionary entries
        function renderDictionary(data = dictionaryData) {
            const grid = document.getElementById('dictionaryGrid');
            const noResults = document.getElementById('noResults');
            const resultsCount = document.getElementById('resultsCount');
            
            if (data.length === 0) {
                grid.style.display = 'none';
                noResults.style.display = 'block';
                resultsCount.textContent = 'Tidak ada hasil yang ditemukan';
                return;
            }
            
            grid.style.display = 'grid';
            noResults.style.display = 'none';
            resultsCount.textContent = `Menampilkan ${data.length} istilah`;
            
            grid.innerHTML = data.map(item => `
                <div class="dictionary-entry" data-term="${item.term.toLowerCase()}" data-category="${item.category}">
                    <div class="entry-term">
                        ${item.term}
                        <span class="entry-category">${getCategoryName(item.category)}</span>
                    </div>
                    ${item.pronunciation ? `<div class="entry-pronunciation">${item.pronunciation}</div>` : ''}
                    <div class="entry-definition">${item.definition}</div>
                    ${item.example ? `
                        <div class="entry-example">
                            <div class="entry-example-title">
                                <i class="fas fa-quote-left"></i>
                                Contoh Penggunaan
                            </div>
                            <div class="entry-example-text">"${item.example}"</div>
                        </div>
                    ` : ''}
                    ${item.related && item.related.length > 0 ? `
                        <div class="entry-related">
                            <div class="entry-related-title">Istilah Terkait</div>
                            <div class="entry-related-terms">
                                ${item.related.map(term => `
                                    <a href="#" class="related-term" data-term="${term.toLowerCase()}">${term}</a>
                                `).join('')}
                            </div>
                        </div>
                    ` : ''}
                </div>
            `).join('');
            
            // Add click handlers for related terms
            document.querySelectorAll('.related-term').forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    searchTerm(link.dataset.term);
                });
            });
        }

        // Get category display name
        function getCategoryName(category) {
            const categories = {
                'dasar': 'Dasar',
                'teknis': 'Teknis',
                'keuangan': 'Keuangan',
                'teknologi': 'Teknologi'
            };
            return categories[category] || category;
        }

        // Search functionality
        function searchDictionary(query) {
            if (!query.trim()) {
                renderDictionary();
                return;
            }
            
            const filtered = dictionaryData.filter(item => 
                item.term.toLowerCase().includes(query.toLowerCase()) ||
                item.definition.toLowerCase().includes(query.toLowerCase()) ||
                (item.example && item.example.toLowerCase().includes(query.toLowerCase())) ||
                (item.related && item.related.some(rel => rel.toLowerCase().includes(query.toLowerCase())))
            );
            
            renderDictionary(filtered);
        }

        // Search specific term
        function searchTerm(term) {
            const searchInput = document.getElementById('searchInput');
            searchInput.value = term;
            searchDictionary(term);
            
            // Scroll to results
            document.getElementById('dictionaryGrid').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }

        // Filter by category
        function filterByCategory(category) {
            const filtered = category === 'all' ? 
                dictionaryData : 
                dictionaryData.filter(item => item.category === category);
            
            renderDictionary(filtered);
            
            // Update active category button
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            document.querySelector(`[data-category="${category}"]`).classList.add('active');
        }

        // Filter by letter
        function filterByLetter(letter) {
            const filtered = dictionaryData.filter(item => 
                item.term.charAt(0).toUpperCase() === letter
            );
            
            renderDictionary(filtered);
            
            // Update active letter
            document.querySelectorAll('.alphabet-letter').forEach(btn => {
                btn.classList.remove('active');
            });
            document.querySelector(`[data-letter="${letter}"]`).classList.add('active');
            
            // Reset category filter
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            document.querySelector('[data-category="all"]').classList.add('active');
        }

        // Update total terms count
        function updateStats() {
            document.getElementById('totalTerms').textContent = dictionaryData.length;
        }

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

        // Scroll indicator
        function updateScrollIndicator() {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.querySelector('.scroll-indicator').style.width = scrolled + '%';
        }

        // Back to top functionality
        function updateBackToTop() {
            const backToTop = document.getElementById('backToTop');
            if (window.scrollY > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            generateAlphabetFilter();
            renderDictionary();
            updateStats();
            animateOnScroll();
            
            // Search input handler
            const searchInput = document.getElementById('searchInput');
            let searchTimeout;
            
            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(() => {
                    searchDictionary(this.value);
                }, 300);
            });
            
            // Category filter handlers
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    filterByCategory(this.dataset.category);
                });
            });
            
            // Popular terms handlers
            document.querySelectorAll('.popular-terms a[data-term]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    searchTerm(this.dataset.term);
                });
            });
            
            // Back to top handler
            document.getElementById('backToTop').addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            
            // Scroll events
            window.addEventListener('scroll', function() {
                animateOnScroll();
                updateScrollIndicator();
                updateBackToTop();
            });
            
            // Reset filters when clicking search
            searchInput.addEventListener('focus', function() {
                document.querySelectorAll('.alphabet-letter').forEach(btn => {
                    btn.classList.remove('active');
                });
            });
        });

        // Keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            // Ctrl/Cmd + K for search focus
            if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                e.preventDefault();
                document.getElementById('searchInput').focus();
            }
            
            // Escape to clear search
            if (e.key === 'Escape') {
                const searchInput = document.getElementById('searchInput');
                searchInput.value = '';
                renderDictionary();
                searchInput.blur();
            }
        });
    </script>
</body>
</html>