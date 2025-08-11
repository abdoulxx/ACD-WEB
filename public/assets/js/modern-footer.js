/**
 * ===============================================
 * MODERN FOOTER JAVASCRIPT - ACD Corporate Services
 * ===============================================
 * Gestion du bouton scroll-to-top et animations
 * ===============================================
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // ===== SCROLL TO TOP FUNCTIONALITY =====
    const scrollToTopBtn = document.getElementById('scrollToTop');
    
    if (scrollToTopBtn) {
        // Afficher/masquer le bouton selon la position de scroll
        function toggleScrollButton() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        }
        
        // Smooth scroll vers le haut
        function scrollToTop(e) {
            e.preventDefault();
            
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
            
            // Alternative pour les navigateurs plus anciens
            if (!window.CSS || !CSS.supports('scroll-behavior', 'smooth')) {
                const scrollStep = -window.scrollY / (500 / 15);
                const scrollInterval = setInterval(function() {
                    if (window.scrollY !== 0) {
                        window.scrollBy(0, scrollStep);
                    } else {
                        clearInterval(scrollInterval);
                    }
                }, 15);
            }
        }
        
        // Event listeners
        window.addEventListener('scroll', toggleScrollButton);
        scrollToTopBtn.addEventListener('click', scrollToTop);
        
        // Support clavier
        scrollToTopBtn.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                scrollToTop(e);
            }
        });
    }
    
    // ===== FOOTER ANIMATIONS =====
    function animateFooterElements() {
        const footerElements = document.querySelectorAll('.modern-footer-acd .footer-content > div');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 150);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        
        footerElements.forEach((element) => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(element);
        });
    }
    
    // ===== SOCIAL LINKS ANIMATIONS =====
    function initSocialLinksAnimations() {
        const socialLinks = document.querySelectorAll('.social-links .footer-link');
        
        socialLinks.forEach((link) => {
            link.addEventListener('mouseenter', function() {
                const icon = this.querySelector('i');
                if (icon) {
                    icon.style.transform = 'scale(1.2) rotate(360deg)';
                }
            });
            
            link.addEventListener('mouseleave', function() {
                const icon = this.querySelector('i');
                if (icon) {
                    icon.style.transform = 'scale(1) rotate(0deg)';
                }
            });
        });
    }
    
    // ===== EMAIL PROTECTION =====
    function protectEmailLinks() {
        const emailLinks = document.querySelectorAll('a[href^="mailto:"]');
        
        emailLinks.forEach((link) => {
            link.addEventListener('click', function(e) {
                // Ajouter une petite protection contre les bots
                const email = this.href.replace('mailto:', '');
                if (email.includes('@') && email.includes('.')) {
                    return true; // Email valide, continuer
                } else {
                    e.preventDefault();
                    console.warn('Email invalide détecté');
                    return false;
                }
            });
        });
    }
    
    // ===== FOOTER PARALLAX EFFECT =====
    function initFooterParallax() {
        const footer = document.querySelector('.modern-footer-acd');
        
        if (footer && window.matchMedia('(min-width: 992px)').matches) {
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const footerTop = footer.offsetTop;
                const windowHeight = window.innerHeight;
                
                if (scrolled + windowHeight > footerTop) {
                    const parallaxSpeed = 0.5;
                    const yPos = -(scrolled - footerTop) * parallaxSpeed;
                    footer.style.transform = `translateY(${yPos}px)`;
                }
            });
        }
    }
    
    // ===== RESPONSIVE UTILITIES =====
    function handleResponsiveChanges() {
        let currentBreakpoint = getCurrentBreakpoint();
        
        window.addEventListener('resize', function() {
            const newBreakpoint = getCurrentBreakpoint();
            
            if (newBreakpoint !== currentBreakpoint) {
                currentBreakpoint = newBreakpoint;
                
                // Réinitialiser les animations pour le nouveau breakpoint
                if (currentBreakpoint === 'mobile') {
                    // Mode mobile
                    document.querySelectorAll('.footer-content > div').forEach((el) => {
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    });
                } else {
                    // Mode desktop
                    animateFooterElements();
                }
            }
        });
    }
    
    function getCurrentBreakpoint() {
        if (window.innerWidth < 768) return 'mobile';
        if (window.innerWidth < 992) return 'tablet';
        return 'desktop';
    }
    
    // ===== ACCESSIBILITY IMPROVEMENTS =====
    function improveAccessibility() {
        // Ajouter des labels aria pour les liens sociaux
        const socialLinks = document.querySelectorAll('.social-links .footer-link');
        socialLinks.forEach((link) => {
            const text = link.textContent.trim();
            if (!link.getAttribute('aria-label')) {
                link.setAttribute('aria-label', `Visitez notre page ${text}`);
            }
        });
        
        // Améliorer le bouton scroll-to-top
        if (scrollToTopBtn) {
            scrollToTopBtn.setAttribute('aria-label', 'Retour en haut de la page');
            scrollToTopBtn.setAttribute('role', 'button');
            scrollToTopBtn.setAttribute('tabindex', '0');
        }
    }
    
    // ===== PERFORMANCE OPTIMIZATION =====
    let scrollTimeout;
    function optimizeScrollEvents() {
        const originalScrollHandler = window.onscroll;
        
        window.addEventListener('scroll', function() {
            if (scrollTimeout) {
                clearTimeout(scrollTimeout);
            }
            
            scrollTimeout = setTimeout(() => {
                if (originalScrollHandler) {
                    originalScrollHandler();
                }
            }, 16); // ~60fps
        });
    }
    
    // ===== INITIALIZATION =====
    function initFooter() {
        console.log('🚀 Initialisation du footer moderne ACD');
        
        // Initialiser toutes les fonctionnalités
        animateFooterElements();
        initSocialLinksAnimations();
        protectEmailLinks();
        initFooterParallax();
        handleResponsiveChanges();
        improveAccessibility();
        optimizeScrollEvents();
        
        console.log('✅ Footer moderne initialisé avec succès');
    }
    
    // Lancer l'initialisation
    initFooter();
    
    // ===== PUBLIC API =====
    window.ModernFooter = {
        scrollToTop: function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        },
        
        refreshAnimations: function() {
            animateFooterElements();
        },
        
        version: '1.0.0'
    };
    
});

// ===== FALLBACK POUR NAVIGATEURS ANCIENS =====
if (!window.IntersectionObserver) {
    // Polyfill simple pour les navigateurs plus anciens
    window.IntersectionObserver = function(callback) {
        return {
            observe: function(element) {
                callback([{ isIntersecting: true, target: element }]);
            }
        };
    };
}
