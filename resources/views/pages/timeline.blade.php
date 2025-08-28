@extends('layouts.app')

@section('title', 'Timeline - Innoventure Unikom 2025')
@section('description', 'Jadwal lengkap kompetisi Innoventure Unikom 2025. Jangan sampai terlewat tanggal penting!')

@section('content')
<!-- Page Header -->
<section class="page-header text-center">
    <div class="container">
        <div class="row justify-content-center" style="background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url(asset('image/banner.png'));">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-4">
                    <span style="color: #fff;">Timeline Kompetisi</span>
                </h1>
                <p class="lead">
                    Jadwal lengkap Innoventure Unikom 2025 dari pendaftaran hingga awarding ceremony
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="section-padding" style="background: white;">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-5">
                <div class="timeline-info pe-lg-5 mt-4">
                    <div class="mb-4">
                        <span class="badge bg-primary text-white px-3 py-2 rounded-pill mb-3 fw-bold">
                            <i class="fas fa-clock me-2"></i>Timeline Kompetisi
                        </span>
                        <h1 class="display-4 fw-black mb-3 text-dark" style="line-height: 1.2; letter-spacing: -0.02em;">
                            Innoventure
                            <span class="d-block" style="background: linear-gradient(135deg, #1e40af, #3b82f6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                                Unikom 2025
                            </span>
                        </h1>
                        <p class="fs-5 mb-4 text-muted" style="font-weight: 400;">
                            Jangan sampai terlewat! Catat semua tanggal penting kompetisi teknologi dan kreativitas terbesar di UNIKOM.
                        </p>
                    </div>
                    
                    <div class="mb-5">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="bg-light rounded-3 p-3 border">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-primary bg-opacity-20 rounded-circle p-2 me-3">
                                            <i class="fas fa-calendar-alt text-primary"></i>
                                        </div>
                                        <div>
                                            <h6 class="text-dark fw-bold mb-1">Durasi Kompetisi</h6>
                                            <p class="text-muted mb-0">18-30 Agustus 2025 (12 hari)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="bg-light rounded-3 p-3 border">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-success bg-opacity-20 rounded-circle p-2 me-3">
                                            <i class="fas fa-users text-success"></i>
                                        </div>
                                        <div>
                                            <h6 class="text-dark fw-bold mb-1">Target Peserta</h6>
                                            <p class="text-muted mb-0">500+ siswa SMA/SMK & mahasiswa</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="bg-light rounded-3 p-3 border">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-info bg-opacity-20 rounded-circle p-2 me-3">
                                            <i class="fas fa-trophy text-info"></i>
                                        </div>
                                        <div>
                                            <h6 class="text-dark fw-bold mb-1">Total Hadiah</h6>
                                            <p class="text-muted mb-0">10 juta rupiah untuk semua kategori</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-column flex-sm-row gap-3">
                        <a href="{{ route('registration') }}" class="btn btn-primary btn-lg px-4 py-3 rounded-pill fw-bold">
                            <i class="fas fa-rocket me-2"></i>Daftar Sekarang
                        </a>
                        <a href="{{ route('competitions') }}" class="btn btn-outline-primary btn-lg px-4 py-3 rounded-pill fw-bold">
                            <i class="fas fa-trophy me-2"></i>Lihat Lomba
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="timeline-container position-relative ps-lg-5">
                   
                    <!-- Timeline Item 1: Pendaftaran -->
                    <div class="timeline-item mb-5 position-relative">
                        <div class="timeline-marker bg-white rounded-circle d-flex align-items-center justify-content-center shadow-lg" 
                             style="width: 60px; height: 60px; position: absolute; right: -30px; z-index: 10; cursor: pointer; transition: all 0.3s ease;"
                             onclick="toggleTimelineDetail(1)"
                             onmouseover="this.style.transform='scale(1.1)'"
                             onmouseout="this.style.transform='scale(1)'">
                            <i class="fas fa-user-plus text-primary fs-5"></i>
                        </div>
                        <div class="timeline-content pe-5 me-5">
                            <div class="bg-light rounded-3 p-4 shadow-sm">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div>
                                        <h5 class="text-dark fw-bold mb-1">Pendaftaran</h5>
                                        <p class="text-muted small mb-0">Buka pendaftaran semua kategori</p>
                                    </div>
                                    <div class="text-end">
                                        <h3 class="text-primary fw-bold mb-0">2025</h3>
                                        <p class="text-muted small mb-0">7-18 Agustus</p>
                                    </div>
                                </div>
                                <!-- Detail Information -->
                                <div class="timeline-detail" id="timeline-detail-1" style="display: none; opacity: 0; transform: translateY(-10px); transition: all 0.3s ease;">
                                    <div class="bg-white rounded-3 p-3 mt-3 border">
                                        <h6 class="text-dark mb-2">Detail Pendaftaran:</h6>
                                        <ul class="text-muted small mb-0 ps-3">
                                            <li>Pendaftaran online melalui website resmi</li>
                                            <li>Semua kategori lomba dibuka bersamaan</li>
                                            <li>Gratis untuk Web Development & Sayembara Logo</li>
                                            <li>Biaya 50K untuk Mobile Legends & CTF</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 2: Opening & Techmeet -->
                    <div class="timeline-item mb-5 position-relative">
                        <div class="timeline-marker bg-white rounded-circle d-flex align-items-center justify-content-center shadow-lg" 
                             style="width: 60px; height: 60px; position: absolute; right: -30px; z-index: 10; cursor: pointer; transition: all 0.3s ease;"
                             onclick="toggleTimelineDetail(2)"
                             onmouseover="this.style.transform='scale(1.1)'"
                             onmouseout="this.style.transform='scale(1)'">
                            <i class="fas fa-rocket text-success fs-5"></i>
                        </div>
                        <div class="timeline-content pe-5 me-5">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <h5 class="text-dark fw-bold mb-1">Opening & Techmeet</h5>
                                    <p class="text-muted small mb-0">Pembukaan resmi kompetisi</p>
                                </div>
                                <div class="text-end">
                                    <h3 class="text-primary fw-bold mb-0">2025</h3>
                                    <p class="text-muted small mb-0">18 Agustus</p>
                                </div>
                            </div>
                            <!-- Detail Information -->
                            <div class="timeline-detail" id="timeline-detail-2" style="display: none; opacity: 0; transform: translateY(-10px); transition: all 0.3s ease;">
                                <div class="bg-light rounded-3 p-3 mt-3 border">
                                    <h6 class="text-dark mb-2">Detail Opening:</h6>
                                    <ul class="text-muted small mb-0 ps-3">
                                        <li>Pembukaan resmi Innoventure Unikom 2025</li>
                                        <li>Technical meeting untuk semua peserta</li>
                                        <li>Penjelasan aturan dan timeline kompetisi</li>
                                        <li>Sesi tanya jawab dengan panitia</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 3: Perlombaan -->
                    <div class="timeline-item mb-5 position-relative">
                        <div class="timeline-marker bg-white rounded-circle d-flex align-items-center justify-content-center shadow-lg" 
                             style="width: 60px; height: 60px; position: absolute; right: -30px; z-index: 10; cursor: pointer; transition: all 0.3s ease;"
                             onclick="toggleTimelineDetail(3)"
                             onmouseover="this.style.transform='scale(1.1)'"
                             onmouseout="this.style.transform='scale(1)'">
                            <i class="fas fa-trophy text-warning fs-5"></i>
                        </div>
                        <div class="timeline-content pe-5 me-5">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <h5 class="text-dark fw-bold mb-1">Perlombaan</h5>
                                    <p class="text-muted small mb-0">Semua kategori lomba dimulai</p>
                                </div>
                                <div class="text-end">
                                    <h3 class="text-primary fw-bold mb-0">2025</h3>
                                    <p class="text-muted small mb-0">19-26 Agustus</p>
                                </div>
                            </div>
                            <!-- Detail Information -->
                            <div class="timeline-detail" id="timeline-detail-3" style="display: none; opacity: 0; transform: translateY(-10px); transition: all 0.3s ease;">
                                <div class="bg-light rounded-3 p-3 mt-3 border">
                                    <h6 class="text-dark mb-2">Detail Perlombaan:</h6>
                                    <ul class="text-muted small mb-0 ps-3">
                                        <li>Web Development: Pengembangan website tema bebas</li>
                                        <li>Mobile Legends: Turnamen esports 5v5</li>
                                        <li>Capture The Flag: Kompetisi cybersecurity</li>
                                        <li>Sayembara Logo: Desain logo BEM UNIKOM</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 4: Penilaian -->
                    <div class="timeline-item mb-5 position-relative">
                        <div class="timeline-marker bg-white rounded-circle d-flex align-items-center justify-content-center shadow-lg" 
                             style="width: 60px; height: 60px; position: absolute; right: -30px; z-index: 10; cursor: pointer; transition: all 0.3s ease;"
                             onclick="toggleTimelineDetail(4)"
                             onmouseover="this.style.transform='scale(1.1)'"
                             onmouseout="this.style.transform='scale(1)'">
                            <i class="fas fa-clipboard-check text-info fs-5"></i>
                        </div>
                        <div class="timeline-content pe-5 me-5">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <h5 class="text-dark fw-bold mb-1">Penilaian</h5>
                                    <p class="text-muted small mb-0">Evaluasi oleh dewan juri</p>
                                </div>
                                <div class="text-end">
                                    <h3 class="text-primary fw-bold mb-0">2025</h3>
                                    <p class="text-muted small mb-0">27-28 Agustus</p>
                                </div>
                            </div>
                            <!-- Detail Information -->
                            <div class="timeline-detail" id="timeline-detail-4" style="display: none; opacity: 0; transform: translateY(-10px); transition: all 0.3s ease;">
                                <div class="bg-light rounded-3 p-3 mt-3 border">
                                    <h6 class="text-dark mb-2">Detail Penilaian:</h6>
                                    <ul class="text-muted small mb-0 ps-3">
                                        <li>Evaluasi karya oleh dewan juri ahli</li>
                                        <li>Seleksi finalis terbaik setiap kategori</li>
                                        <li>Persiapan final presentation</li>
                                        <li>Pengumuman 3 besar setiap kategori</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 5: Seminar & Awarding -->
                    <div class="timeline-item position-relative">
                        <div class="timeline-marker bg-white rounded-circle d-flex align-items-center justify-content-center shadow-lg" 
                             style="width: 60px; height: 60px; position: absolute; right: -30px; z-index: 10; cursor: pointer; transition: all 0.3s ease;"
                             onclick="toggleTimelineDetail(5)"
                             onmouseover="this.style.transform='scale(1.1)'"
                             onmouseout="this.style.transform='scale(1)'">
                            <i class="fas fa-medal text-danger fs-5"></i>
                        </div>
                        <div class="timeline-content pe-5 me-5">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <h5 class="text-dark fw-bold mb-1">Seminar & Awarding</h5>
                                    <p class="text-muted small mb-0">Pengumuman pemenang</p>
                                </div>
                                <div class="text-end">
                                    <h3 class="text-primary fw-bold mb-0">2025</h3>
                                    <p class="text-muted small mb-0">30 Agustus</p>
                                </div>
                            </div>
                            <!-- Detail Information -->
                            <div class="timeline-detail" id="timeline-detail-5" style="display: none; opacity: 0; transform: translateY(-10px); transition: all 0.3s ease;">
                                <div class="bg-light rounded-3 p-3 mt-3 border">
                                    <h6 class="text-dark mb-2">Detail Acara:</h6>
                                    <ul class="text-muted small mb-0 ps-3">
                                        <li>Seminar inspiratif dengan pembicara ahli</li>
                                        <li>Pengumuman pemenang semua kategori</li>
                                        <li>Awarding ceremony & penyerahan hadiah</li>
                                        <li>Sesi foto bersama & networking</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Important Dates -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold mb-3"><span style="color: #000;">Tanggal</span> <span style="color: #007bff;">Penting</span></h2>
            <p class="lead text-muted text-center">Catat dan jangan sampai terlewat!</p>
        </div>
        
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-door-open text-success fs-2"></i>
                        </div>
                        <h4 class="card-title text-success mb-3">Opening Ceremony</h4>
                        <h5 class="text-primary mb-3">18 Agustus 2025</h5>
                        <p class="card-text text-muted">
                            Mulai daftarkan dirimu dan timmu untuk mengikuti kompetisi
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-exclamation-triangle text-warning fs-2"></i>
                        </div>
                        <h4 class="card-title text-warning mb-3">Deadline Terakhir</h4>
                        <h5 class="text-primary mb-3">26 Agustus 2025</h5>
                        <p class="card-text text-muted">
                            Batas akhir pengumpulan karya Web Development & Logo Design
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class=" bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-trophy text-primary fs-2"></i>
                        </div>
                        <h4 class="card-title text-primary mb-3">Seminar & Awarding</h4>
                        <h5 class="text-primary mb-3">30 Agustus 2025</h5>
                        <p class="card-text text-muted">
                            Presentasi final dan pengumuman pemenang
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0f172a" fill-opacity="1" d="M0,320L0,128L130.9,128L130.9,160L261.8,160L261.8,192L392.7,192L392.7,128L523.6,128L523.6,192L654.5,192L654.5,224L785.5,224L785.5,64L916.4,64L916.4,64L1047.3,64L1047.3,256L1178.2,256L1178.2,224L1309.1,224L1309.1,96L1440,96L1440,320L1309.1,320L1309.1,320L1178.2,320L1178.2,320L1047.3,320L1047.3,320L916.4,320L916.4,320L785.5,320L785.5,320L654.5,320L654.5,320L523.6,320L523.6,320L392.7,320L392.7,320L261.8,320L261.8,320L130.9,320L130.9,320L0,320L0,320Z"></path></svg>


<!-- Countdown Section -->
<section class="section-padding bg-primary text-white">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4"><span style="color: #fff;">Hitung</span> <span style="color: #007bff;">Mundur</span> <span style="color: #007bff;">Pendaftaran</span></h2>
                <p class="lead mb-5 text-center">Jangan sampai terlewat! Daftarkan dirimu sebelum terlambat.</p>
                
                <div class="row justify-content-center mb-5">
                    <div class="col-6 col-md-3 mb-3">
                        <div class="bg-white bg-opacity-20 rounded-3 p-3">
                            <h3 class="fw-bold mb-1" id="days">--</h3>
                            <small>Hari</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="bg-white bg-opacity-20 rounded-3 p-3">
                            <h3 class="fw-bold mb-1" id="hours">--</h3>
                            <small>Jam</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="bg-white bg-opacity-20 rounded-3 p-3">
                            <h3 class="fw-bold mb-1" id="minutes">--</h3>
                            <small>Menit</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="bg-white bg-opacity-20 rounded-3 p-3">
                            <h3 class="fw-bold mb-1" id="seconds">--</h3>
                            <small>Detik</small>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('registration') }}" class="btn btn-primary btn-lg px-5 py-3 rounded-pill">
                    <i class="fas fa-rocket me-2"></i> Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
// Timeline Interactive Function
function toggleTimelineDetail(id) {
    const detail = document.getElementById(`timeline-detail-${id}`);
    const isVisible = detail.style.display === 'block';
    
    // Hide all other details
    for (let i = 1; i <= 5; i++) {
        if (i !== id) {
            const otherDetail = document.getElementById(`timeline-detail-${i}`);
            if (otherDetail) {
                otherDetail.style.opacity = '0';
                otherDetail.style.transform = 'translateY(-10px)';
                setTimeout(() => {
                    otherDetail.style.display = 'none';
                }, 300);
            }
        }
    }
    
    // Toggle current detail
    if (isVisible) {
        detail.style.opacity = '0';
        detail.style.transform = 'translateY(-10px)';
        setTimeout(() => {
            detail.style.display = 'none';
        }, 300);
    } else {
        detail.style.display = 'block';
        setTimeout(() => {
            detail.style.opacity = '1';
            detail.style.transform = 'translateY(0)';
        }, 10);
    }
}

// Countdown Timer
function updateCountdown() {
    const deadline = new Date('2025-08-26T23:59:59').getTime();
    const now = new Date().getTime();
    const timeLeft = deadline - now;
    
    if (timeLeft > 0) {
        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
        
        document.getElementById('days').textContent = days.toString().padStart(2, '0');
        document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
        document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
        document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
    } else {
        document.getElementById('days').textContent = '00';
        document.getElementById('hours').textContent = '00';
        document.getElementById('minutes').textContent = '00';
        document.getElementById('seconds').textContent = '00';
    }
}

// Update countdown every second
setInterval(updateCountdown, 1000);
updateCountdown(); // Initial call
</script>
@endpush
@endsection