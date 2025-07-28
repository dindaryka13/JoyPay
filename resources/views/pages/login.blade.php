<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Arisan Barokah</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .auth-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
            min-height: 600px;
            display: grid;
            grid-template-columns: 1fr 1fr;
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
            padding: 60px 40px;
            position: relative;
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
            margin-bottom: 25px;
            position: relative;
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
            padding: 15px 20px;
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

        .form-checkbox {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 25px;
        }

        .checkbox-input {
            width: 18px;
            height: 18px;
            accent-color: #6B9B76;
        }

        .checkbox-label {
            font-size: 0.9rem;
            color: #666;
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

        .divider {
            text-align: center;
            margin: 25px 0;
            position: relative;
            color: #666;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e9ecef;
            z-index: 1;
        }

        .divider span {
            background: white;
            padding: 0 15px;
            position: relative;
            z-index: 2;
        }

        .social-login {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }

        .social-btn {
            flex: 1;
            padding: 12px;
            border: 2px solid #e9ecef;
            background: white;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-weight: 600;
        }

        .social-btn:hover {
            border-color: #6B9B76;
            transform: translateY(-2px);
        }

        .forgot-password {
            text-align: center;
            margin-top: 15px;
        }

        .forgot-password a {
            color: #6B9B76;
            text-decoration: none;
            font-weight: 600;
        }

        .forgot-password a:hover {
            text-decoration: underline;
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

        .register-link {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }

        .register-link a {
            color: #6B9B76;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link a:hover {
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .auth-container {
                grid-template-columns: 1fr;
                max-width: 500px;
            }

            .auth-sidebar {
                padding: 40px 30px;
                text-align: center;
            }

            .auth-form-container {
                padding: 40px 30px;
            }

            .logo {
                font-size: 2rem;
            }

            .form-title {
                font-size: 1.5rem;
            }
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

        /* Focus indicators */
        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(107, 155, 118, 0.1);
        }

        .checkbox-input:focus {
            outline: 2px solid #6B9B76;
            outline-offset: 2px;
            border-radius: 2px;
        }

        /* Mobile optimizations */
        @media (max-width: 480px) {
            .auth-container {
                margin: 10px;
                border-radius: 15px;
            }

            .auth-form-container {
                padding: 30px 20px;
            }

            .auth-sidebar {
                padding: 30px 20px;
            }

            .form-input {
                padding: 12px 15px;
                font-size: 16px; /* Prevents zoom on iOS */
            }

            .social-login {
                flex-direction: column;
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

            <!-- Login Form -->
            <form class="auth-form" id="loginForm">
                <h2 class="form-title">Selamat Datang</h2>
                <p class="form-subtitle">Masuk ke akun Arisan Barokah Anda</p>

                <div class="form-group">
                    <label class="form-label required">Username</label>
                    <input type="text" class="form-input" placeholder="Masukkan username Anda" required>
                </div>

                <div class="form-group">
                    <label class="form-label required">Password</label>
                    <input type="password" class="form-input" placeholder="Masukkan password Anda" required>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" class="checkbox-input" id="rememberMe">
                    <label for="rememberMe" class="checkbox-label">Ingat saya</label>
                </div>

                <button type="submit" class="auth-btn">
                    <span class="btn-text">Masuk</span>
                    <span class="loading" style="display: none;"></span>
                </button>

                <div class="divider">
                    <span>atau</span>
                </div>

                <div class="forgot-password">
                    <a href="#">Lupa password?</a>
                </div>

                <div class="register-link">
                    <p>Belum punya akun? <a href="/register">Daftar sekarang</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
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
            const form = document.getElementById('loginForm');
            const submitBtn = form.querySelector('.auth-btn');
            
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validate inputs
                const username = form.querySelector('input[type="text"]').value.trim();
                const password = form.querySelector('input[type="password"]').value.trim();
                
                if (!username || !password) {
                    showError('Harap isi semua field yang wajib');
                    return;
                }
                
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
                    
                    showSuccess('Login berhasil! Mengarahkan ke dashboard...');
                    setTimeout(() => {
                        // Redirect to dashboard
                        window.location.href = '/home';
                    }, 2000);
                }, 2000);
            });
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
            
            // Password validation
            if (input.type === 'password' && value && value.length < 6) {
                isValid = false;
                errorMessage = 'Password minimal 6 karakter';
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
            // Setup form submission
            handleFormSubmit();
            
            // Add input validation
            addInputValidation();
            
            // Auto-focus first input
            document.querySelector('.form-input').focus();
        });

        // Social Login Functions
        document.querySelectorAll('.social-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const provider = this.textContent.trim();
                showError(`Login dengan ${provider} sedang dalam pengembangan`);
            });
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
                } else {
                    // Submit form if on last input
                    const submitBtn = form.querySelector('.auth-btn');
                    if (submitBtn && !submitBtn.disabled) {
                        submitBtn.click();
                    }
                }
            }
        });
    </script>
</body>
</html>