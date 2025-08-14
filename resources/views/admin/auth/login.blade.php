
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('admin/assets/img/favicon.png') }}">
    <title>ACD Corporate Services - Administration</title>
    
    <!-- Fonts and icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('admin/assets/css/material-dashboard.css?v=3.1.0') }}" rel="stylesheet" />
    
    <style>
        :root {
            --primary-color: #1a73e8;
            --primary-dark: #1557b0;
            --success-color: #34a853;
            --error-color: #ea4335;
            --text-primary: #202124;
            --text-secondary: #5f6368;
            --border-color: #dadce0;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }
        
        .login-header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            padding: 2rem;
            text-align: center;
            position: relative;
        }
        
        .login-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }
        
        .login-header h4 {
            color: white;
            font-weight: 600;
            margin: 0;
            position: relative;
            z-index: 1;
        }
        
        .login-body {
            padding: 2rem;
        }
        
        .form-floating {
            position: relative;
            margin-bottom: 1.5rem;
        }
        
        .form-floating input {
            width: 100%;
            height: 56px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            padding: 16px;
            font-size: 16px;
            background: #fff;
            transition: all 0.3s ease;
            color: var(--text-primary);
        }
        
        .form-floating input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.1);
        }
        
        .form-floating input::placeholder {
            color: #9ca3af;
            font-size: 16px;
            transition: opacity 0.3s ease;
        }
        
        .form-floating input:focus::placeholder {
            opacity: 0;
        }
        
        .btn-login {
            width: 100%;
            height: 48px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: 500;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(26, 115, 232, 0.3);
        }
        
        .btn-login:active {
            transform: translateY(0);
        }
        
        .btn-login:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }
        
        .error-message {
            color: var(--error-color);
            font-size: 14px;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .success-message {
            background: #e8f5e8;
            color: var(--success-color);
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            border-left: 4px solid var(--success-color);
        }
        
        .loading-spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        .company-logo {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 24px;
            color: white;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="company-logo">
                    <i class="material-icons-round">business</i>
                </div>
                <h4>ACD Corporate Services</h4>
                <p style="color: rgba(255,255,255,0.8); margin: 0.5rem 0 0 0; font-size: 14px;">Administration</p>
            </div>
            
            <div class="login-body">
                <!-- Messages Flash -->
                @if(session('success'))
                    <div class="success-message">
                        <i class="material-icons-round" style="font-size: 16px;">check_circle</i>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="post" id="loginForm">
                    @csrf
                    <div class="form-floating">
                        <input type="email" 
                               name="email" 
                               id="email" 
                               placeholder="Adresse email"
                               value="{{ old('email') }}"
                               required>
                        @error('email')
                            <div class="error-message">
                                <i class="material-icons-round" style="font-size: 16px;">error</i>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-floating">
                        <input type="password" 
                               name="password" 
                               id="password" 
                               placeholder="Mot de passe"
                               required>
                        @error('password')
                            <div class="error-message">
                                <i class="material-icons-round" style="font-size: 16px;">error</i>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn-login" id="submitBtn">
                        <span id="btnText">Se connecter</span>
                        <div class="loading-spinner" id="loadingSpinner"></div>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('loginForm');
            const submitBtn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            const loadingSpinner = document.getElementById('loadingSpinner');
            
            // Animation d'entrée
            setTimeout(() => {
                document.querySelector('.login-card').style.opacity = '1';
                document.querySelector('.login-card').style.transform = 'translateY(0)';
            }, 100);
            
            // Gestion du formulaire
            form.addEventListener('submit', function(e) {
                submitBtn.disabled = true;
                btnText.style.display = 'none';
                loadingSpinner.style.display = 'block';
                
                // Re-enable après 5 secondes en cas d'erreur
                setTimeout(() => {
                    if (submitBtn.disabled) {
                        submitBtn.disabled = false;
                        btnText.style.display = 'block';
                        loadingSpinner.style.display = 'none';
                    }
                }, 5000);
            });
        });
    </script>
</body>

</html>