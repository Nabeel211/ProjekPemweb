# Bombakar

![Logo Bombakar](assets/logo/BOMBAKAR..png)

---

## 🌐 Deskripsi Aplikasi
Bombakar adalah situs web interaktif yang memberikan informasi dan layanan terkini terkait pemadam kebakaran. Fitur-fitur yang dihadirkan meliputi:
- **Profil perusahaan** untuk mengenal lebih jauh tentang Bombakar.
- **Artikel dan berita terkini** seputar pemadam kebakaran.
- **Informasi pelatihan** yang dapat dipesan langsung melalui situs.
- **Statistik penting** terkait pemadam kebakaran.
- **Panggilan darurat** melalui tombol telepon yang tersedia.

Selain itu, Bombakar mendukung sistem login, registrasi, pengelolaan profil pengguna, dan transaksi pembayaran untuk layanan yang ditawarkan. Aplikasi ini dirancang dengan antarmuka yang mudah digunakan dan teknologi standar untuk memastikan pengalaman pengguna yang optimal.
Aplikasi ini dibuat menggunakan teknologi standar dan mudah dipahami oleh pengguna. Aplikasi ini dibuat untuk memenuhi tugas Praktikum Pemrogram Web.

---

## 🛠️ Teknologi yang Digunakan
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Tools**: Visual Studio Code, Laragon, Git

---

## 📂 Struktur Proyek
```
Bombakar/
|── app/               # Manajemen logika aplikasi
│   ├── Controllers/    # Mengelola permintaan dan respons
│   ├── Models/         # Mengelola data aplikasi
│   ├── Views/          # Mengatur tampilan aplikasi
├── public/             # File publik aplikasi
│   ├── css/            # Style aplikasi
│   ├── images/         # Gambar aplikasi
│   ├── script/         # Script aplikasi
├── config/             # Konfigurasi database
├── database/           # File SQL
├── assets/             # File tambahan (ikon, gambar)
│   ├── login/          # File halaman login
│   ├── homepage/       # File halaman utama
│   ├── training/       # File halaman pelatihan
│   ├── wireframe/      # Wireframe desain aplikasi
│   ├── logo/           # Logo aplikasi
├── index.php           # Entry point utama aplikasi
├── LICENSE.txt         # Lisensi aplikasi
├── README.md           # Dokumentasi proyek
```

---

## 💻 Cara Install
1. Clone repository ini menggunakan perintah berikut:
   ```bash
   git clone https://github.com/Nabeel211/ProjekPemweb
   ```
2. Pindahkan folder project ke dalam folder `www` di Laragon.
3. Jalankan Apache dan MySQL melalui Laragon.
4. Import database menggunakan phpMyAdmin atau command line:
   ```bash
   mysql -u root -p < database/prakpemweb.sql
   ```
5. Akses aplikasi melalui browser di `http://localhost/Bombakar`.
6. Jika tidak berhasil, coba jalankan server lokal:
   ```bash
   cd public
   php -S localhost:3000
   ```

---

## 🙌 Kontributor
1. **Fina Julianti** - H1D023119 ([fina.julianti@mhs.unsoed.ac.id](mailto:fina.julianti@mhs.unsoed.ac.id))
2. **Nabil Daan** - H1D023100 ([nabil.daan@mhs.unsoed.ac.id](mailto:nabil.daan@mhs.unsoed.ac.id))
3. **Zaim** - H1D023067 ([zaim@mhs.unsoed.ac.id](mailto:zaim@mhs.unsoed.ac.id))

---

## 📧 Hubungi Kami
Jika ada masalah, pertanyaan, atau saran terkait proyek ini, jangan ragu untuk menghubungi salah satu kontributor di atas. Terima kasih telah menggunakan Bombakar! 🔥
