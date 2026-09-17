#  Sistem Informasi Toko Buah (Mini Project 1)

Mata Kuliah:Pemrograman Web  
Nama: Mahzalena Sarita 
NIM:250180055 

---

## I. Deskripsi Proyek
Proyek ini merupakan rancangan arsitektur dan implementasi **Sistem Informasi Toko Buah** berbasis PHP tanpa menggunakan database (MySQL). Sistem ini menerapkan konsep **Arsitektur 3-Lapis (3-Tier Architecture)** yang memisahkan antara penyimpanan data, logika pemrosesan, dan tampilan antarmuka pengguna.

---

## II. Komponen Arsitektur 3-Lapis

Sistem dibangun menggunakan 3 berkas utama sesuai peran lapisannya:

1. **Data Layer (`products.php`)**
    Peran:Bertindak sebagai tempat penyimpanan data utama (*in-memory storage*).
    **Penerapan:** Menggunakan *multidimensional array* PHP yang menyimpan atribut komoditas buah-buahan, yaitu: `id`, `nama`, `kategori`, `harga`, `stok`, dan `deskripsi`.

2. **Processing Layer (`functions.php`)**
    **Peran:** Menangani seluruh logika bisnis dan kalkulasi data.
   **Penerapan:**
     `hitungTotalNilaiStok()`: Menghitung total nilai aset gudang secara otomatis dengan mengalikan `harga` $\times$ `stok` dari seluruh data produk.
      **Logika Stok Kritis:** Memeriksa nilai stok tiap produk. Jika stok kurang dari 3 (`stok < 3`), sistem menandainya agar ditampilkan dengan latar belakang warna merah.

3. **Presentation Layer (`index.php`)**
    **Peran:** Menyajikan antarmuka pengguna (*User Interface*) berupa tabel HTML.
   **Penerapan:** Menggabungkan file `products.php` dan `functions.php` menggunakan perintah `require_once`, lalu merender baris tabel secara dinamis menggunakan perulangan `foreach`.

---

## III. Bukti Tampilan Sistem

![Tampilan Toko Buah](https://raw.githubusercontent.com/mahzalenasarita870-bit/mini_project/main/image.png)

*Keterangan Gambar:*
 **Kalkulasi Otomatis:** Total Nilai Aset Gudang dihitung secara otomatis oleh fungsi pemroses.
 **Penanda Stok Kritis:** Produk dengan stok $< 3$ (seperti Alpukat Mentega dan Mangga Harum Manis) ditandai dengan latar belakang warna merah secara otomatis.
