@extends('admin.layouts.admin')
@section('title', 'Dashboard')
@section('content')

<div class="dashboard-modern">
    <!-- Quick Stats Cards -->
    <div class="stats-grid">
        <!-- Inscriptions Rencontres 2026 -->
        <div class="stat-card dark">
            <div class="stat-icon">
                <i class="material-icons">how_to_reg</i>
            </div>
            <div class="stat-content">
                <h3 class="stat-number">{{ \App\Models\RencontreInscription2026::count() }}</h3>
                <p class="stat-label">Inscriptions Rencontres 2026</p>
                <div class="stat-trend">
                    <span class="trend-indicator positive">
                        <i class="material-icons">trending_up</i>
                        +{{ \App\Models\RencontreInscription2026::whereDate('created_at', today())->count() }} aujourd'hui
                    </span>
                </div>
            </div>
        </div>

        <!-- Candidatures Prix d'Excellence -->
        <div class="stat-card warning">
            <div class="stat-icon">
                <i class="material-icons">workspace_premium</i>
            </div>
            <div class="stat-content">
                <h3 class="stat-number">{{ \DB::table('candidatures')->count() }}</h3>
                <p class="stat-label">Candidatures Prix</p>
                <div class="stat-trend">
                    <span class="trend-indicator positive">
                        <i class="material-icons">trending_up</i>
                        +{{ \DB::table('candidatures')->whereDate('created_at', '>=', now()->subDays(30))->count() }} ce mois
                    </span>
                </div>
            </div>
        </div>

        <!-- Impact Féminin -->
        <div class="stat-card success">
            <div class="stat-icon">
                <i class="material-icons">female</i>
            </div>
            <div class="stat-content">
                <h3 class="stat-number">{{ \DB::table('impact_feminin_candidatures')->count() }}</h3>
                <p class="stat-label">Candidature Impact Féminin</p>
                <div class="stat-trend">
                    <span class="trend-indicator positive">
                        <i class="material-icons">trending_up</i>
                        +{{ \DB::table('impact_feminin_candidatures')->whereDate('created_at', '>=', now()->subDays(7))->count() }} cette semaine
                    </span>
                </div>
            </div>
        </div>

        <!-- Réservations -->
        <div class="stat-card info">
            <div class="stat-icon">
                <i class="material-icons">event_seat</i>
            </div>
            <div class="stat-content">
                <h3 class="stat-number">{{ \DB::table('reservations')->count() }}</h3>
                <p class="stat-label">Réservations Impact Féminin</p>
                <div class="stat-trend">
                    <span class="trend-indicator positive">
                        <i class="material-icons">schedule</i>
                        {{ \DB::table('reservations')->whereDate('created_at', '>=', now()->subDays(30))->count() }} ce mois
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="content-grid">
        <!-- Recent Activities -->
        <div class="content-card activities-card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="material-icons">timeline</i>
                    Activités Récentes
                </h3>
            </div>
            <div class="card-content">
                @php
                    // Récupérer toutes les activités récentes
                    $recentCandidatures = \DB::table('candidatures')
                        ->select('id', 'nom_entreprise as nom', 'nom_responsable as responsable', 'statut_juridique', 'pays_ville_siege', 'created_at')
                        ->orderBy('created_at', 'desc')
                        ->take(10)
                        ->get()
                        ->map(function($item) {
                            $item->type = 'candidature';
                            $item->titre = 'Nouvelle candidature Prix d\'Excellence';
                            $item->description = $item->nom . ' par ' . $item->responsable;
                            $item->meta1 = $item->statut_juridique;
                            $item->meta2 = $item->pays_ville_siege;
                            $item->route = route('admin.candidatures.show', $item->id);
                            return $item;
                        });
                    
                    $recentImpactFeminin = \DB::table('impact_feminin_candidatures')
                        ->select('id', 'nom', 'prenom', 'societe', 'poste', 'prix_choisi', 'created_at')
                        ->orderBy('created_at', 'desc')
                        ->take(10)
                        ->get()
                        ->map(function($item) {
                            $item->type = 'impact-feminin';
                            $item->titre = 'Nouvelle candidature Impact Féminin';
                            $item->description = $item->nom . ' ' . $item->prenom . ' de ' . $item->societe;
                            $item->meta1 = $item->poste;
                            $item->meta2 = 'Prix: ' . $item->prix_choisi;
                            $item->meta2_class = 'prix';
                            $item->route = route('admin.impact-feminin.show', $item->id);
                            return $item;
                        });
                    
                    $recentReservations = \DB::table('reservations')
                        ->select('id', 'nom', 'prenom', 'societe', 'poste', 'type_reservation', 'created_at')
                        ->orderBy('created_at', 'desc')
                        ->take(10)
                        ->get()
                        ->map(function($item) {
                            $item->type = 'reservation';
                            $item->titre = 'Nouvelle réservation';
                            $item->description = $item->nom . ' ' . $item->prenom . ' de ' . $item->societe;
                            $item->meta1 = $item->poste;
                            $item->meta2 = $item->type_reservation;
                            $item->meta2_class = 'type';
                            $item->route = route('admin.reservations.show', $item->id);
                            return $item;
                        });

                    $recentRencontres = \App\Models\RencontreInscription2026::select('id', 'nom_prenom', 'entreprise', 'pack_choisi', 'destinations', 'created_at')
                        ->orderBy('created_at', 'desc')
                        ->take(10)
                        ->get()
                        ->map(function($item) {
                            $item->type = 'rencontre';
                            $item->titre = 'Nouvelle inscription Rencontre 2026';
                            $item->description = $item->nom_prenom . (' de ' . $item->entreprise ?? '');
                            $item->meta1 = 'Pack: ' . $item->pack_choisi;
                            $item->meta2 = count($item->destinations) . ' ' . \Illuminate\Support\Str::plural('destination', count($item->destinations));
                            $item->meta2_class = 'destinations';
                            $item->route = route('admin.rencontre-inscriptions.show', $item->id);
                            return $item;
                        });
                    
                    // Combiner toutes les activités et trier par date décroissante
                    $allActivities = collect()
                        ->merge($recentCandidatures)
                        ->merge($recentImpactFeminin)
                        ->merge($recentReservations)
                        ->merge($recentRencontres)
                        ->sortByDesc('created_at')
                        ->take(15); // Limiter à 15 activités les plus récentes
                @endphp
                
                <div class="activities-list">
                    @foreach($allActivities as $activity)
                    <div class="activity-item {{ $activity->type }}">
                        <div class="activity-icon">
                            @if($activity->type == 'candidature')
                                <i class="material-icons">workspace_premium</i>
                            @elseif($activity->type == 'impact-feminin')
                                <i class="material-icons">female</i>
                            @elseif($activity->type == 'rencontre')
                                <i class="material-icons">how_to_reg</i>
                            @else
                                <i class="material-icons">event_seat</i>
                            @endif
                        </div>
                        <div class="activity-content">
                            <div class="activity-header">
                                <h4 class="activity-title">{{ $activity->titre }}</h4>
                                <span class="activity-time">{{ \Carbon\Carbon::parse($activity->created_at)->diffForHumans() }}</span>
                            </div>
                            <p class="activity-description">
                                <strong>{{ $activity->description }}</strong>
                            </p>
                            <div class="activity-meta">
                                <span class="meta-item">{{ $activity->meta1 }}</span>
                                <span class="meta-item {{ $activity->meta2_class ?? '' }}">{{ $activity->meta2 }}</span>
                            </div>
                        </div>
                        <div class="activity-actions">
                            <a href="{{ $activity->route }}" class="action-btn">
                                <i class="material-icons">arrow_forward</i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                @if($allActivities->isEmpty())
                    <div class="empty-state">
                        <i class="material-icons">timeline</i>
                        <h4>Aucune activité récente</h4>
                        <p>Les nouvelles activités apparaîtront ici dès leur création.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
.dashboard-modern {
    padding: 0;
    background: #f8fafc;
    min-height: 100vh;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
    margin: 2rem 0 2rem 0;
    padding: 0 2rem;
}

.stat-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    border: 1px solid #e2e8f0;
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.stat-icon {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: white;
}

.stat-card.primary .stat-icon { background: linear-gradient(135deg, #667eea, #764ba2); }
.stat-card.warning .stat-icon { background: linear-gradient(135deg, #f59e0b, #d97706); }
.stat-card.success .stat-icon { background: linear-gradient(135deg, #11998e, #38ef7d); }
.stat-card.info .stat-icon { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
.stat-card.purple .stat-icon { background: linear-gradient(135deg, #8b5cf6, #7c3aed); }
.stat-card.dark .stat-icon { background: linear-gradient(135deg, #374151, #1f2937); }

.stat-number {
    font-size: 2rem;
    font-weight: 700;
    margin: 0;
    color: #1a202c;
}

.stat-label {
    font-size: 0.9rem;
    color: #64748b;
    margin: 0.25rem 0;
}

.trend-indicator {
    display: flex;
    align-items: center;
    gap: 0.25rem;
    font-size: 0.8rem;
    font-weight: 500;
}

.trend-indicator.positive { color: #10b981; }
.trend-indicator.neutral { color: #6b7280; }

.content-grid {
    display: block;
    padding: 0 2rem;
    margin-bottom: 2rem;
}

.content-card {
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

.card-action {
    display: flex;
    align-items: center;
    gap: 0.25rem;
    color: #667eea;
    text-decoration: none;
    font-weight: 500;
    font-size: 0.9rem;
}

.card-content {
    padding: 1.5rem;
}

.messages-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.message-item {
    display: flex;
    gap: 1rem;
    padding: 1rem;
    background: #f8fafc;
    border-radius: 12px;
    transition: all 0.2s ease;
}

.message-item:hover {
    background: #f1f5f9;
}

.message-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #e2e8f0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #64748b;
}

.message-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 0.5rem;
}

.message-name {
    font-size: 0.9rem;
    font-weight: 600;
    margin: 0;
    color: #1a202c;
}

.message-time {
    font-size: 0.8rem;
    color: #64748b;
}

.message-preview {
    font-size: 0.85rem;
    color: #4a5568;
    line-height: 1.4;
    margin: 0 0 0.5rem 0;
}

.message-email {
    font-size: 0.8rem;
    color: #667eea;
}

.empty-state {
    text-align: center;
    padding: 2rem;
    color: #64748b;
}

.empty-state i {
    font-size: 3rem;
    margin-bottom: 1rem;
    opacity: 0.5;
}

.activities-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.activity-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem;
    background: #f8fafc;
    border-radius: 12px;
    border-left: 4px solid #e2e8f0;
    transition: all 0.2s ease;
}

.activity-item:hover {
    background: #f1f5f9;
    transform: translateX(4px);
}

.activity-item.candidature {
    border-left-color: #f59e0b;
}

.activity-item.impact-feminin {
    border-left-color: #11998e;
}

.activity-item.reservation {
    border-left-color: #3b82f6;
}

.activity-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    flex-shrink: 0;
}

.activity-item.candidature .activity-icon {
    background: linear-gradient(135deg, #f59e0b, #d97706);
}

.activity-item.impact-feminin .activity-icon {
    background: linear-gradient(135deg, #11998e, #38ef7d);
}

.activity-item.reservation .activity-icon {
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
}

.activity-item.rencontre .activity-icon {
    background: linear-gradient(135deg, #374151, #1f2937);
}

.activity-content {
    flex: 1;
}

.activity-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 0.5rem;
}

.activity-title {
    font-size: 1rem;
    font-weight: 600;
    color: #1f2937;
    margin: 0;
}

.activity-time {
    font-size: 0.8rem;
    color: #6b7280;
}

.activity-description {
    font-size: 0.9rem;
    color: #4b5563;
    margin: 0 0 0.75rem 0;
    line-height: 1.4;
}

.activity-meta {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.meta-item {
    font-size: 0.75rem;
    color: #6b7280;
    background: #ffffff;
    padding: 0.25rem 0.5rem;
    border-radius: 6px;
    border: 1px solid #e5e7eb;
}

.meta-item.prix {
    background: #f0fdf4;
    color: #16a34a;
    border-color: #bbf7d0;
}

.meta-item.type {
    background: #fef3c7;
    color: #92400e;
    border-color: #fed7aa;
}

.meta-item.destinations {
    background: #f1f5f9;
    color: #475569;
    border-color: #e2e8f0;
}

.activity-actions {
    flex-shrink: 0;
}

.action-btn {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    background: #ffffff;
    border: 1px solid #e5e7eb;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #6b7280;
    text-decoration: none;
    transition: all 0.2s ease;
}

.action-btn:hover {
    background: #f9fafb;
    color: #374151;
    transform: scale(1.05);
}

.actions-grid {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.action-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    border-radius: 12px;
    text-decoration: none;
    color: inherit;
    transition: all 0.2s ease;
    border: 1px solid transparent;
}

.action-item:hover {
    background: #f8fafc;
    border-color: #e2e8f0;
    transform: translateX(4px);
    cursor: pointer;
}

.action-item.logout:hover {
    background: #fef2f2;
    border-color: #fecaca;
    color: #dc2626;
}

.action-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 18px;
}

.action-icon.primary { background: linear-gradient(135deg, #667eea, #764ba2); }
.action-icon.warning { background: linear-gradient(135deg, #f59e0b, #d97706); }
.action-icon.success { background: linear-gradient(135deg, #11998e, #38ef7d); }
.action-icon.info { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
.action-icon.purple { background: linear-gradient(135deg, #8b5cf6, #7c3aed); }
.action-icon.dark { background: linear-gradient(135deg, #374151, #1f2937); }

.action-content h4 {
    margin: 0;
    font-size: 0.9rem;
    font-weight: 600;
    color: #1a202c;
}

.action-content p {
    margin: 0.25rem 0 0 0;
    font-size: 0.8rem;
    color: #64748b;
}

.action-arrow {
    margin-left: auto;
    font-size: 16px;
    color: #cbd5e0;
}

@media (max-width: 768px) {
    .dashboard-modern {
        padding: 1rem;
    }
    
    .content-grid {
        padding: 0 1rem;
    }
    
    .stats-grid {
        padding: 0 1rem;
        grid-template-columns: 1fr;
        margin: 1rem 0;
    }
    
    .activity-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.25rem;
    }
    
    .activity-meta {
        gap: 0.5rem;
    }
    
    .activity-item {
        padding: 1rem;
    }
}
</style>

<script>
function showComingSoon(feature) {
    const message = feature ? `La gestion des "${feature}" sera bientôt disponible !` : 'Cette fonctionnalité sera bientôt disponible !';
    
    // Créer une notification moderne
    const notification = document.createElement('div');
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(102, 126, 234, 0.3);
        z-index: 1000;
        font-weight: 500;
        transform: translateX(400px);
        transition: all 0.3s ease;
        max-width: 350px;
    `;
    
    notification.innerHTML = `
        <div style="display: flex; align-items: center; gap: 0.75rem;">
            <i class="material-icons" style="font-size: 20px;">info</i>
            <span>${message}</span>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Animer l'entrée
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);
    
    // Supprimer après 4 secondes
    setTimeout(() => {
        notification.style.transform = 'translateX(400px)';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 4000);
}
</script>

@endsection