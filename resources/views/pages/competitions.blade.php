@extends('layouts.app')

@section('title', 'Kategori Lomba - Innoventure Unikom 2025')
@section('description', 'Pilih kategori lomba yang sesuai dengan passion dan keahlianmu di Innoventure Unikom 2025')

@section('content')
    <!-- Page Header -->
    <section class="page-header text-center " style="background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url(asset('image/banner.png'));">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4">
                        <span style="color: #fff;">Kategori Lomba</span>
                    </h1>
                    <p class="lead">
                        Empat kategori kompetisi dengan fokus berbeda untuk mengembangkan potensi inovasimu
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Competition Categories -->
    <section class="section-padding"
        style=" position: relative; overflow: hidden;">
        <!-- Background Decorations -->
        <div class="position-absolute"
            style="top: -50px; right: -50px; width: 200px; height: 200px; border-radius: 50%; ">
        </div>
        <div class="position-absolute"
            style="bottom: -100px; left: -100px; width: 300px; height: 300px; border-radius: 50%; ">
        </div>

        <div class="container position-relative">
            <!-- Filter Competitions -->
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-filter me-2" style="color: #3b82f6;"></i>
                    <span style="font-weight: 600; color: #1e293b;">Filter Competitions</span>
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-primary btn-sm px-3" style="background: #3b82f6; border: none; border-radius: 20px; font-size: 0.85rem;">All</button>
                    <button class="btn btn-outline-secondary btn-sm px-3" style="border-radius: 20px; font-size: 0.85rem;">Technology</button>
                    <button class="btn btn-outline-secondary btn-sm px-3" style="border-radius: 20px; font-size: 0.85rem;">Design</button>
                    <button class="btn btn-outline-secondary btn-sm px-3" style="border-radius: 20px; font-size: 0.85rem;">Gaming</button>
                    <button class="btn btn-outline-secondary btn-sm px-3" style="border-radius: 20px; font-size: 0.85rem;">Open</button>
                </div>
            </div>
            
            <!-- Featured Competition Banner -->
            <div class="featured-competition mb-5" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('image/banner.png') }}'); background-size: cover; background-position: center; border-radius: 20px; padding: 50px 40px; color: white; position: relative; overflow: hidden;">
               
                <div class="row align-items-center" style="margin-top: 20px;">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3" style="color: white; margin-top: 10px;">Innoventure Unikom 2025</h2>
                        <p class="lead mb-4" style="color: rgba(255,255,255,0.9); font-size: 1.1rem; line-height: 1.5;">Submit your groundbreaking ideas and solutions to innovation challenges. Win up to Rp 10.000.000 and get mentorship from industry leaders.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3"><span style="color: #000;">Kategori</span> <span style="color: #007bff;">Kompetisi</span></h2>
                <p class="lead text-muted text-center">Pilih kategori yang sesuai dengan passion dan keahlianmu</p>
            </div>
            
            <!-- Competition Cards Grid -->
            <div class="row g-4 mb-5 justify-content-center">
                @foreach($competitions as $index => $competition)
                <div class="col-sm-6 col-lg-6">
                    <div class="competition-card cursor-pointer h-100" onclick="showCompetitionDetail({{ $index }})" id="card-{{ $index }}"
                        style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; border: 1px solid rgba(0,0,0,0.05); position: relative; display: flex; flex-direction: column;"
                        onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 40px rgba(0,0,0,0.15)'"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)'">
                        
                        <!-- Competition Image -->
                        <div class="position-relative" style="height: 220px; overflow: hidden; flex-shrink: 0;">
                            @if($index == 0)
                                <img src="{{ asset('image/bannerweb.png') }}" alt="{{ $competition['name'] }}" 
                                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                            @elseif($index == 1)
                                <img src="{{ asset('image/bannerlogo.png') }}" alt="{{ $competition['name'] }}" 
                                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                            @elseif($index == 2)
                                <img src="{{ asset('image/bannerctf.png') }}" alt="{{ $competition['name'] }}" 
                                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                            @else
                                <img src="{{ asset('image/bannermlbb.png') }}" alt="{{ $competition['name'] }}" 
                                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                            @endif
                            <div class="position-absolute top-0 start-0 w-100 h-100" 
                                style="background: linear-gradient(135deg, rgba(59,130,246,0.1), rgba(59,130,246,0.05));"></div>
                            
                            <!-- Category Badge -->
                            <div class="position-absolute top-3 start-3">
                                <span class="badge px-3 py-2" style="background: {{ $index == 0 ? '#3b82f6' : ($index == 1 ? '#8b5cf6' : ($index == 2 ? '#06b6d4' : '#10b981')) }}; color: white; font-size: 0.75rem; font-weight: 600; border-radius: 20px;">
                                    @if($index == 0)
                                        Technology
                                    @elseif($index == 1)
                                        Design
                                    @elseif($index == 2)
                                        Security
                                    @else
                                        Gaming
                                    @endif
                                </span>
                            </div>
                            
                            <!-- Status Badge -->
                            <div class="position-absolute top-3 end-3">
                                <span class="badge px-3 py-2" style="background: #10b981; color: white; font-size: 0.75rem; font-weight: 600; border-radius: 20px;">
                                    <i class="fas fa-circle me-1" style="font-size: 0.5rem;"></i>Open
                                </span>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <h5 class="fw-bold mb-3" style="color: #1e293b; font-size: 1.1rem; line-height: 1.3;">{{ $competition['name'] }}</h5>
                            
                            <!-- Competition Info -->
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2" style="font-size: 0.85rem; color: #64748b;">
                                    <i class="fas fa-calendar-alt me-2" style="color: #3b82f6; width: 16px;"></i>
                                    <span>{{ \Carbon\Carbon::parse($competition['deadline'])->format('M d, Y') }}</span>
                                </div>
                                
                                <div class="d-flex align-items-center mb-2" style="font-size: 0.85rem; color: #64748b;">
                                    <i class="fas fa-trophy me-2" style="color: #f59e0b; width: 16px;"></i>
                                    <span>{{ $competition['prize'] }}</span>
                                </div>
                                
                                <div class="d-flex align-items-center" style="font-size: 0.85rem; color: #64748b;">
                                    <i class="fas fa-users me-2" style="color: #10b981; width: 16px;"></i>
                                    <span>{{ rand(50, 200) }} participants</span>
                                </div>
                            </div>
                            
                            <!-- Action Button -->
                            <div class="mt-auto">
                                <a href="{{ route('competition.details', $index + 1) }}" class="btn btn-primary w-100" style="background: #3b82f6; border: none; border-radius: 8px; padding: 12px; font-weight: 600; font-size: 0.9rem; transition: all 0.3s ease; text-decoration: none;"
                                    onmouseover="this.style.background='#2563eb'; this.style.transform='translateY(-1px)'"
                                    onmouseout="this.style.background='#3b82f6'; this.style.transform='translateY(0)'">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
    
            
            <!-- Competition Detail Modal/Section -->
            <div class="row mt-5" id="detail-section" style="display: none;">
                <div class="col-lg-12">
                    <div class="competition-detail-container"
                        style="background: white; border-radius: 20px; padding: 40px; box-shadow: 0 8px 32px rgba(0,0,0,0.1); min-height: 600px;">

                        <!-- Default State -->
                        <div id="default-detail" class="text-center" style="padding-top: 100px;">
                            <div class="mb-4">
                                <i class="fas fa-mouse-pointer text-muted" style="font-size: 4rem; opacity: 0.3;"></i>
                            </div>
                            <h4 class="text-muted mb-3">Pilih Kategori Lomba</h4>
                            <p class="text-muted text-center">Klik salah satu kategori di sebelah kiri untuk melihat detail lengkap</p>
                        </div>

                        <!-- Competition Details -->
                        @foreach($competitions as $index => $competition)
                            <div id="detail-{{ $index }}" class="competition-detail" style="display: none;">
                                <!-- Header -->
                                <div class="detail-header mb-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="competition-icon me-3"
                                            style="width: 80px; height: 80px; border-radius: 16px; display: flex; align-items: center; justify-content: center; background: {{ $index == 0 ? 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)' : ($index == 1 ? 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)' : ($index == 2 ? 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)' : 'linear-gradient(135deg, #43e97b 0%, #38f9d7 100%)')) }};">
                                            @if($index == 0)
                                                <i class="fas fa-code text-white" style="font-size: 2rem;"></i>
                                            @elseif($index == 1)
                                                <i class="fas fa-palette text-white" style="font-size: 2rem;"></i>
                                            @elseif($index == 2)
                                                <i class="fas fa-shield-alt text-white" style="font-size: 2rem;"></i>
                                            @else
                                                <i class="fas fa-gamepad text-white" style="font-size: 2rem;"></i>
                                            @endif
                                        </div>
                                        <div>
                                            <h2 class="mb-2 fw-bold" style="color: #1e293b;">{{ $competition['name'] }}</h2>
                                            <span class="badge px-3 py-2 rounded-pill"
                                                style="background: {{ $index == 0 ? 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)' : ($index == 1 ? 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)' : ($index == 2 ? 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)' : 'linear-gradient(135deg, #43e97b 0%, #38f9d7 100%)')) }}; color: white; font-size: 0.9rem;">
                                                <i class="fas fa-trophy me-1"></i>{{ $competition['prize'] }}
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="detail-description mb-4">
                                    <p class="text-muted" style="font-size: 1.1rem; line-height: 1.6;">
                                        {{ $competition['description'] }}</p>
                                </div>

                                <!-- Info Cards -->
                                <div class="row g-3 mb-4">
                                    <div class="col-6">
                                        <div class="info-card p-3 rounded-3"
                                            style="background: rgba(59, 130, 246, 0.1); border: 1px solid rgba(59, 130, 246, 0.2);">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-calendar-alt text-primary me-2"></i>
                                                <div>
                                                    <small class="text-muted d-block">Deadline</small>
                                                    <strong
                                                        class="text-dark">{{ \Carbon\Carbon::parse($competition['deadline'])->format('d M Y') }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="info-card p-3 rounded-3"
                                            style="background: rgba(16, 185, 129, 0.1); border: 1px solid rgba(16, 185, 129, 0.2);">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-users text-success me-2"></i>
                                                <div>
                                                    <small class="text-muted d-block">Format</small>
                                                    <strong class="text-dark">Tim/Individu</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Competition Highlights -->
                                <div class="detail-highlights mb-4">
                                    <h5 class="mb-3 fw-bold"
                                        style="color: {{ $index == 0 ? '#667eea' : ($index == 1 ? '#f5576c' : ($index == 2 ? '#4facfe' : '#43e97b')) }};">
                                        Highlights Kompetisi</h5>
                                    <div class="highlights-list">
                                        @if($index == 0)
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #667eea;">
                                                <i class="fas fa-check text-success me-2"></i>Tema bebas (sosial, edukasi,
                                                lingkungan, ekonomi)
                                            </div>
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #667eea;">
                                                <i class="fas fa-check text-success me-2"></i>Website fungsional dan menarik
                                            </div>
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #667eea;">
                                                <i class="fas fa-check text-success me-2"></i>Presentasi dan demo ke juri
                                            </div>
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #667eea;">
                                                <i class="fas fa-check text-success me-2"></i>Cocok untuk pelajar SMA/SMK
                                            </div>
                                        @elseif($index == 1)
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #f5576c;">
                                                <i class="fas fa-check text-success me-2"></i>Khusus mahasiswa Teknik Informatika
                                                UNIKOM
                                            </div>
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #f5576c;">
                                                <i class="fas fa-check text-success me-2"></i>Logo resmi prodi yang akan digunakan
                                            </div>
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #f5576c;">
                                                <i class="fas fa-check text-success me-2"></i>Presentasi dan voting online
                                            </div>
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #f5576c;">
                                                <i class="fas fa-check text-success me-2"></i>Representasi visi dan nilai prodi
                                            </div>
                                        @elseif($index == 2)
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #4facfe;">
                                                <i class="fas fa-check text-success me-2"></i>Tantangan cybersecurity seru
                                            </div>
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #4facfe;">
                                                <i class="fas fa-check text-success me-2"></i>Peserta individu (1 orang)
                                            </div>
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #4facfe;">
                                                <i class="fas fa-check text-success me-2"></i>Online competition
                                            </div>
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #4facfe;">
                                                <i class="fas fa-check text-success me-2"></i>Ethical hacking challenges
                                            </div>
                                        @else
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #43e97b;">
                                                <i class="fas fa-check text-success me-2"></i>Tim 5-6 orang
                                            </div>
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #43e97b;">
                                                <i class="fas fa-check text-success me-2"></i>Terbuka untuk pelajar SMA/SMK se-Jawa
                                                Barat
                                            </div>
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #43e97b;">
                                                <i class="fas fa-check text-success me-2"></i>Fokus strategi dan kerjasama tim
                                            </div>
                                            <div class="highlight-item mb-2 p-3 rounded-3"
                                                style="background: #f8fafc; border-left: 4px solid #43e97b;">
                                                <i class="fas fa-check text-success me-2"></i>Online & Offline tournament
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- CTA Button -->
                                <div class="detail-cta">
                                    <a href="{{ route('registration') }}"
                                        class="btn btn-lg px-4 py-3 rounded-pill fw-bold text-white"
                                        style="background: {{ $index == 0 ? 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)' : ($index == 1 ? 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)' : ($index == 2 ? 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)' : 'linear-gradient(135deg, #43e97b 0%, #38f9d7 100%)')) }}; border: none; transition: all 0.3s ease;"
                                        onmouseover="this.style.transform='scale(1.05)'"
                                        onmouseout="this.style.transform='scale(1)'">
                                        <i class="fas fa-rocket me-2"></i>Daftar Kategori Ini
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('styles')
        <style>
            @keyframes float {

                0%,
                100% {
                    transform: translateY(0px) rotate(0deg);
                }

                50% {
                    transform: translateY(-20px) rotate(5deg);
                }
            }

            @keyframes pulse {

                0%,
                100% {
                    transform: translate(-50%, -50%) scale(1);
                }

                50% {
                    transform: translate(-50%, -50%) scale(1.05);
                }
            }

            .competition-card:hover img {
                transform: scale(1.1);
            }

            .competition-item {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            .filter-btn {
                transition: all 0.3s ease;
            }
            
            .competition-detail {
                transition: all 0.3s ease;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            // Filter functionality with data attributes
            document.addEventListener('DOMContentLoaded', function() {
                // Add data attributes to filter buttons
                const filterButtons = document.querySelectorAll('.d-flex.gap-2 .btn');
                const filterData = ['all', 'technology', 'design', 'gaming', 'security'];
                
                filterButtons.forEach((btn, index) => {
                    btn.setAttribute('data-filter', filterData[index]);
                    btn.classList.add('filter-btn');
                });
                
                // Add data attributes to competition cards
                const competitionCards = document.querySelectorAll('.competition-card');
                const categories = ['technology', 'design', 'security', 'gaming'];
                
                competitionCards.forEach((card, index) => {
                    card.parentElement.setAttribute('data-category', categories[index]);
                    card.parentElement.classList.add('competition-item');
                });
                
                // Filter button functionality
                filterButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const filter = this.getAttribute('data-filter');
                        
                        // Update active button
                        filterButtons.forEach(btn => {
                            btn.classList.remove('btn-primary');
                            btn.classList.add('btn-outline-secondary');
                            btn.style.background = 'transparent';
                            btn.style.color = '#6b7280';
                        });
                        
                        this.classList.remove('btn-outline-secondary');
                        this.classList.add('btn-primary');
                        this.style.background = '#3b82f6';
                        this.style.color = 'white';
                        
                        // Filter competitions with animation
                        const competitionItems = document.querySelectorAll('.competition-item');
                        competitionItems.forEach(item => {
                            const category = item.getAttribute('data-category');
                            if (filter === 'all' || category === filter) {
                                item.style.display = 'block';
                                item.style.opacity = '0';
                                item.style.transform = 'scale(0.8)';
                                setTimeout(() => {
                                    item.style.opacity = '1';
                                    item.style.transform = 'scale(1)';
                                }, 100);
                            } else {
                                item.style.opacity = '0';
                                item.style.transform = 'scale(0.8)';
                                setTimeout(() => {
                                    item.style.display = 'none';
                                }, 300);
                            }
                        });
                    });
                });
            });
            
            function showCompetitionDetail(index) {
                // Scroll to detail section
                const detailSection = document.getElementById('detail-section');
                if (detailSection) {
                    detailSection.style.display = 'block';
                    detailSection.scrollIntoView({ behavior: 'smooth' });
                }
                
                // Hide all details with animation
                document.querySelectorAll('.competition-detail').forEach(detail => {
                    detail.style.opacity = '0';
                    detail.style.transform = 'translateX(20px)';
                    setTimeout(() => {
                        detail.style.display = 'none';
                    }, 200);
                });

                // Hide default state
                const defaultDetail = document.getElementById('default-detail');
                if (defaultDetail) {
                    defaultDetail.style.display = 'none';
                }

                // Remove active state from all cards
                document.querySelectorAll('.competition-card').forEach((card, i) => {
                    card.style.transform = 'translateY(0)';
                    card.style.boxShadow = '0 4px 20px rgba(0,0,0,0.08)';
                    card.style.border = '1px solid rgba(0,0,0,0.05)';
                });

                // Show selected detail with animation
                setTimeout(() => {
                    const selectedDetail = document.getElementById('detail-' + index);
                    if (selectedDetail) {
                        selectedDetail.style.display = 'block';
                        setTimeout(() => {
                            selectedDetail.style.opacity = '1';
                            selectedDetail.style.transform = 'translateX(0)';
                        }, 50);
                    }
                }, 200);

                // Add active state to selected card
                const activeCard = document.getElementById('card-' + index);
                if (activeCard) {
                    const colors = ['#3b82f6', '#8b5cf6', '#06b6d4', '#10b981'];
                    activeCard.style.border = `2px solid ${colors[index]}`;
                    activeCard.style.transform = 'translateY(-12px)';
                    activeCard.style.boxShadow = `0 20px 50px ${colors[index]}40`;
                }
            }
            
            // Featured competition and CTA button functionality
            document.addEventListener('DOMContentLoaded', function() {
                // Featured banner Learn More button
                const learnMoreBtn = document.querySelector('.featured-competition .btn-light');
                if (learnMoreBtn) {
                    learnMoreBtn.addEventListener('click', function() {
                        document.querySelector('.row.g-4').scrollIntoView({ behavior: 'smooth' });
                    });
                }
                
                // Ready to showcase Learn More button
                const showcaseLearnMore = document.querySelector('.text-center.p-5 .btn-outline-primary');
                if (showcaseLearnMore) {
                    showcaseLearnMore.addEventListener('click', function() {
                        document.querySelector('.section-padding.bg-dark').scrollIntoView({ behavior: 'smooth' });
                    });
                }
                
                // Add smooth transitions to all cards
                const cards = document.querySelectorAll('.competition-card');
                cards.forEach(card => {
                    card.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
                });
                
                // Add loading animation on page load
                const competitionItems = document.querySelectorAll('.competition-item');
                competitionItems.forEach((item, index) => {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, index * 100 + 200);
                });
            });
        </script>
    @endpush

    <!-- Competition Rules Section -->
    <section class="section-padding bg-primary text-white">
        <div class="container">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="display-6 fw-bold mb-3">Syarat & Ketentuan</h2>
                    <p class="lead text-center">Pastikan kamu memenuhi semua persyaratan untuk kategori yang dipilih</p>
                </div>


            </div>

            <div class="row g-4 justify-content-center">
                <!-- Web Development Guide -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="rules-card h-100">
                        <div class="rules-card-inner">
                            <div class="rules-preview">
                                <div class="rules-mockup">
                                    <div class="mockup-header">
                                        <div class="mockup-dots">
                                            <span></span><span></span><span></span>
                                        </div>
                                    </div>
                                    <div class="mockup-content">
                                        <div class="mockup-line"></div>
                                        <div class="mockup-line short"></div>
                                        <div class="mockup-line"></div>
                                        <div class="mockup-line medium"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="rules-content">
                                <div class="rules-icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                <h5 class="rules-title">Web Development</h5>
                                <p class="rules-desc">Panduan lengkap kompetisi pengembangan website dengan tema bebas dan
                                    solusi inovatif.</p>
                                <a href="{{ asset('pdf/Guide Book Web Development.pdf') }}" class="rules-btn"
                                    target="_blank">
                                    <span>Download PDF</span>
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logo Sayembara Guide -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="rules-card h-100">
                        <div class="rules-card-inner">
                            <div class="rules-preview">
                                <div class="rules-mockup">
                                    <div class="mockup-header">
                                        <div class="mockup-dots">
                                            <span></span><span></span><span></span>
                                        </div>
                                    </div>
                                    <div class="mockup-content">
                                        <div class="mockup-line"></div>
                                        <div class="mockup-line short"></div>
                                        <div class="mockup-line"></div>
                                        <div class="mockup-line medium"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="rules-content">
                                <div class="rules-icon">
                                    <i class="fas fa-palette"></i>
                                </div>
                                <h5 class="rules-title">Sayembara Logo</h5>
                                <p class="rules-desc">Panduan dan ketentuan sayembara logo resmi prodi Teknik Informatika
                                    UNIKOM.</p>
                                <a href="{{ asset('pdf/Guide Book Sayembara Logo.pdf') }}" class="rules-btn"
                                    target="_blank">
                                    <span>Download PDF</span>
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTF Guide -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="rules-card h-100">
                        <div class="rules-card-inner">
                            <div class="rules-preview">
                                <div class="rules-mockup">
                                    <div class="mockup-header">
                                        <div class="mockup-dots">
                                            <span></span><span></span><span></span>
                                        </div>
                                    </div>
                                    <div class="mockup-content">
                                        <div class="mockup-line"></div>
                                        <div class="mockup-line short"></div>
                                        <div class="mockup-line"></div>
                                        <div class="mockup-line medium"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="rules-content">
                                <div class="rules-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h5 class="rules-title">Capture The Flag</h5>
                                <p class="rules-desc">Panduan kompetisi cybersecurity dengan berbagai tantangan ethical
                                    hacking.</p>
                                <a href="{{ asset('pdf/Guide Book CTF.pdf') }}" class="rules-btn" target="_blank">
                                    <span>Download PDF</span>
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Legends Guide -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="rules-card h-100">
                        <div class="rules-card-inner">
                            <div class="rules-preview">
                                <div class="rules-mockup">
                                    <div class="mockup-header">
                                        <div class="mockup-dots">
                                            <span></span><span></span><span></span>
                                        </div>
                                    </div>
                                    <div class="mockup-content">
                                        <div class="mockup-line"></div>
                                        <div class="mockup-line short"></div>
                                        <div class="mockup-line"></div>
                                        <div class="mockup-line medium"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="rules-content">
                                <div class="rules-icon">
                                    <i class="fas fa-gamepad"></i>
                                </div>
                                <h5 class="rules-title">Mobile Legends</h5>
                                <p class="rules-desc">Panduan turnamen Mobile Legends dengan format tim dan strategi
                                    kompetitif.</p>
                                <a href="{{ asset('pdf/Guide Book Mobile Legends.pdf') }}" class="rules-btn"
                                    target="_blank">
                                    <span>Download PDF</span>
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="display-6 fw-bold mb-3 mt-5">Panduan Acara</h2>
                    <p class="lead text-white-50 text-center">Download panduan untuk acara pembukaan dan seminar</p>
                </div>

                <div class="row g-4 justify-content-center">
                    <!-- Opening Guide -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="rules-card h-100">
                            <div class="rules-card-inner">
                                <div class="rules-preview">
                                    <div class="rules-mockup">
                                        <div class="mockup-header">
                                            <div class="mockup-dots">
                                                <span></span><span></span><span></span>
                                            </div>
                                        </div>
                                        <div class="mockup-content">
                                            <div class="mockup-line"></div>
                                            <div class="mockup-line short"></div>
                                            <div class="mockup-line"></div>
                                            <div class="mockup-line medium"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rules-content">
                                    <div class="rules-icon">
                                        <i class="fas fa-flag"></i>
                                    </div>
                                    <h5 class="rules-title">Opening Ceremony</h5>
                                    <p class="rules-desc">Panduan acara pembukaan Innoventure Unikom 2025 dan rundown
                                        kegiatan.</p>
                                    <a href="{{ asset('pdf/Guide Book Opening.pdf') }}" class="rules-btn" target="_blank">
                                        <span>Download PDF</span>
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seminar Guide -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="rules-card h-100">
                            <div class="rules-card-inner">
                                <div class="rules-preview">
                                    <div class="rules-mockup">
                                        <div class="mockup-header">
                                            <div class="mockup-dots">
                                                <span></span><span></span><span></span>
                                            </div>
                                        </div>
                                        <div class="mockup-content">
                                            <div class="mockup-line"></div>
                                            <div class="mockup-line short"></div>
                                            <div class="mockup-line"></div>
                                            <div class="mockup-line medium"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rules-content">
                                    <div class="rules-icon">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                    </div>
                                    <h5 class="rules-title">Seminar</h5>
                                    <p class="rules-desc">Panduan seminar teknologi dan inovasi dengan pembicara ahli di
                                        bidangnya.</p>
                                    <a href="{{ asset('pdf/Guide Book Seminar.pdf') }}" class="rules-btn" target="_blank">
                                        <span>Download PDF</span>
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0f172a" fill-opacity="1" d="M0,96L0,224L110.8,224L110.8,288L221.5,288L221.5,192L332.3,192L332.3,224L443.1,224L443.1,160L553.8,160L553.8,96L664.6,96L664.6,192L775.4,192L775.4,128L886.2,128L886.2,288L996.9,288L996.9,320L1107.7,320L1107.7,64L1218.5,64L1218.5,256L1329.2,256L1329.2,32L1440,32L1440,0L1329.2,0L1329.2,0L1218.5,0L1218.5,0L1107.7,0L1107.7,0L996.9,0L996.9,0L886.2,0L886.2,0L775.4,0L775.4,0L664.6,0L664.6,0L553.8,0L553.8,0L443.1,0L443.1,0L332.3,0L332.3,0L221.5,0L221.5,0L110.8,0L110.8,0L0,0L0,0Z"></path></svg>

    <!-- section persyaratan -->
    <section class="section p-5 bg-light">
        <div class="row">
            <div class="col-lg-6 mb-4 " data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-user-graduate text-primary fs-3 me-3"></i>
                            <h4 class="card-title mb-0">Persyaratan Peserta</h4>
                        </div>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Web Dev & ML
                                    Tournament:</strong> Pelajar SMA/SMK</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Logo VIZION:</strong>
                                Mahasiswa Teknik Informatika UNIKOM</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>CTF:</strong> Terbuka
                                untuk semua (individu)</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>ML Tournament:</strong>
                                Tim 5-6 orang (Jabar)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-file-alt text-info fs-3 me-3"></i>
                            <h4 class="card-title mb-0">Dokumen yang Diperlukan</h4>
                        </div>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Kartu pelajar/mahasiswa yang
                                masih berlaku</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Surat keterangan aktif
                                sekolah/kuliah</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Dokumen karya/proposal sesuai
                                kategori</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Data tim lengkap (untuk kategori
                                tim)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <div class="alert alert-info d-inline-block">
                <i class="fas fa-info-circle me-2"></i>
                <strong>Catatan:</strong> Setiap peserta hanya boleh mengikuti satu kategori lomba
            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0f172a" fill-opacity="1"
            d="M0,320L0,128L130.9,128L130.9,160L261.8,160L261.8,192L392.7,192L392.7,128L523.6,128L523.6,192L654.5,192L654.5,224L785.5,224L785.5,64L916.4,64L916.4,64L1047.3,64L1047.3,256L1178.2,256L1178.2,224L1309.1,224L1309.1,96L1440,96L1440,320L1309.1,320L1309.1,320L1178.2,320L1178.2,320L1047.3,320L1047.3,320L916.4,320L916.4,320L785.5,320L785.5,320L654.5,320L654.5,320L523.6,320L523.6,320L392.7,320L392.7,320L261.8,320L261.8,320L130.9,320L130.9,320L0,320L0,320Z">
        </path>
    </svg>


    <!-- CTA Section -->
    <section class="section-padding bg-primary text-white">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h2 class="display-5 fw-bold mb-4">Sudah Menentukan Pilihan?</h2>
                    <p class="lead mb-5">
                        Jangan tunda lagi! Daftarkan dirimu sekarang dan mulai perjalanan inovasimu bersama Innoventure
                        Unikom 2025.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                        <a href="{{ route('registration') }}" class="btn btn-warning btn-lg px-5 py-3 rounded-pill">
                            <i class="fas fa-rocket me-2"></i> Daftar Sekarang
                        </a>
                        <a href="{{ route('faq') }}" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill">
                            <i class="fas fa-question-circle me-2"></i> Lihat FAQ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection