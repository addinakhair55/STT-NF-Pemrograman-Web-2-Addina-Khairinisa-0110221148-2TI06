<?php
include_once "header.php";
include_once "sidebar.php";
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 05</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="praktikum01.php">Home</a></li>
              <li class="breadcrumb-item"><a href="praktikum01.php">Sesi Praktikum</a></li>
              <li class="breadcrumb-item active">Praktikum 05</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Buah</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <?php
                // class buah
                class buah{
                    // buat property
                    public $name;
                    protected $color;
                    private $berat;

                    // buat method
                    public function set_color($c){
                        return $this->color = $c;
                    }
                    public function set_berat($b){
                        return $this->berat = $b;
                    }
                }
                // buat object
                $mangga = new buah();
                echo $mangga -> name = 'Mangga';
                echo "<br>";
                echo $mangga -> set_color('Hijau');
                echo "<br>";
                echo $mangga -> set_berat('300 Kg');

              ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Buah
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Dispenser</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
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
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Dispenser
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fruit</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <?php
                class Fruit{
                    public $name;
                    public $warna;

                    public function __construct($name, $warna)
                    {
                        $this->name = $name;
                        $this->warna = $warna;
                    }

                    public function intro(){
                        echo "<br>Nama aku adalah {$this->name} dan warna aku adalah {$this->warna}";
                    }
                }
                class Strawberry extends Fruit{
                    public function message(){
                        echo "Aku adalah sebuah Strawberry atau Pisang?";
                    }
                }
                $buah = new Strawberry("Strawberry", "Merah");
                $buah->message();
                $buah->intro();
              ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Fruit
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Account Bank</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <a href="PraktikumPertemuan05/Account Bank/hasil_form_accountBank.php">Link Account Bank</a>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Account Bank
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

  </div>
<?php
include_once "footer.php";
?>