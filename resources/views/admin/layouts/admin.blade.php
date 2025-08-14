
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('admin/assets/img/favicon.png') }}">
    <title>
        @yield('title') - ADMINISTRATION DU SITE CIA
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('admin/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('admin/assets/css/material-dashboard.css?v=3.1.0') }}" rel="stylesheet" />
    
    <style>
        .modern-admin-layout {
            margin: 0;
            padding: 0;
            background: #f8fafc;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        
        .main-content {
            margin-left: 280px;
            min-height: 100vh;
            transition: margin-left 0.3s ease;
        }
        
        .content-wrapper {
            padding: 0;
            min-height: calc(100vh - 80px);
        }
        
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }
        }
        
        /* Override default styles */
        .container-fluid {
            padding: 0;
        }
        
        /* Notification Styles */
        .notification-toast {
            background: #fff;
            border-left: 4px solid #22c55e;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            border-radius: 8px;
            padding: 16px 20px;
            margin-bottom: 12px;
            min-width: 300px;
            position: relative;
            animation: slideInRight 0.3s ease-out;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .notification-toast.success {
            border-left-color: #22c55e;
        }
        
        .notification-toast.error {
            border-left-color: #ef4444;
        }
        
        .notification-toast.warning {
            border-left-color: #f59e0b;
        }
        
        .notification-icon {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 14px;
        }
        
        .notification-icon.success {
            background: #22c55e;
        }
        
        .notification-icon.error {
            background: #ef4444;
        }
        
        .notification-icon.warning {
            background: #f59e0b;
        }
        
        .notification-content {
            flex: 1;
        }
        
        .notification-title {
            font-weight: 600;
            color: #1f2937;
            margin: 0 0 4px 0;
            font-size: 14px;
        }
        
        .notification-message {
            color: #6b7280;
            margin: 0;
            font-size: 13px;
        }
        
        .notification-close {
            background: none;
            border: none;
            color: #9ca3af;
            cursor: pointer;
            padding: 0;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .notification-close:hover {
            color: #6b7280;
        }
        
        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }
            padding: 0;
        }
        
        /* Hide default elements */
        .fixed-plugin {
            display: none !important;
        }
    </style>
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="https://www.cia-invest.com/" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

    <!-- Exemple de lien CDN pour TinyMCE -->
<script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body class="modern-admin-layout">

<!-- Navigation Sidebar -->
@include('admin.partials.navigation')

<!-- Main Content Area -->
<main class="main-content">
    <!-- Navbar -->
    @include('admin.partials.navbar')
    <!-- End Navbar -->

    <div class="content-wrapper">
        @yield('content')
    </div>
    
    <!-- Notifications Toast -->
    <div id="notification-container" style="position: fixed; top: 20px; right: 20px; z-index: 9999;"></div>
</main>


<!--- Footer --->
@include('admin.partials.footer')

<script>
// Système de notifications
function showNotification(type, title, message, duration = 5000) {
    const container = document.getElementById('notification-container');
    
    const notification = document.createElement('div');
    notification.className = `notification-toast ${type}`;
    
    notification.innerHTML = `
        <div class="notification-icon ${type}">
            ${type === 'success' ? '✓' : type === 'error' ? '✕' : '⚠'}
        </div>
        <div class="notification-content">
            <div class="notification-title">${title}</div>
            <div class="notification-message">${message}</div>
        </div>
        <button class="notification-close" onclick="closeNotification(this)">
            <i class="material-icons" style="font-size: 16px;">close</i>
        </button>
    `;
    
    container.appendChild(notification);
    
    // Auto-remove after duration
    setTimeout(() => {
        closeNotification(notification.querySelector('.notification-close'));
    }, duration);
}

function closeNotification(closeBtn) {
    const notification = closeBtn.closest('.notification-toast');
    notification.style.animation = 'slideOutRight 0.3s ease-out';
    setTimeout(() => {
        notification.remove();
    }, 300);
}

// Check for Laravel session messages
@if(session('success'))
    showNotification('success', 'Succès', '{{ session('success') }}');
@endif

@if(session('error'))
    showNotification('error', 'Erreur', '{{ session('error') }}');
@endif

@if(session('warning'))
    showNotification('warning', 'Attention', '{{ session('warning') }}');
@endif
</script>

</html>