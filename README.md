# UTS_PWEB_242410102053
# Koleksi Resep Kue - UTS PWEB

Website koleksi resep kue yang dibuat menggunakan Laravel untuk memenuhi tugas UTS Pemrograman Web.

## Deskripsi

Platform sederhana untuk menyimpan dan mengelola koleksi resep kue favorit. Website ini memiliki fitur login, dashboard informatif, halaman pengelolaan resep dengan tabel data, dan halaman profile pengguna.

## Fitur Utama

- **Login System**: Form login dengan redirect menggunakan query parameter
- **Dashboard**: Menampilkan statistik resep, kategori, dan informasi resep populer
- **Pengelolaan Resep**: Tabel data resep lengkap dengan statistik kategori dan tingkat kesulitan
- **Profile**: Informasi pengguna lengkap dengan bio dan aktivitas terakhir
- **Responsive Design**: Tampilan optimal di berbagai ukuran layar
- **Modern UI**: Menggunakan Bootstrap 5 dengan gradient dan animasi

## Struktur Project

```
├── app/Http/Controllers/
│   └── PageController.php
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php
│   ├── components/
│   │   ├── navbar.blade.php
│   │   └── footer.blade.php
│   ├── login.blade.php
│   ├── dashboard.blade.php
│   ├── pengelolaan.blade.php
│   └── profile.blade.php
└── routes/
    └── web.php
```

## Data Resep

Project ini menampilkan 6 resep kue:
1. Brownies Kukus - Kue Basah
2. Nastar - Kue Kering
3. Red Velvet Cake - Kue Ulang Tahun
4. Cookies Coklat Chip - Kue Kering
5. Bolu Pandan - Kue Basah
6. Cheese Cake Jepang - Kue Premium
