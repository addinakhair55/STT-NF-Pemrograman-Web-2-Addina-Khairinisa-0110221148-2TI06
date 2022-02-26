<?php
$ar_buah =["Pepaya","Mangga","Pisang","Jambu"];
// Cetak buah index ke 2
echo "Ini adalah hasil data buah dalam array";
echo "<br>$ar_buah[2]";

// Cetak jumlah buah
echo "<br>Jumlah buah " .count($ar_buah);
echo "<hr>";
// Cetak seluruh buah
echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

//  Tambahkan data array
$ar_buah[] = "Durian";

// Hapus salah satu buah berdasarkan indexnya
unset($ar_buah[1]);

// ubah buah index ke 2 menjadi manggis
$ar_buah[2] = "Manggis";
echo "<ul>";
foreach ($ar_buah as $k => $v) {
    echo "<li>Buah index ke - $k adalah $v </li>";
}
echo "</il>";
?>