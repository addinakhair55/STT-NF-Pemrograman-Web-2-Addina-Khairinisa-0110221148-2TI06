<?php
require_once "class_account.php"

$ac1 = new Account("C001", 5000000);
$ac2 = new Account("C002", 4000000);

$ac1->hasil();
$ac1->deposit(75000);
echo "<br>Menabung 75000<br>";
$ac1->hasil();

?>