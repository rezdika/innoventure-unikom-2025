# 📋 Cara Copy Railway Credentials

## 1. Di Railway Dashboard

Dari screenshot Anda, saya lihat ada `${{ MYSQL.MYSQL_URL }}`. 

**Yang perlu dilakukan:**

1. **Klik tab "Variables"** (di samping Connect)
2. **Scroll ke bawah** untuk lihat semua variables
3. **Copy 5 values ini:**

```
MYSQLHOST = containers-us-west-xxx.railway.app
MYSQLPORT = 6543
MYSQLDATABASE = railway  
MYSQLUSER = root
MYSQLPASSWORD = abc123xyz789
```

## 2. Set di Vercel Environment Variables

Buka Vercel Dashboard → Settings → Environment Variables

**Add satu per satu:**

| Name | Value |
|------|-------|
| `APP_NAME` | `Innoventure Unikom 2025` |
| `APP_ENV` | `production` |
| `APP_KEY` | `base64:DN8uGcuNmL+emp9GCb2EPzswsPydfejccdSSCsXXB6A=` |
| `APP_DEBUG` | `false` |
| `APP_URL` | `https://your-app.vercel.app` |
| `DB_CONNECTION` | `mysql` |
| `DB_HOST` | `[MYSQLHOST dari Railway]` |
| `DB_PORT` | `[MYSQLPORT dari Railway]` |
| `DB_DATABASE` | `[MYSQLDATABASE dari Railway]` |
| `DB_USERNAME` | `[MYSQLUSER dari Railway]` |
| `DB_PASSWORD` | `[MYSQLPASSWORD dari Railway]` |
| `SESSION_DRIVER` | `cookie` |
| `CACHE_DRIVER` | `array` |

## 3. Cara Cari Variables di Railway

1. **Klik MySQL service** di Railway
2. **Klik tab "Variables"** 
3. **Scroll ke bawah** sampai lihat:
   - MYSQLHOST
   - MYSQLPORT  
   - MYSQLDATABASE
   - MYSQLUSER
   - MYSQLPASSWORD

## 4. Contoh Values

Biasanya seperti ini:
```
MYSQLHOST: containers-us-west-123.railway.app
MYSQLPORT: 6543
MYSQLDATABASE: railway
MYSQLUSER: root
MYSQLPASSWORD: abc123def456ghi789
```