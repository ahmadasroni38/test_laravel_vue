<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# ----------------------------------------------------- 

## Persyaratan Pekerjaan - Tes Praktek Laravel 9, Vue 3, dan MySQL

Selamat datang! Kami senang melihat minat Anda untuk bergabung dengan tim kami. Pada tes praktek ini, kami memerlukan Anda untuk membuat proyek sederhana menggunakan Laravel 9 untuk backend, Vue 3 untuk frontend, dan MySQL sebagai database.

### Persyaratan Umum:

1. Paham dasar-dasar Laravel, Vue.js, dan MySQL.
2. Memiliki pengalaman dengan sistem kontrol versi, seperti Git.
3. Mampu menggunakan terminal atau command prompt untuk menjalankan perintah-perintah dasar.
4. Memiliki pengetahuan tentang manajemen dependensi menggunakan Composer dan NPM atau Yarn.
5. Kemampuan pemecahan masalah dan pengambilan keputusan yang baik.

### Tugas:

Anda diminta untuk membuat aplikasi sederhana yang memiliki fitur sebagai berikut:

#### Backend (Laravel 9):

1. Buat model, migrasi, dan _seeder_ untuk entitas "Product" dengan atribut: nama, deskripsi, dan harga.
2. Implementasikan Authentication pada project
3. Implementasikan API CRUD untuk entitas "Product".
4. Buat _endpoint_ API untuk mengambil daftar produk dengan Vue.
5. Buat _endpoint_ API untuk mengirimkan data produk baru dari Vue.
5. Buat _endpoint_ API untuk menghapus data produk baru dari Vue.

#### Frontend (Vue 3):

1. Buat halaman Vue yang dapat mendaftarkan user baru.
2. Buat halaman Vue yang dapat digunakan untuk melakukan proses login. 
1. Buat halaman Vue yang menampilkan daftar produk dari _endpoint_ API backend.
2. Tambahkan formulir Vue untuk menambahkan produk baru dan kirimkan ke backend menggunakan _endpoint_ API.
2. Tambahkan formulir Vue untuk menghapus produk.
3. Buat tata letak dan tampilan yang menarik menggunakan Vue dan Tailwind CSS.

#### Database (MySQL):

1. Desain dan buat tabel "users" untuk menyimpan data users.
1. Desain dan buat tabel "products" untuk menyimpan data produk.

### Langkah-langkah Pengujian:

1. Pastikan aplikasi dapat diakses melalui `http://localhost:8000`.
2. Lihat halaman daftar produk dan pastikan data ditampilkan dengan benar.
3. Tambahkan produk baru melalui formulir dan pastikan data disimpan dengan benar di database.
4. Periksa _endpoint_ API untuk CRUD dan pastikan berfungsi sesuai harapan.

### Kriteria Penilaian:

1. Kode bersih, mudah dibaca, dan diorganisir dengan baik.
2. Fungsionalitas sesuai dengan spesifikasi.
3. Tampilan antarmuka yang menarik dan responsif.
4. Penggunaan Git untuk melakukan _commit_ secara teratur dan informatif.
5. Keterbukaan terhadap pertanyaan atau perubahan yang diajukan oleh tim.

### Cara Pengumpulan:

1. _Fork_ repositori ini ke akun GitHub Anda sendiri.
2. Buat _branch_ baru untuk fitur yang akan Anda kembangkan.
3. Setelah selesai, buat _pull request_ ke repositori asli.
4. Sertakan panduan instalasi dan penggunaan jika diperlukan.

Semoga berhasil, dan kami menantikan hasil kerja Anda!

### Cara Penggunaan : 

1. run install npm <clipboard-copy value="src/index.js">npm install</clipboard-copy>
2. run install composer <clipboard-copy value="src/index.js">composer install</clipboard-copy>
3. run php key <clipboard-copy value="src/index.js">php artisan key:generate</clipboard-copy>
4. run laravel and vue js <clipboard-copy value="src/index.js">npm run all</clipboard-copy>
5. run php migrate <clipboard-copy value="src/index.js">php artisan migrate</clipboard-copy>
6. run php seed<clipboard-copy value="src/index.js">php artisan db:seed</clipboard-copy>