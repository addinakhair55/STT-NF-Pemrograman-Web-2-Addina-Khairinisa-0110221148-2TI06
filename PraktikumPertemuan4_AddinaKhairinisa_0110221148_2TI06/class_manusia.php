<?php
// Membuat class manusia
class Manusia{
    // Buat Property
    var $nama;
    var $warna;
    // buatlag method atau function
    function tampilkan_nama(){
        return '<br>Nama saya adalah Addina Khairinisa';
    }

    function __construct(){
        return 'Kulit saya berwarna sawo matang';
    }
}
// buat objek
$manusia = new Manusia();

echo $manusia -> __construct();
echo $manusia -> tampilkan_nama();


?>