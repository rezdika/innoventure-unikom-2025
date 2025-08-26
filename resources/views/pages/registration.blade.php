@extends('layouts.app')

@section('title', 'Pendaftaran - Innoventure Unikom 2025')
@section('description', 'Daftarkan dirimu sekarang di Innoventure Unikom 2025. Gratis dan terbuka untuk semua mahasiswa Indonesia!')

@section('content')
<!-- Page Header -->
<section class="page-header text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <h1 class="display-4 fw-bold mb-4">
                    <span style="color: #fff;">Pendaftaran</span> <span style="color: #007bff;">Innoventure</span> <span style="color: #007bff;">2025</span>
                </h1>
                <p class="lead">
                    Selamat datang di formulir pendaftaran Innoventure 2025! Ajang kompetisi dan inovasi yang menghadirkan berbagai perlombaan menarik bagi pelajar dan mahasiswa.
                </p>
                <div class="alert alert-info d-inline-block mt-3">
                    <i class="fas fa-calendar me-2"></i>
                    <strong>Periode:</strong> 18 - 30 Agustus 2025
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Registration Form -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <div class="text-center mb-5">
                            <h2 class="mb-3"><span style="color: #000;">Form</span> <span style="color: #007bff;">Pendaftaran</span></h2>
                            <p class="text-muted">Mohon isi formulir ini dengan data yang akurat dan lengkap. Pastikan Anda mengunggah bukti pembayaran sesuai jenis lomba yang dipilih.</p>
                        </div>
                        
                        <!-- Competition Info -->
                        <div class="mb-5">
                            <h4 class="mb-4">
                                <i class="fas fa-trophy me-2" style="color: #007bff;"></i> <span style="color: #000;">Jenis</span> <span style="color: #007bff;">Kegiatan</span>
                            </h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="card border-success">
                                        <div class="card-body">
                                            <h6 class="card-title text-success">💻 Web Development</h6>
                                            <p class="card-text small">SMA/SMK Sederajat (Tim 3-4 orang)</p>
                                            <span class="badge bg-success">🎉 Gratis</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card border-warning">
                                        <div class="card-body">
                                            <h6 class="card-title text-warning">🚩 Capture The Flag (CTF)</h6>
                                            <p class="card-text small">SMA/SMK Sederajat (Individu)</p>
                                            <span class="badge bg-warning">💵 Rp 50.000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card border-info">
                                        <div class="card-body">
                                            <h6 class="card-title text-info">🎨 Sayembara Logo VIZION</h6>
                                            <p class="card-text small">Mahasiswa TI UNIKOM (Individu)</p>
                                            <span class="badge bg-success">🎉 Gratis</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card border-primary">
                                        <div class="card-body">
                                            <h6 class="card-title text-primary">🎮 Mobile Legends Tournament</h6>
                                            <p class="card-text small">SMA/SMK Sederajat (Tim 5+1 cadangan)</p>
                                            <span class="badge bg-warning">💵 Rp 50.000/tim</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form id="registrationForm" action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Personal Information -->
                            <div class="mb-5">
                                <h4 class="mb-4">
                                    <i class="fas fa-user me-2" style="color: #007bff;"></i> <span style="color: #000;">Informasi</span> <span style="color: #007bff;">Pribadi</span>
                                </h4>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="fullName" class="form-label">Nama Lengkap *</label>
                                        <input type="text" class="form-control form-control-lg" id="fullName" name="full_name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email *</label>
                                        <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label">No. WhatsApp *</label>
                                        <input type="tel" class="form-control form-control-lg" id="phone" name="phone" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="studentId" class="form-label">NIM/NISN *</label>
                                        <input type="text" class="form-control form-control-lg" id="studentId" name="student_id" required>
                                    </div>
                                </div>
                            </div>

                            <!-- School/University Information -->
                            <div class="mb-5">
                                <h4 class="mb-4">
                                    <i class="fas fa-school me-2" style="color: #007bff;"></i> <span style="color: #000;">Informasi</span> <span style="color: #007bff;">Sekolah/Universitas</span>
                                </h4>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="institution" class="form-label">Nama Sekolah/Universitas *</label>
                                        <input type="text" class="form-control form-control-lg" id="institution" name="institution" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="level" class="form-label">Jenjang Pendidikan *</label>
                                        <select class="form-select form-select-lg" id="level" name="level" required>
                                            <option value="">Pilih Jenjang</option>
                                            <option value="sma">SMA/Sederajat</option>
                                            <option value="smk">SMK/Sederajat</option>
                                            <option value="mahasiswa">Mahasiswa</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="major" class="form-label">Jurusan/Program Studi *</label>
                                        <input type="text" class="form-control form-control-lg" id="major" name="major" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="grade" class="form-label">Kelas/Semester *</label>
                                        <input type="text" class="form-control form-control-lg" id="grade" name="grade" placeholder="Contoh: XII IPA 1 atau Semester 5" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Competition Category -->
                            <div class="mb-5">
                                <h4 class="mb-4">
                                    <i class="fas fa-trophy me-2" style="color: #007bff;"></i> <span style="color: #000;">Kategori</span> <span style="color: #007bff;">Lomba</span>
                                </h4>
                                
                                <div class="mb-3">
                                    <label for="category" class="form-label">Pilih Kategori *</label>
                                    <select class="form-select form-select-lg" id="category" name="category" required>
                                        <option value="">Pilih Kategori Lomba</option>
                                        <option value="web-dev">💻 Web Development (Gratis)</option>
                                        <option value="ctf">🚩 Capture The Flag / CTF (Rp 50.000)</option>
                                        <option value="logo-design">🎨 Sayembara Desain Logo (Gratis)</option>
                                        <option value="ml-tournament">🎮 Mobile Legends Tournament (Rp 50.000)</option>
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="participationType" class="form-label">Tipe Partisipasi *</label>
                                    <select class="form-select form-select-lg" id="participationType" name="participation_type" required>
                                        <option value="">Pilih Tipe</option>
                                        <option value="individual">Individu</option>
                                        <option value="team">Tim</option>
                                    </select>
                                </div>

                                <!-- Team Information (Hidden by default) -->
                                <div id="teamInfo" style="display: none;">
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle me-2"></i>
                                        <strong>Informasi Tim:</strong> Web Dev (3-4 orang), Mobile Legends (5 pemain + 1 cadangan). Isi data anggota tim di bawah ini.
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="teamName" class="form-label">Nama Tim *</label>
                                        <input type="text" class="form-control form-control-lg" id="teamName" name="team_name">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="teamMembers" class="form-label">Anggota Tim (5-6 orang) *</label>
                                        <textarea class="form-control" id="teamMembers" name="team_members" rows="4" placeholder="Contoh: John Doe (NISN: 123456), Jane Smith (NISN: 789012), dll."></textarea>
                                    </div>
                                </div>
                                
                                <!-- Payment Information -->
                                <div id="paymentInfo" style="display: none;">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-credit-card me-2"></i>
                                        <strong>Informasi Pembayaran:</strong> Kategori ini memerlukan biaya pendaftaran Rp 50.000. Upload bukti pembayaran di bagian dokumen.
                                    </div>
                                </div>
                            </div>

                            <!-- Project Information -->
                            <div class="mb-5">
                                <h4 class="mb-4">
                                    <i class="fas fa-lightbulb me-2" style="color: #007bff;"></i> <span style="color: #000;">Informasi</span> <span style="color: #007bff;">Proyek</span>
                                </h4>
                                
                                <div class="mb-3">
                                    <label for="projectTitle" class="form-label">Judul Proyek/Ide *</label>
                                    <input type="text" class="form-control form-control-lg" id="projectTitle" name="project_title" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="projectDescription" class="form-label">Deskripsi Singkat Proyek *</label>
                                    <textarea class="form-control" id="projectDescription" name="project_description" rows="4" placeholder="Jelaskan ide/proyek Anda dalam 200-300 kata" required></textarea>
                                </div>
                            </div>

                            <!-- File Uploads -->
                            <div class="mb-5">
                                <h4 class="mb-4">
                                    <i class="fas fa-file-upload me-2" style="color: #007bff;"></i> <span style="color: #000;">Upload</span> <span style="color: #007bff;">Dokumen</span>
                                </h4>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="studentCard" class="form-label">Kartu Pelajar/Mahasiswa *</label>
                                        <input type="file" class="form-control form-control-lg" id="studentCard" name="student_card" accept=".jpg,.jpeg,.png,.pdf" required>
                                        <small class="text-muted">Format: JPG, PNG, PDF (Max: 2MB)</small>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="activeStudent" class="form-label">Surat Keterangan Aktif *</label>
                                        <input type="file" class="form-control form-control-lg" id="activeStudent" name="active_student" accept=".jpg,.jpeg,.png,.pdf" required>
                                        <small class="text-muted">Format: JPG, PNG, PDF (Max: 2MB)</small>
                                    </div>
                                </div>
                                
                                <!-- Payment Proof (Hidden by default) -->
                                <div id="paymentProof" style="display: none;">
                                    <div class="mb-3">
                                        <label for="payment" class="form-label">Bukti Pembayaran *</label>
                                        <input type="file" class="form-control form-control-lg" id="payment" name="payment_proof" accept=".jpg,.jpeg,.png,.pdf">
                                        <small class="text-muted">Upload bukti transfer Rp 50.000 (Format: JPG, PNG, PDF - Max: 2MB)</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" name="terms_accepted" value="1" required>
                                    <label class="form-check-label" for="terms">
                                        Saya menyetujui <a href="#" class="text-primary">syarat dan ketentuan</a> yang berlaku *
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter_subscribed" value="1">
                                    <label class="form-check-label" for="newsletter">
                                        Saya ingin menerima update dan informasi terbaru via email
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5 py-3 rounded-pill">
                                    <i class="fas fa-paper-plane me-2"></i> Daftar Sekarang
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Help Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-6 fw-bold mb-3"><span style="color: #000;">Butuh</span> <span style="color: #007bff;">Bantuan?</span></h2>
            <p class="lead text-muted text-center">Tim kami siap membantu proses pendaftaranmu</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <i class="fas fa-envelope text-primary fs-1 mb-3"></i>
                        <h5 class="card-title mb-3">Email Support</h5>
                        <p class="card-text text-muted mb-3">
                            Kirim pertanyaanmu via email dan kami akan merespon dalam 24 jam
                        </p>
                        <a href="mailto:info@innoventure-unikom.ac.id" class="btn btn-outline-primary">
                            <i class="fas fa-envelope me-2"></i> Kirim Email
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <i class="fab fa-whatsapp text-success fs-1 mb-3"></i>
                        <h5 class="card-title mb-3">WhatsApp</h5>
                        <p class="card-text text-muted mb-3">
                            Chat langsung dengan Contact Person kami:<br>
                            📞 MINNOV 1: 081235452002<br>
                            📞 MINNOV 2: 081235452005
                        </p>
                        <div class="d-flex gap-2 justify-content-center">
                            <a href="https://wa.me/6281235452002" class="btn btn-outline-success" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i> MINNOV 1
                            </a>
                            <a href="https://wa.me/6281235452005" class="btn btn-outline-success" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i> MINNOV 2
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <i class="fas fa-question-circle text-info fs-1 mb-3"></i>
                        <h5 class="card-title mb-3">FAQ</h5>
                        <p class="card-text text-muted mb-3">
                            Cek jawaban untuk pertanyaan yang sering diajukan
                        </p>
                        <a href="{{ route('faq') }}" class="btn btn-outline-info">
                            <i class="fas fa-question-circle me-2"></i> Lihat FAQ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('js/registration-form.js') }}"></script>
@endsection