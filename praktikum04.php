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
            <h1>Praktikum 04</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="praktikum01.php">Home</a></li>
              <li class="breadcrumb-item"><a href="praktikum01.php">Sesi Praktikum</a></li>
              <li class="breadcrumb-item active">Praktikum 04</li>
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
                <h3 class="card-title">OOP Lingkaran</h3>

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
                // membuat class lingkaran
                class Lingkaran{
                    // buat property
                    private $jari;
                    const PHI = 3.14;

                    // method
                    function __construct($r)
                    {
                        $this->jari = $r;
                    }

                    // buat method getluas untuk menghitung luas lingkaran
                    function getluas(){
                        return self::PHI * $this->jari * $this->jari;
                    }

                    // buat method getkeliling untuk menghitung keliling lingkaran
                    function getkeliling(){
                        return 2 * self::PHI * $this->jari;
                    }
                }
              ?>

              <?php
              //  memanggil file atau class_lingkaran.php
              // require_once 'class_lingkaran.php';
              echo "Nilai PHI adalah = " . Lingkaran::PHI;
              $lingkar1 = new Lingkaran(10);
              $lingkar2 = new Lingkaran(4);
              echo "<br>";

              // menghitung luas lingkaran menggunakan fungsi getluas
              echo "<br> Luas lingkaran I adalah = " .$lingkar1->getluas();
              echo "<br> Luas lingkaran II adalah = " .$lingkar2->getluas();
              echo "<br>";

              // menghitung keliling lingkaran menggunakan fungsi getkeliling
              echo "<br> Keliling lingkaran I adalah = " .$lingkar1->getkeliling();
              echo "<br> Keliling lingkaran II adalah = " .$lingkar2->getkeliling();
              ?>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                OOP Lingkaran
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
                <h3 class="card-title">Form Nilai Mahasiswa</h3>

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
                  // buat class nilai mahasiswa
                  class NilaiMahasiswa{
                      // buat property
                      public $nim;
                      public $matkul;
                      public $nilai;
                      // buat method atau function construct, hitung nilai, predikat, grade
                      function __construct($nim, $matkul, $nilai)
                      {
                          // fungsi this-> memanggil properti dari method lain atau di luar function
                          $this->nim = $nim;
                          $this->matkul = $matkul;
                          $this->nilai = $nilai;
                      }

                      function hitungNilai(){
                          return $this->nilai;
                      }
                      
                      function kelulusan($keterangan){
                          if($keterangan > 55){
                              return 'Anda Lulus';
                          }else{
                              return 'Anda Tidak Lulus';
                          };
                      }
                      function grade($keterangan){
                          if($keterangan >= 85 && $keterangan == 100){
                              return 'A';
                          }else if($keterangan >=70 && $keterangan <= 84){
                              return 'B';
                          }else if($keterangan >=56 && $keterangan <= 69){
                              return 'C';
                          }else if($keterangan >=36 && $keterangan <= 55){
                              return 'D';
                          }else if($keterangan >=10 && $keterangan <= 35){
                              return 'E';
                          }else{
                              return 'I';
                          }
                      }
                  }
                ?>

                      <form method="POST" action="praktikum04.php">
                        <div class="form-group row">
                          <label for="nim" class="col-4 col-form-label">NIM</label> 
                          <div class="col-8">
                            <input id="nim" name="nim" placeholder="Masukkan NIM Anda" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                          <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select">
                              <option value="DDP">Dasar - Dasar Pemrograman</option>
                              <option value="WEB">Pemrograman Web</option>
                              <option value="BASDAT">Basis Data</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                          <div class="col-8">
                            <input id="nilai" name="nilai" placeholder="Masukkan Nilai Anda" type="text" class="form-control">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <div class="offset-4 col-8">
                            <button name="submit" type="submit" value="Simpan" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                        </div>
                      </form>
                      <hr>
                      <div class="ml-3">
                      <?php
                      if($_POST){
                          $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
                          $keterangan = $ns->hitungNilai();
                          $hasil = $ns->kelulusan($keterangan);
                          $hasil2 = $ns->grade($keterangan);
                          echo 'NIM : ' .$ns->nim;
                          echo '<br>Mata Kuliah : ' .$ns->matkul;
                          echo '<br>Nilai : ' .$ns->nilai;
                          echo '<br>Status : ' .$ns->kelulusan($keterangan);
                          echo '<br>Grade : ' .$ns->grade($keterangan);
                      }
                      ?>
                      </div>
  
                      
          
              <!-- /.card-body -->
              <div class="card-footer">
                Form Nilai Mahasiswa
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
                <h3 class="card-title">OOP Manusia</h3>

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
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                OOP Manusia
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
                <h3 class="card-title">OOP Persegi Panjang</h3>

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
                // membuat class persegi panjang
                class PersegiPanjang{
                    private $panjang;
                    private $lebar;

                    function luasp(){
                        $luas = $this->panjang * $this->lebar;
                        return "Luas Persegi Panjang : " .$luas;
                    }
                    function kelilingp(){
                        $keliling = 2 * ($this->panjang + $this->lebar);
                        return "Keliling Persegi Panjang : " .$keliling;
                    }

                    function getlebar($lebar){
                        return $this->lebar = $lebar;
                    }
                    
                    function getpanjang($panjang){
                        return $this->panjang = $panjang;
                    }
                }
              ?>

              <?php
                //  memanggil file atau class_persegiPanjang.php
                // require_once 'class_persegiPanjang.php';
                $LuasPersegi = new PersegiPanjang();
                echo "Diketahui";
                echo "<br>";
                echo "Panjang Persegi Panjang : " .$LuasPersegi->getpanjang(10) ." " ."cm";
                echo "<br>";
                echo "Lebar Persegi Panjang : " .$LuasPersegi->getlebar(5) ." " ."cm";
                echo "<hr>";
                echo "Hasilnya adalah";
                echo "<br>";
                echo $LuasPersegi->luasp() ." " ."cm";
                echo "<br>";
                echo $LuasPersegi->kelilingp() ." " ."cm";
              ?>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                OOP Persegi Panjang
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