# 🧾 Sistem Inventory Mini

**Sistem Inventory Mini** adalah aplikasi web sederhana untuk mengelola data **barang (products)** dan **kategori (categories)**, serta manajemen **user dan role (Admin & Staff)**.  
Project ini dibangun menggunakan **Laravel + Livewire** dan sudah dilengkapi dengan sistem **Role & Permission** berbasis *Spatie Laravel Permission*.

---

## 🚀 Cara Menjalankan Project

### 1️⃣ Clone Repository
bash
git clone https://github.com/username/sistem-inventory.git
cd sistem-inventory
###2️⃣ Install Dependency PHP & JS
bash
Copy code
composer install
npm install
###3️⃣ Sesuaikan Konfigurasi Database
Edit file .env sesuai kebutuhan:

env
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sistem_inventory
DB_USERNAME=root
DB_PASSWORD=
###4️⃣ Jalankan Migrasi & Seeder
bash
Copy code
php artisan migrate --seed
Perintah ini akan otomatis membuat:

Role: Admin dan Staff

Permission untuk setiap modul (products, categories, users, roles)

Akun login sample

###5️⃣ Jalankan Aplikasi
bash
Copy code
php artisan serve
npm run dev
🧰 Stack & Library yang Digunakan
Kategori	Teknologi
Framework	Laravel 11
Frontend	Livewire 3, Vite, TailwindCSS
Authentication	Laravel Fortify
Authorization	Spatie Laravel Permission
UI Components	Flux UI (Blade Components)
Database	MySQL / SQLite
Icons & Styling	Heroicons, Tailwind Dark Mode
Development Tools	PHP 8+, Node.js 20+, Composer 2+

👤 Akun Sample Login
Role	Email	Password	Akses
Admin	admin@hotmail.com	password	CRUD semua modul
Staff	staff@hotmail.com	password	View-only

🧩 Fitur Utama
CRUD Products dan Categories

Manajemen User & Role dengan permission granular

Autentikasi & Proteksi Route berbasis Fortify

Tampilan Responsive menggunakan TailwindCSS

Dark Mode Ready

Live Update menggunakan Livewire
