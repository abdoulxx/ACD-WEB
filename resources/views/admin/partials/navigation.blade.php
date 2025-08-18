<aside class="modern-sidebar" id="sidenav-main">
    <!-- Logo & Brand -->
    <div class="sidebar-header">
        <div class="brand-container">
            <div class="brand-logo">
                <img src="{{ asset('assets/images/logo/1.png') }}" alt="ACD Logo" class="logo-img">
            </div>
            <div class="brand-text">
                <h3 class="brand-title">ACD Corporate services</h3>
                <p class="brand-subtitle">Administration</p>
            </div>
        </div>
    </div>

    <!-- User Info -->
    <div class="user-section">
        <div class="user-avatar">
            <i class="material-icons">account_circle</i>
        </div>
        <div class="user-info">
            <h4 class="user-name">Administrateur</h4>
            <p class="user-role">Super Admin</p>
            <div class="online-indicator">
                <span class="status-dot"></span>
                <span class="status-text">En ligne</span>
            </div>
        </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="sidebar-nav">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="{{ route('admin.home.index') }}" class="nav-link {{ Request::is('admin/home*') ? 'active' : '' }}">
                    <div class="nav-icon">
                        <i class="material-icons">dashboard</i>
                    </div>
                    <span class="nav-text">Dashboard</span>
                    <div class="nav-indicator"></div>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('admin.candidatures.index') }}" class="nav-link {{ Request::is('admin/candidatures*') ? 'active' : '' }}">
                    <div class="nav-icon">
                        <i class="material-icons">workspace_premium</i>
                    </div>
                    <span class="nav-text">Candidatures Prix</span>
                    @php
                        $candidaturesCount = \DB::table('candidatures')->count();
                    @endphp
                    @if($candidaturesCount > 0)
                        <div class="notification-badge">{{ $candidaturesCount }}</div>
                    @endif
                    <div class="nav-indicator"></div>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('admin.impact-feminin.index') }}" class="nav-link {{ Request::is('admin/impact-feminin*') ? 'active' : '' }}">
                    <div class="nav-icon">
                        <i class="material-icons">female</i>
                    </div>
                    <span class="nav-text">Impact Féminin</span>
                    @php
                        $impactCount = \DB::table('impact_feminin_candidatures')->count();
                    @endphp
                    @if($impactCount > 0)
                        <div class="notification-badge">{{ $impactCount }}</div>
                    @endif
                    <div class="nav-indicator"></div>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('admin.reservations.index') }}" class="nav-link {{ Request::is('admin/reservations*') ? 'active' : '' }}">
                    <div class="nav-icon">
                        <i class="material-icons">event_seat</i>
                    </div>
                    <span class="nav-text">Réservations</span>
                    @php
                        $reservationsCount = \DB::table('reservations')->count();
                    @endphp
                    @if($reservationsCount > 0)
                        <div class="notification-badge">{{ $reservationsCount }}</div>
                    @endif
                    <div class="nav-indicator"></div>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('admin.rencontre-inscriptions.index') }}" class="nav-link {{ Request::is('admin/rencontre-inscriptions*') ? 'active' : '' }}">
                    <div class="nav-icon">
                        <i class="material-icons">how_to_reg</i>
                    </div>
                    <span class="nav-text">Inscriptions Rencontres 2026</span>
                    @php
                        $rencontreCount = \DB::table('rencontre_inscription2026s')->count();
                    @endphp
                    @if($rencontreCount > 0)
                        <div class="notification-badge">{{ $rencontreCount }}</div>
                    @endif
                    <div class="nav-indicator"></div>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('admin.contact.index') }}" class="nav-link {{ Request::is('admin/contact*') ? 'active' : '' }}">
                    <div class="nav-icon">
                        <i class="material-icons">mail</i>
                    </div>
                    <span class="nav-text">Messages</span>
                    @php
                        $recentCount = \App\Models\Contact::whereDate('created_at', '>=', now()->subDays(7))->count();
                    @endphp
                    @if($recentCount > 0)
                        <div class="notification-badge">{{ $recentCount }}</div>
                    @endif
                    <div class="nav-indicator"></div>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Logout Section -->
    <div class="sidebar-footer">
        <form action="{{ route('logout') }}" method="post" class="logout-form">
            @csrf
            @method('delete')
            <button type="submit" class="logout-btn">
                <div class="logout-icon">
                    <i class="material-icons">logout</i>
                </div>
                <span class="logout-text">Se Déconnecter</span>
            </button>
        </form>
    </div>
</aside>

<style>
.modern-sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 280px;
    background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%);
    border-right: 1px solid rgba(255, 255, 255, 0.1);
    display: flex;
    flex-direction: column;
    z-index: 1000;
    overflow-y: auto;
    overflow-x: hidden;
    transition: all 0.3s ease;
    box-shadow: 4px 0 20px rgba(0, 0, 0, 0.1);
}

.modern-sidebar::-webkit-scrollbar {
    width: 4px;
}

.modern-sidebar::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.05);
}

.modern-sidebar::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 2px;
}

.sidebar-header {
    padding: 1.5rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.brand-container {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.brand-logo {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid rgba(255, 255, 255, 0.2);
    padding: 5px;
}

.logo-img {
    width: 40px;
    height: 40px;
    object-fit: contain;
    filter: brightness(1.1);
}

.brand-title {
    color: white;
    font-size: 1.1rem;
    font-weight: 700;
    margin: 0;
    letter-spacing: -0.02em;
}

.brand-subtitle {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.8rem;
    margin: 0.25rem 0 0 0;
}

.user-section {
    padding: 1.5rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    display: flex;
    align-items: center;
    gap: 1rem;
}

.user-avatar {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea, #764ba2);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
}

.user-name {
    color: white;
    font-size: 0.95rem;
    font-weight: 600;
    margin: 0;
}

.user-role {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.8rem;
    margin: 0.25rem 0 0.5rem 0;
}

.online-indicator {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.status-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #10b981;
    box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.3);
}

.status-text {
    color: #10b981;
    font-size: 0.75rem;
    font-weight: 500;
}

.sidebar-nav {
    flex: 1;
    padding: 1.5rem 0;
}

.nav-list {
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav-item {
    margin: 0.5rem 0;
}

.nav-link {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem 1.5rem;
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    transition: all 0.3s ease;
    position: relative;
    border-radius: 0 25px 25px 0;
    margin-right: 1rem;
    font-weight: 500;
}

.nav-link:hover {
    background: rgba(255, 255, 255, 0.08);
    color: white;
    transform: translateX(8px);
}

.nav-link.active {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    transform: translateX(8px);
}

.nav-link.active .nav-indicator {
    opacity: 1;
}

.nav-icon {
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.nav-text {
    font-size: 0.9rem;
    font-weight: 500;
    flex: 1;
}

.notification-badge {
    background: #ef4444;
    color: white;
    font-size: 0.7rem;
    font-weight: 600;
    padding: 0.2rem 0.5rem;
    border-radius: 10px;
    min-width: 18px;
    text-align: center;
    line-height: 1;
}

.nav-indicator {
    position: absolute;
    right: -1rem;
    top: 50%;
    transform: translateY(-50%);
    width: 4px;
    height: 20px;
    background: white;
    border-radius: 2px;
    opacity: 0;
    transition: opacity 0.2s ease;
}

.sidebar-footer {
    padding: 1.5rem;
}

.logout-form {
    width: 100%;
}

.logout-btn {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 0.75rem 1rem;
    background: rgba(239, 68, 68, 0.1);
    border: 1px solid rgba(239, 68, 68, 0.3);
    border-radius: 12px;
    color: #fca5a5;
    font-size: 0.9rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
}

.logout-btn:hover {
    background: rgba(239, 68, 68, 0.2);
    border-color: rgba(239, 68, 68, 0.5);
    color: #f87171;
    transform: translateY(-1px);
}

.logout-icon {
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.logout-text {
    flex: 1;
    text-align: left;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .modern-sidebar {
        transform: translateX(-100%);
        transition: transform 0.3s ease;
    }
    
    .modern-sidebar.show {
        transform: translateX(0);
    }
}

/* Main content adjustment */
.main-content {
    margin-left: 280px;
    transition: margin-left 0.3s ease;
}

@media (max-width: 768px) {
    .main-content {
        margin-left: 0;
    }
}
</style>
