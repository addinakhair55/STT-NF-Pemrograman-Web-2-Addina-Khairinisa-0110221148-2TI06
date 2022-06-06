<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <h3 class="col-md-12">Detail Mata Kuliah</h3>
    <div class="col-md-12">
    <table style="text-align: center;" border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Dosen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $matakuliah -> id ?></td>
                <td><?php echo $matakuliah -> nama ?></td> 
                <td><?php echo $matakuliah -> sks ?></td>              
                <td><?php echo $matakuliah -> kode ?></td>
                <td><?php echo $matakuliah -> dosen ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?= base_url() ?>uploads/photos/<?=$matakuliah->id?>.jpg"
                    width="300" alt="">
                    <div class="mt-5">
                        <h4><?=$matakuliah->nama?></h4>
                        <p>Foto Mata Kuliah</p>
                        <!-- <?php echo $error;?> -->
                        <br>
                        <a href="https://www.instagram.com/addina.ak/"><button class="btn btn-outline-primary">Instagram</button></a> 
            
                        <?php echo form_open_multipart("matakuliah/upload"); ?>
                            <input type="file" name="foto" size="300"/>
                            <input type="hidden" name="idmatakuliah" value="<?=$matakuliah->id?>"/>
                            <input type="submit" value="Upload Foto" class="btn btn-outline-info"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> 
</body>
</html>