@extends('admin.layouts.admin')
@section('title', 'Détails Réservation')
@section('content')

<div class="modern-admin-page">
    <!-- Header Section -->
    <div class="page-header">
        <div class="header-content">
            <div class="header-info">
                <div class="breadcrumb">
                    <a href="{{ route('admin.reservations.index') }}">
                        <i class="material-icons">event_seat</i>
                        Réservations
                    </a>
                    <i class="material-icons">chevron_right</i>
                    <span>Détails #{{ $reservation->id }}</span>
                </div>
                <h1 class="page-title">Réservation Événement</h1>
                <p class="page-subtitle">Détails complets de la réservation</p>
            </div>
            <div class="header-actions">
                <a href="{{ route('admin.reservations.index') }}" class="btn-back">
                    <i class="material-icons">arrow_back</i>
                    Retour à la liste
                </a>
            </div>
        </div>
    </div>

    <!-- Reservation Details -->
    <div class="details-container">
        <div class="detail-card main-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="material-icons">person</i>
                    Informations du participant
                </h3>
                <div class="card-meta">
                    <span class="submission-date">
                        Réservé le {{ $reservation->created_at ? \Carbon\Carbon::parse($reservation->created_at)->format('d/m/Y à H:i') : 'Date inconnue' }}
                    </span>
                </div>
            </div>
            <div class="card-content">
                <div class="info-grid">
                    <div class="info-item">
                        <label>Nom complet</label>
                        <div class="info-value name-field">
                            <div class="avatar-large reservation">
                                <i class="material-icons">event_seat</i>
                            </div>
                            <div class="name-info">
                                <span class="full-name">{{ ($reservation->nom ?? 'N/A') . ' ' . ($reservation->prenom ?? '') }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Email</label>
                        <div class="info-value">
                            @if($reservation->email)
                                <a href="mailto:{{ $reservation->email }}" class="email-link">
                                    <i class="material-icons">email</i>
                                    {{ $reservation->email }}
                                </a>
                            @else
                                <span class="no-data">Non fourni</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Téléphone</label>
                        <div class="info-value">
                            @if($reservation->telephone)
                                <a href="tel:{{ $reservation->telephone }}" class="phone-link">
                                    <i class="material-icons">phone</i>
                                    {{ $reservation->telephone }}
                                </a>
                            @else
                                <span class="no-data">Non fourni</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Société</label>
                        <div class="info-value">
                            {{ $reservation->societe ?? 'Non spécifiée' }}
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Poste</label>
                        <div class="info-value">
                            {{ $reservation->poste ?? 'Non spécifié' }}
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Type de réservation</label>
                        <div class="info-value">
                            <span class="type-badge">{{ $reservation->type_reservation ?? 'Non spécifié' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions Card -->
        <div class="detail-card actions-card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="material-icons">settings</i>
                    Actions
                </h3>
            </div>
            <div class="card-content">
                <div class="action-buttons">
                    <a href="mailto:{{ $reservation->email ?? '' }}" class="action-button primary">
                        <i class="material-icons">email</i>
                        <div class="action-content">
                            <span class="action-title">Envoyer un email</span>
                            <span class="action-desc">Contacter le participant</span>
                        </div>
                    </a>
                    
                    <button onclick="printDetails()" class="action-button secondary">
                        <i class="material-icons">print</i>
                        <div class="action-content">
                            <span class="action-title">Imprimer</span>
                            <span class="action-desc">Générer un PDF</span>
                        </div>
                    </button>
                    
                    <button onclick="confirmReservation()" class="action-button success">
                        <i class="material-icons">check_circle</i>
                        <div class="action-content">
                            <span class="action-title">Confirmer</span>
                            <span class="action-desc">Confirmer la réservation</span>
                        </div>
                    </button>
                    
                    <form action="{{ route('admin.reservations.destroy', $reservation->id) }}" method="POST" style="width: 100%;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-button danger">
                            <i class="material-icons">delete</i>
                            <div class="action-content">
                                <span class="action-title">Supprimer</span>
                                <span class="action-desc">Supprimer définitivement</span>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.modern-admin-page {
    padding: 2rem;
    background: #f8fafc;
    min-height: 100vh;
}

.page-header {
    background: white;
    border-radius: 16px;
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    border: 1px solid #e2e8f0;
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.breadcrumb {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #64748b;
    font-size: 0.9rem;
    margin-bottom: 1rem;
}

.breadcrumb a {
    display: flex;
    align-items: center;
    gap: 0.25rem;
    color: #3b82f6;
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

.page-title {
    font-size: 2rem;
    font-weight: 700;
    color: #1a202c;
    margin: 0 0 0.5rem 0;
}

.page-subtitle {
    color: #64748b;
    font-size: 1.1rem;
    margin: 0;
}

.btn-back {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: #f1f5f9;
    color: #475569;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.2s ease;
}

.btn-back:hover {
    background: #e2e8f0;
    color: #334155;
}

.details-container {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 2rem;
}

.detail-card {
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    border: 1px solid #e2e8f0;
    overflow: hidden;
}

.card-header {
    padding: 1.5rem;
    border-bottom: 1px solid #e2e8f0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-title {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1.2rem;
    font-weight: 600;
    color: #1a202c;
    margin: 0;
}

.card-title i {
    color: #3b82f6;
}

.submission-date {
    color: #64748b;
    font-size: 0.9rem;
}

.card-content {
    padding: 2rem;
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.info-item {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.info-item label {
    font-weight: 600;
    color: #374151;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.info-value {
    font-size: 1rem;
    color: #1f2937;
    padding: 0.75rem;
    background: #f8fafc;
    border-radius: 8px;
    border: 1px solid #e2e8f0;
}

.name-field {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
}

.avatar-large {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
}

.avatar-large.reservation {
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
}

.full-name {
    font-size: 1.2rem;
    font-weight: 600;
    color: #1f2937;
}

.participants-field {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
}

.participants-count {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 600;
    color: #3b82f6;
}

.type-badge {
    background: #fef3c7;
    color: #92400e;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
    text-transform: capitalize;
    display: inline-block;
}

.email-link, .phone-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #2563eb;
    text-decoration: none;
}

.email-link:hover, .phone-link:hover {
    text-decoration: underline;
}

.no-data {
    color: #9ca3af;
    font-style: italic;
}

.action-buttons {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.action-button {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.2s ease;
    text-decoration: none;
    width: 100%;
    background: white;
}

.action-button.primary {
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
    color: white;
}

.action-button.primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
}

.action-button.secondary {
    background: #f1f5f9;
    color: #475569;
    border: 1px solid #e2e8f0;
}

.action-button.secondary:hover {
    background: #e2e8f0;
    transform: translateY(-1px);
}

.action-button.success {
    background: #f0fdf4;
    color: #16a34a;
    border: 1px solid #bbf7d0;
}

.action-button.success:hover {
    background: #dcfce7;
    transform: translateY(-1px);
}

.action-button.danger {
    background: #fef2f2;
    color: #dc2626;
    border: 1px solid #fecaca;
}

.action-button.danger:hover {
    background: #fee2e2;
    transform: translateY(-1px);
}

.action-button i {
    font-size: 20px;
}

.action-content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    flex: 1;
}

.action-title {
    font-weight: 600;
    font-size: 0.9rem;
}

.action-desc {
    font-size: 0.8rem;
    opacity: 0.7;
}

@media (max-width: 768px) {
    .modern-admin-page {
        padding: 1rem;
    }
    
    .header-content {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .details-container {
        grid-template-columns: 1fr;
    }
    
    .info-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
}
</style>

<script>
function printDetails() {
    window.print();
}

function confirmReservation() {
    alert('Fonctionnalité de confirmation en cours de développement');
}
</script>

@endsection
