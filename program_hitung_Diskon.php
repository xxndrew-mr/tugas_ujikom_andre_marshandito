<?php
function hitungDiskon($total_belanja) {
    // Menentukan diskon berdasarkan total belanja
    if ($total_belanja >= 100000) {
        return 0.10; 
    } elseif ($total_belanja >= 50000) {
        return 0.05; 
    } else {
        return 0.0;
    }
}

function tampilkanHasil($total_belanja) {
    // Menghitung diskon
    $diskon_persen = hitungDiskon($total_belanja);
    $jumlah_diskon = $total_belanja * $diskon_persen;
    $total_bayar = $total_belanja - $jumlah_diskon;

    // Menampilkan hasil
    echo "Total Belanja   : Rp " . number_format($total_belanja, 0, ',', '.') . "<br>";
    echo "Diskon (" . ($diskon_persen * 100) . "%)  : Rp " . number_format($jumlah_diskon, 0, ',', '.') . "<br>";
    echo "Total Bayar     : Rp " . number_format($total_bayar, 0, ',', '.') . "<br>";
}

// Contoh penggunaan dengan total belanja Rp 120.000
$total_belanja = 120000;
tampilkanHasil($total_belanja);
?>
