@extends('admin.layouts.admin')
@section('title', 'Modifier Réservation')
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
                    <span>Modifier #{{ $reservation->id }}</span>
                </div>
                <h1 class="page-title">Modifier la réservation</h1>
                <p class="page-subtitle">Modification des informations de la réservation événement</p>
            </div>
            <div class="header-actions">
                <a href="{{ route('admin.reservations.show', $reservation->id) }}" class="btn-back">
                    <i class="material-icons">arrow_back</i>
                    Retour aux détails
                </a>
            </div>
        </div>
    </div>

    <!-- Edit Form -->
    <div class="edit-container">
        <form action="{{ route('admin.reservations.update', $reservation->id) }}" method="POST" class="edit-form">
            @csrf
            @method('PUT')
            
            <!-- Informations Participant -->
            <div class="form-section">
                <div class="section-header">
                    <h3><i class="material-icons">person</i> Informations du participant</h3>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nom">Nom *</label>
                        <input type="text" id="nom" name="nom" 
                               value="{{ old('nom', $reservation->nom) }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="prenom">Prénom *</label>
                        <input type="text" id="prenom" name="prenom" 
                               value="{{ old('prenom', $reservation->prenom) }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" 
                               value="{{ old('email', $reservation->email) }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone" 
                               value="{{ old('telephone', $reservation->telephone) }}">
                    </div>
                </div>
            </div>

            <!-- Informations Professionnelles -->
            <div class="form-section">
                <div class="section-header">
                    <h3><i class="material-icons">business</i> Informations professionnelles</h3>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="societe">Société</label>
                        <input type="text" id="societe" name="societe" 
                               value="{{ old('societe', $reservation->societe) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="poste">Poste</label>
                        <input type="text" id="poste" name="poste" 
                               value="{{ old('poste', $reservation->poste) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="type_reservation">Type de réservation *</label>
                        <select id="type_reservation" name="type_reservation" required>
                            <option value="">Sélectionner</option>
                            <option value="sponsor" {{ old('type_reservation', $reservation->type_reservation) == 'sponsor' ? 'selected' : '' }}>Sponsor</option>
                            <option value="exposant" {{ old('type_reservation', $reservation->type_reservation) == 'exposant' ? 'selected' : '' }}>Exposant</option>
                            <option value="participant" {{ old('type_reservation', $reservation->type_reservation) == 'participant' ? 'selected' : '' }}>Participant</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="form-actions">
                <a href="{{ route('admin.reservations.show', $reservation->id) }}" class="btn-cancel">
                    <i class="material-icons">close</i>
                    Annuler
                </a>
                <button type="submit" class="btn-save">
                    <i class="material-icons">save</i>
                    Enregistrer les modifications
                </button>
            </div>
        </form>
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
}

.edit-container {
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    border: 1px solid #e2e8f0;
    overflow: hidden;
}

.form-section {
    border-bottom: 1px solid #e5e7eb;
    padding: 2rem;
}

.form-section:last-child {
    border-bottom: none;
}

.section-header {
    margin-bottom: 2rem;
}

.section-header h3 {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1.2rem;
    font-weight: 600;
    color: #1a202c;
    margin: 0;
}

.section-header h3 i {
    color: #8b5cf6;
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-weight: 600;
    color: #374151;
    margin-bottom: 0.5rem;
    font-size: 0.9rem;
}

.form-group input,
.form-group select {
    padding: 0.75rem;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: 0.9rem;
    transition: border-color 0.2s ease;
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: #8b5cf6;
    box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.1);
}

.form-actions {
    padding: 2rem;
    background: #f8fafc;
    display: flex;
    justify-content: flex-end;
    gap: 1rem;
}

.btn-cancel,
.btn-save {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    border-radius: 12px;
    font-weight: 500;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.2s ease;
    border: none;
}

.btn-cancel {
    background: #f1f5f9;
    color: #475569;
}

.btn-cancel:hover {
    background: #e2e8f0;
}

.btn-save {
    background: linear-gradient(135deg, #8b5cf6, #6d28d9);
    color: white;
}

.btn-save:hover {
    transform: translateY(-1px);
    box-shadow: 0 8px 25px rgba(139, 92, 246, 0.3);
}

@media (max-width: 768px) {
    .modern-admin-page {
        padding: 1rem;
    }
    
    .header-content {
        flex-direction: column;
        gap: 1rem;
    }
    
    .form-grid {
        grid-template-columns: 1fr;
    }
    
    .form-actions {
        flex-direction: column;
    }
}
</style>

@endsection
