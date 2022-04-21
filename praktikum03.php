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
            <h1>Praktikum 03</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="praktikum01.php">Home</a></li>
              <li class="breadcrumb-item"><a href="praktikum01.php">Sesi Praktikum</a></li>
              <li class="breadcrumb-item active">Praktikum 03</li>
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
                <h3 class="card-title">SASS - STTNF</h3>

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
                <a href="PraktikumPertemuan03/Tugas_startbootstrap-sb-admin-gh-pages/tampil.php">Link SASS - STTNF</a>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                SASS - STTNF
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
                <h3 class="card-title">Sistem Penilaian | LibFungsi</h3>

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
              <form class="container mt-2"  method="POST" action="praktikum03.php">
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
                        <option value="PEMWEB">Pemrograman Web</option>
                        <option value="SO">Sistem Operasi</option>
                        <option value="BASDAT">Basis Data</option>
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

                <?php
                error_reporting(0);
                    //ngambil reques data yang kita input
                    $proses = $_POST['proses'];
                    $nama_siswa = $_POST['name'];
                    $mata_kuliah = $_POST['matkul'];
                    $uts = $_POST['nilai_uts'];
                    $uas = $_POST['nilai_uas'];
                    $tugas = $_POST['nilai_tugas'];
                    $total = $uts + $uas + $tugas;
                    $_nilai = $total/3;
                    $hasil_ujian = kelulusan($_nilai);
                    $peringkat = grade($_nilai);

                    //Menampilkan data yang telah kita ambil
                    echo "Nama : $nama_siswa";
                    echo "<br/>Mata Kuliah : $mata_kuliah";
                    echo "<br/>Nilai UTS : $uts";
                    echo "<br/>Nilai UAS : $uas";
                    echo "<br/>Nilai Tugas : $tugas";
                    echo "<br/>Grade : $peringkat";
                    echo "<br/>Keterangan : <b>$hasil_ujian</b>";
                    echo "<br/>Data telah di $proses";
                ?>

                <?php
                error_reporting(0);
                    function kelulusan($_nilai){
                        if ($_nilai > 55){
                            return 'Anda Lulus';
                        }else{
                            return 'Anda Tidak Lulus';
                        }
                    }
                    function grade($_nilai){
                        if ($_nilai >= 85){
                            return "A";
                        }elseif ($_nilai >= 70){
                            return "B";
                        }elseif ($_nilai >= 56){
                            return "C";
                        }elseif ($_nilai >= 36){
                            return "D";
                        }elseif ($_nilai >= 10){
                            return "E";
                        }else{
                            return "I(Tidak ada nilai)";
                        }
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

  </div>

<?php
include_once "footer.php";
?>