# Aplikasi Papan Kanban (Sistem Multimedia Ujian)

Dokumen ini menyediakan langkah-langkah yang diperlukan untuk mengatur dan menjalankan aplikasi CodeIgniter ini secara lokal.

## Requirements

Sebelum memulai, pastikan Anda telah menginstal perangkat berikut di sistem Anda:
* PHP (versi 8.1 atau lebih tinggi, sesuai yang tertera di `composer.json`)
* Composer (manajer dependensi PHP)
* XAMPP 

## Instalasi dan Pengaturan

Ikuti langkah-langkah berikut untuk menyiapkan lingkungan pengembangan Anda:

1.  **Instal Dependensi**:
    Arahkan ke direktori root proyek dan jalankan Composer untuk menginstal paket PHP yang dibutuhkan:
    ```bash
    composer update
    ```
    Perintah ini akan mengunduh dan menginstal dependensi yang didefinisikan dalam file `composer.json` Anda.

2.  **Pengaturan Basis Data**:
    * Buat basis data baru di server MySQL Anda.
    * Impor file SQL `sismul_ujian.sql` yang disediakan ke dalam basis data yang baru dibuat. Basis data harus dinamai `sismul_ujian` agar sesuai dengan konfigurasi default di `app/Config/Database.php`.

3.  **Jalankan Migrasi Basis Data**:
    Eksekusi migrasi basis data CodeIgniter untuk mengatur atau memperbarui skema basis data:
    ```bash
    php spark migrate
    ```
    Perintah ini akan menjalankan file migrasi yang tertunda, seperti `2025-05-07-171129_CreateTaskTable.php`.

4.  **Konfigurasi Lingkungan**:
    * Pastikan file `.env` Anda (jika Anda menggunakannya, jika tidak, periksa `app/Config/App.php` dan `app/Config/Database.php`) telah dikonfigurasi dengan benar dengan kredensial basis data dan URL dasar Anda. Basis data default adalah `sismul_ujian` dengan nama pengguna `root` dan tanpa kata sandi, terhubung ke `localhost`. `baseURL` default adalah `http://localhost/`.

5.  **Jalankan Aplikasi**:
    Mulai server pengembangan CodeIgniter:
    ```bash
    php spark serve
    ```
    Secara default, aplikasi akan dapat diakses di `http://localhost:8080`.
