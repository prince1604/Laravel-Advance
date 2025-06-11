<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🚀 Laravel-Advance

A Laravel-based advanced CRUD and API-driven application demonstrating modern Laravel development features such as image uploads, authentication, relationships, route model binding, API testing, and more.

---

## 📦 Features

- 🖼️ **Image Uploads** with validation and storage
- 🎨 **Layout Design** with Blade templates and custom layouts
- 💡 **Template-based Layout** using reusable stubs and includes
- 🎁 **Bootstrap, CSS & JS Integration** for modern responsive UI
- 🧩 **Form Validation** with custom rules
- 🛠️ **Migration and Seeding** for database structure and demo data
- 🔒 **Authentication System** (Signup, Login, Validate)
- 🧪 **Maintenance Mode** for safe updates
- ✉️ **Email Integration** using Laravel Mail
- 🧬 **Eloquent Relationships** (One-to-Many, Many-to-Many)
- 📌 **Accessors & Mutators** for model customization
- 🧵 **Fluent Strings** for powerful string manipulation
- 🔗 **Route Model Binding** & Named Routes
- 🔃 **Inline Blade Templates** and clean UI structure
- 🌐 **RESTful API Support**: GET, POST, PUT, DELETE, SEARCH
- 🧪 **API Testing** using VS Code and REST clients like Postman
- 🧰 **API Authentication** using Laravel Sanctum or Passport

---

## 🧾 Folder Structure

```
laravel_advance/
├── app/
├── bootstrap/
├── config/
├── database/
│ ├── factories/
│ ├── migrations/
│ └── seeders/
├── public/
├── resources/
│ └── views/
│ ├── layout/
│ ├── components/
│ └── includes/
├── routes/
│ └── api.php
│ └── web.php
├── storage/
└── tests/
```

---

## 🛠️ Installation Guide

### 🔐 Requirements

- PHP >= 8.1
- Composer
- MySQL / MariaDB
- Node.js and npm (optional for frontend assets)

### 📥 Steps

1. **Clone the repository:**
   ```bash
   git clone https://github.com/prince1604/Laravel-Advance.git
   cd laravel-Advance

    ```
2. Install dependencies:

   ```bash
   composer install
   ```
3. Create a .env file:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Set up database in .env:

   ```bash
    DB_DATABASE=your_database
    DB_USERNAME=root
    DB_PASSWORD=
   ```
5. Run database migrations and seeders:

   ```
   php artisan migrate --seed

   ```
6. Start the development server:
   ```
   php artisan serve
   ```
---

## 🎨 Frontend UI

    Blade templating engine with layout inheritance

    Bootstrap 5 integration

    Responsive design

    Custom inline components

    Image upload with preview

    Custom error pages and alerts

## 🔁 Maintenance Mode
    Enable:
    
php artisan down

    
    Disable:
    
php artisan up

## 🔐 Authentication APIs

✅ Signup

POST /api/signup

✅ Login

POST /api/login

✅ Validate Auth








