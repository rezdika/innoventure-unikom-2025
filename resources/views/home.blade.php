@extends('layouts.app')

@section('title', 'Home - Innoventure Unikom 2025')
@section('description', 'Kompetisi inovasi dan kewirausahaan terbesar di Universitas Komputer Indonesia. Daftar sekarang!')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background-image: url('{{ asset('image/banner.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; min-height: 100vh;">
    <div class="hero-overlay" style="background: linear-gradient(135deg, rgba(15, 23, 42, 0.85), rgba(30, 41, 59, 0.75)); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
    
    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                <div class="hero-content">
                    <div class="mb-4">
                        <span class="badge bg-white bg-opacity-20 text-white px-4 py-3 rounded-pill mb-4 backdrop-blur">
                            <i class="fas fa-calendar-alt me-2"></i>18-30 Agustus 2025
                        </span>
                    </div>
                    
                    <h1 class="display-2 fw-black mb-4 text-white" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif; text-shadow: 2px 4px 8px rgba(0,0,0,0.5); letter-spacing: -0.02em;">
                        Innoventure
                        <span class="d-block" style="background: linear-gradient(135deg, #fbbf24, #f59e0b); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; text-shadow: none;">
                            Unikom 2025
                        </span>
                    </h1>
                    
                    <p class="lead mb-5 text-white" style="font-family: 'Inter', sans-serif; font-weight: 400; text-shadow: 1px 2px 4px rgba(0,0,0,0.4); line-height: 1.6; opacity: 0.95;">
                        Kompetisi teknologi dan kreativitas terbesar untuk siswa SMA/SMK dan mahasiswa. 
                        4 kategori lomba dengan total hadiah <strong style="background: linear-gradient(135deg, #fbbf24, #f59e0b); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">10 juta rupiah</strong>.
                    </p>
                    
                    <div class="d-flex flex-column flex-sm-row gap-3 mb-5">
                        <a href="{{ route('registration') }}" class="btn btn-warning btn-lg px-5 py-3 fw-bold">
                            <i class="fas fa-rocket me-2"></i> Daftar Sekarang
                        </a>
                        <a href="{{ route('competitions') }}" class="btn btn-outline-light btn-lg px-5 py-3 fw-bold">
                            <i class="fas fa-trophy me-2"></i> Lihat Lomba
                        </a>
                    </div>
                    
                    <div class="d-flex align-items-center gap-4 text-white">
                        <div class="d-flex align-items-center bg-white bg-opacity-10 rounded-pill px-3 py-2">
                            <i class="fas fa-users me-2 text-warning"></i>
                            <span class="small fw-bold">500+ Peserta</span>
                        </div>
                        <div class="d-flex align-items-center bg-white bg-opacity-10 rounded-pill px-3 py-2">
                            <i class="fas fa-trophy me-2 text-warning"></i>
                            <span class="small fw-bold">4 Kategori</span>
                        </div>
                        <div class="d-flex align-items-center bg-white bg-opacity-10 rounded-pill px-3 py-2">
                            <i class="fas fa-gift me-2 text-warning"></i>
                            <span class="small fw-bold">10+ Juta</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <div class="hero-visual position-relative">
                    <div class="bg-white bg-opacity-10 rounded-4 p-5 backdrop-blur">
                        <img src="{{ asset('image/logofull.png') }}" class="img-fluid" style="max-width: 350px; filter: drop-shadow(0 20px 40px rgba(0,0,0,0.3));" alt="Innoventure Unikom 2025">
                    </div>
                    
                    <!-- Floating Elements -->
                    <div class="position-absolute" style="top: 10%; right: 10%; animation: float 3s ease-in-out infinite;">
                        <div class="bg-warning bg-opacity-90 rounded-circle p-3 shadow-lg">
                            <i class="fas fa-code text-white fs-4"></i>
                        </div>
                    </div>
                    
                    <div class="position-absolute" style="bottom: 20%; left: 10%; animation: float 3s ease-in-out infinite 1s;">
                        <div class="bg-success bg-opacity-90 rounded-circle p-3 shadow-lg">
                            <i class="fas fa-gamepad text-white fs-4"></i>
                        </div>
                    </div>
                    
                    <div class="position-absolute" style="top: 30%; left: 5%; animation: float 3s ease-in-out infinite 2s;">
                        <div class="bg-danger bg-opacity-90 rounded-circle p-3 shadow-lg">
                            <i class="fas fa-shield-alt text-white fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="pe-lg-5">
                    <h2 class="display-5 fw-bold text-primary mb-4">
                        Mengapa Innoventure?
                    </h2>
                    <p class="lead text-muted mb-5">
                        Platform terdepan untuk mengasah kemampuan teknologi dan kreativitas mahasiswa Indonesia.
                    </p>
                    
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start">
                                <div class="bg-opacity-10 rounded-circle p-3 me-3 flex-shrink-0">
                                    <i class="fas fa-trophy text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-2">4 Kategori Lomba</h5>
                                    <p class="text-muted small mb-0">Web Dev, Mobile Legends, CTF, dan Desain Logo</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start">
                                <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3 flex-shrink-0">
                                    <i class="fas fa-gift text-success"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-2">10 Juta </h5>
                                    <p class="text-muted small mb-0">Total hadiah untuk semua kategori</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start">
                                <div class="bg-info bg-opacity-10 rounded-circle p-3 me-3 flex-shrink-0">
                                    <i class="fas fa-users text-info"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-2">500+ Peserta</h5>
                                    <p class="text-muted small mb-0">Target peserta dari seluruh Indonesia</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start">
                                <div class="bg-warning bg-opacity-10 rounded-circle p-3 me-3 flex-shrink-0">
                                    <i class="fas fa-certificate text-warning"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-2">Sertifikat Resmi</h5>
                                    <p class="text-muted small mb-0">Dari Universitas Komputer Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="text-center">
                    <div class="position-relative d-inline-block">
                        <div class="bg-primary bg-opacity-5 rounded-4 p-5">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body text-center p-4">
                                            <i class="fas fa-code text-primary fs-2 mb-3"></i>
                                            <h6 class="fw-bold mb-0">Web Dev</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body text-center p-4">
                                            <i class="fas fa-gamepad text-danger fs-2 mb-3"></i>
                                            <h6 class="fw-bold mb-0">Mobile Legends</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body text-center p-4">
                                            <i class="fas fa-shield-alt text-warning fs-2 mb-3"></i>
                                            <h6 class="fw-bold mb-0">CTF</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body text-center p-4">
                                            <i class="fas fa-palette text-success fs-2 mb-3"></i>
                                            <h6 class="fw-bold mb-0">Logo Design</h6>
                                        </div>
                                    </div>
                                </div>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Competition Categories -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold text-primary mb-3">Kategori Kompetisi</h2>
            <p class="lead text-muted text-center">Pilih kategori yang sesuai dengan passion dan keahlianmu</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-anchor-placement="top-bottom">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <div class=" bg-opacity-10 rounded-4 d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-code text-primary fs-2"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3 text-center">Web Development</h5>
                        <p class="text-muted mb-4 text-center">Kompetisi pengembangan website untuk siswa SMA/SMK</p>
                        
                        <div class="text-center mb-3">
                            <span class="badge bg-success rounded-pill px-3 py-2">GRATIS</span>
                            <span class="badge bg-primary rounded-pill px-3 py-2 ms-1">SMA/SMK</span>
                        </div>
                        
                        <ul class="list-unstyled small text-muted">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Tim 3-4 orang</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Submit via GitHub</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Presentasi offline</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-anchor-placement="top-bottom">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <div class="bg-danger bg-opacity-10 rounded-4 d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-gamepad text-danger fs-2"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3 text-center">Mobile Legends</h5>
                        <p class="text-muted mb-4 text-center">Turnamen esports Mobile Legends untuk siswa SMA/SMK</p>
                        
                        <div class="text-center mb-3">
                            <span class="badge bg-warning rounded-pill px-3 py-2">Rp 50K/tim</span>
                            <span class="badge bg-primary rounded-pill px-3 py-2 ms-1">SMA/SMK</span>
                        </div>
                        
                        <ul class="list-unstyled small text-muted">
                            <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>5 pemain + 1 cadangan</li>
                            <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>Online & offline</li>
                            <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>Draft pick mode</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300" data-aos-anchor-placement="top-bottom">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <div class="bg-warning bg-opacity-10 rounded-4 d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-shield-alt text-warning fs-2"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3 text-center">Capture The Flag</h5>
                        <p class="text-muted mb-4 text-center">Kompetisi cybersecurity untuk siswa SMA/SMK</p>
                        
                        <div class="text-center mb-3">
                            <span class="badge bg-warning rounded-pill px-3 py-2">Rp 50K/peserta</span>
                            <span class="badge bg-primary rounded-pill px-3 py-2 ms-1">SMA/SMK</span>
                        </div>
                        
                        <ul class="list-unstyled small text-muted">
                            <li class="mb-2"><i class="fas fa-check text-warning me-2"></i>Kompetisi individu</li>
                            <li class="mb-2"><i class="fas fa-check text-warning me-2"></i>24 jam online</li>
                            <li class="mb-2"><i class="fas fa-check text-warning me-2"></i>Tools legal allowed</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <div class="bg-success bg-opacity-10 rounded-4 d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-palette text-success fs-2"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3 text-center">Sayembara Logo</h5>
                        <p class="text-muted mb-4 text-center">Kompetisi desain logo khusus mahasiswa TI UNIKOM</p>
                        
                        <div class="text-center mb-3">
                            <span class="badge bg-success rounded-pill px-3 py-2">GRATIS</span>
                            <span class="badge bg-info rounded-pill px-3 py-2 ms-1">Mahasiswa TI</span>
                        </div>
                        
                        <ul class="list-unstyled small text-muted">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Kompetisi individu</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Format PNG & PDF</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Voting online</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="{{ route('competitions') }}" class="btn btn-primary btn-lg px-4 py-3">
                <i class="fas fa-arrow-right me-2"></i> Lihat Detail Semua Lomba
            </a>
        </div>
    </div>
</section>

<!-- Timeline Preview -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-5 fw-bold text-primary mb-4">
                    Timeline Kompetisi
                </h2>
                <p class="lead text-muted mb-5">
                    Jangan sampai terlewat! Catat tanggal-tanggal penting ini dan siapkan dirimu untuk kompetisi terbesar tahun ini.
                </p>
                
                <div class="d-flex align-items-center mb-4">
                    <div class=" bg-opacity-10 rounded-circle p-3 me-4">
                        <i class="fas fa-calendar-check text-primary"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Durasi Kompetisi</h6>
                        <p class="text-muted mb-0">18-30 Agustus 2025 (12 hari)</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-success bg-opacity-10 rounded-circle p-3 me-4">
                        <i class="fas fa-users text-success"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Target Peserta</h6>
                        <p class="text-muted mb-0">100 siswa SMA/SMK & mahasiswa</p>
                    </div>
                </div>
                
                <a href="{{ route('timeline') }}" class="btn btn-outline-primary px-4 py-3">
                    <i class="fas fa-arrow-right me-2"></i> Lihat Timeline Lengkap
                </a>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="ps-lg-4">
                    <div class="timeline-mobile">
                        <div class="timeline-item mb-3">
                            <div class="d-flex align-items-start">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0 timeline-icon">
                                    <i class="fas fa-rocket"></i>
                                </div>
                                <div class="timeline-content">
                                    <h6 class="fw-bold mb-1 timeline-title">Opening Ceremony</h6>
                                    <p class="text-muted mb-0 timeline-date">18 Agustus 2025</p>
                                    <small class="text-primary timeline-location">Google Meet</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-item mb-3">
                            <div class="d-flex align-items-start">
                                <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0 timeline-icon">
                                    <i class="fas fa-play"></i>
                                </div>
                                <div class="timeline-content">
                                    <h6 class="fw-bold mb-1 timeline-title">Mulai Kompetisi</h6>
                                    <p class="text-muted mb-0 timeline-date">19 Agustus 2025</p>
                                    <small class="text-info timeline-location">Semua kategori lomba</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-item mb-3">
                            <div class="d-flex align-items-start">
                                <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0 timeline-icon">
                                    <i class="fas fa-flag-checkered"></i>
                                </div>
                                <div class="timeline-content">
                                    <h6 class="fw-bold mb-1 timeline-title">Penutupan Kompetisi</h6>
                                    <p class="text-muted mb-0 timeline-date">26 Agustus 2025</p>
                                    <small class="text-warning timeline-location">Deadline submission</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="d-flex align-items-start">
                                <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0 timeline-icon">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="timeline-content">
                                    <h6 class="fw-bold mb-1 timeline-title">Grand Final & Awarding</h6>
                                    <p class="text-muted mb-0 timeline-date">30 Agustus 2025</p>
                                    <small class="text-success timeline-location">UNIKOM Campus</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->;
 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0f172a" fill-opacity="1" d="M0,320L0,128L130.9,128L130.9,160L261.8,160L261.8,192L392.7,192L392.7,128L523.6,128L523.6,192L654.5,192L654.5,224L785.5,224L785.5,64L916.4,64L916.4,64L1047.3,64L1047.3,256L1178.2,256L1178.2,224L1309.1,224L1309.1,96L1440,96L1440,320L1309.1,320L1309.1,320L1178.2,320L1178.2,320L1047.3,320L1047.3,320L916.4,320L916.4,320L785.5,320L785.5,320L654.5,320L654.5,320L523.6,320L523.6,320L392.7,320L392.7,320L261.8,320L261.8,320L130.9,320L130.9,320L0,320L0,320Z"></path></svg>
<section class="section-padding bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-5 fw-bold mb-4">
                    Siap Menjadi Bagian dari Innoventure?
                </h2>
                <p class="lead mb-5 opacity-90">
                    Bergabunglah dengan ratusan siswa SMA/SMK dan mahasiswa terbaik Indonesia. 
                    Tunjukkan kemampuan terbaikmu dan raih hadiah jutaan rupiah!
                </p>
                
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <a href="{{ route('registration') }}" class="btn btn-light btn-lg px-4 py-3">
                        <i class="fas fa-user-plus me-2"></i> Daftar Sekarang
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-4 py-3">
                        <i class="fas fa-envelope me-2"></i> Hubungi Kami
                    </a>
                </div>
            </div>
            
            <div class="col-lg-6 text-center" data-aos="fade-left">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="bg-white bg-opacity-10 rounded-4 p-4">
                            <i class="fas fa-trophy fs-1 mb-3 text-warning"></i>
                            <h5 class="fw-bold">4 Kategori</h5>
                            <p class="mb-0 opacity-75 text-center">Lomba Menarik</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-white bg-opacity-10 rounded-4 p-4">
                            <i class="fas fa-gift fs-1 mb-3 text-success"></i>
                            <h5 class="fw-bold">10 Juta</h5>
                            <p class="mb-0 opacity-75 text-center">Total Hadiah</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-white bg-opacity-10 rounded-4 p-4">
                            <i class="fas fa-certificate fs-1 mb-3 text-info"></i>
                            <h5 class="fw-bold">Sertifikat</h5>
                            <p class="mb-0 opacity-75 text-center">Resmi UNIKOM</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-white bg-opacity-10 rounded-4 p-4">
                            <i class="fas fa-medal fs-1 mb-3 text-warning"></i>
                            <h5 class="fw-bold">Piala & Medali</h5>
                            <p class="mb-0 opacity-75 text-center">Untuk Juara</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection