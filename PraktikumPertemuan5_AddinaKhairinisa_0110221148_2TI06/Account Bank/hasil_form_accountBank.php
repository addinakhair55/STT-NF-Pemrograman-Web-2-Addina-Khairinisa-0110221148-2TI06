<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar navbar-light bg-light border-bottom shadow-sm">
    <a class="navbar-brand" href="#">
      <img src="bank.png" width="30" height="30" class="d-inline-block align-top" alt="">
      <b>Bank Indonesia Nurul Fikri</b> 
    </a>
  </nav>
  <nav class="navbar navbar-light alert-primary border-bottom shadow-sm">
        <a class="navbar-brand" href="#">
            Account Bank
        </a>
    </nav>
<form class="container mt-5 mb-5" method="POST" action="form_atm.php">
  <div class="form-group row">
    <label for="norek" class="col-4 col-form-label">No. Rekening :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-500px"></i>
          </div>
        </div> 
        <input id="norek" name="norek" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Nama Customer :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
        </div> 
        <input id="customer" name="customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="saldo" class="col-4 col-form-label">Saldo :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-cc"></i>
          </div>
        </div> 
        <input id="saldo" name="saldo" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
</body>
</html>