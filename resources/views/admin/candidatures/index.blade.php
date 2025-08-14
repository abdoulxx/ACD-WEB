@extends('admin.layouts.admin')
@section('title', 'Candidatures Prix d\'Excellence')
@section('content')

<div class="modern-admin-page">
    <!-- Header Section -->
    <div class="page-header">
        <div class="header-content">
            <div class="header-info">
                <h1 class="page-title">
                    <i class="material-icons">workspace_premium</i>
                    Candidatures Prix d'Excellence
                </h1>
                <p class="page-subtitle">Gestion des candidatures pour le Prix d'Excellence International</p>
            </div>
            <div class="header-stats">
                <div class="stat-item">
                    <span class="stat-number">{{ $candidatures->total() }}</span>
                    <span class="stat-label">Total candidatures</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">{{ \DB::table('candidatures')->whereDate('created_at', '>=', now()->subDays(30))->count() }}</span>
                    <span class="stat-label">Ce mois</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters & Actions -->
    <div class="page-filters">
        <div class="filters-left">
            <div class="search-box">
                <i class="material-icons">search</i>
                <input type="text" placeholder="Rechercher une candidature..." id="searchInput">
            </div>
        </div>
        <div class="filters-right">
            <button class="btn-export" onclick="exportData()">
                <i class="material-icons">download</i>
                Exporter
            </button>
        </div>
    </div>

    <!-- Data Table -->
    <div class="data-table-container">
        @if($candidatures->count() > 0)
            <div class="table-wrapper">
                <table class="modern-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Entreprise</th>
                            <th>Responsable</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Fonction</th>
                            <th>Statut Juridique</th>
                            <th>Pays/Ville</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($candidatures as $candidature)
                            <tr class="table-row">
                                <td class="cell-id">#{{ $candidature->id }}</td>
                                <td class="cell-name">
                                    <div class="name-container">
                                        <div class="avatar">
                                            <i class="material-icons">business</i>
                                        </div>
                                        <div class="name-info">
                                            <span class="name">{{ $candidature->nom_entreprise ?? 'N/A' }}</span>
                                            <span class="subtitle">{{ $candidature->statut_juridique ?? '' }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cell-responsable">
                                    <div class="responsable-info">
                                        <span class="responsable-name">{{ $candidature->nom_responsable ?? 'N/A' }}</span>
                                    </div>
                                </td>
                                <td class="cell-email">
                                    <a href="mailto:{{ $candidature->email_responsable ?? '' }}" class="email-link">
                                        {{ $candidature->email_responsable ?? 'N/A' }}
                                    </a>
                                </td>
                                <td class="cell-phone">{{ $candidature->telephone_responsable ?? 'N/A' }}</td>
                                <td class="cell-fonction">{{ $candidature->fonction_responsable ?? 'N/A' }}</td>
                                <td class="cell-statut">
                                    <span class="statut-badge">{{ $candidature->statut_juridique ?? 'N/A' }}</span>
                                </td>
                                <td class="cell-location">{{ $candidature->pays_ville_siege ?? 'N/A' }}</td>
                                <td class="cell-date">
                                    <div class="date-container">
                                        <span class="date">{{ $candidature->created_at ? \Carbon\Carbon::parse($candidature->created_at)->format('d/m/Y') : 'N/A' }}</span>
                                        <span class="time">{{ $candidature->created_at ? \Carbon\Carbon::parse($candidature->created_at)->format('H:i') : '' }}</span>
                                    </div>
                                </td>
                                <td class="cell-actions">
                                    <div class="actions-group">
                                        <a href="{{ route('admin.candidatures.show', $candidature->id) }}" class="action-btn view" title="Voir les détails">
                                            <i class="material-icons">visibility</i>
                                        </a>
                                        <form action="{{ route('admin.candidatures.destroy', $candidature->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette candidature ?')">
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
                {{ $candidatures->links() }}
            </div>
        @else
            <div class="empty-state">
                <div class="empty-icon">
                    <i class="material-icons">workspace_premium</i>
                </div>
                <h3>Aucune candidature</h3>
                <p>Aucune candidature pour le Prix d'Excellence n'a été reçue pour le moment.</p>
            </div>
        @endif
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
    align-items: center;
}

.page-title {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 2rem;
    font-weight: 700;
    color: #1a202c;
    margin: 0 0 0.5rem 0;
}

.page-title i {
    color: #f59e0b;
    font-size: 2.2rem;
}

.page-subtitle {
    color: #64748b;
    font-size: 1.1rem;
    margin: 0;
}

.header-stats {
    display: flex;
    gap: 2rem;
}

.stat-item {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 2rem;
    font-weight: 700;
    color: #f59e0b;
}

.stat-label {
    display: block;
    font-size: 0.9rem;
    color: #64748b;
    margin-top: 0.25rem;
}

.page-filters {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    gap: 1rem;
}

.search-box {
    position: relative;
    max-width: 400px;
    flex: 1;
}

.search-box i {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: #94a3b8;
}

.search-box input {
    width: 100%;
    padding: 0.75rem 1rem 0.75rem 3rem;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    font-size: 0.9rem;
    background: white;
}

.search-box input:focus {
    outline: none;
    border-color: #f59e0b;
    box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
}

.btn-export {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: linear-gradient(135deg, #f59e0b, #d97706);
    color: white;
    border: none;
    border-radius: 12px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
}

.btn-export:hover {
    transform: translateY(-1px);
    box-shadow: 0 8px 25px rgba(245, 158, 11, 0.3);
}

.data-table-container {
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    border: 1px solid #e2e8f0;
    overflow: hidden;
}

.table-wrapper {
    overflow-x: auto;
}

.modern-table {
    width: 100%;
    border-collapse: collapse;
}

.modern-table thead {
    background: #f8fafc;
}

.modern-table th {
    padding: 1rem;
    text-align: left;
    font-weight: 600;
    color: #374151;
    font-size: 0.875rem;
    border-bottom: 1px solid #e5e7eb;
}

.modern-table td {
    padding: 1rem;
    border-bottom: 1px solid #f3f4f6;
    vertical-align: middle;
}

.table-row:hover {
    background: #f8fafc;
}

.cell-id {
    font-weight: 600;
    color: #6b7280;
    font-size: 0.875rem;
}

.name-container {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #f59e0b;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 18px;
}

.name {
    font-weight: 600;
    color: #1f2937;
}

.subtitle {
    font-size: 0.75rem;
    color: #6b7280;
    display: block;
    margin-top: 0.1rem;
}

.responsable-info {
    display: flex;
    flex-direction: column;
}

.responsable-name {
    font-weight: 500;
    color: #374151;
}

.statut-badge {
    background: #fef3c7;
    color: #92400e;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
    text-transform: uppercase;
}

.email-link {
    color: #2563eb;
    text-decoration: none;
}

.email-link:hover {
    text-decoration: underline;
}

.date-container {
    display: flex;
    flex-direction: column;
}

.date {
    font-weight: 500;
    color: #374151;
}

.time {
    font-size: 0.8rem;
    color: #6b7280;
}

.actions-group {
    display: flex;
    gap: 0.5rem;
}

.action-btn {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease;
    text-decoration: none;
}

.action-btn.view {
    background: #eff6ff;
    color: #2563eb;
}

.action-btn.view:hover {
    background: #dbeafe;
    transform: scale(1.05);
}

.action-btn.delete {
    background: #fef2f2;
    color: #dc2626;
}

.action-btn.delete:hover {
    background: #fee2e2;
    transform: scale(1.05);
}

.empty-state {
    text-align: center;
    padding: 4rem 2rem;
    color: #6b7280;
}

.empty-icon {
    font-size: 4rem;
    margin-bottom: 1rem;
    opacity: 0.5;
}

.empty-state h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin: 0 0 1rem 0;
    color: #374151;
}

.pagination-container {
    padding: 1.5rem;
    border-top: 1px solid #e5e7eb;
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
    
    .page-filters {
        flex-direction: column;
        align-items: stretch;
    }
    
    .header-stats {
        gap: 1rem;
    }
}
</style>

<script>
function exportData() {
    // Fonctionnalité d'export à implémenter
    alert('Fonctionnalité d\'export en cours de développement');
}

// Recherche en temps réel
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const rows = document.querySelectorAll('.table-row');
    
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});
</script>

@endsection
