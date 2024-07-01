<?php
// Tinggi segitiga
$tinggi = 5;

// Loop untuk setiap baris
for ($baris = 1; $baris <= $tinggi; $baris++) {
    // Loop untuk mencetak spasi
    for ($i = 1; $i <= $tinggi - $baris; $i++) {
        echo "&nbsp;&nbsp;";
    }
    // Loop untuk mencetak karakter *
    for ($j = 1; $j <= (2 * $baris - 1); $j++) {
        echo "*";
    }
    // Pindah ke baris berikutnya
    echo "<br>";
}
?>