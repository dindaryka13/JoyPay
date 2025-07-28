<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Arisan Barokah</title>
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
            padding: 20px;
        }

        .auth-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 1000px;
            width: 100%;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            position: relative;
        }

        .auth-sidebar {
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .auth-sidebar::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .sidebar-content {
            position: relative;
            z-index: 2;
        }

        .logo {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .sidebar-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .sidebar-features {
            list-style: none;
            text-align: left;
        }

        .sidebar-features li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-features i {
            color: rgba(255,255,255,0.8);
            width: 20px;
        }

        .auth-form-container {
            padding: 40px;
            position: relative;
            max-height: 100vh;
            overflow-y: auto;
        }

        .form-title {
            font-size: 2rem;
            color: #333;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .form-subtitle {
            color: #666;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .form-label.required::after {
            content: '*';
            color: #e74c3c;
            margin-left: 4px;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .form-input:focus {
            outline: none;
            border-color: #6B9B76;
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(107, 155, 118, 0.2);
        }

        .file-input-container {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }

        .file-input {
            position: absolute;
            left: -9999px;
        }

        .file-input-label {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            border: 2px dashed #6B9B76;
            border-radius: 12px;
            background: #f8f9fa;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            justify-content: center;
            font-size: 0.9rem;
        }

        .file-input-label:hover {
            background: rgba(107, 155, 118, 0.1);
            border-color: #7BA05B;
        }

        .file-input-label i {
            color: #6B9B76;
            font-size: 1.1rem;
        }

        .file-preview {
            margin-top: 10px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .preview-item {
            position: relative;
            width: 70px;
            height: 70px;
            border-radius: 8px;
            overflow: hidden;
            border: 2px solid #e9ecef;
        }

        .preview-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .remove-preview {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #e74c3c;
            color: white;
            border: none;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            cursor: pointer;
            font-size: 0.6rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-checkbox {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 25px;
        }

        .checkbox-input {
            width: 18px;
            height: 18px;
            accent-color: #6B9B76;
            margin-top: 2px;
        }

        .checkbox-label {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.5;
        }

        .checkbox-label a {
            color: #6B9B76;
            text-decoration: none;
        }

        .checkbox-label a:hover {
            text-decoration: underline;
        }

        .auth-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #6B9B76, #7BA05B);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .auth-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(107, 155, 118, 0.4);
        }

        .auth-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(107, 155, 118, 0.1);
            border: none;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6B9B76;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: rgba(107, 155, 118, 0.2);
            transform: scale(1.1);
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }

        .login-link a {
            color: #6B9B76;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Success Message */
        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
            display: none;
        }

        .error-message {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
            display: none;
        }

        /* Password Strength Indicator */
        .password-strength {
            margin-top: 10px;
        }

        .strength-bars {
            display: flex;
            gap: 3px;
            margin-bottom: 5px;
        }

        .strength-bar {
            height: 4px;
            flex: 1;
            background-color: #e9ecef;
            border-radius: 2px;
            transition: background-color 0.3s ease;
        }

        .strength-text {
            font-size: 0.8rem;
            color: #666;
            font-weight: 500;
        }

        /* Input validation styles */
        .form-input.error {
            border-color: #e74c3c;
            background-color: #fdf2f2;
        }

        .input-error {
            color: #e74c3c;
            font-size: 0.8rem;
            margin-top: 5px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .input-error::before {
            content: '⚠';
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .auth-container {
                grid-template-columns: 1fr;
                max-width: 500px;
            }

            .auth-sidebar {
                padding: 30px 20px;
            }

            .auth-form-container {
                padding: 30px 20px;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .logo {
                font-size: 2rem;
            }

            .form-title {
                font-size: 1.5rem;
            }

            .preview-item {
                width: 60px;
                height: 60px;
            }
        }

        /* Focus indicators */
        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(107, 155, 118, 0.1);
        }

        .checkbox-input:focus {
            outline: 2px solid #6B9B76;
            outline-offset: 2px;
            border-radius: 2px;
        }

        /* Enhanced file upload styles */
        .file-input-label.has-file {
            border-color: #6B9B76;
            background-color: rgba(107, 155, 118, 0.1);
            color: #6B9B76;
        }

        .file-input-label.has-file i {
            color: #6B9B76;
        }

        /* Mobile optimizations */
        @media (max-width: 480px) {
            .auth-container {
                margin: 10px;
                border-radius: 15px;
            }

            .form-input {
                padding: 12px 15px;
                font-size: 16px; /* Prevents zoom on iOS */
            }

            .file-input-label {
                padding: 10px 12px;
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <button class="back-btn" onclick="window.history.back()">
            <i class="fas fa-arrow-left"></i>
        </button>

        <div class="auth-sidebar">
            <div class="sidebar-content">
                <h1 class="logo">Arisan Barokah</h1>
                <p class="sidebar-subtitle">Platform arisan digital terpercaya sejak 2020</p>
                <ul class="sidebar-features">
                    <li>
                        <i class="fas fa-shield-alt"></i>
                        <span>Keamanan terjamin</span>
                    </li>
                    <li>
                        <i class="fas fa-users"></i>
                        <span>Komunitas terpercaya</span>
                    </li>
                    <li>
                        <i class="fas fa-mobile-alt"></i>
                        <span>Mudah digunakan</span>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <span>Otomatis & praktis</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="auth-form-container">
            <div class="success-message" id="successMessage"></div>
            <div class="error-message" id="errorMessage"></div>

            <!-- Register Form -->
            <form class="auth-form" id="registerForm">
                <h2 class="form-title">Daftar Akun</h2>
                <p class="form-subtitle">Bergabunglah dengan komunitas Arisan Barokah</p>

                <div class="form-group">
                    <label class="form-label required">Username</label>
                    <input type="text" class="form-input" placeholder="Pilih username unik" required>
                </div>

                <div class="form-group">
                    <label class="form-label required">Email</label>
                    <input type="email" class="form-input" placeholder="alamat@email.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label required">Password</label>
                    <input type="password" class="form-input" placeholder="Minimal 8 karakter" required>
                </div>

                <div class="form-group">
                    <label class="form-label required">Alamat Lengkap</label>
                    <textarea class="form-input" rows="3" placeholder="Masukkan alamat lengkap Anda" required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label required">No. Telepon</label>
                        <input type="tel" class="form-input" placeholder="08xxxxxxxxx" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">No. Telepon Darurat</label>
                        <input type="tel" class="form-input" placeholder="08xxxxxxxxx">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Media Sosial (Instagram/X)</label>
                    <input type="text" class="form-input" placeholder="@username atau link profil">
                </div>

                <div class="form-group">
                    <label class="form-label required">Nomor Rekening</label>
                    <input type="text" class="form-input" placeholder="1234567890" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label required">Foto KTP</label>
                        <div class="file-input-container">
                            <input type="file" class="file-input" id="ktpFile" accept="image/*" required>
                            <label for="ktpFile" class="file-input-label">
                                <i class="fas fa-camera"></i>
                                <span>Upload Foto KTP</span>
                            </label>
                        </div>
                        <div class="file-preview" id="ktpPreview"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label required">Foto KK</label>
                        <div class="file-input-container">
                            <input type="file" class="file-input" id="kkFile" accept="image/*" required>
                            <label for="kkFile" class="file-input-label">
                                <i class="fas fa-camera"></i>
                                <span>Upload Foto KK</span>
                            </label>
                        </div>
                        <div class="file-preview" id="kkPreview"></div>
                    </div>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" class="checkbox-input" id="agreeTerms" required>
                    <label for="agreeTerms" class="checkbox-label">
                        Saya setuju dengan <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a>
                    </label>
                </div>

                <button type="submit" class="auth-btn">
                    <span class="btn-text">Daftar Sekarang</span>
                    <span class="loading" style="display: none;"></span>
                </button>

                <div class="login-link">
                    <p>Sudah punya akun? <a href="login.html">Masuk sekarang</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        // File Upload Functions
        function handleFileUpload(inputId, previewId) {
            const input = document.getElementById(inputId);
            const preview = document.getElementById(previewId);
            
            input.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    // Validate file type
                    if (!file.type.startsWith('image/')) {
                        showError('Harap pilih file gambar yang valid');
                        return;
                    }
                    
                    // Validate file size (max 5MB)
                    if (file.size > 5 * 1024 * 1024) {
                        showError('Ukuran file tidak boleh lebih dari 5MB');
                        return;
                    }
                    
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.innerHTML = `
                            <div class="preview-item">
                                <img src="${e.target.result}" alt="Preview" class="preview-image">
                                <button type="button" class="remove-preview" onclick="removePreview('${inputId}', '${previewId}')">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        `;
                        
                        // Update label style
                        const label = input.nextElementSibling;
                        label.classList.add('has-file');
                        label.innerHTML = '<i class="fas fa-check"></i><span>File berhasil dipilih</span>';
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        function removePreview(inputId, previewId) {
            document.getElementById(inputId).value = '';
            document.getElementById(previewId).innerHTML = '';
            
            // Reset label style
            const input = document.getElementById(inputId);
            const label = input.nextElementSibling;
            label.classList.remove('has-file');
            
            if (inputId === 'ktpFile') {
                label.innerHTML = '<i class="fas fa-camera"></i><span>Upload Foto KTP</span>';
            } else {
                label.innerHTML = '<i class="fas fa-camera"></i><span>Upload Foto KK</span>';
            }
        }

        // Message Functions
        function showSuccess(message) {
            const successEl = document.getElementById('successMessage');
            successEl.textContent = message;
            successEl.style.display = 'block';
            setTimeout(() => {
                successEl.style.display = 'none';
            }, 5000);
        }

        function showError(message) {
            const errorEl = document.getElementById('errorMessage');
            errorEl.textContent = message;
            errorEl.style.display = 'block';
            setTimeout(() => {
                errorEl.style.display = 'none';
            }, 5000);
        }

        // Form Submission
        function handleFormSubmit() {
            const form = document.getElementById('registerForm');
            const submitBtn = form.querySelector('.auth-btn');
            
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validate all inputs
                const inputs = form.querySelectorAll('.form-input[required], .file-input[required], .checkbox-input[required]');
                let isValid = true;
                
                inputs.forEach(input => {
                    if (input.type === 'checkbox') {
                        if (!input.checked) {
                            isValid = false;
                            showError('Harap setujui syarat dan ketentuan');
                        }
                    } else if (input.type === 'file') {
                        if (!input.files.length) {
                            isValid = false;
                            showError('Harap upload semua dokumen yang diperlukan');
                        }
                    } else if (!input.value.trim()) {
                        isValid = false;
                        showError('Harap isi semua field yang wajib');
                        return;
                    }
                });
                
                if (!isValid) return;
                
                // Show loading
                submitBtn.disabled = true;
                submitBtn.querySelector('.btn-text').style.display = 'none';
                submitBtn.querySelector('.loading').style.display = 'inline-block';
                
                // Simulate API call
                setTimeout(() => {
                    // Hide loading
                    submitBtn.disabled = false;
                    submitBtn.querySelector('.btn-text').style.display = 'inline';
                    submitBtn.querySelector('.loading').style.display = 'none';
                    
                    showSuccess('Pendaftaran berhasil! Silakan cek email untuk verifikasi.');
                    setTimeout(() => {
                        window.location.href = 'login.html';
                    }, 3000);
                }, 2000);
            });
        }

        // Password Strength Indicator
        function addPasswordStrengthIndicator() {
            const passwordInput = document.querySelector('input[type="password"]');
            if (passwordInput) {
                const strengthIndicator = document.createElement('div');
                strengthIndicator.className = 'password-strength';
                strengthIndicator.innerHTML = `
                    <div class="strength-bars">
                        <div class="strength-bar"></div>
                        <div class="strength-bar"></div>
                        <div class="strength-bar"></div>
                        <div class="strength-bar"></div>
                    </div>
                    <span class="strength-text">Kekuatan password</span>
                `;
                passwordInput.parentNode.appendChild(strengthIndicator);
                
                passwordInput.addEventListener('input', function(e) {
                    const password = e.target.value;
                    const strength = calculatePasswordStrength(password);
                    updatePasswordStrength(strengthIndicator, strength);
                });
            }
        }

        function calculatePasswordStrength(password) {
            let strength = 0;
            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password)) strength++;
            if (/[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^A-Za-z0-9]/.test(password)) strength++;
            return Math.min(strength, 4);
        }

        function updatePasswordStrength(indicator, strength) {
            const bars = indicator.querySelectorAll('.strength-bar');
            const text = indicator.querySelector('.strength-text');
            const labels = ['Sangat Lemah', 'Lemah', 'Sedang', 'Kuat', 'Sangat Kuat'];
            const colors = ['#e74c3c', '#f39c12', '#f1c40f', '#27ae60', '#2ecc71'];
            
            bars.forEach((bar, index) => {
                if (index < strength) {
                    bar.style.backgroundColor = colors[strength - 1];
                } else {
                    bar.style.backgroundColor = '#e9ecef';
                }
            });
            
            text.textContent = strength > 0 ? labels[strength - 1] : 'Kekuatan password';
            text.style.color = strength > 0 ? colors[strength - 1] : '#666';
        }

        // Input Validation
        function addInputValidation() {
            const inputs = document.querySelectorAll('.form-input');
            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    validateInput(this);
                });
                
                input.addEventListener('input', function() {
                    if (this.classList.contains('error')) {
                        validateInput(this);
                    }
                });
            });
        }

        function validateInput(input) {
            const value = input.value.trim();
            let isValid = true;
            let errorMessage = '';
            
            // Required field validation
            if (input.hasAttribute('required') && !value) {
                isValid = false;
                errorMessage = 'Field ini wajib diisi';
            }
            
            // Email validation
            if (input.type === 'email' && value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    isValid = false;
                    errorMessage = 'Format email tidak valid';
                }
            }
            
            // Phone validation
            if (input.type === 'tel' && value) {
                const phoneRegex = /^08\d{8,11}$/;
                if (!phoneRegex.test(value)) {
                    isValid = false;
                    errorMessage = 'Format nomor telepon tidak valid (contoh: 08123456789)';
                }
            }
            
            // Password validation
            if (input.type === 'password' && value) {
                if (value.length < 8) {
                    isValid = false;
                    errorMessage = 'Password minimal 8 karakter';
                }
            }
            
            // Username validation
            if (input.type === 'text' && input.placeholder.includes('username') && value) {
                const usernameRegex = /^[a-zA-Z0-9_]{3,20}$/;
                if (!usernameRegex.test(value)) {
                    isValid = false;
                    errorMessage = 'Username hanya boleh mengandung huruf, angka, dan underscore (3-20 karakter)';
                }
            }
            
            // Show/hide error
            let errorEl = input.parentNode.querySelector('.input-error');
            if (!isValid) {
                input.classList.add('error');
                if (!errorEl) {
                    errorEl = document.createElement('div');
                    errorEl.className = 'input-error';
                    input.parentNode.appendChild(errorEl);
                }
                errorEl.textContent = errorMessage;
            } else {
                input.classList.remove('error');
                if (errorEl) {
                    errorEl.remove();
                }
            }
            
            return isValid;
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            // Setup file uploads
            handleFileUpload('ktpFile', 'ktpPreview');
            handleFileUpload('kkFile', 'kkPreview');
            
            // Setup form submission
            handleFormSubmit();
            
            // Add password strength indicator
            addPasswordStrengthIndicator();
            
            // Add input validation
            addInputValidation();
            
            // Auto-focus first input
            document.querySelector('.form-input').focus();
        });

        // Keyboard Navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && e.target.classList.contains('form-input')) {
                const form = e.target.closest('form');
                const inputs = form.querySelectorAll('.form-input:not([disabled])');
                const currentIndex = Array.from(inputs).indexOf(e.target);
                const nextInput = inputs[currentIndex + 1];
                
                if (nextInput) {
                    e.preventDefault();
                    nextInput.focus();
                }
            }
        });

        // Prevent form submission on Enter for file inputs
        document.querySelectorAll('.file-input').forEach(input => {
            input.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>