<!-- Array menyimpan banyak nilai dalam satu variabel.

Dalam contoh berikut ini $carsadalah sebuah array. Fungsi PHP var_dump() mengembalikan tipe data dan nilai: -->

<!DOCTYPE html>
<html>
<body>

<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "<br>";

$cars = array("Volvo","BMW","Toyota","suzuki");
var_dump($cars);
?>  

</body>
</html>
