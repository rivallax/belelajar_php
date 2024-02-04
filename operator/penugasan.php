<!-- Operator Penugasan PHP
Operator penugasan PHP digunakan dengan nilai numerik untuk menulis nilai ke variabel.

Operator penugasan dasar di PHP adalah "=". Artinya operan kiri disetel ke nilai ekspresi penugasan di sebelah kanan. -->

<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;  
echo $x;

// += (tambah) Operator penugasan
$x = 20;  
$x += 100;

echo $x;

// -= (kurang) Operator penugasan
$x = 50;
$x -= 30;

echo $x;

// *= (kali) Operator penugasan
$x = 5;
$x *= 6;

echo $x;

// /= (bagi) Operator penugasan
$x = 10;
$x /= 5;

echo $x;

// %= (modulus) Operator penugasan
$x = 15;
$x %= 4;

echo $x;


?>  

</body>
</html>

