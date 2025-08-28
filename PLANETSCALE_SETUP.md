# 🌍 Setup PlanetScale Database

## 1. Daftar PlanetScale

1. Buka https://planetscale.com
2. Sign up dengan GitHub/Google
3. Verifikasi email

## 2. Buat Database

1. Klik "Create database"
2. Nama: `innoventure-db`
3. Region: `us-east` (terdekat dengan Vercel)
4. Klik "Create database"

## 3. Buat Branch Main

1. Database akan otomatis membuat branch `main`
2. Klik "Connect" pada branch main
3. Pilih "Laravel" framework
4. Copy connection details

## 4. Connection String Format

PlanetScale akan memberikan:
```
DB_HOST=aws.connect.psdb.cloud
DB_PORT=3306
DB_DATABASE=innoventure-db
DB_USERNAME=xxxxxxxxx
DB_PASSWORD=pscale_pw_xxxxxxxxx
```

## 5. Update Environment

Ganti di `.env.vercel.cloud`:
```env
DB_CONNECTION=mysql
DB_HOST=aws.connect.psdb.cloud
DB_PORT=3306
DB_DATABASE=innoventure-db
DB_USERNAME=your-planetscale-username
DB_PASSWORD=your-planetscale-password
```

## 6. SSL Configuration

Tambahkan ke `config/database.php`:
```php
'mysql' => [
    // ... existing config
    'sslmode' => env('DB_SSLMODE', 'prefer'),
    'options' => extension_loaded('pdo_mysql') ? array_filter([
        PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
    ]) : [],
],
```

## 7. Deploy ke Vercel

Set environment variables di Vercel Dashboard dengan credentials PlanetScale.