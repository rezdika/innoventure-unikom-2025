@extends('layouts.app')

@section('title', 'Home - Innoventure Unikom 2025')
@section('description', 'Kompetisi inovasi dan kewirausahaan terbesar di Universitas Komputer Indonesia. Daftar sekarang!')

@section('content')
<!-- Hero Section -->
<section class="hero-section-modern" style="background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.85)), url('{{ asset('image/banner.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100vh; display: flex; align-items: center; position: relative; overflow: hidden;">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <!-- Mobile: Text First -->
            <div class="col-12 d-lg-none order-1 text-center mb-4" data-aos="fade-down" data-aos-delay="200">
                <div class="hero-content-modern">
                    <div class="mb-4">
                        <span class="badge" style="background: linear-gradient(135deg, #3b82f6, #8b5cf6); color: white; padding: 8px 16px; border-radius: 20px; font-weight: 500; font-size: 0.85rem;">
                            <i class="fas fa-calendar-alt me-2"></i>18-30 Agustus 2025
                        </span>
                    </div>
                    
                    <h1 class="hero-title-modern mb-4" style="font-size: 3rem; font-weight: 900; color: #0f172a; line-height: 1.1; letter-spacing: -0.03em; margin-bottom: 24px;">
                        INNOVENTURE
                    </h1>
                    
                    <p class="hero-subtitle mb-4 text-justify" style="font-size: 1.1rem; color: #64748b; line-height: 1.6; text-align: justify;">
                        Kompetisi teknologi dan kreativitas terbesar untuk siswa SMA/SMK dan mahasiswa dengan total hadiah <strong style="color: #3b82f6;">10 juta rupiah</strong>.
                    </p>
                    
                    <div class="hero-cta mb-4">
                        <a href="{{ route('registration') }}" class="btn btn-primary-modern" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8); color: white; padding: 16px 32px; border-radius: 16px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3); transition: all 0.3s ease;">
                            Daftar Sekarang
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Mobile: Logo Second -->
            <div class="col-12 d-lg-none order-2 text-center mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="hero-visual-modern position-relative">
                    <div class="main-visual">
                        <img src="{{ asset('image/logofull.png') }}" class="img-fluid" style="max-width: 280px; filter: drop-shadow(0 10px 25px rgba(0, 0, 0, 0.15));" alt="Innoventure Unikom 2025">
                    </div>
                </div>
            </div>
            
            <!-- Desktop: Original Layout -->
            <div class="col-lg-6 d-none d-lg-block" data-aos="fade-right" data-aos-delay="200">
                <div class="hero-content-modern">
                    <div class="mb-4">
                        <span class="badge" style="background: linear-gradient(135deg, #3b82f6, #8b5cf6); color: white; padding: 8px 16px; border-radius: 20px; font-weight: 500; font-size: 0.85rem;">
                            <i class="fas fa-calendar-alt me-2"></i>18-30 Agustus 2025
                        </span>
                    </div>
                    
                    <h1 class="hero-title-modern mb-4" style="font-size: 4rem; font-weight: 900; color: #0f172a; line-height: 1.1; letter-spacing: -0.03em; margin-bottom: 24px;">
                        INNOVENTURE
                    </h1>
                    
                    <p class="hero-subtitle mb-5" style="font-size: 1.1rem; color: #64748b; line-height: 1.6; max-width: 480px;">
                        Kompetisi teknologi dan kreativitas terbesar untuk siswa SMA/SMK dan mahasiswa dengan total hadiah <strong style="color: #3b82f6;">10 juta rupiah</strong>.
                    </p>
                    
                    <div class="hero-cta mb-5">
                        <a href="{{ route('registration') }}" class="btn btn-primary-modern me-3" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8); color: white; padding: 16px 32px; border-radius: 16px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3); transition: all 0.3s ease;">
                            Daftar Sekarang
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 d-none d-lg-block text-center" data-aos="fade-left" data-aos-delay="400">
                <div class="hero-visual-modern position-relative">
                    <div class="main-visual">
                        <img src="{{ asset('image/logofull.png') }}" class="img-fluid" style="max-width: 350px; filter: drop-shadow(0 10px 25px rgba(0, 0, 0, 0.15));" alt="Innoventure Unikom 2025">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5" style="background: #f8fafc;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3"><span style="color: #000;">Mengapa</span> <span style="color: #007bff;">Innoventure?</span></h2>
            <p class="lead text-center">Platform terdepan untuk mengasah kemampuan teknologi dan kreativitas</p>
        </div>
        
        <div class="row g-4">
            <!-- Row 1 -->
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                    <img src="{{ asset('image/bannercompetition.png') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Programming Competition">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                          
                        </div>
                        <h5 class="fw-bold mb-3 text-dark">Kategori Lomba</h5>
                        <p class="text-muted mb-3">Web Development, Mobile Legends, Capture The Flag, dan Sayembara Logo dengan berbagai tingkat kesulitan</p>
                        <a href="{{ route('competitions') }}" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                  <img src="{{ asset('image/banneraward.png') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Programming Competition">
                     <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success bg-opacity-10 rounded-circle p-2 me-3">
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3 text-dark">Hadiah</h5>
                        <p class="text-muted mb-3">Total hadiah yang akan dibagikan kepada para pemenang dari semua kategori kompetisi yang diselenggarakan</p>
                        <a href="{{ route('competitions') }}" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
            
        
    
            
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                 <img src="{{ asset('image/bannercertificate.png') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Programming Competition">
                     <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-info bg-opacity-10 rounded-circle p-2 me-3">
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3 text-dark">Sertifikat Resmi</h5>
                        <p class="text-muted mb-3">Sertifikat resmi dari Universitas Komputer Indonesia untuk semua peserta yang mengikuti kompetisi</p>
                        <a href="{{ route('about') }}" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
            

            
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card border-0 shadow-sm h-100 overflow-hidden">
                  <img src="{{ asset('image/bannernet.png') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Programming Competition">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-secondary bg-opacity-10 rounded-circle p-2 me-3">
                            </div>
                        </div>
                        <h5 class="fw-bold mb-3 text-dark">Networking</h5>
                        <p class="text-muted mb-3">Kesempatan untuk berkenalan dan membangun jaringan dengan peserta lain dari berbagai daerah</p>
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-sm">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Timeline Preview -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-5 fw-bold mb-4">
                    <span style="color: #000;">Timeline</span> <span style="color: #007bff;">Kompetisi</span>
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

<!-- CTA Section -->
 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0f172a" fill-opacity="1" d="M0,320L0,128L130.9,128L130.9,160L261.8,160L261.8,192L392.7,192L392.7,128L523.6,128L523.6,192L654.5,192L654.5,224L785.5,224L785.5,64L916.4,64L916.4,64L1047.3,64L1047.3,256L1178.2,256L1178.2,224L1309.1,224L1309.1,96L1440,96L1440,320L1309.1,320L1309.1,320L1178.2,320L1178.2,320L1047.3,320L1047.3,320L916.4,320L916.4,320L785.5,320L785.5,320L654.5,320L654.5,320L523.6,320L523.6,320L392.7,320L392.7,320L261.8,320L261.8,320L130.9,320L130.9,320L0,320L0,320Z"></path></svg>
<section class="section-padding bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-5 fw-bold mb-4">
                    <span style="color: #fff;">Siap</span> <span style="color: #fff;">Menjadi</span> <span style="color: #fff;">Bagian</span> <span style="color: #fff;">dari</span> <span style="color: #007bff;">Innoventure?</span>
                </h2>
                <p class="lead mb-5 opacity-90">
                    Bergabunglah dengan ratusan siswa SMA/SMK dan mahasiswa terbaik Indonesia. 
                    Tunjukkan kemampuan terbaikmu dan raih hadiah jutaan rupiah!
                </p>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-lg-center">
                    <a href="{{ route('registration') }}" class="btn btn-light btn-lg px-4 py-3">
                       <img src="{{ asset('image/logofull.png') }}" alt="" style="height: 30px;" class="me-2">Daftar Sekarang
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-4 py-3">
                        <i class="fas fa-envelope me-2"></i> Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection