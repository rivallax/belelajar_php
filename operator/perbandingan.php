<!-- Operator Perbandingan PHP
Operator perbandingan PHP digunakan untuk membandingkan dua nilai (angka atau string): -->

<!DOCTYPE html>
<html>
<body>

<?php
// equal == (sama dengan)
$x = 50;  
$y = "50";
echo "<tr>"; 

var_dump($x == $y);
// menegambalikan true karena milai x sama dengan y

// identical === (identik)
$x = 200;  
$y = "200";

var_dump($x === $y);
echo "<tr>"; 
// menegambalikan false karena x bukan milai y

// not equal != (tidak sama dengan)
$x = 100;  
$y = "100";

var_dump($x != $y);
echo "<tr>"; 
// mengembalikan nilai false karena nilai sama

// not equal <> (tidak sama dengan)
$x = 50;  
$y = "100";

var_dump($x <> $y);
echo "<tr>"; 
// mengembalikan nilai true karena nilai beda

// not identical !== (tidak identik)
$x = 100;  
$y = "100";

var_dump($x !== $y);
echo "<tr>"; 
// mengembalikan nilai true karena nilai beda,atau keduanya tidak sama

// greater than > (lebih besar dari)
$x = 400;
$y = 50;

var_dump($x > $y);
echo "<tr>"; 
// mengembalikan nilai true karena x lebih besar dari y

// less than < (kurang dari)
$x = 10;
$y = 50;

var_dump($x < $y);
echo "<tr>"; 
// mengembalikan nilai true karena x kurang dari y



// greater than or equal >= (lebih besar dari atau sama dengan)
$x = 100;
$y = 50;

var_dump($x >= $y);
echo "<tr>"; 
// mengembalikan nilai true karena x lebih besar dari y atau sama dengan y



// less than or equal <= (kurang dari atau sama dengan)
$x = 50;
$y = 80;
echo "<tr>"; 

var_dump($x <= $y);
// mengembalikan nilai true karena x kurang dari y atau sama dengan y

?>  

</body>
</html>
