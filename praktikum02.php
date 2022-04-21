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
            <h1>Praktikum 02</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="praktikum01.php">Home</a></li>
              <li class="breadcrumb-item"><a href="praktikum01.php">Sesi Praktikum</a></li>
              <li class="breadcrumb-item active">Praktikum 02</li>
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
                <h3 class="card-title">Belanja Online</h3>

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
              <!-- Mulai -->
                <div class="container-fuild d-flex">
                    <form class="container mt-4 m-2 mb-2" method="POST" action="praktikum02.php">
                    <div class="form-group row">
                        <label for="name" class="col-2 col-form-label">Customer :</label> 
                        <div class="col-7">
                        <input id="name" name="nama" placeholder="Nama Customer" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2">Pilih Produk :</label> 
                        <div class="col-7">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                            <label for="radio_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                            <label for="radio_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                            <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="number" class="col-2 col-form-label">Jumlah :</label> 
                        <div class="col-4">
                        <input id="number" name="jumlah_produk" placeholder="Jumlah" type="text" class="form-control" required="required">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-2 col-7">
                        <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                    </form>
                
                    <div class="col-md-3 mt-4">
                        <ul class="list-group"id="list">
                            <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                            <li class="list-group-item">TV : 4.200.000</li>
                            <li class="list-group-item">Kulkas : 3.100.000</li>
                            <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                            <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
                        </ul>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-between m-4">
                    <?php 
                    error_reporting(0);
                        $proses = $_POST['submit'];
                        $nama_customer = $_POST['nama'];
                        $produk = $_POST['produk'];
                        $jumlah = $_POST['jumlah_produk'];

                        if ($produk == "TV"){
                            $total = $jumlah * 4200000;
                        } elseif($produk == "Kulkas"){
                            $total = $jumlah * 3100000;
                        } elseif($produk == "Mesin Cuci"){
                            $total = $jumlah * 3800000;
                        } else{
                            "Konfirmasi Tidak Benar";
                        }

                        echo "Nama Customer : $nama_customer";
                        echo "<br/>Produk Yang Dipilih : $produk";
                        echo "<br/>Jumlah Produk : $jumlah";
                        echo "<br/>Total Harga : Rp.". number_format($total). "-";
                    ?>
                </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Belanja Online
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
                <h3 class="card-title">If Else</h3>
    
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
                    $teman = "Zaki";

                    if($teman == "febri"){
                        echo "Zaki adalah teman saya";
                    }else{
                        echo "Zaki Bukan teman saya";
                    }
                ?>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                If Else
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
                <h3 class="card-title">Sistem Penilaian</h3>
    
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

                  <!-- Mulai -->
              <form class="container mt-2"  method="POST" action="praktikum02.php">
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label text-right">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Nama Lengkap :</font>
                        </font>
                    </label> 
                    <div class="col-5">
                        <input id="name" name="name" type="text" placeholder="Masukan Nama Anda" required="required" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label text-right">Mata Kuliah :</label> 
                    <div class="col-5">
                    <select id="matkul" name="matkul" class="custom-select" required="required">
                        <option class="text-muted">Memilih</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Sistem Operasi">Sistem Operasi</option>
                        <option value="Basis Data">Basis Data</option>
                    </select>
                    </div>
                </div> 
  
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label text-right">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Nilai UTS :</font>
                        </font>
                    </label> 
                    <div class="col-4">
                        <input id="nilai_uts" name="nilai_uts" type="number" placeholder="Masukan Nilai UTS" required="required" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label text-right">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Nilai UAS :</font>
                        </font>
                    </label> 
                    <div class="col-4">
                        <input id="nilai_uas" name="nilai_uas" type="number" placeholder="Masukan Nilai UAS" required="required" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label text-right">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Nilai Tugas/Praktikum :</font>
                        </font>
                    </label> 
                    <div class="col-4">
                        <input id="nilai_tugas" name="nilai_tugas" type="number" placeholder="Masukan Nilai Tugas/Praktikum" required="required" class="form-control">
                    </div>
                </div> 

                <div class="form-group row">
                    <div class="offset-4 col-5">
                        <button name="proses" value="simpan" type="submit" class="btn btn-info">
                                Submit
                        </button>
                    </div>
                </div>
            </form>
            
            <hr>

            <?php 
                //ngambil reques data yang kita input
                $proses = $_POST['proses'];
                $nama_siswa = $_POST['name'];
                $mata_kuliah = $_POST['matkul'];
                $uts = $_POST['nilai_uts'];
                $uas = $_POST['nilai_uas'];
                $tugas = $_POST['nilai_tugas'];
                $total = $uts + $uas + $tugas;
                $alphabet = $total/3;
                if ($alphabet <= 55){
                    $lulus = "Anda Tidak Lulus";
                }else{
                    $lulus = "Selamat Anda Lulus";
                }
                if ($alphabet >= 85){
                    $grade = "A";
                }elseif ($alphabet >= 70){
                    $grade = "B";
                }elseif ($alphabet >= 56){
                    $grade = "C";
                }elseif ($alphabet >= 36){
                    $grade = "D";
                }elseif ($alphabet >= 10){
                    $grade = "E";
                }else{
                    $grade = "I(Tidak ada nilai)";
                }

                //Menampilkan data yang telah kita ambil
                echo "Nama : $nama_siswa";
                echo "<br/>Mata Kuliah : $mata_kuliah";
                echo "<br/>Nilai UTS : $uts";
                echo "<br/>Nilai UAS : $uas";
                echo "<br/>Nilai Tugas : $tugas";
                echo "<br/> Grade : $grade";
                echo "<br/>Keterangan : <b>$lulus</b>";
                echo "<br/>Data telah di $proses.";
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

</div>
<?php
include_once "footer.php";
?>