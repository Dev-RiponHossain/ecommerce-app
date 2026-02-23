# 🛒 Ecommerce App — SSO Multi Login System

A Laravel 12 Ecommerce application with **Single Sign-On (SSO)** integration. Login once and automatically access Foodpanda App!

> ✅ Built with Laravel 12 | PHP 8.2 | MySQL | Tailwind CSS

---

## 🔑 Test Credentials
1. register এ যাবে
2. Account বানাবে
3. SSO test করবে

---

## 📖 How SSO Works

1. User registers and logs in to **Ecommerce App**
2. Clicks **"Auto Login to Foodpanda"** button
3. A secure **64-character random token** is generated
4. Token stored in database with **5 minute expiry**
5. User redirected to Foodpanda with token in URL
6. Foodpanda verifies token → **Auto login!** ✅
7. Token deleted after use (**one-time use only**)

---

## ⚙️ Requirements
- PHP 8.2+
- Composer
- MySQL
- XAMPP / Laragon

---

## 🚀 Installation

### 1. Clone the repository
```bash
git clone https://github.com/Dev-RiponHossain/ecommerce-app.git
cd ecommerce-app
```

### 2. Install dependencies
```bash
composer install
```

### 3. Environment setup
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure .env
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce_db
DB_USERNAME=root
DB_PASSWORD=

FOODPANDA_URL=http://localhost:8001
```

### 5. Create Database
phpMyAdmin এ **ecommerce_db** নামে database তৈরি করো

### 6. Run migrations
```bash
php artisan migrate
```

### 7. Start server
```bash
php artisan serve --port=8000
```

### 8. Visit
```
http://localhost:8000
```

---

## 🔧 Tech Stack
| Technology | Purpose |
|-----------|---------|
| Laravel 12 | Backend Framework |
| PHP 8.2+ | Server Language |
| MySQL | Database |
| Laravel Breeze | Authentication |
| Tailwind CSS | UI Styling |
| Blade | Templating |

---

## 📁 Project Structure
```
ecommerce-app/
├── app/Http/Controllers/
│   ├── SsoController.php      ← SSO Token Generate
│   └── ProfileController.php
├── database/migrations/
│   └── create_sso_tokens_table.php
├── resources/views/
│   └── dashboard.blade.php    ← Dashboard UI
└── routes/
    └── web.php                ← SSO Route
```

---

## 🔐 Security Features
- 64-character cryptographically random tokens
- 5-minute token expiry
- One-time use tokens (deleted after verification)
- Auth middleware protection
