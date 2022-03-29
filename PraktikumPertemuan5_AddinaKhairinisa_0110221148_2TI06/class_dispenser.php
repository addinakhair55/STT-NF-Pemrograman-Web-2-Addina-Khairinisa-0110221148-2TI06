<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    const volumeGelas = 250;
    public $namaMinuman;

    public function set_volume($v){     
        return $this->volume = $v;
    }

    public function set_hargaSegelas($hs){     
        return $this->hargaSegelas = $hs;
    }
    
    public function pengurangan($vol){
        $this->volume = $vol - self::volumeGelas;
        echo "Hasil volume bernilai " .$this->volume ." " ."ML";
    }
}

$air = new Dispenser();
echo $air -> namaMinuman = "<b>MINUMAN VIT SEGAR</b>";
echo "<hr>";
echo $air -> set_volume("Volume galonnya adalah 1000 ML");
echo "<br>";
echo $air -> set_hargaSegelas("Harga segelasnya adalah Rp. " .number_format("3000",0,".","."));
echo "<br>";
echo "Addina membeli air 1 gelas yang volumenya " .Dispenser::volumeGelas ." " ."ML";
echo "<br>";
$air->pengurangan(1000);
?>