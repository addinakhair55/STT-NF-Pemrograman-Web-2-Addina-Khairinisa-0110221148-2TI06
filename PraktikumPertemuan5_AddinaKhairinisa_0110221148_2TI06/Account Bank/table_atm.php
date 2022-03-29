<?php
require_once "class_accountBank.php";

$ab1 = new AccountBank("C001", number_format("6000000",0,".","."),"Ahmad");
$ab2 = new AccountBank("C002", number_format("5350000",0,".","."),"Budi");
$ab3 = new AccountBank("C003", number_format("2500000",0,".","."),"Kurniawan");

// $ab1->hasil();
// echo "<hr>";
// $ab2->hasil();
// echo "<br>Rossi transfer uang ke Rooney 1230000<br>";
// echo "Biaya Admin : " .AccountBank::$biaya_admin ."<br>";
// $ab2->transfer($ab1,1230000);

// $ab1->hasil();
// echo "<hr>";
// $ab2->hasil();

$ar_ab = [$ab1,$ab2,$ab3];

$_norek = $_POST['norek'];
$_customer = $_POST['customer'];
$_saldo = $_POST['saldo'];
// $_survey = $_POST['survey'];

$ab4 = new AccountBank($_norek,$_saldo,$_customer);
array_push($ar_ab,$ab4);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Bank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <hr>
    <table class="container table table-striped table-bordered text-center mt-5">
        <thead class="table-dark">
        </div>
            <tr>
                <th>No</th>
                <th>No. Rekening</th>
                <th>Customer</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                foreach($ar_ab as $obj){
                    ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$obj->nomor?></td>
                    <td><?=$obj->customer?></td>
                    <td><?=$obj->getSaldo()?></td>
                </tr>
                <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
    <p class="container">Note : <br> Ahmad nabung Rp. 1000.000 
      <br> Budi tarik uang Rp. 2.500.000</p> <br>
    
    <footer class="footer py-2 bg-light border-top shadow-sm">
      <div class="footer m-2">
          <span class="black">@2022 - Addina Khairinisa_0110221148_2TI06</span>
      </div>
    </footer>
</body>
</html>
<!-- <?php
print_r ($_survey);
?> -->