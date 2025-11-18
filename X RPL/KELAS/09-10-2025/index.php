belajar PHP
<h1>Belajar PHP</h1>

<?php


$nama = "Yemima Oktavia Satoko";
$kelas = "12";
$umur = "15";
$alamat = "Perum Auri Jln. Capung No 120";
$hobi = "nyanyi";
$cita_cita = "sukses";
$enter = "<br/>";
?>

<?php
echo $nama;
echo $enter;

echo $kelas;
echo $enter;

echo $umur;
echo $enter;

echo $alamat;
echo $enter;

echo $hobi;
echo $enter;

echo $cita_cita;
echo $enter;
?>

<?php
echo "<h1>Saya Belajar PHP</h1>";
echo "Saya Kelas 12 :"; 
?>

<?php
echo "<h1>Nama: Yemima Oktavia Satoko</h1>";
echo "<br/>";
echo "Kelas: X RPL";
echo "<br/>";
echo "Umur: 15 Tahun";
echo "<br/>";
echo "Alamat: Perum Auri Jln. Capung No 120";
echo "<br/>";
echo "Hobi: menyanyi";
echo "<br/>";
echo "Cita-cita: orang sukses dan makmur";
echo "<br/>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Web Yemima O S</title>
</head>
<body>
  <div>
    <h1>Identitas</h1>
    <table>
       <tbody>
          <tr>
            <td>Nama: Yemima Oktavia Satoko</td>
            <td><?php $nama ?></td>
          </tr>
          <tr>
            <td>Kelas: 12</td>
            <td><?php $kelas ?></td>
          </tr>
          <tr>
            <td>Umur: 15 Tahun</td>
            <td><?php $umur ?></td>
          </tr>
          <tr>
            <td>Alamat: Perumahan Auri jln capung no. 120, kelurahan lemahputro, kec. sidoarjo, kab. sidoarjo</td>
            <td><?php $alamat ?></td>
          </tr>
          <tr>
            <td>Hobi: menyanyi</td>
            <td><?php $hobi ?></td>
          </tr>
          <tr>
            <td>Cita-cita: pengusaha sukses</td>
            <td><?php $cita_cita ?>  </td>
          </tr>
       </tbody>
    </table>
  </div>
</body>
</html>