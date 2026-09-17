<?php
// functions.php - Menampung fungsi logika bisnis & pengolahan data

// Fungsi mengalkulasi total nilai aset gudang (Harga * Stok)
function hitungTotalNilaiStok($dataProduk) {
    $totalNilai = 0;
    foreach ($dataProduk as $produk) {
        $totalNilai += ($produk['harga'] * $produk['stok']);
    }
    return $totalNilai;
}

// Fungsi menentukan kelas CSS warna baris berdasarkan jumlah stok
function dapatkanKelasStok($stok) {
    if ($stok < 3) {
        return 'stok-kritis'; // Kelas khusus jika stok < 3
    }
    return '';
}