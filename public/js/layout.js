// Layout JavaScript - Innoventure Unikom 2025

// Custom AOS configuration for repeating animations
AOS.init({
    duration: 500,
    easing: 'ease-out-cubic',
    once: false,
    mirror: true,
    offset: 80,
    delay: 0,
    anchorPlacement: 'top-bottom'
});

// Enhanced scroll listener for better animation control
let ticking = false;

function updateAnimations() {
    const elements = document.querySelectorAll('[data-aos]');
    const windowHeight = window.innerHeight;
    const scrollTop = window.pageYOffset;
    
    elements.forEach(element => {
        const elementTop = element.offsetTop;
        const elementHeight = element.offsetHeight;
        const elementBottom = elementTop + elementHeight;
        
        const isInViewport = (elementBottom >= scrollTop) && (elementTop <= scrollTop + windowHeight);
        
        if (isInViewport) {
            element.classList.add('aos-animate');
        } else {
            element.classList.remove('aos-animate');
        }
    });
    
    ticking = false;
}

function requestTick() {
    if (!ticking) {
        requestAnimationFrame(updateAnimations);
        ticking = true;
    }
}

window.addEventListener('scroll', requestTick);
updateAnimations();

// Add floating animation keyframes
const style = document.createElement('style');
style.textContent = `
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    
    .btn-light {
        color: var(--primary-dark) !important;
        font-weight: 600;
    }
    
    .btn-light:hover {
        color: var(--primary-dark) !important;
        transform: translateY(-2px);
    }
`;
document.head.appendChild(style);

// Splash screen animation
const splashStyle = document.createElement('style');
splashStyle.textContent = `
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-20px);
        }
        60% {
            transform: translateY(-10px);
        }
    }
    
    @keyframes dotBounce {
        0%, 80%, 100% {
            transform: scale(0);
        }
        40% {
            transform: scale(1);
        }
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
    
    #splash-screen h2, #splash-screen p {
        animation: fadeInUp 0.8s ease-out;
    }
    
    #splash-screen p {
        animation-delay: 0.2s;
    }
`;
document.head.appendChild(splashStyle);

// Splash screen handler - only show on first visit
window.addEventListener('load', function() {
    const splashScreen = document.getElementById('splash-screen');
    const hasVisited = sessionStorage.getItem('hasVisited');
    
    if (hasVisited) {
        // Hide splash immediately if already visited
        if (splashScreen) {
            splashScreen.style.display = 'none';
        }
    } else {
        // Show splash for first visit
        sessionStorage.setItem('hasVisited', 'true');
        setTimeout(function() {
            if (splashScreen) {
                splashScreen.style.opacity = '0';
                setTimeout(function() {
                    splashScreen.style.display = 'none';
                }, 500);
            }
        }, 1500);
    }
});

// Enhanced interactions
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(248, 250, 252, 0.95)';
                navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
            } else {
                navbar.style.background = 'rgba(248, 250, 252, 0.8)';
                navbar.style.boxShadow = 'none';
            }
        });
    }
    
    // Enhanced card hover effects
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-8px)';
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
        });
    });
    
    // Initial animation call
    updateAnimations();
    
    // Button hover effects
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            btn.style.transform = 'translateY(-2px)';
        });
        
        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translateY(0)';
        });
    });
});