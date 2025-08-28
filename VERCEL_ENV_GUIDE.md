# 🔧 Setting Environment Variables di Vercel

## Cara Set Environment Variables

1. **Buka Vercel Dashboard**
   - Login ke https://vercel.com
   - Pilih project Anda

2. **Masuk ke Settings**
   - Klik tab "Settings"
   - Pilih "Environment Variables"

3. **Add Environment Variables**
   Klik "Add" dan masukkan satu per satu:

## 📋 Environment Variables yang Diperlukan

### Basic Laravel Config
```
APP_NAME = Innoventure Unikom 2025
APP_ENV = production
APP_KEY = base64:DN8uGcuNmL+emp9GCb2EPzswsPydfejccdSSCsXXB6A=
APP_DEBUG = false
APP_URL = https://your-vercel-app-url.vercel.app
```

### Database Config (2 Pilihan)

#### Pilihan 1: Pakai Database Lokal (TIDAK BISA untuk Vercel)
```
❌ TIDAK BISA DIPAKAI DI VERCEL:
DB_CONNECTION = mysql
DB_HOST = 127.0.0.1
DB_PORT = 3306
DB_DATABASE = innoventure_db
DB_USERNAME = root
DB_PASSWORD = 
```

#### Pilihan 2: Pakai PlanetScale (RECOMMENDED)
```
✅ UNTUK VERCEL:
DB_CONNECTION = mysql
DB_HOST = aws.connect.psdb.cloud
DB_PORT = 3306
DB_DATABASE = innoventure-db
DB_USERNAME = [dari PlanetScale]
DB_PASSWORD = [dari PlanetScale]
DB_SSLMODE = require
```

### Session & Cache Config
```
SESSION_DRIVER = cookie
CACHE_DRIVER = array
QUEUE_CONNECTION = sync
LOG_CHANNEL = stderr
```

## 🚨 PENTING!

**Database lokal (127.0.0.1) TIDAK BISA diakses dari Vercel!**

Vercel adalah serverless platform yang berjalan di cloud, jadi tidak bisa connect ke database di komputer lokal Anda.

## 💡 Solusi Database

1. **PlanetScale** (Recommended)
   - Gratis untuk development
   - MySQL compatible
   - Serverless

2. **Railway MySQL**
   - Simple setup
   - Good performance

3. **Aiven MySQL**
   - Free tier available

## 🔄 Workflow Development

1. **Local Development**: Pakai MySQL Laragon
2. **Production (Vercel)**: Pakai PlanetScale

Jadi Anda tetap bisa develop di lokal dengan Laragon, tapi untuk production di Vercel harus pakai database cloud.