# Framework Laravel yang Kuat dan Scalable

Ini adalah fondasi framework Laravel yang dirancang untuk menjadi kuat, aman, dan mudah dikelola. Proyek ini dibangun dengan arsitektur modular dan mengutamakan praktik terbaik dalam pengembangan perangkat lunak.

## Visi Proyek

Tujuan dari proyek ini adalah untuk menyediakan boilerplate standar yang dapat digunakan untuk membangun berbagai jenis aplikasi web dengan cepat tanpa mengorbankan kualitas, keamanan, dan skalabilitas.

## Fitur Utama

- **Arsitektur Modular**: Kode diorganisir ke dalam modul-modul yang independen untuk memisahkan concern dan memudahkan pengembangan.
- **Keamanan Terdepan**: Dilengkapi dengan otentikasi, otorisasi berbasis peran (RBAC), dan perlindungan terhadap serangan umum seperti XSS dan CSRF.
- **Repository & Service Pattern**: Memisahkan logika bisnis dari akses data untuk kode yang lebih bersih dan mudah diuji.
- **Alat Bantu Pengembangan**: Terintegrasi dengan `laravel-ide-helper` untuk autocompletion yang lebih baik dan `php-cs-fixer` untuk menjaga konsistensi gaya penulisan kode.

## Struktur Direktori

```
app/
├── Core/           # Fungsionalitas inti framework (Base classes)
├── Modules/        # Modul-modul fitur aplikasi
├── Services/       # Layanan untuk logika bisnis
├── Repositories/   # Lapisan untuk akses data
└── ...

resources/
├── views/
│   ├── layouts/
│   ├── components/ # Komponen Blade
│   └── modules/    # View untuk setiap modul
└── ...

config/
├── modules.php     # Konfigurasi untuk modul
├── security.php    # Konfigurasi keamanan
└── ...
```

## Memulai Proyek

1.  **Clone Repositori**
    ```bash
    git clone https://github.com/ayahkanz/laravel.git
    cd laravel
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    ```

3.  **Setup Environment**
    - Salin `.env.example` menjadi `.env`.
    - Jalankan `php artisan key:generate`.
    - Konfigurasi koneksi database Anda di file `.env`.

4.  **Jalankan Migrasi Database**
    ```bash
    php artisan migrate
    ```

5.  **Jalankan Aplikasi**
    ```bash
    php artisan serve
    ```

## Kontribusi

Kontribusi dalam bentuk apapun sangat kami hargai. Silakan buat *pull request* atau *issue* di repositori ini.

## Deployment Otomatis (Continuous Deployment)

Proyek ini dapat diatur untuk deployment otomatis ke server produksi (misalnya, VPS dengan aaPanel) menggunakan GitHub Webhooks.

### Cara Kerja

1.  **GitHub Webhooks**: Setiap kali ada `git push` ke repositori ini, GitHub akan mengirimkan sinyal (webhook) ke server Anda.
2.  **aaPanel Git Deployment**: aaPanel memiliki fitur bawaan yang akan mendengarkan webhook ini dan menjalankan skrip deployment yang telah dikonfigurasi.

### Langkah-langkah Konfigurasi (Ringkasan)

1.  **Di aaPanel**:
    *   Tambahkan repositori ini di fitur Git Deployment.
    *   Konfigurasi SSH Key: Tambahkan *public key* SSH dari aaPanel ke *Deploy Keys* di pengaturan repositori GitHub Anda.
    *   Atur Skrip Deployment: Tentukan perintah yang akan dijalankan saat ada pembaruan (misalnya, `git pull`, `composer install`, `php artisan migrate`, `npm install`, `npm run build`).
2.  **Di GitHub**:
    *   Salin Webhook URL dari aaPanel.
    *   Di pengaturan repositori GitHub Anda (`Settings` -> `Webhooks`), tambahkan Webhook URL tersebut dan pilih `Just the push event`.

Dengan konfigurasi ini, setiap `git push` ke cabang utama akan secara otomatis memperbarui kode di server produksi Anda.
