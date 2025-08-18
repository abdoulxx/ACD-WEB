@extends('admin.layouts.admin')
@section('title', 'Inscriptions Rencontres 2026')
@section('content')

<div class="modern-admin-page">
    <!-- Header Section -->
    <div class="page-header">
        <div class="header-content">
            <div class="header-info">
                <h1 class="page-title">
                    <i class="material-icons">how_to_reg</i>
                    Inscriptions Rencontres 2026
                </h1>
                <p class="page-subtitle">Liste des inscriptions pour les Rencontres B2B Internationales 2026</p>
            </div>
            <div class="header-stats">
                <div class="stat-item">
                    <span class="stat-number">{{ $inscriptions->total() }}</span>
                    <span class="stat-label">Total inscriptions</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Table -->
    <div class="data-table-container">
        @if($inscriptions->count() > 0)
            <div class="table-wrapper">
                <table class="modern-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom & Prénom</th>
                            <th>Contact</th>
                            <th>Entreprise / Fonction</th>
                            <th>Pack</th>
                            <th>Destinations</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inscriptions as $inscription)
                            <tr class="table-row">
                                <td class="cell-id">#{{ $inscription->id }}</td>
                                <td class="cell-name">
                                    <div class="name-container">
                                        <div class="avatar">
                                            <i class="material-icons">person</i>
                                        </div>
                                        <div class="name-info">
                                            <span class="name">{{ $inscription->nom_prenom }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cell-contact">
                                    <div class="contact-info">
                                        <a href="mailto:{{ $inscription->email }}" class="email-link">{{ $inscription->email }}</a>
                                        <span class="phone">{{ $inscription->telephone }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="name-info">
                                        <span class="name">{{ $inscription->entreprise ?? 'N/A' }}</span>
                                        <span class="subtitle">{{ $inscription->fonction ?? 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="statut-badge">{{ $inscription->pack_choisi }}</span>
                                </td>
                                <td class="cell-destinations">
                                    {{ implode(', ', $inscription->destinations) }}
                                </td>
                                <td class="cell-date">
                                    <div class="date-container">
                                        <span class="date">{{ $inscription->created_at->format('d/m/Y') }}</span>
                                        <span class="time">{{ $inscription->created_at->format('H:i') }}</span>
                                    </div>
                                </td>
                                <td class="cell-actions">
                                    <div class="actions-group">
                                        <a href="{{ route('admin.rencontre-inscriptions.show', $inscription->id) }}" class="action-btn view" title="Voir les détails">
                                            <i class="material-icons">visibility</i>
                                        </a>
                                        <a href="{{ route('admin.rencontre-inscriptions.edit', $inscription->id) }}" class="action-btn edit" title="Modifier">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <form action="{{ route('admin.rencontre-inscriptions.destroy', $inscription->id) }}" method="POST" style="display: inline;" class="delete-form" data-item="inscription">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="action-btn delete" title="Supprimer">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination-container">
                {{ $inscriptions->links() }}
            </div>
        @else
            <div class="empty-state">
                <div class="empty-icon">
                    <i class="material-icons">how_to_reg</i>
                </div>
                <h3>Aucune inscription</h3>
                <p>Aucune inscription pour les Rencontres 2026 n'a été reçue pour le moment.</p>
            </div>
        @endif
    </div>
</div>

<style>
/* Using some of the existing modern admin styles from the other page */
.modern-admin-page{padding:2rem;background:#f8fafc;min-height:100vh}.page-header{background:white;border-radius:16px;padding:2rem;margin-bottom:2rem;box-shadow:0 4px 6px rgba(0,0,0,0.05);border:1px solid #e2e8f0}.header-content{display:flex;justify-content:space-between;align-items:center}.page-title{display:flex;align-items:center;gap:.75rem;font-size:2rem;font-weight:700;color:#1a202c;margin:0 0 .5rem 0}.page-title i{color:#4f46e5;font-size:2.2rem}.page-subtitle{color:#64748b;font-size:1.1rem;margin:0}.header-stats{display:flex;gap:2rem}.stat-item{text-align:center}.stat-number{display:block;font-size:2rem;font-weight:700;color:#4f46e5}.stat-label{display:block;font-size:.9rem;color:#64748b;margin-top:.25rem}.data-table-container{background:white;border-radius:16px;box-shadow:0 4px 6px rgba(0,0,0,0.05);border:1px solid #e2e8f0;overflow:hidden}.table-wrapper{overflow-x:auto}.modern-table{width:100%;border-collapse:collapse}.modern-table thead{background:#f8fafc}.modern-table th{padding:1rem;text-align:left;font-weight:600;color:#374151;font-size:.875rem;border-bottom:1px solid #e5e7eb}.modern-table td{padding:1rem;border-bottom:1px solid #f3f4f6;vertical-align:middle}.table-row:hover{background:#f8fafc}.cell-id{font-weight:600;color:#6b7280;font-size:.875rem}.name-container{display:flex;align-items:center;gap:.75rem}.avatar{width:40px;height:40px;border-radius:50%;background:#4f46e5;display:flex;align-items:center;justify-content:center;color:white;font-size:18px}.name{font-weight:600;color:#1f2937}.subtitle{font-size:.75rem;color:#6b7280;display:block;margin-top:.1rem}.contact-info{display:flex;flex-direction:column}.email-link{color:#2563eb;text-decoration:none}.email-link:hover{text-decoration:underline}.phone{font-size:.8rem;color:#6b7280}.statut-badge{background:#eef2ff;color:#4338ca;padding:.25rem .75rem;border-radius:20px;font-size:.8rem;font-weight:500;text-transform:capitalize}.date-container{display:flex;flex-direction:column}.date{font-weight:500;color:#374151}.time{font-size:.8rem;color:#6b7280}.actions-group{display:flex;gap:.5rem}.action-btn{width:36px;height:36px;border-radius:8px;border:none;display:flex;align-items:center;justify-content:center;cursor:pointer;transition:all .2s ease;text-decoration:none}.action-btn.delete{background:#fef2f2;color:#dc2626}.action-btn.delete:hover{background:#fee2e2;transform:scale(1.05)}.empty-state{text-align:center;padding:4rem 2rem;color:#6b7280}.empty-icon{font-size:4rem;margin-bottom:1rem;opacity:.5}.empty-state h3{font-size:1.5rem;font-weight:600;margin:0 0 1rem 0;color:#374151}.pagination-container{padding:1.5rem;border-top:1px solid #e5e7eb}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteForms = document.querySelectorAll('.delete-form');
    deleteForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            if (confirm('Êtes-vous sûr de vouloir supprimer cette inscription ?')) {
                this.submit();
            }
        });
    });
});
</script>

@endsection
