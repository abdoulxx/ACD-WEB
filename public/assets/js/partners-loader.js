// Système de chargement progressif des logos d'entreprises
document.addEventListener('DOMContentLoaded', function() {
    // Déterminer le nombre de cartes par ligne selon la taille d'écran
    function getPartnersPerLine() {
        const width = window.innerWidth;
        if (width >= 1200) return 6; // col-xl-2
        if (width >= 992) return 6;  // col-lg-2
        if (width >= 768) return 4;  // col-md-3
        if (width >= 576) return 3;  // col-sm-4
        return 2; // col-6
    }
    
    const partnersPerLine = getPartnersPerLine();
    const visibleLines = 2; // Afficher seulement les 2 premières lignes initialement
    
    // Masquer les logos après les lignes visibles initiales
    const partnerDivs = document.querySelectorAll('.companies-logos-grid .col-6');
    const initialVisible = visibleLines * partnersPerLine;
    
    for (let i = initialVisible; i < partnerDivs.length; i++) {
        if (partnerDivs[i]) {
            partnerDivs[i].style.display = 'none';
            partnerDivs[i].classList.add('hidden-partner');
        }
    }
    
    // Créer et insérer le bouton "Voir plus"
    createShowMoreButton();
    
    function createShowMoreButton() {
        const partnersGrid = document.querySelector('.companies-logos-grid');
        if (!partnersGrid) return;
        const container = partnersGrid.parentElement;
        
        // Calculer le nombre de logos cachés
        const hiddenPartners = document.querySelectorAll('.hidden-partner').length;
        
        if (hiddenPartners > 0) {
            const buttonContainer = document.createElement('div');
            buttonContainer.className = 'row mt-5';
            buttonContainer.innerHTML = `
                <div class="col-12 text-center">
                    <button id="showMorePartnersBtn" class="btn-modern-outline">
                        <i class="fas fa-building me-2"></i>
                        Découvrir plus d'entreprises (${hiddenPartners})
                    </button>
                    <p id="allPartnersShown" class="mt-3 text-muted" style="display: none;">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        Toutes les entreprises sont maintenant affichées
                    </p>
                </div>
            `;
            
            container.appendChild(buttonContainer);
            
            // Ajouter l'événement click
            const showMoreBtn = document.getElementById('showMorePartnersBtn');
            showMoreBtn.addEventListener('click', showMorePartners);
            
            // Injecter les styles d'animation (si non déjà présents)
            if (!document.getElementById('partners-animation-styles')) {
                const style = document.createElement('style');
                style.id = 'partners-animation-styles';
                style.textContent = `
                    .company-logo-card {
                        transition: all 0.3s ease;
                    }
                    .fade-in-partner {
                        animation: fadeInUpPartner 0.6s ease forwards;
                    }
                    @keyframes fadeInUpPartner {
                        from {
                            opacity: 0;
                            transform: translateY(30px);
                        }
                        to {
                            opacity: 1;
                            transform: translateY(0);
                        }
                    }
                `;
                document.head.appendChild(style);
            }
        }
    }
    
    function showMorePartners() {
        const hiddenPartners = document.querySelectorAll('.hidden-partner');
        const currentPartnersPerLine = getPartnersPerLine(); // Recalculer pour la taille actuelle
        const partnersToShow = Math.min(currentPartnersPerLine * 2, hiddenPartners.length); // Show 2 new rows
        
        // Afficher les prochains logos
        for (let i = 0; i < partnersToShow; i++) {
            const partner = hiddenPartners[i];
            partner.style.display = 'block';
            partner.classList.remove('hidden-partner');
            partner.classList.add('fade-in-partner');
        }
        
        // Mettre à jour le bouton
        updateShowMoreButton();
    }
    
    function updateShowMoreButton() {
        const showMoreBtn = document.getElementById('showMorePartnersBtn');
        const allShownText = document.getElementById('allPartnersShown');
        const remainingHidden = document.querySelectorAll('.hidden-partner').length;
        
        if (remainingHidden === 0) {
            // Tous les logos sont affichés
            showMoreBtn.style.display = 'none';
            allShownText.style.display = 'block';
        } else {
            showMoreBtn.innerHTML = `<i class="fas fa-building me-2"></i>Découvrir plus d'entreprises (${remainingHidden})`;
        }
    }
});