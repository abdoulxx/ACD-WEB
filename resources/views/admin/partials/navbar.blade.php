<!-- Modern Navbar -->
<nav class="modern-navbar">
    <div class="navbar-container">
        <!-- Left Section -->
        <div class="navbar-left">
            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
            
            <div class="breadcrumb-section">
                <h1 class="page-title">@yield('title', 'Dashboard')</h1>
                <div class="breadcrumb-trail">
                    <span class="breadcrumb-item">Administration</span>
                    <i class="material-icons breadcrumb-separator">chevron_right</i>
                    <span class="breadcrumb-item active">@yield('title', 'Dashboard')</span>
                </div>
            </div>
        </div>

        <!-- Right Section -->
        <div class="navbar-right">
            <!-- Empty right section for future additions -->
        </div>
    </div>
</nav>

<style>
.modern-navbar {
    background: white;
    border-bottom: 1px solid #e2e8f0;
    height: 80px;
    display: flex;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.navbar-container {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 2rem;
}

.navbar-left {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.mobile-menu-toggle {
    display: none;
    background: none;
    border: none;
    cursor: pointer;
    flex-direction: column;
    gap: 3px;
    padding: 8px;
    border-radius: 6px;
    transition: background 0.2s ease;
}

.mobile-menu-toggle:hover {
    background: #f1f5f9;
}

.hamburger-line {
    width: 20px;
    height: 2px;
    background: #64748b;
    border-radius: 1px;
    transition: all 0.2s ease;
}

.page-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1a202c;
    margin: 0;
    letter-spacing: -0.02em;
}

.breadcrumb-trail {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-top: 0.25rem;
}

.breadcrumb-item {
    font-size: 0.85rem;
    color: #64748b;
}

.breadcrumb-item.active {
    color: #1a202c;
    font-weight: 500;
}

.breadcrumb-separator {
    font-size: 16px;
    color: #cbd5e0;
}

.navbar-right {
    display: flex;
    align-items: center;
    gap: 1rem;
}

@media (max-width: 768px) {
    .mobile-menu-toggle {
        display: flex;
    }
    
    .breadcrumb-trail {
        display: none;
    }
    
    .page-title {
        font-size: 1.25rem;
    }
    
    .navbar-container {
        padding: 0 1rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileToggle = document.getElementById('mobileMenuToggle');
    if (mobileToggle) {
        mobileToggle.addEventListener('click', function() {
            const sidebar = document.querySelector('.modern-sidebar');
            sidebar.classList.toggle('show');
        });
    }
});
</script>