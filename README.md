<div align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="250" alt="Laravel Logo">

  <h1><b>Sistem Manajemen Konferensi LONTARA 2025</b></h1>
  <p>
    Aplikasi web komprehensif untuk mengelola seluruh alur kerja konferensi ilmiah <br/>
    mulai dari pendaftaran peserta hingga pasca-acara.
  </p>

  <p>
    <a href="#-fitur-utama"><strong>✨ Fitur</strong></a> •
    <a href="#-tumpukan-teknologi"><strong>🛠️ Teknologi</strong></a> •
    <a href="#-panduan-instalasi"><strong>⚙️ Instalasi</strong></a> •
    <a href="#-lisensi"><strong>📜 Lisensi</strong></a>
  </p>
</div>

---

## 📖 Tentang Proyek

**LONTARA 2025** adalah aplikasi web berbasis **Laravel 11** yang dirancang sebagai solusi **manajemen konferensi ilmiah**.
Sistem ini membantu panitia dan peserta dalam mengelola seluruh alur kegiatan — dari registrasi, pembayaran, submission paper, hingga komunikasi pasca acara.

Fokus utama aplikasi adalah:

* Alur kerja yang **efisien**.
* **User experience** yang mulus.
* Panel administrasi yang **powerful** bagi panitia.

---

## ✨ Fitur Utama

### 👤 Untuk Peserta

* **Profil Pengguna**: Registrasi, login, update profil & upload foto avatar (dengan fitur crop).
* **Alur Pendaftaran Cerdas (Stateful)**:
  📝 Isi formulir → 💳 Upload bukti pembayaran → ✅ Status diverifikasi → 🎉 Halaman selamat datang.
* **Submission Paper**: Upload makalah/abstrak khusus bagi presenter.
* **📧 Notifikasi Email**: Status pembayaran & paper otomatis terkirim via email.
* **🌐 Halaman Publik Dinamis**: Informasi terkini tentang *keynote speakers* & tanggal penting.

---

### 🛠️ Untuk Admin

* **📊 Dashboard Dinamis**: Statistik real-time (jumlah peserta, paper, pembayaran).
* **👥 Manajemen Peserta**:
  🔍 Pencarian & filter status pembayaran.
  📤 Ekspor data peserta ke Excel (.xlsx).
* **💰 Manajemen Keuangan**:
  Verifikasi pembayaran → Approve / Reject → Riwayat transaksi tersimpan.
* **✒️ Manajemen Paper**:
  Mengubah status (Accepted, Rejected, Revision Needed) + feedback via email.
* **📝 CMS Konten**:
  Edit tanggal penting & kelola keynote speakers langsung dari panel admin.
* **📢 Email Blaster**:
  Kirim email massal berdasarkan kategori peserta menggunakan **Queue System** agar performa tetap optimal.

---

## 🚀 Tumpukan Teknologi

| Kategori     | Teknologi                                         |
| ------------ | ------------------------------------------------- |
| **Backend**  | Laravel 11, PHP 8.2                               |
| **Frontend** | Blade, Tailwind CSS, Alpine.js                    |
| **Database** | MySQL                                             |
| **Auth**     | Laravel Breeze                                    |
| **Tools**    | Maatwebsite/Excel, Intervention/Image, Cropper.js |

---

## ⚙️ Panduan Instalasi

### 1️⃣ Clone Repositori

```bash
git clone [URL_REPOSITORI_ANDA]
cd lontara-2025
```

### 2️⃣ Instal Dependensi

```bash
composer install
npm install
```

### 3️⃣ Konfigurasi Environment

```bash
cp .env.example .env
php artisan key:generate
```

* Atur `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`.
* Konfigurasi **Mailtrap** (`MAIL_*` variables).
* Ubah `QUEUE_CONNECTION=database`.

### 4️⃣ Migrasi & Seeding Database

> Perintah ini akan membuat tabel + data awal (akun admin, user dummy, pengaturan default).

```bash
php artisan migrate:fresh --seed
```

**Akun Admin Default**

* Email: `admin@lontara.com`
* Password: `password`

### 5️⃣ Buat Symbolic Link

```bash
php artisan storage:link
```

### 6️⃣ Kompilasi Aset Frontend

```bash
npm run dev
```

### 7️⃣ Jalankan Server

Terminal 1 (server dev):

```bash
php artisan serve
```

Terminal 2 (queue worker untuk email):

```bash
php artisan queue:work
```

---

## 📜 Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

---
