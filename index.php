<?php 
//Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
//echo, print
//print_r
//var_dump

//Penulisan Sintaks PHP
/*
1. PHP di dalam HTML
2. HTML di dalam PHP 
*/

//Variable dan Tipe Data 
//Variable
//Tidak boleh di awali dengan angka, tapi boleh mengandung angka
// $nama = "Khoiril";
// echo "Hallo, Nama Saya $nama";

//Operator
/*
1. Aritmatika

2. + - * / %
	$x = 10;
	$y = 20;
	echo $x * $y;

3. Penggabung String / concatenation / concat
	$nama_depan = "Khoiril";
	$nama_belakang = "Abdi";
	echo $nama_depan . " " . $nama_belakang;

4. .(titik)

5. Assigment
	=, +=, -=, *=, /=, %=, .=
	contoh 
		$x = 1;
		$x += 5;
		echo $x;

		$nama = "Khoiril";
		$nama .= " ";
		$nama .= "Abdi";
		echo $nama;

6. Perbandingan
	<, >, <=, >=, ==, !=
	var_dump(1 == "1");

7. Identitas
	===, !==
	var_dump(1 === "1");

8. Logika
	&&, ||, !
	$x = 10;
	var_dump($x < 20 && $x %2 == 0);
	$x = 30;
	var_dump($x < 20 && $x %2 == 0);

	$x = 30;
	var_dump($x < 20 || $x %2 == 0);


*/



$nama = "Khoiril";

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Belajar PHP</title>
 </head>
 <body>
 	<h1>Hello, Selamat Datang <?php echo $nama; ?> </h1>

 	
 </body>
 </html>