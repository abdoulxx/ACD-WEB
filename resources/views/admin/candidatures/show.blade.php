@extends('admin.layouts.admin')
@section('title', 'Détails Candidature')
@section('content')

<div class="modern-admin-page">
    <!-- Header Section -->
    <div class="page-header">
        <div class="header-content">
            <div class="header-info">
                <div class="breadcrumb">
                    <a href="{{ route('admin.candidatures.index') }}">
                        <i class="material-icons">workspace_premium</i>
                        Candidatures Prix
                    </a>
                    <i class="material-icons">chevron_right</i>
                    <span>Détails #{{ $candidature->id }}</span>
                </div>
                <h1 class="page-title">Candidature Prix d'Excellence</h1>
                <p class="page-subtitle">Détails complets de la candidature</p>
            </div>
            <div class="header-actions">
                <a href="{{ route('admin.candidatures.index') }}" class="btn-back">
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
                    <i class="material-icons">person</i>
                    Informations du candidat
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
                        <label>Nom de l'entreprise</label>
                        <div class="info-value name-field">
                            <div class="avatar-large">
                                <i class="material-icons">business</i>
                            </div>
                            <div class="name-info">
                                <span class="full-name">{{ $candidature->nom_entreprise ?? 'N/A' }}</span>
                                <span class="subtitle">{{ $candidature->statut_juridique ?? '' }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Nom du responsable</label>
                        <div class="info-value">
                            {{ $candidature->nom_responsable ?? 'Non fourni' }}
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Email responsable</label>
                        <div class="info-value">
                            @if($candidature->email_responsable)
                                <a href="mailto:{{ $candidature->email_responsable }}" class="email-link">
                                    <i class="material-icons">email</i>
                                    {{ $candidature->email_responsable }}
                                </a>
                            @else
                                <span class="no-data">Non fourni</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Téléphone responsable</label>
                        <div class="info-value">
                            @if($candidature->telephone_responsable)
                                <a href="tel:{{ $candidature->telephone_responsable }}" class="phone-link">
                                    <i class="material-icons">phone</i>
                                    {{ $candidature->telephone_responsable }}
                                </a>
                            @else
                                <span class="no-data">Non fourni</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Fonction du responsable</label>
                        <div class="info-value">
                            {{ $candidature->fonction_responsable ?? 'Non spécifiée' }}
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Statut juridique</label>
                        <div class="info-value">
                            <span class="statut-badge">{{ $candidature->statut_juridique ?? 'Non spécifié' }}</span>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Numéro RCCM</label>
                        <div class="info-value">
                            {{ $candidature->numero_rccm ?? 'Non fourni' }}
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Pays/Ville du siège</label>
                        <div class="info-value">
                            {{ $candidature->pays_ville_siege ?? 'Non spécifié' }}
                        </div>
                    </div>
                    
                    <div class="info-item full-width">
                        <label>Produits et services</label>
                        <div class="info-value description-field">
                            {{ $candidature->produits_services ?? 'Non spécifiés' }}
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Chiffre d'affaires</label>
                        <div class="info-value">
                            {{ $candidature->chiffre_affaires ?? 'Non fourni' }}
                        </div>
                    </div>
                    
                    @if($candidature->logo_hd)
                    <div class="info-item">
                        <label>Logo HD</label>
                        <div class="info-value">
                            <a href="{{ asset('storage/' . $candidature->logo_hd) }}" target="_blank" class="file-link">
                                <i class="material-icons">image</i>
                                Voir le logo
                            </a>
                        </div>
                    </div>
                    @endif
                    
                    @if($candidature->piece_identite)
                    <div class="info-item">
                        <label>Pièce d'identité</label>
                        <div class="info-value">
                            <a href="{{ asset('storage/' . $candidature->piece_identite) }}" target="_blank" class="file-link">
                                <i class="material-icons">description</i>
                                Voir la pièce
                            </a>
                        </div>
                    </div>
                    @endif
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
                    <a href="mailto:{{ $candidature->email_responsable ?? '' }}" class="action-button primary">
                        <i class="material-icons">email</i>
                        <div class="action-content">
                            <span class="action-title">Envoyer un email</span>
                            <span class="action-desc">Contacter le responsable</span>
                        </div>
                    </a>
                    
                    <button onclick="printDetails()" class="action-button secondary">
                        <i class="material-icons">print</i>
                        <div class="action-content">
                            <span class="action-title">Imprimer</span>
                            <span class="action-desc">Générer un PDF</span>
                        </div>
                    </button>
                    
                    <form action="{{ route('admin.candidatures.destroy', $candidature->id) }}" method="POST" style="width: 100%;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette candidature ?')">
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
    color: #f59e0b;
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
    color: #f59e0b;
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

.info-item.full-width {
    grid-column: 1 / -1;
}

.description-field {
    max-height: 200px;
    overflow-y: auto;
    line-height: 1.5;
    white-space: pre-wrap;
}

.subtitle {
    font-size: 0.9rem;
    color: #6b7280;
    display: block;
    margin-top: 0.25rem;
}

.statut-badge {
    background: #fef3c7;
    color: #92400e;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
    text-transform: uppercase;
    display: inline-block;
}

.file-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #2563eb;
    text-decoration: none;
    padding: 0.5rem;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    background: #f8fafc;
    transition: all 0.2s ease;
}

.file-link:hover {
    background: #e2e8f0;
    text-decoration: none;
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
    background: linear-gradient(135deg, #f59e0b, #d97706);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
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
</script>

@endsection
