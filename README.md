<div align="center">
<img src="https://www.google.com/search?q=https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%2520SVG/2%2520CMYK/1%2520Full%2520Color/laravel-logolockup-cmyk-red.svg" width="250" alt="Laravel Logo">
<h1><b>Sistem Manajemen Konferensi LONTARA 2025</b></h1>
<p>Aplikasi web komprehensif untuk mengelola seluruh alur kerja konferensi ilmiah dari pendaftaran hingga pasca-acara.</p>

<p>
<a href="#fitur-utama"><strong>Fitur</strong></a> •
<a href="#tumpukan-teknologi"><strong>Teknologi</strong></a> •
<a href="#panduan-instalasi"><strong>Instalasi</strong></a> •
<a href="#lisensi"><strong>Lisensi</strong></a>
</p>

</div>

📖 Tentang Proyek
LONTARA 2025 adalah aplikasi web yang dibangun menggunakan Laravel 11 untuk menyediakan solusi manajemen konferensi yang lengkap. Aplikasi ini dirancang untuk menangani semua kebutuhan, mulai dari halaman pendaftaran yang menarik bagi peserta hingga panel administrasi yang kuat untuk panitia, memastikan alur kerja yang efisien dan pengalaman pengguna yang mulus.

✨ Fitur Utama
Aplikasi ini memiliki fungsionalitas yang kaya, terbagi menjadi dua peran utama: Peserta dan Admin.

👤 Untuk Peserta
👤 Profil Pengguna: Membuat akun, login, dan memperbarui informasi profil pribadi, termasuk foto avatar dengan fitur crop.

** inteligente Alur Pendaftaran Cerdas (Stateful):** Sistem memandu pengguna berdasarkan progres mereka:

📝 Mengisi formulir pendaftaran konferensi.

💳 Mengunggah bukti pembayaran.

✅ Melihat halaman status "Selamat Datang" setelah pembayaran diverifikasi.

📄 Submission Paper: Antarmuka khusus bagi "Presenter" untuk mengunggah makalah/abstrak.

📧 Notifikasi Email: Menerima email otomatis untuk status pembayaran dan status paper.

🌐 Halaman Publik Dinamis: Mengakses informasi terbaru tentang tanggal penting dan keynote speakers.

🛠️ Untuk Admin
📊 Dashboard Dinamis: Panel utama yang menampilkan statistik kunci secara real-time (total peserta, paper masuk, pembayaran menunggu verifikasi).

👥 Manajemen Peserta:

Melihat daftar lengkap semua peserta.

🔍 Pencarian & Filter: Mencari peserta berdasarkan nama/email dan memfilter berdasarkan status pembayaran.

📤 Ekspor ke Excel: Mengunduh data peserta (termasuk hasil filter) ke dalam format .xlsx.

💰 Manajemen Keuangan:

Alur kerja verifikasi pembayaran yang terstruktur: meninjau detail, mencocokkan bukti, lalu Approve atau Reject.

Melihat riwayat semua transaksi pembayaran.

✒️ Manajemen Paper:

Melihat dan mengunduh semua paper yang masuk.

Mengubah status paper (Accepted, Rejected, Revision Needed).

💬 Memberikan Feedback: Menulis catatan revisi/penolakan yang akan otomatis terkirim ke email penulis.

📝 Manajemen Konten (CMS):

Mengubah tanggal-tanggal penting di halaman publik tanpa menyentuh kode.

Mengelola Keynote Speakers (Tambah, Edit, Hapus) yang tampil di halaman depan.

📢 Alat Komunikasi (Email Blaster):

Mengirim email massal ke grup peserta tertentu (misal: semua peserta, hanya presenter, atau yang belum lunas) menggunakan sistem antrian (Queue) untuk performa yang andal.

🚀 Tumpukan Teknologi
Kategori

Teknologi

Backend

Laravel 11, PHP 8.2

Frontend

Blade, Tailwind CSS, Alpine.js

Database

MySQL

Otentikasi

Laravel Breeze

Tools

Maatwebsite/Excel, Intervention/Image, Cropper.js

⚙️ Panduan Instalasi
Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda.

1. Clone Repositori
git clone [URL_REPOSITORI_ANDA]
cd lontara-2025

2. Instal Dependensi
composer install
npm install

3. Konfigurasi Environment
Salin file .env.example menjadi .env.

cp .env.example .env

Buat kunci aplikasi baru.

php artisan key:generate

Atur koneksi database Anda di file .env (DB_DATABASE, DB_USERNAME, DB_PASSWORD).

Atur konfigurasi Mailtrap untuk MAIL_* variables.

Ubah QUEUE_CONNECTION menjadi database.

4. Migrasi & Seeding Database
Penting: Perintah ini akan membuat semua tabel dan mengisi data awal, termasuk akun admin, user dummy, dan pengaturan default.

php artisan migrate:fresh --seed

Akun Admin Default:

Email: admin@lontara.com

Password: password

5. Buat Symbolic Link
Perintah ini penting agar file yang diunggah (foto, paper, dll.) bisa diakses dari web.

php artisan storage:link

6. Kompilasi Aset Frontend
npm run dev

7. Jalankan Server
Buka dua terminal terpisah.

Di terminal pertama, jalankan server pengembangan:

php artisan serve

Di terminal kedua, jalankan worker untuk antrian email:

php artisan queue:work
