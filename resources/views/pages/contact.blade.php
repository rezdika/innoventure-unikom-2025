@extends('layouts.app')

@section('title', 'Kontak - Innoventure Unikom 2025')
@section('description', 'Hubungi tim Innoventure Unikom 2025 untuk pertanyaan, bantuan, atau informasi lebih lanjut')

@section('content')
    <!-- Page Header -->
    <section class="page-header text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4">
                        Hubungi Kami
                    </h1>
                    <p class="lead">
                        Tim kami siap membantu menjawab pertanyaan dan memberikan dukungan yang kamu butuhkan
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-8 mb-5" data-aos="fade-right">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5">
                            <h2 class="text-primary mb-4">
                                <i class="fas fa-paper-plane me-2"></i> Kirim Pesan
                            </h2>
                            <p class="text-muted mb-4">
                                Isi form di bawah ini dan kami akan merespon dalam 24 jam
                            </p>

                            <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Nama Lengkap *</label>
                                        <input type="text" class="form-control form-control-lg" id="name" name="name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email *</label>
                                        <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label">No. WhatsApp</label>
                                        <input type="tel" class="form-control form-control-lg" id="phone" name="phone">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="subject" class="form-label">Subjek *</label>
                                        <select class="form-select form-select-lg" id="subject" name="subject" required>
                                            <option value="">Pilih Subjek</option>
                                            <option value="registration">Pertanyaan Pendaftaran</option>
                                            <option value="competition">Informasi Lomba</option>
                                            <option value="technical">Bantuan Teknis</option>
                                            <option value="partnership">Kerjasama & Sponsorship</option>
                                            <option value="other">Lainnya</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="message" class="form-label">Pesan *</label>
                                    <textarea class="form-control" id="message" name="message" rows="6"
                                        placeholder="Tulis pesan atau pertanyaan kamu di sini..." required></textarea>
                                </div>

                                <div class="mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="copyEmail" name="copyEmail" value="1">
                                        <label class="form-check-label" for="copyEmail">
                                            Kirim salinan pesan ke email saya
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg px-5 py-3 rounded-pill">
                                    <i class="fas fa-paper-plane me-2"></i> Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="sticky-top" style="top: 100px;">
                        <!-- Office Info -->
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body p-4">
                                <h5 class="text-primary mb-4">
                                    <i class="fas fa-building me-2"></i> Informasi Kantor
                                </h5>

                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-map-marker-alt text-danger me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Alamat</h6>
                                        <p class="text-muted mb-0 small">
                                            Jl. Dipati Ukur No.112-116<br>
                                            Lebakgede, Coblong<br>
                                            Bandung, Jawa Barat 40132
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-phone text-success me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Telepon</h6>
                                        <a href="tel:+622225041190" class="text-decoration-none">(022) 2504119</a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-envelope text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Email</h6>
                                        <a href="mailto:info@innoventure-unikom.ac.id"
                                            class="text-decoration-none">info@innoventure-unikom.ac.id</a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <i class="fab fa-whatsapp text-success me-3"></i>
                                    <div>
                                        <h6 class="mb-1">WhatsApp</h6>
                                        <div class="d-flex flex-column gap-1">
                                            <a href="https://wa.me/6281235452002" class="text-decoration-none"
                                                target="_blank">MINNOV 1: +62 812-3545-2002</a>
                                            <a href="https://wa.me/6281235452005" class="text-decoration-none"
                                                target="_blank">MINNOV 2: +62 812-3545-2005</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Office Hours -->
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body p-4">
                                <h5 class="text-primary mb-4">
                                    <i class="fas fa-clock me-2"></i> Jam Operasional
                                </h5>

                                <div class="d-flex justify-content-between mb-2">
                                    <span>Senin - Jumat</span>
                                    <span class="text-muted">08:00 - 17:00</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Sabtu</span>
                                    <span class="text-muted">08:00 - 12:00</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Minggu</span>
                                    <span class="text-danger">Tutup</span>
                                </div>

                                <hr class="my-3">
                                <small class="text-muted">
                                    <i class="fas fa-info-circle me-1"></i>
                                    Support email 24/7, respon dalam 24 jam
                                </small>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h5 class="text-primary mb-4">
                                    <i class="fas fa-share-alt me-2"></i> Ikuti Kami
                                </h5>

                                <div class="d-flex gap-3">
                                    <a href="#" class="btn btn-outline-primary btn-sm rounded-circle text-center">
                                     
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline-info btn-sm rounded-circle">
                                       
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                       
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline-danger btn-sm rounded-circle">
                                       
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>

                                <p class="text-muted small mt-3 mb-0">
                                    Follow untuk update terbaru tentang kompetisi dan event lainnya
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-0">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-12">
                    <div class="bg-light p-4 text-center">
                        <h3 class="text-primary mb-3">
                            <i class="fas fa-map-marked-alt me-2"></i> Lokasi Kami
                        </h3>
                        <p class="text-muted mb-4 text-center">Universitas Komputer Indonesia, Bandung</p>

                        <!-- Embedded Google Maps -->
                        <div class="ratio ratio-21x9" style="max-height: 400px;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0!2d107.5945!3d-6.8745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sUniversitas%20Komputer%20Indonesia!5e0!3m2!1sen!2sid!4v1640000000000!5m2!1sen!2sid"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe><iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0300364084655!2d107.61290647356486!3d-6.887005667388607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f8aa08188b%3A0x632d24e6061e8903!2sUniversitas%20Komputer%20Indonesia%20(UNIKOM)!5e0!3m2!1sid!2sid!4v1755669591745!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Contact -->
    <section class="section-padding bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <h2 class="display-6 fw-bold mb-3">Butuh Bantuan Cepat?</h2>
                    <p class="lead mb-4">
                        Tim support kami siap membantu melalui WhatsApp untuk respon yang lebih cepat
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                    <div class="d-flex gap-3 justify-content-center">
                        <a href="https://wa.me/6281235452002" class="btn btn-success btn-lg px-4 py-3 rounded-pill"
                            target="_blank">
                            <i class="fab fa-whatsapp me-2"></i> MINNOV 1
                        </a>
                        <a href="https://wa.me/6281235452005" class="btn btn-success btn-lg px-4 py-3 rounded-pill"
                            target="_blank">
                            <i class="fab fa-whatsapp me-2"></i> MINNOV 2
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <!-- <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-6 fw-bold text-primary mb-3">Tim Panitia</h2>
                <p class="lead text-muted text-center">Kenalan dengan tim yang akan membantu perjalanan kompetisimu</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-user-tie text-primary fs-2"></i>
                            </div>
                            <h5 class="card-title mb-2">Project Manager</h5>
                            <p class="text-muted small mb-3">Koordinator Umum</p>
                            <a href="mailto:pm@innoventure-unikom.ac.id" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-envelope me-1"></i> Kontak
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-headset text-success fs-2"></i>
                            </div>
                            <h5 class="card-title mb-2">Support Team</h5>
                            <p class="text-muted small mb-3">Bantuan Teknis</p>
                            <a href="mailto:support@innoventure-unikom.ac.id" class="btn btn-outline-success btn-sm">
                                <i class="fas fa-envelope me-1"></i> Kontak
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-users text-info fs-2"></i>
                            </div>
                            <h5 class="card-title mb-2">Community</h5>
                            <p class="text-muted small mb-3">Engagement & Media</p>
                            <a href="mailto:community@innoventure-unikom.ac.id" class="btn btn-outline-info btn-sm">
                                <i class="fas fa-envelope me-1"></i> Kontak
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-handshake text-warning fs-2"></i>
                            </div>
                            <h5 class="card-title mb-2">Partnership</h5>
                            <p class="text-muted small mb-3">Kerjasama & Sponsor</p>
                            <a href="mailto:partnership@innoventure-unikom.ac.id" class="btn btn-outline-warning btn-sm">
                                <i class="fas fa-envelope me-1"></i> Kontak
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<script src="{{ asset('js/contact-form.js') }}"></script>
@endsection