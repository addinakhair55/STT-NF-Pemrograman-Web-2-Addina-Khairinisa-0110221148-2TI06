<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#">
            <img src="nilai.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Sistem Penilaian
        </a>
    </nav>
    <nav class="navbar navbar-light bg-light border-bottom shadow-sm">
        <a class="navbar-brand" href="#">
            Form Nilai Mahasiswa
        </a>
    </nav>

    <form class="container mt-5"  method="POST" action="nilai_siswa.php">
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

    <footer class="footer mt-5 py-2 bg-dark">
    <div class="footer m-2">
        <span class="text-white">@2022 - Addina Khairinisa_0110221148_2TI06</span>
    </div>
    </footer>
</body>
</html>