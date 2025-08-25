<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Innoventure Unikom 2025')</title>
    <meta name="description" content="@yield('description', 'Kompetisi inovasi dan kewirausahaan terbesar di Universitas Komputer Indonesia')">
    
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    
    @stack('styles')
    
    <style>
        :root {
            --primary-dark: #0f172a;
            --primary-gray: #1e293b;
            --secondary-gray: #334155;
            --light-gray: #64748b;
            --accent-blue: #3b82f6;
            --accent-purple: #8b5cf6;
            --text-light: #f8fafc;
            --text-muted: #94a3b8;
            --bg-light: #f8fafc;
            --bg-dark: #0f172a;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body { 
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: var(--primary-gray);
            background: var(--bg-light);
            overflow-x: hidden;
        }
        
        .navbar {
            backdrop-filter: blur(20px);
            background: rgba(248, 250, 252, 0.8) !important;
            border-bottom: 1px solid rgba(148, 163, 184, 0.1);
            transition: all 0.3s ease;
        }
        
        .navbar-brand { 
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-dark) !important;
            letter-spacing: -0.025em;
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--secondary-gray) !important;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-link:hover {
            color: var(--accent-blue) !important;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--accent-blue);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .hero-section { 
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-gray) 50%, var(--secondary-gray) 100%);
            color: var(--text-light);
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="0.5" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }
        
        .card { 
            border: none;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(148, 163, 184, 0.1);
        }
        
        .card:hover { 
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            background: rgba(255, 255, 255, 0.95);
        }
        
        .btn {
            font-weight: 600;
            border-radius: 12px;
            padding: 12px 24px;
            transition: all 0.3s ease;
            border: none;
            font-size: 0.95rem;
            letter-spacing: -0.025em;
        }
        
        .btn-primary { 
            background: var(--accent-blue);
            color: white;
            box-shadow: 0 4px 14px 0 rgba(59, 130, 246, 0.4);
        }
        
        .btn-primary:hover { 
            background: #2563eb;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px 0 rgba(59, 130, 246, 0.5);
        }
        
        .btn-outline-primary {
            border: 2px solid var(--accent-blue);
            color: var(--accent-blue);
            background: transparent;
        }
        
        .btn-outline-primary:hover {
            background: var(--accent-blue);
            color: white;
            transform: translateY(-2px);
        }
        
        .section-padding { 
            padding: 120px 0; 
        }
        
        .text-primary { 
            color: var(--primary-dark) !important; 
        }
        
        .bg-primary { 
            background: var(--primary-dark) !important; 
        }
        
        .display-1, .display-2, .display-3, .display-4, .display-5 {
            font-weight: 800;
            letter-spacing: -0.05em;
            line-height: 1.1;
        }
        
        .lead {
            font-size: 1.25rem;
            font-weight: 400;
            color: var(--text-muted);
        }
        
        .timeline-item { 
            border-left: 3px solid var(--accent-blue); 
            padding-left: 24px; 
            margin-bottom: 32px;
            position: relative;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -7px;
            top: 8px;
            width: 12px;
            height: 12px;
            background: var(--accent-blue);
            border-radius: 50%;
            border: 3px solid var(--bg-light);
        }
        
        @media (max-width: 768px) {
            .section-padding {
                padding: 80px 0;
            }
            
            .hero-section {
                min-height: 80vh;
            }
            
            .display-4 {
                font-size: 2.5rem;
            }
            
            /* Mobile Timeline Responsive */
            .timeline-mobile {
                padding: 0 10px;
            }
            
            .timeline-icon {
                width: 40px !important;
                height: 40px !important;
                font-size: 0.9rem;
            }
            
            .timeline-content {
                flex: 1;
                min-width: 0;
            }
            
            .timeline-title {
                font-size: 0.95rem;
                line-height: 1.3;
            }
            
            .timeline-date {
                font-size: 0.85rem;
                margin-bottom: 0.25rem !important;
            }
            
            .timeline-location {
                font-size: 0.75rem;
                display: block;
                margin-top: 2px;
            }
            
            .timeline-item {
                margin-bottom: 1rem !important;
            }
        }
        
        @media (max-width: 576px) {
            .timeline-icon {
                width: 36px !important;
                height: 36px !important;
                font-size: 0.8rem;
            }
            
            .timeline-title {
                font-size: 0.9rem;
            }
            
            .timeline-date {
                font-size: 0.8rem;
            }
            
            .timeline-location {
                font-size: 0.7rem;
            }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
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
        

    </script>
    
    @stack('scripts')
</body>
</html>