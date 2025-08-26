@extends('layouts.app')

@section('title', 'FAQ - Innoventure Unikom 2025')
@section('description', 'Pertanyaan yang sering diajukan tentang Innoventure Unikom 2025. Temukan jawaban untuk pertanyaanmu di sini!')

@section('content')
<!-- Page Header -->
<section class="page-header text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <h1 class="display-4 fw-bold mb-4">
                    <span style="color: #fff;">Frequently Asked Questions</span>
                </h1>
                <p class="lead">
                    Temukan jawaban untuk pertanyaan yang sering diajukan tentang Innoventure Unikom 2025
                </p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    @foreach($faqs as $index => $faq)
                    <div class="accordion-item border-0 shadow-sm mb-3" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <h2 class="accordion-header" id="heading{{ $index }}">
                            <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }} fs-5 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                <i class="fas fa-question-circle text-primary me-3"></i>
                                {{ $faq['question'] }}
                            </button>
                        </h2>
                        <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                            <div class="accordion-body fs-6 text-muted">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Additional FAQs -->
                    <div class="accordion-item border-0 shadow-sm mb-3" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                <i class="fas fa-question-circle text-primary me-3"></i>
                                Apakah boleh mengikuti lebih dari satu kategori lomba?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body fs-6 text-muted">
                                <i class="fas fa-times-circle text-danger me-2"></i>
                                Tidak, setiap peserta hanya boleh mengikuti satu kategori lomba saja untuk memastikan fokus dan kualitas submission.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <i class="fas fa-question-circle text-primary me-3"></i>
                                Berapa maksimal anggota dalam satu tim?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body fs-6 text-muted">
                                <i class="fas fa-users text-info me-2"></i>
                                Maksimal 4 orang per tim, termasuk ketua tim. Tim dapat terdiri dari mahasiswa lintas jurusan atau universitas.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3" data-aos="fade-up" data-aos-delay="500">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                <i class="fas fa-question-circle text-primary me-3"></i>
                                Apa saja dokumen yang harus disiapkan?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqAccordion">
                            <div class="accordion-body fs-6 text-muted">
                                <i class="fas fa-file-alt text-warning me-2"></i>
                                Dokumen yang diperlukan: KTM, Surat Keterangan Aktif Kuliah, Proposal/Business Plan, dan CV singkat (untuk tim).
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3" data-aos="fade-up" data-aos-delay="600">
                        <h2 class="accordion-header" id="heading6">
                            <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                <i class="fas fa-question-circle text-primary me-3"></i>
                                Kapan pengumuman hasil seleksi?
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#faqAccordion">
                            <div class="accordion-body fs-6 text-muted">
                                <i class="fas fa-calendar text-success me-2"></i>
                                Pengumuman finalis akan diumumkan pada 1 Maret 2025 melalui email dan website resmi.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3" data-aos="fade-up" data-aos-delay="700">
                        <h2 class="accordion-header" id="heading7">
                            <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                <i class="fas fa-question-circle text-primary me-3"></i>
                                Apakah ada workshop atau mentoring untuk peserta?
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#faqAccordion">
                            <div class="accordion-body fs-6 text-muted">
                                <i class="fas fa-graduation-cap text-primary me-2"></i>
                                Ya, akan ada workshop persiapan pada 1 Februari 2025 dan sesi mentoring untuk finalis sebelum presentasi final.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3" data-aos="fade-up" data-aos-delay="800">
                        <h2 class="accordion-header" id="heading8">
                            <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                <i class="fas fa-question-circle text-primary me-3"></i>
                                Bagaimana format presentasi final?
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#faqAccordion">
                            <div class="accordion-body fs-6 text-muted">
                                <i class="fas fa-presentation text-info me-2"></i>
                                Presentasi final dilakukan secara offline di kampus Unikom dengan durasi 10 menit presentasi + 5 menit tanya jawab.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3" data-aos="fade-up" data-aos-delay="900">
                        <h2 class="accordion-header" id="heading9">
                            <button class="accordion-button collapsed fs-5 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                <i class="fas fa-question-circle text-primary me-3"></i>
                                Apakah ada sertifikat untuk peserta?
                            </button>
                        </h2>
                        <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#faqAccordion">
                            <div class="accordion-body fs-6 text-muted">
                                <i class="fas fa-certificate text-warning me-2"></i>
                                Ya, semua peserta akan mendapat e-certificate, dan finalis mendapat sertifikat fisik dari Universitas Komputer Indonesia.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Support -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-6 fw-bold mb-3"><span style="color: #000;">Masih</span> <span style="color: #007bff;">Ada</span> <span style="color: #007bff;">Pertanyaan?</span></h2>
            <p class="lead text-muted text-center">Tim kami siap membantu menjawab pertanyaanmu</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-envelope text-primary fs-2"></i>
                        </div>
                        <h5 class="card-title mb-3">Email Support</h5>
                        <p class="card-text text-muted mb-4">
                            Kirim pertanyaan detail via email
                        </p>
                        <a href="mailto:info@innoventure-unikom.ac.id" class="btn btn-primary rounded-pill px-4">
                            <i class="fas fa-envelope me-2"></i> Kirim Email
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <i class="fab fa-whatsapp text-success fs-2"></i>
                        </div>
                        <h5 class="card-title mb-3">WhatsApp</h5>
                        <p class="card-text text-muted mb-4">
                            Chat langsung untuk bantuan cepat
                        </p>
                        <a href="https://wa.me/6282250411900" class="btn btn-success rounded-pill px-4" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i> Chat Sekarang
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-phone text-info fs-2"></i>
                        </div>
                        <h5 class="card-title mb-3">Telepon</h5>
                        <p class="card-text text-muted mb-4">
                            Hubungi langsung via telepon
                        </p>
                        <a href="tel:+622225041190" class="btn btn-info rounded-pill px-4">
                            <i class="fas fa-phone me-2"></i> (022) 2504119
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Tips -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-6 fw-bold mb-3"><span style="color: #000;">Tips</span> <span style="color: #007bff;">Sukses</span></h2>
            <p class="lead text-muted text-center">Beberapa tips untuk memaksimalkan peluang menangmu</p>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-lightbulb text-warning fs-2"></i>
                    </div>
                    <h5 class="mb-3">Ide Inovatif</h5>
                    <p class="text-muted">
                        Pastikan ide kamu unik, solutif, dan memiliki dampak positif bagi masyarakat
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-chart-line text-success fs-2"></i>
                    </div>
                    <h5 class="mb-3">Riset Mendalam</h5>
                    <p class="text-muted">
                        Lakukan riset pasar yang komprehensif dan analisis kompetitor yang detail
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-users text-info fs-2"></i>
                    </div>
                    <h5 class="mb-3">Tim Solid</h5>
                    <p class="text-muted">
                        Bentuk tim dengan skill yang saling melengkapi dan komitmen tinggi
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-presentation text-primary fs-2"></i>
                    </div>
                    <h5 class="mb-3">Presentasi Menarik</h5>
                    <p class="text-muted">
                        Siapkan presentasi yang engaging dengan storytelling yang kuat
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection