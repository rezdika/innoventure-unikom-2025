# 🚂 Setup Railway MySQL (Gratis)

## 1. Daftar Railway
1. Buka https://railway.app
2. Sign up dengan GitHub
3. Verifikasi email

## 2. Buat MySQL Database
1. Klik "New Project"
2. Pilih "Provision MySQL"
3. Database akan otomatis dibuat

## 3. Dapatkan Connection Details
1. Klik database yang baru dibuat
2. Masuk ke tab "Connect"
3. Copy connection details:

```
MYSQL_URL=mysql://username:password@host:port/database
```

Atau individual values:
```
MYSQLHOST=containers-us-west-xxx.railway.app
MYSQLPORT=6543
MYSQLDATABASE=railway
MYSQLUSER=root
MYSQLPASSWORD=xxx-xxx-xxx
```

## 4. Update Environment Vercel
Set di Vercel Dashboard:
```
DB_CONNECTION=mysql
DB_HOST=containers-us-west-xxx.railway.app
DB_PORT=6543
DB_DATABASE=railway
DB_USERNAME=root
DB_PASSWORD=your-railway-password
```

## 5. Test Connection
Jalankan script test:
```bash
php test-railway-connection.php
```

## 💰 Pricing
- **$5 credit gratis** per bulan
- Cukup untuk development
- Upgrade jika perlu lebih