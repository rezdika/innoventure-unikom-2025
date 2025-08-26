@extends('layouts.app')

@section('title', 'Tentang - Innoventure Unikom 2025')
@section('description', 'Pelajari lebih lanjut tentang Innoventure Unikom 2025, kompetisi inovasi dan kewirausahaan terbesar di Universitas Komputer Indonesia')

@section('content')
    <!-- Page Header -->
    <section class="page-header text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4">Tentang Innoventure Unikom 2025</h1>
                    <p class="lead">
                        Kompetisi yang menggabungkan inovasi, teknologi, dan kewirausahaan untuk menciptakan solusi masa
                        depan
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="display-6 fw-bold mb-4"><span style="color: #000;">Apa</span> <span style="color: #007bff;">itu</span> <span style="color: #007bff;">Innoventure?</span></h2>
                    <p class="lead text-muted mb-4">
                        Innoventure Unikom 2025 adalah kompetisi inovasi dan kewirausahaan tahunan yang diselenggarakan oleh
                        Universitas Komputer Indonesia untuk mendorong mahasiswa menciptakan solusi inovatif bagi tantangan
                        masa depan.
                    </p>
                    <p class="mb-4">
                        Kompetisi ini menghadirkan empat kategori menarik: Web Development untuk pelajar SMA/SMK,
                        Sayembara Logo VIZION khusus mahasiswa Teknik Informatika UNIKOM, Capture The Flag (CTF)
                        untuk tantangan cybersecurity, dan Mobile Legends Tournament untuk kompetisi e-sport.
                    </p>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle text-success fs-4 me-3"></i>
                        <span class="fw-bold">Terbuka untuk pelajar SMA/SMK dan mahasiswa</span>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="position-relative">
                        <!-- Image Slider -->
                        <div id="aboutSlider" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner rounded-4 overflow-hidden shadow-lg">
                                <div class="carousel-item active">
                                    <img src="{{ asset('image/poto1.jpg') }}" class="d-block w-100"
                                        style="height: 350px; object-fit: cover;" alt="Innoventure Vision 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('image/poto2.jpg') }}" class="d-block w-100"
                                        style="height: 350px; object-fit: cover;" alt="Innoventure Vision 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('image/poto3.jpg') }}" class="d-block w-100"
                                        style="height: 350px; object-fit: cover;" alt="Innoventure Vision 3">
                                </div>
                            </div>

                            <!-- Slider Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#aboutSlider"
                                data-bs-slide="prev">
                                <div class="bg-white bg-opacity-20 rounded-circle p-2">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </div>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#aboutSlider"
                                data-bs-slide="next">
                                <div class="bg-white bg-opacity-20 rounded-circle p-2">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </div>
                            </button>

                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#aboutSlider" data-bs-slide-to="0"
                                    class="active"></button>
                                <button type="button" data-bs-target="#aboutSlider" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#aboutSlider" data-bs-slide-to="2"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision & Mission Section -->
            <div class="row g-5 mb-5">
                <!-- Vision -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                    style="width: 80px; height: 80px;">
                                    <i class="fas fa-eye text-white fs-2"></i>
                                </div>
                                <h3 class="fw-bold" style="color: #000;">Visi</h3>
                            </div>
                            <p class="text-center text-muted fs-5 lh-lg">
                                Menjadi platform terdepan dalam mengembangkan ekosistem inovasi dan kewirausahaan
                                di kalangan pelajar dan mahasiswa Indonesia, menciptakan generasi yang siap menghadapi
                                tantangan teknologi masa depan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mission -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                    style="width: 80px; height: 80px;">
                                    <i class="fas fa-bullseye text-success fs-2"></i>
                                </div>
                                <h3 class="fw-bold" style="color: #000;">Misi</h3>
                            </div>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                    <span>Memberikan wadah kompetisi berkualitas tinggi untuk mengasah kemampuan
                                        teknologi</span>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                    <span>Memfasilitasi kolaborasi dan networking antar pelajar dan mahasiswa</span>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                    <span>Mendorong inovasi dan kreativitas dalam bidang teknologi informasi</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                    <span>Mempersiapkan talenta muda untuk industri teknologi masa depan</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo Philosophy Section -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <h2 class="display-6 fw-bold mb-3"><span style="color: #000;">Filosofi</span> <span style="color: #007bff;">Logo</span></h2>
                        <p class="lead text-muted text-center">Makna mendalam di balik setiap elemen logo Innoventure Unikom 2025</p>
                    </div>

                    <!-- Philosophy 1 - Arrow -->
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-6">
                            <div class="text-center">
                                <img src="{{ asset('image/potongan1.png') }}" class="img-fluid logo-shadow"
                                    style="max-height: 400px; object-fit: cover;" alt="Logo Philosophy 1">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ps-lg-4">
                                <h3 class="fw-bold mb-4"><span style="color: #000;">Simbol</span> <span style="color: #007bff;">Panah</span> <span style="color: #007bff;">ke</span> <span style="color: #007bff;">Atas</span></h3>
                                <p class="text-muted lh-lg">
                                    Simbol panah yang mengarah ke atas dalam logo INNOVENTURE bukan sekadar bentuk geometris
                                    sederhana, melainkan sebuah representasi dari tekad, visi, dan dorongan untuk selalu
                                    bergerak maju. Panah ke atas menggambarkan semangat pertumbuhan yang tidak pernah
                                    berhenti, aspirasi untuk menembus batas, dan keberanian dalam mengejar peluang baru di
                                    bidang teknologi.
                                </p>
                                <p class="text-muted lh-lg">
                                    Ia menjadi pengingat bahwa setiap langkah kecil yang diambil adalah bagian dari
                                    perjalanan panjang menuju pencapaian yang lebih tinggi, sebuah dorongan agar komunitas
                                    maupun individu yang terlibat dalam INNOVENTURE terus berkembang dan tidak takut
                                    menghadapi tantangan zaman. Dengan panah ini, logo seolah berpesan bahwa teknologi bukan
                                    hanya alat, tetapi juga jalan untuk mencapai impian besar yang membawa perubahan nyata
                                    bagi masa depan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Philosophy 2 - Circuit -->
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <div class="text-center">
                                <img src="{{ asset('image/potongan2.png') }}" class="img-fluid logo-shadow"
                                    style="max-height: 400px; object-fit: cover;" alt="Logo Philosophy 2">
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="pe-lg-4">
                                <h3 class="fw-bold mb-4"><span style="color: #000;">Jalur</span> <span style="color: #007bff;">Sirkuit</span> <span style="color: #007bff;">Digital</span></h3>
                                <p class="text-muted lh-lg">
                                    Sementara itu, jalur sirkuit yang hadir dalam logo menjadi simbol kuat dari era digital
                                    yang serba terkoneksi. Setiap garis yang terhubung tidak hanya menggambarkan jaringan
                                    teknologi, tetapi juga mencerminkan kolaborasi, integrasi ide, dan kehadiran kecerdasan
                                    buatan yang semakin mendefinisikan dunia modern.
                                </p>
                                <p class="text-muted lh-lg">
                                    Sirkuit tersebut melambangkan arus informasi yang mengalir dengan cepat, membentuk
                                    ekosistem inovasi yang dinamis, di mana setiap orang memiliki kesempatan untuk
                                    berkontribusi. Dengan jalur ini, logo INNOVENTURE menyuarakan identitas sebuah dunia
                                    yang tidak lagi berdiri sendiri, melainkan terhubung, responsif, dan berkembang bersama.
                                  Ia menegaskan bahwa kekuatan utama di balik teknologi bukan hanya mesin, melainkan
                                    keterhubungan ide-ide yang saling menguatkan, menciptakan peluang tanpa batas bagi
                                    generasi yang berani berinovasi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- BEM Structure Section -->
    <section id="bemSection" class="bem-gallery-section" style="background-image: url('{{ asset('image/backgroundstructure.png') }}'); background-size: cover; background-position: center center; background-repeat: no-repeat; transition: background-image 0.5s ease; position: relative; height: 100vh; overflow: hidden; clip-path: polygon(0 0, 100% 0, 100% 85%, 95% 90%, 85% 95%, 70% 98%, 50% 100%, 30% 98%, 15% 95%, 5% 90%, 0 85%);">
        <div class="bem-overlay" style="background: linear-gradient(135deg, rgba(15, 23, 42, 0.85), rgba(30, 41, 59, 0.75)); position: absolute; top: 0; left: 0; right: 0; bottom: 0; transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);"></div>
        
        <!-- Animated Background Elements -->
        <div class="bem-bg-elements">
            <div class="floating-circle circle-1"></div>
            <div class="floating-circle circle-2"></div>
            <div class="floating-circle circle-3"></div>
        </div>
        
        <!-- Main Content Container -->
        <div class="container-fluid h-100 position-relative" style="z-index: 3;">
            <div class="row h-100 align-items-center">
                <!-- Left Side - Title -->
                <div class="col-lg-6">
                    <div class="ps-5">
                        <h1 class="display-1 fw-bold text-white mb-3 bem-main-title" style="font-size: 4.5rem; line-height: 1;"><span style="color: #fff;">STRUKTUR</span> <span style="color: #007bff;">BEM</span></h1>
                        <p class="text-white opacity-75 fs-5 mb-4 bem-subtitle-1">Badan Eksekutif Mahasiswa</p>
                        <p class="text-white opacity-75 fs-5 bem-subtitle-2">Innoventure Unikom 2025</p>
                        
                        <!-- Role Description -->
                        <div id="roleDescription" class="mt-5 bem-description-box">
                            <h4 class="text-white fw-bold mb-3">Pilih foto untuk melihat detail</h4>
                            <p class="text-white opacity-75">Klik salah satu foto di samping untuk mengetahui tugas dan tanggung jawab posisi tersebut</p>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side - Card Gallery -->
                <div class="col-lg-6">
                    <div class="pe-5" style="overflow: visible;">
                        <div class="bem-cards-container" style="overflow: visible;">
                            <div class="bem-cards-scroll" id="cardsContainer" style="overflow-x: auto; overflow-y: visible; padding: 20px 10px;">
                                <div class="bem-card-item bem-card-1" data-bg="{{ asset('image/bannerbem2.jpg') }}" data-role="Ketua BEM" data-desc="Memimpin dan mengkoordinasi seluruh kegiatan organisasi, bertanggung jawab atas visi dan misi BEM serta mengambil keputusan strategis untuk kemajuan organisasi.">
                                    <div class="bem-card">
                                        <img src="{{ asset('image/shani.png') }}" class="bem-card-image" alt="Ketua BEM">
                                        <div class="bem-card-content">
                                            <h5 class="text-white fw-bold mb-1">KETUA BEM</h5>
                                            <p class="text-white opacity-75 small mb-0">Memimpin organisasi</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="bem-card-item bem-card-2" data-bg="{{ asset('image/bannerbem2.jpg') }}" data-role="Wakil Ketua" data-desc="Mendampingi ketua dalam menjalankan program kerja, mengkoordinasi divisi-divisi, dan menggantikan ketua saat berhalangan.">
                                    <div class="bem-card">
                                        <img src="{{ asset('image/marsha.png') }}" class="bem-card-image" alt="Wakil Ketua">
                                        <div class="bem-card-content">
                                            <h5 class="text-white fw-bold mb-1">WAKIL KETUA</h5>
                                            <p class="text-white opacity-75 small mb-0">Mendampingi ketua</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="bem-card-item bem-card-3" data-bg="{{ asset('image/bannerbem2.jpg') }}" data-role="Sekretaris" data-desc="Mengelola administrasi, dokumentasi, surat-menyurat, dan notulensi rapat serta mengatur jadwal kegiatan organisasi.">
                                    <div class="bem-card">
                                        <img src="{{ asset('image/shani.png') }}" class="bem-card-image" alt="Sekretaris">
                                        <div class="bem-card-content">
                                            <h5 class="text-white fw-bold mb-1">SEKRETARIS</h5>
                                            <p class="text-white opacity-75 small mb-0">Administrasi</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="bem-card-item bem-card-4" data-bg="{{ asset('image/bannerbem2.jpg') }}" data-role="Bendahara" data-desc="Mengelola keuangan, anggaran, pertanggungjawaban keuangan, dan mengawasi penggunaan dana organisasi.">
                                    <div class="bem-card">
                                        <img src="{{ asset('image/marsha.png') }}" class="bem-card-image" alt="Bendahara">
                                        <div class="bem-card-content">
                                            <h5 class="text-white fw-bold mb-1">BENDAHARA</h5>
                                            <p class="text-white opacity-75 small mb-0">Keuangan</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="bem-card-item bem-card-5" data-bg="{{ asset('image/bannerbem2.jpg') }}" data-role="Koordinator" data-desc="Mengatur dan mengelola seluruh acara, kegiatan, dan event yang diselenggarakan oleh organisasi.">
                                    <div class="bem-card">
                                        <img src="{{ asset('image/shani.png') }}" class="bem-card-image" alt="Koordinator">
                                        <div class="bem-card-content">
                                            <h5 class="text-white fw-bold mb-1">KOORDINATOR</h5>
                                            <p class="text-white opacity-75 small mb-0">Koordinasi acara</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="bem-card-item bem-card-6" data-bg="{{ asset('image/bannerbem2.jpg') }}" data-role="Humas" data-desc="Menjalin hubungan dengan pihak eksternal, mengelola komunikasi publik, dan membangun networking organisasi.">
                                    <div class="bem-card">
                                        <img src="{{ asset('image/marsha.png') }}" class="bem-card-image" alt="Humas">
                                        <div class="bem-card-content">
                                            <h5 class="text-white fw-bold mb-1">HUMAS</h5>
                                            <p class="text-white opacity-75 small mb-0">Hubungan masyarakat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Navigation Controls -->
                        <div class="bem-navigation mt-4 d-flex justify-content-center">
                            <button class="bem-nav-btn" id="prevBtn">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="bem-nav-btn ms-3" id="nextBtn">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        
                        <!-- Progress Indicator -->
                        <div class="bem-progress mt-3 d-flex justify-content-center">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 50%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

<!-- Benefit Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-6 fw-bold mb-3"><span style="color: #000;">Benefit</span> <span style="color: #007bff;">Yang</span> <span style="color: #007bff;">Didapat</span></h2>
            <p class="lead text-muted text-center">Keuntungan luar biasa menanti para peserta Innoventure Unikom 2025</p>
        </div>
        
        <!-- Desktop Layout -->
        <div class="d-none d-md-block">
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-card text-center">
                        <div class="benefit-icon-circle mx-auto mb-3">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h5 class="benefit-title mb-3">Hadiah Menarik</h5>
                        <p class="benefit-desc">Total hadiah senilai puluhan juta rupiah untuk para pemenang</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-card text-center">
                        <div class="benefit-icon-circle mx-auto mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5 class="benefit-title mb-3">Networking</h5>
                        <p class="benefit-desc">Bertemu dengan mentor, investor, dan sesama entrepreneur</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="benefit-card text-center">
                        <div class="benefit-icon-circle mx-auto mb-3">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h5 class="benefit-title mb-3">Pembelajaran</h5>
                        <p class="benefit-desc">Workshop dan mentoring dari praktisi berpengalaman</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="benefit-card text-center">
                        <div class="benefit-icon-circle mx-auto mb-3">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h5 class="benefit-title mb-3">Sertifikat</h5>
                        <p class="benefit-desc">Sertifikat resmi dari Universitas Komputer Indonesia</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="benefit-card text-center">
                        <div class="benefit-icon-circle mx-auto mb-3">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h5 class="benefit-title mb-3">Inovasi</h5>
                        <p class="benefit-desc">Kesempatan mengembangkan ide kreatif dan inovatif</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="benefit-card text-center">
                        <div class="benefit-icon-circle mx-auto mb-3">
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="benefit-title mb-3">Pengalaman</h5>
                        <p class="benefit-desc">Pengalaman berharga dalam kompetisi teknologi</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mobile Slider -->
        <div class="d-md-none">
            <div class="benefit-slider-container">
                <div class="benefit-slider" id="benefitSlider">
                    <div class="benefit-slide">
                        <div class="benefit-card text-center">
                            <div class="benefit-icon-circle mx-auto mb-3">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <h5 class="benefit-title mb-3">Hadiah Menarik</h5>
                            <p class="benefit-desc">Total hadiah senilai puluhan juta rupiah untuk para pemenang</p>
                        </div>
                    </div>
                    <div class="benefit-slide">
                        <div class="benefit-card text-center">
                            <div class="benefit-icon-circle mx-auto mb-3">
                                <i class="fas fa-users"></i>
                            </div>
                            <h5 class="benefit-title mb-3">Networking</h5>
                            <p class="benefit-desc">Bertemu dengan mentor, investor, dan sesama entrepreneur</p>
                        </div>
                    </div>
                    <div class="benefit-slide">
                        <div class="benefit-card text-center">
                            <div class="benefit-icon-circle mx-auto mb-3">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h5 class="benefit-title mb-3">Pembelajaran</h5>
                            <p class="benefit-desc">Workshop dan mentoring dari praktisi berpengalaman</p>
                        </div>
                    </div>
                    <div class="benefit-slide">
                        <div class="benefit-card text-center">
                            <div class="benefit-icon-circle mx-auto mb-3">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <h5 class="benefit-title mb-3">Sertifikat</h5>
                            <p class="benefit-desc">Sertifikat resmi dari Universitas Komputer Indonesia</p>
                        </div>
                    </div>
                    <div class="benefit-slide">
                        <div class="benefit-card text-center">
                            <div class="benefit-icon-circle mx-auto mb-3">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h5 class="benefit-title mb-3">Inovasi</h5>
                            <p class="benefit-desc">Kesempatan mengembangkan ide kreatif dan inovatif</p>
                        </div>
                    </div>
                    <div class="benefit-slide">
                        <div class="benefit-card text-center">
                            <div class="benefit-icon-circle mx-auto mb-3">
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="benefit-title mb-3">Pengalaman</h5>
                            <p class="benefit-desc">Pengalaman berharga dalam kompetisi teknologi</p>
                        </div>
                    </div>
                </div>
                <div class="slider-dots mt-4 text-center">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                    <span class="dot" data-slide="3"></span>
                    <span class="dot" data-slide="4"></span>
                    <span class="dot" data-slide="5"></span>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
       
</section>

<!-- Partners Section -->
<section class="py-5 bg-light overflow-hidden">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-6 fw-bold mb-3"><span style="color: #000;">Didukung</span> <span style="color: #007bff;">Oleh</span></h2>
            <p class="lead text-muted text-center">Partner dan sponsor yang mendukung ekosistem inovasi</p>
        </div>
        
        <div class="infinite-scroll-container bg-light">
            <div class="infinite-scroll-track">
                <div class="logo-item">
                    <img src="{{ asset('image/logo1.png') }}" alt="Partner Logo 1">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('image/logo2.png') }}" alt="Partner Logo 2">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('image/logo3.png') }}" alt="Partner Logo 3">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('image/logo1.png') }}" alt="Partner Logo 1">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('image/logo2.png') }}" alt="Partner Logo 2">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('image/logo3.png') }}" alt="Partner Logo 3">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('image/logo1.png') }}" alt="Partner Logo 1">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('image/logo2.png') }}" alt="Partner Logo 2">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('image/logo3.png') }}" alt="Partner Logo 3">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
    /* Touch/Swipe enabled carousel */
    #bemSlider {
        touch-action: pan-y;
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    #bemSlider .carousel-inner {
        overflow: hidden;
        cursor: grab;
        -webkit-touch-callout: none;
        -webkit-tap-highlight-color: transparent;
    }

    #bemSlider .carousel-inner:active {
        cursor: grabbing;
    }

    .bem-square-photo {
        width: 180px;
        height: 180px;
        object-fit: cover;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.8), 0 0 40px rgba(255, 255, 255, 0.6), 0 0 60px rgba(255, 255, 255, 0.4);
        transition: box-shadow 0.3s ease;
    }

    .bem-square-photo:hover {
        box-shadow: 0 0 30px rgba(255, 255, 255, 1), 0 0 60px rgba(255, 255, 255, 0.8), 0 0 90px rgba(255, 255, 255, 0.6);
    }

    /* Logo Shadow Effect */
    .logo-shadow {
        filter: drop-shadow(0 10px 20px rgba(0, 123, 255, 0.3)) drop-shadow(0 6px 12px rgba(0, 0, 0, 0.15));
        transition: filter 0.3s ease;
    }

    .logo-shadow:hover {
        filter: drop-shadow(0 15px 30px rgba(0, 123, 255, 0.4)) drop-shadow(0 8px 16px rgba(0, 0, 0, 0.2));
    }

    /* Partner Logo Effects */
    .partner-logo {
        filter: drop-shadow(0 8px 16px rgba(0, 123, 255, 0.2)) drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        animation: float 6s ease-in-out infinite;
    }

    .partner-logo:hover {
        filter: drop-shadow(0 15px 30px rgba(0, 123, 255, 0.4)) drop-shadow(0 8px 20px rgba(0, 0, 0, 0.2));
        transform: translateY(-10px) scale(1.05);
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-8px);
        }
    }

    .partner-logo:nth-child(1) {
        animation-delay: 0s;
    }

    .partner-logo:nth-child(2) {
        animation-delay: 2s;
    }

    .partner-logo:nth-child(3) {
        animation-delay: 4s;
    }

    /* Benefit Section Styles */
    .benefit-card {
        background: #fff;
        border-radius: 15px;
        padding: 2rem 1.5rem;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .benefit-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .benefit-icon-circle {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #007bff, #0056b3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .benefit-icon-circle i {
        font-size: 1.8rem;
        color: #fff;
    }

    .benefit-card:hover .benefit-icon-circle {
        transform: scale(1.1);
    }

    .benefit-title {
        color: #333;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .benefit-desc {
        color: #666;
        line-height: 1.5;
        font-size: 0.95rem;
        margin-bottom: 0;
    }

    .benefit-slider-container {
        position: relative;
        overflow: hidden;
    }

    .benefit-slider {
        display: flex;
        transition: transform 0.3s ease;
        touch-action: pan-y;
    }

    .benefit-slide {
        min-width: 100%;
        padding: 0 15px;
    }

    .slider-dots {
        display: flex;
        justify-content: center;
        gap: 8px;
    }

    .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: rgba(0, 123, 255, 0.3);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .dot.active {
        background: #007bff;
        transform: scale(1.2);
    }
</style>

<script src="{{ asset('js/bem-structure.js') }}"></script>
<script src="{{ asset('js/benefit-slider.js') }}"></script>