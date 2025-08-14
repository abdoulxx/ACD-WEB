@extends('admin.layouts.admin')
@section('title', 'Modifier Candidature Impact Féminin')
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
                    <span>Modifier #{{ $candidature->id }}</span>
                </div>
                <h1 class="page-title">Modifier la candidature Impact Féminin</h1>
                <p class="page-subtitle">Modification des informations de la candidature</p>
            </div>
            <div class="header-actions">
                <a href="{{ route('admin.impact-feminin.show', $candidature->id) }}" class="btn-back">
                    <i class="material-icons">arrow_back</i>
                    Retour aux détails
                </a>
            </div>
        </div>
    </div>

    <!-- Edit Form -->
    <div class="edit-container">
        <form action="{{ route('admin.impact-feminin.update', $candidature->id) }}" method="POST" class="edit-form">
            @csrf
            @method('PUT')
            
            <!-- Informations de base -->
            <div class="form-section">
                <div class="section-header">
                    <h3><i class="material-icons">person</i> Informations de la candidature</h3>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nom">Nom *</label>
                        <input type="text" id="nom" name="nom" 
                               value="{{ old('nom', $candidature->nom) }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="prenom">Prénom *</label>
                        <input type="text" id="prenom" name="prenom" 
                               value="{{ old('prenom', $candidature->prenom) }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" 
                               value="{{ old('email', $candidature->email) }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone" 
                               value="{{ old('telephone', $candidature->telephone) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="societe">Société</label>
                        <input type="text" id="societe" name="societe" 
                               value="{{ old('societe', $candidature->societe) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="poste">Poste</label>
                        <input type="text" id="poste" name="poste" 
                               value="{{ old('poste', $candidature->poste) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="prix_choisi">Prix choisi</label>
                        <input type="text" id="prix_choisi" name="prix_choisi" 
                               value="{{ old('prix_choisi', $candidature->prix_choisi) }}">
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="form-actions">
                <a href="{{ route('admin.impact-feminin.show', $candidature->id) }}" class="btn-cancel">
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
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.breadcrumb {
    display: flex;
    align-items: center;
    color: #6b7280;
    margin-bottom: 1rem;
    font-size: 0.875rem;
}

.breadcrumb a {
    color: #3b82f6;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.breadcrumb i {
    font-size: 1rem;
}

.page-title {
    font-size: 2rem;
    font-weight: 700;
    color: #111827;
    margin: 0 0 0.5rem 0;
}

.page-subtitle {
    color: #6b7280;
    margin: 0;
}

.btn-back {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: #f3f4f6;
    color: #374151;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.2s;
}

.btn-back:hover {
    background: #e5e7eb;
    color: #111827;
}

.edit-container {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.form-section {
    padding: 2rem;
    border-bottom: 1px solid #e5e7eb;
}

.form-section:last-child {
    border-bottom: none;
}

.section-header h3 {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 1.25rem;
    font-weight: 600;
    color: #111827;
    margin: 0 0 1.5rem 0;
}

.section-header i {
    color: #3b82f6;
    font-size: 1.5rem;
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
    font-weight: 500;
    color: #374151;
    margin-bottom: 0.5rem;
}

.form-group input,
.form-group textarea,
.form-group select {
    padding: 0.75rem;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.2s, box-shadow 0.2s;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.form-actions {
    padding: 2rem;
    display: flex;
    justify-content: flex-end;
    gap: 1rem;
    background: #f9fafb;
}

.btn-cancel {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: #f3f4f6;
    color: #374151;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.2s;
}

.btn-cancel:hover {
    background: #e5e7eb;
    color: #111827;
}

.btn-save {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: #3b82f6;
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: 500;
    cursor: pointer;
    transition: background 0.2s;
}

.btn-save:hover {
    background: #2563eb;
}
</style>
@endsection
