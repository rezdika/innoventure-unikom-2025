# 🚀 Innoventure Unikom 2025

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11.x-red.svg" alt="Laravel Version">
  <img src="https://img.shields.io/badge/PHP-8.2+-blue.svg" alt="PHP Version">
  <img src="https://img.shields.io/badge/Bootstrap-5.3-purple.svg" alt="Bootstrap Version">
  <img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License">
</p>

## 📖 Tentang Project

**Innoventure Unikom 2025** adalah website resmi untuk kompetisi inovasi dan kewirausahaan terbesar di Universitas Komputer Indonesia. Website ini menyediakan informasi lengkap tentang kompetisi, pendaftaran online, dan berbagai fitur pendukung lainnya.

### ✨ Fitur Utama

- 🏠 **Landing Page** - Halaman utama dengan informasi overview
- ℹ️ **Tentang** - Informasi detail tentang Innoventure Unikom 2025
- 🏆 **Kategori Lomba** - 3 kategori kompetisi (Business Plan, Innovation Challenge, Startup Pitch)
- 📅 **Timeline** - Jadwal lengkap dengan countdown timer
- 📝 **Pendaftaran** - Form pendaftaran online yang lengkap
- ❓ **FAQ** - Pertanyaan yang sering diajukan
- 📞 **Kontak** - Informasi kontak dan form pesan

### 🎯 Kategori Kompetisi

1. **Business Plan Competition** - Hadiah Rp 10.000.000
2. **Innovation Challenge** - Hadiah Rp 15.000.000  
3. **Startup Pitch** - Hadiah Rp 12.000.000

## 🛠️ Teknologi yang Digunakan

- **Backend**: Laravel 11.x
- **Frontend**: Bootstrap 5.3, HTML5, CSS3, JavaScript
- **Database**: MySQL
- **Icons**: Font Awesome 6.0
- **Animations**: AOS (Animate On Scroll)
- **Server**: Apache/Nginx

## 📋 Persyaratan Sistem

- PHP >= 8.2
- Composer
- MySQL >= 5.7
- Node.js & NPM (untuk asset compilation)
- Web Server (Apache/Nginx)

## 🚀 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/username/innoventure-unikom-2025.git
cd innoventure-unikom-2025
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Database Configuration
Edit file `.env` dan sesuaikan konfigurasi database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=innoventure_unikom
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Database Migration
```bash
php artisan migrate
```

### 6. Compile Assets
```bash
npm run dev
# atau untuk production
npm run build
```

### 7. Start Development Server
```bash
php artisan serve
```

Website akan dapat diakses di `http://localhost:8000`

## 📁 Struktur Project

```
innoventure/
├── app/
│   └── Http/Controllers/
│       └── HomeController.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── partials/
│       │   ├── header.blade.php
│       │   └── footer.blade.php
│       └── pages/
│           ├── home.blade.php
│           ├── about.blade.php
│           ├── competitions.blade.php
│           ├── timeline.blade.php
│           ├── registration.blade.php
│           ├── faq.blade.php
│           └── contact.blade.php
├── public/
│   └── css/
│       └── custom.css
└── routes/
    └── web.php
```

## 🎨 Fitur UI/UX

- ✅ Responsive Design (Mobile-First)
- ✅ Modern & Clean Interface
- ✅ Smooth Animations
- ✅ Interactive Elements
- ✅ Accessibility Compliant
- ✅ Fast Loading
- ✅ SEO Optimized

## 📱 Responsive Breakpoints

- **Mobile**: < 768px
- **Tablet**: 768px - 1024px
- **Desktop**: > 1024px

## 🔧 Konfigurasi

### Email Configuration
Untuk fitur contact form, konfigurasikan email di `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
```

## 🚀 Deployment

### Production Setup
1. Set environment ke production di `.env`:
```env
APP_ENV=production
APP_DEBUG=false
```

2. Optimize aplikasi:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

3. Set permissions:
```bash
chmod -R 755 storage bootstrap/cache
```

## 📞 Support & Kontak

- **Email**: info@innoventure-unikom.ac.id
- **WhatsApp**: +62 822-5041-1900
- **Website**: [innoventure-unikom.ac.id](http://innoventure-unikom.ac.id)

## 👥 Tim Pengembang

- **Project Manager**: Koordinator Umum
- **Developer**: Tim IT Unikom
- **Designer**: Tim Creative
- **Content**: Tim Content & Media

## 📄 License

Project ini menggunakan [MIT License](https://opensource.org/licenses/MIT).

## 🤝 Contributing

Kontribusi selalu diterima! Silakan buat pull request atau laporkan issue.

---

<p align="center">
  <strong>Innoventure Unikom 2025</strong><br>
  Kompetisi Inovasi & Kewirausahaan Terbesar di Universitas Komputer Indonesia
</p>
