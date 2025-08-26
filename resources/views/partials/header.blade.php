<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('image/logofull.png') }}" alt="Innoventure Unikom 2025" style="height: 40px;" class="me-2">
            <div>
                <strong>Innoventure</strong>
                <small class="d-block text-muted" style="font-size: 0.75rem; line-height: 1;">Unikom 2025</small>
            </div>
        </a>
        
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('competitions') ? 'active' : '' }}" href="{{ route('competitions') }}">Competitions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('timeline') ? 'active' : '' }}" href="{{ route('timeline') }}">Timeline</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}" href="{{ route('faq') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            
            <div class="d-flex align-items-center">
                <a class="btn btn-primary px-4 py-2" href="{{ route('registration') }}">
                    <img src="{{ asset('image/logofull.png') }}" alt="" style="height: 30px;" class="me-2">Daftar
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Spacer untuk fixed navbar -->
<div style="height: 80px;"></div>