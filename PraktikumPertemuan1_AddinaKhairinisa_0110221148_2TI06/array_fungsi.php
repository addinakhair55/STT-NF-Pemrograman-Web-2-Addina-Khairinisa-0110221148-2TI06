<?php
$ar_buah = ["p"=>"pepaya","a"=>"apel","m"=>"mangga","j"=>"jambu"];
echo "<ol>";
foreach ($ar_buah as $buah => $v) {
    echo "<li> $buah - $v </li>";
}
echo "</ol>";

// fungsi sort berguna untk mengurutkan array dalam urutan menaik
sort($ar_buah);
echo "<hr>";
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li> $buah - $k </li>";
}
echo "</ol>";

// fungsi arsort berguna untuk mengurutkan array dalam urutan menurun
arsort($ar_buah);
echo "<hr>";
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li> $buah - $k </li>";
}
echo "</ol>";
echo "<hr>";
?>

<?php
$tims = ["erwin","heru","ali","zaki"];
array_pop($tims);
foreach ($tims as $person) {
    echo "$person <br>";
}
echo "<hr>";
?>

<!-- fungsi array push untuk menambahkan nilai ke dalam data array terakhir -->
<?php
$tims = ["erwin","heru","ali","zaki"];
array_push($tims, "Addina");
foreach ($tims as $person) {
    echo "$person <br>";
}
echo "<hr>";
?>

<!-- berfungsi untuk nilai awal dari sebuah data array -->
<?php
$tims = ["erwin","heru","ali","zaki"];
array_shift($tims);
foreach ($tims as $person) {
    echo "$person <br>";
}
echo "<hr>";
?>

<!-- Berguna untuk menambahkan nilai array satu atau data array -->
<?php
$tims = ["erwin","heru","ali","zaki"];
array_unshift($tims, "joko", "wati");
foreach ($tims as $person) {
    echo "$person <br>";
}
echo "<hr>";
?>