@extends('admin.layouts.admin')
@section('title', 'Détails Inscription Rencontre 2026')
@section('content')

<div class="modern-admin-page">
    <!-- Header Section -->
    <div class="page-header">
        <div class="header-content">
            <div class="header-info">
                <div class="breadcrumb">
                    <a href="{{ route('admin.rencontre-inscriptions.index') }}">
                        <i class="material-icons">how_to_reg</i>
                        Inscriptions Rencontres 2026
                    </a>
                    <i class="material-icons">chevron_right</i>
                    <span>Détails #{{ $inscription->id }}</span>
                </div>
                <h1 class="page-title">Inscription #{{ $inscription->id }}</h1>
                <p class="page-subtitle">Détails complets de l'inscription</p>
            </div>
            <div class="header-actions">
                <a href="{{ route('admin.rencontre-inscriptions.index') }}" class="btn-back">
                    <i class="material-icons">arrow_back</i>
                    Retour à la liste
                </a>
            </div>
        </div>
    </div>

    <!-- Inscription Details -->
    <div class="details-container">
        <div class="detail-card main-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="material-icons">person</i>
                    Informations du participant
                </h3>
                <div class="card-meta">
                    <span class="submission-date">
                        Inscrit le {{ $inscription->created_at ? \Carbon\Carbon::parse($inscription->created_at)->format('d/m/Y à H:i') : 'Date inconnue' }}
                    </span>
                </div>
            </div>
            <div class="card-content">
                <div class="info-grid">
                    <div class="info-item">
                        <label>Nom & Prénom</label>
                        <div class="info-value name-field">
                            <div class="avatar-large">
                                <i class="material-icons">person</i>
                            </div>
                            <div class="name-info">
                                <span class="full-name">{{ $inscription->nom_prenom ?? 'N/A' }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <label>Email</label>
                        <div class="info-value">
                            @if($inscription->email)
                                <a href="mailto:{{ $inscription->email }}" class="email-link">
                                    <i class="material-icons">email</i>
                                    {{ $inscription->email }}
                                </a>
                            @else
                                <span class="no-data">Non fourni</span>
                            @endif
                        </div>
                    </div>

                    <div class="info-item">
                        <label>Téléphone</label>
                        <div class="info-value">
                            @if($inscription->telephone)
                                <a href="tel:{{ $inscription->telephone }}" class="phone-link">
                                    <i class="material-icons">phone</i>
                                    {{ $inscription->telephone }}
                                </a>
                            @else
                                <span class="no-data">Non fourni</span>
                            @endif
                        </div>
                    </div>

                    <div class="info-item">
                        <label>Entreprise</label>
                        <div class="info-value">
                            {{ $inscription->entreprise ?? 'Non spécifiée' }}
                        </div>
                    </div>

                    <div class="info-item">
                        <label>Fonction</label>
                        <div class="info-value">
                            {{ $inscription->fonction ?? 'Non spécifiée' }}
                        </div>
                    </div>

                    <div class="info-item">
                        <label>Pack Choisi</label>
                        <div class="info-value">
                            <span class="statut-badge">{{ $inscription->pack_choisi ?? 'Non spécifié' }}</span>
                        </div>
                    </div>

                    <div class="info-item full-width">
                        <label>Destinations Choisies</label>
                        <div class="info-value description-field">
                            @if(!empty($inscription->destinations))
                                {{ implode(', ', $inscription->destinations) }}
                            @else
                                Aucune destination choisie.
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.modern-admin-page{padding:2rem;background:#f8fafc;min-height:100vh}.page-header{background:white;border-radius:16px;padding:2rem;margin-bottom:2rem;box-shadow:0 4px 6px rgba(0,0,0,0.05);border:1px solid #e2e8f0}.header-content{display:flex;justify-content:space-between;align-items:flex-start}.breadcrumb{display:flex;align-items:center;gap:.5rem;color:#64748b;font-size:.9rem;margin-bottom:1rem}.breadcrumb a{display:flex;align-items:center;gap:.25rem;color:#4f46e5;text-decoration:none}.breadcrumb a:hover{text-decoration:underline}.page-title{font-size:2rem;font-weight:700;color:#1a202c;margin:0 0 .5rem 0}.page-subtitle{color:#64748b;font-size:1.1rem;margin:0}.btn-back{display:flex;align-items:center;gap:.5rem;padding:.75rem 1.5rem;background:#f1f5f9;color:#475569;border-radius:12px;text-decoration:none;font-weight:500;transition:all .2s ease}.btn-back:hover{background:#e2e8f0;color:#334155}.details-container{display:block;width:100%}.detail-card{background:white;border-radius:16px;box-shadow:0 4px 6px rgba(0,0,0,0.05);border:1px solid #e2e8f0;overflow:hidden}.card-header{padding:1.5rem;border-bottom:1px solid #e2e8f0;display:flex;justify-content:space-between;align-items:center}.card-title{display:flex;align-items:center;gap:.5rem;font-size:1.2rem;font-weight:600;color:#1a202c;margin:0}.card-title i{color:#4f46e5}.submission-date{color:#64748b;font-size:.9rem}.card-content{padding:2rem}.info-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:2rem}.info-item.full-width{grid-column:1 / -1}.description-field{max-height:200px;overflow-y:auto;line-height:1.5;white-space:pre-wrap}.subtitle{font-size:.9rem;color:#6b7280;display:block;margin-top:.25rem}.statut-badge{background:#eef2ff;color:#4338ca;padding:.25rem .75rem;border-radius:20px;font-size:.8rem;font-weight:500;text-transform:uppercase;display:inline-block}.info-item{display:flex;flex-direction:column;gap:.5rem}.info-item label{font-weight:600;color:#374151;font-size:.875rem;text-transform:uppercase;letter-spacing:.05em}.info-value{font-size:1rem;color:#1f2937;padding:.75rem;background:#f8fafc;border-radius:8px;border:1px solid #e2e8f0}.name-field{display:flex;align-items:center;gap:1rem;padding:1rem}.avatar-large{width:60px;height:60px;border-radius:50%;background:linear-gradient(135deg,#4f46e5,#7c3aed);display:flex;align-items:center;justify-content:center;color:white;font-size:24px}.full-name{font-size:1.2rem;font-weight:600;color:#1f2937}.email-link,.phone-link{display:flex;align-items:center;gap:.5rem;color:#2563eb;text-decoration:none}.email-link:hover,.phone-link:hover{text-decoration:underline}.no-data{color:#9ca3af;font-style:italic}
</style>

@endsection
