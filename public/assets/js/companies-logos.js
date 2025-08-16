// Système d'affichage moderne des logos d'entreprises nominees
document.addEventListener('DOMContentLoaded', function() {
    // Liste de tous les logos d'entreprises
    const companyLogos = [
        { file: 'afy.png', name: 'A\'FY Immobilier' },
        { file: 'agf.png', name: 'AGF Entreprises' },
        { file: 'antilia.png', name: 'Antilia Immobilier' },
        { file: 'ayana.png', name: 'Ayana Webzine' },
        { file: 'batidecor.png', name: 'Groupe Batidecor' },
        { file: 'binko.png', name: 'Binko et Associés' },
        { file: 'caline.png', name: 'Caaaline Karitesthetic' },
        { file: 'carre.png', name: 'Carré Premium SARL' },
        { file: 'cislo.png', name: 'CISLO' },
        { file: 'corail.png', name: 'Corail Immobilier' },
        { file: 'dbalixpress.png', name: 'Dabali Xpress' },
        { file: 'divina.png', name: 'Divana' },
        { file: 'djolo.png', name: 'Coopérative Djolo' },
        { file: 'etd.png', name: 'ETD' },
        { file: 'farm.png', name: 'Farm Invest' },
        { file: 'faty.png', name: 'Agence Faty Services' },
        { file: 'florence.png', name: 'Centre Florence' },
        { file: 'gfm3.png', name: 'ONG GFM3' },
        { file: 'isis.png', name: 'ISIS Agence' },
        { file: 'konnievenence.png', name: 'Konnievence Productions' },
        { file: 'kovibat.png', name: 'Kovibat' },
        { file: 'kreno.png', name: 'Kreno Consulting' },
        { file: 'lys.png', name: 'Lys de Marie' },
        { file: 'maisondeco.png', name: 'Maison du Décorateur' },
        { file: 'mat.png', name: 'Agence MAT' },
        { file: 'mpa.png', name: 'MPA Cosmetics' },
        { file: 'nadre.png', name: 'Nadre Institut' },
        { file: 'nedje.png', name: 'Nedje Couture' },
        { file: 'nycegroupe.png', name: 'NYCE Groupe' },
        { file: 'ofaci.png', name: 'ONG OFACI' },
        { file: 'ohel.png', name: 'Ohel International' },
        { file: 'okhamare.png', name: 'Okhamar' },
        { file: 'ongbloom.png', name: 'ONG Bloom' },
        { file: 'onyx.png', name: 'Onyx Agence' },
        { file: 'opticbelvue.png', name: 'Optic Bel Vue' },
        { file: 'pfsvci.png', name: 'PFSVCI' },
        { file: 'quickcash.png', name: 'QuickCash' },
        { file: 'rama.png', name: 'Rama Cereal' },
        { file: 'reflet.png', name: 'Reflet Consulting' },
        { file: 'rosebate.png', name: 'Rosebate' },
        { file: 'roseline.png', name: 'Roschesli Création' },
        { file: 'sage.png', name: 'SAGES-CI' },
        { file: 'shadai.png', name: 'El Shaddai Construction' },
        { file: 'sma.png', name: 'SMA BTP' },
        { file: 'socomap.png', name: 'SOCOMAP' },
        { file: 'tepevent.png', name: 'TEP Events' },
        { file: 'tulipe.png', name: 'Tulipe Food' },
        { file: 'vfc.png', name: 'VFC' },
        { file: 'yrissa.png', name: 'Yrissa Immobilier' }
    ];

    // Configuration responsive
    function getLogosPerRow() {
        const width = window.innerWidth;
        if (width >= 1200) return 6; // Extra large screens
        if (width >= 992) return 5;  // Large screens  
        if (width >= 768) return 4;  // Medium screens
        if (width >= 576) return 3;  // Small screens
        return 2; // Extra small screens
    }

    const initialRows = 2; // Afficher 2 rangées initialement
    
    function generateCompanyLogos() {
        const container = document.querySelector('.companies-logos-grid');
        if (!container) return;

        const logosPerRow = getLogosPerRow();
        const initialVisible = initialRows * logosPerRow;

        // Vider le container
        container.innerHTML = '';

        // Générer les logos
        companyLogos.forEach((company, index) => {
            const isHidden = index >= initialVisible;
            const delay = (index % logosPerRow) * 100; // Animation échelonnée par rangée

            const logoDiv = document.createElement('div');
            logoDiv.className = `col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4 ${isHidden ? 'hidden-company' : ''}`;
            
            logoDiv.innerHTML = `
                <div class="company-logo-card" data-aos="zoom-in" data-aos-delay="${delay}">
                    <div class="logo-container">
                        <img src="${window.assetBaseUrl}/assets/images/impact-feminin/logo_entreprise/${company.file}" 
                             alt="${company.name}" 
                             class="company-logo-img"
                             loading="lazy">
                        <div class="logo-overlay">
                            <span class="company-name">${company.name}</span>
                        </div>
                    </div>
                </div>
            `;

            container.appendChild(logoDiv);
        });

        // Ajouter le bouton "Voir plus" si nécessaire
        addShowMoreButton();
    }

    function addShowMoreButton() {
        const section = document.querySelector('.impact-partners-section');
        const hiddenCompanies = document.querySelectorAll('.hidden-company');
        
        if (hiddenCompanies.length > 0) {
            // Supprimer l'ancien bouton s'il existe
            const existingBtn = document.getElementById('showMoreCompaniesBtn');
            if (existingBtn) existingBtn.parentElement.remove();

            const buttonContainer = document.createElement('div');
            buttonContainer.className = 'row mt-5';
            buttonContainer.innerHTML = `
                <div class="col-12 text-center">
                    <button id="showMoreCompaniesBtn" class="btn-modern-outline">
                        <i class="fas fa-building me-2"></i>
                        Découvrir plus d'entreprises (${hiddenCompanies.length})
                    </button>
                    <p id="allCompaniesShown" class="mt-3 text-muted" style="display: none;">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        Toutes les entreprises nominees sont affichées
                    </p>
                </div>
            `;

            section.querySelector('.container').appendChild(buttonContainer);

            // Ajouter l'événement
            document.getElementById('showMoreCompaniesBtn').addEventListener('click', showMoreCompanies);
        }
    }

    function showMoreCompanies() {
        const hiddenCompanies = document.querySelectorAll('.hidden-company');
        const logosPerRow = getLogosPerRow();
        const toShow = Math.min(logosPerRow * 2, hiddenCompanies.length); // Afficher 2 rangées à la fois

        for (let i = 0; i < toShow; i++) {
            const company = hiddenCompanies[i];
            company.classList.remove('hidden-company');
            company.classList.add('fade-in-up');
            
            // Animation échelonnée
            setTimeout(() => {
                company.style.opacity = '1';
                company.style.transform = 'translateY(0)';
            }, i * 50);
        }

        updateShowMoreButton();
    }

    function updateShowMoreButton() {
        const btn = document.getElementById('showMoreCompaniesBtn');
        const allShown = document.getElementById('allCompaniesShown');
        const remaining = document.querySelectorAll('.hidden-company').length;

        if (remaining === 0) {
            btn.style.display = 'none';
            allShown.style.display = 'block';
        } else {
            btn.innerHTML = `
                <i class="fas fa-building me-2"></i>
                ${remaining <= 10 ? 'Voir les dernières' : 'Découvrir plus d\''}entreprises (${remaining})
            `;
        }
    }

    // Initialiser au chargement
    generateCompanyLogos();

    // Régénérer en cas de redimensionnement (debounced)
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            generateCompanyLogos();
            if (typeof AOS !== 'undefined') AOS.refresh();
        }, 250);
    });
});
