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
            <h1>BMI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="praktikum01.php">Home</a></li>
              <li class="breadcrumb-item"><a href="bmi.php">BMI</a></li>
              <li class="breadcrumb-item active">Form BMI</li>
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
                <h3 class="card-title">Form BMI</h3>
    
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
                </div>
                <div class="container card-body">

                    <?php 
                    class Pasien{
                        public $id;
                        public $kode;
                        public $nama;
                        public $tmpt_lahir;
                        public $tgl_lahir;
                        public $jenis_kelamin;
                        public $email;

                        public function __construct($id, $kode, $nama, $tmpt_lahir, $tgl_lahir, $jenis_kelamin, $email){
                            $this->id = $id;
                            $this->kode = "P" . sprintf('%03d', $this->id);
                            $this->nama = $nama;
                            $this->tmpt_lahir = $tmpt_lahir;
                            $this->tgl_lahir = $tgl_lahir;
                            $this->jenis_kelamin = $jenis_kelamin;
                            $this->email = $email;
                        }
                    }

                    trait Bmi{
                        public $berat_badan;
                        public $tinggi_badan;
                        
                        public function hasilBMI(){
                            return round($this->berat_badan / ($this->tinggi_badan/100)**2, 2);
                        }

                        public function nilai($nilai){
                            if ($nilai <= 18.4){
                                return "Kekurangan Berat Badan";
                            }elseif ($nilai >= 18.5 && $nilai <= 23.9){
                                return "Sehat Normal (Ideal)";
                            }elseif ($nilai >= 24 && $nilai <= 26.9){
                                return "Kelebihan Berat Badan";
                            }elseif ($nilai >= 27 && $nilai <= 29.9){
                                return "Obesitas 1";
                            }elseif ($nilai >= 30){
                                return "Obesitas 2";
                            }
                        }
                    }

                    class BmiPasien extends Pasien{
                        use Bmi;
                        public $bmi;
                        public $tanggal;
                        public $pasien;

                        public function __construct($id, $tanggal, $nama, $tmpt_lahir, $tgl_lahir, $jenis_kelamin, $email, $berat_badan, $tinggi_badan){
                            parent::__construct($id, $tanggal, $nama, $tmpt_lahir, $tgl_lahir, $jenis_kelamin, $email, $berat_badan, $tinggi_badan);
                            $this->berat_badan = $berat_badan;
                            $this->tinggi_badan = $tinggi_badan;
                            $this->tanggal = date("Y-m-d");
                        }
                    }
                    ?>

                    <form  method="POST" action="bmi.php">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label text-right">Nama Lengkap :</label> 
                        <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-user-circle"></i>
                            </div>
                            </div> 
                            <input id="name" name="name" placeholder="Masukkan Nama Anda" type="text" class="form-control" required="required">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi" class="col-4 col-form-label text-right">Tempat Lahir :</label> 
                        <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-location-arrow"></i>
                            </div>
                            </div> 
                            <input id="location" name="location" placeholder="Masukkan Tempat Lahir Anda" type="text" class="form-control" required="required">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-4 col-form-label text-right">Tanggal Lahir :</label> 
                        <div class="col-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calendar"></i>
                            </div>
                            </div> 
                            <input id="tanggalLahir" name="tanggalLahir" placeholder="Masukkan Tanggal Lahir Anda" type="date" class="form-control" required="required">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 text-right">Jenis Kelamin :</label> 
                        <div class="col-6">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Pria" required="required"> 
                            <label for="gender_0" class="custom-control-label">Pria</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Wanita" required="required"> 
                            <label for="gender_1" class="custom-control-label">Wanita</label>
                        </div>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="weight" class="col-4 col-form-label text-right">Berat Badan :</label> 
                        <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-balance-scale"></i>
                            </div>
                            </div> 
                            <input id="weight" name="weight" placeholder="Masukkan Berat Badan Anda" type="number" class="form-control" required="required">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="height" class="col-4 col-form-label text-right">Tinggi Badan :</label> 
                        <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-universal-access"></i>
                            </div>
                            </div> 
                            <input id="height" name="height" placeholder="Masukkan Tinggi Badan Anda" type="number" class="form-control" required="required">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label text-right">Email :</label> 
                        <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </div>
                            </div> 
                            <input id="email" name="email" placeholder="Masukkan Email Anda" type="email" class="form-control" required="required">
                        </div>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-6">
                        <button name="submit" type="submit" class="btn btn-primary">Hitung</button>
                        </div>
                    </div>
                    </form>

                    <hr>

                    <?php
                    error_reporting(0);
                    $pasien = array(
                        1 => array(1, "2022-01-10", "P001", "Ahmad", "Pria", 69.8, 169, 24.7, "Kelebihan Berat Badan"),
                            array(2, "2022-01-10", "P002", "Rina", "Wanita", 55.3, 165, 20.3, "Sehat Normal (Ideal)"),
                            array(3, "2022-01-11", "P003", "Luthfi", "Pria", 45.2, 171, 15.4, "Kekurangan Berat Badan")
                        );

                    $nama = $_POST['name'];
                    $tmpt_lahir = $_POST['location'];
                    $jenis_kelamin = $_POST['gender'];
                    $tgl_lahir = $_POST['tanggalLahir'];
                    $berat_badan = $_POST['weight'];
                    $tinggi_badan = $_POST['height'];
                    $email = $_POST['email'];

                    $psn_baru = new BmiPasien(count($pasien) + 1, $tanggal, $nama, $tmpt_lahir, $tgl_lahir, $jenis_kelamin, $email, $berat_badan, $tinggi_badan);
                    $psn_baru->bmi = $psn_baru->hasilBMI();
                    array_push($pasien, array(
                    $psn_baru->id, 
                    $psn_baru->tanggal, 
                    $psn_baru->kode, 
                    $psn_baru->nama, 
                    $psn_baru->jenis_kelamin, 
                    $psn_baru->berat_badan,
                    $psn_baru->tinggi_badan, 
                    $psn_baru->bmi, 
                    $psn_baru->nilai($psn_baru->bmi)));
                    ?>

                    
                    
                        <table class="container table table-striped table-bordered">
                            <thead class="table table-striped table-dark text-center">
                            </div>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Periksa</th>
                                    <th>Kode Pasien</th>
                                    <th>Nama Pasien</th>
                                    <th>Gender</th>
                                    <th>Berat Badan (Kg)</th>
                                    <th>Tinggi Badan (Cm)</th>
                                    <th>Nilai BMI</th>
                                    <th>Status BMI</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                    foreach($pasien as $obj => $val){
                                        echo "<tr>";
                                            echo "<td>".$val[0]."</td>";
                                            echo "<td>".$val[1]."</td>";
                                            echo "<td>".$val[2]."</td>";
                                            echo "<td>".$val[3]."</td>";
                                            echo "<td>".$val[4]."</td>";
                                            echo "<td>".$val[5]."</td>";
                                            echo "<td>".$val[6]."</td>";
                                            echo "<td>".$val[7]."</td>";
                                            echo "<td>".$val[8]."</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    
                </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    BMI
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