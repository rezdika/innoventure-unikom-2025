# 🚂 Railway Setup Step by Step

## 1. Daftar Railway
1. Buka https://railway.app
2. Klik "Start a New Project"
3. Login dengan GitHub account
4. Authorize Railway

## 2. Buat MySQL Database
1. Setelah login, klik "New Project"
2. Pilih "Provision MySQL" 
3. Database akan otomatis dibuat dalam beberapa detik

## 3. Dapatkan Database Credentials
1. Klik pada MySQL service yang baru dibuat
2. Klik tab "Variables" atau "Connect"
3. Copy semua credentials:
   - MYSQL_URL (full connection string)
   - MYSQLHOST
   - MYSQLPORT  
   - MYSQLDATABASE
   - MYSQLUSER
   - MYSQLPASSWORD

## 4. Format Credentials
Biasanya seperti ini:
```
MYSQLHOST=containers-us-west-123.railway.app
MYSQLPORT=6543
MYSQLDATABASE=railway
MYSQLUSER=root
MYSQLPASSWORD=abc123xyz789
```

## 5. Set di Vercel Environment Variables
Masuk ke Vercel Dashboard → Settings → Environment Variables

Add satu per satu:
```
DB_CONNECTION = mysql
DB_HOST = containers-us-west-123.railway.app
DB_PORT = 6543
DB_DATABASE = railway
DB_USERNAME = root
DB_PASSWORD = abc123xyz789
```

## 6. Deploy & Test
```bash
vercel --prod
```

## 💰 Credit Info
- $5 gratis per bulan
- Cukup untuk development
- Monitor usage di Railway dashboard