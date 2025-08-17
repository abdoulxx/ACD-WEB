// Système de chargement progressif des nominees
document.addEventListener('DOMContentLoaded', function() {
    // Déterminer le nombre de cartes par ligne selon la taille d'écran
    function getNomineesPerLine() {
        const width = window.innerWidth;
        if (width >= 992) return 6; // Desktop: 6 cartes (col-lg-2)
        if (width >= 768) return 3; // Tablette: 3 cartes (col-md-4) 
        return 2; // Mobile: 2 cartes (col-6)
    }
    
    const nomineesPerLine = getNomineesPerLine();
    const visibleLines = 2; // Afficher seulement les 2 premières lignes initialement
    
    // Masquer les nominees après les lignes visibles initiales
    const nomineeDivs = document.querySelectorAll('.nominees-grid .col-lg-2');
    const initialVisible = visibleLines * nomineesPerLine;
    
    for (let i = initialVisible; i < nomineeDivs.length; i++) {
        nomineeDivs[i].style.display = 'none';
        nomineeDivs[i].classList.add('hidden-nominee');
    }
    
    // Créer et insérer le bouton "Voir plus"
    createShowMoreButton();
    
    function createShowMoreButton() {
        const nomineesGrid = document.querySelector('.nominees-grid');
        const container = nomineesGrid.parentElement;
        
        // Calculer le nombre de nominees cachées
        const hiddenNominees = document.querySelectorAll('.hidden-nominee').length;
        
        if (hiddenNominees > 0) {
            const buttonContainer = document.createElement('div');
            buttonContainer.className = 'row mt-4';
            buttonContainer.innerHTML = `
                <div class="col-12 text-center">
                    <button id="showMoreBtn" class="btn btn-outline-primary px-4 py-2" style="border: 2px solid var(--impact-primary); background: transparent; border-radius: 25px; transition: all 0.3s ease;">
                        <i class="fas fa-plus me-2"></i>Voir plus de nominees (${hiddenNominees})
                    </button>
                    <p id="allShownText" class="mt-3 text-muted" style="display: none;">
                        <i class="fas fa-check-circle text-success me-2"></i>Toutes les nominees sont maintenant affichées
                    </p>
                </div>
            `;
            
            container.appendChild(buttonContainer);
            
            // Ajouter l'événement click
            const showMoreBtn = document.getElementById('showMoreBtn');
            showMoreBtn.addEventListener('click', showMoreNominees);
            
            // Ajouter les styles hover
            const style = document.createElement('style');
            style.textContent = `
                #showMoreBtn:hover {
                    background: var(--impact-primary) !important;
                    color: white !important;
                    transform: translateY(-2px);
                    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
                }
                .nominee-card {
                    transition: all 0.3s ease;
                }
                .fade-in {
                    animation: fadeInUp 0.6s ease forwards;
                }
                @keyframes fadeInUp {
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
    
    function showMoreNominees() {
        const hiddenNominees = document.querySelectorAll('.hidden-nominee');
        const currentNomineesPerLine = getNomineesPerLine(); // Recalculer pour la taille actuelle
        const nomineesToShow = Math.min(currentNomineesPerLine, hiddenNominees.length);
        
        // Afficher les prochaines nominees selon la taille d'écran
        for (let i = 0; i < nomineesToShow; i++) {
            const nominee = hiddenNominees[i];
            nominee.style.display = 'block';
            nominee.classList.remove('hidden-nominee');
            nominee.classList.add('fade-in');
            
            // Animation échelonnée
            setTimeout(() => {
                nominee.style.opacity = '1';
            }, i * 100);
        }
        
        // Mettre à jour le bouton
        updateShowMoreButton();
    }
    
    function updateShowMoreButton() {
        const showMoreBtn = document.getElementById('showMoreBtn');
        const allShownText = document.getElementById('allShownText');
        const remainingHidden = document.querySelectorAll('.hidden-nominee').length;
        const currentNomineesPerLine = getNomineesPerLine();
        
        if (remainingHidden === 0) {
            // Toutes les nominees sont affichées
            showMoreBtn.style.display = 'none';
            allShownText.style.display = 'block';
        } else {
            // Mettre à jour le texte du bouton selon l'écran
            const buttonText = remainingHidden <= currentNomineesPerLine ? 
                `Voir les dernières nominees (${remainingHidden})` : 
                `Voir plus de nominees (${remainingHidden})`;
            showMoreBtn.innerHTML = `<i class="fas fa-plus me-2"></i>${buttonText}`;
        }
    }
});
