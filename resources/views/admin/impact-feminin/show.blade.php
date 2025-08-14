@extends('admin.layouts.admin')
@section('title', 'Détails Impact Féminin')
@section('content')

<div class="modern-admin-page">
    <!-- Header Section -->
    <div class="page-header">
        <div class="header-content">
            <div class="header-info">
                <div class="breadcrumb">
                    <a href="{{ route('admin.impact-feminin.index') }}">
                        <i class="material-icons">female</i>
                        Impact Féminin
                    </a>
                    <i class="material-icons">chevron_right</i>
                    <span>Détails #{{ $candidature->id }}</span>
                </div>
                <h1 class="page-title">Candidature Impact Féminin</h1>
                <p class="page-subtitle">Détails complets de la candidature</p>
            </div>
            <div class="header-actions">
                <a href="{{ route('admin.impact-feminin.index') }}" class="btn-back">
                    <i class="material-icons">arrow_back</i>
                    Retour à la liste
                </a>
            </div>
        </div>
    </div>

    <!-- Candidature Details -->
    <div class="details-container">
        <div class="detail-card main-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="material-icons">female</i>
                    Informations personnelles
                </h3>
                <div class="card-meta">
                    <span class="submission-date">
                        Soumis le {{ $candidature->created_at ? \Carbon\Carbon::parse($candidature->created_at)->format('d/m/Y à H:i') : 'Date inconnue' }}
                    </span>
                </div>
            </div>
            <div class="card-content">
                <div class="info-grid">
                    <div class="info-item">
                        <label>Nom complet</label>
                        <div class="info-value name-field">
                            <div class="avatar-large female">
                                <i class="material-icons">female</i>
                            </div>
                            <div class="name-info">
                                <span class="full-name">{{ ($candidature->nom ?? 'N/A') . ' ' . ($candidature->prenom ?? '') }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Email</label>
                        <div class="info-value">
                            @if($candidature->email)
                                <a href="mailto:{{ $candidature->email }}" class="email-link">
                                    <i class="material-icons">email</i>
                                    {{ $candidature->email }}
                                </a>
                            @else
                                <span class="no-data">Non fourni</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Téléphone</label>
                        <div class="info-value">
                            @if($candidature->telephone)
                                <a href="tel:{{ $candidature->telephone }}" class="phone-link">
                                    <i class="material-icons">phone</i>
                                    {{ $candidature->telephone }}
                                </a>
                            @else
                                <span class="no-data">Non fourni</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Société</label>
                        <div class="info-value">
                            {{ $candidature->societe ?? 'Non spécifiée' }}
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Poste</label>
                        <div class="info-value">
                            {{ $candidature->poste ?? 'Non spécifié' }}
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Prix choisi</label>
                        <div class="info-value">
                            <span class="prix-badge">{{ $candidature->prix_choisi ?? 'Non spécifié' }}</span>
                        </div>
                    </div>
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
    color: #11998e;
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
    display: block;
    width: 100%;
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
    color: #11998e;
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

.avatar-large.female {
    background: linear-gradient(135deg, #11998e, #38ef7d);
}

.prix-badge {
    background: #f0fdf4;
    color: #16a34a;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
    text-transform: capitalize;
    display: inline-block;
}

.full-name {
    font-size: 1.2rem;
    font-weight: 600;
    color: #1f2937;
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

@media (max-width: 768px) {
    .modern-admin-page {
        padding: 1rem;
    }
    
    .header-content {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .info-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
}
</style>

@endsection
