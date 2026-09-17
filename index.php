<?php
// index.php - Merajut seluruh komponen dan merender tampilan HTML
require_once 'products.php';
require_once 'functions.php';

$totalAset = hitungTotalNilaiStok($products);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Product Information System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        
        /* Pewarnaan baris jika stok kritis (< 3) */
        .stok-kritis {
            background-color: #f8d7da;
            color: #721c24;
            font-weight: bold;
        }
        
        .card-summary {
            background-color: #e2e3e5;
            padding: 15px;
            border-radius: 5px;
            width: fit-content;
        }
    </style>
</head>
<body>

    <h2>Sistem Informasi Produk</h2>

    <div class="card-summary">
        <strong>Total Nilai Aset Gudang:</strong> 
        Rp <?= number_format($totalAset, 0, ',', '.'); ?>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $item): ?>
                <?php $kelasWarna = dapatkanKelasStok($item['stok']); ?>
                <tr class="<?= $kelasWarna; ?>">
                    <td><?= $item['id']; ?></td>
                    <td><?= $item['nama']; ?></td>
                    <td><?= $item['kategori']; ?></td>
                    <td>Rp <?= number_format($item['harga'], 0, ',', '.'); ?></td>
                    <td><?= $item['stok']; ?></td>
                    <td><?= $item['deskripsi']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>