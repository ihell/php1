<?php
 // Pertemuan 2 - PHP Dasar
 // Sintaks PHP
 
// variabel dan tipe data
// variabel
// tidak boleh diawali dengan angka, tapi boleh mangandung angka
$nama = "ram";

 // Standar Output
 // echo, print
 // print_r
 // var_dump
//  tag br untuk garis baru
 echo "Ram<br>";

 echo "Halo, Nama Saya $nama<br>";

// logika
// &&, ||, !
// $x = 20;
// var_dump($x < 20 && $x % 2 == 0);

//  perbandingan 
// <, >, <=, >=, ==, !=
var_dump(1 == "1");
echo "<br>";

// identitas
// ===, !==
var_dump(1 === "1");
echo "<br>";

//  oprator
// arimatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y . "<br>";

// assignment
// =, +=, -=, *+, /=, %= , .=
$x = 1;
$x += 5;
echo $x . "<br>";

$nama1 = "Ruka";
$nama1 .= " ";
$nama1 .= "Sarashina";
echo $nama1 . "<br>";


// penggabung string / concatenation / concat
// .
$nama_depan = "Ryo";
$nama_belakang = "Yamada";
echo $nama_depan . " " .  $nama_belakang

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Hallo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragaf"; ?></p>

    <?php
        echo "<h1>Hallo, Selamat Datang Akasaka</h1>"
    ?>
</body>
</html>