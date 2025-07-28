<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kloter Aktif - Arisan Barokah Platform Digital</title>
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
            background: #f8f9fa;
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
            background: url('https://images.unsplash.com/photo-1559526324-4b87b5e36e44?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
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

        /* Main Content */
        .main-content {
            padding: 60px 0;
        }

        /* Kloter Grid */
        .kloter-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .kloter-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
            position: relative;
            overflow: hidden;
        }

        .kloter-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .kloter-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .kloter-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }

        .kloter-status {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .status-active {
            background: rgba(40, 167, 69, 0.1);
            color: #28a745;
            border: 1px solid rgba(40, 167, 69, 0.3);
        }

        .status-waiting {
            background: rgba(255, 193, 7, 0.1);
            color: #ffc107;
            border: 1px solid rgba(255, 193, 7, 0.3);
        }

        .status-full {
            background: rgba(220, 53, 69, 0.1);
            color: #dc3545;
            border: 1px solid rgba(220, 53, 69, 0.3);
        }

        .kloter-amount {
            font-size: 2rem;
            font-weight: 700;
            color: #6B9B76;
            margin-bottom: 15px;
        }

        .kloter-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 20px;
        }

        .detail-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .detail-label {
            font-size: 0.85rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .detail-value {
            font-weight: 600;
            color: #333;
        }

        .progress-section {
            margin-bottom: 25px;
        }

        .progress-label {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e9ecef;
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #6B9B76, #7BA05B);
            border-radius: 10px;
            transition: width 0.3s ease;
        }

        .kloter-actions {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 0.9rem;
            flex: 1;
        }

        .btn-primary {
            background: linear-gradient(45deg, #6B9B76, #7BA05B);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(107, 155, 118, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: #6B9B76;
            border: 2px solid #6B9B76;
        }

        .btn-secondary:hover {
            background: #6B9B76;
            color: white;
        }

        .btn-disabled {
            background: #e9ecef;
            color: #6c757d;
            cursor: not-allowed;
        }

        .btn-disabled:hover {
            transform: none;
            box-shadow: none;
        }

        /* Popular Badge */
        .popular-badge {
            position: absolute;
            top: -10px;
            right: 20px;
            background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5);
            backdrop-filter: blur(5px);
            animation: fadeIn 0.3s ease;
        }

        .modal.show {
            display: block;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 2% auto;
            padding: 0;
            border: none;
            border-radius: 20px;
            width: 90%;
            max-width: 900px;
            max-height: 95vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            animation: slideInUp 0.3s ease;
        }

        .modal-header {
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            padding: 30px;
            border-radius: 20px 20px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0;
        }

        .close {
            color: white;
            font-size: 2rem;
            font-weight: bold;
            cursor: pointer;
            background: none;
            border: none;
            padding: 0;
            line-height: 1;
            transition: all 0.3s ease;
        }

        .close:hover {
            transform: scale(1.1);
            opacity: 0.8;
        }

        .modal-body {
            padding: 40px;
        }

        /* Detail Form Styles */
        .detail-form {
            display: grid;
            gap: 30px;
        }

        .form-section {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            border-left: 5px solid #6B9B76;
        }

        .section-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-label {
            font-weight: 600;
            color: #555;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-value {
            font-size: 1.1rem;
            color: #333;
            padding: 12px 15px;
            background: white;
            border-radius: 8px;
            border: 2px solid #e9ecef;
        }

        .form-value.highlight {
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            font-weight: 700;
            font-size: 1.3rem;
        }

        /* Member List Table */
        .member-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .member-table th {
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }

        .member-table td {
            padding: 15px;
            border-bottom: 1px solid #e9ecef;
            vertical-align: middle;
        }

        .member-table tbody tr:hover {
            background: rgba(107, 155, 118, 0.05);
        }

        .member-table tbody tr:last-child td {
            border-bottom: none;
        }

        .member-number {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin-right: 10px;
        }

        .member-status {
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
            text-transform: uppercase;
        }

        .member-status.paid {
            background: rgba(40, 167, 69, 0.1);
            color: #28a745;
            border: 1px solid rgba(40, 167, 69, 0.3);
        }

        .member-status.pending {
            background: rgba(255, 193, 7, 0.1);
            color: #ffc107;
            border: 1px solid rgba(255, 193, 7, 0.3);
        }

        .member-status.winner {
            background: rgba(255, 107, 107, 0.1);
            color: #ff6b6b;
            border: 1px solid rgba(255, 107, 107, 0.3);
        }

        /* Progress Ring */
        .progress-ring {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .ring-container {
            position: relative;
            width: 120px;
            height: 120px;
        }

        .ring-progress {
            width: 120px;
            height: 120px;
            transform: rotate(-90deg);
        }

        .ring-progress circle {
            fill: none;
            stroke-width: 8;
            stroke-linecap: round;
        }

        .ring-background {
            stroke: #e9ecef;
        }

        .ring-fill {
            stroke: url(#gradient);
            stroke-dasharray: 283;
            stroke-dashoffset: 113;
            transition: stroke-dashoffset 0.8s ease;
        }

        .ring-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .ring-percentage {
            font-size: 1.5rem;
            font-weight: 700;
            color: #6B9B76;
        }

        .ring-label {
            font-size: 0.8rem;
            color: #666;
            margin-top: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .progress-info {
            flex: 1;
        }

        .progress-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .stat-item {
            text-align: center;
            padding: 15px;
            background: rgba(107, 155, 118, 0.05);
            border-radius: 10px;
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: #6B9B76;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.85rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .modal-content {
                width: 95%;
                margin: 5% auto;
            }

            .modal-header {
                padding: 20px;
            }

            .modal-title {
                font-size: 1.4rem;
            }

            .modal-body {
                padding: 20px;
            }

            .member-table {
                font-size: 0.9rem;
            }

            .member-table th,
            .member-table td {
                padding: 10px;
            }

            .ring-container {
                width: 80px;
                height: 80px;
            }

            .ring-progress {
                width: 80px;
                height: 80px;
            }

            .ring-percentage {
                font-size: 1.2rem;
            }

            .progress-ring {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .page-title {
                font-size: 2.2rem;
            }

            .kloter-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <section class="page-header">
        <div class="container">
            <div class="page-header-content">
                <h1 class="page-title">Kloter Aktif</h1>
                <p class="page-subtitle">
                    Temukan dan bergabung dengan kloter arisan yang sesuai dengan kebutuhan dan kemampuan finansial Anda
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-content">
        <div class="container">
            <!-- Kloter Grid -->
            <div class="kloter-grid">
                <!-- Kloter Card 1 -->
                <div class="kloter-card">
                    <div class="popular-badge">Popular</div>
                    <div class="kloter-header">
                        <div>
                            <h3 class="kloter-title">Arisan Barokah Premium</h3>
                            <p style="color: #666; font-size: 0.9rem;">Managed by Farah Proping Dewi</p>
                        </div>
                        <span class="kloter-status status-active">Aktif</span>
                    </div>

                    <div class="kloter-amount">Rp 5.000.000</div>

                    <div class="kloter-details">
                        <div class="detail-item">
                            <span class="detail-label">Durasi</span>
                            <span class="detail-value">12 Bulan</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Anggota</span>
                            <span class="detail-value">12/12</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Dimulai</span>
                            <span class="detail-value">15 Jan 2025</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Undian</span>
                            <span class="detail-value">Setiap Bulan</span>
                        </div>
                    </div>

                    <div class="progress-section">
                        <div class="progress-label">
                            <span>Progress Kloter</span>
                            <span>8/12 Undian</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 67%;"></div>
                        </div>
                    </div>

                    <div class="kloter-actions">
                        <button class="btn btn-secondary detail-btn" data-kloter="premium">
                            <i class="fas fa-eye"></i>
                            Detail
                        </button>
                        <button class="btn btn-disabled">
                            <i class="fas fa-lock"></i>
                            Penuh
                        </button>
                    </div>
                </div>

                <!-- Kloter Card 2 -->
                <div class="kloter-card">
                    <div class="kloter-header">
                        <div>
                            <h3 class="kloter-title">Arisan Keluarga Harmonis</h3>
                            <p style="color: #666; font-size: 0.9rem;">Managed by Farah Proping Dewi</p>
                        </div>
                        <span class="kloter-status status-waiting">Menunggu</span>
                    </div>

                    <div class="kloter-amount">Rp 2.500.000</div>

                    <div class="kloter-details">
                        <div class="detail-item">
                            <span class="detail-label">Durasi</span>
                            <span class="detail-value">10 Bulan</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Anggota</span>
                            <span class="detail-value">7/10</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Dimulai</span>
                            <span class="detail-value">1 Feb 2025</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Undian</span>
                            <span class="detail-value">Setiap Bulan</span>
                        </div>
                    </div>

                    <div class="progress-section">
                        <div class="progress-label">
                            <span>Anggota Terdaftar</span>
                            <span>7/10</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 70%;"></div>
                        </div>
                    </div>

                    <div class="kloter-actions">
                        <button class="btn btn-secondary detail-btn" data-kloter="harmonis">
                            <i class="fas fa-eye"></i>
                            Detail
                        </button>
                        <button class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            Gabung
                        </button>
                    </div>
                </div>

                <!-- Kloter Card 3 -->
                <div class="kloter-card">
                    <div class="kloter-header">
                        <div>
                            <h3 class="kloter-title">Arisan Usaha Mandiri</h3>
                            <p style="color: #666; font-size: 0.9rem;">Managed by Farah Proping Dewi</p>
                        </div>
                        <span class="kloter-status status-active">Aktif</span>
                    </div>

                    <div class="kloter-amount">Rp 1.000.000</div>

                    <div class="kloter-details">
                        <div class="detail-item">
                            <span class="detail-label">Durasi</span>
                            <span class="detail-value">8 Bulan</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Anggota</span>
                            <span class="detail-value">8/8</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Dimulai</span>
                            <span class="detail-value">10 Jan 2025</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Undian</span>
                            <span class="detail-value">Setiap Bulan</span>
                        </div>
                    </div>

                    <div class="progress-section">
                        <div class="progress-label">
                            <span>Progress Kloter</span>
                            <span>3/8 Undian</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 37.5%;"></div>
                        </div>
                    </div>

                    <div class="kloter-actions">
                        <button class="btn btn-secondary detail-btn" data-kloter="mandiri">
                            <i class="fas fa-eye"></i>
                            Detail
                        </button>
                        <button class="btn btn-disabled">
                            <i class="fas fa-lock"></i>
                            Penuh
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detail Modal -->
    <div id="detailModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modalTitle">Detail Kloter Arisan</h2>
                <button class="close" id="closeModal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="detail-form">
                    <!-- Basic Information -->
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-info-circle"></i>
                            Informasi Dasar
                        </h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Nama Kloter</label>
                                <div class="form-value" id="kloterName">Arisan Barokah Premium</div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Manager</label>
                                <div class="form-value" id="kloterManager">Farah Proping Dewi</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Nominal Arisan</label>
                                <div class="form-value highlight" id="kloterAmount">Rp 5.000.000</div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <div class="form-value" id="kloterStatus">Aktif</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Durasi</label>
                                <div class="form-value" id="kloterDuration">12 Bulan</div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Tanggal Mulai</label>
                                <div class="form-value" id="kloterStartDate">15 Januari 2025</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Jadwal Undian</label>
                                <div class="form-value" id="kloterSchedule">Setiap tanggal 15</div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Undian Berikutnya</label>
                                <div class="form-value" id="nextDraw">15 Februari 2025</div>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Section -->
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-chart-line"></i>
                            Progress Kloter
                        </h3>
                        <div class="progress-ring">
                            <div class="ring-container">
                                <svg class="ring-progress">
                                    <defs>
                                        <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                            <stop offset="0%" style="stop-color:#6B9B76;stop-opacity:1" />
                                            <stop offset="100%" style="stop-color:#7BA05B;stop-opacity:1" />
                                        </linearGradient>
                                    </defs>
                                    <circle class="ring-background" cx="60" cy="60" r="45"></circle>
                                    <circle class="ring-fill" cx="60" cy="60" r="45" id="progressRing"></circle>
                                </svg>
                                <div class="ring-text">
                                    <div class="ring-percentage" id="progressPercentage">67%</div>
                                    <div class="ring-label">Selesai</div>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress-stats">
                                    <div class="stat-item">
                                        <div class="stat-number" id="completedDraws">8</div>
                                        <div class="stat-label">Undian Selesai</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number" id="remainingDraws">4</div>
                                        <div class="stat-label">Sisa Undian</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number" id="totalMembers">12</div>
                                        <div class="stat-label">Total Anggota</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number" id="monthsRemaining">4</div>
                                        <div class="stat-label">Bulan Tersisa</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Member List -->
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-users"></i>
                            Daftar Anggota & Status Undian
                        </h3>
                        <table class="member-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Anggota</th>
                                    <th>Nominal</th>
                                    <th>Status Undian</th>
                                    <th>Tanggal Undian</th>
                                </tr>
                            </thead>
                            <tbody id="memberTableBody">
                                <tr>
                                    <td>
                                        <div class="member-number">1</div>
                                    </td>
                                    <td>Farah Proping Dewi</td>
                                    <td>Rp 5.000.000</td>
                                    <td><span class="member-status winner">Pemenang</span></td>
                                    <td>15 Jan 2025</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="member-number">2</div>
                                    </td>
                                    <td>Ahmad Sudirman</td>
                                    <td>Rp 5.000.000</td>
                                    <td><span class="member-status winner">Pemenang</span></td>
                                    <td>15 Feb 2025</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="member-number">3</div>
                                    </td>
                                    <td>Siti Nurhaliza</td>
                                    <td>Rp 5.000.000</td>
                                    <td><span class="member-status winner">Pemenang</span></td>
                                    <td>15 Mar 2025</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="member-number">4</div>
                                    </td>
                                    <td>Budi Santoso</td>
                                    <td>Rp 5.000.000</td>
                                    <td><span class="member-status winner">Pemenang</span></td>
                                    <td>15 Apr 2025</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="member-number">5</div>
                                    </td>
                                    <td>Dewi Sartika</td>
                                    <td>Rp 5.000.000</td>
                                    <td><span class="member-status winner">Pemenang</span></td>
                                    <td>15 Mei 2025</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="member-number">6</div>
                                    </td>
                                    <td>Andi Wijaya</td>
                                    <td>Rp 5.000.000</td>
                                    <td><span class="member-status winner">Pemenang</span></td>
                                    <td>15 Jun 2025</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="member-number">7</div>
                                    </td>
                                    <td>Maya Sari</td>
                                    <td>Rp 5.000.000</td>
                                    <td><span class="member-status winner">Pemenang</span></td>
                                    <td>15 Jul 2025</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="member-number">8</div>
                                    </td>
                                    <td>Rizki Pratama</td>
                                    <td>Rp 5.000.000</td>
                                    <td><span class="member-status winner">Pemenang</span></td>
                                    <td>15 Agu 2025</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="member-number">9</div>
                                    </td>
                                    <td>Linda Kusuma</td>
                                    <td>Rp 5.000.000</td>
                                    <td><span class="member-status pending">Menunggu</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="member-number">10</div>
                                    </td>
                                    <td>Hendra Gunawan</td>
                                    <td>Rp 5.000.000</td>
                                    <td><span class="member-status pending">Menunggu</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="member-number">11</div>
                                    </td>
                                    <td>Sri Wahyuni</td>
                                    <td>Rp 5.000.000</td>
                                    <td><span class="member-status pending">Menunggu</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="member-number">12</div>
                                    </td>
                                    <td>Agus Setiawan</td>
                                    <td>Rp 5.000.000</td>
                                    <td><span class="member-status pending">Menunggu</span></td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Payment Schedule -->
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-calendar-check"></i>
                            Jadwal Pembayaran
                        </h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Pembayaran Bulanan</label>
                                <div class="form-value highlight">Rp 416.667</div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Tanggal Pembayaran</label>
                                <div class="form-value">Setiap tanggal 10</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Pembayaran Berikutnya</label>
                                <div class="form-value" style="color: #dc3545; font-weight: 600;">10 Februari 2025</div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Status Pembayaran</label>
                                <div class="form-value" style="color: #28a745; font-weight: 600;">Lunas Bulan Ini</div>
                            </div>
                        </div>
                    </div>

                    <!-- Rules & Terms -->
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-file-contract"></i>
                            Aturan & Ketentuan
                        </h3>
                        <div style="background: white; padding: 20px; border-radius: 10px; border: 1px solid #e9ecef;">
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0; display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="fas fa-check-circle" style="color: #28a745; margin-top: 2px;"></i>
                                    <span>Pembayaran iuran dilakukan setiap tanggal 10 setiap bulan</span>
                                </li>
                                <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0; display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="fas fa-check-circle" style="color: #28a745; margin-top: 2px;"></i>
                                    <span>Undian dilakukan setiap tanggal 15 setiap bulan</span>
                                </li>
                                <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0; display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="fas fa-check-circle" style="color: #28a745; margin-top: 2px;"></i>
                                    <span>Anggota yang telah mendapat giliran tidak dapat undian lagi</span>
                                </li>
                                <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0; display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="fas fa-check-circle" style="color: #28a745; margin-top: 2px;"></i>
                                    <span>Keterlambatan pembayaran dikenakan denda 2% per bulan</span>
                                </li>
                                <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0; display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="fas fa-check-circle" style="color: #28a745; margin-top: 2px;"></i>
                                    <span>Undian dilakukan secara transparan dengan live streaming</span>
                                </li>
                                <li style="padding: 8px 0; display: flex; align-items: flex-start; gap: 10px;">
                                    <i class="fas fa-check-circle" style="color: #28a745; margin-top: 2px;"></i>
                                    <span>Semua anggota wajib mengikuti grup WhatsApp untuk koordinasi</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Modal functionality
        const modal = document.getElementById('detailModal');
        const detailBtns = document.querySelectorAll('.detail-btn');
        const closeModal = document.getElementById('closeModal');

        // Sample data for different kloters
        const kloterData = {
            premium: {
                name: 'Arisan Barokah Premium',
                manager: 'Farah Proping Dewi',
                amount: 'Rp 5.000.000',
                status: 'Aktif',
                duration: '12 Bulan',
                startDate: '15 Januari 2025',
                schedule: 'Setiap tanggal 15',
                nextDraw: '15 Februari 2025',
                progressPercentage: 67,
                completedDraws: 8,
                remainingDraws: 4,
                totalMembers: 12,
                monthsRemaining: 4,
                monthlyPayment: 'Rp 416.667',
                paymentDate: 'Setiap tanggal 10',
                nextPayment: '10 Februari 2025',
                paymentStatus: 'Lunas Bulan Ini'
            },
            harmonis: {
                name: 'Arisan Keluarga Harmonis',
                manager: 'Farah Proping Dewi',
                amount: 'Rp 2.500.000',
                status: 'Menunggu Anggota',
                duration: '10 Bulan',
                startDate: '1 Februari 2025',
                schedule: 'Setiap tanggal 1',
                nextDraw: 'Belum Dimulai',
                progressPercentage: 70,
                completedDraws: 0,
                remainingDraws: 10,
                totalMembers: 7,
                monthsRemaining: 10,
                monthlyPayment: 'Rp 250.000',
                paymentDate: 'Setiap tanggal 25',
                nextPayment: '25 Februari 2025',
                paymentStatus: 'Belum Dimulai'
            },
            mandiri: {
                name: 'Arisan Usaha Mandiri',
                manager: 'Farah Proping Dewi',
                amount: 'Rp 1.000.000',
                status: 'Aktif',
                duration: '8 Bulan',
                startDate: '10 Januari 2025',
                schedule: 'Setiap tanggal 10',
                nextDraw: '10 Februari 2025',
                progressPercentage: 37.5,
                completedDraws: 3,
                remainingDraws: 5,
                totalMembers: 8,
                monthsRemaining: 5,
                monthlyPayment: 'Rp 125.000',
                paymentDate: 'Setiap tanggal 5',
                nextPayment: '5 Februari 2025',
                paymentStatus: 'Lunas Bulan Ini'
            }
        };

        // Open modal
        detailBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const kloterType = this.getAttribute('data-kloter');
                const data = kloterData[kloterType];
                
                if (data) {
                    updateModalContent(data);
                    modal.classList.add('show');
                    document.body.style.overflow = 'hidden';
                    
                    // Animate progress ring
                    setTimeout(() => {
                        animateProgressRing(data.progressPercentage);
                    }, 300);
                }
            });
        });

        // Close modal
        closeModal.addEventListener('click', function() {
            modal.classList.remove('show');
            document.body.style.overflow = 'auto';
        });

        // Close modal when clicking outside
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.remove('show');
                document.body.style.overflow = 'auto';
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal.classList.contains('show')) {
                modal.classList.remove('show');
                document.body.style.overflow = 'auto';
            }
        });

        // Update modal content
        function updateModalContent(data) {
            document.getElementById('modalTitle').textContent = `Detail ${data.name}`;
            document.getElementById('kloterName').textContent = data.name;
            document.getElementById('kloterManager').textContent = data.manager;
            document.getElementById('kloterAmount').textContent = data.amount;
            document.getElementById('kloterStatus').textContent = data.status;
            document.getElementById('kloterDuration').textContent = data.duration;
            document.getElementById('kloterStartDate').textContent = data.startDate;
            document.getElementById('kloterSchedule').textContent = data.schedule;
            document.getElementById('nextDraw').textContent = data.nextDraw;
            document.getElementById('progressPercentage').textContent = data.progressPercentage + '%';
            document.getElementById('completedDraws').textContent = data.completedDraws;
            document.getElementById('remainingDraws').textContent = data.remainingDraws;
            document.getElementById('totalMembers').textContent = data.totalMembers;
            document.getElementById('monthsRemaining').textContent = data.monthsRemaining;
        }

        // Animate progress ring
        function animateProgressRing(percentage) {
            const ring = document.getElementById('progressRing');
            const circumference = 2 * Math.PI * 45;
            const offset = circumference - (percentage / 100) * circumference;
            
            ring.style.strokeDasharray = circumference;
            ring.style.strokeDashoffset = circumference;
            
            setTimeout(() => {
                ring.style.strokeDashoffset = offset;
            }, 100);
        }

        // Counter animation for modal stats
        function animateModalCounters() {
            const counters = document.querySelectorAll('.stat-number');
            
            counters.forEach(counter => {
                const target = parseInt(counter.textContent);
                let current = 0;
                const increment = target / 30;
                
                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        counter.textContent = Math.ceil(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };
                
                updateCounter();
            });
        }

        // Animate elements when modal opens
        const modalObserver = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                    if (modal.classList.contains('show')) {
                        setTimeout(animateModalCounters, 500);
                    }
                }
            });
        });

        modalObserver.observe(modal, { attributes: true });

        // Smooth scroll for long modal content
        document.querySelector('.modal-content').addEventListener('scroll', function() {
            const scrolled = this.scrollTop;
            const header = document.querySelector('.modal-header');
            
            if (scrolled > 20) {
                header.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
            } else {
                header.style.boxShadow = 'none';
            }
        });

        // Add ripple effect to buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                if (this.classList.contains('btn-disabled')) {
                    e.preventDefault();
                    return;
                }
                
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

        // Format currency numbers
        function formatCurrency(amount) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(amount);
        }

        // Initialize tooltips for status badges
        document.querySelectorAll('.member-status').forEach(status => {
            status.addEventListener('mouseenter', function() {
                const statusType = this.classList.contains('winner') ? 
                    'Anggota ini telah mendapat giliran arisan' : 
                    'Anggota ini belum mendapat giliran arisan';
                    
                this.setAttribute('title', statusType);
            });
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

        .btn {
            position: relative;
            overflow: hidden;
        }

        /* Enhanced modal animations */
        .modal.show .modal-content {
            animation: modalSlideIn 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-50px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Smooth scrollbar for modal */
        .modal-content::-webkit-scrollbar {
            width: 6px;
        }

        .modal-content::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        .modal-content::-webkit-scrollbar-thumb {
            background: #6B9B76;
            border-radius: 3px;
        }

        .modal-content::-webkit-scrollbar-thumb:hover {
            background: #7BA05B;
        }

        /* Loading animation for progress ring */
        .ring-fill {
            transition: stroke-dashoffset 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        /* Enhanced table hover effects */
        .member-table tbody tr {
            transition: all 0.3s ease;
        }

        .member-table tbody tr:hover {
            background: rgba(107, 155, 118, 0.08);
            transform: translateX(5px);
        }

        /* Status badge animations */
        .member-status {
            transition: all 0.3s ease;
        }

        .member-status:hover {
            transform: scale(1.05);
        }

        /* Form section animations */
        .form-section {
            transition: all 0.3s ease;
        }

        .form-section:hover {
            background: #f5f7f6;
        }

        /* Progressive disclosure for long content */
        .rules-expanded {
            max-height: 300px;
            overflow-y: auto;
        }
    </style>
</body>
</html>