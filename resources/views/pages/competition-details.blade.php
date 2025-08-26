@extends('layouts.app')

@section('title', $competition['title'] . ' - Innoventure Unikom 2025')
@section('description', $competition['description'])

@section('content')
    <!-- Hero Section -->
    <div class="position-relative overflow-hidden" style="height: 400px;">
        <img src="{{ asset('image/' . $competition['image']) }}" alt="{{ $competition['title'] }}"
            class="w-100 h-100 object-fit-cover">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-75"></div>
        
        <!-- Back Button -->
        <div class="position-absolute top-0 start-0 p-4">
            <a href="{{ route('competitions') }}" class="btn btn-light btn-sm rounded-pill">
                <i class="fas fa-chevron-left me-2"></i>Kembali ke Lomba
            </a>
        </div>
        
        <!-- Hero Content -->
        <div class="position-absolute bottom-0 start-0 w-100 p-4 p-md-5">
            <div class="container">
                <span class="badge {{ $competition['status'] === 'open' ? 'bg-success' : 'bg-danger' }} mb-3">
                    {{ $competition['status'] === 'open' ? 'TERBUKA' : 'TUTUP' }}
                </span>
                <h1 class="display-4 fw-bold text-white mb-3">{{ $competition['title'] }}</h1>
                <div class="d-flex flex-wrap gap-4 text-white">
                    <span><i class="fas fa-calendar me-2"></i>{{ $competition['date'] }}</span>
                    <span><i class="fas fa-trophy me-2"></i>{{ $competition['prize'] }}</span>
                    <span><i class="fas fa-users me-2"></i>{{ $competition['participants'] }} Peserta</span>
                    <span class="badge bg-primary">{{ ucfirst($competition['category']) }}</span>
                </div>
            </div>
        </div>
    </div>

    <main class="container py-5">
        <div class="row g-5">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Overview -->
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="h3 fw-bold mb-4 text-dark">Overview</h2>
                        <p class="mb-4" style="color: #475569; font-size: 1.1rem; line-height: 1.7;">{{ $competition['description'] }}</p>
                        
                        <!-- Key Dates -->
                        <div class="row g-4 mb-4">
                            <div class="col-md-4">
                                <div class="bg-primary bg-opacity-10 rounded-3 p-4 border border-primary border-opacity-25">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary bg-opacity-25 rounded-circle p-2 me-3">
                                            <i class="fas fa-calendar text-primary"></i>
                                        </div>
                                        <span class="fw-medium text-dark">Deadline Daftar</span>
                                    </div>
                                    <p class="h5 fw-bold mb-0 text-dark">{{ $competition['registration_deadline'] }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-warning bg-opacity-10 rounded-3 p-4 border border-warning border-opacity-25">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-warning bg-opacity-25 rounded-circle p-2 me-3">
                                            <i class="fas fa-clock text-warning"></i>
                                        </div>
                                        <span class="fw-medium text-dark">Deadline Submit</span>
                                    </div>
                                    <p class="h5 fw-bold mb-0 text-dark">{{ $competition['submission_deadline'] }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-success bg-opacity-10 rounded-3 p-4 border border-success border-opacity-25">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-success bg-opacity-25 rounded-circle p-2 me-3">
                                            <i class="fas fa-trophy text-success"></i>
                                        </div>
                                        <span class="fw-medium text-dark">Pengumuman</span>
                                    </div>
                                    <p class="h5 fw-bold mb-0 text-dark">{{ $competition['end_date'] }}</p>
                                </div>
                            </div>
                        </div>
                        
                        @if($competition['status'] === 'open')
                        <div class="rounded-3 p-4 text-white d-flex flex-column flex-md-row align-items-md-center justify-content-between" style="background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%); box-shadow: 0 8px 32px rgba(59, 130, 246, 0.3);">
                            <div class="mb-3 mb-md-0">
                                <div class="small mb-1" style="color: rgba(255,255,255,0.8);">Waktu Tersisa</div>
                                <div class="h4 fw-bold mb-0" style="color: white; text-shadow: 0 1px 2px rgba(0,0,0,0.1);">15 hari untuk mendaftar</div>
                            </div>
                            <a href="{{ route('registration') }}" class="btn btn-light fw-medium px-4 py-2" style="color: #1e40af; font-weight: 600; border-radius: 8px; box-shadow: 0 4px 12px rgba(255,255,255,0.3);">
                                Daftar Sekarang
                            </a>
                        </div>
                        @endif
                    </div>
                </div>

                @if(isset($competition['requirements']))
                <!-- Requirements -->
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="h3 fw-bold mb-4 text-dark">Persyaratan</h2>
                        <ul class="list-unstyled">
                            @foreach($competition['requirements'] as $requirement)
                            <li class="d-flex align-items-start mb-3 p-3 rounded-3" style="background: #f8fafc; border-left: 4px solid #10b981;">
                                <i class="fas fa-check-circle me-3 mt-1" style="color: #10b981; font-size: 1.1rem;"></i>
                                <span style="color: #374151; font-size: 1rem; line-height: 1.6;">{{ $requirement }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

                @if(isset($competition['timeline']))
                <!-- Timeline -->
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="h3 fw-bold mb-4 text-dark">Timeline Kompetisi</h2>
                        <div class="position-relative">
                            @foreach($competition['timeline'] as $index => $item)
                            <div class="d-flex mb-4">
                                <div class="position-relative d-flex flex-column align-items-center me-4">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center {{ $index === 0 ? 'bg-primary text-white' : ($index < 3 ? 'bg-primary bg-opacity-25 text-primary' : 'bg-light text-muted') }}" 
                                         style="width: 32px; height: 32px; z-index: 10;">
                                        {{ $index + 1 }}
                                    </div>
                                    @if($index < count($competition['timeline']) - 1)
                                    <div class="position-absolute bg-{{ $index < 2 ? 'primary' : 'light' }}" 
                                         style="width: 2px; height: 100%; top: 32px;"></div>
                                    @endif
                                </div>
                                <div class="flex-grow-1 pb-2">
                                    <div class="small fw-medium {{ $index === 0 ? 'text-primary' : 'text-secondary' }}" style="font-size: 0.9rem;">
                                        {{ $item['date'] }}
                                    </div>
                                    <div class="fw-semibold {{ $index === 0 ? 'text-dark' : 'text-secondary' }}" style="font-size: 1.1rem;">
                                        {{ $item['event'] }}
                                    </div>
                                    @if($index === 0)
                                    <span class="badge bg-primary bg-opacity-25 text-primary small mt-1">
                                        Tahap Saat Ini
                                    </span>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                @if(isset($competition['prize_breakdown']))
                <!-- Prizes -->
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="h3 fw-bold mb-4 text-dark">Hadiah</h2>
                        <div class="row g-4">
                            @foreach($competition['prize_breakdown'] as $index => $prize)
                            <div class="col-md-4">
                                <div class="text-center rounded-3 p-4 {{ $index === 0 ? 'bg-warning bg-opacity-10 border border-warning border-opacity-25' : ($index === 1 ? 'bg-secondary bg-opacity-10 border border-secondary border-opacity-25' : 'bg-danger bg-opacity-10 border border-danger border-opacity-25') }}">
                                    <div class="rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3 {{ $index === 0 ? 'bg-warning bg-opacity-25' : ($index === 1 ? 'bg-secondary bg-opacity-25' : 'bg-danger bg-opacity-25') }}" 
                                         style="width: 64px; height: 64px;">
                                        <i class="fas fa-trophy fs-4 {{ $index === 0 ? 'text-warning' : ($index === 1 ? 'text-secondary' : 'text-danger') }}"></i>
                                    </div>
                                    <h3 class="h5 fw-bold mb-2 text-dark">{{ $prize['position'] }}</h3>
                                    <div class="h4 fw-bold" style="color: #1e40af;">{{ $prize['amount'] }}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="mt-4 p-4 rounded-3" style="background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(30, 64, 175, 0.05) 100%); border: 1px solid rgba(59, 130, 246, 0.2);">
                            <p class="text-center mb-0" style="color: #374151; font-weight: 500; font-size: 1rem;">
                                <i class="fas fa-certificate text-primary me-2"></i>
                                Semua finalis akan mendapat sertifikat dan kesempatan mentoring dengan ahli industri.
                            </p>
                        </div>
                    </div>
                </div>
                @endif

                @if(isset($competition['judges']))
                
                @endif

                <!-- FAQ -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="h3 fw-bold mb-4 text-dark">FAQ</h2>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item border rounded-3 mb-3">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="color: #374151; font-size: 1rem;">
                                        Bisakah saya berpartisipasi sebagai tim?
                                    </button>
                                </h3>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="color: #475569; font-size: 1rem; line-height: 1.6;">
                                        Ya, Anda bisa berpartisipasi secara individu atau sebagai tim maksimal 4 orang.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border rounded-3 mb-3">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="color: #374151; font-size: 1rem;">
                                        Apakah ada batasan usia?
                                    </button>
                                </h3>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="color: #475569; font-size: 1rem; line-height: 1.6;">
                                        Peserta harus berusia minimal 17 tahun atau memiliki izin orang tua.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Action Card -->
                <div class="card border-0 shadow-sm sticky-top mb-4" style="top: 100px;">
                    <div class="card-body p-4">
                        @if($competition['status'] === 'open')
                        <div class="mb-4">
                            <a href="{{ route('registration') }}" class="btn w-100 py-3 fw-medium mb-3 text-white" style="background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%); border: none; border-radius: 12px; box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 35px rgba(59, 130, 246, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(59, 130, 246, 0.3)'">
                                <i class="fas fa-rocket me-2"></i>Daftar Kompetisi Ini
                            </a>
                            <p class="text-center small mb-0" style="color: #64748b; font-weight: 500;">
                                Pendaftaran ditutup {{ $competition['registration_deadline'] }}
                            </p>
                        </div>
                        @else
                        <div class="mb-4 p-3 rounded-3 text-center" style="background: linear-gradient(135deg, rgba(239, 68, 68, 0.1) 0%, rgba(220, 38, 38, 0.05) 100%); border: 1px solid rgba(239, 68, 68, 0.2);">
                            <p class="fw-medium mb-0" style="color: #dc2626;">Kompetisi ini sudah ditutup</p>
                        </div>
                        @endif
                        
                        <div class="border-top pt-4">
                            <div class="d-flex justify-content-between py-3 border-bottom" style="border-color: rgba(59, 130, 246, 0.1) !important;">
                                <span style="color: #64748b; font-weight: 500;">Kategori</span>
                                <span class="fw-semibold" style="color: #374151;">{{ ucfirst($competition['category']) }}</span>
                            </div>
                            <div class="d-flex justify-content-between py-3 border-bottom" style="border-color: rgba(59, 130, 246, 0.1) !important;">
                                <span style="color: #64748b; font-weight: 500;">Mulai</span>
                                <span class="fw-semibold" style="color: #374151;">{{ $competition['start_date'] }}</span>
                            </div>
                            <div class="d-flex justify-content-between py-3 border-bottom" style="border-color: rgba(59, 130, 246, 0.1) !important;">
                                <span style="color: #64748b; font-weight: 500;">Berakhir</span>
                                <span class="fw-semibold" style="color: #374151;">{{ $competition['end_date'] }}</span>
                            </div>
                            <div class="d-flex justify-content-between py-3 border-bottom" style="border-color: rgba(59, 130, 246, 0.1) !important;">
                                <span style="color: #64748b; font-weight: 500;">Peserta</span>
                                <span class="fw-semibold" style="color: #374151;">{{ $competition['participants'] }}</span>
                            </div>
                            <div class="d-flex justify-content-between py-3">
                                <span style="color: #64748b; font-weight: 500;">Total Hadiah</span>
                                <span class="fw-bold" style="color: #1e40af;">{{ $competition['prize'] }}</span>
                            </div>
                        </div>
                        
                        <div class="d-flex gap-2 mt-4">
                            <button class="btn flex-fill" style="border: 1px solid #cbd5e1; color: #475569; background: white; border-radius: 8px; transition: all 0.3s ease;" onmouseover="this.style.background='#f8fafc'; this.style.borderColor='#3b82f6'; this.style.color='#3b82f6'" onmouseout="this.style.background='white'; this.style.borderColor='#cbd5e1'; this.style.color='#475569'">
                                <i class="fas fa-share-alt me-2"></i>Share
                            </button>
                            <button class="btn flex-fill" style="border: 1px solid #cbd5e1; color: #475569; background: white; border-radius: 8px; transition: all 0.3s ease;" onmouseover="this.style.background='#f8fafc'; this.style.borderColor='#3b82f6'; this.style.color='#3b82f6'" onmouseout="this.style.background='white'; this.style.borderColor='#cbd5e1'; this.style.color='#475569'">
                                <i class="fas fa-bookmark me-2"></i>Save
                            </button>
                        </div>
                    </div>
                </div>

            
            
            </div>
        </div>
    </main>
@endsection

@push('styles')
<style>
.bg-gradient-primary {
    background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
}
.object-fit-cover {
    object-fit: cover;
}

/* Custom color scheme matching Innoventure theme */
.text-primary {
    color: #3b82f6 !important;
}

.bg-primary {
    background-color: #3b82f6 !important;
}

.btn-primary {
    background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
    border: none;
    color: white;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
}

/* Enhanced text contrast */
.card-body h2, .card-body h3, .card-body h5 {
    color: #1e293b !important;
    font-weight: 700;
}

.card-body p, .card-body span {
    color: #475569 !important;
}

/* Status badges with better contrast */
.badge.bg-success {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
    color: white;
    font-weight: 600;
    text-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.badge.bg-danger {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important;
    color: white;
    font-weight: 600;
    text-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

/* Info cards with Innoventure theme colors */
.bg-primary.bg-opacity-10 {
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(30, 64, 175, 0.05) 100%) !important;
    border: 1px solid rgba(59, 130, 246, 0.2) !important;
}

.bg-warning.bg-opacity-10 {
    background: linear-gradient(135deg, rgba(245, 158, 11, 0.1) 0%, rgba(217, 119, 6, 0.05) 100%) !important;
    border: 1px solid rgba(245, 158, 11, 0.2) !important;
}

.bg-success.bg-opacity-10 {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(5, 150, 105, 0.05) 100%) !important;
    border: 1px solid rgba(16, 185, 129, 0.2) !important;
}

/* Timeline styling */
.bg-primary.text-white {
    background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%) !important;
    color: white !important;
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
}

.bg-primary.bg-opacity-25 {
    background: rgba(59, 130, 246, 0.25) !important;
    color: #1e40af !important;
    font-weight: 600;
}

/* Prize cards with distinct colors */
.bg-warning.bg-opacity-10 {
    background: linear-gradient(135deg, rgba(245, 158, 11, 0.15) 0%, rgba(217, 119, 6, 0.1) 100%) !important;
}

.bg-secondary.bg-opacity-10 {
    background: linear-gradient(135deg, rgba(107, 114, 128, 0.15) 0%, rgba(75, 85, 99, 0.1) 100%) !important;
}

.bg-danger.bg-opacity-10 {
    background: linear-gradient(135deg, rgba(239, 68, 68, 0.15) 0%, rgba(220, 38, 38, 0.1) 100%) !important;
}

/* Enhanced sidebar */
.sticky-top {
    background: white;
    border: 1px solid rgba(59, 130, 246, 0.1);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
}

/* Accordion styling */
.accordion-button {
    background: #f8fafc;
    color: #1e293b;
    font-weight: 600;
    border: none;
}

.accordion-button:not(.collapsed) {
    background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
    color: white;
    box-shadow: none;
}

.accordion-button:focus {
    box-shadow: 0 0 0 0.25rem rgba(59, 130, 246, 0.25);
}

/* Hero section text enhancement */
.display-4 {
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

/* Support card styling */
.bg-primary.bg-opacity-10.border-primary {
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(30, 64, 175, 0.05) 100%) !important;
    border: 1px solid rgba(59, 130, 246, 0.2) !important;
}

/* Button hover effects */
.btn-outline-secondary:hover {
    background: #f1f5f9;
    border-color: #cbd5e1;
    color: #475569;
    transform: translateY(-1px);
}

/* Enhanced contrast for muted text */
.text-muted {
    color: #64748b !important;
}

/* Card shadows and borders */
.card {
    border: 1px solid rgba(59, 130, 246, 0.1);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}

.card:hover {
    box-shadow: 0 8px 32px rgba(59, 130, 246, 0.15);
    transform: translateY(-2px);
}
</style>
@endpush