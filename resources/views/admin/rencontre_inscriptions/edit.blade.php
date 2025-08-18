@extends('admin.layouts.admin')
@section('title', 'Modifier Inscription Rencontre 2026')
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
                    <span>Modification #{{ $inscription->id }}</span>
                </div>
                <h1 class="page-title">Modifier l'inscription</h1>
            </div>
            <div class="header-actions">
                <a href="{{ route('admin.rencontre-inscriptions.index') }}" class="btn-back">
                    <i class="material-icons">arrow_back</i>
                    Retour
                </a>
            </div>
        </div>
    </div>

    <!-- Edit Form -->
    <div class="details-container">
        <div class="detail-card main-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="material-icons">edit</i>
                    Édition du formulaire
                </h3>
            </div>
            <div class="card-content">
                <form action="{{ route('admin.rencontre-inscriptions.update', $inscription->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="info-grid">
                        <div class="info-item">
                            <label for="nom_prenom">Nom & Prénom</label>
                            <input type="text" id="nom_prenom" name="nom_prenom" value="{{ old('nom_prenom', $inscription->nom_prenom) }}" class="form-control">
                        </div>
                        <div class="info-item">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email', $inscription->email) }}" class="form-control">
                        </div>
                        <div class="info-item">
                            <label for="telephone">Téléphone</label>
                            <input type="text" id="telephone" name="telephone" value="{{ old('telephone', $inscription->telephone) }}" class="form-control">
                        </div>
                        <div class="info-item">
                            <label for="entreprise">Entreprise</label>
                            <input type="text" id="entreprise" name="entreprise" value="{{ old('entreprise', $inscription->entreprise) }}" class="form-control">
                        </div>
                        <div class="info-item">
                            <label for="fonction">Fonction</label>
                            <input type="text" id="fonction" name="fonction" value="{{ old('fonction', $inscription->fonction) }}" class="form-control">
                        </div>
                        <div class="info-item">
                            <label for="pack_choisi">Pack Choisi</label>
                            <select id="pack_choisi" name="pack_choisi" class="form-control">
                                <option value="standard" {{ old('pack_choisi', $inscription->pack_choisi) == 'standard' ? 'selected' : '' }}>Standard</option>
                                <option value="premium" {{ old('pack_choisi', $inscription->pack_choisi) == 'premium' ? 'selected' : '' }}>Premium</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn-submit">Mettre à jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.modern-admin-page{padding:2rem;background:#f8fafc;min-height:100vh}.page-header{background:white;border-radius:16px;padding:2rem;margin-bottom:2rem;box-shadow:0 4px 6px rgba(0,0,0,0.05);border:1px solid #e2e8f0}.header-content{display:flex;justify-content:space-between;align-items:flex-start}.breadcrumb{display:flex;align-items:center;gap:.5rem;color:#64748b;font-size:.9rem;margin-bottom:1rem}.breadcrumb a{display:flex;align-items:center;gap:.25rem;color:#4f46e5;text-decoration:none}.breadcrumb a:hover{text-decoration:underline}.page-title{font-size:2rem;font-weight:700;color:#1a202c;margin:0 0 .5rem 0}.btn-back{display:flex;align-items:center;gap:.5rem;padding:.75rem 1.5rem;background:#f1f5f9;color:#475569;border-radius:12px;text-decoration:none;font-weight:500;transition:all .2s ease}.btn-back:hover{background:#e2e8f0;color:#334155}.details-container{display:block;width:100%}.detail-card{background:white;border-radius:16px;box-shadow:0 4px 6px rgba(0,0,0,0.05);border:1px solid #e2e8f0;overflow:hidden}.card-header{padding:1.5rem;border-bottom:1px solid #e2e8f0;display:flex;justify-content:space-between;align-items:center}.card-title{display:flex;align-items:center;gap:.5rem;font-size:1.2rem;font-weight:600;color:#1a202c;margin:0}.card-title i{color:#4f46e5}.card-content{padding:2rem}.info-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:1.5rem}.info-item label{font-weight:600;color:#374151;font-size:.875rem;display:block;margin-bottom:.5rem}.form-control{width:100%;padding:.75rem 1rem;border:1px solid #e2e8f0;border-radius:8px;font-size:1rem;background:#f8fafc}.form-control:focus{outline:none;border-color:#4f46e5;box-shadow:0 0 0 3px rgba(79,70,229,.1)}.form-actions{margin-top:2rem;padding-top:1.5rem;border-top:1px solid #e2e8f0;display:flex;justify-content:flex-end}.btn-submit{padding:.75rem 2rem;background:linear-gradient(135deg,#4f46e5,#7c3aed);color:white;border:none;border-radius:12px;font-weight:500;cursor:pointer;transition:all .2s ease}.btn-submit:hover{transform:translateY(-1px);box-shadow:0 8px 25px rgba(79,70,229,.3)}
</style>

@endsection
